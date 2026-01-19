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
                            <span class="btn btn-outline-secondary disabled" style="border-color: var(--vmp-border); color: var(--vmp-text-light);">Current Plan</span>
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
                            <span class="btn disabled" style="background-color: var(--vmp-warning); border-color: var(--vmp-warning); color: white;">Available After Year 1</span>
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

<?php get_footer(); ?>