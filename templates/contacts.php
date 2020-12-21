<!-- Страница контактов -->

<?php require_once('breadcrumbs.php'); ?>

<section class="contacts">
    <h1 class="default-title">Контакты</h1>

    <div class="contacts__content">
        <div class="contacts__head flex">
            <div class="contacts__items">
                <div class="tel flex">
                    <div class="tel__icon">
                        <img src="/images/phone.svg" alt="phone.svg">
                    </div>
                    <div class="tel__number">
                        Телефон
                        <a href="tel:+73333332211">+7 333 333 22 11</a>
                    </div>
                </div>
                <div class="email flex">
                    <div class="email__icon">
                        <img src="/images/mail-white.svg" alt="mail-white.svg">
                    </div>
                    <div class="email__address">
                        E-mail
                        <a href="mailto:apteka@yandex.ru">apteka@yandex.ru</a>
                    </div>
                </div>
                <div class="schedule flex">
                    <div class="schedule__icon">
                        <img src="/images/time.svg" alt="time.svg">
                    </div>
                    <div class="schedule__time">
                        Режим работы
                        <span>Круглосуточно</span>
                    </div>
                </div>
            </div>
            <div class="contacts__requisites">
                <h3 class="contacts__requisites-title">Реквизиты</h3>
                <div class="contacts__requisites-props">
                    <div class="contacts__requisit-prop flex-50">
                        <div class="key">Юридическое название</div>
                        <div class="value">Тут юридическое название</div>
                    </div>
                    <div class="contacts__requisit-prop flex-50">
                        <div class="key">Юридический адрес</div>
                        <div class="value">Тут юридический адрес</div>
                    </div>
                    <div class="contacts__requisit-prop flex-50">
                        <div class="key">ОГРН</div>
                        <div class="value">0077748467898</div>
                    </div>
                    <div class="contacts__requisit-prop flex-50">
                        <div class="key">ИНН</div>
                        <div class="value">1234567891011</div>
                    </div>
                </div>
            </div>
            <div class="contacts__social-nets">
                <h3 class="contacts__social-nets-title">Соцсети</h3>
                <div class="contacts__social-nets-items">
                    <a href="https://ok.ru" target="_blank"><img src="/images/ok.svg" alt="ok.svg"></a>
                    <a href="https://vk.com" target="_blank"><img src="/images/vk.svg" alt="vk.svg"></a>
                    <a href="https://ru-ru.facebook.com/" target="_blank"><img src="/images/fb.svg" alt="fb.svg"></a>
                </div>
            </div>
        </div>

        <div class="addresses">
            <h2 class="addresses__title">Адреса аптек в Сибирском Федеральном округе</h2>
            <div class="addresses__item">
                <div class="addresses__item-data">
                    <div class="addresses__item-address">
                        <span class="address-icon"><img src="/images/geo.svg" alt="geo.svg"></span>
                        г. Новосибирск, ул. Сибиряков-Гвардейцев, 34
                    </div>
                    <div class="addresses__item-ditails">
                        <p>
                            <span>Метро</span>
                            ежедневно с 08:00 по 22:00
                        </p>
                        <p>
                            <span>Режим работы</span>
                            Площадь Маркса
                        </p>
                        <p>
                            <span>Метро</span>
                            ежедневно с 08:00 по 22:00
                        </p>
                        <p>
                            <span>Режим работы</span>
                            Площадь Маркса
                        </p>
                    </div>
                </div>
                <div class="addresses__item-map"><img src="/images/map.jpg" alt="map.jpg"></div>
            </div>
            <div class="addresses__item">
                <div class="addresses__item-data">
                    <div class="addresses__item-address">
                        <span class="address-icon"><img src="/images/geo.svg" alt="geo.svg"></span>
                        г. Новосибирск, ул. Сибиряков-Гвардейцев, 34
                    </div>
                    <div class="addresses__item-ditails">
                        <p>
                            <span>Метро</span>
                            ежедневно с 08:00 по 22:00
                        </p>
                        <p>
                            <span>Режим работы</span>
                            Площадь Маркса
                        </p>
                        <p>
                            <span>Метро</span>
                            ежедневно с 08:00 по 22:00
                        </p>
                        <p>
                            <span>Режим работы</span>
                            Площадь Маркса
                        </p>
                    </div>
                </div>
                <div class="addresses__item-map"><img src="/images/map.jpg" alt="map.jpg"></div>
            </div>
            <div class="addresses__item">
                <div class="addresses__item-data">
                    <div class="addresses__item-address">
                        <span class="address-icon"><img src="/images/geo.svg" alt="geo.svg"></span>
                        г. Новосибирск, ул. Сибиряков-Гвардейцев, 34
                    </div>
                    <div class="addresses__item-ditails">
                        <p>
                            <span>Метро</span>
                            ежедневно с 08:00 по 22:00
                        </p>
                        <p>
                            <span>Режим работы</span>
                            Площадь Маркса
                        </p>
                        <p>
                            <span>Метро</span>
                            ежедневно с 08:00 по 22:00
                        </p>
                        <p>
                            <span>Режим работы</span>
                            Площадь Маркса
                        </p>
                    </div>
                </div>
                <div class="addresses__item-map"><img src="/images/map.jpg" alt="map.jpg"></div>
            </div>
        </div>
        <div class="view-other-regions">
            <a href="">Посмотреть адреса в другом регионе</a>
        </div>

        <div class="connect-form">
            <h2>Напишите нам</h2>

            <form action="" method="post" id="" class="flex-50">
                <div class="left">
                    <label for="name">Имя</label>
                    <input type="text" name="name" id="name">

                    <label for="phone">Телефон</label>
                    <input type="text" name="phone" id="phone" placeholder="+7 (___) ___ - __ - __">

                    <label for="email">Почта</label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="right">
                    <label for="message">Сообщение</label>
                    <textarea name="message" id="message"></textarea>
                </div>
                <div class="bottom">
                    <div class="privacy">
                        <label>
                            <input type="checkbox" name="confirmation" id=""> Нажатие кнопки “Отправить” означает согласие с настоящей <a href="/">Политикой конфиденциальности</a>
                        </label>
                    </div>
                    <div class="buttons">
                        <button type="reset" class="btn reset_btn">Сбросить</button>
                        <button type="submit" class="btn send_btn">Отправить</button>
                    </div>
                </div>
            </form>
            <div class="absolute-images">
                <img src="/images/women.png" alt="women.png" class="women">
                <img src="/images/convert.png" alt="convert.png" class="convert">
            </div>
        </div>
    </div>
</section>