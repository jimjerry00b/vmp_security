<?php
/*
Template Name: WordPress Core Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>WordPress Core - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="WordPress Core page of VMP&trade; Security">' . "\n";
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
            <li class="breadcrumb-item"><a href="#" style="color: var(--vmp-primary);">VMP Intelligence</a></li>
            <li class="breadcrumb-item"><a href="#" style="color: var(--vmp-primary);">Vulnerability Database</a></li>
            <li class="breadcrumb-item active" aria-current="page">WordPress Core</li>
        </ol>
    </nav>

    <!-- Disclaimer Box -->
    <div class="alert" style="background-color: var(--vmp-gray); border-left: 4px solid var(--vmp-warning); padding: 20px; margin-bottom: 30px;">
        <p class="mb-0" style="color: var(--vmp-text); font-size: 14px;">
            As a reminder, the VMP Intelligence Vulnerability Database WPI is completely free to query and set up along with sponsorship and commercial use consent to a core vulnerability data on the user interface. Please review the WPI documentation and VMP documentation as well as the security disclaimer on whether you would like to contribute data on our core in the WordPress Intelligence user interface.
        </p>
    </div>

    <!-- Page Title -->
    <h1 style="color: var(--vmp-text); font-size: 32px; font-weight: 600; margin-bottom: 10px;">
        Showing 1-20 of 364 WordPress Core Vulnerabilities
    </h1>

    <!-- Search Section -->
    <div class="card mb-4" style="border: 1px solid var(--vmp-border); box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        <div class="card-body" style="padding: 25px;">
            <h5 class="card-title mb-3" style="color: var(--vmp-text); font-weight: 600;">
                Search all WordPress Core with known vulnerabilities
            </h5>
            <form class="d-flex gap-2">
                <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Enter search criteria..." 
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
                        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM13 17H11V15H13V17ZM13 13H11V7H13V13Z" fill="var(--vmp-primary-dark)"/>
                    </svg>
                </div>
                
                <!-- Main Heading -->
                <h2 class="mb-3" style="color: var(--vmp-text); font-size: 36px; font-weight: 700;">
                    Coming Soon
                </h2>
                
                <!-- Description -->
                <p class="mb-4" style="color: var(--vmp-text-light); font-size: 16px; line-height: 1.8;">
                    We're currently building our comprehensive WordPress Core vulnerability database. 
                    This section will feature detailed security information, vulnerability reports, 
                    and safety recommendations for WordPress Core versions.
                </p>
                
                <!-- Features List -->
                <div class="text-start mt-4 mb-4" style="max-width: 500px; margin: 0 auto;">
                    <p style="color: var(--vmp-text); font-weight: 600; margin-bottom: 15px;">What to expect:</p>
                    <ul style="color: var(--vmp-text-light); font-size: 15px; line-height: 2;">
                        <li>Real-time vulnerability tracking</li>
                        <li>Comprehensive security reports</li>
                        <li>Searchable core database</li>
                        <li>Regular security updates</li>
                    </ul>
                </div>
                
                <!-- Status Badge -->
                <div class="mt-4">
                    <span class="badge text-white" style="background-color: var(--vmp-warning); padding: 10px 20px; font-size: 14px; font-weight: 600; border-radius: 20px;">
                        🚀 Under Development
                    </span>
                </div>
                
                <!-- Additional Info -->
                <p class="mt-4 mb-0" style="color: var(--vmp-text-light); font-size: 14px;">
                    Stay tuned for updates. In the meantime, you can explore our plugins database or contact us for more information.
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