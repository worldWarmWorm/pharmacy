<!-- Страница личного кабинета - текущие заказы -->

<?php require_once('breadcrumbs.php'); ?>

<section class="cabinet cabinet-current">
    <h1 class="default-title">Личный кабинет</h1>

    <div class="cabinet__content flex">
        <div class="navigation-pannel">
            <ul>
                <li class="active"><a href="">Личные данные</a></li>
                <li><a href="">Корзина</a></li>
                <li><a href="">История заказов</a></li>
                <li><a href="">Текущие заказы</a></li>
                <li><a href="">Избранное</a></li>
                <li><a href="">Выход</a></li>
            </ul>
        </div>
        <div class="personal-data">
            <h2>Текущие заказы</h2>
            <div class="order-item">
                <div class="order-item__top">
                    <div class="order-item__name">
                        Заказ №880 от 09.02.2021, 2 товара на сумму 440.10 руб.
                    </div>
                    <div class="order-item__status order-item__status_accept">
                        Новый
                    </div>
                </div>
                <div class="order-item__bottom">
                    <div class="order-control">
                        <a href="/" type="button" class="to-details">Подробнее о заказе</a>
                    </div>
                </div>
            </div>
            <div class="order-item">
                <div class="order-item__top">
                    <div class="order-item__name">
                        Заказ №880 от 09.02.2021, 2 товара на сумму 440.10 руб.
                    </div>
                    <div class="order-item__status order-item__status_accept">
                        Готов к выдаче
                    </div>
                </div>
                <div class="order-item__bottom">
                    <div class="order-control">
                        <a href="/" type="button" class="to-details">Подробнее о заказе</a>
                        <a href="/" type="button" class="cancel">Отменить заказ</a>
                    </div>
                    <a href="/" class="get-pay btn">Оплатить онлайн</a>
                </div>
            </div>
            <div class="order-item">
                <div class="order-item__top">
                    <div class="order-item__name">
                        Заказ №880 от 09.02.2021, 2 товара на сумму 440.10 руб.
                    </div>
                    <div class="order-item__status order-item__status_ready">
                        Ожидает подтверждение
                    </div>
                </div>
                <div class="order-item__bottom">
                    <div class="order-control">
                        <a href="/" type="button" class="to-details">Подробнее о заказе</a>
                        <a href="/" type="button" class="cancel">Отменить заказ</a>
                    </div>
                    <a href="/" class="make-pay btn">Подтвердить</a>
                </div>
            </div>
            <div class="order-item">
                <div class="order-item__top">
                    <div class="order-item__name">
                        Заказ №880 от 09.02.2021, 2 товара на сумму 440.10 руб.
                    </div>
                    <div class="order-item__status order-item__status_aproove">
                        Подтвержден
                    </div>
                </div>
                <div class="order-item__bottom">
                    <div class="order-control">
                        <a href="/" type="button" class="to-details">Подробнее о заказе</a>
                        <a href="/" type="button" class="cancel">Отменить заказ</a>
                    </div>
                </div>
            </div>
            <div class="order-item">
                <div class="order-item__top">
                    <div class="order-item__name">
                        Заказ №880 от 09.02.2021, 2 товара на сумму 440.10 руб.
                    </div>
                    <div class="order-item__status order-item__status_accept">
                    Готов к выдаче
                    </div>
                </div>
                <div class="order-item__bottom">
                    <div class="order-control">
                        <a href="/" type="button" class="to-details">Подробнее о заказе</a>
                        <a href="/" type="button" class="cancel">Отменить заказ</a>
                    </div>
                    <div class="self-deliver">Оплата при самовывозе</div>
                </div>
            </div>
        </div>
    </div>
</section>