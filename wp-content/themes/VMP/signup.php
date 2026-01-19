<?php
/**
 * Template Name: Signup Page
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

<!-- Signup Section -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <!-- Signup Card -->
            <div class="card" style="border: 1px solid var(--vmp-border); box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <div class="card-body" style="padding: 40px;">
                    <!-- Logo/Title -->
                    <div class="text-center mb-4">
                        <h2 style="color: var(--vmp-text); font-size: 28px; font-weight: 700; margin-bottom: 8px;">
                            Create Your Account
                        </h2>
                        <p style="color: var(--vmp-text-light); font-size: 14px; margin: 0;">
                            Join VMP&trade; Security to secure your WordPress sites
                        </p>
                    </div>

                    <!-- Error/Success Messages Placeholder -->
                    <div id="signup-messages" class="mb-3" style="display: none;">
                        <!-- Success Message -->
                        <div class="alert alert-success" role="alert" style="background-color: rgba(0, 163, 42, 0.1); border: 1px solid var(--vmp-success); color: var(--vmp-success); padding: 12px; border-radius: 4px; font-size: 14px; display: none;" id="success-message">
                            <strong>Success!</strong> Your account has been created successfully.
                        </div>
                        <!-- Error Message -->
                        <div class="alert alert-danger" role="alert" style="background-color: rgba(214, 54, 56, 0.1); border: 1px solid var(--vmp-danger); color: var(--vmp-danger); padding: 12px; border-radius: 4px; font-size: 14px; display: none;" id="error-message">
                            <strong>Error!</strong> <span id="error-text">Please check your information and try again.</span>
                        </div>
                    </div>

                    <!-- Social Signup Options -->
                    <div class="mb-4">
                        <button type="button" class="btn w-100 mb-2" style="background-color: #fff; border: 1px solid var(--vmp-border); color: var(--vmp-text); padding: 12px; font-weight: 600; display: flex; align-items: center; justify-content: center; gap: 10px;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                            </svg>
                            Sign up with Google
                        </button>
                        <button type="button" class="btn w-100" style="background-color: #24292e; border: 1px solid #24292e; color: #fff; padding: 12px; font-weight: 600; display: flex; align-items: center; justify-content: center; gap: 10px;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                            </svg>
                            Sign up with GitHub
                        </button>
                    </div>

                    <!-- Divider -->
                    <div class="text-center mb-4" style="position: relative;">
                        <span style="background-color: #fff; padding: 0 10px; color: var(--vmp-text-light); font-size: 14px; position: relative; z-index: 1;">
                            Or sign up with email
                        </span>
                        <div style="position: absolute; top: 50%; left: 0; right: 0; height: 1px; background-color: var(--vmp-border); z-index: 0;"></div>
                    </div>

                    <!-- Signup Form -->
                    <form method="post" action="" id="signup-form">
                        <!-- Full Name -->
                        <div class="mb-3">
                            <label for="full_name" class="form-label" style="color: var(--vmp-text); font-weight: 600; font-size: 14px; margin-bottom: 6px;">
                                Full Name <span style="color: var(--vmp-danger);">*</span>
                            </label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="full_name" 
                                name="full_name" 
                                placeholder="Enter your full name" 
                                required 
                                style="border: 1px solid var(--vmp-border); padding: 10px 15px; font-size: 14px;"
                            >
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label" style="color: var(--vmp-text); font-weight: 600; font-size: 14px; margin-bottom: 6px;">
                                Email Address <span style="color: var(--vmp-danger);">*</span>
                            </label>
                            <input 
                                type="email" 
                                class="form-control" 
                                id="email" 
                                name="email" 
                                placeholder="Enter your email" 
                                required 
                                style="border: 1px solid var(--vmp-border); padding: 10px 15px; font-size: 14px;"
                            >
                        </div>

                        <!-- Company Name -->
                        <div class="mb-3">
                            <label for="company_name" class="form-label" style="color: var(--vmp-text); font-weight: 600; font-size: 14px; margin-bottom: 6px;">
                                Company Name <span style="color: var(--vmp-text-light); font-weight: 400;">(Optional)</span>
                            </label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="company_name" 
                                name="company_name" 
                                placeholder="Enter your company name" 
                                style="border: 1px solid var(--vmp-border); padding: 10px 15px; font-size: 14px;"
                            >
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label" style="color: var(--vmp-text); font-weight: 600; font-size: 14px; margin-bottom: 6px;">
                                Password <span style="color: var(--vmp-danger);">*</span>
                            </label>
                            <input 
                                type="password" 
                                class="form-control" 
                                id="password" 
                                name="password" 
                                placeholder="Create a strong password" 
                                required 
                                style="border: 1px solid var(--vmp-border); padding: 10px 15px; font-size: 14px;"
                            >
                            <small style="color: var(--vmp-text-light); font-size: 12px; display: block; margin-top: 4px;">
                                Must be at least 8 characters long
                            </small>
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label" style="color: var(--vmp-text); font-weight: 600; font-size: 14px; margin-bottom: 6px;">
                                Confirm Password <span style="color: var(--vmp-danger);">*</span>
                            </label>
                            <input 
                                type="password" 
                                class="form-control" 
                                id="confirm_password" 
                                name="confirm_password" 
                                placeholder="Confirm your password" 
                                required 
                                style="border: 1px solid var(--vmp-border); padding: 10px 15px; font-size: 14px;"
                            >
                        </div>

                        <!-- Terms & Conditions -->
                        <div class="mb-4">
                            <div class="form-check">
                                <input 
                                    class="form-check-input" 
                                    type="checkbox" 
                                    id="terms" 
                                    name="terms" 
                                    required 
                                    style="border: 1px solid var(--vmp-border);"
                                >
                                <label class="form-check-label" for="terms" style="color: var(--vmp-text); font-size: 13px;">
                                    I agree to the <a href="#" style="color: var(--vmp-primary-dark); text-decoration: none;">Terms & Conditions</a> and <a href="#" style="color: var(--vmp-primary-dark); text-decoration: none;">Privacy Policy</a>
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button 
                            type="submit" 
                            class="btn w-100 text-white" 
                            style="background-color: var(--vmp-warning); border-color: var(--vmp-warning); padding: 12px; font-weight: 600; font-size: 16px;"
                        >
                            Create Account
                        </button>
                    </form>

                    <!-- Login Link -->
                    <div class="text-center mt-4">
                        <p style="color: var(--vmp-text-light); font-size: 14px; margin: 0;">
                            Already have an account? 
                            <a href="<?php echo get_permalink(get_page_by_path('login')); ?>" style="color: var(--vmp-primary-dark); text-decoration: none; font-weight: 600;">
                                Sign In
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="text-center mt-3">
                <p style="color: var(--vmp-text-light); font-size: 12px;">
                    By signing up, you agree to receive updates and notifications about security vulnerabilities.
                </p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
