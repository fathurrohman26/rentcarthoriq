<?php

if (!defined('ABSPATH')) {
    exit; // Silence is golden
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>
<body <?php body_class(is_front_page() ? 'body-bg-color' : ''); ?>>
    <?php wp_body_open(); ?>

    <div class="preloader">
      <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

    <?php // get_template_part('template-parts/sidebar') ?>

    <!-- wrapper -->
    <div class="page-wrapper">
        <?php get_template_part('template-parts/header') ?>
