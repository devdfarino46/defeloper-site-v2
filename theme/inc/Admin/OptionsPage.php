<?php

namespace DefeloperTheme\Admin;

class OptionsPage {
    public function __construct()
    {
        add_action( 'admin_init', function () {
            register_setting(
                'general',
                'df_status',
                [
                    'type' => 'string',
                    'sanitize_callback' => 'sanitize_text_field',
                    'default' => ''
                ]
            );

            add_settings_field(
                'df_status',
                'Открыт для проектов?',
                function()
                {
                    $allow = get_option('df_status', '');
                    ?>
                    <input type="checkbox" name="df_status" value="1" 
                        <?php if ( $allow ) echo 'checked'; ?> >
                    <?php
                },
                'general'
            );
        } );
    }
}