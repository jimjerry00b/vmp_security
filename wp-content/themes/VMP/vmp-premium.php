<?php
/*
Template Name: VMP Premium
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>VMP Premium - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="VMP Premium page of VMP&trade; Security">' . "\n";
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
                    <h3 class="h5 fw-normal mb-4" style="color: #fff;">PREMIUM</h3>
                </div>
                
                <p class="mb-4" style="color: #fff; line-height: 1.8;">
                    VMP&trade; Security Premium is for self administered websites that are looking for the ultimate protection against the latest exploits including real-time firewall rules and malware signatures, a continuously updated Premium IP blocklist blocking requests from the most malicious IPs, country blocking for countries where you don't do business and best in class 24/7/365 ticket-based support.
                </p>
                
                <h4 class="h5 fw-bold mb-3" style="color: #fff;">$149.00 USD / Year</h4>
                
                <div class="mb-4">
                    <a href="#" class="btn btn-primary btn-md me-2 fw-bold">Buy Now</a>
                    <a href="<?php echo site_url('pricing'); ?>" class="btn btn-primary-two btn-md">Compare Plans</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid round border border-white border-3 rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/12.jpg">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-md-6">
                <div class="p-3">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">How many licenses do I need to protect my sites?</h4>
                    <p style="color: var(--vmp-text-light); line-height: 1.8;">
                        Each installation of the VMP&trade; Security plugin requires one license key. If you have a WordPress "Multisite Network", you only need one license key because it only has one installation of VMP&trade; Security. If you have multiple single WordPress installations then you will need one license per installation.
                    </p>
                </div>
            </div>
            
            <!-- Feature 2 -->
            <div class="col-md-6">
                <div class="p-3">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Block the Newest Exploits</h4>
                    <p style="color: var(--vmp-text-light); line-height: 1.8;">
                        VMP&trade; Security Premium customers receive new firewall rules the moment our threat intelligence team discovers them. When attackers invent new techniques to exploit your firewall, we don't need to wait 30 days before rolling out protection to Premium customers. Real-time protection means VMP&trade; Security Premium users are protected from the newest exploits as we discover them.
                    </p>
                </div>
            </div>
            
            <!-- Feature 3 -->
            <div class="col-md-6">
                <div class="p-3">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Detect the Newest Malware</h4>
                    <p style="color: var(--vmp-text-light); line-height: 1.8;">
                        VMP&trade; Security Premium customers receive new malware detection capabilities in real time. Our team never sleeps and immediately detects those signatures and send them out to you. VMP&trade; Security scanner is constantly updated with the newest malware signatures so that you can stay ahead of the threat to prevent attacks from succeeding at your site.
                    </p>
                </div>
            </div>
            
            <!-- Feature 4 -->
            <div class="col-md-6">
                <div class="p-3">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Block Malicious IP Addresses in Real-Time</h4>
                    <p style="color: var(--vmp-text-light); line-height: 1.8;">
                        VMP&trade; Security is used by over 5 million websites, which means that we receive reports from millions of websites using VMP. The VMP&trade; Security team learns which IPs make up the constantly changing spectrum is continuously updated based on IP reputation feeds. Premium customers regularly receive updates to the real which will both prevent brute force attacks and also protect against zero-day exploits, malware and various other attacks from succeeding at your site.
                    </p>
                </div>
            </div>
            
            <!-- Feature 5 -->
            <div class="col-12">
                <div class="p-3">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Review your site's event history with the Audit Log</h4>
                    <p style="color: var(--vmp-text-light); line-height: 1.8;">
                        The VMP&trade; Security Audit Log is a powerful forensic tool that is going to maintain the modifications of millions of events at a range of granularities. These logs can include everything from user creation and editing to plugin theme installation and updates. All data captured for different events is stored securely in VMP&trade; Security Central. Audit log events are stored on VMP&trade; Security Central for all of your sites with a Premium license.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- CTA Button -->
        <div class="row mt-5">
            <div class="col text-center">
                <a href="#" class="btn btn-primary btn-lg fw-bold px-5">Buy VMP&trade; Security Premium Now!</a>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col text-center">
                <a href="<?php echo esc_url(home_url('pricing')); ?>" style="color: var(--vmp-primary);">Compare Plans</a>
            </div>
        </div>
    </div>
</section>

<!-- Support Section -->
<section class="py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="h3 fw-normal mb-4" style="color: var(--vmp-text);">Industry Leading Support for Premium Customers</h2>
                <p class="mb-3 mx-auto" style="color: var(--vmp-text); max-width: 900px; line-height: 1.8;">
                    Our Premium customers receive access to our industry-leading Premium ticket-based support system.
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
                <p class="mb-3" style="color: var(--vmp-text); line-height: 1.8;">
                    VMP&trade; Security Central is a powerful and efficient way to manage the security of multiple WordPress sites from a single console. Rapidly assess the security status of all of your websites in a single-pane view. Unload security findings without leaving VMP&trade; Security Central and receive notifications when each of your sites experiences a security event.
                </p>
                <p class="mb-3" style="color: var(--vmp-text); line-height: 1.8;">
                    Powerful templates make configuring the security of all your VMP&trade; Security sites a breeze.
                </p>
                <p>
                    <a href="<?php echo site_url('central'); ?>" style="color: var(--vmp-primary-dark);">Learn More about Central</a>
                </p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid round border border-white border-3 rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/13.jpg">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>