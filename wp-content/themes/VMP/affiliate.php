<?php
/*
Template Name: Affiliate Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Affiliate - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Affiliate of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(135deg, var(--vmp-primary) 0%, var(--vmp-dark) 100%); padding: 80px 0; text-align: center; color: #fff; position: relative; overflow: hidden;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="VMP&trade; Security Logo" style="max-width: 120px; height: auto;">
                </div>
                <h1 class="display-4 fw-bold mb-3" style="font-size: 2.5rem;">Affiliate Program Coming Soon</h1>
                <p class="lead mb-4" style="font-size: 1.2rem; color: rgba(255,255,255,0.9);">
                    We're working on an exciting affiliate program that will reward you for helping others protect their WordPress websites.
                </p>
                <p class="mb-4" style="color: rgba(255,255,255,0.85);">
                    Sign up below to be notified when we launch. Be among the first to start earning!
                </p>
                
                <!-- Email Signup Form -->
                <div class="row justify-content-center mt-4">
                    <div class="col-md-8">
                        <form id="affiliateNotifyForm" class="d-flex flex-column flex-sm-row gap-2 justify-content-center">
                            <input type="email" class="form-control form-control-lg" placeholder="Enter your email" required style="max-width: 400px; border: none; padding: 12px 20px;">
                            <button type="submit" class="btn btn-lg px-4" style="background: var(--vmp-warning); border: none; color: #fff; font-weight: 600; white-space: nowrap;">
                                Notify Me When Available
                            </button>
                        </form>
                        <p class="mt-3 small" style="color: rgba(255,255,255,0.7);">
                            Already an affiliate? <a href="#" style="color: var(--vmp-warning);">Sign in here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Decorative Elements -->
    <div style="position: absolute; bottom: -50px; left: -50px; width: 200px; height: 200px; background: rgba(245, 166, 35, 0.1); border-radius: 50%; filter: blur(40px);"></div>
    <div style="position: absolute; top: -50px; right: -50px; width: 250px; height: 250px; background: rgba(0, 122, 255, 0.1); border-radius: 50%; filter: blur(40px);"></div>
</section>

<!-- How It Works Section -->
<section class="how-it-works-section py-5" style="background: #fff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--vmp-text); font-size: 2rem;">How It Will Work</h2>
            <p class="text-muted" style="max-width: 600px; margin: 0 auto;">
                Our affiliate program is designed to be simple and rewarding. Here's what you can expect:
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center p-4">
                    <div class="mb-3">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="color: var(--vmp-primary);">
                            <path d="M16 21V19C16 17.9391 15.5786 16.9217 14.8284 16.1716C14.0783 15.4214 13.0609 15 12 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13M16 3.13C16.8604 3.3503 17.623 3.8507 18.1676 4.55231C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89317 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88M12.5 7C12.5 9.20914 10.7091 11 8.5 11C6.29086 11 4.5 9.20914 4.5 7C4.5 4.79086 6.29086 3 8.5 3C10.7091 3 12.5 4.79086 12.5 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h5 class="fw-bold mb-3" style="color: var(--vmp-text);">Sign Up</h5>
                    <p class="text-muted">
                        Complete a quick online application to join our affiliate network. It's free and easy to get started.
                    </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="text-center p-4">
                    <div class="mb-3">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="color: var(--vmp-primary);">
                            <path d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13M18.5 2.5C18.8978 2.1022 19.4374 1.87868 20 1.87868C20.5626 1.87868 21.1022 2.1022 21.5 2.5C21.8978 2.8978 22.1213 3.43739 22.1213 4C22.1213 4.56261 21.8978 5.1022 21.5 5.5L12 15L8 16L9 12L18.5 2.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h5 class="fw-bold mb-3" style="color: var(--vmp-text);">Promote VMP&trade; Security</h5>
                    <p class="text-muted">
                        Use your unique affiliate links and marketing materials to promote our security solutions to your audience.
                    </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="text-center p-4">
                    <div class="mb-3">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="color: var(--vmp-primary);">
                            <path d="M12 2V22M17 5H9.5C8.57174 5 7.6815 5.36875 7.02513 6.02513C6.36875 6.6815 6 7.57174 6 8.5C6 9.42826 6.36875 10.3185 7.02513 10.9749C7.6815 11.6313 8.57174 12 9.5 12H14.5C15.4283 12 16.3185 12.3687 16.9749 13.0251C17.6313 13.6815 18 14.5717 18 15.5C18 16.4283 17.6313 17.3185 16.9749 17.9749C16.3185 18.6313 15.4283 19 14.5 19H6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h5 class="fw-bold mb-3" style="color: var(--vmp-text);">Earn Commissions</h5>
                    <p class="text-muted">
                        Earn competitive commissions for every successful referral. Get paid regularly for your efforts.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <button class="btn btn-lg px-5" style="background: var(--vmp-warning); border: none; color: #fff; font-weight: 600;" onclick="document.getElementById('affiliateNotifyForm').scrollIntoView({ behavior: 'smooth', block: 'center' });">
                Join the Waitlist
            </button>
        </div>
    </div>
</section>

<!-- Why Join Section -->
<section class="why-join-section py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--vmp-text); font-size: 2rem;">Why Join Our Affiliate Program?</h2>
            <p class="text-muted" style="max-width: 600px; margin: 0 auto;">
                Partner with a trusted name in WordPress security and enjoy exclusive benefits.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm" style="transition: transform 0.3s ease;">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="color: var(--vmp-primary);">
                                <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: var(--vmp-text);">Premium Product</h5>
                        <p class="text-muted mb-0">
                            Promote a high-quality security solution that website owners trust and need for protection.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm" style="transition: transform 0.3s ease;">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="color: var(--vmp-primary);">
                                <path d="M13 10V3L4 14H11L11 21L20 10L13 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: var(--vmp-text);">Competitive Commissions</h5>
                        <p class="text-muted mb-0">
                            Earn generous commissions with our affiliate-friendly pricing structure and recurring revenue options.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm" style="transition: transform 0.3s ease;">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="color: var(--vmp-primary);">
                                <path d="M21 15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H7L3 21V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: var(--vmp-text);">Dedicated Support</h5>
                        <p class="text-muted mb-0">
                            Get access to dedicated affiliate managers, marketing resources, and promotional materials.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row g-4 mt-2">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm" style="transition: transform 0.3s ease;">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="color: var(--vmp-primary);">
                                <path d="M9 11L12 14L22 4M21 12V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: var(--vmp-text);">Real-Time Tracking</h5>
                        <p class="text-muted mb-0">
                            Monitor your performance with our advanced dashboard featuring real-time analytics and reporting.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm" style="transition: transform 0.3s ease;">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="color: var(--vmp-primary);">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: var(--vmp-text);">Marketing Materials</h5>
                        <p class="text-muted mb-0">
                            Access professionally designed banners, landing pages, and email templates to boost conversions.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm" style="transition: transform 0.3s ease;">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="color: var(--vmp-primary);">
                                <path d="M3.055 11H5C5.55228 11 6 11.4477 6 12V21H3V12C3 11.4477 3.055 11 3.055 11ZM12.055 6H14C14.5523 6 15 6.44772 15 7V21H12V7C12 6.44772 12.055 6 12.055 6ZM21.055 2H23C23.5523 2 24 2.44772 24 3V21H21V3C21 2.44772 21.055 2 21.055 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: var(--vmp-text);">Growing Market</h5>
                        <p class="text-muted mb-0">
                            WordPress security is in high demand. Join a growing industry with unlimited earning potential.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5" style="background: linear-gradient(135deg, var(--vmp-primary) 0%, var(--vmp-primary-two) 100%); text-align: center; color: #fff;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-3" style="font-size: 2rem;">Ready to Start Earning When We Launch?</h2>
                <p class="lead mb-4" style="color: rgba(255,255,255,0.9);">
                    Be the first to know when our affiliate program goes live. Join the waitlist today!
                </p>
                <button class="btn btn-lg px-5" style="background: var(--vmp-warning); border: none; color: #fff; font-weight: 600;" onclick="document.getElementById('affiliateNotifyForm').scrollIntoView({ behavior: 'smooth', block: 'center' });">
                    Join the Waitlist Now
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Still Have Questions Section -->
<section class="questions-section py-5" style="background: #fff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--vmp-text); font-size: 2rem;">Still Have Questions?</h2>
            <p class="text-muted">
                Check out our FAQ below, or contact us for more information about the upcoming affiliate program.
            </p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form id="contactForm" class="p-4 shadow-sm rounded" style="background: var(--vmp-gray);">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold" style="color: var(--vmp-text);">First Name *</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold" style="color: var(--vmp-text);">Last Name *</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold" style="color: var(--vmp-text);">Email *</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold" style="color: var(--vmp-text);">Message *</label>
                            <textarea class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-lg w-100" style="background: var(--vmp-warning); border: none; color: #fff; font-weight: 600;">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--vmp-text); font-size: 2rem;">Frequently Asked Questions (FAQ)</h2>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="faq1">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1" style="color: var(--vmp-text); background: #fff;">
                                When will the affiliate program launch?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background: #fff;">
                                We're currently finalizing the details of our affiliate program. Sign up for the waitlist to be notified as soon as we launch. Early subscribers will receive exclusive benefits and bonuses.
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2" style="color: var(--vmp-text); background: #fff;">
                                What commission rates can I expect?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background: #fff;">
                                We're designing a competitive commission structure that rewards our affiliates generously. Details will be shared with waitlist members before the official launch.
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3" style="color: var(--vmp-text); background: #fff;">
                                Who can join the affiliate program?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background: #fff;">
                                Our affiliate program will be open to bloggers, influencers, web developers, agencies, and anyone passionate about WordPress security. Whether you have a large audience or are just starting out, we welcome you to join.
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 4 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="faq4">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4" style="color: var(--vmp-text); background: #fff;">
                                Will there be any costs to join?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background: #fff;">
                                No, joining our affiliate program will be completely free. There are no signup fees, monthly charges, or hidden costs. You'll only earn when you make successful referrals.
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 5 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="faq5">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5" style="color: var(--vmp-text); background: #fff;">
                                What marketing materials will be provided?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background: #fff;">
                                Affiliates will have access to a comprehensive library of marketing materials including banners, landing pages, email templates, social media graphics, and promotional content to help you succeed.
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 6 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="faq6">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6" style="color: var(--vmp-text); background: #fff;">
                                How will I track my referrals and earnings?
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="faq6" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background: #fff;">
                                You'll have access to a dedicated affiliate dashboard with real-time tracking of clicks, conversions, commissions, and payments. The dashboard will provide detailed analytics to help you optimize your promotional efforts.
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 7 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="faq7">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7" style="color: var(--vmp-text); background: #fff;">
                                How often will payments be made?
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="faq7" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background: #fff;">
                                Payment terms and schedules will be outlined in the affiliate agreement. We're committed to timely and reliable payments for all our affiliate partners.
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 8 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="faq8">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8" style="color: var(--vmp-text); background: #fff;">
                                Can I promote VMP&trade; Security in any country?
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="faq8" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background: #fff;">
                                Yes! Our affiliate program will be global. You can promote VMP&trade; Security products to audiences worldwide, and we'll provide support for international affiliates.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Email notification form handler
document.getElementById('affiliateNotifyForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const email = this.querySelector('input[type="email"]').value;
    
    // Here you would typically send this to your backend
    // For now, we'll just show a success message
    alert('Thank you for your interest! We\'ll notify you at ' + email + ' when the affiliate program launches.');
    this.reset();
});

// Contact form handler
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Here you would typically send this to your backend
    alert('Thank you for your message! We\'ll get back to you soon.');
    this.reset();
});

// Add hover effect to cards
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.why-join-section .card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
</script>

<?php get_footer(); ?>