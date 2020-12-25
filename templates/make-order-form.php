<!-- Страница оформления зказа -->

<?php require_once('breadcrumbs.php'); ?>

<section class="make-order">
    <h1 class="default-title">Оформить заказ</h1>

    <div class="make-order__content">
        <form action="" id="" method="post" class="make-order__form">
            <div class="form-data form-info">
                <h2>Информация о покупателе <span class="num">1</span></h2>
                <div class="form-info__content">
                    <label>
                        Ф.И.О. <span class="required">*</span>
                        <input type="text" name="name" id="name">
                    </label>
                    <label>
                        Телефон <span class="required">*</span>
                        <input type="text" name="phone" id="phone">
                    </label>
                    <label>
                        Почта <span class="required">*</span>
                        <input type="text" name="email" id="email">
                    </label>
                </div>
            </div>
            <div class="form-data form-get">
                <h2>Способ получения <span class="num">2</span></h2>
                <div class="form-get__content">
                    <label>
                        <input type="radio" name="way-to-get" id="to-door">
                        Доставка до двери
                    </label>
                    <label>
                        <input type="radio" name="way-to-get" id="self">
                        Самовывоз из Аптеки
                    </label>
                </div>
            </div>
            <div class="form-data form-pay">
                <h2>Способы оплаты <span class="num">3</span></h2>
                <div class="form-pay__content">
                    <label>
                        <input type="radio" name="way-to-pay" id="card">
                        Оплата картой на сайте
                    </label>
                    <label>
                        <input type="radio" name="way-to-pay" id="cash">
                        Оплата при получении
                    </label>
                </div>
            </div>
            <div class="form-data form-address">
                <h2>Адрес получения <span class="num">4</span></h2>
                <div class="form-address__content">
                    <label>
                        <input type="radio" name="address" id="address1">
                        <span class="custom-radio"></span>
                        г. Новосибирск, ул. Сибиряков-Гвардейцев, 34
                    </label>
                    <label>
                        <input type="radio" name="address" id="address2">
                        <span class="custom-radio"></span>
                        г. Новосибирск, ул. Сибиряков-Гвардейцев, 34
                    </label>
                </div>
            </div>
            <div class="form-data form-in-basket">
                <h2>Товары в заказе <span class="num">5</span></h2>
                <div class="form-in-basket__content">
                    <div class="added-item flex">
                        <div class="added-item__image">
                            <img src="/images/good.png" alt="good.png">
                        </div>
                        <div class="added-item__descr">
                            <span>Неосмектин пор д/сусп д/вн прим ваниль 3 г пак/пач карт x10</span>
                            <div class="chosen">
                                <label>
                                    <input type="checkbox" name="" id=""> В избранное
                                    <span class="input-custom"></span>
                                </label>
                            </div>
                        </div>
                        <div class="added-item__box">
                            <span>1 уп.</span>
                        </div>
                        <div class="added-item__price">
                            <span class="default-price">234.40 руб.</span>
                            <span class="sale-price">134.40 руб.</span>
                        </div>
                        <div class="added-item__delete">
                            <button type="button"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-results flex">
                <div class="form-result form-result_cost">
                    <span>Товаров на сумму:</span>
                    <div class="form__result-cost-size">
                        <span class="total-cost">134.40</span> <span class="currency">руб.</span>
                    </div>
                </div>
                <div class="form-result form-result_sale">
                    <span>Скидка:</span>
                    <div class="form-result_sale-size">
                        <span class="total-sale">100.00</span> <span class="currency">руб.</span>
                    </div>
                </div>
                <div class="make-oreder-btn">
                    <button type="submit" class="btn">Оформить заказ</button>
                </div>
            </div>
        </form>
    </div>
</section>