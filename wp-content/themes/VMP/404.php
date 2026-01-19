<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header();
?>

<main class="error-404-page">
    <div class="container py-5">
        <div class="row align-items-center justify-content-center min-vh-75">
            <div class="col-lg-8 col-md-10 text-center">
                <!-- 404 Error Code -->
                <div class="error-code mb-4">
                    <h1 class="display-1 fw-bold" style="font-size: 120px; color: var(--primary-color); font-family: 'Source Sans 3', sans-serif;">404</h1>
                </div>

                <!-- Error Icon -->
                <div class="error-icon mb-4">
                    <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="60" cy="60" r="55" stroke="var(--primary-color)" stroke-width="3" fill="none" opacity="0.2"/>
                        <path d="M60 30V65" stroke="var(--primary-color)" stroke-width="4" stroke-linecap="round"/>
                        <circle cx="60" cy="80" r="4" fill="var(--primary-color)"/>
                        <path d="M40 40L80 80M80 40L40 80" stroke="var(--secondary-color)" stroke-width="3" stroke-linecap="round" opacity="0.3"/>
                    </svg>
                </div>

                <!-- Error Message -->
                <h2 class="header_2 mb-3" style="font-size: 36px; color: var(--primary-color);">Page Not Found</h2>
                <p class="lead mb-4 text-muted" style="font-size: 18px; max-width: 600px; margin-left: auto; margin-right: auto;">
                    Oops! The page you're looking for seems to have gone missing. Don't worry, your passwords are still safe with VMP Pass.
                </p>

                <!-- Search Form -->
                <div class="search-form-container mb-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8">
                            <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                                <div class="input-group input-group-lg shadow-sm">
                                    <input type="search" 
                                           class="form-control border-end-0" 
                                           placeholder="Search for pages, resources..." 
                                           name="s" 
                                           value="<?php echo get_search_query(); ?>"
                                           style="border-color: #dee2e6; padding: 12px 20px;">
                                    <button type="submit" 
                                            class="btn btn-outline-secondary border-start-0" 
                                            style="background: white; border-color: #dee2e6;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="var(--primary-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19 19L14.65 14.65" stroke="var(--primary-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Call to Action Buttons -->
                <div class="error-actions mb-5">
                    <a href="<?php echo esc_url(home_url('/')); ?>" 
                       class="btn btn-lg px-5 py-3 me-3 mb-3 custom-bold-btn shadow-sm" 
                       style="background-color: var(--primary-color); color: white; border-radius: 8px; font-size: 16px;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2" style="margin-bottom: 2px;">
                            <path d="M6 12L2 8L6 4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 8H14" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Back to Home
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" 
                       class="btn btn-outline-dark btn-lg px-5 py-3 mb-3 custom-bold-btn shadow-sm" 
                       style="border-radius: 8px; font-size: 16px; border-color: var(--primary-color); color: var(--primary-color);">
                        Contact Support
                    </a>
                </div>

                <!-- Helpful Links -->
                <div class="helpful-links mt-5 pt-4 border-top">
                    <h5 class="mb-4" style="color: var(--primary-color); font-weight: 600;">You might be looking for:</h5>
                    <div class="row g-3 justify-content-center">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-decoration-none">
                                <div class="card h-100 border-0 shadow-sm hover-card" style="transition: transform 0.2s;">
                                    <div class="card-body text-center p-4">
                                        <div class="icon mb-3">
                                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="var(--primary-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0" style="color: var(--primary-color); font-weight: 600;">Home</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <a href="<?php echo esc_url(home_url('/pricing')); ?>" class="text-decoration-none">
                                <div class="card h-100 border-0 shadow-sm hover-card" style="transition: transform 0.2s;">
                                    <div class="card-body text-center p-4">
                                        <div class="icon mb-3">
                                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 1V23M17 5H9.5C8.57174 5 7.6815 5.36875 7.02513 6.02513C6.36875 6.6815 6 7.57174 6 8.5C6 9.42826 6.36875 10.3185 7.02513 10.9749C7.6815 11.6313 8.57174 12 9.5 12H14.5C15.4283 12 16.3185 12.3687 16.9749 13.0251C17.6313 13.6815 18 14.5717 18 15.5C18 16.4283 17.6313 17.3185 16.9749 17.9749C16.3185 18.6313 15.4283 19 14.5 19H6" stroke="var(--secondary-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0" style="color: var(--primary-color); font-weight: 600;">Pricing</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <a href="<?php echo esc_url(home_url('/blog')); ?>" class="text-decoration-none">
                                <div class="card h-100 border-0 shadow-sm hover-card" style="transition: transform 0.2s;">
                                    <div class="card-body text-center p-4">
                                        <div class="icon mb-3">
                                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 3H8C9.06087 3 10.0783 3.42143 10.8284 4.17157C11.5786 4.92172 12 5.93913 12 7V21C12 20.2044 11.6839 19.4413 11.1213 18.8787C10.5587 18.3161 9.79565 18 9 18H2V3Z" stroke="var(--primary-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M22 3H16C14.9391 3 13.9217 3.42143 13.1716 4.17157C12.4214 4.92172 12 5.93913 12 7V21C12 20.2044 12.3161 19.4413 12.8787 18.8787C13.4413 18.3161 14.2044 18 15 18H22V3Z" stroke="var(--primary-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0" style="color: var(--primary-color); font-weight: 600;">Blog</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <a href="<?php echo esc_url(home_url('/support')); ?>" class="text-decoration-none">
                                <div class="card h-100 border-0 shadow-sm hover-card" style="transition: transform 0.2s;">
                                    <div class="card-body text-center p-4">
                                        <div class="icon mb-3">
                                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="12" r="10" stroke="var(--secondary-color)" stroke-width="2"/>
                                                <path d="M9.09 9C9.3251 8.33167 9.78915 7.76811 10.4 7.40913C11.0108 7.05016 11.7289 6.91894 12.4272 7.03871C13.1255 7.15849 13.7588 7.52152 14.2151 8.06353C14.6713 8.60553 14.9211 9.29152 14.92 10C14.92 12 11.92 13 11.92 13M12 17H12.01" stroke="var(--secondary-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0" style="color: var(--primary-color); font-weight: 600;">Support</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
.min-vh-75 {
    min-height: 75vh;
}

.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15) !important;
}

.search-form .input-group .form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 0.2rem rgba(25, 25, 112, 0.15);
}

.search-form .btn:hover {
    background-color: var(--primary-color) !important;
    border-color: var(--primary-color) !important;
}

.search-form .btn:hover svg path {
    stroke: white;
}

.error-actions .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2) !important;
}

@media (max-width: 768px) {
    .error-code h1 {
        font-size: 80px !important;
    }
    
    .header_2 {
        font-size: 28px !important;
    }
    
    .error-actions .btn {
        display: block;
        width: 100%;
        margin-right: 0 !important;
    }
}
</style>

<?php get_footer(); ?>