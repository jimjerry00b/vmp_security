/**
 * VMP Mega Menu JavaScript
 * Handles hover behavior, accessibility, and mobile responsiveness
 */

(function($) {
    'use strict';
    
    $(document).ready(function() {
        initMegaMenu();
    });
    
    /**
     * Initialize mega menu functionality
     */
    function initMegaMenu() {
        const $megaMenuItems = $('.dropdown').has('.mega-menu');
        
        // Desktop hover behavior
        if (window.innerWidth >= 992) {
            initDesktopBehavior($megaMenuItems);
        }
        
        // Mobile behavior
        if (window.innerWidth < 992) {
            initMobileBehavior($megaMenuItems);
        }
        
        // Accessibility enhancements
        enhanceAccessibility($megaMenuItems);
        
        // Handle window resize
        let resizeTimer;
        $(window).on('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (window.innerWidth >= 992) {
                    initDesktopBehavior($megaMenuItems);
                } else {
                    initMobileBehavior($megaMenuItems);
                }
            }, 250);
        });
    }
    
    /**
     * Desktop hover behavior
     */
    function initDesktopBehavior($items) {
        $items.each(function() {
            const $dropdown = $(this);
            const $megaMenu = $dropdown.find('.mega-menu');
            const $toggle = $dropdown.find('.dropdown-toggle');
            let hoverTimer;
            
            // Mouse enter
            $dropdown.on('mouseenter.megamenu', function() {
                clearTimeout(hoverTimer);
                
                // Close other mega menus
                $('.mega-menu').not($megaMenu).removeClass('show');
                $('.dropdown-toggle').not($toggle).attr('aria-expanded', 'false');
                
                // Open this mega menu with slight delay
                hoverTimer = setTimeout(function() {
                    $megaMenu.addClass('show');
                    $toggle.attr('aria-expanded', 'true');
                }, 150);
            });
            
            // Mouse leave
            $dropdown.on('mouseleave.megamenu', function() {
                clearTimeout(hoverTimer);
                
                // Close with slight delay
                hoverTimer = setTimeout(function() {
                    $megaMenu.removeClass('show');
                    $toggle.attr('aria-expanded', 'false');
                }, 200);
            });
            
            // Prevent Bootstrap's default dropdown behavior
            $toggle.on('click.megamenu', function(e) {
                e.preventDefault();
                e.stopPropagation();
            });
        });
    }
    
    /**
     * Mobile behavior - show simplified menu
     */
    function initMobileBehavior($items) {
        // Remove desktop hover events
        $items.off('mouseenter.megamenu mouseleave.megamenu');
        
        $items.each(function() {
            const $dropdown = $(this);
            const $toggle = $dropdown.find('.dropdown-toggle');
            const $megaMenu = $dropdown.find('.mega-menu');
            
            // Hide mega menu on mobile (CSS handles this too)
            $megaMenu.hide();
            
            // Show regular dropdown if exists
            const $regularDropdown = $dropdown.find('.dropdown-menu').not('.mega-menu');
            
            if ($regularDropdown.length) {
                // Use click to toggle on mobile
                $toggle.off('click.megamenu').on('click.megamenu', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const isExpanded = $(this).attr('aria-expanded') === 'true';
                    
                    // Close all other dropdowns
                    $('.dropdown-menu').not($regularDropdown).slideUp(200);
                    $('.dropdown-toggle').not($toggle).attr('aria-expanded', 'false');
                    
                    // Toggle this dropdown
                    if (isExpanded) {
                        $regularDropdown.slideUp(200);
                        $(this).attr('aria-expanded', 'false');
                    } else {
                        $regularDropdown.slideDown(200);
                        $(this).attr('aria-expanded', 'true');
                    }
                });
            }
        });
    }
    
    /**
     * Enhance accessibility
     */
    function enhanceAccessibility($items) {
        $items.each(function() {
            const $dropdown = $(this);
            const $toggle = $dropdown.find('.dropdown-toggle');
            const $megaMenu = $dropdown.find('.mega-menu');
            const megaMenuId = 'mega-menu-' + Math.random().toString(36).substr(2, 9);
            
            // Add ARIA attributes
            $megaMenu.attr({
                'id': megaMenuId,
                'role': 'menu',
                'aria-hidden': 'true'
            });
            
            $toggle.attr({
                'aria-controls': megaMenuId,
                'aria-haspopup': 'true',
                'aria-expanded': 'false'
            });
            
            // Add role to links
            $megaMenu.find('.mega-menu-link').attr('role', 'menuitem');
            
            // Keyboard navigation
            $toggle.on('keydown.megamenu', function(e) {
                // Enter or Space to open
                if (e.keyCode === 13 || e.keyCode === 32) {
                    e.preventDefault();
                    
                    const isExpanded = $(this).attr('aria-expanded') === 'true';
                    
                    if (isExpanded) {
                        closeMegaMenu($megaMenu, $toggle);
                    } else {
                        openMegaMenu($megaMenu, $toggle);
                        // Focus first link
                        setTimeout(function() {
                            $megaMenu.find('.mega-menu-link').first().focus();
                        }, 100);
                    }
                }
                
                // Escape to close
                if (e.keyCode === 27) {
                    closeMegaMenu($megaMenu, $toggle);
                    $toggle.focus();
                }
            });
            
            // Close on Escape inside mega menu
            $megaMenu.on('keydown.megamenu', function(e) {
                if (e.keyCode === 27) {
                    closeMegaMenu($megaMenu, $toggle);
                    $toggle.focus();
                }
            });
            
            // Trap focus inside mega menu when open
            $megaMenu.on('keydown.megamenu', '.mega-menu-link:last', function(e) {
                if (e.keyCode === 9 && !e.shiftKey) { // Tab without Shift
                    e.preventDefault();
                    $megaMenu.find('.mega-menu-link').first().focus();
                }
            });
            
            $megaMenu.on('keydown.megamenu', '.mega-menu-link:first', function(e) {
                if (e.keyCode === 9 && e.shiftKey) { // Shift+Tab
                    e.preventDefault();
                    $megaMenu.find('.mega-menu-link').last().focus();
                }
            });
        });
        
        // Close mega menu when clicking outside
        $(document).on('click.megamenu', function(e) {
            if (!$(e.target).closest('.dropdown').length) {
                $('.mega-menu').removeClass('show').attr('aria-hidden', 'true');
                $('.dropdown-toggle').attr('aria-expanded', 'false');
            }
        });
    }
    
    /**
     * Open mega menu
     */
    function openMegaMenu($megaMenu, $toggle) {
        // Close all other mega menus
        $('.mega-menu').not($megaMenu).removeClass('show').attr('aria-hidden', 'true');
        $('.dropdown-toggle').not($toggle).attr('aria-expanded', 'false');
        
        // Open this mega menu
        $megaMenu.addClass('show').attr('aria-hidden', 'false');
        $toggle.attr('aria-expanded', 'true');
    }
    
    /**
     * Close mega menu
     */
    function closeMegaMenu($megaMenu, $toggle) {
        $megaMenu.removeClass('show').attr('aria-hidden', 'true');
        $toggle.attr('aria-expanded', 'false');
    }
    
    /**
     * Smooth scrolling for anchor links in mega menu
     */
    $('.mega-menu-link[href^="#"]').on('click', function(e) {
        const target = $(this.getAttribute('href'));
        
        if (target.length) {
            e.preventDefault();
            
            // Close mega menu
            $(this).closest('.mega-menu').removeClass('show').attr('aria-hidden', 'true');
            $(this).closest('.dropdown').find('.dropdown-toggle').attr('aria-expanded', 'false');
            
            // Smooth scroll
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 100
            }, 600);
        }
    });
    
})(jQuery);
