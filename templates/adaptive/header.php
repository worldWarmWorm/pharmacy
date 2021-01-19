<!-- Шапка планшет -->

<header class="header header_tablet">
    <div class="container">
        <div class="header__inner">
            <div class="header__left">
                <a href="/" title="На главную" class="logo">
                    <img src="/images/logo.png" alt="logo.png">
                </a>
            </div>
            <div class="header__right">
                <div class="header__pannel">
                    <div class="phone">
                        <a href="tel:73333332211" title="Поозвонить нам">+7 333 333 22 11</a>
                        <div class="choose-city">
                            <a href="#city" data-fancybox onclick="chooseCity()">Новосибирск</a>
                        </div>
                    </div>

                    <div class="burger">
                        <span></span>
                        <span></span>
                    </div>

                    <nav class="adaptive-nav">
                        <ul class="adaptive-nav__list">
                            <li class="active"><a href="javascript:;">Главная</a></li>
                            <li><a href="javascript:;">О компании</a></li>
                            <li><a href="javascript:;">Акции</a></li>
                            <li><a href="javascript:;">Статьи</a></li>
                            <li><a href="javascript:;">Условия доставки</a></li>
                            <li><a href="javascript:;">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="actions-pannel">
    <a href="javascript:;" class="compare" title="Добавить в сравнение">
        <img src="/images/compare.png" alt="compare.png">
        <span class="count">1</span>
    </a>
    <a href="javascript:;" class="cart" title="Добавить в корзину">
        <img src="/images/cart.png" alt="cart.png">
        <span class="count">10</span>
    </a>
    <div class="registration" title="Личный кабинет">
        <div class="link_title">
            <a href="#entry" class="registration__link" data-fancybox>
                <img src="/images/reg.png" alt="reg.png">
            </a>
        </div>
    </div>
</section>

<section class="main-menu main-menu_tablet">
    <div class="container">
        <div class="header__serach">
            <form action="" method="post">
                <input type="text" placeholder="Поиск товара">
                <button type="submit" title="Искать"></button>
            </form>
            <a href="#catalog" class="nav__catalog" data-fancybox onclick="setCatalog()">
                Каталог
                <div class="custom-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </div>
    </div>
</section>