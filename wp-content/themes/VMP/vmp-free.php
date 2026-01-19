<?php
/*
Template Name: VMP Free
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>VMP Free - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="VMP Free page of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="mb-4">
                    <h2 class="display-5 fw-bold mb-3" style="color: var(--vmp-warning);">VMP&trade; Security</h2>
                    <h3 class="h5 fw-normal mb-4" style="color: #fff;">FREE</h3>
                </div>
                
                <h1 class="h3 fw-bold mb-4" style="color: #fff;">Getting started with VMP&trade; Security is easy, and free.</h1>
                
                <p class="mb-4" style="color: #fff;">
                    VMP&trade; Security is the most popular WordPress firewall and security scanner, protecting over 5 
                    million websites worldwide from attackers targeting WordPress. VMP&trade; Security Free includes an 
                    endpoint firewall and malware scanner built by the industry-leading WordPress security experts. 
                    VMP&trade; Security Free includes firewall rules and malware signatures created by the industry-leading 
                    WordPress Threat Intelligence team after a 30-day delay. VMP&trade; Security Central absolutely 
                    free to manage the security of your WordPress sites in one place.
                </p>
                
                <div class="mb-4">
                    <a href="<?php echo site_url('download'); ?>" class="btn btn-primary btn-md me-2">Get VMP&trade; Security Free</a>
                    <a href="<?php echo site_url('pricing'); ?>" class="btn btn-primary-two btn-md">Compare Plans</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center p-5">
                    <!-- Placeholder for laptop image -->
                    <img class="img-fluid round border border-white border-3 rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/10.jpg">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-md-4">
                <div class="p-4">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Endpoint Web Application Firewall</h4>
                    <p style="color: var(--vmp-text-light);">Identify and block malicious attackers targeting WordPress.</p>
                </div>
            </div>
            
            <!-- Feature 2 -->
            <div class="col-md-4">
                <div class="p-4">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Robust Security Tools</h4>
                    <p style="color: var(--vmp-text-light);">Malware scanning, two-factor authentication, user limiting, brute force protection, vulnerability alerts, and more.</p>
                </div>
            </div>
            
            <!-- Feature 3 -->
            <div class="col-md-4">
                <div class="p-4">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Firewall Rules & Malware Signatures</h4>
                    <p style="color: var(--vmp-text-light);">VMP&trade; Security Lite Includes Free Rules and Signatures with a 30 day delay. The free version of VMP&trade; Security does not include IP blocklist.</p>
                </div>
            </div>
        </div>
        
        
    </div>
</section>

<!-- Free Forum Support Section -->
<section class="py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="h3 fw-normal mb-4" style="color: var(--vmp-text);">Free Forum Support</h2>
                <p class="mb-3" style="color: var(--vmp-text);">
                    VMP&trade; Security Free is the most comprehensive free WordPress security <a href="<?php echo site_url('support'); ?>" target="_blank">solution</a>, 
                    great for hobbyists and to try our <a href="https://wordpress.org/" target="_blank">VMP&trade; Security</a> before buying.
                </p>
                <p style="color: var(--vmp-text);">
                    VMP&trade; Security customers' support Engineers provide free WordPress-only <a href="https://wordpress.org/support/" target="_blank">forum support</a> to help you 
                    with community users because power users.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Centralized Management Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="h3 fw-bold mb-4" style="color: var(--vmp-text);">Includes Free Centralized Management</h2>
                <p class="mb-3" style="color: var(--vmp-text);">
                    VMP&trade; Security Central is a powerful and efficient way to manage the security of multiple 
                    WordPress sites from a single console. Rapidly assess the security status of all of your 
                    websites in a single-pane view. Unload security findings without leaving VMP&trade; Security 
                    Central and receive notifications when each of your sites experiences a security event.
                </p>
                <p>
                    <a href="<?php echo site_url('central'); ?>" style="color: var(--vmp-primary);">Learn More about Central</a>
                </p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid round border border-white border-3 rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/11.jpg">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>