<?php

namespace DefeloperTheme;

use DefeloperTheme\Admin;
use DefeloperTheme\Ajax;

class Theme {

    public function __construct()
    {
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );

        new Admin\OptionsPage();
        new Admin\Options\Telegram();

        new Admin\Metaboxes\SocialUrl();

        new Admin\CPT\Cases();
        new Admin\CPT\Socials();
        
        new Ajax\Order();
    }
}