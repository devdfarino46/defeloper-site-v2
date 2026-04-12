<?php

namespace DefeloperTheme\Admin\CPT;

class Socials {
    public function __construct()
    {
        add_action( 'init', function() {
            $this->register_cpt();
        } );

        add_action( 'after_setup_theme', function() {
            add_theme_support( 'post-thumbnails', [ 'social' ] );
        } );
    }

    private function register_cpt(): void
    {
        register_post_type( 'social', [
            'public'        => false,
            'label'         => 'Соцсети',
            'show_in_rest'  => true,
            'show_ui'       => true,
            'supports'      => [ 'title', 'thumbnail' ],
        ] );
    }
}