<?php
/**
 * VMP Mega Menu Admin
 * Adds custom fields to WordPress menu screen
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class VMP_Mega_Menu_Admin {
    
    /**
     * Instance of this class
     */
    private static $instance = null;
    
    /**
     * Get instance
     */
    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    /**
     * Constructor
     */
    private function __construct() {
        add_action('wp_nav_menu_item_custom_fields', array($this, 'add_custom_fields'), 10, 4);
        add_action('wp_update_nav_menu_item', array($this, 'save_custom_fields'), 10, 2);
        add_filter('manage_nav-menus_columns', array($this, 'add_menu_columns'));
    }
    
    /**
     * Add custom fields to menu items
     */
    public function add_custom_fields($item_id, $item, $depth, $args) {
        // Get saved values
        $mega_menu_enabled = get_post_meta($item_id, '_vmp_mega_menu_enabled', true);
        $mega_menu_columns = get_post_meta($item_id, '_vmp_mega_menu_columns', true);
        $mega_menu_header = get_post_meta($item_id, '_vmp_mega_menu_header', true);
        
        // Default columns
        if (empty($mega_menu_columns)) {
            $mega_menu_columns = 3;
        }
        
        ?>
        <div class="vmp-mega-menu-options" style="margin: 15px 0; padding: 10px; background: #f9f9f9; border-left: 3px solid #2271b1;">
            <p class="description description-wide" style="margin: 0 0 10px 0;">
                <strong style="color: #2271b1;"><?php esc_html_e('Mega Menu Settings', 'vmp-mega-menu'); ?></strong>
            </p>
            
            <?php if ($depth === 0) : ?>
                <!-- Enable Mega Menu (Top-level items only) -->
                <p class="description description-wide" style="margin: 0 0 10px 0;">
                    <label for="vmp-mega-menu-enabled-<?php echo esc_attr($item_id); ?>">
                        <input 
                            type="checkbox" 
                            id="vmp-mega-menu-enabled-<?php echo esc_attr($item_id); ?>" 
                            name="vmp_mega_menu_enabled[<?php echo esc_attr($item_id); ?>]" 
                            value="1" 
                            <?php checked($mega_menu_enabled, '1'); ?>
                            class="vmp-mega-menu-toggle"
                        />
                        <?php esc_html_e('Enable Mega Menu', 'vmp-mega-menu'); ?>
                    </label>
                    <br>
                    <small style="color: #666;"><?php esc_html_e('Convert dropdown to multi-column mega menu', 'vmp-mega-menu'); ?></small>
                </p>
                
                <!-- Column Count -->
                <p class="description description-wide vmp-mega-menu-columns-field" style="margin: 0; <?php echo !$mega_menu_enabled ? 'display:none;' : ''; ?>">
                    <label for="vmp-mega-menu-columns-<?php echo esc_attr($item_id); ?>">
                        <?php esc_html_e('Number of Columns:', 'vmp-mega-menu'); ?>
                        <select 
                            id="vmp-mega-menu-columns-<?php echo esc_attr($item_id); ?>" 
                            name="vmp_mega_menu_columns[<?php echo esc_attr($item_id); ?>]"
                            style="width: 60px;"
                        >
                            <option value="2" <?php selected($mega_menu_columns, '2'); ?>>2</option>
                            <option value="3" <?php selected($mega_menu_columns, '3'); ?>>3</option>
                            <option value="4" <?php selected($mega_menu_columns, '4'); ?>>4</option>
                            <option value="5" <?php selected($mega_menu_columns, '5'); ?>>5</option>
                            <option value="6" <?php selected($mega_menu_columns, '6'); ?>>6</option>
                        </select>
                    </label>
                    <br>
                    <small style="color: #666;"><?php esc_html_e('Choose how many columns to display', 'vmp-mega-menu'); ?></small>
                </p>
            <?php elseif ($depth === 1) : ?>
                <!-- Column Header (Sub-items under mega menu) -->
                <p class="description description-wide" style="margin: 0;">
                    <label for="vmp-mega-menu-header-<?php echo esc_attr($item_id); ?>">
                        <input 
                            type="checkbox" 
                            id="vmp-mega-menu-header-<?php echo esc_attr($item_id); ?>" 
                            name="vmp_mega_menu_header[<?php echo esc_attr($item_id); ?>]" 
                            value="1" 
                            <?php checked($mega_menu_header, '1'); ?>
                        />
                        <?php esc_html_e('Use as Column Header', 'vmp-mega-menu'); ?>
                    </label>
                    <br>
                    <small style="color: #666;"><?php esc_html_e('Makes this item a non-clickable header', 'vmp-mega-menu'); ?></small>
                </p>
            <?php else : ?>
                <!-- Info for deeper levels -->
                <p class="description description-wide" style="margin: 0; color: #666; font-style: italic;">
                    <?php esc_html_e('This item will appear as a link under its parent column.', 'vmp-mega-menu'); ?>
                </p>
            <?php endif; ?>
        </div>
        <?php
    }
    
    /**
     * Save custom fields
     */
    public function save_custom_fields($menu_id, $menu_item_db_id) {
        // Check user capabilities
        if (!current_user_can('edit_theme_options')) {
            return;
        }
        
        // Save mega menu enabled
        if (isset($_POST['vmp_mega_menu_enabled'][$menu_item_db_id])) {
            update_post_meta($menu_item_db_id, '_vmp_mega_menu_enabled', '1');
        } else {
            delete_post_meta($menu_item_db_id, '_vmp_mega_menu_enabled');
        }
        
        // Save column count
        if (isset($_POST['vmp_mega_menu_columns'][$menu_item_db_id])) {
            $columns = intval($_POST['vmp_mega_menu_columns'][$menu_item_db_id]);
            if ($columns >= 2 && $columns <= 6) {
                update_post_meta($menu_item_db_id, '_vmp_mega_menu_columns', $columns);
            }
        }
        
        // Save column header
        if (isset($_POST['vmp_mega_menu_header'][$menu_item_db_id])) {
            update_post_meta($menu_item_db_id, '_vmp_mega_menu_header', '1');
        } else {
            delete_post_meta($menu_item_db_id, '_vmp_mega_menu_header');
        }
    }
    
    /**
     * Add custom columns to nav menu admin
     */
    public function add_menu_columns($columns) {
        $columns['mega-menu'] = __('Mega Menu', 'vmp-mega-menu');
        return $columns;
    }
}
