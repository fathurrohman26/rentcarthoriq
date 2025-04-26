<?php

if (!defined('ABSPATH')) {
    exit;
}

$rct_testimonial_query = new WP_Query(array(
    'post_type' => 'rct-testimonial',
    'posts_per_page' => -1,
));
?>

<!--Testimonial Three Start -->
<section class="testimonial-three">
    <div class="testimonial-three__inner">
        <div class="container">
            <div class="section-title-two text-left sec-title-animation animation-style2">
                <div class="section-title-two__tagline-box">
                    <span class="section-title-two__tagline">TESTIMONIAL</span>
                    <div class="section-title-two__tagline-shape-1"></div>
                </div>
                <h2 class="section-title-two__title title-animation"> Clients Testimonial </h2>
            </div>
            <div class="testimonial-three__carousel owl-theme owl-carousel">
                <?php if ($rct_testimonial_query->have_posts()) : ?>
                    <?php while ($rct_testimonial_query->have_posts()) : ?>
                        <?php $rct_testimonial_query->the_post(); ?>
                        <!--Testimonial Three Single Start -->
                        <div class="item">
                            <div class="testimonial-three__single">
                                <div class="testimonial-three__quote-and-ratting">
                                    <div class="testimonial-three__quote">
                                        <span class="fal fa-quote-right"></span>
                                    </div>
                                    <div class="testimonial-three__ratting">
                                        <?php
                                        $rct_testi_rating = intval(get_field('rating'));
                                        $rct_testi_rating = max(0, min(5, $rct_testi_rating));

                                        for ($i = 1; $i <= 5; $i++) {
                                            if ($i <= $rct_testi_rating) {
                                                echo '<span class="icon-star"></span>';
                                            } else {
                                                echo '<span class="last-icon icon-star"></span>';
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <p class="testimonial-three__text">
                                    <?= esc_html(the_field('content')) ?>
                                </p>
                                <div class="testimonial-three__client-box">
                                    <div class="testimonial-three__client-img">
                                        <?php
                                        $image = get_field('image');
                                        if ($image && isset($image['ID'])) {
                                            echo wp_get_attachment_image($image['ID'], '80x80', false, ['class' => '']);
                                        }
                                        ?>
                                    </div>
                                    <div class="testimonial-three__client-content">
                                        <h4>
                                            <a href="#"><?= esc_html(the_field('name')) ?></a>
                                        </h4>
                                        <p><?= esc_html(the_field('position')) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial Three Single End -->
                    <?php endwhile ?>
                    <?php wp_reset_postdata() ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>
<!--Testimonial Three End -->
