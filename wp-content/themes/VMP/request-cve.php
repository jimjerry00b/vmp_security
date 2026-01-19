<?php
/*
Template Name: Request CVE
*/
?>

<?php 
add_action('wp_head', function() {
    echo '<title>Request CVE - VMP&trade; Security</title>' . "\n";
    echo '<meta name="description" content="Request CVE page of VMP&trade; Security">' . "\n";
}, 1);

get_header(); 
?>

<style>
    .wpcf7-form-control.wpcf7-submit.has-spinner {
        background: var(--vmp-primary);
        border: none;
        color: white;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }

    .remove-field-btn:hover, .remove-field-btn:active, .remove-field-btn:focus-visible{
        background: var(--vmp-primary)!important;
        color: white;
        box-shadow: none;
    }

    .remove-field-btn:hover svg, .remove-field-btn:active svg, .remove-field-btn:focus-visible svg {
        fill: white;        
    }
</style>

<!-- Hero Section -->
<section class="py-5" style="background: linear-gradient(135deg, var(--vmp-primary-dark) 0%, var(--vmp-primary) 100%);">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-white mb-3">Vulnerability Submission and CVE Request Form</h1>
            </div>
        </div>
    </div>
</section>

<!-- Form Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="mb-4">
                    <p style="color: var(--vmp-text); line-height: 1.8;">
                        VMP&trade; Security is a Certified Numbering Authority (CNA), which grants us the ability to assign CVE IDs to WordPress plugin, theme, and core vulnerabilities. Please fill out the following form to request a CVE ID or to submit a vulnerability that will be added to our public database of vulnerabilities. All vulnerabilities reported to us without previous CVE ID assignment will be assigned a CVE ID. The VMP&trade; Security Threat Intelligence team will review your submission and report back within 1-3 business days with a CVE ID assignment and a link your published vulnerability, if already patched. We may request additional information.
                    </p>
                    <p style="color: var(--vmp-text); line-height: 1.8;">
                        All CVE IDs assigned by VMP&trade; Security are added to our vulnerability database as part of <a href="<?php echo esc_url(home_url('/intelligence')); ?>" style="color: var(--vmp-primary);">VMP&trade; Security Intelligence</a>.
                    </p>
                    <p style="color: var(--vmp-text); line-height: 1.8;">
                        If you have any questions, please send an email to <a href="mailto:info@vmpsecurity.com" style="color: var(--vmp-primary);">info@vmpsecurity.com</a>.
                    </p>
                </div>

                <?php echo do_shortcode('[contact-form-7 id="411b824" title="Request Cve"]'); ?>

            </div>
        </div>
    </div>
</section>

<script>
// Add Researcher Field
function addResearcherField() {
    const container = document.getElementById('researcherFields');
    const newField = document.createElement('div');
    newField.className = 'input-group mb-2';
    newField.innerHTML = `
        <input type="text" class="form-control" name="researchers[]" style="border-color: var(--vmp-border);">
        <button type="button" class="btn btn-outline-danger" onclick="removeField(this)" style="border-color: var(--vmp-border);">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
            </svg>
        </button>
    `;
    container.appendChild(newField);
}

// Add Reference Field
function addReferenceField() {
    const container = document.getElementById('referenceFields');
    const newField = document.createElement('div');
    newField.className = 'input-group mb-2';
    newField.innerHTML = `
        <input type="url" class="form-control" name="references[]" placeholder="http://www.example.com" style="border-color: var(--vmp-border);">
        <button type="button" class="btn btn-outline-danger" onclick="removeField(this)" style="border-color: var(--vmp-border);">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
            </svg>
        </button>
    `;
    container.appendChild(newField);
}

// Remove Field
function removeField(button) {
    button.parentElement.remove();
}

// Form Submission Handler (placeholder)
document.getElementById('cveRequestForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Form submission will be handled by Contact Form 7');
    // Contact Form 7 will handle the actual submission
});
</script>

<script>
jQuery(document).ready(function($) {
    // Wait for Contact Form 7 to load
    setTimeout(function() {
        // Add "Add Another Researcher" button after the researchers field
        var researchersField = $('input[name="researchers"]').closest('.mb-3');
        if (researchersField.length) {
            researchersField.append(`
                <button type="button" class="btn btn-sm mt-2 add-researcher-btn" style="background: var(--vmp-primary); color: white; border: none;">
                    <svg width="16" height="16" fill="var(--vmp-primary)" viewBox="0 0 16 16" style="margin-right: 5px;">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    Add Another Researcher
                </button>
                <div class="additional-researchers"></div>
            `);
        }

        // Add "Add Another Reference" button after the references field
        var referencesField = $('input[name="references"]').closest('.mb-3');
        if (referencesField.length) {
            referencesField.append(`
                <button type="button" class="btn btn-sm mt-2 add-reference-btn" style="background: var(--vmp-primary); color: white; border: none;">
                    <svg width="16" height="16" fill="var(--vmp-primary)" viewBox="0 0 16 16" style="margin-right: 5px;">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    Add Another Reference
                </button>
                <div class="additional-references"></div>
            `);
        }

        // Handle Add Researcher
        $(document).on('click', '.add-researcher-btn', function() {
            var container = $(this).siblings('.additional-researchers');
            var fieldIndex = container.find('.dynamic-field').length + 1;
            var newField = `
                <div class="input-group mb-2 mt-2 dynamic-field">
                    <input type="text" name="researchers-${fieldIndex}" class="form-control wpcf7-text" placeholder="Enter researcher name">
                    <button type="button" class="btn btn-outline-danger remove-field-btn" style="border-color: var(--vmp-primary);">
                        <svg width="16" height="16" fill="var(--vmp-primary)" viewBox="0 0 16 16">
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                        </svg>
                    </button>
                </div>
            `;
            container.append(newField);
        });

        // Handle Add Reference
        $(document).on('click', '.add-reference-btn', function() {
            var container = $(this).siblings('.additional-references');
            var fieldIndex = container.find('.dynamic-field').length + 1;
            var newField = `
                <div class="input-group mb-2 mt-2 dynamic-field">
                    <input type="url" name="references-${fieldIndex}" class="form-control wpcf7-url" placeholder="http://www.example.com">
                    <button type="button" class="btn btn-outline-danger remove-field-btn" style="border-color: var(--vmp-primary);;">
                        <svg width="16" height="16" fill="var(--vmp-primary)" viewBox="0 0 16 16">
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                        </svg>
                    </button>
                </div>
            `;
            container.append(newField);
        });

        // Handle Remove Field
        $(document).on('click', '.remove-field-btn', function() {
            $(this).closest('.dynamic-field').remove();
        });

        // Handle form submission to include dynamic fields
        $('.wpcf7-form').on('submit', function() {
            var form = $(this);
            
            // Collect all researcher values
            var researchers = [];
            researchers.push($('input[name="researchers"]').val());
            $('.additional-researchers input').each(function() {
                if ($(this).val()) {
                    researchers.push($(this).val());
                }
            });
            
            // Collect all reference values
            var references = [];
            var mainRef = $('input[name="references"]').val();
            if (mainRef) references.push(mainRef);
            $('.additional-references input').each(function() {
                if ($(this).val()) {
                    references.push($(this).val());
                }
            });
            
            // Add hidden fields with combined values
            if (researchers.length > 0) {
                form.append('<input type="hidden" name="all-researchers" value="' + researchers.join(', ') + '">');
            }
            if (references.length > 0) {
                form.append('<input type="hidden" name="all-references" value="' + references.join(', ') + '">');
            }
        });
    }, 500);
});
</script>

<?php get_footer(); ?>