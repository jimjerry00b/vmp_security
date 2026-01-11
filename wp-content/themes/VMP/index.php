<?php
/**
 * Default Index Template - Landing Page
 * 
 * @package VMP_Security_Portal
 */

get_header();
?>

<div class="vmp-home-page">
    <div class="vmp-container">
        <div class="vmp-hero">
            <div class="vmp-hero-badge">
                <svg width="80" height="80" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="40" rx="8" fill="#2271b1"/>
                    <path d="M20 10L12 16V28L20 34L28 28V16L20 10Z" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                    <path d="M20 20L16 22V26L20 28L24 26V22L20 20Z" fill="white"/>
                </svg>
            </div>
            <h1>Newton WordPress Security Portal</h1>
            <p class="vmp-hero-subtitle">Manage your WordPress security plugins and licenses from one centralized dashboard.</p>
            
            <div class="vmp-hero-actions">
                <?php if (VMP_Auth::is_logged_in()): ?>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('dashboard-page'))); ?>" class="vmp-btn vmp-btn-primary vmp-btn-lg">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg>
                        Go to Dashboard
                    </a>
                <?php else: ?>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('login-page'))); ?>" class="vmp-btn vmp-btn-primary vmp-btn-lg">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                            <polyline points="10 17 15 12 10 7"></polyline>
                            <line x1="15" y1="12" x2="3" y2="12"></line>
                        </svg>
                        Login to Your Account
                    </a>
                    <a href="#features" class="vmp-btn vmp-btn-secondary vmp-btn-lg">
                        Learn More
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <div id="features" class="vmp-features">
            <div class="vmp-feature">
                <div class="vmp-feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#2271b1" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                </div>
                <h3>Centralized Security Management</h3>
                <p>Manage all your WordPress security plugin installations from a single, secure dashboard. Monitor multiple websites effortlessly.</p>
            </div>

            <div class="vmp-feature">
                <div class="vmp-feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#2271b1" stroke-width="2">
                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                        <line x1="1" y1="10" x2="23" y2="10"></line>
                    </svg>
                </div>
                <h3>License Tracking</h3>
                <p>Monitor your premium licenses and activation counts in real-time. See exactly which sites are using your licenses and track usage limits.</p>
            </div>

            <div class="vmp-feature">
                <div class="vmp-feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#2271b1" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                    </svg>
                </div>
                <h3>Real-time Status Monitoring</h3>
                <p>View plugin versions, WordPress versions, PHP versions, and last activity timestamps for all your protected sites at a glance.</p>
            </div>
        </div>

        <div class="vmp-cta-section">
            <div class="vmp-cta-content">
                <h2>Protect Your WordPress Sites Today</h2>
                <p>Join thousands of WordPress administrators using Newton Security to protect their websites.</p>
                <?php if (!VMP_Auth::is_logged_in()): ?>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('login-page'))); ?>" class="vmp-btn vmp-btn-primary vmp-btn-lg">
                        Get Started Now
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
