<?php
/**
 * VMP Authentication Class
 * 
 * Handles user session management (login/logout/auth checks)
 * 
 * @package VMP_Security_Portal
 */

class VMP_Auth {
    
    /**
     * Session key for storing logged-in user email
     */
    const SESSION_KEY = 'vmp_logged_in_user';
    
    /**
     * Initialize session if not started
     */
    private static function init_session() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
    
    /**
     * Check if user is logged in
     * 
     * @return bool
     */
    public static function is_logged_in() {
        self::init_session();
        return isset($_SESSION[self::SESSION_KEY]) && !empty($_SESSION[self::SESSION_KEY]);
    }
    
    /**
     * Get current logged-in user email
     * 
     * @return string|null
     */
    public static function get_current_user_email() {
        self::init_session();
        return $_SESSION[self::SESSION_KEY] ?? null;
    }
    
    /**
     * Login user (set session)
     * 
     * @param string $email User email
     * @return bool
     */
    public static function login_user($email) {
        if (!is_email($email)) {
            return false;
        }
        
        self::init_session();
        $_SESSION[self::SESSION_KEY] = $email;
        
        // Update last login in database
        VMP_Database::update_last_login($email);
        
        return true;
    }
    
    /**
     * Logout user (destroy session)
     * 
     * @return bool
     */
    public static function logout_user() {
        self::init_session();
        
        if (isset($_SESSION[self::SESSION_KEY])) {
            unset($_SESSION[self::SESSION_KEY]);
        }
        
        // Destroy entire session
        session_destroy();
        
        return true;
    }
    
    /**
     * Require authentication (redirect to login if not logged in)
     * 
     * @param string $redirect_url URL to redirect after login
     * @return void
     */
    public static function require_auth($redirect_url = '') {
        if (!self::is_logged_in()) {
            $login_page = get_permalink(get_page_by_path('login-page'));
            
            if (!empty($redirect_url)) {
                $login_page = add_query_arg('redirect_to', urlencode($redirect_url), $login_page);
            }
            
            wp_redirect($login_page);
            exit;
        }
    }
    
    /**
     * Get user data from database
     * 
     * @return object|null
     */
    public static function get_current_user() {
        $email = self::get_current_user_email();
        
        if (!$email) {
            return null;
        }
        
        return VMP_Database::get_user_by_email($email);
    }
}
