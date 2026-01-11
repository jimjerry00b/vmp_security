<?php
/**
 * VMP Database Helper Class
 * 
 * Pure API wrapper - all data stored in backend PostgreSQL database
 * This class provides a simplified interface to backend API endpoints
 * 
 * @package VMP_Security_Portal
 */

class VMP_Database {
    
    /**
     * Check if user exists by email
     * 
     * @param string $email User email
     * @return bool
     */
    public static function user_exists($email) {
        $result = VMP_API_Client::check_email($email);
        
        if ($result['success'] && isset($result['data']['exists'])) {
            return $result['data']['exists'];
        }
        
        return false;
    }
    
    /**
     * Check if user has password set
     * 
     * @param string $email User email
     * @return bool
     */
    public static function user_has_password($email) {
        $result = VMP_API_Client::check_email($email);
        
        if ($result['success'] && isset($result['data']['has_password'])) {
            return $result['data']['has_password'];
        }
        
        return false;
    }
    
    /**
     * Create password for first-time user
     * 
     * @param string $email User email
     * @param string $password Plain text password (backend will hash it)
     * @return bool
     */
    public static function create_user_password($email, $password) {
        // Send plain text password - backend handles bcrypt hashing
        $result = VMP_API_Client::set_password($email, $password);
        
        return $result['success'] ?? false;
    }
    
    /**
     * Verify user password
     * 
     * @param string $email User email
     * @param string $password Plain text password (backend will verify)
     * @return bool
     */
    public static function verify_password($email, $password) {
        // Send plain text password - backend handles verification
        $result = VMP_API_Client::verify_password($email, $password);
        
        if ($result['success'] && isset($result['data']['valid'])) {
            return $result['data']['valid'];
        }
        
        return false;
    }
    
    /**
     * Update last login timestamp
     * 
     * @param string $email User email
     * @return bool
     */
    public static function update_last_login($email) {
        $result = VMP_API_Client::update_last_login($email);
        
        return $result['success'] ?? false;
    }
    
    /**
     * Get user data by email (includes websites and licenses)
     * 
     * @param string $email User email
     * @return array|null
     */
    public static function get_user_data($email) {
        $result = VMP_API_Client::get_user_data($email);
        
        if ($result['success'] && isset($result['data'])) {
            return $result['data'];
        }
        
        return null;
    }
}
