<?php
/*
Template Name: Vulnerabilities Submit Page
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Vulnerabilities Submit - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Vulnerabilities Submit page of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<!-- Vulnerability Submission Form Section -->
<div class="container-fluid" style="background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%); padding: 60px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                
                <!-- Header Section -->
                <div class="text-center mb-5">
                    <h1 style="color: var(--vmp-primary); font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;">
                        VMP&trade; Security Vulnerability Submission
                    </h1>
                    <p style="color: var(--vmp-text-light); font-size: 1.1rem;">
                        Help us keep the WordPress ecosystem secure
                    </p>
                </div>

                <!-- Info Alert Box -->
                <div class="alert" style="background-color: #d1ecf1; border: 1px solid #bee5eb; border-radius: 8px; padding: 20px; margin-bottom: 30px;">
                    <p style="color: #0c5460; margin: 0; font-size: 15px; line-height: 1.6;">
                        <strong>Important:</strong> Have you found a vulnerability in a WordPress plugin or theme? Report vulnerabilities in WordPress plugins and themes through our bug bounty program and earn a bounty on all in-scope submissions. <a href="#" style="color: #007bff; text-decoration: underline;">Please review the documentation on how to access and review the VMP&trade; Security Vulnerability Database before submitting your vulnerability.</a>
                    </p>
                </div>

                <!-- Main Form Container -->
                <div class="card" style="border: 1px solid var(--vmp-border); border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background: #fff;">
                    <div class="card-body" style="padding: 40px;">
                        
                        <!-- Coming Soon Notice -->
                        <div class="alert alert-warning text-center" style="background-color: var(--vmp-warning); border: none; border-radius: 6px; padding: 25px; margin-bottom: 40px;">
                            <h3 style="color: #fff; font-size: 1.8rem; font-weight: 700; margin-bottom: 10px;">
                                🚀 Coming Soon
                            </h3>
                            <p style="color: #fff; font-size: 1.1rem; margin: 0;">
                                Our vulnerability submission system is currently under development. Check back soon!
                            </p>
                        </div>

                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb" style="margin-bottom: 30px;">
                            <ol class="breadcrumb" style="background: transparent; padding: 0; margin: 0; font-size: 14px;">
                                <li class="breadcrumb-item"><a href="#" style="color: var(--vmp-primary);">VMP&trade; Security Intelligence</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="color: var(--vmp-text-light);">Vulnerability Submission Form</li>
                            </ol>
                        </nav>

                        <h2 style="color: var(--vmp-primary); font-size: 1.8rem; font-weight: 600; margin-bottom: 20px;">
                            VMP&trade; Security Vulnerability Submission Form
                        </h2>

                        <p style="color: var(--vmp-text); line-height: 1.8; margin-bottom: 30px;">
                            Thank you for choosing to submit a vulnerability to the VMP&trade; Security Intelligence Vulnerability Database! VMP&trade; Security is a Certified Numbering Authority (CNA), which grants us the ability to assign CVE IDs to WordPress plugin, theme, and core vulnerabilities. There is just one licensing term to request a CVE ID or to submit a vulnerability that will not be added to our public vulnerability database: You must have permission to report the software to VMP&trade; Security. We are not designers but do our best research to find all the flaws upon our reach on possible to help spread as the things improve.
                        </p>

                        <p style="color: var(--vmp-text); line-height: 1.8; margin-bottom: 40px;">
                            As a reminder, you are not currently signed up for any paid programs. If you are ineligible to participate in the bug bounty program, upon submission of the vulnerability form, if you have your vulnerability report to be identified with your researcher profile, please review your sign-in or complete your registration process. If you prefer to remain anonymous with your researcher profile, please make sure to sign in or complete your registration process.
                        </p>

                        <!-- Contact Details Section -->
                        <div class="form-section mb-5">
                            <h4 style="color: var(--vmp-primary); font-size: 1.2rem; font-weight: 600; padding-bottom: 10px; border-bottom: 2px solid var(--vmp-border); margin-bottom: 25px;">
                                CONTACT DETAILS
                            </h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label style="color: var(--vmp-text); font-weight: 600; margin-bottom: 8px; display: block;">Name*</label>
                                    <input type="text" class="form-control" disabled style="background: var(--vmp-gray); border: 1px solid var(--vmp-border); padding: 10px 15px; border-radius: 4px;">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label style="color: var(--vmp-text); font-weight: 600; margin-bottom: 8px; display: block;">Email Address*</label>
                                    <input type="email" class="form-control" disabled style="background: var(--vmp-gray); border: 1px solid var(--vmp-border); padding: 10px 15px; border-radius: 4px;">
                                </div>
                            </div>
                        </div>

                        <!-- Software Details Section -->
                        <div class="form-section mb-5">
                            <h4 style="color: var(--vmp-primary); font-size: 1.2rem; font-weight: 600; padding-bottom: 10px; border-bottom: 2px solid var(--vmp-border); margin-bottom: 25px;">
                                SOFTWARE DETAILS
                            </h4>
                            <div class="mb-3">
                                <label style="color: var(--vmp-text); font-weight: 600; margin-bottom: 12px; display: block;">Type of Software *</label>
                                <div class="d-flex gap-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" disabled id="wpCore">
                                        <label class="form-check-label" for="wpCore" style="color: var(--vmp-text);">
                                            WordPress Core
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" disabled id="wpPlugin">
                                        <label class="form-check-label" for="wpPlugin" style="color: var(--vmp-text);">
                                            WordPress Plugin
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" disabled id="wpTheme">
                                        <label class="form-check-label" for="wpTheme" style="color: var(--vmp-text);">
                                            WordPress Theme
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Vulnerability Details Section -->
                        <div class="form-section mb-5">
                            <h4 style="color: var(--vmp-primary); font-size: 1.2rem; font-weight: 600; padding-bottom: 10px; border-bottom: 2px solid var(--vmp-border); margin-bottom: 25px;">
                                VULNERABILITY DETAILS
                            </h4>
                            <div class="mb-4">
                                <label style="color: var(--vmp-text); font-weight: 600; margin-bottom: 8px; display: block;">Description of Vulnerability *</label>
                                <textarea class="form-control" rows="6" disabled style="background: var(--vmp-gray); border: 1px solid var(--vmp-border); padding: 12px 15px; border-radius: 4px;"></textarea>
                                <small style="color: var(--vmp-text-light); font-size: 13px; margin-top: 5px; display: block;">
                                    Describe the vulnerability without providing sensitive context and disclosing
                                </small>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label style="color: var(--vmp-text); font-weight: 600; margin-bottom: 8px; display: block;">Common Weakness (CWE) Type *</label>
                                    <select class="form-select" disabled style="background: var(--vmp-gray); border: 1px solid var(--vmp-border); padding: 10px 15px; border-radius: 4px;">
                                        <option>Select CWE type categorized CWE-IDs by vulnerability. You can search by name or CWE-code if needed.</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label style="color: var(--vmp-text); font-weight: 600; margin-bottom: 8px; display: block;">Authentication Level Required *</label>
                                    <select class="form-select" disabled style="background: var(--vmp-gray); border: 1px solid var(--vmp-border); padding: 10px 15px; border-radius: 4px;">
                                        <option>Select authentication level required</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label style="color: var(--vmp-text); font-weight: 600; margin-bottom: 8px; display: block;">References for Affected Code</label>
                                <button class="btn btn-outline-secondary btn-sm" disabled style="border: 1px solid var(--vmp-border); color: var(--vmp-text); padding: 6px 16px; border-radius: 4px;">
                                    ADD NEW CODE REFERENCE
                                </button>
                                <small style="color: var(--vmp-text-light); font-size: 13px; margin-top: 8px; display: block;">
                                    Optionally add (e.g. affected code line in IVORY repositories)
                                </small>
                            </div>

                            <div class="mb-4">
                                <label style="color: var(--vmp-text); font-weight: 600; margin-bottom: 8px; display: block;">References</label>
                                <button class="btn btn-outline-secondary btn-sm" disabled style="border: 1px solid var(--vmp-border); color: var(--vmp-text); padding: 6px 16px; border-radius: 4px;">
                                    ADD NEW REFERENCE
                                </button>
                                <small style="color: var(--vmp-text-light); font-size: 13px; margin-top: 8px; display: block;">
                                    Provide any supporting URLs where applicable
                                </small>
                            </div>

                            <div class="mb-4">
                                <label style="color: var(--vmp-text); font-weight: 600; margin-bottom: 8px; display: block;">Contributing Researchers</label>
                                <button class="btn btn-outline-secondary btn-sm" disabled style="border: 1px solid var(--vmp-border); color: var(--vmp-text); padding: 6px 16px; border-radius: 4px;">
                                    ADD NEW RESEARCHER
                                </button>
                                <small style="color: var(--vmp-text-light); font-size: 13px; margin-top: 8px; display: block;">
                                    Utilize to search by researcher type or name a new name...
                                </small>
                            </div>
                        </div>

                        <!-- Proof of Concept Section -->
                        <div class="form-section mb-5">
                            <h4 style="color: var(--vmp-primary); font-size: 1.2rem; font-weight: 600; padding-bottom: 10px; border-bottom: 2px solid var(--vmp-border); margin-bottom: 25px;">
                                PROOF OF CONCEPT
                            </h4>
                            <div class="mb-3">
                                <label style="color: var(--vmp-text); font-weight: 600; margin-bottom: 8px; display: block;">What is your PoC? *</label>
                                <select class="form-select" disabled style="background: var(--vmp-gray); border: 1px solid var(--vmp-border); padding: 10px 15px; border-radius: 4px;">
                                    <option>Select proof of concept type</option>
                                </select>
                            </div>
                        </div>

                        <!-- Other Details Section -->
                        <div class="form-section mb-5">
                            <h4 style="color: var(--vmp-primary); font-size: 1.2rem; font-weight: 600; padding-bottom: 10px; border-bottom: 2px solid var(--vmp-border); margin-bottom: 25px;">
                                OTHER DETAILS
                            </h4>
                            
                            <div class="mb-4">
                                <label style="color: var(--vmp-text); font-weight: 600; margin-bottom: 12px; display: block;">Have you registered a CVE from another CNA for this vulnerability? *</label>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-outline-secondary" disabled style="border: 1px solid var(--vmp-border); padding: 8px 24px;">YES</button>
                                    <button type="button" class="btn btn-outline-secondary" disabled style="border: 1px solid var(--vmp-border); padding: 8px 24px;">NO</button>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label style="color: var(--vmp-text); font-weight: 600; margin-bottom: 12px; display: block;">Have you reported this to a security vendor? *</label>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-outline-secondary" disabled style="border: 1px solid var(--vmp-border); padding: 8px 24px;">YES</button>
                                    <button type="button" class="btn btn-outline-secondary" disabled style="border: 1px solid var(--vmp-border); padding: 8px 24px;">NO</button>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" disabled id="agreeTerms">
                                    <label class="form-check-label" for="agreeTerms" style="color: var(--vmp-text); line-height: 1.6;">
                                        I have read and agree to the <a href="#" style="color: var(--vmp-primary);">VMP&trade; Security Bug Bounty Program Submission Release</a>, <a href="#" style="color: var(--vmp-primary);">VMP&trade; Security Bug Bounty Program Terms and Conditions</a>, <a href="#" style="color: var(--vmp-primary);">VMP&trade; Security Terms of Service</a> and acknowledge the <a href="#" style="color: var(--vmp-primary);">VMP&trade; Security Privacy Policy</a> and <a href="#" style="color: var(--vmp-primary);">Terms of Reference</a> *
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center mb-4">
                            <button type="submit" class="btn btn-primary btn-lg" disabled style="background: var(--vmp-warning); border: none; padding: 12px 48px; font-size: 1.1rem; font-weight: 600; border-radius: 6px; cursor: not-allowed;">
                                SUBMIT VULNERABILITY REPORT
                            </button>
                        </div>

                        <!-- Bottom Info Cards -->
                        <div class="row mt-5">
                            <div class="col-md-4 mb-3">
                                <div class="card h-100" style="border: 1px solid var(--vmp-border); border-radius: 8px;">
                                    <div class="card-body" style="padding: 25px;">
                                        <h5 style="color: var(--vmp-primary); font-size: 1.1rem; font-weight: 600; margin-bottom: 15px;">LEARN MORE</h5>
                                        <p style="color: var(--vmp-text); font-size: 14px; line-height: 1.6;">
                                            Did you know VMP&trade; Security Intelligence provides free personal and commercial API access to our comprehensive WordPress vulnerability database with the vulnerabilities coded into uploaded in the database? Learn more!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card h-100" style="border: 1px solid var(--vmp-border); border-radius: 8px;">
                                    <div class="card-body" style="padding: 25px;">
                                        <h5 style="color: var(--vmp-primary); font-size: 1.1rem; font-weight: 600; margin-bottom: 15px;">GET NOTIFIED</h5>
                                        <p style="color: var(--vmp-text); font-size: 14px; line-height: 1.6;">
                                            Want to get notified of the latest vulnerabilities that may affect your WordPress sites? Install VMP&trade; Security on your site! Soon you will be notified immediately once a vulnerability that may affect your site has been added to our database.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card h-100" style="border: 1px solid var(--vmp-border); border-radius: 8px;">
                                    <div class="card-body" style="padding: 25px;">
                                        <h5 style="color: var(--vmp-primary); font-size: 1.1rem; font-weight: 600; margin-bottom: 15px;">DOCUMENTATION</h5>
                                        <p style="color: var(--vmp-text); font-size: 14px; line-height: 1.6;">
                                            The VMP&trade; Security Intelligence WordPress vulnerability database is completely free to access and apply our API through our comprehensive API documentation on how to access and apply vulnerabilities pulled are uploaded in the database!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<style>
    /* Custom styles for this page */
    .form-check-input:disabled {
        opacity: 0.5;
    }
    
    .btn:disabled {
        opacity: 0.6;
    }
    
    .breadcrumb-item + .breadcrumb-item::before {
        content: ">";
        color: var(--vmp-text-light);
    }
    
    @media (max-width: 768px) {
        .card-body {
            padding: 20px !important;
        }
        
        h1 {
            font-size: 1.8rem !important;
        }
        
        h2 {
            font-size: 1.5rem !important;
        }
    }
</style>

<?php get_footer(); ?>