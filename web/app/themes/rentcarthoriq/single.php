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
                <h2>Blog Details</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Blog Details Start-->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
                    <div class="blog-details__img-box">
                        <div class="blog-details__img">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('850x500');
                            } else {
                                echo '<img src="' . get_template_directory_uri() . '/assets/images/default/blog-details-img-1.jpg" alt="">';
                            }
                            ?>
                            <ul class="blog-details__meta list-unstyled">
                                <li>
                                    <p>
                                        <span class="icon-calendar"></span><?php echo get_the_date(); ?>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span class="icon-user-2"></span>By <?= get_the_author(); ?>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span class="icon-folder"></span>
                                        <?php
                                        $categories = get_the_category();
                                        if (!empty($categories)) {
                                            $output = '';
                                            foreach ($categories as $category) {
                                                $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '" style="color: var(--crank-white)">' . esc_html($category->name) . '</a>' ;
                                            }
                                            echo trim($output);
                                        } else {
                                            echo 'Uncategorized';
                                        }
                                        ?>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-details__content">
                        <h3 class="blog-details__title-1">
                            <?= esc_html(get_the_title()) ?>
                        </h3>
                        <div class="wp-block-content">
                            <?php the_content() ?>
                        </div>
                        <div class="blog-details__tag-and-social">
                            <div class="blog-details__tag-box">
                                <span class="blog-details__tag-title">Tags:</span>
                                <div class="blog-details__tag-list">
                                    <?php
                                    $nc_tags = get_the_tags();
                                    if ($nc_tags) {
                                        foreach ($nc_tags as $nc_tag) {
                                            echo '<a href="' . esc_url(get_tag_link($nc_tag->term_id)) . '">' .
                                                 esc_html($nc_tag->name) . '</a>';
                                        }
                                    } else {
                                        echo '<span>No tags</span>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="blog-details__prev-next">
                            <div class="blog-details__prev">
                                <?php
                                $prev_post = get_previous_post();
                                if ($prev_post) :
                                    ?>
                                    <a href="<?php echo get_permalink($prev_post->ID); ?>">
                                        <span class="icon-arrow-left"></span> <?php echo esc_html($prev_post->post_title); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="blog-details__next">
                                <?php
                                $next_post = get_next_post();
                                if ($next_post) :
                                    ?>
                                    <a href="<?php echo get_permalink($next_post->ID); ?>"> <?php echo esc_html($next_post->post_title); ?> 
                                        <span class="icon-arrow-right"></span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="comment-form">
                            <?php if (comments_open() || get_comments_number()) : ?>
                                <?php comments_template(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <?php get_template_part('template-parts/common/blog-sidebar') ?>
            </div>
        </div>
    </div>
</section>
<!--Blog Details End-->


<?php

get_footer();
