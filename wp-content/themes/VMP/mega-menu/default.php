<?php
/**
 * Default Mega Menu Template
 * 
 * This is the fallback template when no custom template is found
 * Edit this file to customize the default mega menu appearance
 * 
 * Available variables:
 * - $parent_item: The parent menu item object
 * - $this->mega_menu_items: Array of child menu items
 */
?>
<!-- Mega Menu Dropdown -->
<div class="mega-menu-wrapper" id="megaMenuDropdown-<?php echo esc_attr($parent_item->ID); ?>">
    <div class="mega-menu-container">
        <div class="container px-4">
            <div class="row">
                <div class="col-12">
                    <p class="text-white">Default Mega Menu Template - Customize in /mega-menu/default.php</p>
                    <p class="text-white"><small>Create custom templates: mega-menu-{slug}.php or mega-menu-{id}.php</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
