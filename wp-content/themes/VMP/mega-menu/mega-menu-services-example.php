<?php
/**
 * Services Mega Menu Template
 * 
 * Custom mega menu template for the "Services" menu item
 * Rename this file to match your menu slug or ID:
 * - mega-menu-services.php (for menu item titled "Services")
 * - mega-menu-123.php (for menu item with ID 123)
 * 
 * To find menu item ID: Appearance → Menus → inspect the menu item
 */
?>
<!-- Mega Menu Dropdown -->
<div class="mega-menu-wrapper" id="megaMenuDropdown-<?php echo esc_attr($parent_item->ID); ?>">
    <div class="mega-menu-container">
        <div class="container px-4">
            <div class="row">
                <!-- Overview -->
                <div class="col-lg-3 col-md-6 mega-menu-column">
                    <h6>Overview</h6>
                    <ul class="mega-menu-links">
                        <li><a href="<?php echo esc_url(home_url('/dashboard')); ?>">Dashboard</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                    </ul>
                </div>
                
                <!-- Vulnerability Database -->
                <div class="col-lg-3 col-md-6 mega-menu-column">
                    <h6>Vulnerability Database</h6>
                    <ul class="mega-menu-links">
                        <li><a href="<?php echo esc_url(home_url('/vulnerabilities')); ?>">All Vulnerabilities</a></li>
                        <li><a href="<?php echo esc_url(home_url('/plugins')); ?>">Plugins</a></li>
                        <li><a href="<?php echo esc_url(home_url('/themes')); ?>">Themes</a></li>
                        <li><a href="<?php echo esc_url(home_url('/wordpress-core')); ?>">WordPress Core</a></li>
                        <li><a href="<?php echo esc_url(home_url('/researchers')); ?>">Researchers</a></li>
                    </ul>
                </div>
                
                <!-- Bug Bounty Program -->
                <div class="col-lg-3 col-md-6 mega-menu-column">
                    <h6>Bug Bounty Program</h6>
                    <ul class="mega-menu-links">
                        <li><a href="<?php echo esc_url(home_url('/bug-bounty/overview')); ?>">Overview</a></li>
                        <li><a href="<?php echo esc_url(home_url('/bug-bounty/submit')); ?>">Submit Vulnerability</a></li>
                        <li><a href="<?php echo esc_url(home_url('/bug-bounty/register')); ?>">Register</a></li>
                        <li><a href="<?php echo esc_url(home_url('/bug-bounty/dashboard')); ?>">Access Dashboard</a></li>
                    </ul>
                </div>
                
                <!-- Vulnerability Management & Documentation -->
                <div class="col-lg-3 col-md-6 mega-menu-column">
                    <h6>Vulnerability Management</h6>
                    <ul class="mega-menu-links">
                        <li><a href="<?php echo esc_url(home_url('/vulnerability-management/overview')); ?>">Overview</a></li>
                        <li><a href="<?php echo esc_url(home_url('/vulnerability-management/register')); ?>">Register</a></li>
                        <li><a href="<?php echo esc_url(home_url('/vulnerability-management/portal')); ?>">Access Portal</a></li>
                    </ul>
                    
                    <h6 style="margin-top: 30px;">Documentation</h6>
                    <ul class="mega-menu-links">
                        <li><a href="<?php echo esc_url(home_url('/documentation/api')); ?>">API Access</a></li>
                        <li><a href="<?php echo esc_url(home_url('/documentation/webhook')); ?>">Webhook Integration</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
