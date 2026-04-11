<?php

namespace DefeloperTheme\Admin\CPT;

class Cases {
    public function __construct()
    {
        add_action( 'init', function() {
            $this->register_cpt();
        } );
    }

    private function register_cpt(): void
    {
        register_post_type( 'case', [
            'public'        => false,
            'label'         => 'Кейсы',
            'show_in_rest'  => true,
            'show_ui'       => true,
            'supports'      => [ 'title', 'editor', 'thumbnail' ],
            'template'      => $this->get_template_args(),
            'template_lock' => 'insert'
        ] );
    }

    private function get_template_args(): array
    {
        return [
            [ 'core/image', [
                'placeholder'   => 'Изображение кейса'
            ] ],
            [ 'core/paragraph', [
                'placeholder'   => 'Краткое описание проекта'
            ] ],
            [ 'core/paragraph', [
                'placeholder'   => 'Результат'
            ] ],
            [ 'core/list', [
                'style'         => [
                    'border'    => [
                        'radius'    => '10px',
                        'width'     => '2px',
                        'color'     => '#DDD'
                    ],
                    'spacing'   => [
                        'padding' => '20px'
                    ]
                ]
            ], [
                [ 'core/list-item', [
                    'placeholder' => 'Срок: 21 день'
                ] ]
            ] ]
        ];
    }
}