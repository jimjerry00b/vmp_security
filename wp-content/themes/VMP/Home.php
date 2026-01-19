<?php
/*
Template Name: Home Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Home - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Home page of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section -->
<section class="hero-section text-center py-5" style="color: #000; background: #fff;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-2 fw-bold mb-4" style="color: var(--vmp-primary); letter-spacing: -1px;">VMP&trade; Security</h1>
                <p class="lead mb-4 fs-4" style="color: #555; line-height: 1.8;">Protecting WordPress sites around the world.</p>
                <a href="<?php echo esc_url(home_url('pricing')); ?>" class="btn btn-primary btn-lg px-5 py-3 fw-bold text-uppercase" style="letter-spacing: 1px; border-radius: 50px; box-shadow: 0 4px 15px rgba(245, 166, 35, 0.3);">
                    Learn more <i class="ms-2">→</i>
                </a>
            </div>
        </div>
        
        <!-- Product Icons -->
        <div class="row mt-5 pt-5">
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-end flex-wrap gap-5">
                    <!-- FREE -->
                    <a href="<?php echo esc_url(home_url('pricing')); ?>" class="text-decoration-none">
                    <div class="text-center product-card" style="transition: transform 0.3s ease;">
                        <div class="mb-3" style="filter: drop-shadow(0 8px 20px rgba(52, 152, 219, 0.3));">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" style="width: 50px; height: auto;" alt="Free Product Icon">
                        </div>
                        <p class="text-uppercase fw-bold mb-0" style="letter-spacing: 3px; font-size: 0.9rem; color: #2c3e50;">FREE</p>
                    </div>
                     </a>
                    
                    <!-- PREMIUM -->
                    <a href="<?php echo esc_url(home_url('pricing')); ?>" class="text-decoration-none">
                    <div class="text-center product-card" style="transition: transform 0.3s ease;">
                        <div class="mb-3" style="filter: drop-shadow(0 8px 20px rgba(22, 160, 133, 0.3));">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" style="width: 50px; height: auto;" alt="Premium Product Icon">
                        </div>
                        <p class="text-uppercase fw-bold mb-0" style="letter-spacing: 3px; font-size: 0.9rem; color: #2c3e50;">PREMIUM</p>
                    </div>
                    </a>
                    
                    <!-- CARE -->
                    <!-- <div class="text-center product-card" style="transition: transform 0.3s ease;">
                        <div class="mb-3" style="filter: drop-shadow(0 8px 20px rgba(39, 174, 96, 0.3));">
                            <svg width="130" height="130" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M60 10L20 35V70L60 95L100 70V35L60 10Z" fill="#27ae60"/>
                                <path d="M45 40L45 65M45 40L60 35M45 40L35 45M60 35L75 40M60 35V65M75 40V65M75 40L85 45" stroke="#fff" stroke-width="4" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <p class="text-uppercase fw-bold mb-0" style="letter-spacing: 3px; font-size: 0.9rem; color: #2c3e50;">CARE</p>
                    </div> -->
                    
                    <!-- RESPONSE -->
                    <!-- <div class="text-center product-card" style="transition: transform 0.3s ease;">
                        <div class="mb-3" style="filter: drop-shadow(0 8px 20px rgba(155, 89, 182, 0.3));">
                            <svg width="130" height="130" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M60 10L20 35V70L60 95L100 70V35L60 10Z" fill="#9b59b6"/>
                                <path d="M45 40L45 65M45 40L60 35M45 40L35 45M60 35L75 40M60 35V65M75 40V65M75 40L85 45" stroke="#fff" stroke-width="4" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <p class="text-uppercase fw-bold mb-0" style="letter-spacing: 3px; font-size: 0.9rem; color: #2c3e50;">RESPONSE</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Plans Comparison Section -->
<section class="plans-section py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="mb-3" style="color: var(--vmp-text);">Discover which plan is right for you</h2>
        </div>
        
        <div class="row justify-content-center g-4">
            <!-- FREE Plan -->
            <div class="col-lg-5 col-md-6">
                <div class="card h-100 shadow-sm" style="border: 2px solid #e9ecef; border-radius: 10px;">
                    <div class="card-body text-center p-4">
                        <h3 class="mb-3" style="color: var(--vmp-primary); font-weight: 700;">
                            VMP <span style="font-weight: 400;">Security</span>
                            <div style="font-weight: 400; font-size: 1.2rem; color: #6c757d;">FREE</div>
                        </h3>
                        <p class="mb-4" style="color: var(--vmp-text-light); line-height: 1.6;">
                            Get core VMP Firewall and Malware Scan features with this 100% free plugin. Keep your site safe with VMP. This version is still 100% tested against your code.
                        </p>
                        <a href="<?php echo esc_url(home_url('vmp-free')); ?>" class="btn btn-outline-primary px-4 py-2 text-decoration-none" style="border-radius: 5px; font-weight: 600;">LEARN MORE</a>
                    </div>
                </div>
            </div>
            
            <!-- PREMIUM Plan -->
            <div class="col-lg-5 col-md-6">
                <div class="card h-100 shadow-sm" style="border: 2px solid var(--vmp-primary); border-radius: 10px;">
                    <div class="card-body text-center p-4">
                        <h3 class="mb-3" style="color: var(--vmp-primary); font-weight: 700;">
                            VMP <span style="font-weight: 400;">Security</span>
                            <div style="font-weight: 400; font-size: 1.2rem; color: #6c757d;">PREMIUM</div>
                        </h3>
                        <p class="mb-4" style="color: var(--vmp-text-light); line-height: 1.6;">
                            Real-time updates in threat defense rules. Real-time Firewall and Malware Scan updates protect you. Country Blocking, access to the world's best WordPress security engineers.
                        </p>
                        <a href="<?php echo esc_url(home_url('vmp-premium')); ?>" class="btn px-4 py-2 text-decoration-none" style="background-color: var(--vmp-primary); color: white; border-radius: 5px; font-weight: 600;">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</section>

<!-- Leader Statement -->
<section class="leader-section py-5" style="background-color: #fff;">
    <div class="container">
        <div class="text-center">
            <h3 class="mb-3" style="color: var(--vmp-text);">VMP&trade; Security is the global leader in WordPress security.</h3>
            <p class="mb-4" style="color: var(--vmp-text-light);">
                The average WordPress site is attacked more than <strong>44 requests</strong> for every hour since their website is online. VMP&trade; Security provides <strong>enterprise plugins and themes</strong>, and other points of entry. Websites protected by VMP are protected from these attacks and an average of <strong>25M</strong> hits using blocked access per network every day.
            </p>
            <a href="<?php echo esc_url(home_url('pricing')); ?>" class="btn btn-success px-5 py-3" style="border-radius: 5px; font-weight: 600; background-color: var(--vmp-success);">Secure your site today ></a>
        </div>
    </div>
</section>

<!-- VMP Central Section -->
<section class="vmp-central-section py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="d-flex align-items-center mb-3">
                    <div class="me-3" style="width: 80px; height: 80px; background-color: var(--vmp-primary); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="20" stroke="white" stroke-width="3"/>
                            <path d="M25 15V25L32 32" stroke="white" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="mb-0" style="color: var(--vmp-text);">Manage all of your sites in one place with</h4>
                        <h3 class="mb-0" style="color: var(--vmp-primary); font-weight: 700;">VMP Central</h3>
                    </div>
                </div>
                <p style="color: var(--vmp-text-light); line-height: 1.8;">
                    <strong>Save Time and Streamline</strong> Your Work. Whether you manage a few or all of your WordPress websites, VMP Central offers a <strong>free for all</strong> tier. It organizes all your site info, offers a <strong>comprehensive view</strong> of all security events at all your WordPress websites, enables VMP Remote security for all your installs, offers <strong>health tools</strong> showing domains, and server security status of all your WordPress websites, whether using VMP Firewall or not, among other <strong>premium features</strong> and capabilities. With <strong>VMP Care</strong> Central manages websites for multiple websites.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.jpg" alt="VMP Central" class="img-fluid rounded shadow" style="max-width: 100%; border: 3px solid var(--vmp-border);">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- VMP CLI Section -->
<section class="vmp-cli-section py-5" style="background-color: #1a1a1a; color: white;">
    <div class="container text-center">
        <h2 class="mb-3" style="font-size: 2rem;">Coming Soon</h2>
        <h1 class="mb-2" style="font-size: 3.5rem; font-weight: 700;">
            <span style="color: var(--vmp-primary-dark);">VMP</span> <span style="color: white;">Security</span>
        </h1>
        <h2 class="mb-4" style="font-size: 2.5rem; font-weight: 300; letter-spacing: 5px;">CLI</h2>
        <p class="mt-4 mx-auto" style="max-width: 700px; font-size: 1.2rem; line-height: 1.6;">
            A high performance security scanner for a second line of detection
        </p>
        <p class="mx-auto" style="max-width: 800px; color: #adb5bd; line-height: 1.6;">
            Secure your system at the server level with our malware and vulnerability scanner
        </p>
    </div>
</section>

<!-- VMP Intelligence Section -->
<section class="vmp-intelligence-section py-5" style="background-color: var(--vmp-primary); color: white;">
    <div class="container text-center">
        <div class="mb-4">
            <div class="d-inline-flex align-items-center justify-content-center mb-3" style="width: 100px; height: 100px; background-color: var(--vmp-warning); border-radius: 10px;">
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30 10L10 20V40L30 50L50 40V20L30 10Z" fill="#1a1a1a"/>
                    <circle cx="30" cy="30" r="8" fill="white"/>
                </svg>
            </div>
        </div>
        <h1 class="mb-3" style="font-size: 3rem; font-weight: 700;">
            <span style="color: var(--vmp-warning);">VMP</span> <span style="color: white;">Security</span>
        </h1>
        <h2 class="mb-4" style="font-size: 2rem; font-weight: 300; letter-spacing: 3px;">INTELLIGENCE</h2>
        <p class="mt-4 mx-auto" style="max-width: 700px; font-size: 1.2rem; line-height: 1.6;">
            WordPress vulnerability information at your fingertips
        </p>
        <p class="mx-auto" style="max-width: 800px; color: #adb5bd; line-height: 1.6;">
            Discover the same Threat Intelligence Data used to power our popular VMP&trade; Security plugin
        </p>
    </div>
</section>

<!-- Blog/News Section -->
<section class="blog-news-section py-5" style="background-color: #fff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="mb-3" style="color: var(--vmp-text);">Breaking news from our blog</h2>
        </div>
        
        <div class="row g-4">
            <!-- Blog Post 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2.jpg" class="card-img-top" alt="Blog Post">
                    <div class="card-body">
                        <h5 class="card-title" style="color: var(--vmp-text); font-weight: 600;">2026 WordPress Security Trends and Predictions</h5>
                        <p class="card-text" style="color: var(--vmp-text-light); font-size: 0.9rem;">January 12th, 2026</p>
                        <p class="card-text" style="color: var(--vmp-text-light); line-height: 1.6;">Discover the latest security threats and protection strategies for WordPress sites in 2026. Essential reading for site owners.</p>
                    </div>
                </div>
            </div>
            
            <!-- Blog Post 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3.jpg" class="card-img-top" alt="Blog Post">
                    <div class="card-body">
                        <h5 class="card-title" style="color: var(--vmp-text); font-weight: 600;">Critical WordPress Plugin Vulnerability Patched</h5>
                        <p class="card-text" style="color: var(--vmp-text-light); font-size: 0.9rem;">December 27th, 2025</p>
                        <p class="card-text" style="color: var(--vmp-text-light); line-height: 1.6;">A critical vulnerability has been discovered and patched in a popular WordPress plugin affecting over 100K installations.</p>
                    </div>
                </div>
            </div>
            
            <!-- Blog Post 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.jpg" class="card-img-top" alt="Blog Post">
                    <div class="card-body">
                        <h5 class="card-title" style="color: var(--vmp-text); font-weight: 600;">VMP Intelligence Weekly WordPress Security Report</h5>
                        <p class="card-text" style="color: var(--vmp-text-light); font-size: 0.9rem;">December 23rd, 2025</p>
                        <p class="card-text" style="color: var(--vmp-text-light); line-height: 1.6;">Last week we saw 3.2 vulnerabilities discovered and reported across the WordPress ecosystem.</p>
                    </div>
                </div>
            </div>
            
            <!-- Blog Post 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5.jpg" class="card-img-top" alt="Blog Post">
                    <div class="card-body">
                        <h5 class="card-title" style="color: var(--vmp-text); font-weight: 600;">100,000 WordPress Sites Hacked Via This Backdoor Plugin</h5>
                        <p class="card-text" style="color: var(--vmp-text-light); font-size: 0.9rem;">December 20th, 2025</p>
                        <p class="card-text" style="color: var(--vmp-text-light); line-height: 1.6;">Security researchers have uncovered a massive campaign targeting WordPress sites through a backdoor plugin.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Second Row of Blog Posts -->
        <div class="row g-4 mt-2">
            <!-- Blog Post 5 -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/6.jpg" class="card-img-top" alt="Blog Post">
                    <div class="card-body">
                        <h5 class="card-title" style="color: var(--vmp-text); font-weight: 600;">VMP Bug Bounty Program Monthly Report</h5>
                        <p class="card-text" style="color: var(--vmp-text-light); font-size: 0.9rem;">December 16th, 2025</p>
                        <p class="card-text" style="color: var(--vmp-text-light); line-height: 1.6;">VMP Bug Bounty Program receives more than 100 security vulnerability submissions this month from researchers.</p>
                    </div>
                </div>
            </div>
            
            <!-- Blog Post 6 -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/7.jpg" class="card-img-top" alt="Blog Post">
                    <div class="card-body">
                        <h5 class="card-title" style="color: var(--vmp-text); font-weight: 600;">VMP Intelligence Weekly WordPress Vulnerability Report</h5>
                        <p class="card-text" style="color: var(--vmp-text-light); font-size: 0.9rem;">December 16th, 2025</p>
                        <p class="card-text" style="color: var(--vmp-text-light); line-height: 1.6;">Last week saw substantial increase in attempted attacks. Our security team has been actively monitoring these trends.</p>
                    </div>
                </div>
            </div>
            
            <!-- Blog Post 7 -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/8.jpg" class="card-img-top" alt="Blog Post">
                    <div class="card-body">
                        <h5 class="card-title" style="color: var(--vmp-text); font-weight: 600;">Attackers Actively Exploiting Critical WP Plugin Vulnerability</h5>
                        <p class="card-text" style="color: var(--vmp-text-light); font-size: 0.9rem;">December 13th, 2025</p>
                        <p class="card-text" style="color: var(--vmp-text-light); line-height: 1.6;">Threat researchers at Company LLC Extension vulnerability is being actively exploited in the wild targeting admins.</p>
                    </div>
                </div>
            </div>
            
            <!-- Blog Post 8 -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/9.jpg" class="card-img-top" alt="Blog Post">
                    <div class="card-body">
                        <h5 class="card-title" style="color: var(--vmp-text); font-weight: 600;">100,000 WordPress Sites Infected Via Balada Injector Compromised WordPress Plugin</h5>
                        <p class="card-text" style="color: var(--vmp-text-light); font-size: 0.9rem;">December 10th, 2025</p>
                        <p class="card-text" style="color: var(--vmp-text-light); line-height: 1.6;">Balada Injector malware campaign has infected more than 100K WordPress sites compromised through plugin flaws.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.product-card:hover {
    transform: translateY(-10px);
    cursor: pointer;
}

.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}

.btn {
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}
</style>

<?php get_footer(); ?>