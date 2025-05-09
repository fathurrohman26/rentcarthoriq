<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();

get_template_part('template-parts/sections/slider');

get_template_part('template-parts/sections/about');

get_template_part('template-parts/sections/pricing');

get_template_part('template-parts/sections/testimonial');

get_template_part('template-parts/sections/contact');

get_template_part('template-parts/sections/blog');

get_footer();
