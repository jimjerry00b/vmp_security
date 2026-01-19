<?php
/*
Template Name: About Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>About - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="About page of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section -->
<section class="py-5 bg-light text-center text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="VMP&trade; Security Intelligence" class="mb-4" style="max-width: 250px;">
                <h1 class="display-5 fw-bold mb-4" style="color: var(--vmp-primary-dark);">VMP&trade; Security Intelligence</h1>
                <p class="lead mb-4">VMP&trade; Security Intelligence is an industry-leading WordPress vulnerability database and webhook integration system. It provides real-time notifications of new vulnerabilities in WordPress plugins, themes, and core. The database is actively maintained by a team of highly experienced and industry-leading vulnerability researchers and analysts with decades of vulnerabilities added per week.</p>
                <p class="mb-4">VMP&trade; Security Intelligence provides access to more than just an industry leading public data set of WordPress vulnerabilities. The features include:</p>
            </div>
        </div>
    </div>
</section>

<!-- Features List Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <ul class="list-unstyled">
                    <li class="mb-3 d-flex align-items-start">
                        <span class="text-success me-2">✓</span>
                        <span>An API endpoint to retrieve an up-to-date database of WordPress vulnerabilities with detailed information on each vulnerability</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <span class="text-success me-2">✓</span>
                        <span>A webhook integration to receive notifications on the latest vulnerabilities added or updated in real-time via Slack, Discord, or a custom HTTP application</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <span class="text-success me-2">✓</span>
                        <span>A robust search engine to browse, research, and cross-reference published vulnerabilities affecting WordPress plugins, themes, and core</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <span class="text-success me-2">✓</span>
                        <span>A dashboard interface to track data and trends spanning upwards of 3 years of vulnerabilities</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <span class="text-success me-2">✓</span>
                        <span>A scanning program that reaches researchers for their contributions to WordPress security</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <span class="text-success me-2">✓</span>
                        <span>5 different pre-built personalized profiles for researchers to share their work and achievements in WordPress security</span>
                    </li>
                </ul>
                <div class="alert alert-info mt-4 p-4" style="background-color: #e8f4f8; border-color: var(--vmp-primary-dark);">
                    <strong>All completely FREE for both commercial and personal use.</strong>
                </div>                
            </div>
        </div>
    </div>
</section>

<!-- Mission Statement Section -->
<section class="py-5" style="background-color: var(--vmp-gray);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="h4 fw-bold mb-4" style="color: var(--vmp-primary);">VMP&trade; Security Intelligence Mission Statement</h2>
                <p class="mb-3">Our mission with VMP&trade; Security Intelligence is to ensure that high-quality robust vulnerability information remains easily accessible and free for everyone, including enterprises.</p>
                <p class="mb-3">Vulnerabilities in open-source software, such as WordPress, are discovered by a community of researchers dedicating hours to testing and reviewing code. Though our own analysts spend numerous hours maintaining the database and ensuring its accuracy, independent researchers discover the vast majority of vulnerabilities in the WordPress ecosystem. We believe in sharing to prosper in life, enabling trust, and that vulnerability information has the potential to save organizations from untold damage. In making the WordPress ecosystem more secure, we need to ensure that vulnerability information remains free and accessible to everyone, from the largest enterprise to the smallest mom-and-pop shop. This is why we give this data to remain secure.</p>
                <p>That is why we give away our vulnerability information free through all of our delivery methods, and reward researchers through our Bug Bounty Program. It is also why we have the best WordPress vulnerability database on the market despite not charging for any form of access to the data within it.</p>
            </div>
        </div>
    </div>
</section>

<!-- Highlights and Benefits Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="h3 fw-bold mb-5 text-center" style="color: var(--vmp-primary);">Highlights and Benefits of VMP&trade; Security Intelligence</h2>
                
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="h5 fw-bold mb-3" style="color: var(--vmp-primary);">Free HTTP & Slack/Discord Webhook Integration</h3>
                                <p class="mb-3">Signing up for all the latest information is a critical first step for securing the security of WordPress sites. While adequate security controls and our industry-leading web application firewall provide sound protection for WordPress sites, it is important to know when vulnerabilities are disclosed in the software powering your sites so that you can actively prioritize patching.</p>
                                <p class="mb-3">VMP&trade; Security Intelligence webhook integration allows you to passively receive notifications as vulnerabilities are disclosed. Integrations can set up Slack or Discord webhook integration to be notified of the latest vulnerabilities in a specific platform. Our webhook integration also supports HTTP integration to develop your own systems and ensure they're notified of vulnerabilities as soon as they are disclosed. <strong>No other WordPress database offers this kind of controlled free access to real-time vulnerability information.</strong></p>
                                <a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">Learn how to get started with webhooks here.</a>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="h5 fw-bold mb-3" style="color: var(--vmp-primary);">Real-Time Threat Intelligence Metrics</h3>
                                <p class="mb-3">VMP&trade; Security Intelligence isn't just a tool - it's the vulnerability database on the dashboard you can find metrics such as how many attacks occur over the span of hours, 7 days, 60-90 days, how many vulnerabilities have been disclosed over the years, the top 10 most vulnerable plugins and themes, and much more. This way you can track trends, track when new vulnerabilities are disclosed, and much more information.</p>
                                <p>In addition, any vulnerabilities that warrant the release of its own news post are displayed as individual attack statistics before the vulnerability information for users can now assess volume of these vulnerabilities and access articles onboard.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="h5 fw-bold mb-3" style="color: var(--vmp-primary);">Highly Flexible Search Engine for Vulnerabilities</h3>
                                <p class="mb-3">One unique benefit of the VMP&trade; Security Intelligence platform is the ability to browse through known WordPress vulnerabilities recorded to date and search. We added values of any components with a comparable vulnerability history at a glance. With our database it is possible to search by plugin/theme names, CVEs, CVSS scores, CWE types, vulnerability types, and more. Making possibly research operations much less effortless to search for anyone using the VMP&trade; Security Intelligence search engine.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="h5 fw-bold mb-3" style="color: var(--vmp-primary);">Managed by Industry Leading Professionals</h3>
                                <p class="mb-3">VMP&trade; Security Intelligence is supported by a dedicated team of highly experienced researchers with a strong backgrounds in web application security. Launch of issues, tickets and managed by some of the top WordPress security researchers in the industry. This means that all of the vulnerabilities recorded in our database are reviewed by security professionals with numerous security certifications including OSCP, CISSP, GWAPT, Security+, GXPN and more. You don't want to worry whether the accuracy of the data is accurate, whether it's up to date, or whether the severity of the vulnerability is accurate. You can be confident you'll get the best, most accurate information available on vulnerabilities in the WordPress ecosystem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Data Integration Section -->
<section class="py-5" style="background-color: var(--vmp-gray);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="h5 fw-bold mb-3" style="color: var(--vmp-primary);">Access to our Complete Database of High-Quality WordPress Vulnerability Information</h3>
                                <p class="mb-3">Access to high-quality data about WordPress vulnerabilities is critical for teams creating or maintaining sites or more user-offered sites. VMP&trade; Security Intelligence provides access to an extensively data base comprising all manner of vulnerability information with a variety of applications that teams can use. Creds, CVEs, CWES, CVSS Scores, CVE IDs, and recommended remediation. This information can easily be integrated into a variety of applications, allowing teams to discover sensitive data in their codebases, and empower DevSecOps teams to conduct business as usual without worrying about new vulnerabilities affecting their customers, and serve upon independent researchers and site owners build integrations for tools like WP-CLI and Roakit.</p>
                                <p class="mb-3">The API provides comprehensive structured data in JSON output, enabling consistent database of vulnerability information maintained by industry-leading security professionals, or without much difficulty.</p>
                                <a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">Review the documentation to get started using the vulnerability database API today.</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="h5 fw-bold mb-3" style="color: var(--vmp-primary);">Integrated into VMP&trade; Security CLI for High-Performance Vulnerability Scanning</h3>
                                <p class="mb-3">VMP&trade; Security Intelligence has integrated the database into the WordPress CLI scanner to users leveraging direct access to build, test, and safeguard for known vulnerabilities in WordPress plugins, themes, and core. This is completely free to use for commercial purposes, so learning organizations can conduct vulnerability scanning in a highly scalable and performant fashion.</p>
                                <p class="mb-3">You can learn more about VMP&trade; Security CLI and potential use cases for VMP&trade; Security Intelligence public database.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center mb-5">
                    <p class="lead">Whether you're a security researcher, an enterprise organization, a hosting provider, or just a simple blog owner, VMP&trade; Security Intelligence is for you.</p>
                </div>

                <div class="card border-0 shadow-sm mb-4 p-4" style="background-color: #f9f9f9;">
                    <p class="mb-3">If you're looking to <strong>easily search the most comprehensive WordPress vulnerability database</strong> after conducting simple or theme vulnerability research, or you're <strong>interested in checking out the daily check-ins</strong> going familiar with the VMP&trade; Security Intelligence public database.</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary btn-lg" style="background: var(--vmp-warning); border-color: var(--vmp-warning);">CHECK OUT VMPSECURITY INTELLIGENCE</a>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mb-4 p-4" style="background-color: #f9f9f9;">
                    <p class="mb-3">If you'd like to <strong>earn rewards for your security contributions to WordPress</strong>, or have a <strong>public profile showcasing all of your contributions and initiatives</strong>, you can learn more about the VMP&trade; Security Intelligence Bug Bounty Program by clicking <strong>Learn More</strong> and register as a researcher today.</p>
                    <div class="text-center">
                        <a href="#" class="btn me-2 mb-2" style="background: var(--vmp-warning); border-color: var(--vmp-warning); color: white;">LEARN MORE</a>
                        <a href="#" class="btn mb-2" style="background: var(--vmp-primary); border-color: var(--vmp-primary); color: white;">REGISTER NOW</a>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mb-4 p-4" style="background-color: #f9f9f9;">
                    <p class="mb-3">If you'd like to receive real-time updates on vulnerabilities added months/contact to the VMP&trade; Security Intelligence WordPress Vulnerability Database, then our HTTP and Slack/Discord Webhook integrations are a perfect fit for you. You can get started with webhooks by emailing us account on vmpsecurity.com then navigating to integrations.</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary btn-lg" style="background: var(--vmp-warning); border-color: var(--vmp-warning);">LEARN MORE ABOUT WEBHOOKS</a>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mb-4 p-4" style="background-color: #f9f9f9;">
                    <p class="mb-3">If you need access to a comprehensive and complete database dump of the thousands of known vulnerabilities affecting WordPress plugins, themes, and core, formatted in JSON, to integrate into a product, service, or application, then you can familiarize yourself with the VMP&trade; Security Intelligence Vulnerability Data API.</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary btn-lg" style="background: var(--vmp-warning); border-color: var(--vmp-warning);">GET STARTED WITH API ENDPOINTS</a>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mb-4 p-4" style="background-color: #f9f9f9;">
                    <p class="mb-3">If you'd like to conduct <strong>server-level vulnerability scanning without building a custom service or integration</strong>, then get started with VMP&trade; Security CLI, a robust security scanner built to detect WordPress-based vulnerabilities and PHP vulnerabilities in a highly performant and scalable way, today.</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary btn-lg" style="background: var(--vmp-warning); border-color: var(--vmp-warning);">LEARN MORE ABOUT VMPSECURITY CLI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>