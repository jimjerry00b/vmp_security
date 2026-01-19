<?php
/*
Template Name: Vulnerabilities Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Vulnerabilities - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Vulnerabilities page of VMP&trade; Security">' . "\n";
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
                    <span style="color: var(--vmp-warning);">VMP</span> Security
                    <span style="font-weight: 400;"> INTELLIGENCE</span>
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
                    As a reminder, the WordPress Intelligence vulnerability database is in <strong>beta</strong> and not quite ready for use. We're currently still completing the core functionality, both for the Live interface. 
                    Please reach out with any questions and share your feedback on the upcoming features to help us improve and configure webhooks pulling all the latest data related to the 
                    WordPress Intelligence user interface.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Main Database Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" style="color: var(--vmp-primary-dark);">VMP&trade; Security Intelligence</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Vulnerability Database</li>
                    </ol>
                </nav>

                <!-- Page Title -->
                <h2 class="h3 fw-bold mb-4 text-center" style="color: var(--vmp-primary);">WordPress Vulnerability Database</h2>

                <!-- Three Icons Section -->
                <div class="row text-center mb-5">
                    <div class="col-md-4 mb-4">
                        <div class="p-4">
                            <div class="mb-3 d-flex justify-content-center align-items-center" style="height: 120px;">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 120px; height: 120px; background-color: #f0f0f1;">
                                    <svg width="80" height="80" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="50" cy="50" r="45" fill="#c3c4c7"/>
                                        <text x="50" y="60" text-anchor="middle" fill="white" font-size="40" font-weight="bold">W</text>
                                    </svg>
                                </div>
                            </div>
                            <h5 class="fw-bold" style="color: var(--vmp-primary);">WordPress Core</h5>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="p-4">
                            <div class="mb-3 d-flex justify-content-center align-items-center" style="height: 120px;">
                                <div class="d-flex align-items-center justify-content-center" style="width: 120px; height: 120px;">
                                    <svg width="120" height="120" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30 20h15v25H30V20zm25 0h15v25H55V20zM30 55h15v25H30V55zm25 0h15v25H55V55z" fill="#c3c4c7"/>
                                    </svg>
                                </div>
                            </div>
                            <h5 class="fw-bold" style="color: var(--vmp-primary);">WordPress Plugins</h5>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="p-4">
                            <div class="mb-3 d-flex justify-content-center align-items-center" style="height: 120px;">
                                <div class="d-flex align-items-center justify-content-center" style="width: 120px; height: 120px;">
                                    <svg width="120" height="120" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="20" y="20" width="60" height="60" rx="5" fill="#c3c4c7"/>
                                        <path d="M30 35h40M30 45h40M30 55h25" stroke="white" stroke-width="3"/>
                                    </svg>
                                </div>
                            </div>
                            <h5 class="fw-bold" style="color: var(--vmp-primary);">WordPress Themes</h5>
                        </div>
                    </div>
                </div>

                <!-- Search Section -->
                <div class="card border shadow-sm mb-5">
                    <div class="card-header" style="background-color: var(--vmp-gray); border-bottom: 2px solid var(--vmp-border);">
                        <h3 class="h5 mb-0 fw-bold" style="color: var(--vmp-primary);">Search All Vulnerabilities</h3>
                    </div>
                    <div class="card-body p-4">
                        <form>
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold" style="color: var(--vmp-text);">Enter search term</label>
                                    <input type="text" class="form-control" placeholder="Search vulnerabilities..." style="border-color: var(--vmp-border);">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label small fw-semibold" style="color: var(--vmp-text);">CVE Type</label>
                                    <select class="form-select" style="border-color: var(--vmp-border);">
                                        <option selected>All</option>
                                        <option>Plugin</option>
                                        <option>Theme</option>
                                        <option>Core</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label small fw-semibold" style="color: var(--vmp-text);">Any Rating</label>
                                    <select class="form-select" style="border-color: var(--vmp-border);">
                                        <option selected>All</option>
                                        <option>Critical</option>
                                        <option>High</option>
                                        <option>Medium</option>
                                        <option>Low</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label small fw-semibold" style="color: var(--vmp-text);">Year</label>
                                    <select class="form-select" style="border-color: var(--vmp-border);">
                                        <option selected>All</option>
                                        <option>2026</option>
                                        <option>2025</option>
                                        <option>2024</option>
                                        <option>2023</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="button" class="btn btn-primary px-4" disabled style="background: var(--vmp-primary-dark); border-color: var(--vmp-primary-dark);">
                                        <i class="bi bi-search"></i> SEARCH
                                    </button>
                                    <span class="ms-3 small text-muted">🔒 Search functionality coming soon</span>
                                </div>
                            </div>
                        </form>
                        <div class="mt-3">
                            <p class="small mb-0" style="color: var(--vmp-text-light);">
                                <strong>Tip:</strong> No other search via CV CLI, software name or slug, of the newest vulnerability. Expert to read about latest advanced search options.
                            </p>
                            <p class="small mb-0" style="color: var(--vmp-text-light);">
                                By selecting "Search" you acknowledge that you have read and agreed to the <a href="#" style="color: var(--vmp-primary-dark);">VMP&trade; Security Intelligence Terms and Conditions</a>.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- All Vulnerabilities Table -->
                <div class="card border shadow-sm mb-5">
                    <div class="card-header d-flex justify-content-between align-items-center" style="background-color: white; border-bottom: 2px solid var(--vmp-border);">
                        <h3 class="h5 mb-0 fw-bold" style="color: var(--vmp-primary);">All Vulnerabilities</h3>
                        <button class="btn btn-sm" disabled style="background: var(--vmp-warning); border-color: var(--vmp-warning); color: white;">
                            SUBMIT VULNERABILITY
                        </button>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead style="background-color: var(--vmp-gray);">
                                    <tr>
                                        <th class="fw-semibold" style="color: var(--vmp-text);">Title</th>
                                        <th class="fw-semibold" style="color: var(--vmp-text);">CVE ID</th>
                                        <th class="fw-semibold" style="color: var(--vmp-text);">CVSS</th>
                                        <th class="fw-semibold" style="color: var(--vmp-text);">Researchers</th>
                                        <th class="fw-semibold" style="color: var(--vmp-text);">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="5" class="text-center py-5">
                                            <div class="mb-3">
                                                <svg width="64" height="64" fill="var(--vmp-border)" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                </svg>
                                            </div>
                                            <h5 class="fw-bold" style="color: var(--vmp-primary);">Vulnerability Database Coming Soon</h5>
                                            <p class="text-muted mb-0">Our comprehensive WordPress vulnerability database is currently being built.</p>
                                            <p class="text-muted">Check back soon for real-time vulnerability data, CVE tracking, and security insights.</p>
                                        </td>
                                    </tr>
                                    <!-- Sample rows for preview -->
                                    <tr style="opacity: 0.4;">
                                        <td><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">Sample Plugin <= 1.2.3 - Unauthenticated Stored XSS</a></td>
                                        <td><span class="badge bg-secondary">CVE-2025-0001</span></td>
                                        <td><span class="badge" style="background: var(--vmp-warning);">6.5</span></td>
                                        <td><small>researcher-name</small></td>
                                        <td><small>January 5, 2026</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4;">
                                        <td><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">Example Theme < 2.0 - Cross-Site Request Forgery</a></td>
                                        <td><span class="badge bg-secondary">CVE-2025-0002</span></td>
                                        <td><span class="badge bg-success">4.3</span></td>
                                        <td><small>security-team</small></td>
                                        <td><small>January 3, 2026</small></td>
                                    </tr>
                                    <tr style="opacity: 0.4;">
                                        <td><a href="#" class="text-decoration-none" style="color: var(--vmp-primary-dark);">Demo Plugin <= 3.1.0 - SQL Injection</a></td>
                                        <td><span class="badge bg-secondary">CVE-2025-0003</span></td>
                                        <td><span class="badge bg-danger">9.1</span></td>
                                        <td><small>research-pro</small></td>
                                        <td><small>December 28, 2025</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="p-3 text-center" style="background-color: var(--vmp-gray); border-top: 1px solid var(--vmp-border);">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item disabled"><a class="page-link" href="#">«</a></li>
                                    <li class="page-item active"><a class="page-link" href="#" style="background-color: var(--vmp-primary-dark); border-color: var(--vmp-primary-dark);">1</a></li>
                                    <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item disabled"><a class="page-link" href="#">»</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Researcher Hall of Fame -->
                <div class="card border shadow-sm mb-5">
                    <div class="card-header d-flex justify-content-between align-items-center" style="background-color: white; border-bottom: 2px solid var(--vmp-border);">
                        <h3 class="h5 mb-0 fw-bold" style="color: var(--vmp-primary);">Researcher Hall of Fame <span class="text-muted fw-normal">(Past 30 days)</span></h3>
                        <button class="btn btn-sm btn-outline-secondary" disabled>VIEW ALL</button>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead style="background-color: var(--vmp-gray);">
                                    <tr>
                                        <th class="fw-semibold" style="color: var(--vmp-text); width: 80px;">Rank</th>
                                        <th class="fw-semibold" style="color: var(--vmp-text);">Name</th>
                                        <th class="text-end fw-semibold" style="color: var(--vmp-text);">Vulnerabilities since Dec 13, 2025</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="background-color: #fff9e6;">
                                        <td class="fw-bold text-center">🥇 1</td>
                                        <td><a href="#" class="text-decoration-none fw-semibold" style="color: var(--vmp-primary-dark);">Coming Soon</a></td>
                                        <td class="text-end"><span class="badge rounded-pill" style="background-color: var(--vmp-warning); color: white; min-width: 40px;">--</span></td>
                                    </tr>
                                    <tr style="background-color: #f5f5f5;">
                                        <td class="fw-bold text-center">🥈 2</td>
                                        <td><a href="#" class="text-decoration-none fw-semibold" style="color: var(--vmp-primary-dark);">Security Researcher</a></td>
                                        <td class="text-end"><span class="badge rounded-pill bg-secondary" style="min-width: 40px;">--</span></td>
                                    </tr>
                                    <tr style="background-color: #fff3e0;">
                                        <td class="fw-bold text-center">🥉 3</td>
                                        <td><a href="#" class="text-decoration-none fw-semibold" style="color: var(--vmp-primary-dark);">Vulnerability Hunter</a></td>
                                        <td class="text-end"><span class="badge rounded-pill bg-secondary" style="min-width: 40px;">--</span></td>
                                    </tr>
                                    <tr style="opacity: 0.6;">
                                        <td class="text-center">4</td>
                                        <td><a href="#" class="text-decoration-none" style="color: var(--vmp-text-light);">Researcher Name</a></td>
                                        <td class="text-end"><span class="badge rounded-pill bg-secondary" style="min-width: 40px;">--</span></td>
                                    </tr>
                                    <tr style="opacity: 0.6;">
                                        <td class="text-center">5</td>
                                        <td><a href="#" class="text-decoration-none" style="color: var(--vmp-text-light);">Security Expert</a></td>
                                        <td class="text-end"><span class="badge rounded-pill bg-secondary" style="min-width: 40px;">--</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Coming Soon Notice -->
                <div class="alert alert-info text-center p-4 mb-5" style="background-color: #e8f4f8; border-color: var(--vmp-primary-dark);">
                    <h5 class="fw-bold mb-3" style="color: var(--vmp-primary);">🚀 Database Launch Coming Soon</h5>
                    <p class="mb-2">We're actively building the most comprehensive WordPress vulnerability database.</p>
                    <p class="mb-0">Features will include real-time notifications, API access, webhook integrations, and more!</p>
                </div>

                <!-- Bottom CTA Sections -->
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center p-4">
                            <div class="card-body">
                                <h5 class="fw-bold mb-3" style="color: var(--vmp-primary);">Get Notified</h5>
                                <p class="small mb-3">Did you know VMP&trade; Security Intelligence provides free vulnerability data for the WordPress community?</p>
                                <button class="btn btn-primary w-100" style="background: var(--vmp-warning); border-color: var(--vmp-warning);">
                                    LEARN MORE
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center p-4">
                            <div class="card-body">
                                <h5 class="fw-bold mb-3" style="color: var(--vmp-primary);">Start Researching</h5>
                                <p class="small mb-3">Want to get notified of the latest vulnerabilities that may impact your WordPress sites as they're added to our database?</p>
                                <button class="btn btn-primary w-100" style="background: var(--vmp-primary-dark); border-color: var(--vmp-primary-dark);">
                                    GET WEBHOOKS
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center p-4">
                            <div class="card-body">
                                <h5 class="fw-bold mb-3" style="color: var(--vmp-primary);">Report Issues</h5>
                                <p class="small mb-3">The VMP&trade; Security Intelligence WordPress Vulnerability Database is the most up-to-date. Please contact the documentation to learn how to access the vulnerability data via API.</p>
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