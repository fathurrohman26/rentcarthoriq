<?php

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('rct_customize_register')) {
    function rct_customize_register(WP_Customize_Manager $wp_customize)
    {
        // Social Media
        rct_customize_social_media($wp_customize);

        // Header Section
        rct_customize_header_section($wp_customize);

        // About Section
        rct_customize_about_section($wp_customize);

        // Pricing Section
        rct_customize_pricing_section($wp_customize);

        // Contact Section
        rct_customize_contact_section($wp_customize);
    }
}

if (!function_exists('rct_customize_contact_section')) {
    function rct_customize_contact_section(WP_Customize_Manager $wp_customize)
    {
        $wp_customize->add_section('rct_contact_settings', array(
            'title'    => __('Contact Section', 'rentcarthoriq'),
            'priority' => 30,
        ));

        // Section Title
        $wp_customize->add_setting('rct_contact_settings_title', array(
            'default' => 'Section Title',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_textarea_field',
        ));

        $wp_customize->add_control('rct_contact_settings_title', array(
            'label' => 'Section Title',
            'section' => 'rct_contact_settings',
            'type' => 'textarea',
        ));

        // Section Description
        $wp_customize->add_setting('rct_contact_settings_description', array(
            'default' => 'Section Description',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_textarea_field',
        ));

        $wp_customize->add_control('rct_contact_settings_description', array(
            'label' => 'Section Description',
            'section' => 'rct_contact_settings',
            'type' => 'textarea',
        ));

        // Address
        $wp_customize->add_setting('rct_contact_settings_address', array(
            'default' => 'Address',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_textarea_field',
        ));

        $wp_customize->add_control('rct_contact_settings_address', array(
            'label' => 'Address',
            'section' => 'rct_contact_settings',
            'type' => 'textarea',
        ));

        // Contact 1
        $wp_customize->add_setting('rct_contact_settings_contact_1', array(
            'default' => 'Support',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('rct_contact_settings_contact_1', array(
            'label' => 'Support',
            'section' => 'rct_contact_settings',
            'type' => 'text',
        ));

        // Contact 1 Link
        $wp_customize->add_setting('rct_contact_settings_contact_1_link', array(
            'default' => 'Support',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control('rct_contact_settings_contact_1_link', array(
            'label' => 'Support Link',
            'section' => 'rct_contact_settings',
            'type' => 'text',
        ));

        // Contact 2
        $wp_customize->add_setting('rct_contact_settings_contact_2', array(
            'default' => 'Support',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('rct_contact_settings_contact_2', array(
            'label' => 'Support',
            'section' => 'rct_contact_settings',
            'type' => 'text',
        ));

        // Contact 2 Link
        $wp_customize->add_setting('rct_contact_settings_contact_2_link', array(
            'default' => 'Support',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control('rct_contact_settings_contact_2_link', array(
            'label' => 'Support Link',
            'section' => 'rct_contact_settings',
            'type' => 'text',
        ));

        // Email
        $wp_customize->add_setting('rct_contact_settings_email', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('rct_contact_settings_email', array(
            'label' => 'Email',
            'section' => 'rct_contact_settings',
            'type' => 'email',
        ));

        // Appiontment Number
        $wp_customize->add_setting('rct_contact_settings_appiontment_number', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('rct_contact_settings_appiontment_number', array(
            'label' => 'Appiontment (WA)',
            'section' => 'rct_contact_settings',
            'type' => 'number',
        ));

        // Map Embed URL
        $wp_customize->add_setting('rct_contact_settings_map_embed_url', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control('rct_contact_settings_map_embed_url', array(
            'label' => 'Map Embed URL',
            'section' => 'rct_contact_settings',
            'type' => 'textarea',
        ));
    }
}

if (!function_exists('rct_customize_pricing_section')) {
    function rct_customize_pricing_section(WP_Customize_Manager $wp_customize)
    {
        $wp_customize->add_section('rct_pricing_settings', array(
            'title'    => __('Pricing Section', 'rentcarthoriq'),
            'priority' => 30,
        ));

        // Section Title
        $wp_customize->add_setting('rct_pricing_settings_title', array(
            'default' => 'Section Title',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_textarea_field',
        ));

        $wp_customize->add_control('rct_pricing_settings_title', array(
            'label' => 'Section Title',
            'section' => 'rct_pricing_settings',
            'type' => 'textarea',
        ));

        // Button Text
        $wp_customize->add_setting('rct_pricing_settings_button_text', array(
            'default' => 'Button Text',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('rct_pricing_settings_button_text', array(
            'label' => 'Button Text',
            'section' => 'rct_pricing_settings',
            'type' => 'text',
        ));

        // Button Link (WA Number)
        $wp_customize->add_setting('rct_pricing_settings_button_wa_number', array(
            'default' => 'Button Text',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('rct_pricing_settings_button_wa_number', array(
            'label' => 'Button Link (WA Number)',
            'section' => 'rct_pricing_settings',
            'type' => 'number',
        ));

        // Pricing Feature
        for ($i = 1; $i <= 5; $i++) {
            // Feature title
            $wp_customize->add_setting('rct_pricing_settings_feature_' . $i . '_text', array(
                'default' => '',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field',
            ));

            $wp_customize->add_control('rct_pricing_settings_feature_' . $i . '_text', array(
                'label' => 'Feature ' . $i . ' Text',
                'section' => 'rct_pricing_settings',
                'type' => 'text',
            ));
        }
    }
}

if (!function_exists('rct_customize_about_section')) {
    function rct_customize_about_section(WP_Customize_Manager $wp_customize)
    {
        $wp_customize->add_section('rct_about_settings', array(
            'title'    => __('About Section', 'rentcarthoriq'),
            'priority' => 30,
        ));

        // Section Title
        $wp_customize->add_setting('rct_about_settings_title', array(
            'default' => 'Section Title',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_textarea_field',
        ));

        $wp_customize->add_control('rct_about_settings_title', array(
            'label' => 'Section Title',
            'section' => 'rct_about_settings',
            'type' => 'textarea',
        ));

        // Section Content
        $wp_customize->add_setting('rct_about_settings_content', array(
            'default' => 'Section Content',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_textarea_field',
        ));

        $wp_customize->add_control('rct_about_settings_content', array(
            'label' => 'Section Content',
            'section' => 'rct_about_settings',
            'type' => 'textarea',
        ));

        // Button Text
        $wp_customize->add_setting('rct_about_settings_button_text', array(
            'default' => 'Button Text',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('rct_about_settings_button_text', array(
            'label' => 'Button Text',
            'section' => 'rct_about_settings',
            'type' => 'text',
        ));

        // Button Link
        $wp_customize->add_setting('rct_about_settings_button_link', array(
            'default' => '#',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control('rct_about_settings_button_link', array(
            'label' => 'Button Link',
            'section' => 'rct_about_settings',
            'type' => 'url',
        ));

        // About Counter
        for ($i = 1; $i <= 3; $i++) {
            // Counter Title
            $wp_customize->add_setting('rct_about_settings_counter_stats_' . $i . '_title', array(
                'default' => '',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field',
            ));

            $wp_customize->add_control('rct_about_settings_counter_stats_' . $i . '_title', array(
                'label' => 'Counter Title ' . $i,
                'section' => 'rct_about_settings',
                'type' => 'text',
            ));

            // Counter Tag
            $wp_customize->add_setting('rct_about_settings_counter_stats_' . $i . '_tag', array(
                'default' => '+',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field',
            ));

            $wp_customize->add_control('rct_about_settings_counter_stats_' . $i . '_tag', array(
                'label' => 'Counter Tag ' . $i,
                'section' => 'rct_about_settings',
                'type' => 'text'
            ));

            // Counter Value
            $wp_customize->add_setting('rct_about_settings_counter_stats_' . $i . '_value', array(
                'default' => 0,
                'transport' => 'refresh',
                'sanitize_callback' => 'absint',
            ));

            $wp_customize->add_control('rct_about_settings_counter_stats_' . $i . '_value', array(
                'label' => 'Counter Value ' . $i,
                'section' => 'rct_about_settings',
                'type' => 'number'
            ));
        }

        // About Image
        $wp_customize->add_setting('rct_about_settings_image', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'rct_about_settings_image',
            array(
                'label' => 'Section Image (520x553 recommended)',
                'section' => 'rct_about_settings',
                'settings' => 'rct_about_settings_image',
            )
        ));
    }
}

if (!function_exists('rct_customize_header_section')) {
    function rct_customize_header_section(WP_Customize_Manager $wp_customize)
    {
        $wp_customize->add_section('rct_header_settings', array(
            'title'    => __('Header Section', 'rentcarthoriq'),
            'priority' => 30,
        ));

        // Location
        $wp_customize->add_setting('rct_header_settings_location', array(
            'default' => 'Location',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('rct_header_settings_location', array(
            'label' => 'Location',
            'section' => 'rct_header_settings',
            'type' => 'text',
        ));

        // Opening Hours
        $wp_customize->add_setting('rct_header_settings_opening_hours', array(
            'default' => 'Opening Hours',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('rct_header_settings_opening_hours', array(
            'label' => 'Opening Hours',
            'section' => 'rct_header_settings',
            'type' => 'text',
        ));
    }
}

if (!function_exists('rct_customize_social_media')) {
    function rct_customize_social_media(WP_Customize_Manager $wp_customize)
    {
        $wp_customize->add_section('rct_social_settings', array(
            'title'    => __('Social Media', 'rentcarthoriq'),
            'priority' => 30,
        ));

        // Facebook URL
        $wp_customize->add_setting('rct_social_settings_facebook_url', array(
            'default'   => '#',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('rct_social_settings_facebook_url', array(
            'label'    => __('Facebook URL', 'rentcarthoriq'),
            'section'  => 'rct_social_settings',
            'type'     => 'url',
        ));

        // Instagram URL
        $wp_customize->add_setting('rct_social_settings_instagram_url', array(
            'default'   => '#',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('rct_social_settings_instagram_url', array(
            'label'    => __('Instagram URL', 'rentcarthoriq'),
            'section'  => 'rct_social_settings',
            'type'     => 'url',
        ));

        // X URL
        $wp_customize->add_setting('rct_social_settings_x_url', array(
            'default'   => '#',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('rct_social_settings_x_url', array(
            'label'    => __('X (Twitter) URL', 'rentcarthoriq'),
            'section'  => 'rct_social_settings',
            'type'     => 'url',
        ));

        // Linkedin URL
        $wp_customize->add_setting('rct_social_settings_linkedin_url', array(
            'default'   => '#',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('rct_social_settings_linkedin_url', array(
            'label'    => __('Linkedin URL', 'rentcarthoriq'),
            'section'  => 'rct_social_settings',
            'type'     => 'url',
        ));
    }
}

add_action('customize_register', 'rct_customize_register');
