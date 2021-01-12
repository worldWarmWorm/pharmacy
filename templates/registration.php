<!-- Страница регистрации -->

<?php require_once('breadcrumbs.php'); ?>

<section class="reg">
    <h1 class="default-title">Регистрация</h1>

    <form action="" class="reg__form">
        <label class="reg__name">
            <div class="text__field">Ф.И.О. <span class="required">*</span></div>
            <input type="text">
            <span>Заполните, чтобы мы знали, как к вам обращаться.</span>
        </label>
        <label class="reg__tel">
            <div class="text__field">Телефон <span class="required">*</span></div>
            <input type="tel" placeholder="+7 (___) ___ - __ -__">
            <span>Необходим для уточнения деталей заказа.</span>
        </label>
        <label class="reg__email">
            <div class="text__field">Почта <span class="required">*</span></div>
            <input type="text">
            <span>Для отправки уведомлений о статусе заказа. Используйте как логин для входа в личный кабинет.
            </span>
        </label>
        <label class="reg__password">
            <div class="text__field">Пароль <span class="required">*</span></div>
            <input type="password">
            <span>Минимум 6 симвоолов</span>
        </label>
        <label class="reg__repeat">
            <div class="text__field">Подтверждение пароля <span class="required">*</span></div>
            <input type="password">
        </label>
        <div class="reg__bottom">
            <label class="reg__policy">
                <input type="checkbox" name="reg" id="" checked>
                <div>Нажатие кнопки "Зарегистрироваться" означает согласие с настоящей <a href="/">Политикой конфиденциальности и Обработки персональных данных</a></div>
                <span class="custom-checkbox"></span>
            </label>
            <a href="/" class="btn btn_reg">Зарегистрироваться</a>
        </div>
    </form>
</section>