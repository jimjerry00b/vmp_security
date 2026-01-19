/**
 * Mega Menu JavaScript
 * Handles mega menu toggle and mobile accordion functionality
 * Supports multiple mega menus
 */

document.addEventListener('DOMContentLoaded', function() {
    // Get all mega menu toggles
    const megaMenuToggles = document.querySelectorAll('[data-mega-menu="true"]');
    
    if (megaMenuToggles.length === 0) {
        return;
    }
    
    // Setup each mega menu
    megaMenuToggles.forEach(function(toggle) {
        const toggleId = toggle.id;
        const parentId = toggleId.replace('megaMenuToggle-', '');
        const dropdown = document.getElementById('megaMenuDropdown-' + parentId);
        
        if (!dropdown) {
            return;
        }
        
        // Toggle mega menu on click
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Close other mega menus
            megaMenuToggles.forEach(function(otherToggle) {
                if (otherToggle !== toggle) {
                    const otherId = otherToggle.id.replace('megaMenuToggle-', '');
                    const otherDropdown = document.getElementById('megaMenuDropdown-' + otherId);
                    if (otherDropdown) {
                        otherDropdown.classList.remove('show');
                        otherToggle.classList.remove('active');
                    }
                }
            });
            
            // Toggle current mega menu
            dropdown.classList.toggle('show');
            toggle.classList.toggle('active');
        });
    });
    
    // Close mega menus when clicking outside
    document.addEventListener('click', function(e) {
        let clickedInside = false;
        
        megaMenuToggles.forEach(function(toggle) {
            const parentId = toggle.id.replace('megaMenuToggle-', '');
            const dropdown = document.getElementById('megaMenuDropdown-' + parentId);
            
            if (dropdown && (dropdown.contains(e.target) || toggle.contains(e.target))) {
                clickedInside = true;
            }
        });
        
        if (!clickedInside) {
            document.querySelectorAll('.mega-menu-wrapper').forEach(function(dropdown) {
                dropdown.classList.remove('show');
            });
            megaMenuToggles.forEach(function(toggle) {
                toggle.classList.remove('active');
            });
        }
    });
    
    // Mobile accordion functionality
    function initMobileAccordion() {
        const menuHeaders = document.querySelectorAll('.mega-menu-column h6');
        
        menuHeaders.forEach(function(header) {
            // Remove any existing click handlers
            const newHeader = header.cloneNode(true);
            header.parentNode.replaceChild(newHeader, header);
            
            newHeader.addEventListener('click', function() {
                if (window.innerWidth < 992) {
                    const links = this.nextElementSibling;
                    
                    // Close other sections
                    document.querySelectorAll('.mega-menu-column h6').forEach(function(h) {
                        if (h !== newHeader && h.classList.contains('active')) {
                            h.classList.remove('active');
                            const siblingLinks = h.nextElementSibling;
                            if (siblingLinks && siblingLinks.classList.contains('mega-menu-links')) {
                                siblingLinks.classList.remove('show');
                            }
                        }
                    });
                    
                    // Toggle current section
                    this.classList.toggle('active');
                    if (links && links.classList.contains('mega-menu-links')) {
                        links.classList.toggle('show');
                    }
                }
            });
        });
    }
    
    // Initialize accordion on load
    initMobileAccordion();
    
    // Reinitialize on window resize
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Reset accordion state on desktop
            if (window.innerWidth >= 992) {
                document.querySelectorAll('.mega-menu-column h6').forEach(function(h) {
                    h.classList.remove('active');
                });
                document.querySelectorAll('.mega-menu-links').forEach(function(links) {
                    links.classList.remove('show');
                });
            }
        }, 250);
    });
    
    // Close mega menus when navbar is collapsed (mobile)
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.getElementById('mainNav');
    
    if (navbarToggler && navbarCollapse) {
        navbarToggler.addEventListener('click', function() {
            if (navbarCollapse.classList.contains('show')) {
                document.querySelectorAll('.mega-menu-wrapper').forEach(function(dropdown) {
                    dropdown.classList.remove('show');
                });
                megaMenuToggles.forEach(function(toggle) {
                    toggle.classList.remove('active');
                });
            }
        });
    }
    
    // Prevent mega menus from closing when clicking inside
    document.querySelectorAll('.mega-menu-wrapper').forEach(function(dropdown) {
        dropdown.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });
});
