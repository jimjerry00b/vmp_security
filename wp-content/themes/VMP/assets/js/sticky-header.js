/**
 * Sticky Header on Scroll
 * 
 * @package VMP_Security_Portal
 */

(function($) {
    'use strict';
    
    $(document).ready(function() {
        const header = $('#vmp-sticky-header');
        
        if (header.length === 0) {
            return;
        }
        
        const headerHeight = header.outerHeight();
        const scrollThreshold = 100; // Pixels to scroll before header becomes sticky
        
        // Store header height as CSS variable for content offset
        document.documentElement.style.setProperty('--sticky-header-height', headerHeight + 'px');
        
        // Handle scroll event
        let lastScroll = 0;
        let ticking = false;
        
        function handleScroll() {
            const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
            
            if (currentScroll > scrollThreshold) {
                // Add sticky class when scrolled past threshold
                if (!header.hasClass('sticky')) {
                    header.addClass('sticky');
                    $('body').addClass('sticky-header-active');
                }
            } else {
                // Remove sticky class when at top
                if (header.hasClass('sticky')) {
                    header.removeClass('sticky');
                    $('body').removeClass('sticky-header-active');
                }
            }
            
            lastScroll = currentScroll;
            ticking = false;
        }
        
        // Use requestAnimationFrame for better performance
        $(window).on('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(handleScroll);
                ticking = true;
            }
        });
        
        // Handle initial state on page load
        handleScroll();
    });
    
})(jQuery);
