<?php 

use DefeloperTheme\Twig\TwigManager;

use DefeloperTheme\Models\Cases;
use DefeloperTheme\Models\Faq;
use DefeloperTheme\Models\Seo;

$post_id = get_the_ID();

$twig = new TwigManager();

// print_r(\DefeloperTheme\Models\Cases::get_all(1));

$twig->render( 'pages/home.twig', [
    'cases'     => Cases::get_all(3),
    'faq'       => Faq::get_all(-1),
    'seo_tags' => Seo::get( $post_id )
] );