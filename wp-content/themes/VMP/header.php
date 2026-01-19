<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo.ico">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    
    <?php wp_head(); ?>
    
    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
</head>
<body <?php body_class(); ?>>
    <button id="scrollTopBtn" title="Go to top">↑</button>
<?php wp_body_open(); ?>

<!-- Top Bar -->
<div class="bg-dark text-white py-1 desktop-only">
    <div class="container px-4">
        <div class="d-flex justify-content-between align-items-center">
            <div class="top-bar-left">
                <span class="me-2">Have you been hacked?</span>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('help'))); ?>" class="text-warning text-decoration-none fw-bold">Get Help</a>
            </div>
            <div class="top-bar-right d-flex align-items-center gap-3">
                <?php if (VMP_Auth::is_logged_in()): ?>
                    <span class="small"><?php echo esc_html(VMP_Auth::get_current_user_email()); ?></span>
                    <button id="vmp-logout-btn" class="btn btn-link text-white text-decoration-none p-0 small">Logout</button>
                <?php else: ?>
                    <a href="" id="create_acc" class="text-white text-decoration-none small">Create Account</a>
                    <a id="sign_in" href="<?php echo esc_url(get_permalink(get_page_by_path('login-page'))); ?>" class="text-white text-decoration-none small">Sign In</a>
                <?php endif; ?>
                <a href="#" class="text-white text-decoration-none position-relative">
                    <svg width="15" height="15" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    <span class="position-absolute top-0 start-100 top-20 badge rounded-pill bg-warning" style="font-size: 0.65rem;">0</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="bg-dark text-white py-1 mobile-only">
    <div class="container px-4">
        <div class="d-flex justify-content-between align-items-center">
            <div class="top-bar-left">
                <a href="#" class="text-warning text-decoration-none fw-bold">Get Help</a>
            </div>
            <div class="top-bar-right d-flex align-items-center gap-3">
                <?php if (VMP_Auth::is_logged_in()): ?>
                    <span class="small"><?php echo esc_html(VMP_Auth::get_current_user_email()); ?></span>
                    <button id="vmp-logout-btn" class="btn btn-link text-white text-decoration-none p-0 small">Logout</button>
                <?php else: ?>
                    <a href="" id="create_acc" class="text-white text-decoration-none" title="Create Account">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                    </a>
                    <a id="sign_in" href="<?php echo esc_url(get_permalink(get_page_by_path('login-page'))); ?>" class="text-white text-decoration-none" title="Sign In">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                    </a>
                <?php endif; ?>
                <a href="#" class="text-white text-decoration-none position-relative">
                    <svg width="15" height="15" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    <span class="position-absolute top-0 start-100 top-20 badge rounded-pill bg-warning" style="font-size: 0.65rem;">0</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<header id="vmp-sticky-header">
    <nav class="navbar navbar-expand-lg navbar-dark py-3">
        <div class="container px-4">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center me-5" href="<?php echo esc_url(home_url('/')); ?>">
                <img style="width: 35px; height: auto;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="VMP&trade; Security Logo" class="me-2">
                <span class="fw-bold fs-5">VMP&trade; Security</span>
            </a>
            
            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <svg width="30" height="30" fill="#000000" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </button>
            
            <!-- Navigation Menu -->
            <div class="collapse navbar-collapse" id="mainNav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center',
                    'container' => false,
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 3,
                    'walker' => new VMP_Mega_Menu_Walker()
                ));
                ?>

                
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item">
                        <a href="<?php echo esc_url(home_url('pricing')); ?>" class="btn btn-primary btn-sm fw-bold">View Pricing</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
</header>