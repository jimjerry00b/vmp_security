<?php
/*
Template Name: Intelligence Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Intelligence - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Intelligence page of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="VMP&trade; Security Logo" style="width: 80px; height: auto;" class="mb-3">
                    <h2 class="fw-bold mb-0" style="color: var(--vmp-warning); font-size: 2rem;">VMP&trade; Security</h2>
                    <h3 class="mb-3" style="color: var(--vmp-text); font-size: 1.8rem; font-weight: 400;">INTELLIGENCE</h3>
                </div>
                
                <p class="mb-4" style="color: var(--vmp-text); line-height: 1.8; font-size: 1rem;">
                    VMP&trade; Security Intelligence is an industry-leading WordPress vulnerability database and evolving Threat Intelligence platform that catalogs over a significant number of recorded IoC vulnerabilities in WordPress plugins, themes, and core. The database is actively maintained by a community of researchers who have contributed to VMP&trade; Security's vulnerability research and analysts with dozens of vulnerabilities added per week.
                </p>
                
                <p class="mb-4" style="color: var(--vmp-text); line-height: 1.8;">
                    VMP&trade; Security Intelligence provides access to more than just an industry-leading public-facing WordPress security resource:
                </p>
                
                <ul class="list-unstyled mb-4 text-start mx-auto" style="max-width: 700px; color: var(--vmp-text);">
                    <li class="mb-2">• An API endpoint to retrieve our complete database of WordPress vulnerabilities with detailed information for each vulnerability</li>
                    <li class="mb-2">• A webhook integration to receive notifications on the latest vulnerabilities added or updated in real-time to Slack, Discord, or a custom HTTP application</li>
                    <li class="mb-2">• A downloadable JSON dump database of researched and confirmed vulnerabilities affecting VMP&trade; Security plugins, themes, and core</li>
                    <li class="mb-2">• A dashboard with high level data and related stats across our network of 5 million plugin/theme installs</li>
                    <li class="mb-2">• A bug bounty program that rewards researchers for their contributions to WordPress security</li>
                    <li class="mb-2">• An API providing personalized context for researchers to share their work and achievements in WordPress security</li>
                </ul>
                
                <div class="mb-3">
                    <a href="<?php echo esc_url(home_url('dashboard-page')); ?>" class="btn btn-primary btn-md fw-bold px-4">CHECK OUT THE DASHBOARD NOW</a>
                </div>
            </div>

            <div class="col-lg-6 mx-auto">
                <img class="img-fluid round border border-white border-3 rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/16.jpg">
            </div>
        </div>
    </div>
</section>

<!-- Mission Statement Section -->
<section class="py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h3 class="h4 fw-bold mb-4 text-center" style="color: var(--vmp-text);">VMP&trade; Security Intelligence Mission Statement</h3>
                <p class="mb-3" style="color: var(--vmp-text); line-height: 1.8;">
                    Our mission with VMP&trade; Security Intelligence is to ensure that high-quality robust vulnerability information remains easily accessible and free for everyone, including enterprises.
                </p>
                <p class="mb-3" style="color: var(--vmp-text); line-height: 1.8;">
                    Vulnerabilities in open-source WordPress are discovered by a community of researchers dedicating hours to testing and reviewing code. Through our own analysts spend numerous hours maintaining the database and ensuring its accuracy, independent researchers discover the vast majority of vulnerabilities in the WordPress ecosystem. We believe it is wrong to prevent that information and make it only a tool for those supporting security and only serving to weaken the WordPress ecosystem as a whole, which is why we're committed to making the VMP&trade; Security ecosystem more secure and as open and transparent as possible for all WordPress users to remain secure.
                </p>
                <p class="mb-3" style="color: var(--vmp-text); line-height: 1.8;">
                    That is why we will to make any vulnerability information free through all of our delivery methods, and reward researchers through our Bug Bounty Program. It is also why we have the best WordPress vulnerability database on the market-despite not charging for any form of access to the data within it.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Highlights and Benefits Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h3 class="h4 fw-bold mb-4" style="color: var(--vmp-text);">Highlights and Benefits of VMP&trade; Security Intelligence</h3>
            </div>
        </div>
        
        <div class="row g-5">
            <!-- Left Column -->
            <div class="col-md-6">
                <!-- Feature 1 -->
                <div class="mb-5">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Free HTTP & Slack/Discord Webhook Integrations</h4>
                    <p style="color: var(--vmp-text-light); line-height: 1.8;">
                        Staying on top of the latest vulnerabilities is crucial for ensuring the security of WordPress sites. While adequate security controls and our industry-leading web application firewall provide recent protection to WordPress sites, to do that same job we provide two free integration options which push to you the latest vulnerabilities, the moment they are published. No security system is perfect, as maintaining layers of security is critical. Use webhook integrations, and configure them through the VMP&trade; Security Intelligence to receive the method of notification that's right for you. Webhooks post data to an endpoint that you control, or can push the data out to slack or discord so your team is informed of vulnerabilities as soon as they are disclosed. No other WordPress vulnerability database offers this.
                    </p>
                    <p>
                        <a href="#" style="color: var(--vmp-primary);">Learn how to get started with webhooks here</a>
                    </p>
                </div>
                
                <!-- Feature 2 -->
                <div class="mb-5">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Easy API Access to our Complete Database of High-Quality WordPress Vulnerability Information</h4>
                    <p style="color: var(--vmp-text-light); line-height: 1.8;">
                        Access to high-quality information is critical for security researchers, consultants, and bug bounty hunters. VMP&trade; Security Intelligence provides access to low vulnerability data feeds formatted in a consistent and machine-readable JSON structure and SQL format. Every CVE, along with CVSS, CWE, PoC, and vendor patch information is available. Some CVSS and recommended remediation. This information can easily be integrated into a variety of applications both 1st/3rd party without dealing with inconsistent formats or having to parse vulnerability data directly. All WordPress information is available in consistent machine-readable formats. Researchers and server implementations can use information build integrations for tools like WP CLI and Nexus.
                    </p>
                    <p class="mb-3" style="color: var(--vmp-text-light); line-height: 1.8;">
                        Our complete database of vulnerability information organized into industry-leading security architectures can save hours of manual work and searching - absolutely 100% free.
                    </p>
                    <p>
                        <a href="#" style="color: var(--vmp-primary);">Browse the documentation to get started using the vulnerability database API today</a>
                    </p>
                </div>
                
                <!-- Feature 3 -->
                <div class="mb-5">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Open-Source Researcher Badge Support: Highlighting Researchers Who Support the Security of the WordPress Ecosystem</h4>
                    <p style="color: var(--vmp-text-light); line-height: 1.8;">
                        VMP&trade; Security Intelligence has been designed by a security researcher community for security researchers at ease. Our bug bounty program is designed to reward researchers contributing valuable, time to the security of the WordPress ecosystem by providing a platform to attribute our own WordPress Security research and make it easy for security professionals to share. Researcher's security contributions are all highly impactful and rewarded the most, while those that are easy to find more common, or are generally free shouldn't get rewarded the least. We've also made it easy for researchers and security experts to share badge through our API showing their work and achievements.
                    </p>
                    <p>
                        <a href="#" style="color: var(--vmp-primary);">Learn more about the Bug Bounty Program and get started as a researcher here.</a>
                    </p>
                </div>
            </div>
            
            <!-- Right Column -->
            <div class="col-md-6">
                <!-- Feature 4 -->
                <div class="mb-5">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Real-Time Threat Intelligence Metrics</h4>
                    <p style="color: var(--vmp-text-light); line-height: 1.8;">
                        VMP&trade; Security Intelligence isn't just a high-quality vulnerability database. On the dashboard, you can find statistics such as how many attacks were blocked in the past 24 hours, 7 days, and 30 days, how many attacks were detected this WordPress plugin vulnerabilities in the database, how old each is (so you can get a sense of how stale vulnerabilities are), and more. You can understand the extent the number of sites most affected by vulnerabilities, and see statistics on all active installs in the observed network. This information is critical for informing security research and data observations so assure one can attack vectors of these vulnerabilities affecting WordPress websites.
                    </p>
                </div>
                
                <!-- Feature 5 -->
                <div class="mb-5">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Highly Flexible Search Engine for Vulnerabilities</h4>
                    <p style="color: var(--vmp-text-light); line-height: 1.8;">
                        One major benefit of the VMP&trade; Security Intelligence platform is the ability to search our database for vulnerabilities affecting plugins, themes, and core. We are not aware of any competitors with a comparable vulnerability search engine with the same functionality. Not only inclusion is possible via simply searching for a name or keyword, but you can filter by severity, CVE and CVSS and more, making security research, journalism, and due diligence a breeze for anyone using the VMP&trade; Security Intelligence search engine.
                    </p>
                </div>
                
                <!-- Feature 6 -->
                <div class="mb-5">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Managed by Industry-Leading Professionals</h4>
                    <p style="color: var(--vmp-text-light); line-height: 1.8;">
                        VMP&trade; Security vulnerability database is managed by an industry-leading team at the School of Infosec. It's bar and managed by some of the top WordPress vulnerability researchers in the industry. This means that all of the vulnerabilities in our database are confirmed by highly-skilled security professionals with numerous security certifications including CISSP, GIAC, OSCP, Security+, GWAPT, and more. You don't have to worry about information quality or accuracy. We even identify and attribute whether the severity of the vulnerability is accurate. You can be confident that our forth the best, most accurate information available today.
                    </p>
                </div>
                
                <!-- Feature 7 -->
                <div class="mb-5">
                    <h4 class="h5 fw-bold mb-3" style="color: var(--vmp-text);">Integrated into VMP&trade; Security CLI for High-Performance Vulnerability Scanning</h4>
                    <p style="color: var(--vmp-text-light); line-height: 1.8;">
                        VMP&trade; Security Intelligence has integrated the datasets into the VMP&trade; Security CLI command line scanner. This scanner scans sites and networks for known vulnerabilities in WordPress plugins, themes, and core. This is incredibly fast to use for continuous purposes. As IsMalte was updated by adding new detections to our data, it's immediately reflected in VMP&trade; Security CLI scanner, ensuring that your continuous context vulnerability scanning is highly scalable and performant to use for large installations.
                    </p>
                    <p>
                        You can learn more about VMP&trade; Security CLI and potential use cases <a href="#" style="color: var(--vmp-primary);">here</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <p class="fw-bold mb-4" style="color: var(--vmp-text); font-size: 1.1rem;">
                    Whether you're a security researcher, an enterprise organization, a hosting provider, or just a simple blog owner, VMP&trade; Security Intelligence is for you.
                </p>
            </div>
        </div>
        
        <!-- CTA Options -->
        <div class="row mb-4">
            <div class="col-lg-10 mx-auto">
                <p class="mb-3" style="color: var(--vmp-text); line-height: 1.8;">
                    If you're looking to <strong>easily search the most comprehensive WordPress vulnerability database</strong> when conducting an audit or theme vulnerability research, or you're <strong>interested in checking out the latest attack stats and browser info</strong>, you can familiarize yourself with the VMP&trade; Security Intelligence public interface.
                </p>
                <div class="text-center mb-5">
                    <a href="#" class="btn btn-primary btn-md fw-bold px-4">CHECK OUT VMP&trade; Security INTELLIGENCE</a>
                </div>
                
                <p class="mb-3" style="color: var(--vmp-text); line-height: 1.8;">
                    If you'd like to <strong>earn rewards for your security contributions to WordPress</strong>, or have a <strong>public profile showcasing all of your contributions and milestones</strong>, you can learn more about the VMP&trade; Security Intelligence Bug Bounty Program by clicking <a href="#" style="color: var(--vmp-primary);">Learn More</a> and register as a researcher today.
                </p>
                <div class="text-center mb-5">
                    <a href="#" class="btn btn-primary btn-md fw-bold px-4 me-2">LEARN MORE</a>
                    <a href="#" class="btn btn-primary btn-md fw-bold px-4">REGISTER NOW</a>
                </div>
                
                <p class="mb-3" style="color: var(--vmp-text); line-height: 1.8;">
                    If you'd like to <strong>receive real time updates on vulnerabilities</strong> added/modified/deleted to the VMP&trade; Security Intelligence WordPress Vulnerability Database, free via HTTP and Slack/Discord Webhook Integrations are a perfect fit for you. You can get started with webhooks by creating an account on vmpsecurity.com then navigating to <a href="#" style="color: var(--vmp-primary);">Settings</a>.
                </p>
                <div class="text-center mb-5">
                    <a href="#" class="btn btn-primary btn-md fw-bold px-4">LEARN MORE ABOUT WEBHOOKS</a>
                </div>
                
                <p class="mb-3" style="color: var(--vmp-text); line-height: 1.8;">
                    If you need access to a <strong>comprehensive and complete database dump of the thousands of known vulnerabilities</strong> affecting WordPress plugins, themes and core, formatted in JSON, to integrate into a product, service, or custom integration then you can familiarize yourself with the VMP&trade; Security Intelligence Vulnerability Data API.
                </p>
                <div class="text-center mb-5">
                    <a href="#" class="btn btn-primary btn-md fw-bold px-4">GET STARTED WITH AN EMPLOYEE</a>
                </div>
                
                <p class="mb-3" style="color: var(--vmp-text); line-height: 1.8;">
                    If you'd like to <strong>conduct server-level vulnerability scanning without building a custom service or integration</strong>, then get started with VMP&trade; Security CLI, a robust security scanner built to detect WordPress-based vulnerabilities and Malware released in a highly-performant and scalable way today.
                </p>
                <div class="text-center">
                    <a href="#" class="btn btn-primary btn-md fw-bold px-4">LEARN MORE ABOUT VMP&trade; Security CLI</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>