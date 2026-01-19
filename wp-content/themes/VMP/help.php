<?php
/*
Template Name: Help Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Help - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Help of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section -->
<section class="py-5" style="background: linear-gradient(135deg, #007AFF 0%, #0056b3 100%); position: relative; overflow: hidden;">
    <!-- World Map Background Pattern -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.15; background-image: radial-gradient(circle at 20% 50%, transparent 0%, transparent 20%, rgba(255,255,255,0.1) 21%, transparent 22%), radial-gradient(circle at 80% 80%, transparent 0%, transparent 20%, rgba(255,255,255,0.1) 21%, transparent 22%);"></div>
    
    <div class="container position-relative" style="z-index: 1;">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center text-white">
                <!-- Computer Icon -->
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                        <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                    </svg>
                </div>
                <h1 class="display-4 fw-bold mb-3">Help Documentation</h1>
                <p class="lead mb-0">VMP&trade; Security plugin documentation and support</p>
            </div>
        </div>
    </div>
</section>

<!-- Search and Support Section -->
<section class="py-4 bg-white shadow-sm">
    <div class="container">
        <div class="row g-3 align-items-center">
            <div class="col-md-8">
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" placeholder="How can we help you today?" disabled>
                    <button class="btn" style="background: var(--vmp-primary-dark); color: white;" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Support Options -->
<section class="py-4" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4 text-center">
                        <h4 class="mb-3" style="color: var(--vmp-primary);">Free Support</h4>
                        <p class="text-muted mb-3">
                            Support for users of the free version of the plugin is available on our <a href="#" style="color: var(--vmp-primary-dark);">WordPress.org support forums</a>. The majority of features shown are available in the free version of VMP&trade; Security which helps protect millions of sites around the world.
                        </p>
                        <button class="btn btn-outline-primary" disabled>Go to support forums</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4 text-center">
                        <h4 class="mb-3" style="color: var(--vmp-primary);">Access Upgraded Support Now</h4>
                        <p class="text-muted mb-3">
                            Our support engineers, equipped in Premium tickets within a few hours on weekdays, will be pleased to help you with advanced topics, provide comprehensive answers to your questions, and respond to all others in 24 hours or less.
                        </p>
                        <button class="btn" style="background: var(--vmp-primary-dark); color: white;" disabled>Premium Support</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Area -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Left Sidebar / Main Content -->
            <div class="col-lg-8">
                <h2 class="mb-4" style="color: var(--vmp-primary);">Help Documentation</h2>
                
                <!-- Video Placeholder -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4" style="background: var(--vmp-primary);">
                        <div class="row align-items-center text-white">
                            <div class="col-md-6">
                                <div class="bg-white rounded p-4 text-center" style="min-height: 200px; display: flex; align-items: center; justify-content: center;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16" style="color: var(--vmp-danger);">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>Video Help</h4>
                                <p class="mb-0">Step by Step Installation</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Documentation Sections Coming Soon -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h4 class="mb-4" style="color: var(--vmp-primary);">📚 Documentation Coming Soon</h4>
                        
                        <!-- Topics List -->
                        <div class="list-group list-group-flush">
                            <div class="list-group-item border-0 px-0">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: var(--vmp-gray);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16" style="color: var(--vmp-primary);">
                                                <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                                                <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1" style="color: var(--vmp-primary);">Vulnerability Triage</h6>
                                        <p class="mb-0 small text-muted">Understanding how we assess and prioritize security vulnerabilities</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge" style="background: var(--vmp-warning);">Coming Soon</span>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item border-0 px-0">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: var(--vmp-gray);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1" style="color: var(--vmp-primary);">Guardian Management: Webhook Notifications</h6>
                                        <p class="mb-0 small text-muted">Set up real-time alerts for security events and vulnerabilities</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge" style="background: var(--vmp-warning);">Coming Soon</span>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item border-0 px-0">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: var(--vmp-gray);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1" style="color: var(--vmp-primary);">VMP&trade; Security Premium</h6>
                                        <p class="mb-0 small text-muted">Advanced features and priority support for premium users</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge" style="background: var(--vmp-warning);">Coming Soon</span>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item border-0 px-0">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: var(--vmp-gray);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1" style="color: var(--vmp-primary);">VMP&trade; Security Care</h6>
                                        <p class="mb-0 small text-muted">Managed security services and site cleanup</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge" style="background: var(--vmp-warning);">Coming Soon</span>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item border-0 px-0">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: var(--vmp-gray);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-server" viewBox="0 0 16 16" style="color: var(--vmp-danger);">
                                                <path d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4c0 1.473-2.985 2.667-6.667 2.667S1.333 5.473 1.333 4V2.667z"/>
                                                <path d="M1.333 6.334v3C1.333 10.805 4.318 12 8 12s6.667-1.194 6.667-2.667V6.334a6.51 6.51 0 0 1-1.458.79C11.81 7.684 9.967 8 8 8c-1.966 0-3.809-.317-5.208-.876a6.508 6.508 0 0 1-1.458-.79z"/>
                                                <path d="M14.667 11.668a6.51 6.51 0 0 1-1.458.789c-1.4.56-3.242.876-5.21.876-1.966 0-3.809-.316-5.208-.876a6.51 6.51 0 0 1-1.458-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667v-1.665z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1" style="color: var(--vmp-primary);">VMP&trade; Security Response</h6>
                                        <p class="mb-0 small text-muted">Emergency incident response and site recovery</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge" style="background: var(--vmp-warning);">Coming Soon</span>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item border-0 px-0">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: var(--vmp-gray);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-life-preserver" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm6.43-5.228a7.025 7.025 0 0 1-3.658 3.658l-1.115-2.788a4.015 4.015 0 0 0 1.985-1.985l2.788 1.115zM5.228 14.43a7.025 7.025 0 0 1-3.658-3.658l2.788-1.115a4.015 4.015 0 0 0 1.985 1.985L5.228 14.43zm9.202-9.202-2.788 1.115a4.015 4.015 0 0 0-1.985-1.985l1.115-2.788a7.025 7.025 0 0 1 3.658 3.658zm-8.087-.87a4.015 4.015 0 0 0-1.985 1.985L1.57 5.228A7.025 7.025 0 0 1 5.228 1.57l1.115 2.788zM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1" style="color: var(--vmp-primary);">Incident Response Services</h6>
                                        <p class="mb-0 small text-muted">Expert help when you need it most</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge" style="background: var(--vmp-warning);">Coming Soon</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Resources -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="mb-4" style="color: var(--vmp-primary);">📖 Additional Resources</h4>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="p-3 rounded" style="background: var(--vmp-gray);">
                                    <h6 style="color: var(--vmp-primary);">License Key</h6>
                                    <p class="small text-muted mb-0">Learn how to manage your license keys</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 rounded" style="background: var(--vmp-gray);">
                                    <h6 style="color: var(--vmp-primary);">Account and Billing History</h6>
                                    <p class="small text-muted mb-0">View your account details and billing</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 rounded" style="background: var(--vmp-gray);">
                                    <h6 style="color: var(--vmp-primary);">VMP&trade; Security Central: Two Factor Login</h6>
                                    <p class="small text-muted mb-0">Secure your account with 2FA</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 rounded" style="background: var(--vmp-gray);">
                                    <h6 style="color: var(--vmp-primary);">Tools</h6>
                                    <p class="small text-muted mb-0">Useful security tools and utilities</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm sticky-top" style="top: 20px;">
                    <div class="card-body p-4">
                        <h5 class="mb-4" style="color: var(--vmp-primary);">Top Topics and Questions</h5>
                        
                        <div class="mb-4">
                            <h6 class="text-uppercase small mb-3" style="color: var(--vmp-text-light); letter-spacing: 0.5px;">Getting Started</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="#" class="text-decoration-none d-flex align-items-center" style="color: var(--vmp-text);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right me-2" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                        <small>Installing The Plugin</small>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-decoration-none d-flex align-items-center" style="color: var(--vmp-text);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right me-2" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                        <small>Basic Configuration</small>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-decoration-none d-flex align-items-center" style="color: var(--vmp-text);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right me-2" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                        <small>First Security Scan</small>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="mb-4">
                            <h6 class="text-uppercase small mb-3" style="color: var(--vmp-text-light); letter-spacing: 0.5px;">Security</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="#" class="text-decoration-none d-flex align-items-center" style="color: var(--vmp-text);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right me-2" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                        <small>Firewall Setup</small>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-decoration-none d-flex align-items-center" style="color: var(--vmp-text);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right me-2" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                        <small>Malware Scanning</small>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-decoration-none d-flex align-items-center" style="color: var(--vmp-text);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right me-2" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                        <small>Two-Factor Authentication</small>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="mb-4">
                            <h6 class="text-uppercase small mb-3" style="color: var(--vmp-text-light); letter-spacing: 0.5px;">Troubleshooting</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="#" class="text-decoration-none d-flex align-items-center" style="color: var(--vmp-text);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right me-2" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                        <small>Common Issues</small>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-decoration-none d-flex align-items-center" style="color: var(--vmp-text);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right me-2" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                        <small>Performance Optimization</small>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-decoration-none d-flex align-items-center" style="color: var(--vmp-text);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right me-2" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                        <small>Error Messages</small>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h6 class="text-uppercase small mb-3" style="color: var(--vmp-text-light); letter-spacing: 0.5px;">API/Integrations</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="#" class="text-decoration-none d-flex align-items-center" style="color: var(--vmp-text);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right me-2" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                        <small>API Documentation</small>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-decoration-none d-flex align-items-center" style="color: var(--vmp-text);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right me-2" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                        <small>Webhook Setup</small>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-decoration-none d-flex align-items-center" style="color: var(--vmp-text);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right me-2" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                        <small>Third-party Tools</small>
                                    </a>
                                </li>
                            </ul>
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
                <h2 class="mb-3">Documentation Coming Soon</h2>
                <p class="lead mb-4">We're working hard to create comprehensive documentation and support resources for all VMP&trade; Security features.</p>
                <div class="row g-3 justify-content-center">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h5 style="color: var(--vmp-primary);">📅 Launch Timeline</h5>
                                <p class="text-muted mb-0">Full documentation portal: Q2 2026</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h5 style="color: var(--vmp-primary);">📧 Get Notified</h5>
                                <p class="text-muted mb-0">Subscribe to updates on our homepage</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>