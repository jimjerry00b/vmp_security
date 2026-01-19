<?php
/*
Template Name: News Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>News - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="News of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section -->
<section class="py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #007AFF 0%, #0056b3 100%); min-height: 487px;">
    <!-- Curved Bottom Edge -->
    <div style="position: absolute; bottom: -1px; left: 0; width: 100%; overflow: hidden; line-height: 0;">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: block; width: calc(100% + 1.3px); height: 80px;">
            <path d="M0,0 C150,60 350,60 600,30 C850,0 1050,0 1200,30 L1200,120 L0,120 Z" style="fill: #ffffff;"></path>
        </svg>
    </div>
    
    <div class="container position-relative" style="z-index: 1;">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center text-white">
                <!-- News Icon -->
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                        <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                        <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                    </svg>
                </div>
                <h1 class="display-4 fw-bold mb-3">In The News</h1>
                <p class="lead mb-0">VMP&trade; Security in the media and industry publications</p>
            </div>
        </div>
    </div>
</section>

<!-- Notable News Coverage -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="text-center mb-5" style="color: var(--vmp-text); letter-spacing: 1px;">NOTABLE NEWS COVERAGE</h2>
                
                <!-- Coming Soon Message -->
                <div class="text-center mb-5">
                    <div class="card border-0 shadow-sm p-5" style="background: var(--vmp-gray);">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-broadcast" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                <path d="M3.05 3.05a7 7 0 0 0 0 9.9.5.5 0 0 1-.707.707 8 8 0 0 1 0-11.314.5.5 0 0 1 .707.707zm2.122 2.122a4 4 0 0 0 0 5.656.5.5 0 1 1-.708.708 5 5 0 0 1 0-7.072.5.5 0 0 1 .708.708zm5.656-.708a.5.5 0 0 1 .708 0 5 5 0 0 1 0 7.072.5.5 0 1 1-.708-.708 4 4 0 0 0 0-5.656.5.5 0 0 1 0-.708zm2.122-2.12a.5.5 0 0 1 .707 0 8 8 0 0 1 0 11.313.5.5 0 0 1-.707-.707 7 7 0 0 0 0-9.9.5.5 0 0 1 0-.707zM8 7a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            </svg>
                        </div>
                        <h3 class="mb-3" style="color: var(--vmp-primary);">Building Our Media Presence</h3>
                        <p class="lead text-muted mb-4">We're working on establishing relationships with leading tech publications and security news outlets to share our story and innovations.</p>
                        <div class="badge px-4 py-2" style="background-color: var(--vmp-warning); font-size: 14px;">
                            📰 Press Coverage Coming Soon
                        </div>
                    </div>
                </div>

                <!-- Placeholder News Grid -->
                <div class="row g-4 mb-5">
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4 text-center" style="background: var(--vmp-primary);">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16" style="color: white;">
                                        <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z"/>
                                    </svg>
                                </div>
                                <h6 class="text-white">Tech Publications</h6>
                                <p class="small text-white-50 mb-0">Features in leading tech news outlets</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4 text-center" style="background: var(--vmp-warning);">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16" style="color: white;">
                                        <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                                        <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                    </svg>
                                </div>
                                <h6 class="text-white">Security Blogs</h6>
                                <p class="small text-white-50 mb-0">Coverage in cybersecurity media</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4 text-center" style="background: var(--vmp-primary-dark);">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-wordpress" viewBox="0 0 16 16" style="color: white;">
                                        <path d="M12.633 7.653c0-.848-.305-1.435-.566-1.892l-.08-.13c-.317-.51-.594-.958-.594-1.48 0-.63.478-1.218 1.152-1.218.02 0 .039.002.058.003l.031.003A6.838 6.838 0 0 0 8 1.137 6.855 6.855 0 0 0 2.266 4.23c.16.005.313.009.442.009.717 0 1.828-.087 1.828-.087.37-.022.414.521.044.565 0 0-.371.044-.785.065l2.5 7.434 1.5-4.506-1.07-2.929c-.369-.022-.719-.065-.719-.065-.37-.022-.326-.588.043-.566 0 0 1.134.087 1.808.087.718 0 1.83-.087 1.83-.087.37-.022.413.522.043.566 0 0-.372.043-.785.065l2.48 7.377.684-2.287.054-.173c.27-.86.469-1.495.469-2.046zM1.137 8a6.864 6.864 0 0 0 3.868 6.176L1.73 5.206A6.837 6.837 0 0 0 1.137 8z"/>
                                        <path d="M6.061 14.583 8.121 8.6l2.109 5.78c.014.033.03.064.049.094a6.854 6.854 0 0 1-4.218.109zm7.96-9.876c.03.219.047.453.047.706 0 .696-.13 1.479-.522 2.458l-2.096 6.06a6.86 6.86 0 0 0 2.572-9.224z"/>
                                        <path fill-rule="evenodd" d="M0 8c0-4.411 3.589-8 8-8 4.41 0 8 3.589 8 8s-3.59 8-8 8c-4.411 0-8-3.589-8-8zm.367 0c0 4.209 3.424 7.633 7.633 7.633 4.208 0 7.632-3.424 7.632-7.633C15.632 3.79 12.208.367 8 .367 3.79.367.367 3.79.367 8z"/>
                                    </svg>
                                </div>
                                <h6 class="text-white">WordPress News</h6>
                                <p class="small text-white-50 mb-0">WordPress community coverage</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4 text-center" style="background: var(--vmp-success);">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16" style="color: white;">
                                        <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"/>
                                    </svg>
                                </div>
                                <h6 class="text-white">Industry Awards</h6>
                                <p class="small text-white-50 mb-0">Recognition and achievements</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5 text-center">
                        <h3 class="mb-3" style="color: var(--vmp-primary);">The Official VMP&trade; Security Mailing List</h3>
                        <p class="text-muted mb-4">Receive WordPress security news before publication.</p>
                        
                        <form class="mb-3">
                            <div class="row g-3 justify-content-center align-items-end">
                                <div class="col-md-7">
                                    <input type="email" class="form-control form-control-lg" placeholder="email@email.com" required>
                                    <div class="form-check text-start mt-2">
                                        <input class="form-check-input" type="checkbox" id="privacyCheck" required>
                                        <label class="form-check-label small text-muted" for="privacyCheck">
                                            By checking this box I agree to the <a href="#" style="color: var(--vmp-primary-dark);">terms of service and privacy policy</a>.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary btn-lg w-100">SIGN UP</button>
                                </div>
                            </div>
                        </form>
                        
                        <div class="text-muted small">
                            <p class="mb-0">This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Press Release Archive Coming Soon -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h3 class="text-center mb-5" style="color: var(--vmp-primary);">Press Release Archive</h3>
                
                <!-- Placeholder Grid -->
                <div class="row g-4 mb-5">
                    <!-- Placeholder Cards -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4" style="min-height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; background: var(--vmp-gray);">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16" style="color: var(--vmp-text-light);">
                                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                    </svg>
                                </div>
                                <p class="text-center text-muted small mb-0">Press releases coming soon</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4" style="min-height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; background: var(--vmp-gray);">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16" style="color: var(--vmp-text-light);">
                                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                    </svg>
                                </div>
                                <p class="text-center text-muted small mb-0">Media announcements</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4" style="min-height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; background: var(--vmp-gray);">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16" style="color: var(--vmp-text-light);">
                                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                    </svg>
                                </div>
                                <p class="text-center text-muted small mb-0">Product updates</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4" style="min-height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; background: var(--vmp-gray);">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16" style="color: var(--vmp-text-light);">
                                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                    </svg>
                                </div>
                                <p class="text-center text-muted small mb-0">Security advisories</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional rows -->
                <div class="row g-4 mb-5">
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4" style="min-height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; background: var(--vmp-gray);">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16" style="color: var(--vmp-text-light);">
                                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                    </svg>
                                </div>
                                <p class="text-center text-muted small mb-0">Partnership news</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4" style="min-height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; background: var(--vmp-gray);">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16" style="color: var(--vmp-text-light);">
                                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                    </svg>
                                </div>
                                <p class="text-center text-muted small mb-0">Company milestones</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4" style="min-height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; background: var(--vmp-gray);">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16" style="color: var(--vmp-text-light);">
                                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                    </svg>
                                </div>
                                <p class="text-center text-muted small mb-0">Event coverage</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4" style="min-height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; background: var(--vmp-gray);">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16" style="color: var(--vmp-text-light);">
                                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                    </svg>
                                </div>
                                <p class="text-center text-muted small mb-0">Industry reports</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4" style="min-height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; background: var(--vmp-gray);">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16" style="color: var(--vmp-text-light);">
                                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                    </svg>
                                </div>
                                <p class="text-center text-muted small mb-0">Research findings</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4" style="min-height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; background: var(--vmp-gray);">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16" style="color: var(--vmp-text-light);">
                                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                    </svg>
                                </div>
                                <p class="text-center text-muted small mb-0">Technical blogs</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4" style="min-height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; background: var(--vmp-gray);">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16" style="color: var(--vmp-text-light);">
                                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                    </svg>
                                </div>
                                <p class="text-center text-muted small mb-0">Case studies</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4" style="min-height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; background: var(--vmp-gray);">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16" style="color: var(--vmp-text-light);">
                                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                    </svg>
                                </div>
                                <p class="text-center text-muted small mb-0">Expert interviews</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bottom Newsletter/Research Section -->
<section class="py-5" style="background: linear-gradient(135deg, var(--vmp-primary) 0%, var(--vmp-dark) 100%); position: relative; overflow: hidden;">
    <!-- Curved Top Edge -->
    <div style="position: absolute; top: -1px; left: 0; width: 100%; overflow: hidden; line-height: 0; transform: rotate(180deg);">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: block; width: calc(100% + 1.3px); height: 80px;">
            <path d="M0,0 C150,60 350,60 600,30 C850,0 1050,0 1200,30 L1200,120 L0,120 Z" style="fill: #ffffff;"></path>
        </svg>
    </div>

    <div class="container position-relative" style="z-index: 1; padding-top: 60px;">
        <div class="row">
            <div class="col-lg-6 text-white mb-4 mb-lg-0">
                <h3 class="mb-4">Breaking WordPress Security Research in your inbox as it happens</h3>
                <p class="mb-4">Get breaking WP Security News before it appears in the press by subscribing to the WordPress Security Mailing List.</p>
                
                <form>
                    <div class="row g-3 align-items-end">
                        <div class="col-md-8">
                            <label class="form-label small">Email - Name</label>
                            <input type="email" class="form-control" required>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="termsCheck2" required>
                                <label class="form-check-label small" for="termsCheck2">
                                    By checking this box I agree to the <a href="#" class="text-white">terms of service and privacy policy</a>.
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-warning btn-lg w-100">SIGN UP</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-6">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body p-4 d-flex flex-column justify-content-center" style="background: var(--vmp-dark);">
                        <div class="text-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                                <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z"/>
                            </svg>
                        </div>
                        <h4 class="text-center text-white mb-3">Real-Time WordPress Security News</h4>
                        <p class="text-center text-white-50 mb-0">
                            Get breaking WP Security News before it appears in the press by subscribing to the WordPress Security Mailing List.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Media Kit Info -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h3 class="mb-4" style="color: var(--vmp-primary);">Media & Press Inquiries</h3>
                <p class="text-muted mb-4">
                    Our business hours are open 9-5 CST M-F. Our team typically responds to 24 hours inquiries within 24 hours, and we'll be happy to help with special interview requests. For press questions, email us: <a href="#" style="color: var(--vmp-primary-dark);">press@vpnmasterpro.com</a>
                </p>
                
                <div class="row g-3 justify-content-center mt-5">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4 text-center">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark-zip" viewBox="0 0 16 16" style="color: var(--vmp-primary);">
                                        <path d="M5 7.5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.11 0l-.929-.62a1 1 0 0 1-.415-1.074L5 8.438V7.5zm2 0H6v.938a1 1 0 0 1-.03.243l-.4 1.598.93.62.929-.62-.4-1.598A1 1 0 0 1 7 8.438V7.5z"/>
                                        <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1h-2v1h-1v1h1v1h-1v1h1v1H6V5H5V4h1V3H5V2h1V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                                    </svg>
                                </div>
                                <h6 style="color: var(--vmp-text);">Media Kit</h6>
                                <p class="small text-muted mb-0">Coming Soon</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4 text-center">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                        <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                        <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                                    </svg>
                                </div>
                                <h6 style="color: var(--vmp-text);">Brand Assets</h6>
                                <p class="small text-muted mb-0">Coming Soon</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4 text-center">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                        <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                                    </svg>
                                </div>
                                <h6 style="color: var(--vmp-text);">Press Contacts</h6>
                                <p class="small text-muted mb-0">Coming Soon</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>