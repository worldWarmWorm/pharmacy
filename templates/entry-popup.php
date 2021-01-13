<!-- Форма входа в ЛК -->

<div id="entry" class="entry">
    <h2 class="entry__title">Вход</h2>
    <div class="entry__content">
        <form action="" class="entry-form">
            <label class="entry-form__name">
                Номер телефона или E-mail *
                <input type="text" name="" id="">
            </label>
            <label class="entry-form__password entry-error">
                Пароль *
                <input type="text" name="" id="">
                <a href="/" class="reset">Восстановить пароль</a>
                <span class="entry-error">Неверный логин или пароль!</span>
            </label>
            <div class="entry-form__buttons">
                <button class="btn btn_entry">Войти</button>
                <button class="btn btn_registration">Регистрация</button>
            </div>
        </form>
    </div>
</div>

<!-- entry-error - класс отвечающий за красную подсветку при ошибке ввода -->