<?php
/**
 * Defeloper Theme Functions
 *
 * @package DefeloperTheme
 */

if (!defined('ABSPATH')) {
    exit;
}

spl_autoload_register(function ($class) {
    $prefix = 'DefeloperTheme\\';
    $len = strlen($prefix);

    if ( strncmp($prefix, $class, $len) !== 0 ) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = __DIR__ . '/inc/' . str_replace( '\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

/**
 * Автоматически регистрируем шаблоны из папки inc/Templates/Pages
 */
add_filter( 'theme_page_templates', function( $templates ) {
    $template_dir = get_template_directory() . '/inc/Templates/Pages/';
    
    if ( ! is_dir( $template_dir ) ) {
        return $templates;
    }
    
    foreach ( glob( $template_dir . '*.php' ) as $file ) {
        $filename = basename( $file );
        $template_name = $filename;
        
        $templates[ 'inc/Templates/Pages/' . $filename ] = $template_name;
    }
    
    return $templates;
} );