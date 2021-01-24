<!-- Страница личного кабинета - личные данные -->

<?php require_once('breadcrumbs.php'); ?>

<section class="cabinet">
    <h1 class="default-title">Личный кабинет</h1>

    <div class="cabinet__content flex">
        <div class="navigation-pannel">
            <div class="burger burger_cabinet">
                <span></span>
                <span></span>
            </div>
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
                <div class="left flex">
                    <div class="flex">
                        <b>ФИО</b>
                        <span>Иванов Петр Сергеевич</span>
                    </div>
                    <div class="flex">
                        <b>Телефон</b>
                        <span>8 888 000 00 00</span>
                    </div>
                    <div class="flex">
                        <b>E-mail</b>
                        <span>111@mail.ru</span>
                    </div>
                </div>
                <div class="right flex">
                    <div class="flex">
                        <b>Пароль</b>
                        <span>************</span>
                    </div>
                    <div class="flex">
                        <b>Бонусная карта</b>
                        <span>555 666 888</span>
                    </div>
                    <div class="flex">
                        <b>БОНУСОВ</b>
                        <span>325</span>
                    </div>
                </div>
            </div>
            <a href="/">Редактировать данные</a>
            <br>
            <a href="/">Сменить пароль</a>
        </div>
    </div>
</section>