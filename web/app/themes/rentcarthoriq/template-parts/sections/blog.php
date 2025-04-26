<?php

if (!defined('ABSPATH')) {
    exit;
}

$rct_blog_query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3
));
$rct_blog_delay = 100;
?>

<!--Blog Three Start-->
<section class="blog-three">
    <div class="container">
        <div class="section-title-two text-center sec-title-animation animation-style1">
            <div class="section-title-two__tagline-box justify-content-center">
                <div class="section-title-two__tagline-shape-1"></div>
                <span class="section-title-two__tagline">Our Blog</span>
                <div class="section-title-two__tagline-shape-1"></div>
            </div>
            <h2 class="section-title-two__title title-animation"> Our Recent Blog </h2>
        </div>
        <div class="row">
            <?php if ($rct_blog_query->have_posts()) : ?>
                <?php while ($rct_blog_query->have_posts()) : ?>
                    <?php $rct_blog_query->the_post() ?>
                    <!--Blog Three Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="<?= $rct_blog_delay ?>ms">
                        <div class="blog-three__single">
                            <div class="blog-three__img-box">
                                <div class="blog-three__img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('410x407') ?>
                                    <?php else : ?>
                                        <img src="<?= rct_asset('/assets/images/blog/blog-3-1.jpg') ?>" alt="" />
                                    <?php endif ?>
                                </div>
                                <div class="blog-three__date">
                                    <span><?= get_the_date('d') ?>  <br /><?= get_the_date('M') ?> </span>
                                </div>
                            </div>
                            <div class="blog-three__content">
                                <h3 class="blog-three__title">
                                    <a href="<?php the_permalink() ?>">
                                        <?php the_title() ?>
                                    </a>
                                </h3>
                                <a href="<?php the_permalink() ?>" class="blog-three__read-more">
                                    Read Now <span class="icon-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--Blog Three Single End-->
                    <?php $rct_blog_delay += 100 ?>
                <?php endwhile ?>
                <?php wp_reset_postdata() ?>
            <?php endif ?>
        </div>
    </div>
</section>
<!--Blog Three End-->
