<?php
/*
Template Name: API Access
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>API Access - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="API Access page of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section -->
<section class="py-5" style="background: linear-gradient(135deg, var(--vmp-primary) 0%, var(--vmp-dark) 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center text-white">
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-code-square" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z"/>
                    </svg>
                </div>
                <h1 class="display-4 fw-bold mb-3">API Access & Documentation</h1>
                <p class="lead mb-4">Powerful API integrations for your security needs - Coming Soon</p>
                <div class="badge px-4 py-2" style="background-color: var(--vmp-warning); font-size: 14px;">
                    🚀 Currently in Development
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Coming Soon Content -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <!-- Introduction -->
                <div class="text-center mb-5">
                    <h2 class="mb-3" style="color: var(--vmp-primary);">What's Coming</h2>
                    <p class="text-muted">We're building a comprehensive API platform to help you integrate VMP&trade; Security features into your applications and workflows.</p>
                </div>

                <!-- Feature Cards -->
                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                        <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                                        <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z"/>
                                    </svg>
                                </div>
                                <h4 style="color: var(--vmp-primary);">Security API</h4>
                                <p class="text-muted mb-3">Access real-time threat intelligence, vulnerability data, and security monitoring endpoints.</p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><small>✓ Threat Detection API</small></li>
                                    <li class="mb-2"><small>✓ Vulnerability Scanner</small></li>
                                    <li class="mb-2"><small>✓ Security Audit Logs</small></li>
                                    <li class="mb-2"><small>✓ Real-time Alerts</small></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                        <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                                        <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                    </svg>
                                </div>
                                <h4 style="color: var(--vmp-primary);">License Management API</h4>
                                <p class="text-muted mb-3">Programmatically manage licenses, activations, and user permissions for your applications.</p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><small>✓ License Creation & Validation</small></li>
                                    <li class="mb-2"><small>✓ Activation Management</small></li>
                                    <li class="mb-2"><small>✓ Usage Analytics</small></li>
                                    <li class="mb-2"><small>✓ Automated Provisioning</small></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"/>
                                    </svg>
                                </div>
                                <h4 style="color: var(--vmp-primary);">Analytics & Reporting API</h4>
                                <p class="text-muted mb-3">Retrieve detailed analytics, usage statistics, and generate custom reports for your dashboard.</p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><small>✓ Usage Metrics</small></li>
                                    <li class="mb-2"><small>✓ Custom Reports</small></li>
                                    <li class="mb-2"><small>✓ Data Export</small></li>
                                    <li class="mb-2"><small>✓ Trend Analysis</small></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16" style="color: var(--vmp-danger);">
                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                    </svg>
                                </div>
                                <h4 style="color: var(--vmp-primary);">Webhook Notifications</h4>
                                <p class="text-muted mb-3">Set up automated notifications for security events, license changes, and system updates.</p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><small>✓ Real-time Events</small></li>
                                    <li class="mb-2"><small>✓ Custom Webhooks</small></li>
                                    <li class="mb-2"><small>✓ Event Filtering</small></li>
                                    <li class="mb-2"><small>✓ Retry Logic</small></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- API Preview Section -->
                <div class="card border-0 shadow-sm mb-5" style="background: var(--vmp-gray);">
                    <div class="card-body p-4">
                        <h3 class="mb-4" style="color: var(--vmp-primary);">API Preview</h3>
                        <p class="text-muted mb-4">Here's a preview of how our API endpoints will work:</p>
                        
                        <div class="bg-white p-4 rounded" style="border-left: 4px solid var(--vmp-warning);">
                            <h5 class="mb-3" style="color: var(--vmp-text);">Authentication</h5>
                            <pre class="mb-0" style="background: var(--vmp-dark); color: #fff; padding: 15px; border-radius: 4px; overflow-x: auto;"><code>POST /api/v1/auth/token
Content-Type: application/json

{
  "api_key": "your_api_key",
  "api_secret": "your_api_secret"
}

Response:
{
  "access_token": "eyJhbGciOiJIUzI1NiIs...",
  "token_type": "Bearer",
  "expires_in": 3600
}</code></pre>
                        </div>

                        <div class="bg-white p-4 rounded mt-3" style="border-left: 4px solid var(--vmp-success);">
                            <h5 class="mb-3" style="color: var(--vmp-text);">Get License Information</h5>
                            <pre class="mb-0" style="background: var(--vmp-dark); color: #fff; padding: 15px; border-radius: 4px; overflow-x: auto;"><code>GET /api/v1/licenses/{license_key}
Authorization: Bearer {access_token}

Response:
{
  "license_key": "VMP-XXXX-XXXX-XXXX",
  "status": "active",
  "product": "VMP&trade; Security Pro",
  "activations": 3,
  "max_activations": 5,
  "expires_at": "2026-12-31"
}</code></pre>
                        </div>

                        <div class="bg-white p-4 rounded mt-3" style="border-left: 4px solid var(--vmp-primary-dark);">
                            <h5 class="mb-3" style="color: var(--vmp-text);">Security Scan</h5>
                            <pre class="mb-0" style="background: var(--vmp-dark); color: #fff; padding: 15px; border-radius: 4px; overflow-x: auto;"><code>POST /api/v1/security/scan
Authorization: Bearer {access_token}
Content-Type: application/json

{
  "target": "https://example.com",
  "scan_type": "full"
}

Response:
{
  "scan_id": "scan_abc123",
  "status": "in_progress",
  "estimated_completion": "2026-01-14T15:30:00Z"
}</code></pre>
                        </div>
                    </div>
                </div>

                <!-- Timeline -->
                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-body p-4">
                        <h3 class="mb-4 text-center" style="color: var(--vmp-primary);">Development Timeline</h3>
                        <div class="row">
                            <div class="col-md-3 text-center mb-4">
                                <div class="mb-3">
                                    <div class="rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: var(--vmp-warning);">
                                        <span class="text-white fw-bold">Q1</span>
                                    </div>
                                </div>
                                <h5 style="color: var(--vmp-text);">2026</h5>
                                <p class="text-muted small">API Design & Architecture</p>
                            </div>
                            <div class="col-md-3 text-center mb-4">
                                <div class="mb-3">
                                    <div class="rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: var(--vmp-primary-dark);">
                                        <span class="text-white fw-bold">Q2</span>
                                    </div>
                                </div>
                                <h5 style="color: var(--vmp-text);">2026</h5>
                                <p class="text-muted small">Beta Testing with Partners</p>
                            </div>
                            <div class="col-md-3 text-center mb-4">
                                <div class="mb-3">
                                    <div class="rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: var(--vmp-success);">
                                        <span class="text-white fw-bold">Q3</span>
                                    </div>
                                </div>
                                <h5 style="color: var(--vmp-text);">2026</h5>
                                <p class="text-muted small">Public API Launch</p>
                            </div>
                            <div class="col-md-3 text-center mb-4">
                                <div class="mb-3">
                                    <div class="rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: var(--vmp-primary);">
                                        <span class="text-white fw-bold">Q4</span>
                                    </div>
                                </div>
                                <h5 style="color: var(--vmp-text);">2026</h5>
                                <p class="text-muted small">Advanced Features & SDKs</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Newsletter Signup -->
                <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, var(--vmp-primary) 0%, var(--vmp-dark) 100%);">
                    <div class="card-body p-5 text-center text-white">
                        <h3 class="mb-3">Stay Updated</h3>
                        <p class="mb-4">Get notified when our API launches and receive early access to documentation</p>
                        <form class="row g-3 justify-content-center">
                            <div class="col-md-6">
                                <input type="email" class="form-control form-control-lg" placeholder="Enter your email address" required>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-lg w-100" style="background: var(--vmp-warning); border-color: var(--vmp-warning); color: #fff;">Notify Me</button>
                            </div>
                        </form>
                        <p class="mt-3 mb-0 small">
                            <small>We'll only send you important updates about the API launch. No spam, ever.</small>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="text-center mb-5" style="color: var(--vmp-primary);">Frequently Asked Questions</h2>
                <div class="accordion" id="apiAccordion">
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" style="background: #fff; color: var(--vmp-primary);">
                                When will the API be available?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#apiAccordion">
                            <div class="accordion-body">
                                We're planning to launch the beta version in Q2 2026, with public access following in Q3 2026. Early access will be available to select partners.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" style="background: #fff; color: var(--vmp-primary);">
                                Will there be a free tier?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#apiAccordion">
                            <div class="accordion-body">
                                Yes! We're planning to offer a generous free tier for developers to test and build with our API. Pricing details will be announced closer to launch.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" style="background: #fff; color: var(--vmp-primary);">
                                What programming languages will be supported?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#apiAccordion">
                            <div class="accordion-body">
                                Our API will be RESTful and work with any language that can make HTTP requests. We're also developing official SDKs for PHP, Python, JavaScript (Node.js), and more.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" style="background: #fff; color: var(--vmp-primary);">
                                How can I get early access?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#apiAccordion">
                            <div class="accordion-body">
                                Sign up for our newsletter above to be notified about early access opportunities. We'll be selecting beta testers from our existing user base and newsletter subscribers.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" style="background: #fff; color: var(--vmp-primary);">
                                Will documentation be provided?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#apiAccordion">
                            <div class="accordion-body">
                                Absolutely! We're creating comprehensive documentation with code examples, tutorials, and interactive API explorers to make integration as smooth as possible.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>