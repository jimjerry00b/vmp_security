<?php
/*
Template Name: WP Security Mailing List
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>WP Security Mailing List - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="WP Security Mailing List for VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section with Wave -->
<section class="position-relative overflow-hidden" style="background: linear-gradient(135deg, #2980b9 0%, #3498db 100%); padding: 100px 0 140px 0;">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center text-white">
                <h1 class="display-4 fw-bold mb-0">Get WordPress Security Alerts and Product Updates</h1>
            </div>
        </div>
    </div>
    
    <!-- Curved Wave Bottom -->
    <div style="position: absolute; bottom: 0; left: 0; width: 100%; overflow: hidden; line-height: 0; z-index: 1;">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: block; width: calc(100% + 1.3px); height: 100px;">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="#ffffff"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="#ffffff"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="#ffffff"></path>
        </svg>
    </div>
</section>

<!-- Main Content Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Coming Soon Badge -->
                <div class="text-center mb-4">
                    <span class="badge px-4 py-2" style="background: var(--vmp-warning); font-size: 16px;">
                        Mailing List Coming Soon
                    </span>
                </div>

                <!-- Description Text -->
                <div class="mb-5">
                    <p class="text-muted" style="font-size: 15px; line-height: 1.8;">
                        Join our upcoming WordPress security mailing list to get security alerts, news, and research in your inbox before it appears in the press.
                    </p>
                    
                    <p class="text-muted" style="font-size: 15px; line-height: 1.8;">
                        The VMP&trade; Security team's research regularly appears in publications across major security industry publications. We publish breaking security news and research, and we will immediately email our subscribers to alert them.
                    </p>
                    
                    <p class="text-muted" style="font-size: 15px; line-height: 1.8;">
                        If you'd like to get alerted first to important WordPress security breaking news, research, emerging threats, and events, use the form below to sign up for the WordPress Security Mailing list.
                    </p>
                </div>

                <!-- Signup Form -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <form>
                            <div class="mb-4">
                                <input 
                                    type="email" 
                                    class="form-control form-control-lg" 
                                    placeholder="you@example.com" 
                                    disabled
                                    style="background: var(--vmp-gray); border-color: var(--vmp-border); cursor: not-allowed;"
                                >
                            </div>
                            
                            <div class="mb-4">
                                <div class="form-check">
                                    <input 
                                        class="form-check-input" 
                                        type="checkbox" 
                                        id="termsCheck" 
                                        disabled
                                        style="cursor: not-allowed;"
                                    >
                                    <label class="form-check-label text-muted" for="termsCheck" style="font-size: 14px;">
                                        By checking this box I agree to the <a href="#" style="color: var(--vmp-primary);">terms of service</a> and <a href="#" style="color: var(--vmp-primary);">privacy policy</a>.*
                                    </label>
                                </div>
                            </div>
                            
                            <div class="text-center">
                                <button 
                                    type="button" 
                                    class="btn btn-lg px-5" 
                                    disabled
                                    style="background: var(--vmp-gray); border-color: var(--vmp-border); color: var(--vmp-text-light); cursor: not-allowed;"
                                >
                                    SIGN UP (Coming Soon)
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Additional Info -->
                <div class="text-center mt-4">
                    <p class="text-muted small">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle me-2" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                        The mailing list service is currently under development and will be available in Q2 2026.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="text-center mb-5">
                    <h2 class="mb-3" style="color: var(--vmp-primary);">What You'll Receive</h2>
                    <p class="text-muted">Stay ahead of emerging threats with timely security information</p>
                </div>

                <div class="row g-4">
                    <!-- Security Alerts -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100 text-center">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-shield-exclamation" viewBox="0 0 16 16" style="color: var(--vmp-danger);">
                                        <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                                    </svg>
                                </div>
                                <h6 class="mb-2" style="color: var(--vmp-text);">Security Alerts</h6>
                                <p class="small text-muted mb-0">Immediate notifications about critical vulnerabilities</p>
                            </div>
                        </div>
                    </div>

                    <!-- Research Updates -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100 text-center">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16" style="color: var(--vmp-primary);">
                                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                    </svg>
                                </div>
                                <h6 class="mb-2" style="color: var(--vmp-text);">Research Updates</h6>
                                <p class="small text-muted mb-0">Latest security research and threat analysis</p>
                            </div>
                        </div>
                    </div>

                    <!-- Product News -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100 text-center">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                        <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-11zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25.222 25.222 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56V3.224zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009a68.14 68.14 0 0 1 .496.008 64 64 0 0 1 1.51.048zm1.39 1.081c.285.021.569.047.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a65.81 65.81 0 0 1 1.692.064c.327.017.65.037.966.06z"/>
                                    </svg>
                                </div>
                                <h6 class="mb-2" style="color: var(--vmp-text);">Product News</h6>
                                <p class="small text-muted mb-0">Updates about new features and improvements</p>
                            </div>
                        </div>
                    </div>

                    <!-- Breaking News -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100 text-center">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                        <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                                        <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                                    </svg>
                                </div>
                                <h6 class="mb-2" style="color: var(--vmp-text);">Breaking News</h6>
                                <p class="small text-muted mb-0">Emerging threats and industry developments</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>