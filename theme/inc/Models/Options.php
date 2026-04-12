<?php

namespace DefeloperTheme\Models;

class Options {

    public static function getStatus(): bool
    {
        $option = get_option( 'df_status', '' );

        if ( $option === '1' ) {
            return true;
        } else {
            return false;
        }
    }

    public static function getTelegramBotSecurity(): array
    {
        return [
            'api_token'     => get_option( 'df_telegram_bot_token', '' ),
            'user_id'       => get_option( 'df_telegram_user_id' )
        ];
    }
}