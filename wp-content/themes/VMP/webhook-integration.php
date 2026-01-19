<?php
/*
Template Name: Webhook Integration
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Webhook Integration - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Webhook Integration page of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section -->
<section class="py-5" style="background: linear-gradient(135deg, #007AFF 0%, #191970 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center text-white">
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                        <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
                    </svg>
                </div>
                <h1 class="display-4 fw-bold mb-3">Webhook Integration</h1>
                <p class="lead mb-4">Real-time notifications for your security events - Coming Soon</p>
                <div class="badge px-4 py-2" style="background-color: var(--vmp-warning); font-size: 14px;">
                    🔔 Under Development
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <!-- Introduction -->
                <div class="text-center mb-5">
                    <h2 class="mb-3" style="color: var(--vmp-primary);">Intelligent Webhook Notifications</h2>
                    <p class="text-muted">Stay informed with real-time security alerts and vulnerability updates delivered directly to your applications via webhooks.</p>
                </div>

                <!-- Overview Cards -->
                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-lightning-charge" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                            <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
                                        </svg>
                                    </div>
                                    <h4 class="mb-0" style="color: var(--vmp-primary);">Real-Time Events</h4>
                                </div>
                                <p class="text-muted mb-0">Receive instant notifications when security events occur on your WordPress sites, including intrusion attempts, malware detection, and critical vulnerabilities.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-diagram-3" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                            <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1z"/>
                                        </svg>
                                    </div>
                                    <h4 class="mb-0" style="color: var(--vmp-primary);">Multiple Integrations</h4>
                                </div>
                                <p class="text-muted mb-0">Connect with popular platforms like Slack, Discord, Microsoft Teams, PagerDuty, or your custom applications using standard webhook protocols.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                            <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>
                                        </svg>
                                    </div>
                                    <h4 class="mb-0" style="color: var(--vmp-primary);">Smart Filtering</h4>
                                </div>
                                <p class="text-muted mb-0">Configure custom filters to receive only the notifications that matter to you. Filter by severity level, event type, site, or custom criteria.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16" style="color: var(--vmp-danger);">
                                            <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                                            <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                        </svg>
                                    </div>
                                    <h4 class="mb-0" style="color: var(--vmp-primary);">Secure Delivery</h4>
                                </div>
                                <p class="text-muted mb-0">Webhooks are signed with HMAC-SHA256 signatures to ensure authenticity. Automatic retry logic ensures reliable delivery even during outages.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Webhook Setup Preview -->
                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-body p-4" style="background: var(--vmp-gray);">
                        <h3 class="mb-4" style="color: var(--vmp-primary);">How It Will Work</h3>
                        
                        <!-- Step 1 -->
                        <div class="mb-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center text-white fw-bold" style="width: 40px; height: 40px; background: var(--vmp-warning);">1</div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 style="color: var(--vmp-text);">Configure Your Webhook</h5>
                                    <p class="text-muted mb-3">Set up your webhook endpoint URL and select which events you want to receive.</p>
                                    <div class="bg-white p-3 rounded border" style="border-color: var(--vmp-border)!important;">
                                        <code style="color: var(--vmp-text);">
                                            Webhook URL: https://your-domain.com/webhook/vmp-security<br>
                                            Events: security_threat, malware_detected, login_attempt<br>
                                            Status: Active
                                        </code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="mb-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center text-white fw-bold" style="width: 40px; height: 40px; background: var(--vmp-primary-dark);">2</div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 style="color: var(--vmp-text);">Receive Event Notifications</h5>
                                    <p class="text-muted mb-3">When a security event occurs, we'll send a POST request to your webhook URL with the event data.</p>
                                    <div class="bg-white p-3 rounded border" style="border-color: var(--vmp-border)!important; overflow-x: auto;">
                                        <pre class="mb-0" style="font-size: 13px;"><code>{
  "event_type": "security_threat",
  "timestamp": "2026-01-14T10:30:00Z",
  "site_id": "site_abc123",
  "site_url": "https://example.com",
  "severity": "high",
  "threat_details": {
    "type": "brute_force_attack",
    "ip_address": "192.168.1.100",
    "blocked": true,
    "attempts": 15
  }
}</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div>
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center text-white fw-bold" style="width: 40px; height: 40px; background: var(--vmp-success);">3</div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 style="color: var(--vmp-text);">Verify & Process</h5>
                                    <p class="text-muted mb-3">Verify the webhook signature and process the event in your application.</p>
                                    <div class="bg-white p-3 rounded border" style="border-color: var(--vmp-border)!important; overflow-x: auto;">
                                        <pre class="mb-0" style="font-size: 13px;"><code>// Verify signature (example in PHP)
$signature = $_SERVER['HTTP_X_VMP_SIGNATURE'];
$payload = file_get_contents('php://input');
$expected = hash_hmac('sha256', $payload, $secret);

if (hash_equals($signature, $expected)) {
    $event = json_decode($payload, true);
    // Process your event
    processSecurityEvent($event);
}</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event Types -->
                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-body p-4">
                        <h3 class="mb-4" style="color: var(--vmp-primary);">Available Event Types</h3>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead style="background: var(--vmp-gray);">
                                    <tr>
                                        <th style="color: var(--vmp-text);">Event Type</th>
                                        <th style="color: var(--vmp-text);">Description</th>
                                        <th style="color: var(--vmp-text);">Severity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>security_threat</code></td>
                                        <td>Real-time security threats and attacks detected</td>
                                        <td><span class="badge" style="background: var(--vmp-danger);">High</span></td>
                                    </tr>
                                    <tr>
                                        <td><code>malware_detected</code></td>
                                        <td>Malware or malicious code found on site</td>
                                        <td><span class="badge" style="background: var(--vmp-danger);">Critical</span></td>
                                    </tr>
                                    <tr>
                                        <td><code>vulnerability_found</code></td>
                                        <td>New vulnerability discovered in plugins/themes</td>
                                        <td><span class="badge" style="background: var(--vmp-warning);">Medium</span></td>
                                    </tr>
                                    <tr>
                                        <td><code>failed_login_attempt</code></td>
                                        <td>Multiple failed login attempts detected</td>
                                        <td><span class="badge" style="background: var(--vmp-warning);">Medium</span></td>
                                    </tr>
                                    <tr>
                                        <td><code>plugin_update</code></td>
                                        <td>Security update available for installed plugins</td>
                                        <td><span class="badge" style="background: var(--vmp-primary-dark);">Low</span></td>
                                    </tr>
                                    <tr>
                                        <td><code>scan_completed</code></td>
                                        <td>Scheduled security scan finished</td>
                                        <td><span class="badge" style="background: var(--vmp-success);">Info</span></td>
                                    </tr>
                                    <tr>
                                        <td><code>license_expiring</code></td>
                                        <td>License will expire within 30 days</td>
                                        <td><span class="badge" style="background: var(--vmp-warning);">Medium</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Integration Partners -->
                <div class="mb-5">
                    <h3 class="text-center mb-4" style="color: var(--vmp-primary);">Popular Integration Partners</h3>
                    <div class="row g-4">
                        <div class="col-md-3 col-sm-6">
                            <div class="card border-0 shadow-sm text-center h-100">
                                <div class="card-body p-4">
                                    <div class="mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-slack" viewBox="0 0 16 16" style="color: var(--vmp-primary);">
                                            <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
                                        </svg>
                                    </div>
                                    <h5 style="color: var(--vmp-text);">Slack</h5>
                                    <p class="text-muted small mb-0">Team messaging</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="card border-0 shadow-sm text-center h-100">
                                <div class="card-body p-4">
                                    <div class="mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16" style="color: var(--vmp-primary);">
                                            <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612z"/>
                                        </svg>
                                    </div>
                                    <h5 style="color: var(--vmp-text);">Discord</h5>
                                    <p class="text-muted small mb-0">Community chat</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="card border-0 shadow-sm text-center h-100">
                                <div class="card-body p-4">
                                    <div class="mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-microsoft-teams" viewBox="0 0 16 16" style="color: var(--vmp-primary);">
                                            <path d="M9.186 4.797a2.42 2.42 0 1 0-2.86-2.448h1.178c.929 0 1.682.753 1.682 1.682v.766Zm-4.295 7.738h2.613c.929 0 1.682-.753 1.682-1.682V5.58h2.783a.7.7 0 0 1 .682.716v4.294a4.197 4.197 0 0 1-4.093 4.293c-1.618-.04-3-.99-3.667-2.35Zm10.737-9.372a1.674 1.674 0 1 1-3.349 0 1.674 1.674 0 0 1 3.349 0Zm-2.238 9.488-.12-.002a5.19 5.19 0 0 0 .381-2.07V6.306a1.692 1.692 0 0 0-.15-.725h1.792c.39 0 .707.317.707.707v3.765a2.598 2.598 0 0 1-2.598 2.598h-.013Z"/>
                                            <path d="M.682 3.349h6.822c.377 0 .682.305.682.682v6.822a.682.682 0 0 1-.682.682H.682A.682.682 0 0 1 0 10.853V4.03c0-.377.305-.682.682-.682Zm5.206 2.596v-.72h-3.59v.72h1.357V9.66h.87V5.945h1.363Z"/>
                                        </svg>
                                    </div>
                                    <h5 style="color: var(--vmp-text);">MS Teams</h5>
                                    <p class="text-muted small mb-0">Enterprise chat</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="card border-0 shadow-sm text-center h-100">
                                <div class="card-body p-4">
                                    <div class="mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16" style="color: var(--vmp-primary);">
                                            <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                                            <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                                        </svg>
                                    </div>
                                    <h5 style="color: var(--vmp-text);">Email</h5>
                                    <p class="text-muted small mb-0">Email alerts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, var(--vmp-primary) 0%, var(--vmp-dark) 100%);">
                    <div class="card-body p-5 text-center text-white">
                        <h3 class="mb-3">Be Among the First to Know</h3>
                        <p class="mb-4">Sign up to get notified when webhook integrations go live and gain early access to beta testing.</p>
                        <form class="row g-3 justify-content-center">
                            <div class="col-md-6">
                                <input type="email" class="form-control form-control-lg" placeholder="Enter your email address" required>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-lg w-100" style="background: var(--vmp-warning); border-color: var(--vmp-warning); color: #fff;">Join Waitlist</button>
                            </div>
                        </form>
                        <p class="mt-3 mb-0 small">
                            <small>📅 Expected Launch: Q2 2026 | Beta Access: Q1 2026</small>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Technical Details Section -->
<section class="py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="text-center mb-5" style="color: var(--vmp-primary);">Technical Specifications</h2>
                
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4 text-center">
                                <h4 style="color: var(--vmp-warning);">HMAC-SHA256</h4>
                                <p class="text-muted mb-0">Signature Verification</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4 text-center">
                                <h4 style="color: var(--vmp-success);">JSON</h4>
                                <p class="text-muted mb-0">Data Format</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4 text-center">
                                <h4 style="color: var(--vmp-primary-dark);">HTTPS</h4>
                                <p class="text-muted mb-0">Secure Transport</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4 text-center">
                                <h4 style="color: var(--vmp-warning);">3 Retries</h4>
                                <p class="text-muted mb-0">Automatic Retry Logic</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4 text-center">
                                <h4 style="color: var(--vmp-success);">5 Second</h4>
                                <p class="text-muted mb-0">Timeout Duration</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4 text-center">
                                <h4 style="color: var(--vmp-primary-dark);">Real-time</h4>
                                <p class="text-muted mb-0">Event Delivery</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ -->
                <div class="mt-5">
                    <h3 class="mb-4" style="color: var(--vmp-primary);">Frequently Asked Questions</h3>
                    <div class="accordion" id="webhookAccordion">
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#webhook1" style="background: #fff; color: var(--vmp-primary);">
                                    How many webhooks can I configure?
                                </button>
                            </h2>
                            <div id="webhook1" class="accordion-collapse collapse show" data-bs-parent="#webhookAccordion">
                                <div class="accordion-body">
                                    You'll be able to configure multiple webhook endpoints based on your subscription plan. Free tier will support 2 webhooks, Pro plan will support 10, and Enterprise plan will have unlimited webhooks.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#webhook2" style="background: #fff; color: var(--vmp-primary);">
                                    What happens if my endpoint is down?
                                </button>
                            </h2>
                            <div id="webhook2" class="accordion-collapse collapse" data-bs-parent="#webhookAccordion">
                                <div class="accordion-body">
                                    We'll automatically retry failed webhook deliveries up to 3 times with exponential backoff. You'll also receive notifications if a webhook endpoint becomes consistently unreachable.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#webhook3" style="background: #fff; color: var(--vmp-primary);">
                                    Can I test webhooks before going live?
                                </button>
                            </h2>
                            <div id="webhook3" class="accordion-collapse collapse" data-bs-parent="#webhookAccordion">
                                <div class="accordion-body">
                                    Yes! We'll provide a testing mode where you can trigger sample events and verify your webhook integration is working correctly before enabling live events.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#webhook4" style="background: #fff; color: var(--vmp-primary);">
                                    Are there rate limits?
                                </button>
                            </h2>
                            <div id="webhook4" class="accordion-collapse collapse" data-bs-parent="#webhookAccordion">
                                <div class="accordion-body">
                                    Webhook deliveries will have generous rate limits to ensure reliable delivery. Enterprise customers can request custom rate limits based on their specific needs.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>