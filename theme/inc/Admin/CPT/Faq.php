<?php

namespace DefeloperTheme\Admin\CPT;

class Faq {
    public function __construct()
    {
        add_action( 'init', function() {
            $this->register_cpt();
        } );
    }

    private function register_cpt(): void
    {
        register_post_type( 'faq', [
            'public'        => false,
            'label'         => 'FAQ',
            'show_in_rest'  => true,
            'show_ui'       => true,
            'supports'      => [ 'title', 'excerpt' ]
        ] );
    }
}