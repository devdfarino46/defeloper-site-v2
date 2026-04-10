<?php

namespace DefeloperTheme\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Twig\TwigFilter;

class TwigExtensions extends AbstractExtension {

    public function getFunctions()
    {
        return [
            // WordPress стандартные функции
            new TwigFunction( 'wp_head', 'wp_head' ),
            new TwigFunction( 'wp_footer', 'wp_footer' ),
            new TwigFunction( 'home_url', 'home_url' ),
            new TwigFunction( 'get_template_directory_uri', 'get_template_directory_uri' ),
            
            // Функция для дебага
            new TwigFunction( 'dump', 'var_dump' ),

            new TwigFunction( 'getStatus', [ $this, 'getStatus' ] )
        ];
    }

    public function getFilters()
    {
        return [
            new TwigFilter( 'esc_html', 'esc_html' ),
            new TwigFilter( 'esc_attr', 'esc_attr' ),
            new TwigFilter( 'esc_url', 'esc_url' ),
            new TwigFilter( 'esc_js', 'esc_js' ),
        ];
    }

    public function getStatus(): bool {
        return \DefeloperTheme\Models\Options::getStatus();
    }
}