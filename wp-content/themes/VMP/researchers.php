<?php
/*
Template Name: Researcher Core Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Researcher - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Researcher page of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Info Banner -->
<div class="container-fluid" style="background-color: var(--vmp-primary-dark); padding: 15px 0;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-white mb-0" style="font-size: 14px;">
                    Have you found a vulnerability in a WordPress plugin or theme? Report vulnerabilities in WordPress plugins and themes through our <a href="#" class="text-white" style="text-decoration: underline;">bug bounty program</a> and earn a bounty on all in scope submissions. Researchers who disclose security issues to your Users!
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container my-5">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb bg-transparent px-0">
            <li class="breadcrumb-item"><a href="#" style="color: var(--vmp-primary);">VMP&trade; Security Intelligence</a></li>
            <li class="breadcrumb-item active" aria-current="page">Vulnerability Researchers</li>
        </ol>
    </nav>

    <!-- Disclaimer Box -->
    <div class="alert" style="background-color: var(--vmp-gray); border-left: 4px solid var(--vmp-warning); padding: 20px; margin-bottom: 30px;">
        <p class="mb-0" style="color: var(--vmp-text); font-size: 14px;">
            As a reminder, the VMP&trade; Security Intelligence Vulnerability Database WPI is completely free to query and set up along with sponsorship and commercial use consent to a core vulnerability data on the user interface. Please review the WPI documentation and VMP&trade; Security documentation as well as the security disclaimer on whether you would like to contribute data on our core in the WordPress Intelligence user interface.
        </p>
    </div>

    <!-- Page Title -->
    <h1 class="text-center mb-4" style="color: var(--vmp-text); font-size: 32px; font-weight: 600;">
        Vulnerability Researcher Hall of Fame
    </h1>

    <!-- Description Text -->
    <div class="text-center mb-4" style="max-width: 800px; margin: 0 auto;">
        <p style="color: var(--vmp-text-light); font-size: 15px; line-height: 1.7;">
            Honor your discovered vulnerabilities we will all attributed to you under one name? Provide a list of all of your vulnerability discoveries from our database and email us at <a href="#" style="color: var(--vmp-primary-dark);">support@vmpsecurity.com</a> with your preferred name or alias. We will update all of your vulnerabilities to share the same name you provide us, so you can show off your discoveries all in one place.
        </p>
        <p style="color: var(--vmp-text-light); font-size: 15px; line-height: 1.7; margin-top: 15px;">
            Missing a vulnerability you discovered in WordPress Software? Submit and get a new vulnerabilities to our database using our <a href="#" style="color: var(--vmp-primary-dark);">Vulnerability Submission Form</a>.
        </p>
    </div>

    <!-- Search Section -->
    <div class="card mb-4" style="border: 1px solid var(--vmp-border); box-shadow: 0 1px 3px rgba(0,0,0,0.1); max-width: 600px; margin: 0 auto;">
        <div class="card-body" style="padding: 25px;">
            <h5 class="card-title mb-3 text-center" style="color: var(--vmp-text); font-weight: 600;">
                Search
            </h5>
            <form class="d-flex gap-2">
                <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Search researchers by name..." 
                    style="border: 1px solid var(--vmp-border); padding: 10px 15px;"
                >
                <button 
                    type="submit" 
                    class="btn text-white" 
                    style="background-color: var(--vmp-primary-dark); padding: 10px 30px; white-space: nowrap;"
                >
                    SEARCH
                </button>
            </form>
        </div>
    </div>

    <!-- Coming Soon Section -->
    <div class="card mb-4" style="border: 1px solid var(--vmp-border); box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
        <div class="card-body text-center" style="padding: 80px 40px;">
            <div style="max-width: 600px; margin: 0 auto;">
                <!-- Icon -->
                <div class="mb-4">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="opacity: 0.6;">
                        <path d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V20H20V18C20 15.34 14.67 14 12 14Z" fill="var(--vmp-warning)"/>
                    </svg>
                </div>
                
                <!-- Main Heading -->
                <h2 class="mb-3" style="color: var(--vmp-text); font-size: 36px; font-weight: 700;">
                    Coming Soon
                </h2>
                
                <!-- Description -->
                <p class="mb-4" style="color: var(--vmp-text-light); font-size: 16px; line-height: 1.8;">
                    We're building our Researcher Hall of Fame to recognize and celebrate the top security researchers 
                    who have contributed to making WordPress more secure. This page will showcase researchers ranked by 
                    their vulnerability discoveries over the past 30 days.
                </p>
                
                <!-- Features List -->
                <div class="text-start mt-4 mb-4" style="max-width: 500px; margin: 0 auto;">
                    <p style="color: var(--vmp-text); font-weight: 600; margin-bottom: 15px;">What to expect:</p>
                    <ul style="color: var(--vmp-text-light); font-size: 15px; line-height: 2;">
                        <li>Researcher rankings and leaderboard</li>
                        <li>Total vulnerability discoveries count</li>
                        <li>Real-time updates (past 30 days)</li>
                        <li>Recognition for security contributions</li>
                    </ul>
                </div>
                
                <!-- Status Badge -->
                <div class="mt-4">
                    <span class="badge text-white" style="background-color: var(--vmp-warning); padding: 10px 20px; font-size: 14px; font-weight: 600; border-radius: 20px;">
                        🏆 Under Development
                    </span>
                </div>
                
                <!-- Additional Info -->
                <p class="mt-4 mb-0" style="color: var(--vmp-text-light); font-size: 14px;">
                    Want to be featured? Keep discovering and reporting vulnerabilities to earn your place in the Hall of Fame!
                </p>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation" class="mb-5">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <span class="page-link" style="color: var(--vmp-text-light); border-color: var(--vmp-border);">«</span>
            </li>
            <li class="page-item active">
                <span class="page-link" style="background-color: var(--vmp-primary-dark); border-color: var(--vmp-primary-dark);">1</span>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" style="color: var(--vmp-primary); border-color: var(--vmp-border);">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" style="color: var(--vmp-primary); border-color: var(--vmp-border);">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" style="color: var(--vmp-primary); border-color: var(--vmp-border);">4</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" style="color: var(--vmp-primary); border-color: var(--vmp-border);">5</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" style="color: var(--vmp-primary); border-color: var(--vmp-border);">6</a>
            </li>
            <li class="page-item disabled">
                <span class="page-link" style="color: var(--vmp-text-light); border-color: var(--vmp-border);">...</span>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" style="color: var(--vmp-primary); border-color: var(--vmp-border);">»</a>
            </li>
        </ul>
    </nav>

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