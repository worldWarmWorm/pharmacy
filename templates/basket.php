<!-- Страница корзины -->

<?php require_once('breadcrumbs.php'); ?>

<section class="basket">
    <h1 class="default-title">Корзина</h1>

    <div class="basket__content">
        <div class="basket__item">
            <div class="basket__item-head">
                <div class="basket__item-name">Товар</div>
                <div class="basket__item-cost">Цена за ед.</div>
                <div class="basket__item-quantity">Количество</div>
                <div class="basket__item-result">Сумма</div>
            </div>
            <div class="basket__item-body">
                <div class="basket__body-good">
                    <a href="/"><img src="/images/good-cart.png" alt="good-cart.png"></a>
                    <div>
                        <a href="">Неосмектин пор д/сусп д/вн прим ваниль 3 г пак/пач карт x10</a>
                        <div class="chosen">
                            <label>
                                <input type="checkbox" name="" id=""> В избранное
                                <span class="input-custom"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="basket__body-cost">
                    <span class="default-price">234.40 руб.</span>
                    <span class="sale-price">134.40 руб.</span>
                </div>
                <div class="basket__body-switchers price-switchers">
                    <button type="button" class="toggler-btn down">-</button>
                    <input type="text" disabled value="1" class="count">
                    <button type="button" class="toggler-btn up">+</button>
                </div>
                <div class="basket__body-result">
                    <div class="total-cost">
                        <span class="default-price">234.40 руб.</span>
                        <span class="sale-price">134.40 руб.</span>
                    </div>
                    <button type="button" class="delete">
                        <span>Удалить</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="basket__item basket__item_adaptive">
            <div class="basket__body-good">
                <a href="/"><img src="/images/good-cart.png" alt="good-cart.png"></a>
                <div>
                    <a href="">Неосмектин пор д/сусп д/вн прим ваниль 3 г пак/пач карт x10</a>
                    <div class="chosen">
                        <label>
                            <input type="checkbox" name="" id=""> В избранное
                            <span class="input-custom"></span>
                        </label>
                    </div>
                </div>
                <div class="btn-wrap">
                    <button type="button" class="delete">
                        <span>Удалить</span>
                    </button>
                </div>
            </div>
            <div class="basket__item-head">
                <div class="basket__item-cost">Цена за ед.</div>
                <div class="basket__item-quantity">Количество</div>
                <div class="basket__item-result">Сумма</div>
            </div>
            <div class="bascket__item-bottom">
                <div class="basket__body-cost">
                    <span class="default-price">234.40 руб.</span>
                    <span class="sale-price">134.40 руб.</span>
                </div>
                <div class="basket__body-switchers price-switchers">
                    <button type="button" class="toggler-btn down">-</button>
                    <input type="text" disabled value="1" class="count">
                    <button type="button" class="toggler-btn up">+</button>
                </div>
                <div class="basket__body-result">
                    <div class="total-cost">
                        <span class="default-price">234.40 руб.</span>
                        <span class="sale-price">134.40 руб.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="basket__results">
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

        <div class="basket__buttons flex">
            <div><a href="/" class="btn-to-shop btn">Продолжить покупки</a></div>
            <div><button type="button" class="btn btn-make-order">Оформить заказ</button></div>
        </div>
    </div>
</section>