/**
 * VMP API Client - JavaScript
 * 
 * Foundation for all AJAX API calls to WordPress backend
 * 
 * @package VMP_Security_Portal
 */

const VMP_API = {
    /**
     * Make AJAX request to WordPress
     */
    request: function(action, data, onSuccess, onError) {
        jQuery.ajax({
            url: vmpConfig.ajaxUrl,
            type: 'POST',
            data: {
                action: action,
                nonce: vmpConfig.nonce,
                ...data
            },
            success: function(response) {
                console.log('AJAX Response for', action, ':', response);
                if (response.success) {
                    if (typeof onSuccess === 'function') {
                        onSuccess(response.data);
                    }
                } else {
                    console.error('AJAX Failed for', action);
                    console.error('Response data:', response.data);
                    console.error('Response message:', response.data?.message);
                    
                    const errorMessage = response.data?.message || response.message || JSON.stringify(response.data) || 'Request failed';
                    console.error('Final error message:', errorMessage);
                    if (typeof onError === 'function') {
                        onError(errorMessage);
                    }
                }
            },
            error: function(xhr, status, error) {
                console.error('Network error for', action, ':', xhr, status, error);
                if (typeof onError === 'function') {
                    onError('Network error: ' + error);
                }
            }
        });
    },

    /**
     * Show loading spinner
     */
    showLoading: function() {
        const loading = document.getElementById('vmp-loading');
        if (loading) {
            loading.style.display = 'block';
        }
    },

    /**
     * Hide loading spinner
     */
    hideLoading: function() {
        const loading = document.getElementById('vmp-loading');
        if (loading) {
            loading.style.display = 'none';
        }
    },

    /**
     * Show error message
     */
    showError: function(message) {
        const errorDiv = document.getElementById('vmp-error');
        if (errorDiv) {
            errorDiv.textContent = message;
            errorDiv.style.display = 'block';
            
            // Auto-hide after 5 seconds
            setTimeout(() => {
                errorDiv.style.display = 'none';
            }, 5000);
        }
    },

    /**
     * Show success message
     */
    showSuccess: function(message) {
        const successDiv = document.getElementById('vmp-success');
        if (successDiv) {
            successDiv.textContent = message;
            successDiv.style.display = 'block';
            
            // Auto-hide after 3 seconds
            setTimeout(() => {
                successDiv.style.display = 'none';
            }, 3000);
        }
    },

    /**
     * Hide all messages
     */
    hideMessages: function() {
        const error = document.getElementById('vmp-error');
        const success = document.getElementById('vmp-success');
        if (error) error.style.display = 'none';
        if (success) success.style.display = 'none';
    }
};

/**
 * Global logout handler
 * Note: Redirects to WordPress login page (not root /)
 */
jQuery(document).ready(function($) {
    $('#vmp-logout-btn').on('click', function(e) {
        e.preventDefault();
        
        if (confirm('Are you sure you want to logout?')) {
            VMP_API.request('vmp_logout', {}, 
                function(data) {
                    // Redirect to WordPress login page
                    window.location.href = window.location.origin + '/vpnmasterpro.com/login-page/';
                },
                function(error) {
                    alert('Logout failed: ' + error);
                }
            );
        }
    });
});
