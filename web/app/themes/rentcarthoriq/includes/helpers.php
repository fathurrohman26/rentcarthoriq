<?php //phpcs:ignore

if (!defined('ABSPATH')) {
    exit; // Silence is golden
}

if (!function_exists('rct_asset')) {
    function rct_asset($path = '')
    {
        return esc_url(RCT_ASSET_URL . $path);
    }
}


if (!function_exists('rct_get_menu_items')) {
    function rct_get_menu_items(string $menu): array
    {
        $items = array();

        if (!empty($menu) && ($locations = get_nav_menu_locations()) && isset($locations[$menu])) {
            $menu = get_term($locations[$menu], 'nav_menu');
            if (!is_wp_error($menu)) {
                $items = wp_get_nav_menu_items($menu->term_id);
            }
        }

        return $items;
    }
}

if (!function_exists('rct_menu_items')) {
    function rct_menu_items(string $menu, string $start_el = '<li>', string $end_el = '</li>')
    {
        $items = rct_get_menu_items($menu);
        foreach ($items as $item) {
            echo $start_el . '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>' . $end_el;
        }
    }
}

if (!function_exists('rct_price_list')) {
    function rct_price_list()
    {
        $services = get_posts(array(
            'post_type' => 'pricing',
            'posts_per_page' => -1
        ));

        $items = [];

        if (!empty($services)) {
            foreach ($services as $serv) {
                $items [] = get_the_title($serv->ID);
            }
        }

        return $items;
    }
}

if (!function_exists('rct_extract_pagination_link')) {
    function rct_extract_pagination_link(string $html)
    {
        preg_match('/href="([^"]+)".*?>(.*?)<\/a>/', $html, $matches);
        if (!empty($matches) && count($matches) >= 3) {
            $url = $matches[1];
            $text = trim(strip_tags($matches[2]));

            // Cek Next
            if (stripos($html, 'class="next') !== false || stripos($text, 'next') !== false) {
                return ['page' => 'Next', 'url' => $url];
            }

            // Cek Prev
            if (stripos($html, 'class="prev') !== false || stripos($text, 'prev') !== false) {
                return ['page' => 'Prev', 'url' => $url];
            }

            // Cek angka
            if (is_numeric($text)) {
                return ['page' => (int)$text, 'url' => $url];
            }
        }

        if (preg_match('/<span[^>]*class="[^"]*current[^"]*"[^>]*>(.*?)<\/span>/i', $html, $matches)) {
            $page = intval(strip_tags($matches[1]));
            return ['page' => $page, 'url' => ''];
        }

        return false;
    }
}


if (!function_exists('rct_plugins_url')) {
    function rct_plugins_url($path = '', $plugin = '')
    {
        $base_url = get_template_directory_uri() . '/plugins';
        $base_path = get_template_directory() . '/plugins';

        if (file_exists($plugin)) {
            $relative_path = str_replace(trailingslashit($base_path), '', $plugin);
            $plugin = explode('/', $relative_path)[0];
        }

        if ($plugin) {
            $plugin_path = trailingslashit($base_path) . $plugin;
            if (file_exists($plugin_path)) {
                $plugin_url = trailingslashit($base_url) . $plugin;
                return trailingslashit($plugin_url) . ltrim($path, '/');
            }
        }

        return trailingslashit($base_url) . ltrim($path, '/');
    }
}

if (!function_exists('rct_plugin_dir_url')) {
    function rct_plugin_dir_url($file)
    {
        $base_plugin_dir = trailingslashit(get_template_directory()) . 'plugins/';
        $relative_path = str_replace($base_plugin_dir, '', $file);
        $plugin_folder = explode('/', $relative_path)[0];

        return trailingslashit(rct_plugins_url('', $plugin_folder));
    }
}

if (!function_exists('rct_get_contact_link')) {
    function rct_get_contact_link($number, $custom_link = '')
    {
        $number = trim($number);
        $custom_link = trim($custom_link);

        if (!empty($custom_link) && (strpos($custom_link, 'http') === 0 || strpos($custom_link, 'tel:') === 0)) {
            if (stripos($custom_link, 'wa.me') !== false || stripos($custom_link, 'api.whatsapp.com') !== false) {
                $parsed = parse_url($custom_link);
                $clean_number = preg_replace('/[^0-9]/', '', $parsed['path'] ?? '');

                $rebuilt_url = $parsed['scheme'] . '://' . $parsed['host'];
                if (!empty($clean_number)) {
                    $rebuilt_url .= '/' . $clean_number;
                }

                if (!empty($parsed['query'])) {
                    $rebuilt_url .= '?' . $parsed['query'];
                }

                return $rebuilt_url;
            }

            return $custom_link;
        } elseif (!empty($number)) {
            return 'https://wa.me/' . preg_replace('/[^0-9]/', '', $number);
        } else {
            return '#';
        }
    }

}
