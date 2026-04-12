<?php

use DefeloperTheme\Twig\TwigManager;

$post = get_post(get_the_ID());

$twig = new TwigManager();
$twig->render('pages/document.twig', [
    'title' => $post->post_title,
    'content' => $post->post_content
]);