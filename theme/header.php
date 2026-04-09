<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=  get_template_directory_uri() ?>/assets/libs/css/reset.css">
    <link rel="stylesheet" href="<?=  get_template_directory_uri() ?>/assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="logo">
                    <a href="#">
                        <img src="<?=  get_template_directory_uri() ?>/assets/img/logo.svg" alt="">
                    </a>
                </div>
                <div class="header__nav">
                    <div class="nav-link"><a href="javascript:void(0);">Услуги</a></div>
                    <div class="nav-link"><a href="javascript:void(0);">Сайты</a></div>
                    <div class="nav-link"><a href="javascript:void(0);">Магазины</a></div>
                    <div class="nav-link"><a href="javascript:void(0);">Интеграции</a></div>
                    <div class="nav-link"><a href="javascript:void(0);">Верстка</a></div>
                    <div class="nav-link"><a href="javascript:void(0);">Цены</a></div>
                    <div class="nav-link"><a href="javascript:void(0);">Кейсы</a></div>
                    <div class="nav-link"><a href="javascript:void(0);">FAQ</a></div>
                    <div class="nav-link nav-btn actionOpenContactModal"><a href="javascript:void(0);">Обсудить проект</a></div>
                </div>
                <div class="burger-btn actionOpenMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </header>
        <div class="mobile-menu">
            <div class="container">
                <div class="nav-link"><a href="javascript:void(0);">Услуги</a></div>
                <div class="nav-link"><a href="javascript:void(0);">Сайты</a></div>
                <div class="nav-link"><a href="javascript:void(0);">Магазины</a></div>
                <div class="nav-link"><a href="javascript:void(0);">Интеграции</a></div>
                <div class="nav-link"><a href="javascript:void(0);">Верстка</a></div>
                <div class="nav-link"><a href="javascript:void(0);">Цены</a></div>
                <div class="nav-link"><a href="javascript:void(0);">Кейсы</a></div>
                <div class="nav-link"><a href="javascript:void(0);">FAQ</a></div>
                <div class="nav-link nav-btn actionOpenContactModal"><a href="javascript:void(0);">Обсудить проект</a></div>
            </div>
        </div>
        
        <main class="page">