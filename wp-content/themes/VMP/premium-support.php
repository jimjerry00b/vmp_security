<?php
/*
Template Name: Premium Support
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Premium Support - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Premium Support for VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section with Search -->
<section class="py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, rgba(25, 25, 112, 0.95) 0%, rgba(26, 26, 64, 0.95) 100%), url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 1200 600%22><rect fill=%22%23f0f0f1%22 width=%221200%22 height=%22600%22/></svg>'); background-size: cover; background-position: center;">
    <div class="container position-relative" style="z-index: 1;">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center text-white">
                <div class="badge mb-3 px-4 py-2" style="background: var(--vmp-warning); font-size: 14px;">
                    ⭐ Premium Support Access
                </div>
                <h1 class="display-4 fw-bold mb-4">How to get help</h1>
                
                <!-- Search Bar -->
                <form class="mb-4">
                    <div class="input-group input-group-lg shadow-lg">
                        <input type="text" class="form-control" placeholder="Search Documentation..." style="border-right: none; padding: 20px 24px;">
                        <button class="btn" type="submit" style="background: var(--vmp-warning); border-color: var(--vmp-warning); color: #fff; padding: 20px 32px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </div>
                </form>

                <!-- Quick Action Buttons -->
                <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
                    <a href="#" class="btn btn-light btn-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people me-2" viewBox="0 0 16 16">
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                        </svg>
                        Premium Customers
                    </a>
                    <a href="#" class="btn btn-light btn-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle me-2" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                        New Site Request
                    </a>
                    <a href="#" class="btn btn-light btn-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-ticket-perforated me-2" viewBox="0 0 16 16">
                            <path d="M4 4.85v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Z"/>
                            <path d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 0 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3h-13ZM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9V4.5Z"/>
                        </svg>
                        Go To Priority Tickets
                    </a>
                    <a href="#" class="btn btn-outline-light btn-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-dots me-2" viewBox="0 0 16 16">
                            <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
                        </svg>
                        Premium Forum
                    </a>
                </div>

                <p class="mb-0">
                    <small>Can't log into your vmpsecurity.com account? Email us at <a href="mailto:support@vmpsecurity.com" class="text-white fw-bold text-decoration-underline">support@vmpsecurity.com</a></small>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Premium Benefits Banner -->
<section class="py-4" style="background: var(--vmp-warning);">
    <div class="container">
        <div class="row align-items-center text-white">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-lightning-charge me-2" viewBox="0 0 16 16">
                    <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
                </svg>
                <strong>Priority Response: 4 Hours</strong>
            </div>
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-headset me-2" viewBox="0 0 16 16">
                    <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                </svg>
                <strong>24/7 Live Chat Support</strong>
            </div>
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope-at me-2" viewBox="0 0 16 16">
                    <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                    <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                </svg>
                <strong>Priority Email Support</strong>
            </div>
            <div class="col-md-3 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-badge me-2" viewBox="0 0 16 16">
                    <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                </svg>
                <strong>Dedicated Account Manager</strong>
            </div>
        </div>
    </div>
</section>

<!-- Category Selection -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="color: var(--vmp-primary);">Or choose a category to quickly find the help you need</h2>
        </div>

        <div class="row g-4">
            <!-- VMP Firewall -->
            <div class="col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card border-0 shadow-sm h-100 text-center" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16" style="color: var(--vmp-primary);">
                                    <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                                    <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                </svg>
                            </div>
                            <h5 class="mb-2" style="color: var(--vmp-text);">VMP Firewall</h5>
                            <p class="text-muted small mb-0">Advanced firewall protection and configuration</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Malware Scanning -->
            <div class="col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card border-0 shadow-sm h-100 text-center" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-bug" viewBox="0 0 16 16" style="color: var(--vmp-danger);">
                                    <path d="M4.355.522a.5.5 0 0 1 .623.333l.291.956A4.979 4.979 0 0 1 8 1c1.007 0 1.946.298 2.731.811l.29-.956a.5.5 0 1 1 .957.29l-.41 1.352A4.985 4.985 0 0 1 13 6h.5a.5.5 0 0 0 .5-.5V5a.5.5 0 0 1 1 0v.5A1.5 1.5 0 0 1 13.5 7H13v1h1.5a.5.5 0 0 1 0 1H13v1h.5a1.5 1.5 0 0 1 1.5 1.5v.5a.5.5 0 1 1-1 0v-.5a.5.5 0 0 0-.5-.5H13a5 5 0 0 1-10 0h-.5a.5.5 0 0 0-.5.5v.5a.5.5 0 1 1-1 0v-.5A1.5 1.5 0 0 1 2.5 10H3V9H1.5a.5.5 0 0 1 0-1H3V7h-.5A1.5 1.5 0 0 1 1 5.5V5a.5.5 0 0 1 1 0v.5a.5.5 0 0 0 .5.5H3c0-1.364.547-2.601 1.432-3.503l-.41-1.352a.5.5 0 0 1 .333-.623zM4 7v4a4 4 0 0 0 3.5 3.97V7H4zm4.5 0v7.97A4 4 0 0 0 12 11V7H8.5zM12 6a3.989 3.989 0 0 0-1.334-2.982A3.983 3.983 0 0 0 8 2a3.983 3.983 0 0 0-2.667 1.018A3.989 3.989 0 0 0 4 6h8z"/>
                                </svg>
                            </div>
                            <h5 class="mb-2" style="color: var(--vmp-text);">Malware Scanning</h5>
                            <p class="text-muted small mb-0">Deep scan and malware removal assistance</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- VMP Central -->
            <div class="col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card border-0 shadow-sm h-100 text-center" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-diagram-3" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                                    <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1zM0 11.5A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                                </svg>
                            </div>
                            <h5 class="mb-2" style="color: var(--vmp-text);">VMP Central</h5>
                            <p class="text-muted small mb-0">Centralized dashboard and multi-site management</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Login Security -->
            <div class="col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card border-0 shadow-sm h-100 text-center" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                    <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                                    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                            </div>
                            <h5 class="mb-2" style="color: var(--vmp-text);">Login Security</h5>
                            <p class="text-muted small mb-0">Two-factor authentication and login protection</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Lockouts -->
            <div class="col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card border-0 shadow-sm h-100 text-center" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                                </svg>
                            </div>
                            <h5 class="mb-2" style="color: var(--vmp-text);">Lockouts</h5>
                            <p class="text-muted small mb-0">Unlock assistance and lockout management</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- All Help Documents -->
            <div class="col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card border-0 shadow-sm h-100 text-center" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16" style="color: var(--vmp-text-light);">
                                    <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
                                </svg>
                            </div>
                            <h5 class="mb-2" style="color: var(--vmp-text);">All Help Documents</h5>
                            <p class="text-muted small mb-0">Browse complete documentation library</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Methods -->
<section class="py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="color: var(--vmp-primary);">Premium Support Contact</h2>
            <p class="lead text-muted">Get immediate help through multiple channels</p>
        </div>

        <div class="row g-4">
            <!-- Live Chat -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-5 text-center">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                                <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
                            </svg>
                        </div>
                        <h3 class="mb-3" style="color: var(--vmp-primary);">Live Chat Support</h3>
                        <p class="text-muted mb-4">
                            Connect instantly with our support team for real-time assistance. Available 24/7 for premium customers.
                        </p>
                        <div class="mb-4">
                            <div class="badge px-3 py-2 mb-2" style="background: var(--vmp-success);">
                                🟢 Online Now
                            </div>
                            <p class="small text-muted mb-0">Average response time: 2 minutes</p>
                        </div>
                        <button class="btn btn-lg w-100" style="background: var(--vmp-success); border-color: var(--vmp-success); color: #fff;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-left-dots me-2" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg>
                            Start Live Chat
                        </button>
                    </div>
                </div>
            </div>

            <!-- Priority Email Support -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-5 text-center">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16" style="color: var(--vmp-primary);">
                                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                                <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                            </svg>
                        </div>
                        <h3 class="mb-3" style="color: var(--vmp-primary);">Priority Email Support</h3>
                        <p class="text-muted mb-4">
                            Contact our security experts directly via email for detailed assistance with complex issues.
                        </p>
                        <div class="mb-4">
                            <h4 class="mb-2" style="color: var(--vmp-primary);">
                                <a href="mailto:premium@vmpsecurity.com" class="text-decoration-none" style="color: var(--vmp-primary);">premium@vmpsecurity.com</a>
                            </h4>
                            <p class="small text-muted mb-3">Priority Queue • Dedicated Team</p>
                            <p class="small mb-1"><strong>Response Time:</strong> Within 4 hours</p>
                            <p class="small text-muted mb-0">Emergency: emergency@vmpsecurity.com</p>
                        </div>
                        <a href="mailto:premium@vmpsecurity.com" class="btn btn-lg w-100" style="background: var(--vmp-primary); border-color: var(--vmp-primary); color: #fff;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-fill me-2" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                            </svg>
                            Send Email
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Premium Features -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="color: var(--vmp-primary);">Premium Support Advantages</h2>
            <p class="lead text-muted">Why premium customers get the best experience</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="text-center">
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-lightning-charge" viewBox="0 0 16 16" style="color: var(--vmp-warning);">
                            <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
                        </svg>
                    </div>
                    <h5 style="color: var(--vmp-text);">Priority Queue</h5>
                    <p class="text-muted small">Your tickets jump to the front of the line</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="text-center">
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16" style="color: var(--vmp-primary-dark);">
                            <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/>
                        </svg>
                    </div>
                    <h5 style="color: var(--vmp-text);">Remote Assistance</h5>
                    <p class="text-muted small">We can access your site to fix issues directly</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="text-center">
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16" style="color: var(--vmp-success);">
                            <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                            <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <h5 style="color: var(--vmp-text);">Security Audits</h5>
                    <p class="text-muted small">Regular security reviews by our experts</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="text-center">
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16" style="color: var(--vmp-primary);">
                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                        </svg>
                    </div>
                    <h5 style="color: var(--vmp-text);">Account Manager</h5>
                    <p class="text-muted small">Dedicated contact who knows your setup</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Contact -->
<section class="py-5" style="background: var(--vmp-dark);">
    <div class="container">
        <div class="row align-items-center text-white">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="mb-3">Security Emergency?</h2>
                <p class="lead mb-4">
                    If your site has been compromised or you're experiencing a critical security incident, contact our emergency response team immediately.
                </p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="mailto:emergency@vmpsecurity.com?subject=URGENT: Security Emergency" class="btn btn-light btn-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-exclamation-fill me-2" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                            <path d="M12.5 6a.5.5 0 0 1 .5.5V8a.5.5 0 0 1-1 0V6.5a.5.5 0 0 1 .5-.5zm0 3a.5.5 0 0 1 .5.5v.5a.5.5 0 0 1-1 0v-.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        Email Emergency Team: emergency@vmpsecurity.com
                    </a>
                    <button class="btn btn-outline-light btn-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-left-dots-fill me-2" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                        Emergency Live Chat
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>