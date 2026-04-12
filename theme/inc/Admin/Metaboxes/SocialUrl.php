<?php

namespace DefeloperTheme\Admin\Metaboxes;

class SocialUrl {
    public function __construct()
    {
        add_action( 'add_meta_boxes', function() {
            add_meta_box(
                'df_social_url_metabox',
                'Ссылка на соцсеть',
                function ( $post ) {
                    $this->render_meta_box( $post );
                },
                'social',
                'normal',
                'high'
            );
        } );

        add_action( 'save_post_social', function( $post_id ) {
            $this->save_meta_box( $post_id );
        } );
    }

    private function render_meta_box( $post )
    {
        $url = get_post_meta( $post->ID, 'social_url', true );
        ?>
        <input  type="url"
                name="social_url"
                value="<?php echo esc_attr( $url ) ?>"
                style="width: 100%; padding: 8px;"
                placeholder="https://t.me/username">
        <?php
    }

    private function save_meta_box( $post_id )
    {
        // Проверка прав
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        if ( isset( $_POST['social_url'] ) ) {
            update_post_meta( $post_id, 'social_url', esc_attr( $_POST['social_url'] ) );
        }
    }
}