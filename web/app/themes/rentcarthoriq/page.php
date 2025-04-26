<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();

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

<!--Page Content Start-->
<section class="services-page">
    <div class="container">
        <div class="row">
            <!--Services One Single Start-->
            <div class="col-12 wow fadeInLeft" data-wow-delay="100ms">
                <div class="wp-block-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Content End-->

<?php

get_footer();
