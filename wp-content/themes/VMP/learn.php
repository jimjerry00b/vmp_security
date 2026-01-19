<?php
/*
Template Name: Learn Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Learn - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Learn VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section -->
<section class="py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);">
    <!-- World Map Background Pattern -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1; background-image: radial-gradient(circle at 15% 50%, rgba(255,255,255,0.15) 0%, transparent 50%), radial-gradient(circle at 85% 30%, rgba(255,255,255,0.15) 0%, transparent 50%);">
        <!-- Binary Code Pattern -->
        <div style="position: absolute; top: 10%; left: 5%; font-family: monospace; font-size: 10px; color: rgba(255,255,255,0.1); line-height: 1.2;">
            010011010101001<br>110101010101101<br>010101010110101
        </div>
        <div style="position: absolute; top: 40%; right: 10%; font-family: monospace; font-size: 10px; color: rgba(255,255,255,0.1); line-height: 1.2;">
            101010101010110<br>010101101010101<br>110101010101011
        </div>
    </div>
    
    <div class="container position-relative" style="z-index: 1;">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center text-white">
                <h1 class="display-4 fw-bold mb-3">The WordPress Security Learning Center</h1>
                <p class="lead mb-0" style="max-width: 800px; margin: 0 auto;">
                    Protecting your site from attackers is important — elevate your knowledge of WordPress security with our calendar of resources for everyone using WordPress. From WordPress security fundamentals to expert developer resources, this learning center is meant for every skill level and will cover best practices in our Plugins, Videos, Industry survey results, and much more.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-4 justify-content-center mb-5">
            <!-- Fundamentals Category -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center" style="transition: transform 0.3s ease;">
                    <div class="card-body p-4">
                        <div class="mb-3" style="background: #27ae60; padding: 30px; border-radius: 15px; display: inline-block;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-puzzle" viewBox="0 0 16 16">
                                <path d="M3.112 3.645A1.5 1.5 0 0 1 4.605 2.5h1.273a1.5 1.5 0 0 1 1.493 1.338l.006.114v.857l.007.116a2.5 2.5 0 0 0 1.317 2.043l.142.082v1.45a2.5 2.5 0 0 0-1.317 2.043l-.007.117v.857l-.006.114A1.5 1.5 0 0 1 5.88 13.5H4.605a1.5 1.5 0 0 1-1.493-1.338L3.105 12V9.263a2.5 2.5 0 0 0-1.317-2.043L1.646 7.138V5.688a2.5 2.5 0 0 0 1.466-2.043zM4.605 3.5a.5.5 0 0 0-.498.45l-.007.05V6.5h-.505a1.5 1.5 0 0 1-.487-2.913l.14-.047V3.5h1.357zm1.493 8.95V9.957l.007-.116a2.5 2.5 0 0 0-1.317-2.043l-.142-.082V6.266a2.5 2.5 0 0 0 1.317-2.043l.007-.117V3.5h-.857a.5.5 0 0 0-.498.45l-.007.05v2.5h-.505a1.5 1.5 0 0 1-.5-.086v2.486a1.5 1.5 0 0 1 .5-.086h.505v2.5a.5.5 0 0 0 .45.498l.05.007h.855zm3.677-4.95a2.5 2.5 0 0 0-2.093-1.51l-.116-.007h-1.18v3.515h1.18a2.5 2.5 0 0 0 2.209-1.517z"/>
                            </svg>
                        </div>
                        <h5 class="mb-2" style="color: var(--vmp-text);">Fundamentals</h5>
                        <p class="small text-muted">Essential security basics for all WordPress users</p>
                    </div>
                </div>
            </div>

            <!-- Developers Category -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center" style="transition: transform 0.3s ease;">
                    <div class="card-body p-4">
                        <div class="mb-3" style="background: #f39c12; padding: 30px; border-radius: 15px; display: inline-block;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                            </svg>
                        </div>
                        <h5 class="mb-2" style="color: var(--vmp-text);">Developers</h5>
                        <p class="small text-muted">Advanced security practices for developers</p>
                    </div>
                </div>
            </div>

            <!-- Supplemental Category -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center" style="transition: transform 0.3s ease;">
                    <div class="card-body p-4">
                        <div class="mb-3" style="background: #3498db; padding: 30px; border-radius: 15px; display: inline-block;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-code-slash" viewBox="0 0 16 16">
                                <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
                            </svg>
                        </div>
                        <h5 class="mb-2" style="color: var(--vmp-text);">Supplemental</h5>
                        <p class="small text-muted">Additional resources and tools</p>
                    </div>
                </div>
            </div>

            <!-- Malware Removal Category -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center" style="transition: transform 0.3s ease;">
                    <div class="card-body p-4">
                        <div class="mb-3" style="background: #e74c3c; padding: 30px; border-radius: 15px; display: inline-block;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-bug-fill" viewBox="0 0 16 16">
                                <path d="M4.978.855a.5.5 0 1 0-.956.29l.41 1.352A4.985 4.985 0 0 0 3 6h10a4.985 4.985 0 0 0-1.432-3.503l.41-1.352a.5.5 0 1 0-.956-.29l-.291.956A4.978 4.978 0 0 0 8 1a4.979 4.979 0 0 0-2.731.811l-.29-.956z"/>
                                <path d="M13 6v1H8.5v8.975A5 5 0 0 0 13 11h.5a.5.5 0 0 1 .5.5v.5a.5.5 0 1 0 1 0v-.5a1.5 1.5 0 0 0-1.5-1.5H13V9h1.5a.5.5 0 0 0 0-1H13V7h.5A1.5 1.5 0 0 0 15 5.5V5a.5.5 0 0 0-1 0v.5a.5.5 0 0 1-.5.5H13zm-5.5 9.975V7H3V6h-.5a.5.5 0 0 1-.5-.5V5a.5.5 0 0 0-1 0v.5A1.5 1.5 0 0 0 2.5 7H3v1H1.5a.5.5 0 0 0 0 1H3v1h-.5A1.5 1.5 0 0 0 1 11.5v.5a.5.5 0 1 0 1 0v-.5a.5.5 0 0 1 .5-.5H3a5 5 0 0 0 4.5 4.975z"/>
                            </svg>
                        </div>
                        <h5 class="mb-2" style="color: var(--vmp-text);">Malware Removal</h5>
                        <p class="small text-muted">Cleaning and recovery techniques</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Arrow Indicator -->
        <div class="text-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
            </svg>
        </div>
    </div>
</section>

<!-- Coming Soon Message -->
<section class="py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card border-0 shadow-sm p-5 text-center" style="background: white;">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                        </svg>
                    </div>
                    <h2 class="mb-3" style="color: var(--vmp-primary);">Learning Center Coming Soon</h2>
                    <p class="lead text-muted mb-4">
                        We're developing a comprehensive library of educational resources to help you master WordPress security at every level.
                    </p>
                    <div class="badge px-4 py-2" style="background-color: var(--vmp-warning); font-size: 14px;">
                        📚 Educational Content in Development
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Course Preview Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h3 class="text-center mb-5" style="color: var(--vmp-primary);">Upcoming Course Modules</h3>
                
                <!-- Course List -->
                <div class="row g-4">
                    <!-- Module 1 -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center mb-3 mb-md-0">
                                        <div class="rounded p-3" style="background: var(--vmp-warning); display: inline-block;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h5 style="color: var(--vmp-primary);">1.0: Introduction to WordPress Security</h5>
                                        <p class="text-muted mb-2">
                                            If you are new to WordPress administration and WordPress security, this is the first article from our learning center you should read. It covers the basics of administering WordPress security and will help you get up to speed with things like major page updates, choosing secure passwords for your members and admins, and more.
                                        </p>
                                        <small class="badge" style="background: var(--vmp-success);">Fundamentals</small>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <span class="badge" style="background: var(--vmp-warning); font-size: 12px;">Coming Soon</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Module 2 -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center mb-3 mb-md-0">
                                        <div class="rounded p-3" style="background: var(--vmp-success); display: inline-block;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-shield-lock" viewBox="0 0 16 16">
                                                <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                                                <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h5 style="color: var(--vmp-primary);">1.1: How to Protect Yourself from WordPress Security Issues & Threats</h5>
                                        <p class="text-muted mb-2">
                                            This document is designed to help you understand the basics of WordPress security. It is worth having to give you a working knowledge of who is attacking your WordPress site, why they attack it, and how they do it to get in.
                                        </p>
                                        <small class="badge" style="background: var(--vmp-success);">Fundamentals</small>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <span class="badge" style="background: var(--vmp-warning); font-size: 12px;">Coming Soon</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Module 3 -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center mb-3 mb-md-0">
                                        <div class="rounded p-3" style="background: var(--vmp-primary-dark); display: inline-block;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-server" viewBox="0 0 16 16">
                                                <path d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4c0 1.473-2.985 2.667-6.667 2.667S1.333 5.473 1.333 4V2.667z"/>
                                                <path d="M1.333 6.334v3C1.333 10.805 4.318 12 8 12s6.667-1.194 6.667-2.667V6.334a6.51 6.51 0 0 1-1.458.79C11.81 7.684 9.967 8 8 8c-1.966 0-3.809-.317-5.208-.876a6.508 6.508 0 0 1-1.458-.79z"/>
                                                <path d="M14.667 11.668a6.51 6.51 0 0 1-1.458.789c-1.4.56-3.242.876-5.21.876-1.966 0-3.809-.316-5.208-.876a6.51 6.51 0 0 1-1.458-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667v-1.665z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h5 style="color: var(--vmp-primary);">1.2: How to Choose a WordPress Hosting Service</h5>
                                        <p class="text-muted mb-2">
                                            This is the second article you should read when you are first starting to secure your site and you choose a new WordPress website. There are a wide array of WordPress hosting options to choose from - from bargain shared WordPress hosting options that cost just a few dollars per month to more costly dedicated WordPress hosting.
                                        </p>
                                        <small class="badge" style="background: var(--vmp-success);">Fundamentals</small>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <span class="badge" style="background: var(--vmp-warning); font-size: 12px;">Coming Soon</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Module 4 -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-center mb-3 mb-md-0">
                                        <div class="rounded p-3" style="background: var(--vmp-primary); display: inline-block;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-pc-display" viewBox="0 0 16 16">
                                                <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h5 style="color: var(--vmp-primary);">1.3: How to Secure Your WordPress Working Environment</h5>
                                        <p class="text-muted mb-2">
                                            This covers what your hacker does after a site is hacked, and includes all areas that are examples of exploits in the network when discussed among security professionals.
                                        </p>
                                        <small class="badge" style="background: var(--vmp-success);">Fundamentals</small>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <span class="badge" style="background: var(--vmp-warning); font-size: 12px;">Coming Soon</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- More modules coming -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm" style="background: var(--vmp-gray);">
                            <div class="card-body p-4 text-center">
                                <h6 class="text-muted mb-0">+ Many More Courses Coming Soon</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, var(--vmp-primary) 0%, var(--vmp-dark) 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center text-white">
                <h2 class="mb-4">Get Notified When Learning Center Launches</h2>
                <p class="lead mb-4">Be among the first to access our comprehensive WordPress security training materials</p>
                
                <form class="row g-3 justify-content-center">
                    <div class="col-md-6">
                        <input type="email" class="form-control form-control-lg" placeholder="Enter your email address" required>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-lg w-100" style="background: var(--vmp-warning); border-color: var(--vmp-warning); color: #fff;">Notify Me</button>
                    </div>
                </form>
                
                <div class="mt-4">
                    <div class="row g-3 justify-content-center">
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-3">
                                    <h6 style="color: var(--vmp-success);">50+ Lessons</h6>
                                    <p class="small text-muted mb-0">Comprehensive coverage</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-3">
                                    <h6 style="color: var(--vmp-warning);">Video Tutorials</h6>
                                    <p class="small text-muted mb-0">Visual learning materials</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-3">
                                    <h6 style="color: var(--vmp-primary-dark);">Free Access</h6>
                                    <p class="small text-muted mb-0">Available to all users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="mt-4 mb-0 small">
                    <small>📅 Expected Launch: Q3 2026</small>
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>