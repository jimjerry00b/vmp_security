<?php
/*
Template Name: Plugins Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Plugins - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Plugins page of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section with Network Pattern Background -->
<section class="position-relative py-5" style="background: linear-gradient(135deg, #f0f0f1 0%, #ffffff 100%); overflow: hidden;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="opacity: 0.1; background-image: url('data:image/svg+xml,%3Csvg width=\'100\' height=\'100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M10 10 L90 90 M90 10 L10 90 M50 0 L50 100 M0 50 L100 50\' stroke=\'%23191970\' stroke-width=\'0.5\' fill=\'none\'/%3E%3C/svg%3E'); background-size: 100px 100px;"></div>
    <div class="container position-relative">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="VMP&trade; Security Intelligence" style="max-width: 200px; height: auto;">
                </div>
                <h1 class="display-5 fw-bold mb-3" style="color: var(--vmp-primary);">
                    <span style="color: var(--vmp-warning);">VMP</span>Security
                    <span style="font-weight: 400;">INTELLIGENCE</span>
                </h1>
            </div>
        </div>
    </div>
</section>

<!-- Info Banner -->
<section class="py-3" style="background-color: #d1ecf1; border-bottom: 1px solid #bee5eb;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p class="text-center mb-0" style="color: #0c5460; font-size: 14px;">
                    <strong>Coming Soon:</strong> Have you found a vulnerability in a WordPress plugin or theme? Report vulnerabilities in WordPress plugins and themes through our 
                    <a href="#" style="color: var(--vmp-primary-dark); font-weight: 600;">bug bounty program</a> and earn a bounty as all-in-scope submissions, 
                    while we handle the disclosure and notification to your behalf.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Secondary Info Banner -->
<section class="py-3" style="background-color: #fff3cd; border-bottom: 1px solid #ffeaa7;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p class="text-center mb-0" style="color: #856404; font-size: 13px;">
                    As a reminder, the VMP&trade; Security Intelligence vulnerability database is in <strong>beta</strong> and not quite ready for use yet. We're currently still completing the core vulnerability data for the Live interface. 
                    Please reach out with any questions and feature requests or more information to help us improve and configure webhooks pulling all the latest data related to the 
                    VMP&trade; Security Intelligence user interface.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" style="color: var(--vmp-primary-dark);">VMP&trade; Security Intelligence</a></li>
                        <li class="breadcrumb-item"><a href="#" style="color: var(--vmp-primary-dark);">Vulnerability Database</a></li>
                        <li class="breadcrumb-item active" aria-current="page">WordPress Plugins</li>
                    </ol>
                </nav>

                <!-- Page Title with Count -->
                <div class="text-center mb-4">
                    <h2 class="h4 mb-2" style="color: var(--vmp-text-light);">
                        Showing <span class="fw-bold" style="color: var(--vmp-primary);">1-20</span> of 
                        <span class="fw-bold" style="color: var(--vmp-primary);">14726</span> plugins with known vulnerabilities
                    </h2>
                    <p class="small text-muted mb-0">🔄 Database currently being populated with vulnerability data</p>
                </div>

                <!-- Search Section -->
                <div class="card border shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h3 class="h5 mb-3 fw-bold" style="color: var(--vmp-primary);">Search all WordPress Plugins with known vulnerabilities</h3>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Enter search criteria..." style="border-color: var(--vmp-border);">
                            <button class="btn btn-lg px-4" disabled style="background: var(--vmp-primary-dark); border-color: var(--vmp-primary-dark); color: white;">
                                SEARCH
                            </button>
                        </div>
                        <p class="small mb-0 mt-2" style="color: var(--vmp-text-light);">
                            <strong>Tip:</strong> No other search via CV CLI, software name or slug, of the newest vulnerability. Expert to read about latest advanced search options.
                        </p>
                    </div>
                </div>

                <!-- Plugins Table -->
                <div class="card border shadow-sm mb-5">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead style="background-color: var(--vmp-gray);">
                                    <tr>
                                        <th class="fw-semibold ps-4" style="color: var(--vmp-text); width: 50%;">Title ▼</th>
                                        <th class="fw-semibold text-center" style="color: var(--vmp-text);">Number of vulnerabilities ▼</th>
                                        <th class="fw-semibold text-end pe-4" style="color: var(--vmp-text);">Last Vulnerability ▼</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Coming Soon Message -->
                                    <tr>
                                        <td colspan="3" class="text-center py-5">
                                            <div class="mb-3">
                                                <svg width="64" height="64" fill="var(--vmp-border)" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                </svg>
                                            </div>
                                            <h5 class="fw-bold" style="color: var(--vmp-primary);">Plugin Vulnerability Database Coming Soon</h5>
                                            <p class="text-muted mb-0">We're building a comprehensive database of WordPress plugin vulnerabilities.</p>
                                            <p class="text-muted">Check back soon for detailed vulnerability tracking across 14,000+ plugins.</p>
                                        </td>
                                    </tr>
                                    <!-- Sample Preview Rows (Dimmed) -->
                                    <tr style="opacity: 0.4;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">WooCommerce - Advanced Shipping Templates | Easy 100% Print & Pre-Stamp Templates And Cloud</a></td>
                                        <td class="text-center"><span class="badge rounded-pill" style="background-color: var(--vmp-warning); color: white; font-size: 14px; min-width: 30px;">4</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 5, 2026</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4; background-color: #f9f9f9;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">User Registration & Membership – Custom Registration Form LOGIN – Contact Login Form – User RSVP, Contact List, Reservations & Memberships Plugin</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">24</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 3, 2025</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">WooCommerce Square</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">2</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 5, 2026</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4; background-color: #f9f9f9;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">RapidLoad- Social Media Auto Poster & Scheduler</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">22</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 9, 2025</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">EditorsPress Popup Builder</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">1</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 5, 2026</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4; background-color: #f9f9f9;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">Countdown Timer – Widget Countdown</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">2</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 5, 2025</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">Frontend Image Sizer (Fix JPG)</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">13</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 5, 2026</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4; background-color: #f9f9f9;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">crankshape HTTP verification and DNS Verification for SSL/TLS Certificates</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">8</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 9, 2025</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">Elementals and smart features for Pillow Woven</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">31</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 5, 2025</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4; background-color: #f9f9f9;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">Usernap Header Menu</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">5</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 8, 2025</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">WP Page Permalink Zeitgeist</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">1</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 4, 2026</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4; background-color: #f9f9f9;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">Simple People</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">1</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 8, 2025</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">Membership for WordPress</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">1</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 5, 2026</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4; background-color: #f9f9f9;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">PublicLink</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">1</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 8, 2025</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">Transfer Title hook</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">1</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 5, 2026</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4; background-color: #f9f9f9;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">Client Testimonial Slider</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">3</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 8, 2025</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">Convert Currency email Generator</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">3</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 3, 2025</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4; background-color: #f9f9f9;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">DMS card Mismatch in a link</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">1</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 8, 2025</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">BAT Advanced Module</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">1</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 5, 2025</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4; background-color: #f9f9f9;" class="border-bottom">
                                        <td class="ps-4"><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">Menu Card</a></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-secondary" style="font-size: 14px; min-width: 30px;">1</span></td>
                                        <td class="text-end pe-4"><small style="color: var(--vmp-text);">January 3, 2025</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Pagination -->
                        <div class="p-3 text-center" style="background-color: var(--vmp-gray); border-top: 1px solid var(--vmp-border);">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#" style="background-color: var(--vmp-primary-dark); border-color: var(--vmp-primary-dark);">1</a>
                                    </li>
                                    <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item disabled"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item disabled"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item disabled"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item disabled">
                                        <span class="page-link">...</span>
                                    </li>
                                    <li class="page-item disabled"><a class="page-link" href="#">736</a></li>
                                    <li class="page-item disabled">
                                        <span class="page-link">Next →</span>
                                    </li>
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Coming Soon Notice -->
                <div class="alert alert-info text-center p-4 mb-5" style="background-color: #e8f4f8; border-color: var(--vmp-primary-dark);">
                    <h5 class="fw-bold mb-3" style="color: var(--vmp-primary);">🚀 Plugin Database Launch Coming Soon</h5>
                    <p class="mb-2">We're actively cataloging vulnerabilities across 14,726+ WordPress plugins.</p>
                    <p class="mb-0">Get real-time notifications when new vulnerabilities are discovered in your plugins!</p>
                </div>

                <!-- Bottom CTA Sections -->
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center p-4">
                            <div class="card-body">
                                <h5 class="fw-bold mb-3" style="color: var(--vmp-primary);">Stay Protected</h5>
                                <p class="small mb-3">Did you know VMP&trade; Security Intelligence provides free comprehensive WordPress vulnerability database, along with a free webhook integration to receive alerts of new vulnerabilities are discovered, so that you can act fast?</p>
                                <button class="btn btn-primary w-100" style="background: var(--vmp-warning); border-color: var(--vmp-warning);">
                                    LEARN MORE
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center p-4">
                            <div class="card-body">
                                <h5 class="fw-bold mb-3" style="color: var(--vmp-primary);">Get Real-time Alerts</h5>
                                <p class="small mb-3">Want to get notified of the latest vulnerabilities that may impact your WordPress sites as they're added to our database? Install VMP&trade; Security on your site today, so we can surface this vulnerability info directly to you in real time.</p>
                                <button class="btn btn-primary w-100" style="background: var(--vmp-primary-dark); border-color: var(--vmp-primary-dark);">
                                    GET WEBHOOKS
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center p-4">
                            <div class="card-body">
                                <h5 class="fw-bold mb-3" style="color: var(--vmp-primary);">API Integration</h5>
                                <p class="small mb-3">The VMP&trade; Security Intelligence WordPress Vulnerability Database is in the most up-to-date and easily accessible online or query via API. Please review the documentation on how to access and configure the vulnerability data via API.</p>
                                <button class="btn btn-primary w-100" style="background: var(--vmp-warning); border-color: var(--vmp-warning);">
                                    DOCUMENTATION
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>