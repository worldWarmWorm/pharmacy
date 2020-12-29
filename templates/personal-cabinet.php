<!-- Страница личного кабинета -->

<?php require_once('breadcrumbs.php'); ?>

<section class="cabinet">
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
            <h2>Личные данные</h2>
            <div class="personal-data__content flex-50">
                <div class="left flex-50">
                    <div class="name flex">
                        <b>ФИО</b>
                        <b>Телефон</b>
                        <b>E-mail</b>
                    </div>
                    <div class="description flex">
                        <span>Иванов Петр Сергеевич</span>
                        <span>8 888 000 00 00</span>
                        <span>111@mail.ru</span>
                    </div>
                </div>
                <div class="right flex-50">
                    <div class="name flex">
                        <b>ФИО</b>
                        <b>Телефон</b>
                        <b>E-mail</b>
                    </div>
                    <div class="description flex">
                        <span>Иванов Петр Сергеевич</span>
                        <span>8 888 000 00 00</span>
                        <span>111@mail.ru</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>