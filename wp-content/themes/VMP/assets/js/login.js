/**
 * VMP Login Page JavaScript
 * 
 * Handles multi-step login flow
 * 
 * @package VMP_Security_Portal
 */

let vmpLoginState = {
    email: '',
    apiKey: '',
    currentStep: 'email'
};

/**
 * Navigate to specific step
 */
function vmpGoToStep(step) {
    // Hide all steps
    document.querySelectorAll('.vmp-login-step').forEach(el => {
        el.classList.remove('active');
    });
    
    // Show target step
    const targetStep = document.getElementById('step-' + step);
    if (targetStep) {
        targetStep.classList.add('active');
        vmpLoginState.currentStep = step;
    }
    
    VMP_API.hideMessages();
}

jQuery(document).ready(function($) {
    
    /**
     * Step 1: Email Form Submission
     */
    $('#vmp-email-form').on('submit', function(e) {
        e.preventDefault();
        
        const email = $('#email').val().trim();
        
        if (!email) {
            VMP_API.showError('Please enter your email address');
            return;
        }
        
        vmpLoginState.email = email;
        VMP_API.hideMessages();
        VMP_API.showLoading();
        
        VMP_API.request('vmp_check_email', { email: email },
            function(data) {
                VMP_API.hideLoading();
                
                // Backend returns: {exists: true/false, has_password: true/false}
                if (!data.exists) {
                    VMP_API.showError('Email not found in our system. Please contact support.');
                    return;
                }
                
                if (!data.has_password) {
                    // User exists but no password set - go to create password step
                    vmpGoToStep('create-password');
                } else {
                    // User exists with password - go to login step
                    vmpGoToStep('password');
                }
            },
            function(error) {
                VMP_API.hideLoading();
                VMP_API.showError(error);
            }
        );
    });
    
    /**
     * Step 2: Website URL Verification
     */
    $('#vmp-verify-form').on('submit', function(e) {
        e.preventDefault();
        
        const websiteUrl = $('#website_url').val().trim();
        
        if (!websiteUrl) {
            VMP_API.showError('Please enter your website URL');
            return;
        }
        
        VMP_API.hideMessages();
        VMP_API.showLoading();
        
        VMP_API.request('vmp_verify_website', { 
            email: vmpLoginState.email,
            website_url: websiteUrl 
        },
            function(data) {
                VMP_API.hideLoading();
                VMP_API.showSuccess('Website verified successfully!');
                
                // Go to create password step
                setTimeout(function() {
                    vmpGoToStep('create-password');
                }, 1000);
            },
            function(error) {
                VMP_API.hideLoading();
                VMP_API.showError(error);
            }
        );
    });
    
    /**
     * Step 3: Create Password
     */
    $('#vmp-create-password-form').on('submit', function(e) {
        e.preventDefault();
        
        const newPassword = $('#new_password').val();
        const confirmPassword = $('#confirm_password').val();
        
        if (!newPassword || !confirmPassword) {
            VMP_API.showError('Please fill in all fields');
            return;
        }
        
        if (newPassword.length < 8) {
            VMP_API.showError('Password must be at least 8 characters');
            return;
        }
        
        if (newPassword !== confirmPassword) {
            VMP_API.showError('Passwords do not match');
            return;
        }
        
        VMP_API.hideMessages();
        VMP_API.showLoading();
        
        VMP_API.request('vmp_create_password', {
            email: vmpLoginState.email,
            password: newPassword,
            api_key: vmpLoginState.apiKey
        },
            function(data) {
                VMP_API.hideLoading();
                VMP_API.showSuccess('Account created! Redirecting...');
                
                // Redirect to dashboard (use WordPress page URL)
                setTimeout(() => {
                    window.location.href = vmpData.dashboardUrl;
                }, 1500);
            },
            function(error) {
                VMP_API.hideLoading();
                VMP_API.showError(error);
            }
        );
    });
    
    /**
     * Step 4: Password Login (Returning Users)
     */
    $('#vmp-password-form').on('submit', function(e) {
        e.preventDefault();
        
        const password = $('#password').val();
        
        if (!password) {
            VMP_API.showError('Please enter your password');
            return;
        }
        
        VMP_API.hideMessages();
        VMP_API.showLoading();
        
        VMP_API.request('vmp_login', {
            email: vmpLoginState.email,
            password: password
        },
            function(data) {
                VMP_API.hideLoading();
                VMP_API.showSuccess('Logged in successfully! Redirecting...');
                
                // Redirect to dashboard (use WordPress page URL)
                setTimeout(() => {
                    window.location.href = vmpData.dashboardUrl;
                }, 1000);
            },
            function(error) {
                VMP_API.hideLoading();
                VMP_API.showError(error);
            }
        );
    });
});
