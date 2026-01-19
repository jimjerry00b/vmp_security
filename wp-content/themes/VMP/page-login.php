<?php
/**
 * Template Name: Login Page
 * 
 * @package VMP_Security_Portal
 */

// Redirect if already logged in
if (VMP_Auth::is_logged_in()) {
    wp_redirect(get_permalink(get_page_by_path('dashboard-page')));
    exit;
}

get_header();
?>

<div class="vmp-login-page">
    <div class="vmp-login-container">
        <div class="vmp-login-box">
            <div class="vmp-login-header">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="VMP&trade; Security Logo">
                <h1>Welcome to VMP&trade; Security</h1>
                <p>Manage your WordPress security plugins</p>
            </div>

            <!-- Step 1: Email Input -->
            <div id="step-email" class="vmp-login-step active">
                <form id="vmp-email-form">
                    <div class="vmp-form-group">
                        <label for="email">Email Address</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="vmp-input" 
                            placeholder="Enter your email"
                            required
                            autocomplete="email"
                        >
                    </div>
                    <button type="submit" class="vmp-btn vmp-btn-primary vmp-btn-block">
                        Continue
                    </button>
                </form>
            </div>

            <!-- Step 2: Website URL Verification (First Login Only) -->
            <div id="step-verify" class="vmp-login-step">
                <button class="vmp-back-btn" onclick="vmpGoToStep('email')">&larr; Back</button>
                <h2>Verify Your Website</h2>
                <p class="vmp-step-description">Please provide one of your website URLs that has our security plugin installed.</p>
                
                <form id="vmp-verify-form">
                    <div class="vmp-form-group">
                        <label for="website_url">Website URL</label>
                        <input 
                            type="url" 
                            id="website_url" 
                            name="website_url" 
                            class="vmp-input" 
                            placeholder="https://yourwebsite.com"
                            required
                        >
                        <small class="vmp-help-text">
                            Enter the URL of any website where you have our security plugin installed.
                        </small>
                    </div>
                    
                    <button type="submit" class="vmp-btn vmp-btn-primary vmp-btn-block">
                        Verify Website
                    </button>
                </form>
            </div>

            <!-- Step 3: Create Password (First Login Only) -->
            <div id="step-create-password" class="vmp-login-step">
                <button class="vmp-back-btn" onclick="vmpGoToStep('verify')">&larr; Back</button>
                <h2>Create Your Password</h2>
                <p class="vmp-step-description">Set a secure password for your account.</p>
                
                <form id="vmp-create-password-form">
                    <div class="vmp-form-group">
                        <label for="new_password">New Password</label>
                        <input 
                            type="password" 
                            id="new_password" 
                            name="new_password" 
                            class="vmp-input" 
                            placeholder="Enter password"
                            required
                            minlength="8"
                        >
                    </div>
                    
                    <div class="vmp-form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input 
                            type="password" 
                            id="confirm_password" 
                            name="confirm_password" 
                            class="vmp-input" 
                            placeholder="Confirm password"
                            required
                            minlength="8"
                        >
                    </div>
                    
                    <button type="submit" class="vmp-btn vmp-btn-primary vmp-btn-block">
                        Create Account
                    </button>
                </form>
            </div>

            <!-- Step 4: Password Login (Returning Users) -->
            <div id="step-password" class="vmp-login-step">
                <button class="vmp-back-btn" onclick="vmpGoToStep('email')">&larr; Back</button>
                <h2>Welcome Back</h2>
                <p class="vmp-step-description">Enter your password to continue.</p>
                
                <form id="vmp-password-form">
                    <div class="vmp-form-group">
                        <label for="password">Password</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="vmp-input" 
                            placeholder="Enter your password"
                            required
                            autocomplete="current-password"
                        >
                    </div>
                    
                    <button type="submit" class="vmp-btn vmp-btn-primary vmp-btn-block">
                        Login
                    </button>
                    
                    <div class="vmp-form-footer">
                        <a href="#" class="vmp-link">Forgot password?</a>
                    </div>
                </form>
            </div>

            <!-- Loading Spinner -->
            <div id="vmp-loading" class="vmp-loading" style="display: none;">
                <div class="vmp-spinner"></div>
                <p>Processing...</p>
            </div>

            <!-- Error Message -->
            <div id="vmp-error" class="vmp-alert vmp-alert-error" style="display: none;"></div>
            
            <!-- Success Message -->
            <div id="vmp-success" class="vmp-alert vmp-alert-success" style="display: none;"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
