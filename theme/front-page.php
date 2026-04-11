<?php 

use DefeloperTheme\Twig\TwigManager;

use DefeloperTheme\Models\Cases;

$twig = new TwigManager();

// print_r(\DefeloperTheme\Models\Cases::get_all(1));

$twig->render( 'pages/home.twig', [
    'cases'     => Cases::get_all(3)
] );