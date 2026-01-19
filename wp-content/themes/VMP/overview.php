<?php
/*
Template Name: Overview Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Overview - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Overview page of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section -->
<div class="container-fluid" style="background: linear-gradient(135deg, #f0f0f1 0%, #ffffff 100%); padding: 60px 0; border-bottom: 1px solid var(--vmp-border);">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Decorative Emojis -->
                <div style="font-size: 40px; margin-bottom: 20px;">
                    🎯 🔒
                </div>
                
                <!-- Main Heading -->
                <h1 class="mb-3" style="color: var(--vmp-text); font-size: 36px; font-weight: 700;">
                    Welcome to the VMP&trade; Security Bug Bounty Program
                </h1>
                
                <!-- Subtitle -->
                <p class="mb-4" style="color: var(--vmp-text-light); font-size: 18px; font-weight: 500;">
                    Unleash Your Potential, Secure WordPress, and Reap the Rewards!
                </p>
                
                <!-- Action Buttons -->
                <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                    <button class="btn text-white" style="background-color: var(--vmp-primary-dark); border-color: var(--vmp-primary-dark); padding: 12px 30px; font-weight: 600; font-size: 14px;">
                        JOIN THE PROGRAM
                    </button>
                    <button class="btn text-white" style="background-color: var(--vmp-success); border-color: var(--vmp-success); padding: 12px 30px; font-weight: 600; font-size: 14px;">
                        SUBMIT A VULNERABILITY
                    </button>
                    <button class="btn text-white" style="background-color: var(--vmp-warning); border-color: var(--vmp-warning); padding: 12px 30px; font-weight: 600; font-size: 14px;">
                        JOIN OUR DISCORD
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navigation Tabs -->
<div class="container-fluid" style="background-color: #fff; border-bottom: 2px solid var(--vmp-border);">
    <div class="container">
        <nav class="nav nav-pills justify-content-center" style="padding: 15px 0;">
            <a class="nav-link active" href="#" style="color: #fff; font-weight: 600; font-size: 14px; border-bottom: 3px solid var(--vmp-primary-dark);">Overview</a>
            <a class="nav-link" href="#" style="color: var(--vmp-text-light); font-weight: 600; font-size: 14px;">Program Scope</a>
            <a class="nav-link" href="#" style="color: var(--vmp-text-light); font-weight: 600; font-size: 14px;">Highlights</a>
            <a class="nav-link" href="#" style="color: var(--vmp-text-light); font-weight: 600; font-size: 14px;">Researcher Tiers</a>
            <a class="nav-link" href="#" style="color: var(--vmp-text-light); font-weight: 600; font-size: 14px;">Rewards</a>
            <a class="nav-link" href="#" style="color: var(--vmp-text-light); font-weight: 600; font-size: 14px;">Achievements</a>
            <a class="nav-link" href="#" style="color: var(--vmp-text-light); font-weight: 600; font-size: 14px;">Hall of Fame</a>
            <a class="nav-link" href="#" style="color: var(--vmp-text-light); font-weight: 600; font-size: 14px;">FAQs</a>
            <a class="nav-link" href="#" style="color: var(--vmp-text-light); font-weight: 600; font-size: 14px;">Referrer Program</a>
        </nav>
    </div>
</div>

<!-- Main Content -->
<div class="container my-5">
    <!-- Introduction Text -->
    <div class="mb-5" style="max-width: 900px; margin: 0 auto;">
        <p style="color: var(--vmp-text-light); font-size: 15px; line-height: 1.8; text-align: center;">
            Are you a security researcher dedicated to uncovering vulnerabilities in WordPress plugins and themes, or are you a seasoned Bug Bounty Hunter uncovering the worst of the worst? 
            Whether you're an aspiring WordPress vulnerability researcher, new to researching Bug Bounty hunting, or a returning Bug Bounty Hunter, we invite you into a partnership about contributing to the WordPress ecosystem – you've come to the right place.
        </p>
    </div>

    <!-- Coming Soon Section -->
    <div class="card mb-5" style="border: 1px solid var(--vmp-border); box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
        <div class="card-body text-center" style="padding: 80px 40px;">
            <div style="max-width: 700px; margin: 0 auto;">
                <!-- Icon -->
                <div class="mb-4">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="opacity: 0.6;">
                        <path d="M12 2L2 7L12 12L22 7L12 2Z" fill="var(--vmp-warning)"/>
                        <path d="M2 17L12 22L22 17V11L12 16L2 11V17Z" fill="var(--vmp-primary-dark)"/>
                    </svg>
                </div>
                
                <!-- Main Heading -->
                <h2 class="mb-3" style="color: var(--vmp-text); font-size: 36px; font-weight: 700;">
                    Bug Bounty Program Coming Soon
                </h2>
                
                <!-- Description -->
                <p class="mb-4" style="color: var(--vmp-text-light); font-size: 16px; line-height: 1.8;">
                    We're building an exciting Bug Bounty Program to reward security researchers who help make WordPress safer. 
                    Join the frontier WordPress Bug Bounty Program and become a part of a thriving community of talented individuals committed to making the internet a safer place.
                </p>
                
                <!-- Features Grid -->
                <div class="row g-3 mt-4 mb-4 text-start">
                    <div class="col-md-6">
                        <div class="p-3" style="background-color: var(--vmp-gray); border-radius: 8px;">
                            <h6 style="color: var(--vmp-text); font-weight: 600; margin-bottom: 10px;">💰 Earning Rewards</h6>
                            <p style="color: var(--vmp-text-light); font-size: 14px; margin: 0;">
                                Get paid rewards for discovering vulnerabilities in WordPress plugins and themes, with bounties up to $21,200 for critical vulnerabilities.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3" style="background-color: var(--vmp-gray); border-radius: 8px;">
                            <h6 style="color: var(--vmp-text); font-weight: 600; margin-bottom: 10px;">🚀 Simplifying Disclosure</h6>
                            <p style="color: var(--vmp-text-light); font-size: 14px; margin: 0;">
                                We handle every step of the disclosure process, ensuring vulnerabilities are disclosed professionally.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3" style="background-color: var(--vmp-gray); border-radius: 8px;">
                            <h6 style="color: var(--vmp-text); font-weight: 600; margin-bottom: 10px;">🌍 Empowering Community</h6>
                            <p style="color: var(--vmp-text-light); font-size: 14px; margin: 0;">
                                We'll share your research with the wider WordPress community for free, enabling others to benefit from your insights and experience.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3" style="background-color: var(--vmp-gray); border-radius: 8px;">
                            <h6 style="color: var(--vmp-text); font-weight: 600; margin-bottom: 10px;">🏆 Showcasing Achievements</h6>
                            <p style="color: var(--vmp-text-light); font-size: 14px; margin: 0;">
                                Highlight your accomplishments in a dedicated researcher profile, showcasing your expertise and earning recognition.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3" style="background-color: var(--vmp-gray); border-radius: 8px;">
                            <h6 style="color: var(--vmp-text); font-weight: 600; margin-bottom: 10px;">📜 Obtaining CVE IDs</h6>
                            <p style="color: var(--vmp-text-light); font-size: 14px; margin: 0;">
                                Receive a CVE ID for each vulnerability you report, getting industry-recognized credibility and boosting your reputation.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3" style="background-color: var(--vmp-gray); border-radius: 8px;">
                            <h6 style="color: var(--vmp-text); font-weight: 600; margin-bottom: 10px;">🎖️ Collecting Badges</h6>
                            <p style="color: var(--vmp-text-light); font-size: 14px; margin: 0;">
                                Earn unique badges that mark your achievements and may unlock tiers for new awards and badges.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3" style="background-color: var(--vmp-gray); border-radius: 8px;">
                            <h6 style="color: var(--vmp-text); font-weight: 600; margin-bottom: 10px;">🥇 Competing with the Best</h6>
                            <p style="color: var(--vmp-text-light); font-size: 14px; margin: 0;">
                                Enjoy lead climbing, cutting edge, WordPress security researchers and engage in friendly competition.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3" style="background-color: var(--vmp-gray); border-radius: 8px;">
                            <h6 style="color: var(--vmp-text); font-weight: 600; margin-bottom: 10px;">🔍 Massive Whitebox Scope</h6>
                            <p style="color: var(--vmp-text-light); font-size: 14px; margin: 0;">
                                All in-scope software is thousands of in-scope plugins and themes making plenty of opportunities.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Status Badge -->
                <div class="mt-4">
                    <span class="badge text-white" style="background-color: var(--vmp-success); padding: 10px 20px; font-size: 14px; font-weight: 600; border-radius: 20px;">
                        🎯 Launching Soon
                    </span>
                </div>
                
                <!-- Additional Info -->
                <p class="mt-4 mb-0" style="color: var(--vmp-text-light); font-size: 14px;">
                    Stay tuned for the official launch! In the meantime, explore our vulnerability database and learn more about WordPress security.
                </p>
            </div>
        </div>
    </div>

    <!-- Why Participate Section Preview -->
    <div class="mb-5">
        <h3 class="text-center mb-4" style="color: var(--vmp-text); font-size: 28px; font-weight: 700;">
            Why Participate?
        </h3>
        <p class="text-center" style="color: var(--vmp-text-light); font-size: 15px; max-width: 800px; margin: 0 auto;">
            By joining our program, you'll enjoy a range of benefits that include recognition, rewards, community engagement, and professional growth opportunities in the WordPress security space.
        </p>
    </div>

    <!-- Bottom Information Cards -->
    <div class="row g-4 mb-5">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card h-100" style="border: 1px solid var(--vmp-border); box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                <div class="card-body" style="padding: 30px;">
                    <h5 class="card-title mb-3" style="color: var(--vmp-text); font-weight: 600; font-size: 18px;">
                        VMP&trade; Security Intelligence
                    </h5>
                    <p class="card-text" style="color: var(--vmp-text-light); font-size: 14px; line-height: 1.6; margin-bottom: 20px;">
                        Did you know, VMP&trade; Security Intelligence provides the potential and comprehensive WordPress vulnerability database, along with a free individual integration into any site supported by PluginTrac for a number of other topics and the individual data that our system provides on a yearly basis to you!
                    </p>
                    <a href="#" class="btn text-white" style="background-color: var(--vmp-warning); border-color: var(--vmp-warning); padding: 10px 20px; font-weight: 600;">
                        LEARN MORE
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card h-100" style="border: 1px solid var(--vmp-border); box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                <div class="card-body" style="padding: 30px;">
                    <h5 class="card-title mb-3" style="color: var(--vmp-text); font-weight: 600; font-size: 18px;">
                        Get Notified
                    </h5>
                    <p class="card-text" style="color: var(--vmp-text-light); font-size: 14px; line-height: 1.6; margin-bottom: 20px;">
                        Want to get notified of the latest vulnerabilities that may impact your website? Install VMP&trade; Security on your site today to get notified immediately if your site is affected. It's completely free!
                    </p>
                    <a href="#" class="btn text-white" style="background-color: var(--vmp-primary-dark); border-color: var(--vmp-primary-dark); padding: 10px 20px; font-weight: 600;">
                        GET VMP&trade; Security
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card h-100" style="border: 1px solid var(--vmp-border); box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                <div class="card-body" style="padding: 30px;">
                    <h5 class="card-title mb-3" style="color: var(--vmp-text); font-weight: 600; font-size: 18px;">
                        Documentation
                    </h5>
                    <p class="card-text" style="color: var(--vmp-text-light); font-size: 14px; line-height: 1.6; margin-bottom: 20px;">
                        The VMP&trade; Security Intelligence WordPress vulnerability database is very comprehensive for all of your security needs and query use API. Please review the documentation on how to access and consume the vulnerability data via our API.
                    </p>
                    <a href="#" class="btn text-white" style="background-color: var(--vmp-success); border-color: var(--vmp-success); padding: 10px 20px; font-weight: 600;">
                        DOCUMENTATION
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>