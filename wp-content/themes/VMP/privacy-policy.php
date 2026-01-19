<?php
/*
Template Name: Privacy Policy
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Privacy Policy - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Privacy Policy page of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<style>
    .privacy-hero {
        position: relative;
        background: linear-gradient(135deg, #5ba3d0 0%, #4a90c5 100%);
        padding: 80px 0 100px;
        overflow: hidden;
    }
    
    .privacy-hero h1 {
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
    
    .privacy-content {
        padding: 60px 0;
        background: white;
    }
    
    .privacy-container {
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
    
    .privacy-section {
        margin-bottom: 40px;
    }
    
    .privacy-section h2 {
        color: var(--vmp-primary);
        font-size: 28px;
        font-weight: 600;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid var(--vmp-border);
    }
    
    .privacy-section h3 {
        color: var(--vmp-text);
        font-size: 22px;
        font-weight: 600;
        margin-top: 30px;
        margin-bottom: 15px;
    }
    
    .privacy-section p {
        color: var(--vmp-text-light);
        font-size: 16px;
        line-height: 1.8;
        margin-bottom: 15px;
    }
    
    .privacy-section ul {
        color: var(--vmp-text-light);
        line-height: 1.8;
        margin-bottom: 20px;
        padding-left: 30px;
    }
    
    .privacy-section ul li {
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
<section class="privacy-hero">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Privacy Policy</h1>
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

<!-- Privacy Policy Content -->
<section class="privacy-content">
    <div class="container">
        <div class="privacy-container">
            
            <div class="last-updated">
                <p>Last Updated: January 19, 2026</p>
            </div>

            <div class="privacy-section">
                <p>
                    At VMP&trade; Security, we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services.
                </p>
            </div>

            <div class="privacy-section">
                <h2>1. Information We Collect</h2>
                <h3>Personal Information</h3>
                <p>We may collect personal information that you voluntarily provide to us when you:</p>
                <ul>
                    <li>Register for an account</li>
                    <li>Purchase our products or services</li>
                    <li>Subscribe to our newsletter</li>
                    <li>Contact us for support</li>
                    <li>Participate in surveys or promotions</li>
                </ul>
                <p>This information may include:</p>
                <ul>
                    <li>Name and contact information (email address, phone number)</li>
                    <li>Billing and payment information</li>
                    <li>Company name and website URL</li>
                    <li>Technical information about your website</li>
                    <li>Communication preferences</li>
                </ul>

                <h3>Automatically Collected Information</h3>
                <p>When you visit our website, we may automatically collect certain information about your device and browsing actions, including:</p>
                <ul>
                    <li>IP address</li>
                    <li>Browser type and version</li>
                    <li>Operating system</li>
                    <li>Referring URLs</li>
                    <li>Pages viewed and time spent on pages</li>
                    <li>Device identifiers</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2>2. How We Use Your Information</h2>
                <p>We use the information we collect for various purposes, including:</p>
                <ul>
                    <li>Providing, operating, and maintaining our services</li>
                    <li>Processing transactions and sending related information</li>
                    <li>Managing your account and providing customer support</li>
                    <li>Sending administrative information, updates, and security alerts</li>
                    <li>Responding to your inquiries and requests</li>
                    <li>Improving and personalizing our services</li>
                    <li>Conducting research and analysis</li>
                    <li>Detecting, preventing, and addressing technical issues and security threats</li>
                    <li>Complying with legal obligations</li>
                    <li>Sending marketing communications (with your consent)</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2>3. Data Security</h2>
                <p>
                    We implement appropriate technical and organizational security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. These measures include:
                </p>
                <ul>
                    <li>Encryption of data in transit and at rest</li>
                    <li>Regular security assessments and audits</li>
                    <li>Access controls and authentication procedures</li>
                    <li>Employee training on data protection</li>
                    <li>Secure data storage and backup systems</li>
                </ul>
                <p>
                    However, no method of transmission over the Internet or electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your personal information, we cannot guarantee its absolute security.
                </p>
            </div>

            <div class="privacy-section">
                <h2>4. Cookies and Tracking Technologies</h2>
                <p>
                    We use cookies and similar tracking technologies to track activity on our website and store certain information. Cookies are files with a small amount of data that may include an anonymous unique identifier.
                </p>
                <p>We use cookies for the following purposes:</p>
                <ul>
                    <li>Essential cookies: Required for the website to function properly</li>
                    <li>Analytics cookies: Help us understand how visitors interact with our website</li>
                    <li>Preference cookies: Remember your settings and preferences</li>
                    <li>Marketing cookies: Track visitors across websites to display relevant advertisements</li>
                </ul>
                <p>
                    You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our website.
                </p>
            </div>

            <div class="privacy-section">
                <h2>5. Third-Party Services</h2>
                <p>
                    We may employ third-party companies and individuals to facilitate our services, provide services on our behalf, perform service-related tasks, or assist us in analyzing how our services are used. These third parties may have access to your personal information only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.
                </p>
                <p>Third-party services we may use include:</p>
                <ul>
                    <li>Payment processors</li>
                    <li>Analytics providers</li>
                    <li>Email service providers</li>
                    <li>Cloud hosting services</li>
                    <li>Customer support platforms</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2>6. Data Retention</h2>
                <p>
                    We will retain your personal information only for as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required or permitted by law. When we no longer need your personal information, we will securely delete or anonymize it.
                </p>
            </div>

            <div class="privacy-section">
                <h2>7. Your Rights</h2>
                <p>Depending on your location, you may have certain rights regarding your personal information, including:</p>
                <ul>
                    <li><strong>Access:</strong> Request access to your personal information</li>
                    <li><strong>Correction:</strong> Request correction of inaccurate or incomplete information</li>
                    <li><strong>Deletion:</strong> Request deletion of your personal information</li>
                    <li><strong>Objection:</strong> Object to the processing of your personal information</li>
                    <li><strong>Restriction:</strong> Request restriction of processing your personal information</li>
                    <li><strong>Data Portability:</strong> Request transfer of your personal information</li>
                    <li><strong>Withdraw Consent:</strong> Withdraw your consent at any time</li>
                </ul>
                <p>
                    To exercise any of these rights, please contact us using the information provided below.
                </p>
            </div>

            <div class="privacy-section">
                <h2>8. Children's Privacy</h2>
                <p>
                    Our services are not directed to individuals under the age of 18. We do not knowingly collect personal information from children under 18. If you are a parent or guardian and believe your child has provided us with personal information, please contact us, and we will take steps to delete such information.
                </p>
            </div>

            <div class="privacy-section">
                <h2>9. International Data Transfers</h2>
                <p>
                    Your information may be transferred to and maintained on computers located outside of your state, province, country, or other governmental jurisdiction where data protection laws may differ. We will take appropriate steps to ensure that your personal information receives an adequate level of protection.
                </p>
            </div>

            <div class="privacy-section">
                <h2>10. Changes to This Privacy Policy</h2>
                <p>
                    We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last Updated" date. You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.
                </p>
            </div>

            <div class="privacy-section">
                <h2>11. Links to Other Websites</h2>
                <p>
                    Our website may contain links to third-party websites that are not operated by us. If you click on a third-party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit. We have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.
                </p>
            </div>

            <!-- Contact Box -->
            <div class="contact-box">
                <h3>Contact Us</h3>
                <p>If you have any questions about this Privacy Policy or our data practices, please contact us:</p>
                <p><strong>VMP&trade; Security</strong></p>
                <a href="mailto:info@vmpsecurity.com">info@vmpsecurity.com</a>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>