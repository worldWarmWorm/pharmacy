<!-- Страница корзины -->

<?php require_once('breadcrumbs.php'); ?>

<section class="basket">
    <h1 class="default-title">Корзина</h1>

    <div class="basket__content">
        <div class="basket__item">
            <div class="basket__item-head">
                <div class="basket__item-name">
                    <img src="/images/good-cart.png" alt="good-cart.png">
                    <p>
                        Неосмектин пор д/сусп д/вн прим ваниль 3 г пак/пач карт x10

                    </p>
                </div>
                <div class="basket__item-cost">

                </div>
                <div class="basket__item-quantity">

                </div>
                <div class="basket__item-result">

                </div>
            </div>
            <div class="basket__item-body">
                <div class="basket__body-good">

                </div>
                <div class="basket__body-cost">

                </div>
                <div class="basket__body-switchers price-switchers">
                    <button type="button" class="toggler-btn down">-</button>
                    <input type="text" disabled value="1" class="count">
                    <button type="button" class="toggler-btn up">+</button>
                </div>
                <div class="basket__body-result">

                </div>
            </div>
        </div>



        <div class="basket__results">
            <p class="rusult-costt>Товаров на сумму: <span class=" total-cost">134.40</span> <span class="currency">руб.</span></p>
            <p class="result-sale">Скидка: <span class="total-sale">100.00</span> <span class="currency">руб.</span></p>
        </div>

        <div class="basket__buttons">
            <a href="/" class="btn-to-shop btn">Продолжить покупки</a>
            <button type="button" class="btn btn-make-order">Оформить заказ</button>
        </div>
    </div>
</section>