<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<div class="sidebar">
    <div class="sidebar__single sidebar__search">
        <form method="get" action="<?php echo esc_url(home_url('/')); ?>" class="sidebar__search-form">
            <input type="search" name="s" placeholder="Search.." value="<?php echo get_search_query(); ?>" />
            <button type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
    <div class="sidebar__single sidebar__post">
        <div class="sidebar__title-box">
            <h3 class="sidebar__title">Popular Post</h3>
            <div class="sidebar__title-shape-box">
                <div class="sidebar__title-shape-1"></div>
                <div class="sidebar__title-shape-2"></div>
            </div>
        </div>
        <ul class="sidebar__post-list list-unstyled">
            <?php
            $nc_popular_posts = new WP_Query(array(
                'posts_per_page' => 3,
                'orderby' => 'comment_count',
                'order' => 'DESC',
                'post_status' => 'publish',
            ));
            if ($nc_popular_posts->have_posts()) :
                while ($nc_popular_posts->have_posts()) :
                    $nc_popular_posts->the_post(); ?>
                    <li>
                        <div class="sidebar__post-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('90x90');
                                } else {
                                    echo '<img src="' . get_template_directory_uri() . '/assets/images/default/lp-1-1.jpg" alt="">';
                                } ?>
                            </a>
                        </div>
                        <div class="sidebar__post-content">
                            <p class="sidebar__post-date">
                                <span class="icon-calendar"></span><?php echo get_the_date(); ?>
                            </p>
                            <h3>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                        </div>
                    </li>
                <?php endwhile ?>
                <?php wp_reset_postdata() ?>
            <?php endif ?>
        </ul>
    </div>
    <div class="sidebar__single sidebar__all-category">
        <div class="sidebar__title-box">
            <h3 class="sidebar__title">Catagory</h3>
            <div class="sidebar__title-shape-box">
                <div class="sidebar__title-shape-1"></div>
                <div class="sidebar__title-shape-2"></div>
            </div>
        </div>
        <ul class="sidebar__all-category-list list-unstyled">
            <?php
            $categories = get_categories(array(
                'orderby' => 'name',
                'order'   => 'ASC',
                'hide_empty' => true,
                'number' => 10
            ));
            $count = 1;
            foreach ($categories as $category) {
                $category_link = get_category_link($category->term_id);
                echo '<li>
                        <a href="' . esc_url($category_link) . '">' . esc_html($category->name) .
                        ' <span>' . str_pad($count, 2, '0', STR_PAD_LEFT) . '</span>
                        </a>
                    </li>';
                $count++;
            }
            ?>
        </ul>
    </div>
    <div class="sidebar__single sidebar__tags">
        <div class="sidebar__title-box">
            <h3 class="sidebar__title">Popular Tags</h3>
            <div class="sidebar__title-shape-box">
                <div class="sidebar__title-shape-1"></div>
                <div class="sidebar__title-shape-2"></div>
            </div>
        </div>
        <div class="sidebar__tags-list">
            <?php
            $tags = get_tags(array(
                'orderby' => 'count',
                'order'   => 'DESC',
                'number'  => 9
            ));
            if ($tags) {
                foreach ($tags as $tag) {
                    $tag_link = get_tag_link($tag->term_id);
                    echo '<a href="' . esc_url($tag_link) . '">' . esc_html($tag->name) . '</a>';
                }
            } else {
                echo '<p>No tags found.</p>';
            }
            ?>
        </div>
    </div>
    <div class="sidebar__single sidebar__all-category">
        <div class="sidebar__title-box">
            <h3 class="sidebar__title">Archive</h3>
            <div class="sidebar__title-shape-box">
                <div class="sidebar__title-shape-1"></div>
                <div class="sidebar__title-shape-2"></div>
            </div>
        </div>
        <ul class="sidebar__all-category-list list-unstyled">
            <?php
            wp_get_archives(array(
                'type' => 'monthly',
                'limit' => 12,
                'show_post_count' => false,
            ));
            ?>
        </ul>
    </div>
</div>
