<?php
/*
Template Name: Contact Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Contact Page - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Contact page of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<style>
    .contact-hero {
        position: relative;
        background: linear-gradient(135deg, #5ba3d0 0%, #4a90c5 100%);
        padding: 80px 0 100px;
        overflow: hidden;
    }
    
    .contact-hero h1 {
        color: white;
        font-size: 48px;
        font-weight: 300;
        margin: 0;
        position: relative;
        z-index: 2;
    }
    
    .wave-shape {
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
    }
    
    .wave-shape svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 80px;
    }
    
    .wave-shape .shape-fill {
        fill: #FFFFFF;
    }
    
    .contact-section {
        padding: 60px 0;
        background: #f8f9fa;
    }
    
    .contact-card {
        background: white;
        border-radius: 8px;
        padding: 40px 30px;
        text-align: center;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        margin-bottom: 30px;
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    }
    
    .contact-icon {
        width: 60px;
        height: 60px;
        margin: 0 auto 20px;
        background: var(--vmp-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .contact-icon svg {
        width: 30px;
        height: 30px;
        fill: white;
    }
    
    .contact-card h3 {
        color: var(--vmp-text);
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 15px;
    }
    
    .contact-card p {
        color: var(--vmp-text-light);
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 15px;
    }
    
    .contact-card a {
        color: var(--vmp-primary);
        font-size: 14px;
        text-decoration: none;
        font-weight: 500;
    }
    
    .contact-card a:hover {
        color: var(--vmp-primary-dark);
        text-decoration: underline;
    }
    
    .product-support-section {
        background: white;
        padding: 60px 0;
        border-bottom: 1px solid var(--vmp-border);
    }
    
    .video-container {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        max-width: 100%;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>

<!-- Hero Section with Wave -->
<section class="contact-hero">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
    <div class="wave-shape">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
        </svg>
    </div>
</section>

<!-- Product Support Section -->
<section class="product-support-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="text-center text-lg-start">
                    <div class="contact-icon mx-auto mx-lg-0" style="margin-bottom: 25px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z"/>
                        </svg>
                    </div>
                    <h2 style="color: var(--vmp-text); font-size: 28px; font-weight: 600; margin-bottom: 20px;">Product Support</h2>
                    <p style="color: var(--vmp-text-light); line-height: 1.8; margin-bottom: 15px;">
                        All customers can access <a href="#" style="color: var(--vmp-primary);">VMP&trade; Security documentation here</a>.
                    </p>
                    <p style="color: var(--vmp-text-light); line-height: 1.8; margin-bottom: 15px;">
                        To get support, all paid VMP&trade; Security customers including VMP&trade; Security Premium, VMP&trade; Security Care and VMP&trade; Security Response customers can visit our support site by clicking the "Get Support" button on the support page at <a href="#" style="color: var(--vmp-primary);">CLICK "GET HELP" to start a support request</a>.
                    </p>
                    <p style="color: var(--vmp-text-light); line-height: 1.8; margin-bottom: 15px;">
                        Free customers may visit our <a href="<?php echo esc_url(home_url('free-support')); ?>" style="color: var(--vmp-primary);">product support page here</a>.
                    </p>                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="video-container">
                    <!-- <iframe src="https://www.youtube.com/embed/QavtowPq0TQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        <img class="img-fluid round border border-white border-3 rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/17.jpg">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Cards Section -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <!-- New Malware and Attacks -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-card">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>
                        </svg>
                    </div>
                    <h3>New Malware and Attacks</h3>
                    <p>Have you discovered a new Malware variant or a new kind of intrusion that you'd like to share with us?</p>
                    <a href="mailto:info@vmpsecurity.com">info@vmpsecurity.com</a>
                </div>
            </div>

            <!-- Billing or License -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-card">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/>
                        </svg>
                    </div>
                    <h3>Billing or License</h3>
                    <p>Do you have a question about billing or an issue trying to buy VMP&trade; Security?</p>
                    <a href="mailto:info@vmpsecurity.com">info@vmpsecurity.com</a>
                </div>
            </div>

            <!-- Purchasing Questions -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-card">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/>
                        </svg>
                    </div>
                    <h3>Purchasing Questions</h3>
                    <p>Are you thinking about buying VMP&trade; Security and have questions?</p>
                    <a href="mailto:info@vmpsecurity.com">info@vmpsecurity.com</a>
                </div>
            </div>

            <!-- General Business Inquiries -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-card">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M20 6h-2.18c.11-.31.18-.65.18-1 0-1.66-1.34-3-3-3-1.05 0-1.96.54-2.5 1.35l-.5.67-.5-.68C10.96 2.54 10.05 2 9 2 7.34 2 6 3.34 6 5c0 .35.07.69.18 1H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-5-2c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM9 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm11 15H4v-2h16v2zm0-5H4V8h5.08L7 10.83 8.62 12 11 8.76l1-1.36 1 1.36L15.38 12 17 10.83 14.92 8H20v6z"/>
                        </svg>
                    </div>
                    <h3>General Business Inquiries</h3>
                    <p>Do you have a feature suggestion or want to ask about partnerships, VMP&trade; Security, or other general business inquiries?</p>
                    <a href="mailto:info@vmpsecurity.com">info@vmpsecurity.com</a>
                </div>
            </div>

            <!-- Feedback -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-card">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 9h12v2H6V9zm8 5H6v-2h8v2zm4-6H6V6h12v2z"/>
                        </svg>
                    </div>
                    <h3>Feedback</h3>
                    <p>If you have feedback for us, we'd love to hear from you.</p>
                    <a href="mailto:info@vmpsecurity.com">info@vmpsecurity.com</a>
                </div>
            </div>

            <!-- Press Questions -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-card">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
                        </svg>
                    </div>
                    <h3>Press Questions</h3>
                    <p>Press-related questions?</p>
                    <a href="mailto:info@vmpsecurity.com">info@vmpsecurity.com</a>
                </div>
            </div>
        </div>

        <!-- VMP&trade; Security Account Help -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="contact-card">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                        </svg>
                    </div>
                    <h3>VMP&trade; Security Account Help</h3>
                    <p>Having trouble logging into vmpsecurity.com to manage your keys or access VMP&trade; Security Central?</p>
                    <a href="mailto:info@vmpsecurity.com">info@vmpsecurity.com</a>
                </div>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="row mt-5">
            <div class="col-lg-8 mx-auto">
                <div class="contact-card" style="padding: 50px 40px;">
                    <h2 style="color: var(--vmp-primary); font-size: 32px; font-weight: 600; margin-bottom: 15px; text-align: center;">Send Us a Message</h2>
                    <p style="color: var(--vmp-text-light); text-align: center; margin-bottom: 30px;">Have a question or need assistance? Fill out the form below and we'll get back to you as soon as possible.</p>
                    
                    <?php
                        echo do_shortcode('[contact-form-7 id="28d7647" title="Contact Page"]');
                    ?>

                    <!-- <form id="contactForm" method="post" action="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="contactName" style="color: var(--vmp-text); font-weight: 600; margin-bottom: 8px; text-align: left; display: block;">Name <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="contactName" name="name" required style="border-color: var(--vmp-border); padding: 12px; border-radius: 4px;">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="contactEmail" style="color: var(--vmp-text); font-weight: 600; margin-bottom: 8px; text-align: left; display: block;">Email <span style="color: red;">*</span></label>
                                <input type="email" class="form-control" id="contactEmail" name="email" required style="border-color: var(--vmp-border); padding: 12px; border-radius: 4px;">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="contactSubject" style="color: var(--vmp-text); font-weight: 600; margin-bottom: 8px; text-align: left; display: block;">Subject <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="contactSubject" name="subject" required style="border-color: var(--vmp-border); padding: 12px; border-radius: 4px;">
                        </div>
                        <div class="mb-3">
                            <label for="contactMessage" style="color: var(--vmp-text); font-weight: 600; margin-bottom: 8px; text-align: left; display: block;">Message <span style="color: red;">*</span></label>
                            <textarea class="form-control" id="contactMessage" name="message" rows="6" required style="border-color: var(--vmp-border); padding: 12px; border-radius: 4px;"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" style="background: var(--vmp-primary); border: none; color: white; font-weight: 600; padding: 12px 40px; border-radius: 4px; font-size: 16px;">
                                Send Message
                            </button>
                        </div>
                    </form> -->
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>