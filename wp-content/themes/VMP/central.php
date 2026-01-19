<?php
/*
Template Name: Central Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Central - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Central page of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="VMP&trade; Security Logo" style="width: 80px; height: auto;" class="me-3">
                    <div>
                        <h2 class="fw-bold mb-0" style="color: var(--vmp-text); font-size: 2rem;">VMP&trade; Security</h2>
                        <h3 class="mb-0" style="color: var(--vmp-text-light); font-size: 1.5rem; font-weight: 400;">CENTRAL</h3>
                    </div>
                </div>
                
                <p class="mb-4" style="color: var(--vmp-text); line-height: 1.8; font-size: 1rem;">
                    Manage security for multiple sites from one place with VMP&trade; Security Central. VMP&trade; Security Central is free for all VMP&trade; Security users, from VMP&trade; Security Free all the way to our VIP VMP&trade; Security Response customers. It includes a view of security events across all your sites, enables scanning across your fleet of sites, as well as template-based security configuration management. Audit log event history is available with paid VMP&trade; Security licenses.
                </p>
                
                <div class="mb-4">
                    <a href="<?php echo esc_url(home_url('/login-page')); ?>" class="btn btn-primary btn-md fw-bold px-4">GET UP VMP&trade; Security CENTRAL NOW</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img class="img-fluid round border border-white border-3 rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/14.jpg">
            </div>
        </div>
    </div>
</section>

<!-- Divider -->
<hr style="border-top: 2px solid var(--vmp-border); margin: 0;">

<!-- Features Grid Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-5">
            <!-- Left Column -->
            <div class="col-md-6">
                <!-- Feature 1 -->
                <div class="mb-5">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Your Global Security Posture in a Single View</h4>
                    <p style="color: var(--vmp-text-light); line-height: 1.8;">
                        VMP&trade; Security Central aggregates security events across all your websites and presents them in a single prioritized view. Within the Central dashboard you can quickly understand which sites have issues and which sites have critical security issues with just a few clicks. Receive notifications about security events via email, Slack or get Discord.
                    </p>
                </div>
                
                <!-- Feature 2 -->
                <div class="mb-5">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Template Based Configuration Management</h4>
                    <p style="color: var(--vmp-text-light); line-height: 1.8;">
                        VMP&trade; Security Central provides an efficient template-based configuration management system to make it simple to manage a large number of WordPress websites running VMP&trade; Security. Templates allow you to standardize security across your sites and avoid having to hand-configure each website.
                    </p>
                </div>
            </div>
            
            <!-- Right Column -->
            <div class="col-md-6">
                <!-- Feature 3 -->
                <div class="mb-5">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Launch Scans Across All Sites with One Click</h4>
                    <p style="color: var(--vmp-text-light); line-height: 1.8;">
                        VMP&trade; Security Central allows you to launch scans and view scan results both by individual sites and for all of your sites from one location. Scan results for all sites appear in a single Central dashboard to identify sites by highest severity findings. In the case of a server vulnerability or other issue, a scan across all sites is an essential feature.
                    </p>
                </div>
                
                <!-- Feature 4 -->
                <div class="mb-5">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Track Security Events and Audit History</h4>
                    <p style="color: var(--vmp-text-light); line-height: 1.8;">
                        Monitor your site activity with security events and audit log history through VMP&trade; Security Central. Central has a comprehensive analytics dashboard that lets you discover and identify security activity across your sites. The Audit Log is site-specific and accessed through the main Central dashboard. It tracks a comprehensive history of events on sites and is available with paid licenses.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Teams Support Section -->
<section class="py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="h3 fw-normal mb-4" style="color: var(--vmp-text-light);">VMP&trade; Security Central Supports Teams</h2>
                <p class="mx-auto" style="color: var(--vmp-text); max-width: 800px; line-height: 1.8;">
                    VMP&trade; Security Central now includes support for teams. Invite team members to access configuration management for all sites. Team members can see security status, scan results, initiate scans, and configure security policies, helping you delegate security and maximize your team's productivity.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Saves Time Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="h3 fw-bold mb-4" style="color: var(--vmp-text);">VMP&trade; Security Central Saves Time</h2>
                <p class="mb-3" style="color: var(--vmp-text); line-height: 1.8;">
                    At VMP&trade; Security, we use our own product, and some of us manage many websites. It became clear that signing into multiple sites to evaluate their security posture was inefficient. So we created VMP&trade; Security Central and, rather than launching it as a paid service, we made it completely free for all VMP&trade; Security users.
                </p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid round border border-white border-3 rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/15.jpg">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>