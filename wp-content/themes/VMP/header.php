<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="vmp-header">
    <div class="vmp-container">
        <div class="vmp-header-content">
            <div class="vmp-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="8" fill="#2271b1"/>
                        <path d="M20 10L12 16V28L20 34L28 28V16L20 10Z" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                        <path d="M20 20L16 22V26L20 28L24 26V22L20 20Z" fill="white"/>
                    </svg>
                    <span>VMP Security</span>
                </a>
            </div>
            
            <?php if (VMP_Auth::is_logged_in()): ?>
            <nav class="vmp-nav">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('dashboard-page'))); ?>" class="vmp-nav-link">
                    Dashboard
                </a>
                <div class="vmp-user-menu">
                    <span class="vmp-user-email"><?php echo esc_html(VMP_Auth::get_current_user_email()); ?></span>
                    <button id="vmp-logout-btn" class="vmp-btn-link">Logout</button>
                </div>
            </nav>
            <?php endif; ?>
        </div>
    </div>
</header>

<main class="vmp-main">
