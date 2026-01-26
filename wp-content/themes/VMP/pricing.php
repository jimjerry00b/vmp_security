<?php
/*
Template Name: Pricing Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Pricing - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Pricing page of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<style>
    .btn-check:checked+.btn{
        background: var(--vmp-primary);
        color: #fff;
    }
</style>

<!-- Pricing Section -->
<section class="pricing-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-3" style="color: var(--vmp-primary);">Choose Your Plan</h1>
                <p class="lead" style="color: var(--vmp-text-light);">Start with our free plan for the first year, then upgrade to Premium for continued protection</p>
            </div>
        </div>

        <div class="row justify-content-center g-4">
            <!-- Free Plan -->
            <div class="col-lg-5 col-md-6">
                <div class="card shadow-sm h-100 border-0" style="border: 2px solid var(--vmp-border) !important;">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold mb-3" style="color: var(--vmp-text);">Free</h3>
                            <div class="mb-3">
                                <span class="display-3 fw-bold" style="color: var(--vmp-success);">$0</span>
                                <span class="fs-5" style="color: var(--vmp-text-light);">/first year</span>
                            </div>
                            <p class="text-muted">Perfect for getting started with WordPress security</p>
                        </div>
                        
                        <hr style="border-color: var(--vmp-border);">
                        
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                <span style="color: var(--vmp-text);">Basic WordPress security features</span>
                            </li>
                            <li class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                <span style="color: var(--vmp-text);">License management</span>
                            </li>
                            <li class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                <span style="color: var(--vmp-text);">Email-based authentication</span>
                            </li>
                            <li class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                <span style="color: var(--vmp-text);">User dashboard access</span>
                            </li>
                            <li class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                <span style="color: var(--vmp-text);">Community support</span>
                            </li>
                        </ul>
                        
                        <div class="d-grid">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#downloadModal" style="background-color: var(--vmp-primary); border-color: var(--vmp-primary); color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download me-2" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                                </svg>
                                Download Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Premium Plan -->
            <div class="col-lg-5 col-md-6">
                <div class="card shadow-lg h-100 border-0 position-relative" style="border: 3px solid var(--vmp-warning) !important;">
                    <div class="position-absolute top-0 start-50 translate-middle">
                        <span class="badge px-4 py-2" style="background-color: var(--vmp-warning); color: white; font-size: 0.875rem;">RECOMMENDED</span>
                    </div>
                    
                    <div class="card-body p-4 mt-3">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold mb-3" style="color: var(--vmp-text);">Premium</h3>
                            <div class="mb-3">
                                <span class="display-3 fw-bold" style="color: var(--vmp-warning);">$149</span>
                                <span class="fs-5" style="color: var(--vmp-text-light);">/year</span>
                            </div>
                            <p class="text-muted">After first year - Advanced protection for your WordPress site</p>
                        </div>
                        
                        <hr style="border-color: var(--vmp-border);">
                        
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                <span style="color: var(--vmp-text);"><strong>Everything in Free</strong></span>
                            </li>
                            <li class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                <span style="color: var(--vmp-text);">Advanced security features</span>
                            </li>
                            <li class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                <span style="color: var(--vmp-text);">Priority support</span>
                            </li>
                            <li class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                <span style="color: var(--vmp-text);">Unlimited license activations</span>
                            </li>
                            <li class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                <span style="color: var(--vmp-text);">Regular updates & new features</span>
                            </li>
                            <li class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                <span style="color: var(--vmp-text);">Advanced analytics & reporting</span>
                            </li>
                        </ul>
                        
                        <div class="d-grid">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#premiumModal" style="background-color: var(--vmp-warning); border-color: var(--vmp-warning); color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check me-2" viewBox="0 0 16 16">
                                    <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                </svg>
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="row mt-5">
            <div class="col-lg-8 mx-auto text-center">
                <p class="text-muted">All plans include secure email-based authentication and access to your personal dashboard. Premium features activate automatically after your first year.</p>
            </div>
        </div>
    </div>
</section>

<!-- Download Modal -->
<div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: none; padding: 1.5rem 2rem;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; top: 15px; right: 15px; opacity: 0.5;"></button>
            </div>
            <div class="modal-body" style="padding: 0 2rem 2rem 2rem;">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="fw-bold mb-3" style="color: var(--vmp-text); font-size: 20px;">Getting VMP Security Free on Your Website</h4>
                        <div class="col-lg-12 mb-4">                            
                            <div class="text-center mt-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/18.jpg" 
                                    alt="VMP Security Plugin" 
                                    class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- YouTube Video Embed -->
                        <div class="ratio ratio-16x9 mb-3" style="background: #000; border-radius: 4px;">
                            <iframe width="750" height="422" src="https://www.youtube.com/embed/QavtowPq0TQ" title="VMP WordPress Security – Firewall, Malware Scan, and Login Security" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>

<!-- Premium Modal -->
<div class="modal fade" id="premiumModal" tabindex="-1" aria-labelledby="premiumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 600px;">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--vmp-primary); border-bottom: none; padding: 1.5rem; position: relative;">
                <h4 class="modal-title text-white fw-normal w-100" id="premiumModalLabel">Get VMP Security Premium</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; top: 15px; right: 15px; opacity: 0.7;"></button>
            </div>
            
            <div class="modal-body" style="padding: 2rem;">
                <!-- Success Message (Hidden by default) -->
                <div id="registrationSuccess" class="alert alert-success d-none" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
                    <strong>Success!</strong> Your registration has been submitted successfully.
                </div>

                <!-- Error Message (Hidden by default) -->
                <div id="registrationError" class="alert alert-danger d-none" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-circle-fill me-2" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4m.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
                    </svg>
                    <strong>Error!</strong> <span id="errorMessage"></span>
                </div>

                <!-- Registration Form -->
                <form id="premiumRegistrationForm">
                    <?php wp_nonce_field('vmp_premium_registration', 'vmp_nonce'); ?>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="userEmail" class="form-label fw-bold" style="color: var(--vmp-text);">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="userEmail" placeholder="Your email" required style="border-color: var(--vmp-border);">
                        <div class="form-text" style="color: var(--vmp-text-light);">This is where you will receive your license key and any future security alerts for your website</div>
                    </div>

                    <!-- Email Alerts Section -->
                    <div class="mb-4">
                        <label class="form-label fw-bold d-block mb-2" style="color: var(--vmp-text);">
                            Would you like WordPress security and vulnerability alerts sent to you via email?
                        </label>
                        <div class="btn-group" role="group" aria-label="Email alerts preference">
                            <input type="radio" class="btn-check" name="emailAlerts" id="alertsYes" value="yes" checked>
                            <label class="btn btn-outline-primary" for="alertsYes" style="border-color: var(--vmp-primary-dark);">Yes</label>
                            
                            <input type="radio" class="btn-check" name="emailAlerts" id="alertsNo" value="no">
                            <label class="btn btn-outline-primary" for="alertsNo" style="border-color: var(--vmp-primary-dark);">No</label>
                        </div>
                    </div>

                    <!-- Terms & Conditions -->
                    <div class="mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="agreeTerms" required style="border-color: var(--vmp-border);">
                            <label class="form-check-label text-black" style="font-size: 13px;" for="agreeTerms" >
                                I have read and agree to, as applicable, the 
                                <a href="#" style="color: var(--vmp-primary-dark); text-decoration: none;">VMP Security License Terms and Conditions</a>, 
                                <a href="#" style="color: var(--vmp-primary-dark); text-decoration: none;">VMP CLI License Terms and Conditions</a>, 
                                the <a href="#" style="color: var(--vmp-primary-dark); text-decoration: none;">Services Subscription Agreement</a>, 
                                and <a href="#" style="color: var(--vmp-primary-dark); text-decoration: none;">Terms of Service</a>, 
                                and have read and acknowledge the 
                                <a href="#" style="color: var(--vmp-primary); text-decoration: none;">VMP Security Privacy Policy and Notice at Collection</a>.
                            </label>
                        </div>
                    </div>

                    <!-- Register Button -->
                    <div class="d-grid">
                        <button type="submit" id="registerBtn" class="btn btn-lg text-white" style="background-color: var(--vmp-primary); border-color: var(--vmp-primary); padding: 0.75rem;">
                            <span id="btnText">Register</span>
                            <span id="btnSpinner" class="d-none">
                                <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                                Processing...
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('premiumRegistrationForm');
    const successMessage = document.getElementById('registrationSuccess');
    const errorMessage = document.getElementById('registrationError');
    const errorText = document.getElementById('errorMessage');
    const registerBtn = document.getElementById('registerBtn');
    const btnText = document.getElementById('btnText');
    const btnSpinner = document.getElementById('btnSpinner');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Hide any previous messages
            successMessage.classList.add('d-none');
            errorMessage.classList.add('d-none');
            
            // Show loading state
            registerBtn.disabled = true;
            btnText.classList.add('d-none');
            btnSpinner.classList.remove('d-none');
            
            // Prepare form data
            const formData = new FormData();
            formData.append('action', 'handle_premium_registration');
            formData.append('nonce', document.querySelector('input[name="vmp_nonce"]').value);
            formData.append('email', document.getElementById('userEmail').value);
            formData.append('emailAlerts', document.querySelector('input[name="emailAlerts"]:checked').value);
            formData.append('agreeTerms', document.getElementById('agreeTerms').checked ? '1' : '0');
            
            // AJAX request
            fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                method: 'POST',
                body: formData,
                credentials: 'same-origin'
            })
            .then(response => response.json())
            .then(data => {
                // Reset button state
                registerBtn.disabled = false;
                btnText.classList.remove('d-none');
                btnSpinner.classList.add('d-none');
                
                if (data.success) {
                    // Show success message
                    form.classList.add('d-none');
                    successMessage.classList.remove('d-none');
                    
                    // Reset and close modal after 3 seconds
                    setTimeout(function() {
                        form.classList.remove('d-none');
                        successMessage.classList.add('d-none');
                        form.reset();
                        
                        // Close the modal
                        const modal = bootstrap.Modal.getInstance(document.getElementById('premiumModal'));
                        if (modal) {
                            modal.hide();
                        }
                    }, 3000);
                } else {
                    // Show error message
                    errorText.textContent = data.data.message || 'An error occurred. Please try again.';
                    errorMessage.classList.remove('d-none');
                }
            })
            .catch(error => {
                // Reset button state
                registerBtn.disabled = false;
                btnText.classList.remove('d-none');
                btnSpinner.classList.add('d-none');
                
                // Show error message
                errorText.textContent = 'A network error occurred. Please check your connection and try again.';
                errorMessage.classList.remove('d-none');
                
                console.error('Error:', error);
            });
        });
    }
});
</script>

<?php get_footer(); ?>