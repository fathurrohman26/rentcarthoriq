<?php

if (!defined('ABSPATH')) {
    exit; // Silence is golden
}

?>

<?php get_template_part('template-parts/footer') ?>

</div> <!-- ./wrapper -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler">
            <i class="fa fa-times"></i>
        </span>
        <div class="logo-box">
            <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="logo image">
            <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <span style="font-size: 20px; font-weight: bold;"><?php bloginfo('name'); ?></span>
                </a>
            <?php endif ?>
            </a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:<?= esc_attr(get_theme_mod('rct_contact_settings_email')) ?>"><?= esc_html(get_theme_mod('rct_contact_settings_email')) ?></a>
            </li>
            <li>
                <i class="fas fa-phone"></i>
                <a href="<?= esc_url(get_theme_mod('rct_contact_settings_contact_1_link')) ?>"><?= esc_html(get_theme_mod('rct_contact_settings_contact_1')) ?></a>
            </li>
            <li>
                <i class="fas fa-phone"></i>
                <a href="<?= esc_url(get_theme_mod('rct_contact_settings_contact_2_link')) ?>"><?= esc_html(get_theme_mod('rct_contact_settings_contact_2')) ?></a>
            </li>
        </ul>
        <!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="<?= esc_url(get_theme_mod('rct_social_settings_x_url')) ?>" class="fab fa-twitter"></a>
                <a href="<?= esc_url(get_theme_mod('rct_social_settings_facebook_url')) ?>" class="fab fa-facebook-square"></a>
                <a href="<?= esc_url(get_theme_mod('rct_social_settings_linkedin_url')) ?>" class="fab fa-linkedin"></a>
                <a href="<?= esc_url(get_theme_mod('rct_social_settings_instagram_url')) ?>" class="fab fa-instagram"></a>
            </div>
            <!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__top -->
    </div>
    <!-- /.mobile-nav__content -->
</div>

<!-- /.mobile-nav__wrapper -->
<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label>
            <!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top__wrapper">
        <span class="scroll-to-top__inner"></span>
    </span>
    <span class="scroll-to-top__text"> Go Back Top</span>
</a>

<?php wp_footer(); ?>

</body>
</html>
