<?php

namespace DefeloperTheme\Admin\Options;

class Telegram {
    private $page_slug      = 'telegram-settings';
    private $page_title     = 'Настройки Телеграм';
    private $menu_title     = 'Telegram';
    private $fields_group   = 'telegram_settings_group';

    public function __construct()
    {
        add_action( 'admin_menu', function () {
            add_options_page(
                $this->page_title,
                $this->menu_title,
                'manage_options',
                $this->page_slug,
                function () {
                    ?>
                    <div class="wrap">
                        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
                        <form action="options.php" method="post">
                            <?php
                            settings_fields($this->fields_group);
                            do_settings_sections($this->page_slug);
                            submit_button('Сохранить настройки');
                            ?>
                        </form>
                    </div>
                    <?php
                }
            );
        } );

        add_action( 'admin_init', function() {
            $fields = $this->get_fields();

            foreach ( $fields as $section=>$sections_args ) {
                add_settings_section(
                    $section,
                    $sections_args['title'],
                    null,
                    $this->page_slug
                );

                foreach ( $sections_args['fields'] as $field=>$field_args ) {
                    register_setting(
                        $this->fields_group,
                        $field,
                        [
                            'type'                  => $field_args['type'],
                            'sanitize_callback'     => $field_args['sanitize_callback'],
                            'default'               => $field_args['default']
                        ]
                    );

                    add_settings_field(
                        $field,
                        $field_args['label'],
                        $field_args['render_field'],
                        $this->page_slug,
                        $section
                    );
                }
            }
        } );
    }
    
    private function get_fields() {
        return [
            'bot_order_section' => [
                'title'     => 'Бот для заявок',
                'fields'    => [
                    'df_telegram_bot_token' => [
                        'label'             => 'BOT-Token',
                        'type'              => 'string',
                        'sanitize_callback' => 'sanitize_text_field',
                        'default'           => '',
                        'render_field'      => function() {
                            ?>
                            <input  type="text" 
                                    name="df_telegram_bot_token" 
                                    value="<?php echo get_option('df_telegram_bot_token', '') ?>">
                            <?php
                        }
                    ],
                    'df_telegram_user_id' => [
                        'label'             => 'User ID',
                        'type'              => 'string',
                        'sanitize_callback' => 'sanitize_text_field',
                        'default'           => '',
                        'render_field'      => function() {
                            ?>
                            <input  type="text" 
                                    name="df_telegram_user_id" 
                                    value="<?php echo get_option('df_telegram_user_id', '') ?>">
                            <?php
                        }
                    ],
                ]
            ]
        ];
    }
}