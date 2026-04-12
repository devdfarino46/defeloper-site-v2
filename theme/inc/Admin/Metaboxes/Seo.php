<?php

namespace DefeloperTheme\Admin\Metaboxes;

class Seo {
    public function __construct()
    {
        add_action( 'add_meta_boxes', function() {
            add_meta_box(
                'df_seo_metabox',
                'SEO',
                function ( $post ) {
                    $this->render_meta_box( $post );
                },
                'page',
                'normal',
                'high'
            );
        } );

        add_action( 'save_post', function( $post_id ) {
            $this->save_meta_box( $post_id );
        } );
    }

    private function render_meta_box( $post )
    {
        $title = get_post_meta( $post->ID, 'seo_title', true );
        $description = get_post_meta( $post->ID, 'seo_description', true );
        $keywords = get_post_meta( $post->ID, 'seo_keywords', true );
        ?>
        <p>
            <label for="seo_title">Заголовок (Title):</label><br>
            <input type="text" 
                   id="seo_title"
                   name="seo_title" 
                   value="<?php echo esc_attr( $title ); ?>" 
                   style="width: 100%; padding: 8px;"
                   placeholder="SEO заголовок для страницы">
        </p>
        
        <p>
            <label for="seo_description">Описание (Description):</label><br>
            <textarea id="seo_description"
                      name="seo_description" 
                      rows="3"
                      style="width: 100%; padding: 8px;"
                      placeholder="Краткое описание страницы (до 160 символов)"><?php echo esc_textarea( $description ); ?></textarea>
        </p>
        
        <p>
            <label for="seo_keywords">Ключевые слова (Keywords):</label><br>
            <input type="text" 
                   id="seo_keywords"
                   name="seo_keywords" 
                   value="<?php echo esc_attr( $keywords ); ?>" 
                   style="width: 100%; padding: 8px;"
                   placeholder="ключевые слова, через запятую">
        </p>
        <?php
    }

    private function save_meta_box( $post_id )
    {
        // Проверка прав
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
        
        // Сохраняем Title
        if ( isset( $_POST['seo_title'] ) ) {
            update_post_meta( $post_id, 'seo_title', sanitize_text_field( $_POST['seo_title'] ) );
        }
        
        // Сохраняем Description
        if ( isset( $_POST['seo_description'] ) ) {
            update_post_meta( $post_id, 'seo_description', sanitize_textarea_field( $_POST['seo_description'] ) );
        }
        
        // Сохраняем Keywords
        if ( isset( $_POST['seo_keywords'] ) ) {
            update_post_meta( $post_id, 'seo_keywords', sanitize_text_field( $_POST['seo_keywords'] ) );
        }
    }
}