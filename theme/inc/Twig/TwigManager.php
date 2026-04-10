<?php

namespace DefeloperTheme\Twig;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigManager {
    /** @var Enviroment */
    private $twig;

    public function __construct()
    {
        $this->init_twig();
    }

    private function init_twig() {
        $loader = new FilesystemLoader( get_template_directory() . '/views' );
    
        // Определяем директорию для кеша
        $cache_dir = WP_CONTENT_DIR . '/cache/twig';
        
        // Создаём директорию, если её нет
        if ( ! is_dir( $cache_dir ) ) {
            wp_mkdir_p( $cache_dir );
        }

        $this->twig = new Environment( $loader, [
            'cache' => WP_DEBUG ? false : $cache_dir,
            'debug' => WP_DEBUG,
            'auto_reload' => true
        ] );

        if ( WP_DEBUG ) {
            $this->twig->addExtension( new \Twig\Extension\DebugExtension() );
        }

        $this->twig->addExtension( new TwigExtensions );
    }

    private function log_error( $template, \Exception $e ) {
        $message = sprintf(
            '[Twig Error] Template: %s | Message: %s | File: %s | Line: %d',
            $template,
            $e->getMessage(),
            $e->getFile(),
            $e->getLine()
        );
        
        // Пишем в стандартный лог WordPress
        error_log( $message );
    }

    public function render( $template, $context = [] ) {
        try {
            echo $this->twig->render( $template, $context );
        } catch ( \Exception $e ) {
            $this->log_error( $template, $e );

            if (WP_DEBUG) {
                echo '<pre>Twig Error: ' . esc_html( $e->getMessage() ) . '</pre>';
            }
        }
    }
}