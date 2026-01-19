<?php
/*
Template Name: Blog Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Blog - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Blog for VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section with Wave -->
<section class="position-relative overflow-hidden" style="background: linear-gradient(135deg, #2980b9 0%, #3498db 100%); padding: 80px 0 120px 0;">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center text-white">
                <h1 class="display-4 fw-bold mb-3">WordPress Security Research and News</h1>
                <div class="d-inline-block px-4 py-2 rounded" style="background: rgba(255,255,255,0.2);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-rss me-2" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M5.5 12a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-3-8.5a1 1 0 0 1 1-1c5.523 0 10 4.477 10 10a1 1 0 1 1-2 0 8 8 0 0 0-8-8 1 1 0 0 1-1-1zm0 4a1 1 0 0 1 1-1 6 6 0 0 1 6 6 1 1 0 1 1-2 0 4 4 0 0 0-4-4 1 1 0 0 1-1-1z"/>
                    </svg>
                    RSS Feed
                </div>
            </div>
        </div>
    </div>
    
    <!-- Curved Wave Bottom -->
    <div style="position: absolute; bottom: 0; left: 0; width: 100%; overflow: hidden; line-height: 0; z-index: 1;">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: block; width: calc(100% + 1.3px); height: 80px;">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="#ffffff"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="#ffffff"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="#ffffff"></path>
        </svg>
    </div>
</section>

<!-- Coming Soon Notice -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="alert border-0 shadow-sm text-center p-4" style="background: linear-gradient(135deg, var(--vmp-warning) 0%, var(--vmp-warning-dark) 100%); color: white;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-newspaper mb-3" viewBox="0 0 16 16">
                        <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                        <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                    </svg>
                    <h3 class="mb-3">Research & News Blog Coming Soon</h3>
                    <p class="mb-0 lead">We're building a comprehensive resource for WordPress security research, vulnerability reports, and industry news. Check back soon for expert insights and the latest security updates.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Posts Grid -->
<section class="py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="row g-4">
            <!-- Featured Post 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100" style="transition: transform 0.3s ease;">
                    <div class="position-relative">
                        <div style="background: linear-gradient(135deg, var(--vmp-primary) 0%, var(--vmp-primary-dark) 100%); height: 200px; display: flex; align-items: center; justify-content: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                            </svg>
                        </div>
                        <span class="badge position-absolute top-0 end-0 m-3" style="background: var(--vmp-warning);">Coming Soon</span>
                        <span class="badge position-absolute top-0 start-0 m-3" style="background: var(--vmp-success);">REPORT</span>
                    </div>
                    <div class="card-body">
                        <p class="text-muted small mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar me-1" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            Q2 2026
                        </p>
                        <h5 class="mb-3">
                            <a href="#" style="color: var(--vmp-text); text-decoration: none;">VMP Intelligence Weekly WordPress Vulnerability Report (Q2 2026)</a>
                        </h5>
                        <p class="text-muted small mb-3">
                            Our team will analyze and report on newly discovered vulnerabilities in WordPress plugins and themes, providing actionable insights for site administrators.
                        </p>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge" style="background: var(--vmp-primary); font-size: 11px;">Research</span>
                            <span class="badge" style="background: var(--vmp-text-light); font-size: 11px;">VMP&trade; Security</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Post 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100" style="transition: transform 0.3s ease;">
                    <div class="position-relative">
                        <div style="background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%); height: 200px; display: flex; align-items: center; justify-content: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white" class="bi bi-shield-exclamation" viewBox="0 0 16 16">
                                <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                            </svg>
                        </div>
                        <span class="badge position-absolute top-0 end-0 m-3" style="background: var(--vmp-warning);">Coming Soon</span>
                    </div>
                    <div class="card-body">
                        <p class="text-muted small mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar me-1" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            Q3 2026
                        </p>
                        <h5 class="mb-3">
                            <a href="#" style="color: var(--vmp-text); text-decoration: none;">Critical Vulnerability Discovered in Popular WordPress Plugin</a>
                        </h5>
                        <p class="text-muted small mb-3">
                            Analysis of zero-day vulnerabilities affecting WordPress sites, including detailed technical breakdowns and remediation strategies.
                        </p>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge" style="background: var(--vmp-danger); font-size: 11px;">General Security</span>
                            <span class="badge" style="background: var(--vmp-text-light); font-size: 11px;">Hacking</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Post 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100" style="transition: transform 0.3s ease;">
                    <div class="position-relative">
                        <div style="background: linear-gradient(135deg, #27ae60 0%, #229954 100%); height: 200px; display: flex; align-items: center; justify-content: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                            </svg>
                        </div>
                        <span class="badge position-absolute top-0 end-0 m-3" style="background: var(--vmp-warning);">Coming Soon</span>
                    </div>
                    <div class="card-body">
                        <p class="text-muted small mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar me-1" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            Monthly - Starting Q2 2026
                        </p>
                        <h5 class="mb-3">
                            <a href="#" style="color: var(--vmp-text); text-decoration: none;">Monthly Attack Activity Report - Trends and Statistics</a>
                        </h5>
                        <p class="text-muted small mb-3">
                            Monthly comprehensive analysis of attack patterns, emerging threats, and security trends across WordPress installations worldwide.
                        </p>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge" style="background: var(--vmp-success); font-size: 11px;">Monthly Attack Activity Report</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Post 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100" style="transition: transform 0.3s ease;">
                    <div class="position-relative">
                        <div style="background: linear-gradient(135deg, #9b59b6 0%, #8e44ad 100%); height: 200px; display: flex; align-items: center; justify-content: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white" class="bi bi-mic" viewBox="0 0 16 16">
                                <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                                <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                            </svg>
                        </div>
                        <span class="badge position-absolute top-0 end-0 m-3" style="background: var(--vmp-warning);">Coming Soon</span>
                    </div>
                    <div class="card-body">
                        <p class="text-muted small mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar me-1" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            Q3 2026
                        </p>
                        <h5 class="mb-3">
                            <a href="#" style="color: var(--vmp-text); text-decoration: none;">WordPress Security Podcast - Expert Interviews and Insights</a>
                        </h5>
                        <p class="text-muted small mb-3">
                            Join us for in-depth conversations with security researchers, plugin developers, and WordPress experts discussing the latest threats and best practices.
                        </p>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge" style="background: #9b59b6; font-size: 11px;">Podcasts</span>
                            <span class="badge" style="background: var(--vmp-text-light); font-size: 11px;">Learning</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Post 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100" style="transition: transform 0.3s ease;">
                    <div class="position-relative">
                        <div style="background: linear-gradient(135deg, #e67e22 0%, #d35400 100%); height: 200px; display: flex; align-items: center; justify-content: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white" class="bi bi-code-slash" viewBox="0 0 16 16">
                                <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
                            </svg>
                        </div>
                        <span class="badge position-absolute top-0 end-0 m-3" style="background: var(--vmp-warning);">Coming Soon</span>
                    </div>
                    <div class="card-body">
                        <p class="text-muted small mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar me-1" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            Q2 2026
                        </p>
                        <h5 class="mb-3">
                            <a href="#" style="color: var(--vmp-text); text-decoration: none;">Secure Coding Practices for WordPress Plugin Developers</a>
                        </h5>
                        <p class="text-muted small mb-3">
                            Essential coding standards and security practices to prevent vulnerabilities in your WordPress plugins and themes.
                        </p>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge" style="background: #e67e22; font-size: 11px;">Candle Code</span>
                            <span class="badge" style="background: var(--vmp-text-light); font-size: 11px;">Learning</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Post 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100" style="transition: transform 0.3s ease;">
                    <div class="position-relative">
                        <div style="background: linear-gradient(135deg, #34495e 0%, #2c3e50 100%); height: 200px; display: flex; align-items: center; justify-content: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </div>
                        <span class="badge position-absolute top-0 end-0 m-3" style="background: var(--vmp-warning);">Coming Soon</span>
                    </div>
                    <div class="card-body">
                        <p class="text-muted small mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar me-1" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            Q3 2026
                        </p>
                        <h5 class="mb-3">
                            <a href="#" style="color: var(--vmp-text); text-decoration: none;">WordPress SEO and Security - Finding the Right Balance</a>
                        </h5>
                        <p class="text-muted small mb-3">
                            How to optimize your WordPress site for search engines while maintaining strong security measures and protecting your content.
                        </p>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge" style="background: #34495e; font-size: 11px;">SEO</span>
                            <span class="badge" style="background: var(--vmp-text-light); font-size: 11px;">General Security</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Post 7 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100" style="transition: transform 0.3s ease;">
                    <div class="position-relative">
                        <div style="background: linear-gradient(135deg, var(--vmp-primary-dark) 0%, var(--vmp-primary) 100%); height: 200px; display: flex; align-items: center; justify-content: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white" class="bi bi-laptop" viewBox="0 0 16 16">
                                <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                            </svg>
                        </div>
                        <span class="badge position-absolute top-0 end-0 m-3" style="background: var(--vmp-warning);">Coming Soon</span>
                    </div>
                    <div class="card-body">
                        <p class="text-muted small mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar me-1" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            Q2 2026
                        </p>
                        <h5 class="mb-3">
                            <a href="#" style="color: var(--vmp-text); text-decoration: none;">Understanding the WordPress Security Architecture</a>
                        </h5>
                        <p class="text-muted small mb-3">
                            Deep dive into WordPress core security features, authentication mechanisms, and how to leverage built-in protections for your site.
                        </p>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge" style="background: var(--vmp-primary); font-size: 11px;">VMP&trade; Security</span>
                            <span class="badge" style="background: var(--vmp-text-light); font-size: 11px;">Research</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Post 8 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100" style="transition: transform 0.3s ease;">
                    <div class="position-relative">
                        <div style="background: linear-gradient(135deg, #16a085 0%, #1abc9c 100%); height: 200px; display: flex; align-items: center; justify-content: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white" class="bi bi-diagram-3" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1zM0 11.5A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                            </svg>
                        </div>
                        <span class="badge position-absolute top-0 end-0 m-3" style="background: var(--vmp-warning);">Coming Soon</span>
                    </div>
                    <div class="card-body">
                        <p class="text-muted small mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar me-1" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            Q3 2026
                        </p>
                        <h5 class="mb-3">
                            <a href="#" style="color: var(--vmp-text); text-decoration: none;">Building a WordPress Plugin Privacy Assessment (PPA)</a>
                        </h5>
                        <p class="text-muted small mb-3">
                            Guidelines for conducting privacy assessments of WordPress plugins, ensuring GDPR compliance, and protecting user data.
                        </p>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge" style="background: #16a085; font-size: 11px;">PPA</span>
                            <span class="badge" style="background: var(--vmp-text-light); font-size: 11px;">General Security</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Post 9 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100" style="transition: transform 0.3s ease;">
                    <div class="position-relative">
                        <div style="background: linear-gradient(135deg, #c0392b 0%, #e74c3c 100%); height: 200px; display: flex; align-items: center; justify-content: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white" class="bi bi-bug-fill" viewBox="0 0 16 16">
                                <path d="M4.978.855a.5.5 0 1 0-.956.29l.41 1.352A4.985 4.985 0 0 0 3 6h10a4.985 4.985 0 0 0-1.432-3.503l.41-1.352a.5.5 0 1 0-.956-.29l-.291.956A4.978 4.978 0 0 0 8 1a4.979 4.979 0 0 0-2.731.811l-.29-.956z"/>
                                <path d="M13 6v1H8.5v8.975A5 5 0 0 0 13 11h.5a.5.5 0 0 1 .5.5v.5a.5.5 0 1 0 1 0v-.5a1.5 1.5 0 0 0-1.5-1.5H13V9h1.5a.5.5 0 0 0 0-1H13V7h.5A1.5 1.5 0 0 0 15 5.5V5a.5.5 0 0 0-1 0v.5a.5.5 0 0 1-.5.5H13zm-5.5 9.975V7H3V6h-.5a.5.5 0 0 1-.5-.5V5a.5.5 0 0 0-1 0v.5A1.5 1.5 0 0 0 2.5 7H3v1H1.5a.5.5 0 0 0 0 1H3v1h-.5A1.5 1.5 0 0 0 1 11.5v.5a.5.5 0 1 0 1 0v-.5a.5.5 0 0 1 .5-.5H3a5 5 0 0 0 4.5 4.975z"/>
                            </svg>
                        </div>
                        <span class="badge position-absolute top-0 end-0 m-3" style="background: var(--vmp-warning);">Coming Soon</span>
                    </div>
                    <div class="card-body">
                        <p class="text-muted small mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar me-1" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            Q2 2026
                        </p>
                        <h5 class="mb-3">
                            <a href="#" style="color: var(--vmp-text); text-decoration: none;">Common Attack Vectors in WordPress and How to Defend</a>
                        </h5>
                        <p class="text-muted small mb-3">
                            Comprehensive overview of the most common attack methods targeting WordPress sites and proven defense strategies to protect your installation.
                        </p>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge" style="background: var(--vmp-danger); font-size: 11px;">Hacking</span>
                            <span class="badge" style="background: var(--vmp-text-light); font-size: 11px;">VMP&trade; Security</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Category Tags Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-4">
            <h3 style="color: var(--vmp-primary);">Browse by Category</h3>
            <p class="text-muted">Filter research and articles by topic</p>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-2">
            <a href="#" class="btn btn-outline-secondary">All</a>
            <a href="#" class="btn btn-outline-secondary">VMP&trade; Security</a>
            <a href="#" class="btn btn-outline-secondary">Candle Code</a>
            <a href="#" class="btn btn-outline-secondary">General Security</a>
            <a href="#" class="btn btn-outline-secondary">Hacking</a>
            <a href="#" class="btn btn-outline-secondary">Learning</a>
            <a href="#" class="btn btn-outline-secondary">Monthly Attack Activity Report</a>
            <a href="#" class="btn btn-outline-secondary">Podcasts</a>
            <a href="#" class="btn btn-outline-secondary">PPA</a>
            <a href="#" class="btn btn-outline-secondary">Research</a>
            <a href="#" class="btn btn-outline-secondary">SEO</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>