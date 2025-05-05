<?php

/**
 * Template Name: Blog Template
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$rct_blog_query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 24,
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
));
$rct_blog_delay = 100;
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

<!--Blog Three Start-->
<section class="blog-three" style="background: #f4f4f4 !important">
    <div class="container">
        <div class="section-title-two text-center sec-title-animation animation-style1">
            <div class="section-title-two__tagline-box justify-content-center">
                <div class="section-title-two__tagline-shape-1"></div>
                <span class="section-title-two__tagline">Our Blog</span>
                <div class="section-title-two__tagline-shape-1"></div>
            </div>
            <h2 class="section-title-two__title title-animation"> <?php bloginfo('name') ?> </h2>
        </div>
        <div class="row">
            <?php if ($rct_blog_query->have_posts()) : ?>
                <?php while ($rct_blog_query->have_posts()) : ?>
                    <?php $rct_blog_query->the_post() ?>
                    <!--Blog Four Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="<?= $rct_blog_delay ?>ms">
                        <div class="blog-four__single">
                            <div class="blog-four__img-box">
                                <div class="blog-four__img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('410x293') ?>
                                    <?php else : ?>
                                        <img src="<?= rct_asset('/assets/images/blog/blog-4-1.jpg') ?>" alt="" />
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="blog-four__content">
                                <ul class="blog-four__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-user"></span>
                                        </div>
                                        <p>By <?php the_author() ?></p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-calendar-2"></span>
                                        </div>
                                        <p><?php echo get_the_date('j F Y') ?></p>
                                    </li>
                                </ul>
                                <h3 class="blog-four__title">
                                    <a href="<?php the_permalink() ?>">
                                        <?php the_title() ?>
                                    </a>
                                </h3>
                                <div class="blog-four__btn-box-2">
                                    <a href="<?php the_permalink() ?>" class="thm-btn">Read More <span class="icon-arrow-up-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Four Single End-->
                    <?php $rct_blog_delay += 100 ?>
                <?php endwhile ?>
                <?php wp_reset_postdata() ?>
            <?php endif ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--Blog List Single End-->
                <div class="blog-list__pagination">
                    <ul class="pg-pagination list-unstyled">
                    <?php
                        $rct_blog_pagination_pages = paginate_links(array(
                            'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                            'format' => '?paged=%#%',
                            'current' => max(1, get_query_var('paged')),
                            'total' => $rct_blog_query->max_num_pages,
                            'type' => 'array',
                        ));

                        if ($rct_blog_pagination_pages) {
                            foreach ($rct_blog_pagination_pages as $nc_page) {
                                $nc_active = strpos($nc_page, 'current') !== false ? 'active' : '';
                                $nc_extract = rct_extract_pagination_link($nc_page);
                                if ($nc_extract) {
                                    if ($nc_extract['page'] === 'Next') {
                                        echo '<li class="next"><a href="' . esc_url($nc_extract['url']) . '" aria-label="Next"><i class="fa fa-chevron-right"></i></a></li>';
                                    } elseif ($nc_extract['page'] === 'Prev') {
                                        echo '<li class="next"><a href="' . esc_url($nc_extract['url']) . '" aria-label="Next"><i class="fa fa-chevron-left"></i></a></li>';
                                    } else {
                                        if ($nc_active) {
                                            echo '<li class="count active"><a href="#">' . esc_html($nc_extract['page']) . '</a></li>';
                                        } else {
                                            echo '<li class="count"><a href="' . esc_url($nc_extract['url']) . '">' . esc_html($nc_extract['page']) . '</a></li>';
                                        }
                                    }
                                }
                            }
                        }

                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Three End-->

<?php


get_footer();
