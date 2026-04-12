<?php

namespace DefeloperTheme;

class Sitemap {
    public function __construct()
    {
        add_action('init', [$this, 'addSitemapEndpoint']);
        add_action('template_redirect', [$this, 'renderSitemap']);
    }
    
    public function addSitemapEndpoint()
    {
        add_rewrite_rule('sitemap\.xml$', 'index.php?sitemap=1', 'top');
        add_rewrite_tag('%sitemap%', '([^&]+)');
    }
    
    public function renderSitemap()
    {
        if (get_query_var('sitemap')) {
            header('Content-Type: application/xml; charset=utf-8');

            $front_page_id  = (int) get_option('page_on_front');
            
            // Получаем страницы
            $pages = get_posts([
                'post_type'      => 'page',
                'post_status'    => 'publish',
                'posts_per_page' => -1,
                'fields'         => 'ids'
            ]);
            
            // Простой XML
            echo '<?xml version="1.0" encoding="UTF-8"?>';
            echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
            
            // Главная
            echo '<url>';
            echo '<loc>' . home_url('/') . '</loc>';
            echo '<priority>1.0</priority>';
            echo '</url>';
            
            // Страницы
            foreach ($pages as $page_id) {
                if ($page_id === $front_page_id) continue;
                
                echo '<url>';
                echo '<loc>' . get_permalink($page_id) . '</loc>';
                echo '<priority>0.8</priority>';
                echo '</url>';
            }
            
            echo '</urlset>';
            exit;
        }
    }
}