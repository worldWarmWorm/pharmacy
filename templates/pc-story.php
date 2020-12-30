<!-- Страница личного кабинета - история заказов -->

<?php require_once('breadcrumbs.php'); ?>

<section class="cabinet cabinet-story">
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
            <h2>История заказов</h2>
            <div class="order-item">
                <div class="order-item__top">
                    <div class="order-item__name">
                        Заказ №880 от 09.02.2021, 2 товара на сумму 440.10 руб.
                    </div>
                    <div class="order-item__status order-item__status_accept">
                        Заказ выполнен 10.02.2021
                    </div>
                </div>
                <div class="order-item__bottom">
                    <a href="/" type="button" class="to-details btn">Подробнее о заказе</a>
                    <a href="/" type="button" class="repeat-order btn">Повторить заказ</a>
                </div>
            </div>
            <div class="order-item">
                <div class="order-item__top">
                    <div class="order-item__name">
                        Заказ №880 от 09.02.2021, 2 товара на сумму 440.10 руб.
                    </div>
                    <div class="order-item__status order-item__status_reject">
                        Заказ анулирован 10.02.2021
                    </div>
                </div>
                <div class="order-item__bottom">
                    <a href="/" type="button" class="to-details btn">Подробнее о заказе</a>
                    <a href="/" type="button" class="repeat-order btn">Повторить заказ</a>
                </div>
            </div>
        </div>


    </div>
</section>