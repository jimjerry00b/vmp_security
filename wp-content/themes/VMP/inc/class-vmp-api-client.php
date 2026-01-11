<?php
/**
 * VMP API Client Class
 * 
 * Handles all communication with the backend API server
 * 
 * @package VMP_Security_Portal
 */

class VMP_API_Client {
    
    /**
     * Get backend API base URL
     */
    private static function get_api_url() {
        return VMP_BACKEND_API;
    }
    
    /**
     * Make HTTP request to backend API
     * 
     * @param string $endpoint API endpoint path
     * @param array $data Request data
     * @param string $method HTTP method (GET, POST)
     * @return array Response array with 'success' and 'data' or 'message'
     */
    private static function make_request($endpoint, $data = array(), $method = 'POST') {
        $url = self::get_api_url() . $endpoint;
        
        $args = array(
            'method' => $method,
            'timeout' => 30,
            'headers' => array(
                'Content-Type' => 'application/json',
            ),
        );
        
        if ($method === 'POST' && !empty($data)) {
            $args['body'] = json_encode($data);
        }
        
        $response = wp_remote_request($url, $args);
        
        if (is_wp_error($response)) {
            return array(
                'success' => false,
                'message' => 'API connection failed: ' . $response->get_error_message()
            );
        }
        
        $status_code = wp_remote_retrieve_response_code($response);
        $body = wp_remote_retrieve_body($response);
        $decoded = json_decode($body, true);
        
        // Log full response for debugging
        error_log('API Response - Status: ' . $status_code);
        error_log('API Response - Body: ' . $body);
        error_log('API Response - Decoded: ' . print_r($decoded, true));
        
        if ($status_code >= 200 && $status_code < 300) {
            return array(
                'success' => true,
                'data' => $decoded
            );
        } else {
            // Backend returns 'error' field for error messages
            $error_message = isset($decoded['error']) ? $decoded['error'] : 
                           (isset($decoded['message']) ? $decoded['message'] : 'API request failed');
            return array(
                'success' => false,
                'message' => $error_message,
                'status_code' => $status_code,
                'raw_body' => $body
            );
        }
    }
    
    /**
     * Check if email exists in backend system
     * 
     * @param string $email User's email address
     * @return array Response with 'exists' boolean and 'has_password' boolean
     */
    public static function check_email($email) {
        $result = self::make_request('/web-portal/check-email', array(
            'email' => $email
        ), 'POST');
        
        return $result;
    }
    
    /**
     * Get user data by email (all websites and licenses)
     * 
     * @param string $email User's email address
     * @return array Response with user, websites, and licenses data
     */
    public static function get_user_data($email) {
        $result = self::make_request('/web-portal/user-data', array(
            'email' => $email
        ), 'POST');
        
        return $result;
    }
    
    /**
     * Set password for first-time user
     * 
     * @param string $email User's email address
     * @param string $password Plain text password (backend will hash)
     * @return array Response with success status
     */
    public static function set_password($email, $password) {
        $result = self::make_request('/web-portal/set-password', array(
            'email' => $email,
            'password' => $password
        ), 'POST');
        
        return $result;
    }
    
    /**
     * Verify password for returning user
     * 
     * @param string $email User's email address
     * @param string $password Plain text password (backend will verify)
     * @return array Response with 'valid' boolean
     */
    public static function verify_password($email, $password) {
        $result = self::make_request('/web-portal/verify-password', array(
            'email' => $email,
            'password' => $password
        ), 'POST');
        
        return $result;
    }
    
    /**
     * Update last login timestamp
     * 
     * @param string $email User's email address
     * @return array Response with success status
     */
    public static function update_last_login($email) {
        $result = self::make_request('/web-portal/update-last-login', array(
            'email' => $email
        ), 'POST');
        
        return $result;
    }
    
    /**
     * Verify API key and website URL (LEGACY - for migration compatibility)
     * 
     * @param string $api_key User's API key
     * @param string $website_url Website URL to verify
     * @return array
     */
    public static function verify_api_key($api_key, $website_url) {
        $result = self::make_request('/auth/check_api_key', array(
            'api_key' => $api_key,
            'site_url' => $website_url
        ));
        
        if ($result['success']) {
            $data = $result['data'];
            
            // Check if the API response indicates success
            if (isset($data['user']) && isset($data['license'])) {
                return array(
                    'success' => true,
                    'email' => $data['user']['email'] ?? '',
                    'user_data' => $data['user'],
                    'license_data' => $data['license']
                );
            }
        }
        
        return array(
            'success' => false,
            'message' => $result['message'] ?? 'Invalid API key or website URL'
        );
    }
    
    /**
     * Get dashboard data (all websites and licenses for user)
     * 
     * @param string $email User's email address (from session)
     * @return array
     */
    public static function get_dashboard_data($email) {
        // Use the new web-portal endpoint that returns all user data
        return self::get_user_data($email);
    }
    
    /**
     * Get detailed license status
     * 
     * @param string $license_key License key
     * @return array
     */
    public static function get_license_status($license_key) {
        $result = self::make_request('/auth/license_status/' . urlencode($license_key), array(), 'GET');
        
        if ($result['success']) {
            return array(
                'success' => true,
                'license' => $result['data']
            );
        }
        
        return array(
            'success' => false,
            'message' => $result['message'] ?? 'Failed to fetch license status'
        );
    }
    
    /**
     * Activate a premium license on a site
     * 
     * @param string $email User's email
     * @param string $site_url Site URL
     * @param string $license_key Premium license key (optional, for validation)
     * @return array Activation result
     */
    public static function activate_license($email, $site_url, $license_key = '') {
        $data = array(
            'email' => $email,
            'site_url' => $site_url
        );
        
        // Note: Backend doesn't validate license_key in request body,
        // it just upgrades the user to premium
        
        $result = self::make_request('/auth/activate_license', $data, 'POST');
        
        if ($result['success'] && isset($result['data'])) {
            $response_data = $result['data'];
            return array(
                'success' => true,
                'license_type' => $response_data['license_type'] ?? 'premium',
                'license_key' => $response_data['license_key'] ?? '',
                'expires_at' => $response_data['expires_at'] ?? null,
                'max_activations' => $response_data['max_activations'] ?? 5,
                'message' => 'License activated successfully'
            );
        }
        
        return array(
            'success' => false,
            'message' => $result['message'] ?? 'License activation failed'
        );
    }
    
    /**
     * Deactivate a premium license from a site
     * 
     * @param string $email User's email
     * @param string $site_url Site URL
     * @return array Deactivation result
     */
    public static function deactivate_license($email, $site_url) {
        $data = array(
            'email' => $email,
            'site_url' => $site_url
        );
        
        error_log('VMP API Client - Deactivate License Request:');
        error_log('Email: ' . $email);
        error_log('Site URL: ' . $site_url);
        error_log('Request Data: ' . print_r($data, true));
        
        $result = self::make_request('/auth/deactivate_license', $data, 'POST');
        
        error_log('VMP API Client - Deactivate License Response:');
        error_log(print_r($result, true));
        
        if ($result['success'] && isset($result['data'])) {
            $response_data = $result['data'];
            return array(
                'success' => true,
                'available_slots' => $response_data['available_slots'] ?? 0,
                'new_free_license_key' => $response_data['new_free_license_key'] ?? '',
                'message' => 'License deactivated successfully'
            );
        }
        
        return array(
            'success' => false,
            'message' => $result['message'] ?? 'License deactivation failed',
            'status_code' => $result['status_code'] ?? null,
            'backend_error' => $result['message'] ?? 'Unknown error'
        );
    }
}
