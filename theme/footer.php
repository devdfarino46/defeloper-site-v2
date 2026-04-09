
        </main>

        <footer class="footer">
            <div class="container">
                <div class="footer__main">
                    <div class="logo">
                        <a href="#">
                            <img src="<?=  get_template_directory_uri() ?>/assets/img/logo.svg" alt="">
                        </a>
                    </div>

                    <div class="footer__nav">
                        <div class="footer-nav-link"><a href="javascript:void(0);">Услуги</a></div>
                        <div class="footer-nav-link"><a href="javascript:void(0);">Сайты</a></div>
                        <div class="footer-nav-link"><a href="javascript:void(0);">Магазины</a></div>
                        <div class="footer-nav-link"><a href="javascript:void(0);">Интеграции</a></div>
                        <div class="footer-nav-link"><a href="javascript:void(0);">Верстка</a></div>
                        <div class="footer-nav-link"><a href="javascript:void(0);">Цены</a></div>
                        <div class="footer-nav-link"><a href="javascript:void(0);">Кейсы</a></div>
                        <div class="footer-nav-link"><a href="javascript:void(0);">FAQ</a></div>
                    </div>

                    <div class="footer__copyright">
                        © 2026 df-developer.ru · УНП: KA9737930
                    </div>
                </div>
                <div class="footer__bottom-links">
                    <a href="#">Политика конфиденциальности</a>
                </div>
            </div>
        </footer>

        <div class="modal-overlay"></div>
        <div class="modals" role="presentation">
            <div class="contact-modal">
                <div class="contact-modal__close">
                    <i class="icon-close"></i>
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
        </div>
    </div>

    <script src="<?=  get_template_directory_uri() ?>/assets/js/main.js"></script>
    <?php wp_footer(); ?>
</body>
</html>