<?php
/**
 * Plugin Name: VMP Mega Menu
 * Plugin URI: https://vmpsecurity.com
 * Description: Custom mega menu plugin with multi-column dropdowns for VMP theme. Integrates with WordPress menu screen.
 * Version: 1.0.0
 * Author: VMP&trade; Security
 * Author URI: https://vmpsecurity.com
 * License: GPL v2 or later
 * Text Domain: vmp-mega-menu
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('VMP_MEGA_MENU_VERSION', '1.0.0');
define('VMP_MEGA_MENU_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('VMP_MEGA_MENU_PLUGIN_URL', plugin_dir_url(__FILE__));

/**
 * Main VMP Mega Menu Class
 */
class VMP_Mega_Menu {
    
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
        $this->init_hooks();
        $this->includes();
    }
    
    /**
     * Initialize hooks
     */
    private function init_hooks() {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_assets'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_assets'));
    }
    
    /**
     * Include required files
     */
    private function includes() {
        require_once VMP_MEGA_MENU_PLUGIN_DIR . 'includes/class-mega-menu-walker.php';
        require_once VMP_MEGA_MENU_PLUGIN_DIR . 'includes/class-mega-menu-admin.php';
        
        // Initialize admin
        VMP_Mega_Menu_Admin::get_instance();
    }
    
    /**
     * Enqueue frontend assets
     */
    public function enqueue_assets() {
        // Enqueue mega menu CSS
        wp_enqueue_style(
            'vmp-mega-menu',
            VMP_MEGA_MENU_PLUGIN_URL . 'assets/css/mega-menu.css',
            array(),
            VMP_MEGA_MENU_VERSION
        );
        
        // Enqueue mega menu JS
        wp_enqueue_script(
            'vmp-mega-menu',
            VMP_MEGA_MENU_PLUGIN_URL . 'assets/js/mega-menu.js',
            array('jquery'),
            VMP_MEGA_MENU_VERSION,
            true
        );
    }
    
    /**
     * Enqueue admin assets
     */
    public function enqueue_admin_assets($hook) {
        // Only load on menu editing screen
        if ('nav-menus.php' !== $hook) {
            return;
        }
        
        wp_enqueue_style(
            'vmp-mega-menu-admin',
            VMP_MEGA_MENU_PLUGIN_URL . 'assets/css/mega-menu-admin.css',
            array(),
            VMP_MEGA_MENU_VERSION
        );
        
        wp_enqueue_script(
            'vmp-mega-menu-admin',
            VMP_MEGA_MENU_PLUGIN_URL . 'assets/js/mega-menu-admin.js',
            array('jquery'),
            VMP_MEGA_MENU_VERSION,
            true
        );
    }
}

/**
 * Get the Walker class for use in themes
 */
function vmp_get_mega_menu_walker() {
    if (class_exists('VMP_Mega_Menu_Walker')) {
        return new VMP_Mega_Menu_Walker();
    }
    return null;
}

/**
 * Initialize the plugin
 */
function vmp_mega_menu_init() {
    return VMP_Mega_Menu::get_instance();
}

// Initialize plugin
add_action('plugins_loaded', 'vmp_mega_menu_init');
