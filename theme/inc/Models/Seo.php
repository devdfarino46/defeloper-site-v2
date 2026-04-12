<?php

namespace DefeloperTheme\Models;

class Seo {
    public static function get( $post_id )
    {
        return [
            'title'        => get_post_meta( $post_id, 'seo_title', true ) ?? '',
            'description'     => get_post_meta( $post_id, 'seo_description', true ) ?? '',
            'keywords'      => get_post_meta( $post_id, 'seo_keywords', true ) ?? ''
        ];
    }
}