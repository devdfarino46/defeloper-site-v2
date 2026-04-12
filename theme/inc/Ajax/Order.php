<?php

namespace DefeloperTheme\Ajax;

use DefeloperTheme\Services\Telegram;

class Order {
    public function __construct()
    {
        add_action( 'wp_ajax_order', function() {
            $this->handle_order();
        } );
        add_action( 'wp_ajax_nopriv_order', function() {
            $this->handle_order();
        } );
    }

    private function handle_order()
    {
        

        // Нормализация
        $name   = sanitize_text_field( $_POST['name'] ?? '' );
        $phone  = sanitize_text_field( $_POST['phone'] ?? '' );
        $service  = sanitize_text_field( $_POST['service'] ?? '' );
        
        // Валидация
        if (empty($phone)) {
            wp_send_json_error( 'Введите телефон или Telegram' );
        }

        $message_name   = !empty($name) ? ", $name" : '';
        $message        = "Спасибо за заявку{$message_name}! Я с вами скоро свяжусь.";

        if ( Telegram::sendOrder( $name, $phone, $service ) === false ) {
            wp_send_json_error( 'Произошла неизвестная ошибка, попробуйте написать через мессенджер' );
        }

        wp_send_json_success( $message );
    }
}