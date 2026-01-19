<?php
/*
Template Name: Free Support Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Free Support - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Free Support for VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section -->
<section class="py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, var(--vmp-primary) 0%, var(--vmp-dark) 100%);">
    <div class="container position-relative" style="z-index: 1;">
        <div class="row align-items-center">
            <div class="col-lg-6 text-white mb-4 mb-lg-0">
                <h1 class="display-4 fw-bold mb-3">Free Support</h1>
                <p class="lead mb-4">
                    Get help with VMP&trade; Security through our community-driven support channels. Access our knowledge base, submit tickets, and connect with other users.
                </p>
                <div class="d-flex gap-3">
                    <a href="#support-channels" class="btn btn-light btn-lg">Get Started</a>
                    <a href="#faq" class="btn btn-outline-light btn-lg">View FAQs</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="300" height="300" fill="white" class="bi bi-headset" viewBox="0 0 16 16">
                    <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Free vs Premium Comparison -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="mb-3" style="color: var(--vmp-primary);">Choose Your Support Level</h2>
            <p class="lead text-muted">Select the support option that best fits your needs</p>
        </div>
        
        <div class="row g-4">
            <!-- Free Support -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header text-center py-4" style="background: var(--vmp-gray); border: none;">
                        <h3 style="color: var(--vmp-primary);">Free Support</h3>
                        <p class="text-muted mb-0">Community-driven assistance</p>
                    </div>
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                    Community Forum Access
                                </li>
                                <li class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                    Knowledge Base & Documentation
                                </li>
                                <li class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                    Email Support Ticket System
                                </li>
                                <li class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                    Response within 48 hours
                                </li>
                                <li class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                    Video Tutorials
                                </li>
                            </ul>
                        </div>
                        <div class="text-center">
                            <h2 class="mb-3" style="color: var(--vmp-primary);">$0</h2>
                            <button class="btn btn-outline-primary btn-lg w-100" style="border-color: var(--vmp-primary); color: var(--vmp-primary);">Current Plan</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Premium Support -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg h-100" style="border: 3px solid var(--vmp-warning) !important;">
                    <div class="card-header text-center py-4" style="background: var(--vmp-warning); border: none;">
                        <div class="badge mb-2" style="background: rgba(255,255,255,0.3);">RECOMMENDED</div>
                        <h3 class="text-white">Premium Support</h3>
                        <p class="text-white mb-0">Priority assistance & advanced features</p>
                    </div>
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                    <strong>Everything in Free Support</strong>
                                </li>
                                <li class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                    Priority Response within 4 hours
                                </li>
                                <li class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                    Live Chat Support (9am-5pm EST)
                                </li>
                                <li class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                    Direct Phone Support
                                </li>
                                <li class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                    Remote Site Assistance
                                </li>
                                <li class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                    Security Audit Assistance
                                </li>
                            </ul>
                        </div>
                        <div class="text-center">
                            <h2 class="mb-3" style="color: var(--vmp-warning);">$99<small class="fs-6 text-muted">/month</small></h2>
                            <button class="btn btn-lg w-100" style="background: var(--vmp-warning); border-color: var(--vmp-warning); color: #fff;">Upgrade to Premium</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Support Channels -->
<section class="py-5" id="support-channels" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="color: var(--vmp-primary);">Free Support Channels</h2>
            <p class="lead text-muted">Multiple ways to get the help you need</p>
        </div>

        <div class="row g-4">
            <!-- Knowledge Base -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16" style="color: var(--vmp-primary);">
                                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                            </svg>
                        </div>
                        <h5 class="mb-3" style="color: var(--vmp-text);">Knowledge Base</h5>
                        <p class="text-muted mb-4">
                            Browse our comprehensive documentation, guides, and tutorials to find answers to common questions.
                        </p>
                        <a href="#" class="btn" style="background: var(--vmp-primary); border-color: var(--vmp-primary); color: #fff;">Browse Articles</a>
                    </div>
                </div>
            </div>

            <!-- Community Forum -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                            </svg>
                        </div>
                        <h5 class="mb-3" style="color: var(--vmp-text);">Community Forum</h5>
                        <p class="text-muted mb-4">
                            Connect with other users, share experiences, and get help from the community and our support team.
                        </p>
                        <a href="#" class="btn" style="background: var(--vmp-success); border-color: var(--vmp-success); color: #fff;">Visit Forum</a>
                    </div>
                </div>
            </div>

            <!-- Submit Ticket -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                        </div>
                        <h5 class="mb-3" style="color: var(--vmp-text);">Email Support</h5>
                        <p class="text-muted mb-4">
                            Submit a support ticket and receive a response from our team within 48 hours during business days.
                        </p>
                        <a href="#ticket-form" class="btn" style="background: var(--vmp-warning); border-color: var(--vmp-warning); color: #fff;">Submit Ticket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Support Hours & Response Times -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <h3 class="mb-4" style="color: var(--vmp-primary);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-clock me-2" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg>
                                    Support Hours
                                </h3>
                                <p class="mb-3"><strong>Free Support:</strong></p>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">📧 Email Support: 24/7 (Response within 48 hours)</li>
                                    <li class="mb-2">💬 Forum: 24/7 (Community & Staff Moderation)</li>
                                    <li class="mb-2">📚 Knowledge Base: Always Available</li>
                                </ul>
                                
                                <p class="mb-3"><strong>Premium Support:</strong></p>
                                <ul class="list-unstyled">
                                    <li class="mb-2">⚡ Priority Response: Within 4 hours</li>
                                    <li class="mb-2">💬 Live Chat: Mon-Fri, 9am-5pm EST</li>
                                    <li class="mb-2">📞 Phone Support: Mon-Fri, 9am-5pm EST</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-4 rounded" style="background: var(--vmp-gray);">
                                    <h5 class="mb-3" style="color: var(--vmp-primary);">What to Expect</h5>
                                    <p class="mb-3">
                                        <strong>Response Time:</strong> We aim to respond to all free support tickets within 48 business hours.
                                    </p>
                                    <p class="mb-3">
                                        <strong>Business Days:</strong> Monday - Friday (Excluding US Federal Holidays)
                                    </p>
                                    <p class="mb-0">
                                        <strong>Note:</strong> Premium support customers receive priority assistance with faster response times and additional support channels.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Help Articles -->
<section class="py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="color: var(--vmp-primary);">Popular Help Articles</h2>
            <p class="lead text-muted">Find quick answers to common questions</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <span class="badge" style="background: var(--vmp-success);">Getting Started</span>
                        </div>
                        <h5 class="mb-3">
                            <a href="#" style="color: var(--vmp-text); text-decoration: none;">How to Install VMP&trade; Security Plugin</a>
                        </h5>
                        <p class="text-muted mb-3">Step-by-step guide to installing and activating VMP&trade; Security on your WordPress site.</p>
                        <a href="#" class="text-decoration-none" style="color: var(--vmp-primary);">Read More →</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <span class="badge" style="background: var(--vmp-primary);">Configuration</span>
                        </div>
                        <h5 class="mb-3">
                            <a href="#" style="color: var(--vmp-text); text-decoration: none;">Configuring Firewall Settings</a>
                        </h5>
                        <p class="text-muted mb-3">Learn how to configure firewall rules and security settings for optimal protection.</p>
                        <a href="#" class="text-decoration-none" style="color: var(--vmp-primary);">Read More →</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <span class="badge" style="background: var(--vmp-danger);">Troubleshooting</span>
                        </div>
                        <h5 class="mb-3">
                            <a href="#" style="color: var(--vmp-text); text-decoration: none;">Resolving Common Scan Issues</a>
                        </h5>
                        <p class="text-muted mb-3">Solutions for common problems encountered during security scans.</p>
                        <a href="#" class="text-decoration-none" style="color: var(--vmp-primary);">Read More →</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <span class="badge" style="background: var(--vmp-warning);">License</span>
                        </div>
                        <h5 class="mb-3">
                            <a href="#" style="color: var(--vmp-text); text-decoration: none;">Managing Your License Keys</a>
                        </h5>
                        <p class="text-muted mb-3">How to activate, deactivate, and transfer your VMP&trade; Security licenses.</p>
                        <a href="#" class="text-decoration-none" style="color: var(--vmp-primary);">Read More →</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <span class="badge" style="background: var(--vmp-primary-dark);">Security</span>
                        </div>
                        <h5 class="mb-3">
                            <a href="#" style="color: var(--vmp-text); text-decoration: none;">Understanding Security Alerts</a>
                        </h5>
                        <p class="text-muted mb-3">What different security alerts mean and how to respond to them.</p>
                        <a href="#" class="text-decoration-none" style="color: var(--vmp-primary);">Read More →</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <span class="badge" style="background: var(--vmp-success);">Best Practices</span>
                        </div>
                        <h5 class="mb-3">
                            <a href="#" style="color: var(--vmp-text); text-decoration: none;">WordPress Security Best Practices</a>
                        </h5>
                        <p class="text-muted mb-3">Essential security tips to keep your WordPress site safe from threats.</p>
                        <a href="#" class="text-decoration-none" style="color: var(--vmp-primary);">Read More →</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="#" class="btn btn-lg" style="background: var(--vmp-primary); border-color: var(--vmp-primary); color: #fff;">
                View All Articles
            </a>
        </div>
    </div>
</section>

<!-- Support Ticket Form -->
<section class="py-5 bg-white" id="ticket-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <h2 class="mb-4 text-center" style="color: var(--vmp-primary);">Submit a Support Ticket</h2>
                        <p class="text-center text-muted mb-5">Can't find what you're looking for? Send us a message and we'll get back to you within 48 hours.</p>

                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="firstName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="lastName" required>
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-12">
                                    <label for="website" class="form-label">Website URL</label>
                                    <input type="url" class="form-control" id="website" placeholder="https://example.com">
                                </div>
                                <div class="col-12">
                                    <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                                    <select class="form-select" id="category" required>
                                        <option value="">Select a category...</option>
                                        <option value="installation">Installation & Setup</option>
                                        <option value="configuration">Configuration</option>
                                        <option value="troubleshooting">Troubleshooting</option>
                                        <option value="license">License Issues</option>
                                        <option value="security">Security Concerns</option>
                                        <option value="feature">Feature Request</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="subject" required>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="message" rows="6" required placeholder="Please provide as much detail as possible about your issue..."></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="attachment" class="form-label">Attachment (Optional)</label>
                                    <input type="file" class="form-control" id="attachment">
                                    <small class="text-muted">Maximum file size: 5MB. Allowed types: jpg, png, pdf, txt, zip</small>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="terms" required>
                                        <label class="form-check-label" for="terms">
                                            I agree to the <a href="#" style="color: var(--vmp-primary);">Terms of Service</a> and <a href="#" style="color: var(--vmp-primary);">Privacy Policy</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-lg w-100" style="background: var(--vmp-warning); border-color: var(--vmp-warning); color: #fff;">
                                        Submit Ticket
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5" id="faq" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="text-center mb-5">
                    <h2 style="color: var(--vmp-primary);">Frequently Asked Questions</h2>
                    <p class="lead text-muted">Quick answers to common questions about our support</p>
                </div>

                <div class="accordion" id="faqAccordion">
                    <!-- FAQ 1 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" style="background: white; color: var(--vmp-text);">
                                What's included in free support?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Free support includes access to our knowledge base, community forum, email support ticket system, and video tutorials. We respond to free support tickets within 48 business hours. You'll also have access to our comprehensive documentation and community-driven solutions.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" style="background: white; color: var(--vmp-text);">
                                How long does it take to get a response?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                For free support, we aim to respond within 48 business hours (Monday-Friday, excluding US Federal Holidays). Premium support customers receive priority responses within 4 hours during business hours and have access to live chat and phone support for immediate assistance.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" style="background: white; color: var(--vmp-text);">
                                Can I upgrade to premium support anytime?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes! You can upgrade to premium support at any time. Premium support provides priority response times (within 4 hours), live chat support during business hours, direct phone support, remote site assistance, and security audit help. Simply visit your account dashboard and select the premium support option.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" style="background: white; color: var(--vmp-text);">
                                What information should I include in my support ticket?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                To help us assist you quickly, please include: your WordPress version, VMP&trade; Security plugin version, a detailed description of the issue, steps to reproduce the problem, any error messages you're seeing, and screenshots if applicable. The more information you provide, the faster we can help resolve your issue.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" style="background: white; color: var(--vmp-text);">
                                Do you offer phone support for free accounts?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Phone support is available exclusively to premium support customers. Free support includes email tickets, community forum access, and our comprehensive knowledge base. If you need immediate assistance via phone, consider upgrading to our premium support plan for just $99/month.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" style="background: white; color: var(--vmp-text);">
                                How can I access the community forum?
                            </button>
                        </h3>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our community forum is accessible to all VMP&trade; Security users. Simply log in with your account credentials and navigate to the "Community" section. You can browse existing discussions, search for solutions, ask questions, and share your experiences with other users and our support team.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 7 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" style="background: white; color: var(--vmp-text);">
                                What if my issue is urgent?
                            </button>
                        </h3>
                        <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                For urgent security issues affecting free users, please mark your ticket as "Security Concerns" and provide detailed information. While we maintain a 48-hour response time for free support, security-related issues are prioritized. For guaranteed fast responses to urgent issues, premium support offers 4-hour response times and immediate phone/chat access.
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
        <div class="row align-items-center">
            <div class="col-lg-8 text-white">
                <h2 class="mb-3">Need Faster Support?</h2>
                <p class="lead mb-0">Upgrade to Premium Support for priority assistance, live chat, and phone support.</p>
            </div>
            <div class="col-lg-4 text-center text-lg-end mt-4 mt-lg-0">
                <a href="#" class="btn btn-lg" style="background: var(--vmp-warning); border-color: var(--vmp-warning); color: #fff;">
                    Upgrade Now
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>