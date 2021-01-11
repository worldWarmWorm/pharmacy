<!-- Страница личного кабинета - избранные товары -->

<?php require_once('breadcrumbs.php'); ?>

<section class="cabinet cabinet-order">
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
            <h2>Заказ №888</h2>
            <p>Товары в заказе</p>
            <div class="basket__item">
                <div class="basket__item-body">
                    <div class="basket__body-good">
                        <a href=""><img src="/images/good-cart.png" alt="good-cart.png"></a>
                        <div>
                            <a href="/">Неосмектин пор д/сусп д/вн прим ваниль 3 г пак/пач карт x10</a>
                        </div>
                        <span>1 уп.</span>
                    </div>
                    <div class="basket__body-cost">
                        <span class="default-price">234.40 руб.</span>
                        <span class="sale-price">134.40 руб.</span>
                    </div>
                </div>
            </div>
            <div class="basket__item">
                <div class="basket__item-body">
                    <div class="basket__body-good">
                        <a href=""><img src="/images/good-cart.png" alt="good-cart.png"></a>
                        <div>
                            <a href="/">Неосмектин пор д/сусп д/вн прим ваниль 3 г пак/пач карт x10</a>
                        </div>
                        <span>1 уп.</span>
                    </div>
                    <div class="basket__body-cost">
                        <span class="default-price">234.40 руб.</span>
                        <span class="sale-price">134.40 руб.</span>
                    </div>
                </div>
            </div>
            <div class="basket__results">
                <div>
                    <div class="basket__result basket__result-cost">
                        <span>Товаров на сумму:</span>
                        <div class="basket__result-cost-size">
                            <span class="total-cost">134.40</span> <span class="currency">руб.</span>
                        </div>
                    </div>
                    <div class="basket__result basket__result-sale">
                        <span>Скидка:</span>
                        <div class="basket__result-sale-size">
                            <span class="total-sale">100.00</span> <span class="currency">руб.</span>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-make-order">Оформить заказ</button>
                </div>
            </div>
            <p>Информация о заказе</p>
            <div class="personal-data__content flex">
                <div class="left flex">
                    <div class="flex">
                        <b>Ф.И.О.</b>
                        <span>Иванов Петр Сергеевич</span>
                    </div>
                    <div class="flex">
                        <b>Телефон</b>
                        <span>8 888 000 00 00</span>
                    </div>
                    <div class="flex">
                        <b>Почта</b>
                        <span>111@mail.ru</span>
                    </div>
                    <div class="flex">
                        <b>Способ получения</b>
                        <span>Самовывоз из аптеки</span>
                    </div>
                    <div class="flex">
                        <b>Аптека для самовывоза</b>
                        <span>г. Новосибирск,  ул. Сибиряков-Гвардейцев, 34 </span>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>