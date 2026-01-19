<?php
/*
Template Name: Bug Bounty Program Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Bug Bounty Program - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Bug Bounty Program page of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Bug Bounty Program Page -->
<style>
    .bug-bounty-hero {
        background: linear-gradient(135deg, #f0f0f1 0%, #ffffff 100%);
        padding: 60px 0 40px;
        text-align: center;
        border-bottom: 3px solid var(--vmp-warning);
    }
    
    .bug-bounty-logo {
        max-width: 450px;
        height: auto;
        margin: 0 auto 30px;
    }
    
    .bug-bounty-hero h1 {
        color: var(--vmp-primary);
        font-size: 28px;
        font-weight: 600;
        margin-bottom: 10px;
    }
    
    .bug-bounty-hero p {
        color: var(--vmp-text);
        font-size: 18px;
        margin-bottom: 30px;
    }
    
    .hero-buttons {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .hero-buttons .btn {
        padding: 12px 30px;
        font-weight: 600;
        font-size: 14px;
        text-transform: uppercase;
        border-radius: 4px;
        transition: all 0.3s ease;
    }
    
    .btn-join {
        background: var(--vmp-warning);
        border: 2px solid var(--vmp-warning);
        color: #000;
    }
    
    .btn-join:hover {
        background: var(--vmp-warning-dark);
        border-color: var(--vmp-warning-dark);
        color: #000;
    }
    
    .btn-submit {
        background: var(--vmp-primary-dark);
        border: 2px solid var(--vmp-primary-dark);
        color: #fff;
    }
    
    .btn-submit:hover {
        background: #0056cc;
        border-color: #0056cc;
        color: #fff;
    }
    
    .btn-discord {
        background: transparent;
        border: 2px solid var(--vmp-primary);
        color: var(--vmp-primary);
    }
    
    .btn-discord:hover {
        background: var(--vmp-primary);
        color: #fff;
    }
    
    .nav-tabs-custom {
        background: #fff;
        border-bottom: 2px solid var(--vmp-border);
        padding: 0 0 0;
        position: sticky;
        top: 0;
        z-index: 100;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    .nav-tabs-custom .nav-item {
        margin: 0 10px;
    }
    
    .nav-tabs-custom .nav-link {
        color: var(--vmp-text);
        font-weight: 600;
        font-size: 15px;
        padding: 12px 20px;
        border: none;
        border-bottom: 3px solid transparent;
        background: transparent;
        transition: all 0.3s ease;
    }
    
    .nav-tabs-custom .nav-link:hover {
        color: var(--vmp-primary-dark);
        border-bottom-color: var(--vmp-primary-dark);
    }
    
    .nav-tabs-custom .nav-link.active {
        color: var(--vmp-primary);
        border-bottom-color: var(--vmp-warning);
        background: transparent;
    }
    
    .content-section {
        padding: 60px 0;
        min-height: 500px;
    }
    
    .content-section:nth-child(even) {
        background: var(--vmp-gray);
    }
    
    .section-title {
        color: var(--vmp-primary);
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 30px;
        text-align: center;
    }
    
    .feature-box {
        background: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        margin-bottom: 30px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .feature-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 16px rgba(0,0,0,0.15);
    }
    
    .feature-box h3 {
        color: var(--vmp-primary);
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 15px;
    }
    
    .feature-box p {
        color: var(--vmp-text);
        font-size: 16px;
        line-height: 1.6;
    }
    
    .highlight-badge {
        display: inline-block;
        background: var(--vmp-warning);
        color: #000;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 15px;
    }
    
    .reward-amount {
        font-size: 36px;
        font-weight: 700;
        color: var(--vmp-success);
        margin: 20px 0;
    }
    
    .cta-box {
        background: linear-gradient(135deg, var(--vmp-primary) 0%, var(--vmp-primary-dark) 100%);
        color: #fff;
        padding: 50px;
        border-radius: 12px;
        text-align: center;
        margin: 40px 0;
    }
    
    .cta-box h3 {
        color: #fff;
        font-size: 28px;
        margin-bottom: 20px;
    }
    
    .cta-box p {
        font-size: 18px;
        margin-bottom: 30px;
    }
    
    .coming-soon-badge {
        display: inline-block;
        background: var(--vmp-warning);
        color: #000;
        padding: 8px 20px;
        border-radius: 25px;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
    }
    
    @media (max-width: 768px) {
        .bug-bounty-hero h1 {
            font-size: 24px;
        }
        
        .bug-bounty-hero p {
            font-size: 16px;
        }
        
        .hero-buttons {
            flex-direction: column;
            align-items: center;
        }
        
        .hero-buttons .btn {
            width: 100%;
            max-width: 300px;
        }
        
        .nav-tabs-custom {
            overflow-x: auto;
            white-space: nowrap;
        }
        
        .nav-tabs-custom .nav-item {
            display: inline-block;
        }
    }
</style>

<!-- Hero Section -->
<section class="bug-bounty-hero">
    <div class="container">
        <div class="bug-bounty-logo">
            <svg viewBox="0 0 500 100" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#191970;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#007AFF;stop-opacity:1" />
                    </linearGradient>
                </defs>
                <rect x="10" y="20" width="60" height="60" rx="8" fill="url(#logoGradient)"/>
                <path d="M 25 35 L 40 65 L 55 35" stroke="#F5A623" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                <text x="85" y="55" font-family="Arial, sans-serif" font-size="36" font-weight="bold" fill="#191970">VMP&trade; Security</text>
                <text x="85" y="75" font-family="Arial, sans-serif" font-size="14" font-weight="normal" fill="#646970">INTELLIGENCE</text>
            </svg>
        </div>
        
        <h1>🎯 VMP&trade; Security Bug Bounty Program 🎯</h1>
        <p>Launching Soon - Help Us Secure WordPress and Get Rewarded!</p>
        
        <div class="hero-buttons">
            <a href="#join-program" class="btn btn-join">JOIN THE PROGRAM</a>
            <a href="#submit-vulnerability" class="btn btn-submit">SUBMIT A VULNERABILITY</a>
            <a href="#join-community" class="btn btn-discord">JOIN OUR DISCORD</a>
        </div>
    </div>
</section>

<!-- Navigation Tabs -->
<nav class="nav-tabs-custom">
    <div class="container">
        <ul class="nav nav-tabs border-0" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#overview">Overview</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#program-scope">Program/Scope</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#highlights">Highlights</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#researcher-tiers">Researcher Tiers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#rewards">Rewards</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#achievements">Achievements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#hall-of-fame">Hall of Fame</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#faqs">FAQs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#referee-program">Referee Program</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Content Sections -->
<main>
    <!-- Overview Section -->
    <section id="overview" class="content-section">
        <div class="container">
            <h2 class="section-title">Program Overview</h2>
            
            <div class="row mt-4">
                <div class="col-md-12">
                    <p style="text-align: center; font-size: 18px; color: var(--vmp-text); max-width: 800px; margin: 0 auto;">
                        We're building a comprehensive bug bounty program for security researchers dedicated to uncovering vulnerabilities in WordPress plugins and themes. Whether you're just beginning your journey or are an experienced researcher, we're creating a platform designed to reward your contributions to WordPress security.
                    </p>
                </div>
            </div>
            
            <div class="row mt-5 mb-4">
                <div class="col-md-6 d-flex">
                    <div class="feature-box h-100">
                        <h3>Comprehensive Bug Bounty Program</h3>
                        <p>We're developing a comprehensive WordPress Bug Bounty Program to bring together talented security researchers committed to making the internet safer. Our program will be designed to reward your efforts and recognize the value you bring to the WordPress security ecosystem.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="feature-box h-100">
                        <h3>Competitive Rewards & Recognition</h3>
                        <p>VMP&trade; Security will offer competitive rewards for bug bounty discoveries in WordPress plugins and themes. Our reward structure will include tiered bounty payments based on vulnerability severity, along with a monthly bonus system tied to your researcher tier and overall contributions.</p>
                    </div>
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-6 d-flex">
                    <div class="feature-box h-100">
                        <h3>Open Vulnerability Database</h3>
                        <p>VMP&trade; Security will provide an open-source vulnerability database for WordPress. Unlike other providers who charge for data access, our database will be freely available to the community with planned <strong>API access and webhook integrations</strong> to help protect WordPress sites worldwide.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="feature-box h-100">
                        <h3>Why Participate?</h3>
                        <p>When our program launches, participants will enjoy benefits including:</p>
                        <ul>
                            <li>Earning competitive rewards based on vulnerability severity and impact</li>
                            <li>Contributing to the security of a platform that millions of websites rely on</li>
                            <li>Building industry recognition and credibility as a WordPress security expert</li>
                            <li>Accessing exclusive researcher tools and community resources</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program/Scope Section -->
    <section id="program-scope" class="content-section">
        <div class="container">
            <h2 class="section-title">Program Scope</h2>
            
            <div class="row mt-5 mb-4">
                <div class="col-md-6 d-flex">
                    <div class="feature-box h-100">
                        <h3>Earning Rewards</h3>
                        <p>Our program will focus on uncovering vulnerabilities in WordPress plugins and themes, strengthening the platform millions rely on. Reward amounts will be determined by severity levels and will be competitive with industry standards.</p>
                        <p class="reward-amount" style="font-size: 24px; color: var(--vmp-primary);">Details Coming Soon</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="feature-box h-100">
                        <h3>Streamlined Disclosure Process</h3>
                        <p>We'll handle the complete disclosure process, coordinating between researchers, plugin/theme authors, and the WordPress community. Our goal is to make vulnerability reporting professional and efficient, allowing you to focus on security research.</p>
                    </div>
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-6 d-flex">
                    <div class="feature-box h-100">
                        <h3>Empowering the WordPress Community</h3>
                        <p>We'll share your research with the wider WordPress community for free, enabling others to benefit from your insights while you continue your security efforts.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="feature-box h-100">
                        <h3>Researcher Profiles</h3>
                        <p>Build your reputation with a dedicated researcher profile showcasing your accomplishments, validated vulnerabilities, and earned badges. Your profile will demonstrate your expertise and contributions to the WordPress security community.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Highlights Section -->
    <section id="highlights" class="content-section">
        <div class="container">
            <h2 class="section-title">Program Highlights</h2>
            
            <div class="row mt-5 mb-4">
                <div class="col-md-4 d-flex">
                    <div class="feature-box text-center h-100">
                        <span class="highlight-badge">Recognition</span>
                        <h3>CVE ID Assignment</h3>
                        <p>Eligible vulnerabilities will receive CVE IDs, providing industry-recognized credibility and building your reputation as a security researcher.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="feature-box text-center h-100">
                        <span class="highlight-badge">Community</span>
                        <h3>Join a Global Community</h3>
                        <p>Connect with talented security researchers worldwide, participate in friendly competitions, and collaborate on making WordPress more secure.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="feature-box text-center h-100">
                        <span class="highlight-badge">Achievements</span>
                        <h3>Exclusive Badges</h3>
                        <p>Earn unique badges that showcase your achievements, expertise levels, and milestone contributions to WordPress security.</p>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4 mb-4">
                <div class="col-md-6 d-flex">
                    <div class="feature-box h-100">
                        <h3>Extensive Scope</h3>
                        <p>Our program will cover a wide range of WordPress plugins and themes, providing numerous opportunities for researchers at all skill levels to contribute and earn rewards.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="feature-box h-100">
                        <h3>Transparent Process</h3>
                        <p>Our vulnerability disclosure process will be transparent and efficient, with clear guidelines for submissions, timelines, and reward calculations. All program data will be accessible through our API.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Researcher Tiers Section -->
    <section id="researcher-tiers" class="content-section">
        <div class="container">
            <h2 class="section-title">Researcher Tiers</h2>
            
            <div class="row mt-5">
                <div class="col-md-12">
                    <p style="text-align: center; font-size: 18px; color: var(--vmp-text); max-width: 900px; margin: 0 auto 40px;">
                        Our tier system recognizes and rewards researchers based on their contributions and expertise. As you progress through the tiers, you'll unlock additional benefits, higher bounty multipliers, and exclusive opportunities.
                    </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3">
                    <div class="feature-box text-center">
                        <h3 style="color: #CD7F32;">Bronze Tier</h3>
                        <p>Entry level researchers starting their journey</p>
                        <ul style="text-align: left; margin-top: 20px;">
                            <li>Standard bounty rewards</li>
                            <li>Community access</li>
                            <li>Basic researcher profile</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box text-center">
                        <h3 style="color: #C0C0C0;">Silver Tier</h3>
                        <p>Active researchers with consistent contributions</p>
                        <ul style="text-align: left; margin-top: 20px;">
                            <li>Increased bounty rewards</li>
                            <li>Priority support</li>
                            <li>Enhanced profile features</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box text-center">
                        <h3 style="color: #FFD700;">Gold Tier</h3>
                        <p>Experienced researchers with proven expertise</p>
                        <ul style="text-align: left; margin-top: 20px;">
                            <li>Higher bounty multiplier</li>
                            <li>Monthly bonus opportunities</li>
                            <li>Exclusive badge collection</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box text-center">
                        <h3 style="color: #B9F2FF;">Platinum Tier</h3>
                        <p>Elite researchers with exceptional contributions</p>
                        <ul style="text-align: left; margin-top: 20px;">
                            <li>Maximum bounty multiplier</li>
                            <li>VIP researcher status</li>
                            <li>Exclusive program access</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rewards Section -->
    <section id="rewards" class="content-section">
        <div class="container">
            <h2 class="section-title">Rewards & Bounties</h2>
            
            <div class="cta-box mt-5">
                <h3>Free API Access for Vulnerability Data</h3>
                <p>VMP&trade; Security will provide free API access to our vulnerability database for both personal and commercial use. Stay informed about WordPress security with real-time updates and webhook integrations.</p>
                <a href="#" class="btn btn-join btn-lg">LEARN MORE</a>
            </div>
            
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="feature-box">
                        <h3>Stay Informed About WordPress Vulnerabilities</h3>
                        <p>Get notified when new vulnerabilities are discovered that may affect your WordPress sites. Our platform will provide real-time alerts and comprehensive security intelligence to help you stay protected.</p>
                        <a href="#" class="btn btn-submit mt-3">GET NOTIFIED</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-box">
                        <h3>Developer-Friendly Integration</h3>
                        <p>Integrate VMP&trade; Security's vulnerability data directly into your tools and workflows. Our API documentation will provide everything you need to build automated security monitoring for your WordPress infrastructure.</p>
                        <a href="#" class="btn btn-discord mt-3">API DOCS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section id="achievements" class="content-section">
        <div class="container">
            <h2 class="section-title">Achievements & Badges</h2>
            
            <div class="row mt-5">
                <div class="col-md-12">
                    <p style="text-align: center; font-size: 18px; color: var(--vmp-text); max-width: 800px; margin: 0 auto 40px;">
                        Earn exclusive badges and achievements as you contribute to making WordPress more secure. Showcase your expertise and dedication to the security community.
                    </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3">
                    <div class="feature-box text-center">
                        <div style="font-size: 48px; margin-bottom: 15px;">🏆</div>
                        <h3>First Blood</h3>
                        <p>Submit your first validated vulnerability</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box text-center">
                        <div style="font-size: 48px; margin-bottom: 15px;">🎯</div>
                        <h3>Critical Hunter</h3>
                        <p>Discover a critical severity vulnerability</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box text-center">
                        <div style="font-size: 48px; margin-bottom: 15px;">🔥</div>
                        <h3>Hot Streak</h3>
                        <p>Submit 5 vulnerabilities in one month</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box text-center">
                        <div style="font-size: 48px; margin-bottom: 15px;">⭐</div>
                        <h3>Community Star</h3>
                        <p>Reach 1000+ reputation points</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hall of Fame Section -->
    <section id="hall-of-fame" class="content-section">
        <div class="container">
            <h2 class="section-title">Hall of Fame</h2>
            
            <div class="row mt-5">
                <div class="col-md-12">
                    <p style="text-align: center; font-size: 18px; color: var(--vmp-text); max-width: 800px; margin: 0 auto 40px;">
                        Celebrating our top security researchers who have made outstanding contributions to WordPress security. Your name could be here!
                    </p>
                </div>
            </div>
            
            <div class="feature-box" style="padding: 40px;">
                <div class="row">
                    <div class="col-md-4 text-center mb-4">
                        <div style="font-size: 64px; margin-bottom: 15px;">🥇</div>
                        <h3>Top Monthly Researcher</h3>
                        <p style="color: var(--vmp-text-light);">To be announced</p>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div style="font-size: 64px; margin-bottom: 15px;">🥈</div>
                        <h3>Most Critical Finds</h3>
                        <p style="color: var(--vmp-text-light);">To be announced</p>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div style="font-size: 64px; margin-bottom: 15px;">🥉</div>
                        <h3>Rising Star</h3>
                        <p style="color: var(--vmp-text-light);">To be announced</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section id="faqs" class="content-section">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            
            <div class="row mt-5">
                <div class="col-md-8 offset-md-2">
                    <div class="feature-box">
                        <h3>How do I get started?</h3>
                        <p>Our Bug Bounty Program is launching soon! Join our Discord community to stay updated on the official launch date and get early access notifications.</p>
                    </div>
                    
                    <div class="feature-box">
                        <h3>What types of vulnerabilities are eligible?</h3>
                        <p>We accept all valid security vulnerabilities in WordPress plugins and themes, including XSS, SQL Injection, CSRF, authentication bypasses, and more. Detailed guidelines will be provided at launch.</p>
                    </div>
                    
                    <div class="feature-box">
                        <h3>How are bounties calculated?</h3>
                        <p>Bounties are determined by vulnerability severity (Low, Medium, High, Critical) and your researcher tier level. Our transparent reward structure will be published when the program launches.</p>
                    </div>
                    
                    <div class="feature-box">
                        <h3>When will the program launch?</h3>
                        <p>We're finalizing the program details and will announce the official launch date soon. Join our community to be among the first to know!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Referee Program Section -->
    <section id="referee-program" class="content-section">
        <div class="container">
            <h2 class="section-title">Referee Program</h2>
            
            <div class="row mt-5">
                <div class="col-md-12">
                    <p style="text-align: center; font-size: 18px; color: var(--vmp-text); max-width: 800px; margin: 0 auto 40px;">
                        Our referee program ensures fair and accurate assessment of vulnerability reports. Expert security professionals review submissions to maintain program quality and consistency.
                    </p>
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-6 d-flex">
                    <div class="feature-box h-100">
                        <h3>Expert Review Process</h3>
                        <p>All vulnerability submissions undergo thorough review by our experienced security referees to ensure accurate severity classification and appropriate bounty allocation.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="feature-box h-100">
                        <h3>Become a Referee</h3>
                        <p>Interested in joining our referee team? We're looking for experienced security professionals to help evaluate submissions. More details coming soon!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Final CTA -->
    <section class="content-section" style="background: var(--vmp-gray);">
        <div class="container">
            <div class="cta-box">
                <h3>Ready to Join the VMP&trade; Security Bug Bounty Program?</h3>
                <p>Be the first to know when we launch. Join our community today!</p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="#" class="btn btn-join btn-lg">JOIN OUR DISCORD</a>
                    <a href="#" class="btn btn-submit btn-lg" style="background: #fff; color: var(--vmp-primary); border-color: #fff;">LEARN MORE</a>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Smooth Scroll Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for navigation links
    const navLinks = document.querySelectorAll('.nav-tabs-custom .nav-link');
    const sections = document.querySelectorAll('.content-section');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all links
            navLinks.forEach(l => l.classList.remove('active'));
            
            // Add active class to clicked link
            this.classList.add('active');
            
            // Scroll to section
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                const offsetTop = targetSection.offsetTop - 100;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Update active nav on scroll
    window.addEventListener('scroll', function() {
        let current = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 150;
            if (window.pageYOffset >= sectionTop) {
                current = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + current) {
                link.classList.add('active');
            }
        });
    });
    
    // Smooth scroll for hero buttons
    document.querySelectorAll('.hero-buttons a').forEach(button => {
        button.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href.startsWith('#')) {
                e.preventDefault();
                const targetSection = document.querySelector(href);
                if (targetSection) {
                    const offsetTop = targetSection.offsetTop - 100;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
});
</script>

<?php get_footer(); ?>