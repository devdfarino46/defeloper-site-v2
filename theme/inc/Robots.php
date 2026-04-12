<?php

namespace DefeloperTheme;

class Robots {
    public function __construct()
    {
        add_filter( 'robots_txt', function( $output, $public ) {
            if ( !$public ) {
                return "User-agent: *\nDisallow: /\n";
            }

            $robots = "User-agent: *\n";
            $robots .= "Disallow: /wp-admin/\n";
            $robots .= "Disallow: /wp-includes/\n";
            $robots .= "Disallow: /wp-content/plugins/\n";
            $robots .= "Disallow: /wp-content/themes/\n";
            $robots .= "Disallow: /author/\n";
            $robots .= "Disallow: /search/\n";
            $robots .= "Disallow: /tag/\n";
            $robots .= "Disallow: /*?*\n";
            $robots .= "Disallow: /*.php$\n";
            $robots .= "Allow: /wp-content/uploads/\n\n";

            // Карта сайта
            $robots .= "Sitemap: " . home_url('/wp-sitemap.xml') . "\n";
        
            // Основные боты
            $robots .= "\n# Main bots\n";
            $robots .= "User-agent: Googlebot\n";
            $robots .= "Allow: /\n\n";
            
            $robots .= "User-agent: Yandex\n";
            $robots .= "Allow: /\n\n";
            
            // Плохие боты (запрещаем)
            $robots .= "\n# Bad bots\n";
            $bad_bots = ['AhrefsBot', 'MJ12bot', 'SemrushBot', 'DotBot', 'BLEXBot'];
            foreach ($bad_bots as $bot) {
                $robots .= "User-agent: {$bot}\n";
                $robots .= "Disallow: /\n\n";
            }
            
            return $robots;
        }, 10, 2 );
    }
}