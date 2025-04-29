<?php //phpcs:ignore

if (!defined('ABSPATH')) {
    exit;
}

?>

<!--Site Footer Three Start-->
<footer class="site-footer-three">
    <div class="site-footer-three__wrap">
        <div class="site-footer-three__shape-1"></div>
        <div class="site-footer-three__shape-2"></div>
        <div class="site-footer-three__top">
            <div class="container">
                <div class="site-footer-three__top-inner">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__about">
                                <div class="footer-widget__about-logo">
                                    <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
                                        <?php the_custom_logo(); ?>
                                    <?php else : ?>
                                        <a href="<?php echo esc_url(home_url('/')); ?>">
                                            <span style="font-size: 20px; font-weight: bold;"><?php bloginfo('name'); ?></span>
                                        </a>
                                    <?php endif ?>
                                </div>
                                <div class="footer-widget__contact-info">
                                    <ul class="footer-widget__contact-list list-unstyled">
                                        <li>
                                            <div class="footer-widget__contact-icon-box">
                                                <span class="icon-pin"></span>
                                                <p>Alamat</p>
                                            </div>
                                            <p class="footer-widget__contact-text">
                                                <?= esc_html(get_theme_mod('rct_contact_settings_address')) ?>
                                            </p>
                                        </li>
                                        <li>
                                            <div class="footer-widget__contact-icon-box">
                                                <span class="icon-phone"></span>
                                                <p>Contact</p>
                                            </div>
                                            <p class="footer-widget__contact-text">
                                                <a href="<?= esc_url(rct_get_contact_link(get_theme_mod('rct_contact_settings_contact_1'), get_theme_mod('rct_contact_settings_contact_1_link'))) ?>"><?= esc_html(get_theme_mod('rct_contact_settings_contact_1')) ?></a>
                                            </p>
                                            <p class="footer-widget__contact-text">
                                                <a href="<?= esc_url(rct_get_contact_link(get_theme_mod('rct_contact_settings_contact_2'), get_theme_mod('rct_contact_settings_contact_2_link'))) ?>"><?= esc_html(get_theme_mod('rct_contact_settings_contact_2')) ?></a>
                                            </p>
                                        </li>
                                        <li>
                                            <div class="footer-widget__contact-icon-box">
                                                <span class="icon-mail"></span>
                                                <p>Email</p>
                                            </div>
                                            <p class="footer-widget__contact-text">
                                                <a href="mailto:<?= esc_attr(get_theme_mod('rct_contact_settings_email')) ?>"><?= esc_html(get_theme_mod('rct_contact_settings_email')) ?></a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="site-footer-three__right">
                                <ul class="list-unstyled site-footer-three__menu">
                                    <?php rct_menu_items('footer') ?>
                                </ul>
                                <div class="site-footer-three__social">
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
                                <div class="site-footer-three__img-box">
                                    <div class="site-footer-three__road">
                                        <img src="<?= esc_url(rct_asset('/assets/images/shapes/site-footer-three-road.png')) ?>" alt="" />
                                    </div>
                                    <div class="site-footer-three__img">
                                        <!-- <img src="assets/images/resources/site-footer-three-img.png" alt="" /> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <div class="site-footer__copyright">
                                <p class="site-footer__copyright-text"> Copyright © <?= date('Y') ?> <a href="<?= esc_url(home_url('/')) ?>"><?= esc_html(get_bloginfo('name')) ?></a>. All rights reserved. </p>
                            </div>
                            <div class="site-footer__bottom-menu-box">
                                <ul class="list-unstyled site-footer__bottom-menu">
                                    <?php rct_menu_items('footer-bottom') ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer Three End-->
