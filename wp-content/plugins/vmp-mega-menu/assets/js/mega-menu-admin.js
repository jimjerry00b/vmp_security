/**
 * VMP Mega Menu Admin JavaScript
 * Handles admin interface interactions
 */

(function($) {
    'use strict';
    
    $(document).ready(function() {
        initMegaMenuAdmin();
    });
    
    /**
     * Initialize admin functionality
     */
    function initMegaMenuAdmin() {
        // Toggle column count visibility based on mega menu checkbox
        $(document).on('change', '.vmp-mega-menu-toggle', function() {
            const $checkbox = $(this);
            const $columnField = $checkbox.closest('.vmp-mega-menu-options').find('.vmp-mega-menu-columns-field');
            
            if ($checkbox.is(':checked')) {
                $columnField.slideDown(200);
            } else {
                $columnField.slideUp(200);
            }
        });
        
        // Add visual indicator to menu items with mega menu enabled
        $(document).on('change', '.vmp-mega-menu-toggle', function() {
            const $menuItem = $(this).closest('.menu-item');
            const $itemTitle = $menuItem.find('.menu-item-title');
            
            if ($(this).is(':checked')) {
                if (!$itemTitle.find('.mega-menu-indicator').length) {
                    $itemTitle.append(' <span class="mega-menu-indicator" style="color: #2271b1; font-weight: bold;">[Mega Menu]</span>');
                }
            } else {
                $itemTitle.find('.mega-menu-indicator').remove();
            }
        });
        
        // Initialize indicators on page load
        $('.vmp-mega-menu-toggle:checked').each(function() {
            const $menuItem = $(this).closest('.menu-item');
            const $itemTitle = $menuItem.find('.menu-item-title');
            
            if (!$itemTitle.find('.mega-menu-indicator').length) {
                $itemTitle.append(' <span class="mega-menu-indicator" style="color: #2271b1; font-weight: bold;">[Mega Menu]</span>');
            }
        });
    }
    
})(jQuery);
