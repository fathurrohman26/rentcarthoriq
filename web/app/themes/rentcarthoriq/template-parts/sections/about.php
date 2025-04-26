<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<!--About Three Start -->
<section class="about-three">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-three__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-three__img">
                        <img src="<?= esc_url(get_theme_mod('rct_about_settings_image')) ?>" alt=""  />
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-three__right">
                    <div class="section-title-two text-left sec-title-animation animation-style1">
                        <div class="section-title-two__tagline-box">
                            <span class="section-title-two__tagline">About Us</span>
                            <div class="section-title-two__tagline-shape-1"></div>
                        </div>
                        <h2 class="section-title-two__title title-animation">
                            <?= esc_html(get_theme_mod('rct_about_settings_title')) ?>
                        </h2>
                    </div>
                    <p class="about-three__text">
                        <?= wp_kses(nl2br(get_theme_mod('rct_about_settings_content')), ['b' => [], 'i' => [], 'span' => [], 'br' => [], 'u' => []])  ?>
                    </p>
                    <div class="about-three__btn-box">
                        <a href="<?= esc_url(get_theme_mod('rct_about_settings_button_link')) ?>" class="thm-btn">
                            <?= esc_html(get_theme_mod('rct_about_settings_button_text')) ?> <span class="icon-arrow-up-right"></span>
                        </a>
                    </div>
                    <div class="about-three__counter">
                        <ul class="list-unstyled about-three__counter-list">
                            <?php for ($rct_abf = 1; $rct_abf <= 3; $rct_abf++) : ?>
                                <li>
                                    <div class="about-three__counter-single">
                                        <div class="about-three__counter-count-box">
                                            <h3 class="odometer" data-count="<?= esc_attr(get_theme_mod('rct_about_settings_counter_stats_' . $rct_abf . '_value')) ?>">00</h3>
                                            <span><?= esc_html(get_theme_mod('rct_about_settings_counter_stats_' . $rct_abf . '_tag')) ?></span>
                                        </div>
                                        <p class="about-three__counter-text">
                                            <?= esc_html(get_theme_mod('rct_about_settings_counter_stats_' . $rct_abf . '_title')) ?>
                                        </p>
                                    </div>
                                </li>
                            <?php endfor ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Three End -->
