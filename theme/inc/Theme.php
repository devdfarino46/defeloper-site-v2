<?php

namespace DefeloperTheme;

use DefeloperTheme\Admin;
use DefeloperTheme\Ajax;

class Theme {

    public function __construct()
    {
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );

        // Отключение oEmbed и связанных ссылок
        remove_action('wp_head', 'wp_oembed_add_discovery_links');
        remove_action('wp_head', 'wp_oembed_add_host_js');

        // Отключение REST API ссылок
        remove_action('wp_head', 'rest_output_link_wp_head');
        remove_action('wp_head', 'wp_resource_hints', 2);

        // Отключение RSD (Really Simple Discovery)
        remove_action('wp_head', 'rsd_link');

        // Отключение коротких ссылок
        remove_action('wp_head', 'wp_shortlink_wp_head');

        // Отключение WLW (Windows Live Writer)
        remove_action('wp_head', 'wlwmanifest_link');

        // Отключение ссылок на предыдущие/следующие записи
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

        // Отключение emoji скриптов и стилей
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');

        // Отключение версии WordPress
        remove_action('wp_head', 'wp_generator');

        new Robots();
        new Sitemap();

        new Admin\OptionsPage();
        new Admin\Options\Telegram();

        new Admin\Metaboxes\SocialUrl();
        new Admin\Metaboxes\Seo();

        new Admin\CPT\Cases();
        new Admin\CPT\Socials();
        new Admin\CPT\Faq();
        
        new Ajax\Order();
    }
}