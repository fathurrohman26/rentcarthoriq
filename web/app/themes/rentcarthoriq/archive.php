<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();

?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__wrap">
        <div class="page-header__shape-1 page_header_bg"></div>
        <div class="container">
            <div class="page-header__inner">
                <div class="page-header__shape-2"></div>
                <div class="page-header__shape-3"></div>
                <div class="page-header__shape-4"></div>
                <div class="page-header__img-1">
                    <!-- <img src="assets/images/resources/page-header-img-1.png" alt="" /> -->
                    <div class="page-header__shape-5">
                        <img src="<?= rct_asset('/assets/images/shapes/page-header-shape-5.png') ?>" alt="" />
                    </div>
                </div>
                <h2>Archive</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><?php the_archive_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

 <!--Blog List Start-->
 <section class="blog-list">
     <div class="container">
         <div class="row">
             <div class="col-xl-8 col-lg-7">
                <div class="blog-list__left">
                    <?php
                    $rct_blog_query = new WP_Query(array(
                        'post_type' => get_post_type(),
                        'posts_per_page' => 12,
                        'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                    ));
                    ?>
                    <?php if ($rct_blog_query->have_posts()) : ?>
                        <?php while ($rct_blog_query->have_posts()) : ?>
                            <?php $rct_blog_query->the_post(); ?>
                            <!--Blog List Single Start-->
                            <div class="blog-list__single">
                                <div class="blog-list__img-box">
                                    <div class="blog-list__img">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('850x500'); ?>
                                            <?php else : ?>
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/blog/blog-list-1-1.jpg" alt="">
                                            <?php endif; ?>
                                    </div>
                                    <ul class="blog-list__meta list-unstyled">
                                        <li>
                                            <p><span class="icon-calendar"></span><?= get_the_date(); ?></p>
                                        </li>
                                        <li>
                                            <p><span class="icon-user-2"></span>By <?= get_the_author(); ?></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-list__content">
                                    <h3 class="blog-list__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="blog-list__btn-box">
                                        <a href="<?php the_permalink(); ?>" class="thm-btn">READ MORE <span class="icon-arrow-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Blog List Single End-->
                        <?php endwhile ?>
                        <!-- Pagination -->
                        <div class="blog-list__pagination">
                            <ul class="pg-pagination list-unstyled">
                                <?php
                                $rct_pagination = paginate_links(array(
                                    'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                                    'format' => '?paged=%#%',
                                    'current' => max(1, get_query_var('paged')),
                                    'total' => $rct_blog_query->max_num_pages,
                                    'type' => 'array',
                                ));

                                if ($rct_pagination) {
                                    foreach ($rct_pagination as $nc_page) {
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

                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p>No posts found.</p>
                    <?php endif; ?>

                </div>
             </div>
             <div class="col-xl-4 col-lg-5">
                <?php get_template_part('template-parts/common/blog-sidebar') ?>
             </div>
         </div>
     </div>
 </section>
 <!--Blog List End-->

<?php

get_footer();
