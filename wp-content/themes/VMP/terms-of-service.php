<?php
/*
Template Name: Terms of Service
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Terms of Service - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Terms of Service page of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<style>
    .terms-hero {
        position: relative;
        background: linear-gradient(135deg, #5ba3d0 0%, #4a90c5 100%);
        padding: 80px 0 100px;
        overflow: hidden;
    }
    
    .terms-hero h1 {
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
    
    .terms-content {
        padding: 60px 0;
        background: white;
    }
    
    .terms-container {
        max-width: 900px;
        margin: 0 auto;
    }
    
    .last-updated {
        background: var(--vmp-gray);
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 40px;
        border-left: 4px solid var(--vmp-primary);
    }
    
    .last-updated p {
        margin: 0;
        color: var(--vmp-text);
        font-size: 14px;
        font-weight: 600;
    }
    
    .terms-section {
        margin-bottom: 40px;
    }
    
    .terms-section h2 {
        color: var(--vmp-primary);
        font-size: 28px;
        font-weight: 600;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid var(--vmp-border);
    }
    
    .terms-section h3 {
        color: var(--vmp-text);
        font-size: 22px;
        font-weight: 600;
        margin-top: 30px;
        margin-bottom: 15px;
    }
    
    .terms-section p {
        color: var(--vmp-text-light);
        font-size: 16px;
        line-height: 1.8;
        margin-bottom: 15px;
    }
    
    .terms-section ul {
        color: var(--vmp-text-light);
        line-height: 1.8;
        margin-bottom: 20px;
        padding-left: 30px;
    }
    
    .terms-section ul li {
        margin-bottom: 10px;
    }
    
    .contact-box {
        background: var(--vmp-gray);
        padding: 30px;
        border-radius: 8px;
        margin-top: 40px;
        text-align: center;
        border: 2px solid var(--vmp-border);
    }
    
    .contact-box h3 {
        color: var(--vmp-primary);
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 15px;
    }
    
    .contact-box p {
        color: var(--vmp-text-light);
        margin-bottom: 15px;
    }
    
    .contact-box a {
        color: var(--vmp-primary);
        font-weight: 600;
        font-size: 18px;
        text-decoration: none;
    }
    
    .contact-box a:hover {
        color: var(--vmp-primary-dark);
        text-decoration: underline;
    }
</style>

<!-- Hero Section with Wave -->
<section class="terms-hero">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Terms of Service</h1>
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

<!-- Terms of Service Content -->
<section class="terms-content">
    <div class="container">
        <div class="terms-container">
            
            <div class="last-updated">
                <p>Last Updated: January 19, 2026</p>
            </div>

            <div class="terms-section">
                <p>
                    Welcome to VMP&trade; Security. These Terms of Service ("Terms") govern your access to and use of our website, products, and services (collectively, the "Services"). By accessing or using our Services, you agree to be bound by these Terms.
                </p>
            </div>

            <div class="terms-section">
                <h2>1. Acceptance of Terms</h2>
                <p>
                    By creating an account, accessing, or using VMP&trade; Security's Services, you acknowledge that you have read, understood, and agree to be bound by these Terms and our Privacy Policy. If you do not agree to these Terms, you may not access or use our Services.
                </p>
                <p>
                    These Terms apply to all users of the Services, including without limitation users who are browsers, vendors, customers, merchants, and/or contributors of content.
                </p>
            </div>

            <div class="terms-section">
                <h2>2. Services Description</h2>
                <p>
                    VMP&trade; Security provides WordPress security solutions, including but not limited to:
                </p>
                <ul>
                    <li>WordPress vulnerability scanning and protection</li>
                    <li>Firewall and malware protection</li>
                    <li>Security monitoring and threat intelligence</li>
                    <li>Website security audits and assessments</li>
                    <li>CVE assignment and vulnerability research</li>
                    <li>Security plugins and tools</li>
                    <li>Technical support and documentation</li>
                </ul>
                <p>
                    We reserve the right to modify, suspend, or discontinue any aspect of the Services at any time, with or without notice.
                </p>
            </div>

            <div class="terms-section">
                <h2>3. User Accounts</h2>
                <h3>Account Creation</h3>
                <p>
                    To access certain features of our Services, you must create an account. When creating an account, you agree to:
                </p>
                <ul>
                    <li>Provide accurate, current, and complete information</li>
                    <li>Maintain and promptly update your account information</li>
                    <li>Maintain the security of your account credentials</li>
                    <li>Accept responsibility for all activities under your account</li>
                    <li>Notify us immediately of any unauthorized use</li>
                </ul>

                <h3>Account Eligibility</h3>
                <p>
                    You must be at least 18 years old to create an account and use our Services. By creating an account, you represent and warrant that you meet this age requirement and have the legal capacity to enter into these Terms.
                </p>
            </div>

            <div class="terms-section">
                <h2>4. Payment and Billing</h2>
                <h3>Fees and Charges</h3>
                <p>
                    Some aspects of our Services require payment. You agree to pay all fees and charges associated with your account according to the pricing and payment terms presented to you at the time of purchase.
                </p>

                <h3>Subscription Services</h3>
                <p>
                    If you purchase a subscription:
                </p>
                <ul>
                    <li>Subscriptions automatically renew unless cancelled before the renewal date</li>
                    <li>You authorize us to charge your payment method for renewal fees</li>
                    <li>Subscription fees are non-refundable except as required by law</li>
                    <li>We may change subscription pricing with 30 days notice</li>
                    <li>Price changes do not affect current subscription periods</li>
                </ul>

                <h3>Payment Methods</h3>
                <p>
                    You agree to provide current, complete, and accurate payment information. You authorize us to charge the payment method you provide for all fees incurred.
                </p>
            </div>

            <div class="terms-section">
                <h2>5. Refund Policy</h2>
                <p>
                    We offer refunds according to the following terms:
                </p>
                <ul>
                    <li><strong>30-Day Money-Back Guarantee:</strong> First-time purchases may be eligible for a full refund within 30 days of purchase</li>
                    <li><strong>Subscription Renewals:</strong> No refunds for automatic subscription renewals unless required by applicable law</li>
                    <li><strong>Promotional Pricing:</strong> Refunds for promotional purchases may be subject to different terms</li>
                    <li><strong>Service Issues:</strong> Refunds may be provided at our discretion for service failures or technical issues</li>
                </ul>
                <p>
                    To request a refund, please contact us at info@vmpsecurity.com with your account details and reason for the request.
                </p>
            </div>

            <div class="terms-section">
                <h2>6. Intellectual Property</h2>
                <h3>Our Content</h3>
                <p>
                    The Services and their entire contents, features, and functionality (including but not limited to all information, software, text, displays, images, video, and audio, and the design, selection, and arrangement thereof) are owned by VMP&trade; Security, its licensors, or other providers of such material and are protected by intellectual property laws.
                </p>

                <h3>License to Use</h3>
                <p>
                    Subject to these Terms, we grant you a limited, non-exclusive, non-transferable, non-sublicensable license to access and use the Services for your internal business purposes or personal use.
                </p>

                <h3>Restrictions</h3>
                <p>
                    You may not:
                </p>
                <ul>
                    <li>Modify, copy, or create derivative works of the Services</li>
                    <li>Reverse engineer, decompile, or disassemble any aspect of the Services</li>
                    <li>Remove or alter any copyright, trademark, or proprietary notices</li>
                    <li>Resell, rent, lease, or sublicense the Services</li>
                    <li>Use the Services to develop competing products or services</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>7. User Conduct</h2>
                <p>
                    You agree not to use the Services to:
                </p>
                <ul>
                    <li>Violate any applicable laws or regulations</li>
                    <li>Infringe upon the rights of others</li>
                    <li>Transmit any viruses, malware, or harmful code</li>
                    <li>Attempt to gain unauthorized access to our systems</li>
                    <li>Interfere with or disrupt the Services or servers</li>
                    <li>Impersonate any person or entity</li>
                    <li>Harvest or collect information about other users</li>
                    <li>Use the Services for any illegal or unauthorized purpose</li>
                    <li>Engage in any activity that could damage our reputation</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>8. Termination</h2>
                <h3>Termination by You</h3>
                <p>
                    You may terminate your account at any time by contacting us at info@vmpsecurity.com or through your account settings. Upon termination, you will lose access to the Services.
                </p>

                <h3>Termination by Us</h3>
                <p>
                    We may suspend or terminate your account and access to the Services at any time, without notice, for conduct that we believe:
                </p>
                <ul>
                    <li>Violates these Terms or our policies</li>
                    <li>Harms other users, us, or third parties</li>
                    <li>Exposes us to liability</li>
                    <li>Is fraudulent or illegal</li>
                </ul>

                <h3>Effect of Termination</h3>
                <p>
                    Upon termination, your right to use the Services will immediately cease. All provisions of these Terms that by their nature should survive termination shall survive, including ownership provisions, warranty disclaimers, and limitations of liability.
                </p>
            </div>

            <div class="terms-section">
                <h2>9. Disclaimers and Warranties</h2>
                <p>
                    THE SERVICES ARE PROVIDED "AS IS" AND "AS AVAILABLE" WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, AND NON-INFRINGEMENT.
                </p>
                <p>
                    We do not warrant that:
                </p>
                <ul>
                    <li>The Services will be uninterrupted, secure, or error-free</li>
                    <li>The Services will meet your requirements</li>
                    <li>The results obtained from using the Services will be accurate or reliable</li>
                    <li>Any errors in the Services will be corrected</li>
                    <li>The Services will prevent all security threats or vulnerabilities</li>
                </ul>
                <p>
                    While we strive to provide comprehensive security protection, no security solution can guarantee complete protection against all threats.
                </p>
            </div>

            <div class="terms-section">
                <h2>10. Limitation of Liability</h2>
                <p>
                    TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, IN NO EVENT SHALL VMP&trade; Security, ITS AFFILIATES, OFFICERS, DIRECTORS, EMPLOYEES, AGENTS, OR LICENSORS BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES, INCLUDING BUT NOT LIMITED TO LOSS OF PROFITS, DATA, USE, GOODWILL, OR OTHER INTANGIBLE LOSSES, RESULTING FROM:
                </p>
                <ul>
                    <li>Your access to or use of or inability to access or use the Services</li>
                    <li>Any conduct or content of any third party on the Services</li>
                    <li>Any content obtained from the Services</li>
                    <li>Unauthorized access, use, or alteration of your transmissions or content</li>
                    <li>Security breaches or vulnerabilities not prevented by our Services</li>
                </ul>
                <p>
                    IN NO EVENT SHALL OUR TOTAL LIABILITY TO YOU FOR ALL DAMAGES EXCEED THE AMOUNT YOU PAID US IN THE TWELVE (12) MONTHS PRECEDING THE EVENT GIVING RISE TO LIABILITY, OR ONE HUNDRED DOLLARS ($100), WHICHEVER IS GREATER.
                </p>
            </div>

            <div class="terms-section">
                <h2>11. Indemnification</h2>
                <p>
                    You agree to defend, indemnify, and hold harmless VMP&trade; Security and its affiliates, officers, directors, employees, and agents from and against any claims, liabilities, damages, losses, and expenses, including reasonable attorneys' fees, arising out of or in any way connected with:
                </p>
                <ul>
                    <li>Your access to or use of the Services</li>
                    <li>Your violation of these Terms</li>
                    <li>Your violation of any third-party rights</li>
                    <li>Your violation of any applicable laws or regulations</li>
                </ul>
            </div>

            <div class="terms-section">
                <h2>12. Governing Law</h2>
                <p>
                    These Terms shall be governed by and construed in accordance with the laws of the jurisdiction in which VMP&trade; Security operates, without regard to its conflict of law provisions.
                </p>
                <p>
                    You agree to submit to the personal and exclusive jurisdiction of the courts located within this jurisdiction for the resolution of any disputes arising from or relating to these Terms or the Services.
                </p>
            </div>

            <div class="terms-section">
                <h2>13. Changes to Terms</h2>
                <p>
                    We reserve the right to modify or replace these Terms at any time. If a revision is material, we will provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.
                </p>
                <p>
                    By continuing to access or use our Services after revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, you must stop using the Services.
                </p>
                <p>
                    We encourage you to review these Terms periodically for any changes. The "Last Updated" date at the top of this page indicates when these Terms were last revised.
                </p>
            </div>

            <div class="terms-section">
                <h2>14. Severability</h2>
                <p>
                    If any provision of these Terms is held to be invalid, illegal, or unenforceable, the remaining provisions shall continue in full force and effect. The invalid provision shall be modified to the minimum extent necessary to make it valid and enforceable.
                </p>
            </div>

            <div class="terms-section">
                <h2>15. Entire Agreement</h2>
                <p>
                    These Terms, together with our Privacy Policy and any other legal notices published by us on the Services, constitute the entire agreement between you and VMP&trade; Security concerning the Services and supersede all prior agreements and understandings.
                </p>
            </div>

            <!-- Contact Box -->
            <div class="contact-box">
                <h3>Contact Us</h3>
                <p>If you have any questions about these Terms of Service, please contact us:</p>
                <p><strong>VMP&trade; Security</strong></p>
                <a href="mailto:info@vmpsecurity.com">info@vmpsecurity.com</a>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>