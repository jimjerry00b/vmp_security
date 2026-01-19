<?php
/*
Template Name: Employment Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Employment - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Employment opportunities at VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section with Wave -->
<section class="position-relative overflow-hidden" style="background: linear-gradient(135deg, #2980b9 0%, #3498db 100%); padding: 100px 0 140px 0;">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center text-white">
                <h1 class="display-4 fw-bold mb-3">Employment</h1>
                <p class="lead mb-0" style="font-size: 18px;">Join Our Mission to Secure WordPress</p>
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

<!-- Introduction Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">                
                
                <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.8;">
                    <strong>VMP&trade; Security</strong> is building an exceptional team dedicated to WordPress security. We're looking for talented individuals who are passionate about protecting websites and making the internet a safer place. If you're interested in joining our mission, we'd love to hear from you.
                </p>
                
                <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.8;">
                    We believe in creating a workplace where innovation thrives, where team members are empowered to do their best work, and where everyone contributes to our shared mission of securing WordPress websites worldwide.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- What We Look For Section -->
<section class="py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="text-center mb-5" style="color: var(--vmp-primary);">What We Look For</h2>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </div>
                                <h5 class="mb-3" style="color: var(--vmp-text);">Excellence in Your Craft</h5>
                                <p class="text-muted mb-0" style="font-size: 14px;">Whether you're a security expert, developer, or support specialist, we value excellence and a commitment to continuous learning and improvement.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-chat-heart-fill" viewBox="0 0 16 16" style="color: var(--vmp-danger);">
                                        <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
                                        <path d="M8 5.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                                    </svg>
                                </div>
                                <h5 class="mb-3" style="color: var(--vmp-text);">Passion for Security</h5>
                                <p class="text-muted mb-0" style="font-size: 14px;">A genuine interest in cybersecurity, WordPress, and protecting users from threats. This is critical for remote workers and we can't stress it enough.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                    </svg>
                                </div>
                                <h5 class="mb-3" style="color: var(--vmp-text);">Strong Communication Skills</h5>
                                <p class="text-muted mb-0" style="font-size: 14px;">Effective communication skills are critical for remote workers. You will spend a significant amount of time interacting with our customers and/or other team members.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-puzzle-fill" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                        <path d="M3.112 3.645A1.5 1.5 0 0 1 4.605 2H7a.5.5 0 0 1 .5.5v.382c0 .696-.497 1.182-.872 1.469a.459.459 0 0 0-.115.118.113.113 0 0 0-.012.025L6.5 4.5v.003l.003.01c.004.01.014.028.036.053a.86.86 0 0 0 .27.194C7.09 4.9 7.51 5 8 5c.492 0 .912-.1 1.19-.24a.86.86 0 0 0 .271-.194.213.213 0 0 0 .036-.054l.003-.01v-.008a.112.112 0 0 0-.012-.025.459.459 0 0 0-.115-.118c-.375-.287-.872-.773-.872-1.469V2.5A.5.5 0 0 1 9 2h2.395a1.5 1.5 0 0 1 1.493 1.645L12.645 6.5h.237c.195 0 .42-.147.675-.48.21-.274.528-.52.943-.52.568 0 .947.447 1.154.862C15.877 6.807 16 7.387 16 8s-.123 1.193-.346 1.638c-.207.415-.586.862-1.154.862-.415 0-.733-.246-.943-.52-.255-.333-.48-.48-.675-.48h-.237l.243 2.855A1.5 1.5 0 0 1 11.395 14H9a.5.5 0 0 1-.5-.5v-.382c0-.696.497-1.182.872-1.469a.459.459 0 0 0 .115-.118.113.113 0 0 0 .012-.025L9.5 11.5v-.003l-.003-.01a.214.214 0 0 0-.036-.053.859.859 0 0 0-.27-.194C8.91 11.1 8.49 11 8 11c-.491 0-.912.1-1.19.24a.859.859 0 0 0-.271.194.214.214 0 0 0-.036.054l-.003.01v.002l.001.006a.113.113 0 0 0 .012.025c.016.027.05.068.115.118.375.287.872.773.872 1.469v.382a.5.5 0 0 1-.5.5H4.605a1.5 1.5 0 0 1-1.493-1.645L3.356 9.5h-.238c-.195 0-.42.147-.675.48-.21.274-.528.52-.943.52-.568 0-.947-.447-1.154-.862C.123 9.193 0 8.613 0 8s.123-1.193.346-1.638C.553 5.947.932 5.5 1.5 5.5c.415 0 .733.246.943.52.255.333.48.48.675.48h.238l-.244-2.855z"/>
                                    </svg>
                                </div>
                                <h5 class="mb-3" style="color: var(--vmp-text);">Problem Solving Ability</h5>
                                <p class="text-muted mb-0" style="font-size: 14px;">Outstanding problem-solving skills and the ability to think critically. You can effectively convey your thoughts and collaborate with others.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Culture & Benefits Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="text-center mb-5" style="color: var(--vmp-primary);">Why Join VMP&trade; Security</h2>
                
                <div class="row g-4 mb-5">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-start mb-4">
                            <div class="flex-shrink-0 me-3">
                                <div class="p-3 rounded-circle" style="background: rgba(0, 122, 255, 0.1);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-heart-fill" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                        <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5Z"/>
                                        <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z"/>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h5 style="color: var(--vmp-text);">Remote Work Environment</h5>
                                <p class="text-muted mb-0" style="font-size: 14px;">Work from anywhere in the world. We believe in flexibility and trust our team to deliver excellent results regardless of location.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="d-flex align-items-start mb-4">
                            <div class="flex-shrink-0 me-3">
                                <div class="p-3 rounded-circle" style="background: rgba(245, 166, 35, 0.1);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"/>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h5 style="color: var(--vmp-text);">Professional Growth</h5>
                                <p class="text-muted mb-0" style="font-size: 14px;">Opportunities to learn, grow, and advance your career in the rapidly evolving field of WordPress security.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="d-flex align-items-start mb-4">
                            <div class="flex-shrink-0 me-3">
                                <div class="p-3 rounded-circle" style="background: rgba(0, 163, 42, 0.1);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-heartbeat" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01L8 2.748ZM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5Z"/>
                                        <path d="M10.464 3.314a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.5a.5.5 0 0 0 0 1H4a.5.5 0 0 0 .416-.223l1.473-2.209 1.647 4.118a.5.5 0 0 0 .945-.049l1.598-5.593 1.457 3.642A.5.5 0 0 0 12 9h3.5a.5.5 0 0 0 0-1h-3.162l-1.874-4.686Z"/>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h5 style="color: var(--vmp-text);">Work-Life Balance</h5>
                                <p class="text-muted mb-0" style="font-size: 14px;">We value healthy work-life balance and understand the importance of personal time and well-being.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="d-flex align-items-start mb-4">
                            <div class="flex-shrink-0 me-3">
                                <div class="p-3 rounded-circle" style="background: rgba(214, 54, 56, 0.1);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16" style="color: var(--vmp-danger);">
                                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h5 style="color: var(--vmp-text);">Impactful Work</h5>
                                <p class="text-muted mb-0" style="font-size: 14px;">Your work will directly contribute to securing millions of WordPress websites and protecting users worldwide.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Current Positions Section -->
<section class="py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="text-center mb-4" style="color: var(--vmp-primary);">Current Positions</h2>
                
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5 text-center">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16" style="color: var(--vmp-text-light);">
                                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </div>
                        <h4 class="mb-3" style="color: var(--vmp-text);">Building Our Team</h4>
                        <p class="text-muted mb-4" style="font-size: 15px;">
                            We are currently establishing VMP&trade; Security and building our team. Job openings will be posted here when available. In the meantime, if you're interested in joining our mission, please feel free to reach out.
                        </p>
                        <p class="text-muted mb-0" style="font-size: 14px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle me-2" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg>
                            Check back regularly for updates on new positions
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Express Interest Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-center mb-4" style="color: var(--vmp-primary);">Express Your Interest</h2>
                <p class="text-center text-muted mb-5" style="font-size: 15px;">
                    Interested in joining VMP&trade; Security when we start hiring? Let us know! We'll keep your information on file and reach out when suitable positions become available.
                </p>
                
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label text-muted small">Full Name</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        placeholder="Your name" 
                                        disabled
                                        style="background: var(--vmp-gray); border-color: var(--vmp-border); cursor: not-allowed;"
                                    >
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-muted small">Email Address</label>
                                    <input 
                                        type="email" 
                                        class="form-control" 
                                        placeholder="your@email.com" 
                                        disabled
                                        style="background: var(--vmp-gray); border-color: var(--vmp-border); cursor: not-allowed;"
                                    >
                                </div>
                                <div class="col-12">
                                    <label class="form-label text-muted small">Area of Interest</label>
                                    <select 
                                        class="form-select" 
                                        disabled
                                        style="background: var(--vmp-gray); border-color: var(--vmp-border); cursor: not-allowed;"
                                    >
                                        <option>Select your area...</option>
                                        <option>Security Engineering</option>
                                        <option>Software Development</option>
                                        <option>Customer Support</option>
                                        <option>Marketing & Communications</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label text-muted small">Message (Optional)</label>
                                    <textarea 
                                        class="form-control" 
                                        rows="4" 
                                        placeholder="Tell us about yourself..." 
                                        disabled
                                        style="background: var(--vmp-gray); border-color: var(--vmp-border); cursor: not-allowed;"
                                    ></textarea>
                                </div>
                                <div class="col-12">
                                    <button 
                                        type="button" 
                                        class="btn btn-lg w-100" 
                                        disabled
                                        style="background: var(--vmp-gray); border-color: var(--vmp-border); color: var(--vmp-text-light); cursor: not-allowed;"
                                    >
                                        Submit Interest (Coming Soon)
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                        <div class="mt-4 pt-4 border-top text-center">
                            <p class="text-muted mb-2" style="font-size: 14px;">Or email us directly at:</p>
                            <a href="mailto:careers@vmpsecurity.com" style="color: var(--vmp-primary); font-size: 18px; font-weight: 600;">
                                careers@vmpsecurity.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Info Section -->
<section class="py-5" style="background: linear-gradient(135deg, var(--vmp-primary) 0%, var(--vmp-dark) 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center text-white">
                <h3 class="mb-3">Questions About Working at VMP&trade; Security?</h3>
                <p class="mb-4" style="font-size: 15px; opacity: 0.9;">
                    We welcome inquiries about our company culture, future positions, and what it's like to work on WordPress security. Feel free to reach out with any questions.
                </p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="mailto:careers@vmpsecurity.com" class="btn btn-lg px-4" style="background: white; color: var(--vmp-primary); border: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope me-2" viewBox="0 0 16 16" style="margin-top: -3px;">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                        Contact HR Team
                    </a>
                    
                    <a href="#" class="btn btn-outline-light btn-lg px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-text me-2" viewBox="0 0 16 16" style="margin-top: -3px;">
                            <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                        </svg>
                        About VMP&trade; Security
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>