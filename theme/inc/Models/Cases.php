<?php

namespace DefeloperTheme\Models;

class Cases {
    
    public static function get_all( int $limit = -1 ): array
    {
        $posts = get_posts( [
            'post_type'         => 'case',
            'posts_per_page'    => $limit,
            'post_status'       => 'publish',
            'orderby'           => 'date',
            'order'             => 'desc'
        ] );
        
        return array_map( function( $post ) {
            $blocks = parse_blocks($post->post_content);

            $data = [
                'id'            => $post->ID,
                'title'         => $post->post_title,
                'image'         => '',
                'description'   => '',
                'result'        => '',
                'bottom'        => []
            ];

            $key = 0;

            foreach ( $blocks as $block ) {
                if ( $key === 0 && $block['blockName'] === 'core/image' ) {
                    $data['image'] = wp_get_attachment_image_url( (int) ( $block['attrs']['id'] ?? 0 ), 'medium' );
                    $key = 1;
                    continue;
                }

                if ( $key === 1 && $block['blockName'] === 'core/paragraph' ) {
                    $data['description'] = wp_strip_all_tags( $block['innerHTML'] );
                    $key = 2;
                    continue;
                }

                if ( $key === 2 && $block['blockName'] === 'core/paragraph' ) {
                    $data['result'] = wp_strip_all_tags( $block['innerHTML'] );
                    $key = 3;
                    continue;
                }

                if ( $key === 3 && $block['blockName'] === 'core/list' ) {
                    if ( ! empty( $block['innerBlocks'] ) ) {
                        foreach ( $block['innerBlocks'] as $inner ) {
                            if ( $inner['blockName'] === 'core/list-item' ) {
                                $data['bottom'][] = wp_kses( $inner['innerHTML'], [
                                    'em'        => [],
                                    'b'         => [],
                                    'strong'    => []
                                ] );
                            }
                        }
                    }
                    break;
                }
            }

            return $data;
        }, $posts );
    }
}