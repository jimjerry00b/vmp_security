<?php
/**
 * VMP Security Portal Theme Functions
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
