<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
    require_once __DIR__ . '/vendor/autoload.php';
}

if ( class_exists( 'DefeloperTheme\\Theme' ) ) {
    new DefeloperTheme\Theme();
}