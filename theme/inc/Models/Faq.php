<?php

namespace DefeloperTheme\Models;

class Faq {
    public static function get_all( $limit = -1 )
    {
        $posts = get_posts( [
            'post_type'         => 'faq',
            'posts_per_page'    => $limit,
            'post_status'       => 'publish',
            'orderby'           => 'date',
            'order'             => 'desc'
        ] );

        return array_map( function ($post) {
            return [
                'id'        => $post->ID,
                'title'     => $post->post_title,
                'text'      => $post->post_excerpt
            ];
        }, $posts );
    }
}