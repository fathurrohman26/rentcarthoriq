<?php

/**
 * Template Name: Gallery Template
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$rct_left_items = [];
$rct_right_items = [];

$rct_gallery_query = new WP_Query(array(
    'post_type' => 'rct-gallery',
    'posts_per_page' => -1,
));

if ($rct_gallery_query->have_posts()) {
    $i = 0;
    while ($rct_gallery_query->have_posts()) {
        $rct_gallery_query->the_post();

        $item_html = '
            <li>
                <div class="gallery-three__img">
                    <img src="' . esc_url(get_the_post_thumbnail_url(get_the_ID(), '630x350')) . '" alt="' . esc_attr(get_the_title()) . '" />
                    <div class="gallery-three__icon">
                        <a class="img-popup" href="' . esc_url(get_the_post_thumbnail_url(get_the_ID(), '630x350')) . '">
                            <span class="icon-arrow-up-right-two"></span>
                        </a>
                    </div>
                </div>
            </li>
        ';

        if ($i % 2 === 0) {
            $rct_left_items[] = $item_html;
        } else {
            $rct_right_items[] = $item_html;
        }

        $i++;
    }
    wp_reset_postdata();
}
?>


<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__wrap">
        <div class="page-header__shape-1"></div>
        <div class="container">
            <div class="page-header__inner">
                <div class="page-header__shape-2"></div>
                <div class="page-header__shape-3"></div>
                <div class="page-header__shape-4"></div>
                <div class="page-header__img-1">
                    <!-- <img src="assets/images/resources/page-header-img-1.png" alt="" /> -->
                    <div class="page-header__shape-5">
                        <!-- <img src="<?= rct_asset('/assets/images/shapes/page-header-shape-5.png') ?>" alt="" /> -->
                    </div>
                </div>
                <h2><?php the_title() ?></h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li>
                            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                        </li>
                        <li>
                            <span class="icon-angle-right"></span>
                        </li>
                        <li><?php the_title() ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Gallery Three Start -->
<section class="gallery-three">
    <div class="gallery-three__wrap">
        <div class="section-title-two text-center sec-title-animation animation-style1">
            <div class="section-title-two__tagline-box justify-content-center">
                <div class="section-title-two__tagline-shape-1"></div>
                <span class="section-title-two__tagline">Latest Gallery</span>
                <div class="section-title-two__tagline-shape-1"></div>
            </div>
            <h2 class="section-title-two__title title-animation"> <?php bloginfo('name') ?> <br /> Collections </h2>
        </div>
        <ul class="gallery-three__list list-unstyled marquee_mode-2">
            <?= implode("\n", $rct_left_items) ?>
        </ul>
        <ul class="gallery-three__list gallery-three__list--two list-unstyled marquee_mode-3">
            <?= implode("\n", $rct_right_items) ?>
        </ul>
    </div>
</section>
<!--Gallery Three End -->

<?php



get_footer();
