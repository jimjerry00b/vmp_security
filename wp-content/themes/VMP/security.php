<?php
/*
Template Name: Security Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Security - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Security at VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Hero Section with Wave -->
<section class="position-relative overflow-hidden" style="background: linear-gradient(135deg, #2980b9 0%, #3498db 100%); padding: 100px 0 140px 0;">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center text-white">
                <h1 class="display-4 fw-bold mb-0">Vulnerability Disclosure Policy</h1>
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
                    As a provider of security software, services, and research, we take security issues very seriously and strive to lead by example. We recognize the importance of collaboration between vendors, researchers, and customers and users and we operate through a coordinated disclosure process.
                </p>
                
                <p class="text-muted mb-5" style="font-size: 15px; line-height: 1.8;">
                    This policy outlines the steps researchers should take to report security issues to VMP&trade; Security, as well as the process we use when disclosing vulnerabilities to other entities.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Reporting to VMP&trade; Security for WordPress Section -->
<section class="py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <h2 class="mb-4" style="color: var(--vmp-primary);">Reporting Security Issues to VMP&trade; Security in WordPress Plugins, Themes, and Core for CVE Assignment</h2>
                
                <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.8;">
                    VMP&trade; Security is a Certified Numbering Authority (CNA), which gives us the ability to assign CVE IDs on WordPress plugin, theme, and core vulnerabilities. Please fill out the CVE Request form located here to request a CVE ID, in the following situations:
                </p>
                
                <ul class="text-muted mb-4" style="font-size: 15px; line-height: 1.8;">
                    <li>You have identified a security vulnerability in a WordPress plugin</li>
                    <li>You have identified a security vulnerability in a WordPress theme</li>
                    <li>You have identified a security vulnerability in a WordPress core</li>
                </ul>
                
                <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.8;">
                    The VMP&trade; Security Threat Intelligence team will review your vulnerability and report back within 1-3 business days with a CVE ID assignment or a request for additional information. All CVE IDs assigned by VMP&trade; Security are intended to be responsible disclosures and can be found <a href="#" style="color: var(--vmp-primary-dark);">here</a>.
                </p>
                
                <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.8;">
                    If you have any questions, please send an email to <a href="mailto:cve@vmpsecurity.com" style="color: var(--vmp-primary-dark);">cve@vmpsecurity.com</a>.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Reporting VMP&trade; Security Products Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <h2 class="mb-4" style="color: var(--vmp-primary);">Reporting Security Issues in VMP&trade; Security Products to VMP&trade; Security</h2>
                
                <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.8;">
                    Contact the VMP&trade; Security Security Team by sending mail to <a href="mailto:security@vmpsecurity.com" style="color: var(--vmp-primary-dark);">security@vmpsecurity.com</a> in the following situations:
                </p>
                
                <ul class="text-muted mb-4" style="font-size: 15px; line-height: 1.8;">
                    <li>You have identified a potential security vulnerability with one of our products</li>
                    <li>You have identified potential vulnerability with one of our products</li>
                </ul>
                
                <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.8;">
                    To ensure confidentiality, we encourage you to encrypt any sensitive information you send to us via email. We are equipped to receive messages encrypted using our public PGP key:
                </p>
                
                <div class="card border-0 shadow-sm mb-4" style="background: var(--vmp-gray);">
                    <div class="card-body p-4">
                        <p class="mb-2 small text-muted">If you are a security researcher and have information protected by non-disclosure obligations to others, please let us know in your initial contact. This will help prevent misunderstandings when VMP&trade; Security shares details we might already know.</p>
                        <p class="mb-0 small text-muted">We at <a href="mailto:security@vmpsecurity.com" style="color: var(--vmp-primary-dark);">security@vmpsecurity.com</a> email address is monitored for the purposes of reporting product or service security vulnerabilities. It is not for technical support. For content other than that described in this security vulnerability disclosure policy, please use <a href="#" style="color: var(--vmp-primary-dark);">help.vmpsecurity.com</a> or visit <a href="#" style="color: var(--vmp-primary-dark);">vmpsecurity.com/contact</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Software Vulnerability Disclosure Process -->
<section class="py-5" style="background: var(--vmp-gray);">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <h2 class="mb-4" style="color: var(--vmp-primary);">Software Vulnerability Disclosure and Remediation Process</h2>
                
                <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.8;">
                    When the VMP&trade; Security Threat Intelligence Team finds a vulnerability in a third-party product, or if a vulnerability affecting our plugin is disclosed to us, we take the following steps to address the issue. A "vendor" below may refer to the developer of a plugin or the team or platform hosting the software.
                </p>
                
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        <ol class="mb-0" style="font-size: 15px; line-height: 1.8; color: var(--vmp-text);">
                            <li class="mb-3">Our Threat Intelligence team verifies the vulnerability and determines severity.</li>
                            <li class="mb-3">Where possible, we develop a firewall rule that can be deployed to prevent reverse engineering.</li>
                            <li class="mb-3">We deploy the firewall rule to Newton customers' sites. These firewalls may be on the frontend and (and defense layer) level. Customer sites are notified immediately with the rule and no customer action is required.</li>
                            <li class="mb-3">Details of the vulnerability may be published as a WordPress intelligence briefing, based on the state the vendor was notified:
                                <ol type="a" class="mt-2">
                                    <li class="mb-2">If no vendor contact exists anywhere public, we will publicly disclose the vulnerability within 30 days.</li>
                                    <li class="mb-2">14 days if vendor does not acknowledge our report within 14 days of initial contact</li>
                                    <li class="mb-2">At our discretion if the vulnerability is actively being exploited in the WordPress community</li>
                                    <li class="mb-2">30 days if vendor has been offered to remediate or states both an open advisory exists to inform end protect the WordPress community from vulnerabilities that have no available patches</li>
                                    <li class="mb-2">If it a deadline would fall on a weekend or holiday, the deadline will be placed on the earliest following business day</li>
                                    <li class="mb-2">45 days if vendor can reply to us and confirm they are fixing, or are planning to fix, the issue but need time</li>
                                    <li class="mb-2">VMP&trade; Security will work with the vendor on the deadline if needed, but we announce the existence of the vulnerability to encourage the community to upgrade</li>
                                    <li class="mb-2">VMP&trade; Security community blog posts, or our Threat Intelligence Report, or the email version in Premium Care, and Response customers</li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                </div>
                
                <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.8;">
                    All aspects of this process are subject to change without notice, and to case-by-case exceptions.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Service Vulnerability Disclosure -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <h2 class="mb-4" style="color: var(--vmp-primary);">Service Vulnerability Disclosure Policy</h2>
                
                <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.8;">
                    We define a service vulnerability as any issue with a technology service that represents an exploitable security risk for its users. We draw a distinction between service and software vulnerabilities, because in many cases, when VMP&trade; Security Services Team discovers a security vulnerability in a service, such as WordPress hosting, we take the following steps to address the issue:
                </p>
                
                <div class="card border-0 shadow-sm mb-4" style="background: var(--vmp-gray);">
                    <div class="card-body p-4">
                        <ol class="mb-0" style="font-size: 15px; line-height: 1.8; color: var(--vmp-text);">
                            <li class="mb-3">Our Threat Intelligence team notifies the service provider of the security vulnerability, based on the date the vendor was notified:
                                <ol type="a" class="mt-2">
                                    <li class="mb-2">30 days if vendor acknowledges our report within 14 days of initial contact</li>
                                    <li class="mb-2">14 days if vendor does not acknowledge our report within 14 days of initial contact</li>
                                    <li class="mb-2">At our discretion if the vulnerability is actively being exploited in the WordPress community</li>
                                    <li class="mb-2">If it a deadline would fall on a weekend or holiday, the deadline will be placed on the earliest following business day</li>
                                </ol>
                            </li>
                            <li class="mb-3">Where the service vulnerability directly affects Newton customers, we notify that customer if there are actions they can take to remediate the issue and/or consider changing hosting</li>
                            <li class="mb-3">If the hosting provider is unresponsive or does not address the issue, we may instruct customers regarding how to migrate to a new hosting provider</li>
                            <li class="mb-3">The service provider releases a fix or the deadline passes, and we announce the vulnerability via our blog</li>
                        </ol>
                    </div>
                </div>
                
                <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.8;">
                    All aspects of this process are subject to change without notice, and to case-by-case exceptions.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5" style="background: linear-gradient(135deg, var(--vmp-primary) 0%, var(--vmp-dark) 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center text-white">
                <h3 class="mb-3">Questions About Our Security Policy?</h3>
                <p class="mb-4" style="font-size: 15px; opacity: 0.9;">
                    If you have questions about our vulnerability disclosure policy or need to report a security issue, please contact us.
                </p>
                
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="mailto:security@vmpsecurity.com" class="btn btn-lg px-4" style="background: white; color: var(--vmp-primary); border: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope me-2" viewBox="0 0 16 16" style="margin-top: -3px;">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                        Security Team
                    </a>
                    
                    <a href="mailto:cve@vmpsecurity.com" class="btn btn-outline-light btn-lg px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-shield-check me-2" viewBox="0 0 16 16" style="margin-top: -3px;">
                            <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                            <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        CVE Requests
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>