<?php // phpcs:ignore

/**
 * Theme Functions
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!defined('RCT_VERSION')) {
    define('RCT_VERSION', '0.1');
}

if (!defined('RCT_ASSET_URL')) {
    define('RCT_ASSET_URL', get_template_directory_uri());
}

if (!function_exists('rct_setup')) {
    function rct_setup()
    {
        load_theme_textdomain('rentcarthoriq', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // Let WordPress manage the document title.
        add_theme_support('title-tag');

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails');

        // Menus
        register_nav_menus([
            'primary'  => __('Primary Menu'),
            'footer' => __('Footer Menu'),
            'footer-bottom' => __('Footer Bottom Menu')
        ]);

        // Custom Logo
        add_theme_support('custom-logo', array(
            'height'      => 40,
            'width'       => 135,
            'flex-height' => false,
            'flex-width'  => false,
            'header-text' => array('site-title', 'site-description'),
        ));

        // Custom Image Size (pricing unit)
        add_image_size('300x299', 300, 299, true);

        // Custom Image Size (Blog Sidebar)
        add_image_size('90x90', 90, 90, true);

        // Custom Image Size (Blog Details)
        add_image_size('850x500', 850, 500, true);

        // Custom Image Size (Blog Post)
        add_image_size('410x407', 410, 407, true);
        add_image_size('410x293', 410, 293, true);

        // Custom Image Size (Testimonial)
        add_image_size('80x80', 80, 80, true);

        // Custom Image Size (Slider)
        add_image_size('755x810', 755, 810, true);

        // Custom Image Size (Gallery)
        add_image_size('630x350', 630, 350, true);

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
    }
}

add_action('after_setup_theme', 'rct_setup');

if (!function_exists('rct_scripts')) {
    function rct_scripts()
    {
        $styles = [
            'rct_bootstrap' => '/assets/css/bootstrap.min.css',
            'rct_animate' => '/assets/css/animate.min.css',
            'rct_custom-animate' => '/assets/css/custom-animate.css',
            'rct_swiper' => '/assets/css/swiper.min.css',
            'rct_font-awesome-all' => '/assets/css/font-awesome-all.css',
            'rct_jarallax' => '/assets/css/jarallax.css',
            'rct_jquery.magnific-popup' => '/assets/css/jquery.magnific-popup.css',
            'rct_flaticon' => '/assets/css/flaticon.css',
            'rct_owl-carousel' => '/assets/css/owl.carousel.min.css',
            'rct_odometer' => '/assets/css/odometer.min.css',
            'rct_owl-theme-default' => '/assets/css/owl.theme.default.min.css',
            'rct_nice-select' => '/assets/css/nice-select.css',
            'rct_jquery-ui' => '/assets/css/jquery-ui.css',
            'rct_aos' => '/assets/css/aos.css',

            'rct_module_slider' => '/assets/css/module-css/slider.css',
            'rct_module_footer' => '/assets/css/module-css/footer.css',
            // 'rct_module_counter' => '/assets/css/module-css/counter.css',
            // 'rct_module_services' => '/assets/css/module-css/services.css',
            'rct_module_about' => '/assets/css/module-css/about.css',
            // 'rct_module_brand' => '/assets/css/module-css/brand.css',
            'rct_module_gallery' => '/assets/css/module-css/gallery.css',
            // 'rct_module_faq' => '/assets/css/module-css/faq.css',
            'rct_module_testimonial' => '/assets/css/module-css/testimonial.css',
            // 'rct_module_team' => '/assets/css/module-css/team.css',
            'rct_module_contact' => '/assets/css/module-css/contact.css',
            'rct_module_pricing' => '/assets/css/module-css/pricing.css',
            'rct_module_why-choose' => '/assets/css/module-css/why-choose.css',
            'rct_module_blog' => '/assets/css/module-css/blog.css',
            'rct_module_page_header' => '/assets/css/module-css/page-header.css',
            'rct_error_page' => '/assets/css/module-css/error-page.css'
        ];

        foreach ($styles as $handle => $src) {
            wp_enqueue_style($handle, get_template_directory_uri() . $src, array(), RCT_VERSION);
        }

        // Main style
        wp_enqueue_style('rct_style', get_template_directory_uri() . '/assets/css/style.css', array(), RCT_VERSION);
        // Responsive style
        wp_enqueue_style('rct_responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), RCT_VERSION);

        wp_enqueue_style('rct_user_style', get_template_directory_uri() . '/style.css', array(), RCT_VERSION);

        $scripts = [
            'rct_jquery' => '/assets/js/jquery-3.6.0.min.js',
            'rct_bootstrap-bundle' => '/assets/js/bootstrap.bundle.min.js',
            'rct_jarallax' => '/assets/js/jarallax.min.js',
            'rct_jquery-ajaxchimp' => '/assets/js/jquery.ajaxchimp.min.js',
            'rct_jquery-appear' => '/assets/js/jquery.appear.min.js',
            'rct_swiper' => '/assets/js/swiper.min.js',
            'rct_jquery-circle-progress' => '/assets/js/jquery.circle-progress.min.js',
            'rct_jquery-magnific-popup' => '/assets/js/jquery.magnific-popup.min.js',
            'rct_isotope' => '/assets/js/isotope.js',
            'rct_jquery-validate' => '/assets/js/jquery.validate.min.js',
            'rct_wNumb' => '/assets/js/wNumb.min.js',
            'rct_wow' => '/assets/js/wow.js',
            'rct_owl-carousel' => '/assets/js/owl.carousel.min.js',
            'rct_jquery-ui' => '/assets/js/jquery-ui.js',
            'rct_odometer' => '/assets/js/odometer.min.js',
            'rct_jquery-nice-select' => '/assets/js/jquery.nice-select.min.js',
            'rct_jquery-sidebar-content' => '/assets/js/jquery-sidebar-content.js',
            'rct_marquee' => '/assets/js/marquee.min.js',
            'rct_gsap' => '/assets/js/gsap/gsap.js',
            'rct_gsap-ScrollTrigger' => '/assets/js/gsap/ScrollTrigger.js',
            'rct_gsap-SplitText' => '/assets/js/gsap/SplitText.js',
            'rct_aos' => '/assets/js/aos.js',
        ];

        foreach ($scripts as $handle => $src) {
            wp_enqueue_script($handle, get_template_directory_uri() . $src, array(), RCT_VERSION, true);
        }

        // Main script
        wp_enqueue_script('rct_script', get_template_directory_uri() . '/assets/js/script.js', array(), RCT_VERSION, true);

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
}

add_action('wp_enqueue_scripts', 'rct_scripts');

if (!function_exists('rct_register_custom_post_type')) {
    function rct_register_custom_post_type()
    {
        register_post_type(
            'rct-slider',
            array(
                'labels' => array(
                    'name' => __('Sliders'),
                    'singular_name' => __('Slider')
                ),
                'public' => true,
                'rewrite' => false,
                'publicly_queryable' => false,
                'has_archive' => false,
                'supports' => array('title'),
                'menu_icon' => 'dashicons-images-alt2',
                'show_in_rest' => true
            )
        );

        register_post_type(
            'rct-gallery',
            array(
                'labels' => array(
                    'name' => __('Gallery'),
                    'singular_name' => __('Gallery Item')
                ),
                'public' => true,
                'has_archive' => false,
                'rewrite' => false,
                'publicly_queryable' => false,
                'supports' => array('title', 'thumbnail'),
                'menu_icon' => 'dashicons-format-gallery',
                'show_in_rest' => true
            )
        );

        register_post_type('rct-testimonial', array(
            'labels' => array(
                'name' => __('Testimonials'),
                'singular_name' => __('Testimonial')
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => false,
            'publicly_queryable' => false,
            'menu_icon' => 'dashicons-format-quote',
            'supports' => array('title'),
            'show_in_rest' => true
        ));

        register_post_type('pricing', array(
            'labels' => array(
                'name' => __('Pricings'),
                'singular_name' => __('Pricing')
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'pricing'),
            'menu_icon' => 'dashicons-admin-tools',
            'supports' => array('title'),
        ));
    }
}

add_action('init', 'rct_register_custom_post_type');

// Header Nav Walker
require_once get_template_directory() . '/classes/class-header-nav-menu-walker.php';

// Helpers
require_once get_template_directory() . '/includes/helpers.php';

// Theme Function
require_once get_template_directory() . '/includes/rentcarthoriq.php';

// Customizer
require_once get_template_directory() . '/includes/customizer.php';

// WPDiscuz
require_once get_template_directory() . '/plugins/wpdiscuz/class.WpdiscuzCore.php';
