<?php

if (!defined('ABSPATH')) {
    exit;
}

$rct_slider_query = new WP_Query(array(
    'post_type' => 'rct-slider',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
));
?>

<!-- Main Slider Three Start -->
<section class="main-slider-three">
    <div class="main-slider-three__wrap">
        <div class="main-slider-three__carousel owl-carousel owl-theme">
            <?php if ($rct_slider_query->have_posts()) : ?>
                <?php while ($rct_slider_query->have_posts()) : ?>
                    <?php $rct_slider_query->the_post() ?>
                    <!-- Slider Start -->
                    <div class="item">
                        <div class="main-slider-three__img-box">
                            <div class="main-slider-three__shape-1">
                                <img src="<?= rct_asset('/assets/images/shapes/main-slider-three-shape-1.png') ?>" alt="" />
                            </div>
                            <div class="main-slider-three__img">
                                <?php
                                $image = get_field('image');
                                if ($image && isset($image['ID'])) {
                                    echo wp_get_attachment_image($image['ID'], '755x810', false);
                                } else {
                                    echo '<img src="' . rct_asset('/assets/images/resources/main-slider-three-img-1.jpg') . '" alt="" />';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="container">
                            <div class="main-slider-three__content">
                                <h2 class="main-slider-three__title">
                                    <?= wp_kses(nl2br(get_field('title')), ['br' => [], 'span' => []]) ?>
                                </h2>
                                <p class="main-slider-three__text">
                                    <?= wp_kses(nl2br(get_field('description')), ['br' => []]) ?>
                                </p>
                                <div class="main-slider-three__btn">
                                    <a href="<?php the_field('button_link') ?>" class="thm-btn">
                                        <?php the_field('button_text') ?> <span class="icon-arrow-up-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider End -->
                <?php endwhile ?>
                <?php wp_reset_postdata() ?>
            <?php endif ?>
        </div>
        <div class="main-slider-three__shape-2"></div>
    </div>
</section>
<!--Main Slider Three End -->
