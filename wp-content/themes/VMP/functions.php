<?php
/**
 * VMP&trade; Security Portal Theme Functions
 * 
 * @package VMP_Security_Portal
 * @version 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Define theme constants
define('VMP_THEME_VERSION', '1.0.0');
define('VMP_THEME_DIR', get_template_directory());
define('VMP_THEME_URI', get_template_directory_uri());
define('VMP_BACKEND_API', 'https://newton-wordpress-security.vpnmasterpro.com/api/v1');

/**
 * Theme Setup
 */
function vmp_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'vmp-security'),
        'footer' => __('Footer Menu', 'vmp-security'),
    ));
}
add_action('after_setup_theme', 'vmp_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function vmp_enqueue_assets() {
    // Main stylesheet
    wp_enqueue_style('vmp-style', get_stylesheet_uri(), array(), VMP_THEME_VERSION);
    
    // Custom CSS
    wp_enqueue_style('vmp-main', VMP_THEME_URI . '/assets/css/main.css', array(), VMP_THEME_VERSION);
    
    // jQuery (WordPress core)
    wp_enqueue_script('jquery');
    
    // API Client (foundation for all API calls)
    wp_enqueue_script('vmp-api-client', VMP_THEME_URI . '/assets/js/api-client.js', array('jquery'), VMP_THEME_VERSION, true);
    
    // Mega Menu JavaScript
    wp_enqueue_script('vmp-mega-menu', VMP_THEME_URI . '/assets/js/mega-menu.js', array(), VMP_THEME_VERSION, true);
    
    // Sticky Header JavaScript
    wp_enqueue_script('vmp-sticky-header', VMP_THEME_URI . '/assets/js/sticky-header.js', array('jquery'), VMP_THEME_VERSION, true);
    
    // Page-specific scripts
    if (is_page_template('page-login.php')) {
        wp_enqueue_script('vmp-login', VMP_THEME_URI . '/assets/js/login.js', array('jquery', 'vmp-api-client'), VMP_THEME_VERSION, true);
    }
    
    if (is_page_template('page-dashboard.php')) {
        wp_enqueue_script('vmp-dashboard', VMP_THEME_URI . '/assets/js/dashboard.js', array('jquery', 'vmp-api-client'), VMP_THEME_VERSION, true);
    }
    
    // Localize script with PHP data
    wp_localize_script('vmp-api-client', 'vmpConfig', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'backendApi' => VMP_BACKEND_API,
        'nonce' => wp_create_nonce('vmp_security_nonce'),
    ));
    
    // Pass dashboard URL to login script
    wp_localize_script('vmp-login', 'vmpData', array(
        'dashboardUrl' => home_url('/dashboard-page/'),
    ));
    
    // Pass login URL to dashboard script for logout redirect
    wp_localize_script('vmp-dashboard', 'vmpData', array(
        'loginUrl' => home_url('/login-page/'),
    ));
}
add_action('wp_enqueue_scripts', 'vmp_enqueue_assets');

/**
 * Load Helper Classes
 */
require_once VMP_THEME_DIR . '/inc/class-vmp-api-client.php';
require_once VMP_THEME_DIR . '/inc/class-vmp-database.php';
require_once VMP_THEME_DIR . '/inc/class-vmp-auth.php';

/**
 * Note: This theme uses backend PostgreSQL database for all data storage
 * No WordPress database tables are created - WordPress is stateless
 */

/**
 * AJAX Handler: Check if Email Exists (calls backend API)
 */
function vmp_ajax_check_email() {
    // Log that function was called
    error_log('vmp_ajax_check_email called at ' . date('Y-m-d H:i:s'));
    
    // Temporarily skip nonce check for debugging
    // TODO: Re-enable nonce verification after testing
    /*
    if (!check_ajax_referer('vmp_security_nonce', 'nonce', false)) {
        wp_send_json_error(array('message' => 'Security check failed. Please refresh the page.'));
        return;
    }
    */
    
    $email = sanitize_email($_POST['email'] ?? '');
    
    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Invalid email address'));
        return;
    }
    
    $result = VMP_API_Client::check_email($email);
    
    if ($result['success']) {
        wp_send_json_success($result['data']);
    } else {
        wp_send_json_error(array('message' => $result['message'] ?? 'Failed to check email'));
    }
}
add_action('wp_ajax_nopriv_vmp_check_email', 'vmp_ajax_check_email');

// Also register for logged-in users
add_action('wp_ajax_vmp_check_email', 'vmp_ajax_check_email');

/**
 * AJAX Handler: Verify Website URL
 */
function vmp_ajax_verify_website() {
    $email = sanitize_email($_POST['email'] ?? '');
    $website_url = esc_url_raw($_POST['website_url'] ?? '');
    
    if (!is_email($email) || empty($website_url)) {
        wp_send_json_error(array('message' => 'Email and website URL are required'));
        return;
    }
    
    // Get user data from backend
    $result = VMP_API_Client::get_user_data($email);
    
    if (!$result['success']) {
        wp_send_json_error(array('message' => 'Failed to verify website'));
        return;
    }
    
    // Check if this website URL exists for this user
    $websites = $result['data']['websites'] ?? array();
    $found = false;
    
    foreach ($websites as $site) {
        $site_url = $site['site_url'] ?? '';
        // Normalize URLs for comparison (remove trailing slash, www, etc.)
        $normalized_input = trim(strtolower(preg_replace('#^https?://(www\.)?#', '', rtrim($website_url, '/'))));
        $normalized_site = trim(strtolower(preg_replace('#^https?://(www\.)?#', '', rtrim($site_url, '/'))));
        
        if ($normalized_input === $normalized_site) {
            $found = true;
            break;
        }
    }
    
    if ($found) {
        wp_send_json_success(array('message' => 'Website verified successfully'));
    } else {
        wp_send_json_error(array('message' => 'Website not found. Please enter a URL where you have our plugin installed.'));
    }
}
add_action('wp_ajax_nopriv_vmp_verify_website', 'vmp_ajax_verify_website');
add_action('wp_ajax_vmp_verify_website', 'vmp_ajax_verify_website');

/**
 * AJAX Handler: Verify API Key and Website
 */
function vmp_ajax_verify_api_key() {
    check_ajax_referer('vmp_security_nonce', 'nonce');
    
    $api_key = sanitize_text_field($_POST['api_key'] ?? '');
    $website_url = esc_url_raw($_POST['website_url'] ?? '');
    
    if (empty($api_key) || empty($website_url)) {
        wp_send_json_error(array('message' => 'API key and website URL are required'));
    }
    
    $result = VMP_API_Client::verify_api_key($api_key, $website_url);
    
    if ($result['success']) {
        wp_send_json_success($result);
    } else {
        wp_send_json_error($result);
    }
}
add_action('wp_ajax_nopriv_vmp_verify_api_key', 'vmp_ajax_verify_api_key');

/**
 * AJAX Handler: Create New Password (first-time users)
 */
function vmp_ajax_create_password() {
    // Temporarily skip nonce check for debugging
    // check_ajax_referer('vmp_security_nonce', 'nonce');
    
    $email = sanitize_email($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    
    if (!is_email($email) || empty($password)) {
        wp_send_json_error(array('message' => 'Missing required fields'));
        return;
    }
    
    // Create password in backend
    $success = VMP_Database::create_user_password($email, $password);
    
    if ($success) {
        // Update last login timestamp
        VMP_Database::update_last_login($email);
        
        // Log them in
        VMP_Auth::login_user($email);
        wp_send_json_success(array('message' => 'Account created successfully'));
    } else {
        wp_send_json_error(array('message' => 'Failed to create account'));
    }
}
add_action('wp_ajax_nopriv_vmp_create_password', 'vmp_ajax_create_password');
add_action('wp_ajax_vmp_create_password', 'vmp_ajax_create_password');

/**
 * AJAX Handler: Login with Email and Password
 */
function vmp_ajax_login() {
    // Temporarily skip nonce check for debugging
    // check_ajax_referer('vmp_security_nonce', 'nonce');
    
    $email = sanitize_email($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    
    if (!is_email($email) || empty($password)) {
        wp_send_json_error(array('message' => 'Email and password are required'));
        return;
    }
    
    if (VMP_Database::verify_password($email, $password)) {
        // Update last login timestamp
        VMP_Database::update_last_login($email);
        
        VMP_Auth::login_user($email);
        wp_send_json_success(array('message' => 'Login successful'));
    } else {
        wp_send_json_error(array('message' => 'Invalid credentials'));
    }
}
add_action('wp_ajax_nopriv_vmp_login', 'vmp_ajax_login');
add_action('wp_ajax_vmp_login', 'vmp_ajax_login');

/**
 * AJAX Handler: Get Dashboard Data (from backend API)
 */
function vmp_ajax_get_dashboard_data() {
    // Temporarily skip nonce check for debugging
    // check_ajax_referer('vmp_security_nonce', 'nonce');
    
    error_log('vmp_ajax_get_dashboard_data called at ' . date('Y-m-d H:i:s'));
    error_log('Session status: ' . (VMP_Auth::is_logged_in() ? 'Logged in' : 'NOT logged in'));
    
    if (!VMP_Auth::is_logged_in()) {
        error_log('User not authenticated - session check failed');
        wp_send_json_error(array('message' => 'Not authenticated'));
        return;
    }
    
    $email = VMP_Auth::get_current_user_email();
    error_log('Getting dashboard data for email: ' . $email);
    
    if (empty($email)) {
        error_log('Email is empty from session');
        wp_send_json_error(array('message' => 'Session email is missing'));
        return;
    }
    
    // Get all user data from backend
    $result = VMP_API_Client::get_dashboard_data($email);
    
    error_log('Backend API result: ' . print_r($result, true));
    
    if ($result['success']) {
        // Pass the actual data (user, websites, licenses) to the frontend
        wp_send_json_success($result['data']);
    } else {
        wp_send_json_error(array('message' => $result['message'] ?? 'Failed to load dashboard data'));
    }
}
add_action('wp_ajax_vmp_get_dashboard_data', 'vmp_ajax_get_dashboard_data');
add_action('wp_ajax_nopriv_vmp_get_dashboard_data', 'vmp_ajax_get_dashboard_data');

/**
 * AJAX Handler: Logout
 */
function vmp_ajax_logout() {
    // Temporarily skip nonce check for debugging
    // check_ajax_referer('vmp_security_nonce', 'nonce');
    VMP_Auth::logout_user();
    wp_send_json_success(array('message' => 'Logged out successfully'));
}
add_action('wp_ajax_vmp_logout', 'vmp_ajax_logout');
add_action('wp_ajax_nopriv_vmp_logout', 'vmp_ajax_logout');

/**
 * AJAX Handler: Activate License on Website
 */
function vmp_ajax_activate_license() {
    // Skip nonce for now (re-enable later)
    // check_ajax_referer('vmp_security_nonce', 'nonce');
    
    if (!VMP_Auth::is_logged_in()) {
        wp_send_json_error(array('message' => 'Not authenticated'));
        return;
    }
    
    $license_key = sanitize_text_field($_POST['license_key'] ?? '');
    $site_url = sanitize_text_field($_POST['site_url'] ?? '');
    
    if (empty($license_key) || empty($site_url)) {
        wp_send_json_error(array('message' => 'Missing required fields'));
        return;
    }
    
    $email = VMP_Auth::get_current_user_email();
    
    // Call backend activation endpoint
    $result = VMP_API_Client::activate_license($email, $site_url, $license_key);
    
    if ($result['success']) {
        wp_send_json_success(array(
            'message' => 'License activated successfully',
            'license_type' => $result['license_type'],
            'expires_at' => $result['expires_at']
        ));
    } else {
        wp_send_json_error(array(
            'message' => $result['message'] ?? 'License activation failed'
        ));
    }
}
add_action('wp_ajax_vmp_activate_license', 'vmp_ajax_activate_license');

/**
 * AJAX Handler: Deactivate License from Website
 */
function vmp_ajax_deactivate_license() {
    // Skip nonce for now (re-enable later)
    // check_ajax_referer('vmp_security_nonce', 'nonce');
    
    if (!VMP_Auth::is_logged_in()) {
        wp_send_json_error(array('message' => 'Not authenticated'));
        return;
    }
    
    $site_url = sanitize_text_field($_POST['site_url'] ?? '');
    
    if (empty($site_url)) {
        wp_send_json_error(array('message' => 'Missing required fields'));
        return;
    }
    
    $email = VMP_Auth::get_current_user_email();
    
    // Call backend deactivation endpoint
    $result = VMP_API_Client::deactivate_license($email, $site_url);
    
    // Debug logging
    error_log('Deactivate License Debug:');
    error_log('Email: ' . $email);
    error_log('Site URL: ' . $site_url);
    error_log('Result: ' . print_r($result, true));
    
    if ($result['success']) {
        wp_send_json_success(array(
            'message' => 'License deactivated successfully',
            'available_slots' => $result['available_slots'] ?? 0,
            'new_license_key' => $result['new_free_license_key'] ?? ''
        ));
    } else {
        wp_send_json_error(array(
            'message' => $result['message'] ?? 'License deactivation failed'
        ));
    }
}
add_action('wp_ajax_vmp_deactivate_license', 'vmp_ajax_deactivate_license');

/**
 * Redirect to Login if Not Authenticated
 */
function vmp_protect_dashboard() {
    if (is_page_template('page-dashboard.php') && !VMP_Auth::is_logged_in()) {
        $login_page = get_permalink(get_page_by_path('login-page'));
        if ($login_page) {
            wp_redirect($login_page);
            exit;
        }
    }
}
add_action('template_redirect', 'vmp_protect_dashboard');

/**
 * Custom Walker for Mega Menu
 * Detects menu items with 'has-mega-menu' CSS class and renders mega menu
 */
if (!class_exists('VMP_Mega_Menu_Walker')) {
class VMP_Mega_Menu_Walker extends Walker_Nav_Menu {
    
    private $mega_menu_items = array();
    private $current_mega_parent = null;
    
    /**
     * Traverse elements to create list from elements.
     * Display one element if the element doesn't have any children otherwise,
     * display the element and its children.
     */
    public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output) {
        if (!$element) {
            return;
        }
        
        $id_field = $this->db_fields['id'];
        
        // Check if element has children
        if (is_object($args[0])) {
            $args[0]->has_children = isset($children_elements[$element->$id_field]) && !empty($children_elements[$element->$id_field]);
        }
        
        return parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
    
    /**
     * Start level (submenu)
     */
    function start_lvl(&$output, $depth = 0, $args = null) {
        // For mega menu items, collect children instead of outputting
        if ($this->current_mega_parent !== null) {
            return; // Don't output anything, we'll handle it in get_mega_menu_html
        }
        
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }
    
    /**
     * End level (close submenu)
     */
    function end_lvl(&$output, $depth = 0, $args = null) {
        if ($this->current_mega_parent !== null) {
            return;
        }
        $output .= "</ul>\n";
    }
    
    /**
     * Start the element output
     */
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $has_mega_menu = in_array('has-mega-menu', $classes);
        
        // If this is a child of a mega menu parent, store it
        if ($depth > 0 && $this->current_mega_parent !== null) {
            $this->mega_menu_items[$this->current_mega_parent][] = array(
                'item' => $item,
                'depth' => $depth
            );
            return; // Don't output yet
        }
        
        // Build class names
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        
        // Add dropdown class for items with children (but not mega menu items)
        if (isset($args->has_children) && $args->has_children && !$has_mega_menu && $depth === 0) {
            $class_names .= ' dropdown';
        }
        
        // Different class for depth levels
        if ($depth === 0) {
            $class_names = ' class="nav-item ' . esc_attr($class_names) . '"';
        } else {
            $class_names = ' class="' . esc_attr($class_names) . '"';
        }
        
        $output .= '<li' . $class_names . '>';
        
        // Link attributes
        $atts = array();
        $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
        $atts['href'] = !empty($item->url) ? $item->url : '#';
        
        // Different styling for depth levels
        if ($depth === 0) {
            $atts['class'] = 'nav-link fw-semibold';
        } else {
            $atts['class'] = 'dropdown-item';
        }
        
        // Add ID for mega menu toggle
        if ($has_mega_menu && $depth === 0) {
            $atts['id'] = 'megaMenuToggle-' . $item->ID;
            $atts['data-mega-menu'] = 'true';
            $this->current_mega_parent = $item->ID;
            $this->mega_menu_items[$item->ID] = array();
        }
        
        // Add dropdown toggle attributes for items with children (but not mega menu)
        if ($depth === 0 && !$has_mega_menu && isset($args->has_children) && $args->has_children) {
            $atts['class'] .= ' dropdown-toggle';
            $atts['data-bs-toggle'] = 'dropdown';
            $atts['role'] = 'button';
            $atts['aria-expanded'] = 'false';
        }
        
        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);
        
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        
        // Build link output
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        
        // Add dropdown arrow for items with children at depth 0
        if ($depth === 0 && ($has_mega_menu || (isset($args->has_children) && $args->has_children))) {
            $item_output .= ' <svg width="10" height="10" fill="currentColor" viewBox="0 0 16 16" style="margin-left: 4px;">';
            $item_output .= '<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>';
            $item_output .= '</svg>';
        }
        
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        // Add mega menu dropdown HTML for items with has-mega-menu class (only at depth 0)
        if ($has_mega_menu && $depth === 0) {
            $item_output .= $this->get_mega_menu_html($item);
        }
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    
    /**
     * End the element output
     */
    function end_el(&$output, $item, $depth = 0, $args = null) {
        // Reset current mega parent after processing
        if ($depth === 0 && $this->current_mega_parent === $item->ID) {
            $this->current_mega_parent = null;
        }
        
        // Skip closing tag for mega menu children (they're not opened)
        if ($depth > 0 && isset($this->mega_menu_items[$item->menu_item_parent])) {
            return;
        }
        
        $output .= "</li>\n";
    }
    
    /**
     * Get the mega menu HTML structure
     * Loads custom template if available, otherwise uses dynamic child menu items
     */
    private function get_mega_menu_html($parent_item) {
        $menu_slug = sanitize_title($parent_item->title);
        $menu_id = $parent_item->ID;
        
        // Check for custom template files (in order of priority)
        $template_paths = array(
            VMP_THEME_DIR . '/mega-menu/mega-menu-' . $menu_id . '.php',      // By ID: mega-menu-123.php
            VMP_THEME_DIR . '/mega-menu/mega-menu-' . $menu_slug . '.php',    // By slug: mega-menu-services.php
            VMP_THEME_DIR . '/mega-menu/default.php'                          // Default template
        );
        
        foreach ($template_paths as $template) {
            if (file_exists($template)) {
                ob_start();
                include $template;
                return ob_get_clean();
            }
        }
        
        // If no custom template found, generate dynamic mega menu from child items
        return $this->generate_dynamic_mega_menu($parent_item);
    }
    
    /**
     * Generate dynamic mega menu from WordPress menu child items
     */
    private function generate_dynamic_mega_menu($parent_item) {
        $children = isset($this->mega_menu_items[$parent_item->ID]) ? $this->mega_menu_items[$parent_item->ID] : array();
        
        if (empty($children)) {
            return '';
        }
        
        // Organize children into columns (depth 1 = column headers, depth 2 = links)
        $columns = array();
        $current_column = null;
        
        foreach ($children as $child_data) {
            $child = $child_data['item'];
            $depth = $child_data['depth'];
            
            if ($depth == 1) {
                // This is a column header
                $current_column = $child->ID;
                $columns[$current_column] = array(
                    'title' => $child->title,
                    'url' => $child->url,
                    'links' => array()
                );
            } elseif ($depth == 2 && $current_column !== null) {
                // This is a link within a column
                $columns[$current_column]['links'][] = array(
                    'title' => $child->title,
                    'url' => $child->url,
                    'target' => $child->target,
                    'classes' => $child->classes
                );
            }
        }
        
        if (empty($columns)) {
            return '';
        }
        
        // Build the HTML
        ob_start();
        $dropdown_id = 'megaMenuDropdown-' . $parent_item->ID;
        ?>
        <!-- Mega Menu Dropdown -->
        <div class="mega-menu-wrapper" id="<?php echo esc_attr($dropdown_id); ?>" data-parent="<?php echo esc_attr($parent_item->ID); ?>">
            <div class="mega-menu-container">
                <div class="container px-4">
                    <div class="row">
                        <?php 
                        $col_class = 'col-lg-' . (12 / min(count($columns), 4)) . ' col-md-6';
                        foreach ($columns as $column): 
                        ?>
                        <div class="<?php echo esc_attr($col_class); ?> mega-menu-column">
                            <h6><?php echo esc_html($column['title']); ?></h6>
                            <?php if (!empty($column['links'])): ?>
                            <ul class="mega-menu-links">
                                <?php foreach ($column['links'] as $link): ?>
                                <li>
                                    <a href="<?php echo esc_url($link['url']); ?>"
                                       <?php if (!empty($link['target'])): ?>target="<?php echo esc_attr($link['target']); ?>"<?php endif; ?>>
                                        <?php echo esc_html($link['title']); ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
}
} // End class_exists check
