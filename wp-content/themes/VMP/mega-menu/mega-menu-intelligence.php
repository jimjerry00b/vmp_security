<?php
/**
 * Intelligence Mega Menu Template
 * 
 * Custom mega menu template for the "Intelligence" menu item
 * 
 * To activate:
 * 1. Go to Appearance → Menus
 * 2. Add/Find "Intelligence" menu item
 * 3. Add CSS class: has-mega-menu
 * 4. Save menu
 */
?>
<!-- Mega Menu Dropdown -->
<div class="mega-menu-wrapper" id="megaMenuDropdown-<?php echo esc_attr($parent_item->ID); ?>">
    <div class="mega-menu-container">
        <div class="container px-4">
            <div class="row">               

                <!-- Threat Intelligence -->
                <div class="col-lg-3 col-md-6 mega-menu-column">
                    <h6>Vulnerability Database</h6>
                    <ul class="mega-menu-links">
                        <li><a href="<?php echo esc_url(home_url('vulnerabilities')); ?>">All Vulnerabilities</a></li>
                        <li><a href="<?php echo esc_url(home_url('plugins')); ?>">Plugins</a></li>
                        <li><a href="<?php echo esc_url(home_url('themes')); ?>">Themes</a></li>
                        <li><a href="<?php echo esc_url(home_url('wordpress-core')); ?>">WordPress Core</a></li>
                        <li><a href="<?php echo esc_url(home_url('researchers')); ?>">Researchers</a></li>
                    </ul>
                </div>
                
                <!-- Analysis & Insights -->
                <div class="col-lg-3 col-md-6 mega-menu-column">
                    <h6>Bug Bounty Program</h6>
                    <ul class="mega-menu-links">
                        <li><a href="<?php echo esc_url(home_url('bug-bounty-program')); ?>">Overview</a></li>
                        <li><a href="<?php echo esc_url(home_url('vulnerabilities-submit')); ?>">Submit Vulnerability</a></li>
                        <li><a href="<?php echo esc_url(home_url('')); ?>">Register</a></li>
                        <li><a href="<?php echo esc_url(home_url('dashboard-page')); ?>">Access Dashboard</a></li>
                    </ul>
                </div>
                
                <!-- Resources -->
                <div class="col-lg-3 col-md-6 mega-menu-column">
                    <h6>Vulnerability Management</h6>
                    <ul class="mega-menu-links">
                        <li><a href="<?php echo esc_url(home_url('vulnerability-management-portal')); ?>">Overview</a></li>
                        <li><a href="<?php echo esc_url(home_url('')); ?>">Register</a></li>
                        <li><a href="<?php echo esc_url(home_url('login-page')); ?>">Access Portal</a></li>
                    </ul>
                </div>
                
                <!-- Tools & APIs -->
                <div class="col-lg-3 col-md-6 mega-menu-column">
                    <h6>Documentation</h6>
                    <ul class="mega-menu-links">
                        <li><a href="<?php echo esc_url(home_url('api-access')); ?>">API Access</a></li>
                        <li><a href="<?php echo esc_url(home_url('webhook-integration')); ?>">Webhook Integration</a></li>
                    </ul>
                </div>

                <!-- Threat Intelligence -->
                <div class="col-lg-3 col-md-6 mega-menu-column">
                    <h6>Overview</h6>
                    <ul class="mega-menu-links">
                        <li><a href="<?php echo esc_url(home_url('/dashboard-page')); ?>">Dashboard</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</div>
