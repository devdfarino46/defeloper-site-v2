<?php

use DefeloperTheme\Twig\TwigManager;
use DefeloperTheme\Models\Seo;

$post_id = get_the_ID();
$post = get_post($post_id);

$twig = new TwigManager();
$twig->render('pages/document.twig', [
    'title' => $post->post_title,
    'content' => $post->post_content,
    'seo_tags' => Seo::get( $post_id )
]);