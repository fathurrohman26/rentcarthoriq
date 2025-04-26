<?php

if (!defined('ABSPATH')) {
    exit;
}

$rct_pricing_query = new WP_Query(array(
    'post_type' => 'pricing',
    'posts_per_page' => -1,
));

$rct_bg_white = (isset($args) && isset($args['white'])) ? $args['white'] === true : false;

?>

<!--Pricing page Start -->
<section class="pricing-one pricing-page" <?= $rct_bg_white ? 'style="background: #f4f4f4 !important"' : '' ?>>
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">Pricing</span>
            </div>
            <h2 class="section-title__title title-animation">
                <?= esc_html(get_theme_mod('rct_pricing_settings_title')) ?>
            </h2>
        </div>
        <div class="pricing-one__main-tab-box tabs-box">
            <div class="tabs-content">
                <!--tab-->
                <div class="tab active-tab" id="monthly">
                    <div class="pricing-one__inner">
                        <div class="row">
                            <?php if ($rct_pricing_query->have_posts()) : ?>
                                <?php while ($rct_pricing_query->have_posts()) : ?>
                                    <?php $rct_pricing_query->the_post() ?>
                                    <!--Pricing One Single Start -->
                                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                                        <div class="pricing-one__single">
                                            <div class="pricing-one__title-box">
                                                <h2 class="pricing-one__title">
                                                    <?php the_title() ?>
                                                </h2>
                                            </div>
                                            <div class="blog-three__img-box">
                                                <div class="blog-three__img">
                                                    <?php
                                                    $image = get_field('image');
                                                    if ($image && isset($image['ID'])) {
                                                        echo wp_get_attachment_image($image['ID'], '300x299', false);
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="pricing-one__price-and-icon-box">
                                                <div class="pricing-one__price-box">
                                                    <h3 class="pricing-one__price">
                                                        Rp <?php the_field('price') ?>
                                                    </h3>
                                                </div>
                                            </div>
                                            <ul class="list-unstyled pricing-one__points">
                                                <?php for ($rct_pfi = 1; $rct_pfi <= 5; $rct_pfi++) : ?>
                                                    <?php $rct_ftext = trim(get_theme_mod('rct_pricing_settings_feature_' . $rct_pfi . '_text')) ?>
                                                    <?php if (!empty($rct_ftext)) : ?>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-arrow-right"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p><?= esc_html($rct_ftext) ?></p>
                                                            </div>
                                                        </li>
                                                    <?php endif ?>
                                                <?php endfor ?>
                                            </ul>
                                            <div class="pricing-one__btn-box">
                                                <a href="#" data-number="<?= esc_attr(get_theme_mod('rct_pricing_settings_button_wa_number')) ?>" data-price="<?= esc_attr(get_the_title()) ?>" data-title="<?= esc_attr(get_bloginfo('name')) ?>" class="thm-btn sewa-btn">
                                                    <?= esc_html(get_theme_mod('rct_pricing_settings_button_text', 'Hubungi Sekarang')) ?> <span class="icon-arrow-up-right"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Pricing One Single End -->
                                <?php endwhile ?>
                                <?php wp_reset_postdata() ?>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Pricing page End -->
