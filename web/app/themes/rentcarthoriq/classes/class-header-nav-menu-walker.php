<?php

if (!defined('ABSPATH')) {
    exit; // Silence is golden
}

class RCT_Header_Nav_Menu_Walker extends Walker_Nav_Menu // phpcs:ignore
{
    // Start level ul
    function start_lvl(&$output, $depth = 0, $args = array()) // phpcs:ignore
    {
        $output .= "\n<ul class=\"" . ($depth > 0 ? '' : 'dropdown') . "\">\n";
    }

    // Start element li
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) // phpcs:ignore
    {
        $has_children = false;

        if (is_array($item->classes)) {
            $has_children = in_array('menu-item-has-children', $item->classes);
        }

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        if ($has_children) {
            $classes[] = 'dropdown';
        }
        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'current';
        }

        $classes = apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth);
        $classes = array_filter($classes);

        $class_names = join(' ', $classes);
        $class_attribute = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= '<li' . $class_attribute . '>';

        $atts = array();
        $atts['href'] = !empty($item->url) ? $item->url : '#';
        $atts['class'] = 'menu-link';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ( $attr === 'href' ) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

        $output .= '<a' . $attributes . '>' . $title . '</a>';
    }


    // End element li
    function end_el(&$output, $item, $depth = 0, $args = array()) // phpcs:ignore
    {
        $output .= "</li>\n";
    }

    // End level ul
    function end_lvl(&$output, $depth = 0, $args = array()) // phpcs:ignore
    {
        $output .= "</ul>\n";
    }
}
