<!-- Шапка -->

<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__left">
                <a href="/" title="На главную" class="logo">
                    <img src="/images/logo.png" alt="logo.png">
                </a>
            </div>
            <div class="header__right">
                <div class="header__pannel">
                    <div class="choose-city">
                        <span>Ваш город:</span>
                        <a href="#city" data-fancybox onclick="chooseCity()">Новосибирск</a>
                    </div>
                    <a href="javascript:;" class="compare" title="Добавить в сравнение">
                        <img src="/images/compare.png" alt="compare.png">
                        <span class="count">1</span>
                        <div class="link_title">Сравнить</div>
                    </a>
                    <a href="javascript:;" class="cart" title="Добавить в корзину">
                        <img src="/images/cart.png" alt="cart.png">
                        <span class="count">10</span>
                        <div class="link_title">Корзина</div>
                    </a>
                    <div class="registration" title="Личный кабинет">
                        <img src="/images/reg.png" alt="reg.png">
                        <div class="link_title"><a href="#entry" class="registration__link" data-fancybox>Вход</a> /<br><a href="/" class="registration__link">Регистрация</a></div>
                    </div>
                    <div class="phone">
                        <a href="tel:73333332211" title="Поозвонить нам">+7 333 333 22 11</a>
                    </div>
                </div>
                <div class="header__serach">
                    <form action="" method="post">
                        <input type="text" placeholder="Поиск товара">
                        <button type="submit" title="Искать"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="main-menu">
    <div class="container">
        <nav class="nav">
            <a href="#catalog" class="nav__catalog" data-fancybox onclick="setCatalog()">
                Каталог
                <div class="custom-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
            <ul class="nav__list">
                <li class="active"><a href="javascript:;">Главная</a></li>
                <li><a href="javascript:;">О компании</a></li>
                <li><a href="javascript:;">Акции</a></li>
                <li><a href="javascript:;">Статьи</a></li>
                <li><a href="javascript:;">Условия доставки</a></li>
                <li><a href="javascript:;">Контакты</a></li>
            </ul>
        </nav>
    </div>
</section>