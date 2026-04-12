<?php

namespace DefeloperTheme\Models;

class Socials {
    public static function get_all( $limit = -1 )
    {
        $posts = get_posts( [
            'post_type'         => 'social',
            'posts_per_page'    => $limit,
            'post_status'       => 'publish',
            'orderby'           => 'date',
            'order'             => 'desc'
        ] );

        return array_map( function ($post) {
            return [
                'id'        => $post->ID,
                'title'     => $post->post_title,
                'url'       => get_post_meta( $post->ID, 'social_url', true ) ?? '',
                'icon'      => get_the_post_thumbnail_url( $post->ID, 'full' ) ?? ''
            ];
        }, $posts );
    }
}