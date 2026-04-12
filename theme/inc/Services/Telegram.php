<?php

namespace DefeloperTheme\Services;

use DefeloperTheme\Models\Options;

class Telegram {
    public static function sendOrder(
        string $name = '',
        string $login = '',
        string $theme = ''
    )
    {
        $bot_data = Options::getTelegramBotSecurity();

        $api_token      = $bot_data['api_token'];
        $user_id        = $bot_data['user_id'];

        $url = "https://api.telegram.org/bot{$api_token}/sendMessage";

        $message =  '<b>Новая заявка с сайта df-developer.ru</b>' . "\n" .
                    '<b>Имя:</b> ' . $name . "\n" .
                    '<b>Телефон или TG:</b> ' . $login . "\n" .
                    '<b>Тема:</b>' . $theme;
        
        $response = wp_remote_post( $url, [
            'body'      => [
                'chat_id'       => $user_id,
                'text'          => $message,
                'parse_mode'    => 'HTML'
            ],
            'timeout'   => 10,
            'headers'   => [
                'Content-Type' => 'application/x-www-form-urlencoded'
            ]
        ] );
    
        if ( is_wp_error( $response ) ) {
            error_log( '[Telegram API Error]: ' . $response->get_error_message() );
            return false;
        }
    
        $http_code = wp_remote_retrieve_response_code( $response );
        $body = wp_remote_retrieve_body( $response );

        if ( $http_code !== 200 ) {
            error_log( '[Telegram API Status ' . $http_code . ']: ' . $response );
            return false;
        }

        return json_decode( $body, true );
    }
}