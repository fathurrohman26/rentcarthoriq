<?php

if (!defined('ABSPATH')) {
    exit;
}
?>
<header class="main-header-three">
    <div class="main-header-three__wrapper">
        <div class="main-menu-three__top">
            <div class="container">
                <div class="main-menu-three__top-inner">
                    <ul class="list-unstyled main-menu-three__contact-list">
                        <li>
                            <div class="icon">
                                <i class="icon-pin"></i>
                            </div>
                            <div class="text">
                                <p><?= esc_html(get_theme_mod('rct_header_settings_location')) ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="icon-clock"></i>
                            </div>
                            <div class="text">
                                <p><?= esc_html(get_theme_mod('rct_header_settings_opening_hours')) ?></p>
                            </div>
                        </li>
                    </ul>
                    <div class="main-menu-three__top-right">
                        <div class="main-menu-three__social">
                            <a href="<?= esc_url(get_theme_mod('rct_social_settings_facebook_url')) ?>">
                                <i class="icon-facebook-f"></i>
                            </a>
                            <a href="<?= esc_url(get_theme_mod('rct_social_settings_instagram_url')) ?>">
                                <i class="icon-instagram"></i>
                            </a>
                            <a href="<?= esc_url(get_theme_mod('rct_social_settings_x_url')) ?>">
                                <i class="icon-Vector"></i>
                            </a>
                            <a href="<?= esc_url(get_theme_mod('rct_social_settings_linkedin_url')) ?>">
                                <i class="icon-linkedin-in-two"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu main-menu-three">
            <div class="main-menu-three__wrapper">
                <div class="container">
                    <div class="main-menu-three__wrapper-inner">
                        <div class="main-menu-three__left">
                            <div class="main-header-three__logo">
                                <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
                                    <?php the_custom_logo(); ?>
                                <?php else : ?>
                                    <a href="<?php echo esc_url(home_url('/')); ?>">
                                        <span style="font-size: 20px; font-weight: bold;"><?php bloginfo('name'); ?></span>
                                    </a>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="main-menu-three__right">
                            <div class="main-menu-three__main-menu-box">
                                <a href="#" class="mobile-nav__toggler">
                                    <i class="fa fa-bars"></i>
                                </a>
                                <?php
                                wp_nav_menu([
                                    'theme_location' => 'primary',
                                    'menu_class'     => 'main-menu__list',
                                    'container'      => false,
                                    'walker'         => new RCT_Header_Nav_Menu_Walker()
                                ]);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="stricky-header stricked-menu main-menu main-menu-three">
    <div class="sticky-header__content"></div>
    <!-- /.sticky-header__content -->
</div>
<!-- /.stricky-header -->
