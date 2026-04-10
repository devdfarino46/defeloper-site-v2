<?php

namespace DefeloperTheme\Models;

class Options {

    public static function getStatus(): bool {
        $option = get_option( 'df_status', '' );

        if ( $option === '1' ) {
            return true;
        } else {
            return false;
        }
    }
}