<?php

namespace DefeloperTheme\Templates\Pages;

use DefeloperTheme\Templates\Base;

(new Base())->render(function() { ?>

<div class="hero">
    <div class="hero__glow"></div>
    <div class="hero__grid"></div>
    <div class="container">
        <div class="hero-author">
            <div class="hero-author__ava"><img src="<?=  get_template_directory_uri() ?>/assets/img/ava.webp" alt=""></div>
            <div class="hero-author__content">
                <div class="hero-author__name">Дмитрий Фарино</div>
                <div class="hero-author__desc">Веб-разработчик · Беларусь · Работает удалённо по всему СНГ</div>
            </div>
            <div class="work-status">Открыть для проектов</div>
        </div>

        <div class="hero__main">
            <div class="hero__main-wrap">
                <h1 class="hero__title">
                    Сайты, которые <br>
                    приносят <em>заявки</em>, <br>
                    а не просто висят
                </h1>
                <p class="hero__text">
                    Разрабатываю сайты, лендинги и интернет-магазины под ключ — напрямую, 
                    без студий и наценок за менеджеров. Вы общаетесь лично со мной. 
                    Я сам пишу код, сам сдаю результат.
                </p>
                <div class="btn">
                    <span>Получить расчёт за 1 час</span>
                    <i class="icon-arrow-right"></i>
                </div>

                <p class="hero__subbtn"><a href="#">или получите бесплатный аудит сайта <i class="icon-arrow-right"></i></a></p>
                <ul class="hero__subitems">
                    <li>Фиксированная цена в договоре</li>
                    <li>Поддержка 45 дней бесплатно</li>
                    <li>Ответ в течение 1 часа</li>
                </ul>
            </div>

            <div class="hero-card">
                <div class="hero-card__label">О разработчике</div>
                <div class="hero-card__num-items">
                    <div class="hero-card__num-item">
                        <span>38+</span>
                        <span>проектов сдано</span>
                    </div>
                    <div class="hero-card__num-item">
                        <span>4 года</span>
                        <span>в веб-разработке</span>
                    </div>
                    <div class="hero-card__num-item">
                        <span>14 дн</span>
                        <span>мин. срок лендинга</span>
                    </div>
                    <div class="hero-card__num-item">
                        <span>45 дн</span>
                        <span>поддержка бесплатно</span>
                    </div>
                </div>
                <div class="hero-card__label">Что делаю</div>
                <ul class="hero-card__list">
                    <li>Сайты и лендинги под ключ</li>
                    <li>Интернет-магазины</li>
                    <li>Интеграции CRM, API, оплата</li>
                    <li>Верстка по макету Figma</li>
                    <li>Оптимизация и аудит</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="all-services">
    <div class="container">
        <h2 class="section-short-title">Все услуги</h2>
        <div class="section-title">Все услуги — от лендинга до интеграций</div>
        <div class="all-services__items">
            <a href="#landing" class="all-services-item">
                <img src="<?=  get_template_directory_uri() ?>/assets/img/services/internet.svg" width="24" height="24" alt="" class="all-services-item__icon">
                <div class="all-services-item__title">Сайты и лендинги</div>
                <div class="all-services-item__price">от 45 000 ₽</div>
                <div class="all-services-item__desc">нужен сайт с нуля</div>
            </a>
            <a href="#shop" class="all-services-item">
                <img src="<?=  get_template_directory_uri() ?>/assets/img/services/shop.svg" width="24" height="24" alt="" class="all-services-item__icon">
                <div class="all-services-item__title">Интернет-магазины</div>
                <div class="all-services-item__price">от 85 000 ₽</div>
                <div class="all-services-item__desc">каталог + оплата + CRM</div>
            </a>
            <a href="#integrations" class="all-services-item">
                <img src="<?=  get_template_directory_uri() ?>/assets/img/services/integration.svg" width="24" height="24" alt="" class="all-services-item__icon">
                <div class="all-services-item__title">Интеграции</div>
                <div class="all-services-item__price">от 8 000 ₽</div>
                <div class="all-services-item__desc">CRM, боты, API, оплата</div>
            </a>
            <a href="#layout" class="all-services-item">
                <img src="<?=  get_template_directory_uri() ?>/assets/img/services/pen.svg" width="24" height="24" alt="" class="all-services-item__icon">
                <div class="all-services-item__title">Верстка</div>
                <div class="all-services-item__price">от 10 000 ₽</div>
                <div class="all-services-item__desc">есть макет — нужен код</div>
            </a>
            <a href="#optimization" class="all-services-item">
                <img src="<?=  get_template_directory_uri() ?>/assets/img/services/lightning.svg" width="24" height="24" alt="" class="all-services-item__icon">
                <div class="all-services-item__title">Оптимизация</div>
                <div class="all-services-item__price">аудит бесплатно</div>
                <div class="all-services-item__desc">сайт тормозит или ломается</div>
            </a>
        </div>
    </div>
</section>
<div class="section-divider"></div>

<div>
    <section class="service" id="landing">
        <div class="container">
            <div class="service__main">
                <h2 class="section-short-title">Создание сайтов</h2>
                <div class="section-title --medium">Лендинги и сайты, <br>которые <strong>продают</strong></div>
                <div class="service__desc">
                    Не просто красивые страницы — инструмент для получения заявок. Каждый элемент проектирую под конверсию: структура, тексты, скорость загрузки, SEO.
                </div>
                <ul class="service__list">
                    <li>
                        <i>😤</i>
                        <span>Люди заходят на сайт и уходят без действия — нет заявок</span>
                    </li>
                    <li>
                        <i>💸</i>
                        <span>Тратите деньги на рекламу, а сайт не конвертирует</span>
                    </li>
                    <li>
                        <i>📉</i>
                        <span>Конверсия ниже 1% — значит сайт работает против вас</span>
                    </li>
                </ul>
                <ul class="service__tags">
                    <li>
                        <i class="icon-check"></i>
                        Структура под конверсию и поисковый запрос
                    </li>
                    <li>
                        <i class="icon-check"></i>
                        Адаптив под мобильные — 60% трафика
                    </li>
                    <li>
                        <i class="icon-check"></i>
                        SEO: title, H1, schema.org, скорость
                    </li>
                    <li>
                        <i class="icon-check"></i>
                        Яндекс.Метрика с целями
                    </li>
                    <li>
                        <i class="icon-check"></i>
                        Форма → мгновенно в Telegram
                    </li>
                    <li>
                        <i class="icon-check"></i>
                        Поддержка 45 дней — баги за мой счёт
                    </li>
                </ul>
                <div class="service__price">
                    Лендинг от <strong>45 000 ₽</strong>
                </div>
                <div class="btn actionShowContactForm">
                    <span>Получить расчет</span>
                    <i class="icon-arrow-right"></i>
                </div>
            </div>
            <div class="service-card">
                <div class="service-card__label">Что входит</div>
                <ul class="service-card__list">
                    <li><i class="icon-check"></i>Анализ конкурентов и ниши</li>
                    <li><i class="icon-check"></i>Прототип структуры в Figma</li>
                    <li><i class="icon-check"></i>Дизайн с согласованием</li>
                    <li><i class="icon-check"></i>Адаптивная верстка HTML/CSS/JS</li>
                    <li><i class="icon-check"></i>Форма + уведомление в Telegram</li>
                    <li><i class="icon-check"></i>Яндекс.Метрика с целями</li>
                    <li><i class="icon-check"></i>Размещение на хостинге</li>
                    <li><i class="icon-check"></i>45 дней поддержки бесплатно</li>
                </ul>
                <div class="keys-box">
                    <div class="keys-box__label">🎯 Трафик из Директа</div>
                    <ul class="keys-box__list">
                        <li>создание сайта</li>
                        <li>лендинг заказать</li>
                        <li>разработка сайта</li>
                        <li>сайт под ключ</li>
                        <li>лендинг под бизнес</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="section-divider"></div>
    <section class="service" id="landing">
        <div class="container">
            <div class="service__main">
                <h2 class="section-short-title">Создание сайтов</h2>
                <div class="section-title --medium">Лендинги и сайты, <br>которые <strong>продают</strong></div>
                <div class="service__desc">
                    Не просто красивые страницы — инструмент для получения заявок. Каждый элемент проектирую под конверсию: структура, тексты, скорость загрузки, SEO.
                </div>
                <ul class="service__list">
                    <li>
                        <i>😤</i>
                        <span>Люди заходят на сайт и уходят без действия — нет заявок</span>
                    </li>
                    <li>
                        <i>💸</i>
                        <span>Тратите деньги на рекламу, а сайт не конвертирует</span>
                    </li>
                    <li>
                        <i>📉</i>
                        <span>Конверсия ниже 1% — значит сайт работает против вас</span>
                    </li>
                </ul>
                <ul class="service__tags">
                    <li>
                        <i class="icon-check"></i>
                        Структура под конверсию и поисковый запрос
                    </li>
                    <li>
                        <i class="icon-check"></i>
                        Адаптив под мобильные — 60% трафика
                    </li>
                    <li>
                        <i class="icon-check"></i>
                        SEO: title, H1, schema.org, скорость
                    </li>
                    <li>
                        <i class="icon-check"></i>
                        Яндекс.Метрика с целями
                    </li>
                    <li>
                        <i class="icon-check"></i>
                        Форма → мгновенно в Telegram
                    </li>
                    <li>
                        <i class="icon-check"></i>
                        Поддержка 45 дней — баги за мой счёт
                    </li>
                </ul>
                <div class="service__price">
                    Лендинг от <strong>45 000 ₽</strong>
                </div>
                <div class="btn actionOpenContactModal" data-service="Лендинг / сайт под ключ">
                    <span>Получить расчет</span>  
                    <i class="icon-arrow-right"></i>
                </div>
            </div>
            <div class="service-card">
                <div class="service-card__label">Что входит</div>
                <ul class="service-card__list">
                    <li><i class="icon-check"></i>Анализ конкурентов и ниши</li>
                    <li><i class="icon-check"></i>Прототип структуры в Figma</li>
                    <li><i class="icon-check"></i>Дизайн с согласованием</li>
                    <li><i class="icon-check"></i>Адаптивная верстка HTML/CSS/JS</li>
                    <li><i class="icon-check"></i>Форма + уведомление в Telegram</li>
                    <li><i class="icon-check"></i>Яндекс.Метрика с целями</li>
                    <li><i class="icon-check"></i>Размещение на хостинге</li>
                    <li><i class="icon-check"></i>45 дней поддержки бесплатно</li>
                </ul>
                <div class="service-card__label">Что входит</div>
                <ul class="service-card__list">
                    <li><i class="icon-check"></i>Анализ конкурентов и ниши</li>
                    <li><i class="icon-check"></i>Прототип структуры в Figma</li>
                    <li><i class="icon-check"></i>Дизайн с согласованием</li>
                    <li><i class="icon-check"></i>Адаптивная верстка HTML/CSS/JS</li>
                    <li><i class="icon-check"></i>Форма + уведомление в Telegram</li>
                </ul>
                <div class="key-box">
                    <div class="keys-box__label">🎯 Трафик из Директа</div>
                    <ul class="keys-box__list">
                        <li>создание сайта</li>
                        <li>лендинг заказать</li>
                        <li>разработка сайта</li>
                        <li>сайт под ключ</li>
                        <li>лендинг под бизнес</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="service" id="landing">
        <div class="container">
            <div class="service__main">
                <h2 class="section-short-title">Создание сайтов</h2>
                <div class="section-title --medium">Лендинги и сайты, <br>которые <strong>продают</strong></div>
                <div class="service__desc">
                    Не просто красивые страницы — инструмент для получения заявок. Каждый элемент проектирую под конверсию: структура, тексты, скорость загрузки, SEO.
                </div>
                <ul class="service__list">
                    <li>
                        <i>😤</i>
                        <span>Люди заходят на сайт и уходят без действия — нет заявок</span>
                    </li>
                    <li>
                        <i>💸</i>
                        <span>Тратите деньги на рекламу, а сайт не конвертирует</span>
                    </li>
                    <li>
                        <i>📉</i>
                        <span>Конверсия ниже 1% — значит сайт работает против вас</span>
                    </li>
                </ul>
                <ul class="service__tags">
                    <li>
                        <i class="icon-check"></i>
                        Структура под конверсию и поисковый запрос
                    </li>
                    <li>
                        <i class="icon-check"></i>
                        Адаптив под мобильные — 60% трафика
                    </li>
                    <li>
                        <i class="icon-check"></i>
                        SEO: title, H1, schema.org, скорость
                    </li>
                    <li>
                        <i class="icon-check"></i>
                        Яндекс.Метрика с целями
                    </li>
                    <li>
                        <i class="icon-check"></i>
                        Форма → мгновенно в Telegram
                    </li>
                    <li>
                        <i class="icon-check"></i>
                        Поддержка 45 дней — баги за мой счёт
                    </li>
                </ul>
                <div class="service__price">
                    Лендинг от <strong>45 000 ₽</strong>
                </div>
                <div class="btn actionShowContactForm">
                    <span>Получить расчет</span>  
                    <i class="icon-arrow-right"></i>
                </div>
            </div>
            <div class="service-card">
                <div class="service-card__label">Как это работает</div>
                <div class="service-subcard">
                    <div class="service-subcard__label">Как это работает</div>
                    <ul class="service-subcard__list">
                        <li>
                            <i>1</i>
                            <span>Клиент оставляет заявку на сайте</span>
                        </li>
                        <li>
                            <i>2</i>
                            <span>Заявка автоматически в amoCRM</span>
                        </li>
                        <li>
                            <i>3</i>
                            <span>Вам пришло сообщение в Telegram</span>
                        </li>
                        <li class="--accent">
                            <i class="icon-check"></i>
                            <span>0 потерянных заявок, вся история в CRM</span>
                        </li>
                    </ul>
                </div>
                <div class="key-box">
                    <div class="keys-box__label">🎯 Трафик из Директа</div>
                    <ul class="keys-box__list">
                        <li>создание сайта</li>
                        <li>лендинг заказать</li>
                        <li>разработка сайта</li>
                        <li>сайт под ключ</li>
                        <li>лендинг под бизнес</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="section-divider"></div>
</div>

<section class="how-work">
    <div class="container">
        <h2 class="section-short-title">Как работаем</h2>
        <p class="section-title">От заявки до готового сайта — <strong>6 шагов</strong></p>
        <p class="how-work__desc">Прозрачный процесс: вы в курсе каждого этапа. Никаких сюрпризов.</p>
        <div class="how-work__items">
            <div class="how-work-item">
                <div class="how-work-item__num">1</div>
                <p class="how-work-item__title">Бриф</p>
                <p class="how-work-item__desc">Рассказываете задачу — предлагаю решение, называю цену и срок. Бесплатно.</p>
            </div>
            <div class="how-work-item">
                <div class="how-work-item__num">2</div>
                <p class="how-work-item__title">Анализ</p>
                <p class="how-work-item__desc">Изучаю конкурентов и нишу. Подбираю структуру под конверсию и трафик.</p>
            </div>
            <div class="how-work-item">
                <div class="how-work-item__num">3</div>
                <p class="how-work-item__title">Прототип</p>
                <p class="how-work-item__desc">Показываю структуру в Figma. Согласовываем до начала дизайна.</p>
            </div>
            <div class="how-work-item">
                <div class="how-work-item__num">4</div>
                <p class="how-work-item__title">Разработка</p>
                <p class="how-work-item__desc">Верстаю, подключаю формы, Метрику, CRM. Показываю на тестовой ссылке.</p>
            </div>
            <div class="how-work-item">
                <div class="how-work-item__num">5</div>
                <p class="how-work-item__title">Тестирование</p>
                <p class="how-work-item__desc">Проверяю на всех устройствах и браузерах. Тестирую все формы и сценарии.</p>
            </div>
            <div class="how-work-item">
                <div class="how-work-item__num">6</div>
                <p class="how-work-item__title">Запуск</p>
                <p class="how-work-item__desc">Переносим на домен. Остаток оплаты. 45 дней поддержки — баги за мой счёт.</p>
            </div>
        </div>
    </div>
</section>
<div class="section-divider"></div>

<section class="cases">
    <div class="container">
        <h2 class="section-short-title">Примеры работ</h2>
        <p class="section-title">Кейсы — задача, решение, результат</p>
        <p class="cases__desc">Реальные проекты с деталями</p>
        <div class="cases__items">
            <div class="case-card">
                <div class="case-card__image">
                    <img src="<?=  get_template_directory_uri() ?>/assets/img/cases/copterdrone.webp" alt="" loading="lazy" width="338" height="155">
                </div>
                <div class="case-card__content">
                    <h3 class="case-card__title">Интернет-магазин RC-техники</h3>
                    <p class="case-card__desc">
                        Каталог с фильтрами, корзина, ЮKassa, личный кабинет. Владелец управляет сам без программиста.
                    </p>
                    <div class="case-card__result">
                        <i class="icon-check"></i>
                        Результат: запущен с первого месяца, клиент сам добавляет товары
                    </div>
                    <ul class="case-card__bottom">
                        <li>Срок: <em>28 дней</em></li>
                        <li>Стек: <em>WooCommerce</em></li>
                    </ul>
                </div>
            </div>
            <div class="case-card">
                <div class="case-card__image">
                    <img src="<?=  get_template_directory_uri() ?>/assets/img/cases/la-brea.webp" alt="" loading="lazy" width="338" height="155">
                </div>
                <div class="case-card__content">
                    <h3 class="case-card__title">Интернет-магазин la-brea.ru</h3>
                    <p class="case-card__desc">
                        Дизайн + верстка + интеграция CMS. Адаптив, быстрая загрузка, платёжная система, аналитика.
                    </p>
                    <div class="case-card__result">
                        <i class="icon-check"></i>
                        Результат: сдан за 21 день, PageSpeed 94, работает без доработок
                    </div>
                    <ul class="case-card__bottom">
                        <li>Срок: <em>21 день</em></li>
                        <li>Стек: <em>E-commerce</em></li>
                    </ul>
                </div>
            </div>
            <div class="case-card">
                <div class="case-card__image">
                    <img src="<?=  get_template_directory_uri() ?>/assets/img/cases/local1best.webp" alt="" loading="lazy" width="338" height="155">
                </div>
                <div class="case-card__content">
                    <h3 class="case-card__title">Сайт локальных услуг — все штаты США</h3>
                    <p class="case-card__desc">
                        Многостраничник под каждый город и штат. SEO-архитектура для органики. 300+ уникальных страниц
                    </p>
                    <div class="case-card__result">
                        <i class="icon-check"></i>
                        Результат: органический трафик с первого месяца по локальным запросам
                    </div>
                    <ul class="case-card__bottom">
                        <li>Срок: <em>35 дней</em></li>
                        <li>Страниц: <em>300+</em></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section-divider"></div>

<section class="fix-services">
    <div class="container">
        <h2 class="section-short-title">Стоимость</h2>
        <p class="section-title">Чёткие цены — без «по договорённости»</p>
        <p class="fix-services__desc">Фиксирую стоимость до начала работ. Цена не изменится в процессе.</p>
        <div class="fix-services__cards">
            <div class="fix-svc-card">
                <div class="fix-svc-card__cat">Сайты</div>
                <h3 class="fix-svc-card__title">Лендинг</h3>
                <div class="fix-svc-card__price">45 000 ₽</div>
                <div class="fix-svc-card__subprice">срок 14–21 день</div>
                <ul class="fix-svc-card__list">
                    <li>Анализ конкурентов</li>
                    <li>Прототип и дизайн</li>
                    <li>Адаптивная верстка</li>
                    <li>Форма + Telegram</li>
                    <li>Яндекс.Метрика с целями</li>
                    <li>45 дней поддержки</li>
                </ul>
                <div class="btn --outline">
                    <span>Обсудить лендинг</span>
                    <i class="icon-arrow-right"></i>
                </div>
            </div>
            <div class="fix-svc-card --accent">
                <div class="fix-svc-card__badge">Популярный</div>
                <div class="fix-svc-card__cat">Сайты</div>
                <h3 class="fix-svc-card__title">Многостраничный сайт</h3>
                <div class="fix-svc-card__price">65 000 ₽</div>
                <div class="fix-svc-card__subprice">срок 21–35 дней</div>
                <ul class="fix-svc-card__list">
                    <li>Всё из «Лендинг»</li>
                    <li>До 10 страниц</li>
                    <li>CMS — управляете сами</li>
                    <li>SEO-структура и разметка</li>
                    <li>Интеграция с CRM</li>
                    <li>45 дней поддержки</li>
                </ul>
                <div class="btn">
                    <span>Узнать стоимость</span>
                    <i class="icon-arrow-right"></i>
                </div>
            </div>
            <div class="fix-svc-card">
                <div class="fix-svc-card__cat">Магазины</div>
                <h3 class="fix-svc-card__title">Интернет-магазин</h3>
                <div class="fix-svc-card__price">85 000 ₽</div>
                <div class="fix-svc-card__subprice">срок 14–21 день</div>
                <ul class="fix-svc-card__list">
                    <li>Каталог с фильтрами</li>
                    <li>Онлайн-оплата</li>
                    <li>Интеграция доставки</li>
                    <li>Личный кабинет</li>
                    <li>Обучение управлению</li>
                    <li>45 дней поддержки</li>
                </ul>
                <div class="btn --outline">
                    <span>Обсудить магазин</span>
                    <i class="icon-arrow-right"></i>
                </div>
            </div>
        </div>
        <div class="fix-services__bottom">
            Верстка — от 10 000 ₽  ·  Интеграции — от 8 000 ₽  ·  Оптимизация — от 5 000 ₽  ·  Аудит — бесплатно
        </div>
    </div>
</section>
<div class="section-divider"></div>

<section class="faq">
    <div class="container">
        <h2 class="section-short-title">Вопросы и ответы</h2>
        <p class="section-title">Часто спрашивают</p>
        <p class="faq__desc">Не нашли ответ — напишите в Telegram, отвечу в течение часа</p>
        <div class="faq__items">
            <div class="faq-item">
                <div class="faq-item__label" tabindex="0">
                    <span>А вдруг вы возьмёте предоплату и пропадёте?</span>
                    <i class="icon-chevron-down"></i>
                </div>
                <div class="faq-item__dropdown">
                    <div class="faq-item__text">
                        Понимаю этот страх — с фрилансерами такое бывало. Поэтому: договор с реквизитами до старта, ежедневный отчёт о прогрессе в Telegram, поэтапная оплата — 50% предоплата и 50% только после сдачи. Плюс 38+ сданных проектов — это репутация, которую не бросают.
                    </div>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-item__label" tabindex="0">
                    <span>А вдруг вы возьмёте предоплату и пропадёте?</span>
                    <i class="icon-chevron-down"></i>
                </div>
                <div class="faq-item__dropdown">
                    <div class="faq-item__text">
                        Понимаю этот страх — с фрилансерами такое бывало. Поэтому: договор с реквизитами до старта, ежедневный отчёт о прогрессе в Telegram, поэтапная оплата — 50% предоплата и 50% только после сдачи. Плюс 38+ сданных проектов — это репутация, которую не бросают.
                    </div>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-item__label" tabindex="0">
                    <span>А вдруг вы возьмёте предоплату и пропадёте?</span>
                    <i class="icon-chevron-down"></i>
                </div>
                <div class="faq-item__dropdown">
                    <div class="faq-item__text">
                        Понимаю этот страх — с фрилансерами такое бывало. Поэтому: договор с реквизитами до старта, ежедневный отчёт о прогрессе в Telegram, поэтапная оплата — 50% предоплата и 50% только после сдачи. Плюс 38+ сданных проектов — это репутация, которую не бросают.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section-divider"></div>

<section class="contact">
    <div class="container">
        <div class="contact__left">
            <h2 class="section-short-title">Контакты</h2>
            <p class="section-title">Обсудим <br>ваш проект?</p>
            <p class="contact__desc">Расскажите задачу — предложу решение, назову стоимость и срок. Даже если пока только идея. Консультация бесплатно.</p>
            <div class="contact__socials">
                <a href="#" class="social-btn">
                    <img src="<?=  get_template_directory_uri() ?>/assets/img/socials/telegram.svg" alt="" width="24" height="24">
                    <span>Telegram</span>
                </a>
                <a href="#" class="social-btn">
                    <img src="<?=  get_template_directory_uri() ?>/assets/img/socials/telegram.svg" alt="" width="24" height="24">
                    <span>WhatsApp</span>
                </a>
                <a href="#" class="social-btn">
                    <img src="<?=  get_template_directory_uri() ?>/assets/img/socials/telegram.svg" alt="" width="24" height="24">
                    <span>Viber</span>
                </a>
            </div>
            <ul class="contact__list">
                <li><i class="icon-check"></i>Ответ в течение 1 часа</li>
                <li><i class="icon-check"></i>Работаю с 12:00 до 23:00 по МСК</li>
                <li><i class="icon-check"></i>Консультация и оценка — бесплатно</li>
                <li><i class="icon-check"></i>Договор на каждый проект</li>
            </ul>
        </div>
        <form action="javascript:void(0);" class="contact-form">
            <div class="contact-form__bg"></div>
            <div class="contact-form__wrapper">
                <h2 class="contact-form__title">Получить расчёт</h2>
                <p class="contact-form__desc">Заполните форму — отвечу в течение 15 минут</p>
                <div class="contact-form__inputs">
                    <div class="input">
                        <span class="input__label">Имя</span>
                        <span class="input__input">
                            <input type="text" name="name" placeholder="Иван">
                            <i class="icon-close"></i>
                        </span>
                    </div>
                    <div class="input">
                        <span class="input__label">Телефон / Telegram</span>
                        <span class="input__input">
                            <input type="text" name="phone" placeholder="+7 или @username">
                            <i class="icon-close"></i>
                        </span>
                    </div>
                    <div class="select">
                        <input type="hidden" name="service">
                        <div class="select__label">Что нужно?</div>
                        <div class="select__button" tabindex="0">
                            <span>Выберите услугу</span>
                            <div class="icon-chevron-down"></div>
                        </div>
                        <div class="select__options">
                            <div class="select__option --hover" data-value="Другое">Выберите услугу</div>
                            <div class="select__option">Лендинг / сайт под ключ</div>
                            <div class="select__option">Интернет-магазин</div>
                            <div class="select__option">Интеграция CRM / API</div>
                            <div class="select__option">Верстка по макету</div>
                            <div class="select__option">Оптимизация / аудит</div>
                            <div class="select__option">Другое</div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="contact-form__submit-btn btn">
                    <span>Получить расчёт за 15 минут</span>
                    <i class="icon-arrow-right"></i>
                </button>
                <div class="contact-form__policy-note">Нажимая кнопку, вы соглашаетесь с политикой конфиденциальности</div>
                <div class="contact-form__time-note">
                    <i>⚡</i>
                    <span>Обычно отвечаю за 15–30 минут</span>
                </div>
            </div>
        </form>
    </div>
</section>

<?php });
?>