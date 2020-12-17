<!-- Страница подкатегорий -->

<?php require_once('breadcrumbs.php');?>

<section class="cart-item">
    <h1 class="default-title">Изделия медицинского назначения</h1>

    <div class="cart-item__content flex">
        <div class="navigation-pannel">
            <ul>
                <li class="active"><a href="">Лекарственные средства</a></li>
                <li><a href="">Витамины и бады</a></li>
                <li><a href="">Изделия мед. назначения</a></li>
                <li><a href="">Мать и дитя</a></li>
                <li><a href="">Красота и гигиена</a></li>
                <li><a href="">Медицинское оборудование</a></li>
                <li><a href="">Остальные товары</a></li>
            </ul>
        </div>
        <div class="products">
            <div class="products__view flex">
                <div class="products__images">
                    <div class="products__main-image">
                        <a href="/images/product.png" class="cart-item__main-image" data-fancybox="group"><img src="/images/product.png" alt="product.png"></a>
                    </div>
                    <div class="cart-item__more-images">
                        <div>
                            <a href="/images/product.png" data-fancybox="group"><img src="/images/product.png" alt="product.png"></a>
                        </div>
                        <div>
                            <a href="/images/product.png" data-fancybox="group"><img src="/images/product.png" alt="product.png"></a>
                        </div>
                        <div>
                            <a href="/images/product.png" data-fancybox="group"><img src="/images/product.png" alt="product.png"></a>
                        </div>
                    </div>
                </div>

                <div class="products__data">
                    <div class="products__buttons">
                        <div class="products__buttons-left">
                            <div class="product-price"><span>134.40 </span>руб.</div>
                            <div class="price-switchers">
                                <button type="button" class="toggler-btn down">-</button>
                                <input type="text" disabled value="1" class="count">
                                <button type="button" class="toggler-btn up">+</button>
                            </div>
                        </div>
                        <div class="products__buttons-right">
                            <button type="button" class="btn add-to-cart">В корзину</button>
                            <button type="button" class="btn choosen">В избранное</button>
                        </div>
                    </div>
                    <div class="products__char">
                        <h3 class="products__title">Характеристики</h3>
                        <div class="products__char-item">
                            <div class="name">
                                <span class="string">Производитель</span>
                            </div>
                            <div class="value">
                                <span class="string">Фармстандарт-Лексредства</span>
                            </div>
                        </div>
                        <div class="products__char-item">
                            <div class="name">
                                <span class="string">Страна - производитель</span>
                            </div>
                            <div class="value">
                                Россия
                            </div>
                        </div>
                        <div class="products__char-item">
                            <div class="name">
                                <span class="string">Форма выпуска</span>
                            </div>
                            <div class="value">
                                Порошок для приготовления суспензии
                            </div>
                        </div>
                    </div>
                    <div class="products__indication">
                        <h3 class="products__title">Показания</h3>
                        <div class="products__indication-content">
                            Диарея (аллергического, лекарственного генеза; при нарушении режима питания и качественного состава пищи). Диарея
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe quidem quod nesciunt magni quis porro, vero officia sunt ad modi optio libero similique ipsa asperiores corporis eveniet recusandae minima exercitationem!Blanditiis illum dicta dolores quisquam dolorum quo rem itaque unde. Fugiat accusantium soluta recusandae ut numquam quae repellendus sint dolorem alias? Perspiciatis laudantium velit reprehenderit itaque tempora! Magni, tempore debitis?
                        </div>
                        <button class="show-content">Все показания <span class="close-content"></span></button>
                    </div>
                </div>
            </div>

            <div class="products__tabs">
                <div class="products__tabs-bar">
                    <button type="button" class="products__tab active-tab" data-tab="1">Состав</button>
                    <button type="button" class="products__tab" data-tab="2">Описание</button>
                    <button type="button" class="products__tab" data-tab="3">Противопоказания</button>
                </div>
                <div class="products__tab-contents">
                    <div class="products__tab-content active-content" data-content="1">
                        <p>1 пакет (3,76г порошка) содержит: действующее вещество:
                            смектит диоктаэдрический - 3 г;
                        </p>
                        <p><b>Вспомогательные вещества:</b></p>
                        <p>декстрозы моногидрат (глюкозы моногидрат) - 0,726 г, натрия сахаринат (сахарин натрия) - 0,007 г, ванилин - 0,004 г.</p>
                    </div>
                    <div class="products__tab-content" data-content="2">2</div>
                    <div class="products__tab-content" data-content="3">3</div>
                </div>
            </div>

            <div class="title title_analog">
                <h2>Аналоги</h2>
            </div>
            <div class="slider-box analog__items stateble-elements-sub-category">
                <div>
                    <div class="slider-item analog__item stateble-element">
                        <div class="stateble-element__check">
                            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0489 0.927049C11.3483 0.0057385 12.6517 0.00573993 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z" fill="white" />
                            </svg>

                        </div>
                        <div class="analog__item-image stateble-element__image">
                            <a href="javascript:;"><img src="/images/good.png" alt="good.png"></a>
                        </div>
                        <div class="analog__item-description stateble-element__description">
                            Азитрокс 100мг/5мл пор д/приг сусп д/пр внутрь 15,9г фл №1 Азитрокс 100мг/5мл пор д/приг сусп д/пр внутрь 15,9г фл №1 Азитрокс 100мг/5мл пор д/приг сусп д/пр внутрь 15,9г фл №1
                        </div>
                        <a href="javascripr:;" class="analog__item-brand stateble-element__brand">
                            Фармстандарт-Лексредства Фармстандарт-Лексредства Фармстандарт-Лексредства
                        </a>
                        <div class="analog__item-pannel stateble-element__pannel">
                            <div class="analog__item-prices stateble-element__prices">
                                <div class=" stateble-element__new-price analog__item-new-price">
                                    105.40 <span class="currency">руб.</span>
                                </div>
                                <div class="analog__item-old-price stateble-element__old-price">
                                    205.60 <span class="currency">руб.</span>
                                </div>
                            </div>
                            <div class="analog__item-price-toggler stateble-element__price-toggler price-toggler">
                                <button class="toggler-btn down">-</button>
                                <input type="text" disabled value="1" class="count">
                                <button class="toggler-btn up">+</button>
                            </div>
                        </div>
                        <div class="analog__item-chosen stateble-element__chosen chosen">
                            <label>
                                <input type="checkbox" name="" id=""> В избранное
                                <span class="input-custom"></span>
                            </label>
                        </div>
                        <button class="analog__item-to-cart stateble-element__to-cart to-cart">В корзину</button>
                    </div>
                </div>
                <div>
                    <div class="slider-item analog__item stateble-element">
                        <div class="stateble-element__check">
                            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0489 0.927049C11.3483 0.0057385 12.6517 0.00573993 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z" fill="white" />
                            </svg>

                        </div>
                        <div class="analog__item-image stateble-element__image">
                            <a href="javascript:;"><img src="/images/good.png" alt="good.png"></a>
                            <div class="mark individual">Под заказ</div>
                        </div>
                        <div class="analog__item-description stateble-element__description">
                            Азитрокс 100мг/5мл пор д/приг сусп д/пр внутрь 15,9г фл №1
                        </div>
                        <a href="javascripr:;" class="analog__item-brand stateble-element__brand">
                            Фармстандарт-Лексредства Фармстандарт-Лексредства
                        </a>
                        <div class="analog__item-pannel stateble-element__pannel">
                            <div class="analog__item-prices stateble-element__prices">
                                <div class=" stateble-element__new-price analog__item-new-price">
                                    105.40 <span class="currency">руб.</span>
                                </div>
                                <div class="analog__item-old-price stateble-element__old-price">
                                    205.60 <span class="currency">руб.</span>
                                </div>
                            </div>
                            <div class="analog__item-price-toggler stateble-element__price-toggler price-toggler">
                                <button class="toggler-btn down">-</button>
                                <input type="text" disabled value="1" class="count">
                                <button class="toggler-btn up">+</button>
                            </div>
                        </div>
                        <div class="analog__item-chosen stateble-element__chosen chosen">
                            <label>
                                <input type="checkbox" name="" id=""> В избранное
                                <span class="input-custom"></span>
                            </label>
                        </div>
                        <button class="analog__item-to-cart stateble-element__to-cart to-cart">В корзину</button>
                    </div>
                </div>
                <div>
                    <div class="slider-item analog__item stateble-element">
                        <div class="stateble-element__check">
                            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0489 0.927049C11.3483 0.0057385 12.6517 0.00573993 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z" fill="white" />
                            </svg>

                        </div>
                        <div class="analog__item-image stateble-element__image">
                            <a href="javascript:;"><img src="/images/good.png" alt="good.png"></a>
                        </div>
                        <div class="analog__item-description stateble-element__description">
                            Азитрокс 100мг/5мл пор д/приг сусп д/пр внутрь 15,9г фл №1
                        </div>
                        <a href="javascripr:;" class="analog__item-brand stateble-element__brand">
                            Фармстандарт-Лексредства
                        </a>
                        <div class="analog__item-pannel stateble-element__pannel">
                            <div class="analog__item-prices stateble-element__prices">
                                <div class=" stateble-element__new-price analog__item-new-price">
                                    105.40 <span class="currency">руб.</span>
                                </div>
                                <div class="analog__item-old-price stateble-element__old-price">
                                    205.60 <span class="currency">руб.</span>
                                </div>
                            </div>
                            <div class="analog__item-price-toggler stateble-element__price-toggler price-toggler">
                                <button class="toggler-btn down">-</button>
                                <input type="text" disabled value="1" class="count">
                                <button class="toggler-btn up">+</button>
                            </div>
                        </div>
                        <div class="analog__item-chosen stateble-element__chosen chosen">
                            <label>
                                <input type="checkbox" name="" id=""> В избранное
                                <span class="input-custom"></span>
                            </label>
                        </div>
                        <button class="analog__item-to-cart stateble-element__to-cart to-cart">В корзину</button>
                    </div>
                </div>
                <div>
                    <div class="slider-item analog__item stateble-element">
                        <div class="stateble-element__check">
                            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0489 0.927049C11.3483 0.0057385 12.6517 0.00573993 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z" fill="white" />
                            </svg>

                        </div>
                        <div class="analog__item-image stateble-element__image">
                            <a href="javascript:;"><img src="/images/good.png" alt="good.png"></a>
                        </div>
                        <div class="analog__item-description stateble-element__description">
                            Азитрокс 100мг/5мл пор д/приг сусп д/пр внутрь 15,9г фл №1
                        </div>
                        <a href="javascripr:;" class="analog__item-brand stateble-element__brand">
                            Фармстандарт-Лексредства
                        </a>
                        <div class="analog__item-pannel stateble-element__pannel">
                            <div class="analog__item-prices stateble-element__prices">
                                <div class=" stateble-element__new-price analog__item-new-price">
                                    105.40 <span class="currency">руб.</span>
                                </div>
                                <div class="analog__item-old-price stateble-element__old-price">
                                    205.60 <span class="currency">руб.</span>
                                </div>
                            </div>
                            <div class="analog__item-price-toggler stateble-element__price-toggler price-toggler">
                                <button class="toggler-btn down">-</button>
                                <input type="text" disabled value="1" class="count">
                                <button class="toggler-btn up">+</button>
                            </div>
                        </div>
                        <div class="analog__item-chosen stateble-element__chosen chosen">
                            <label>
                                <input type="checkbox" name="" id=""> В избранное
                                <span class="input-custom"></span>
                            </label>
                        </div>
                        <button class="analog__item-to-cart stateble-element__to-cart to-cart">В корзину</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>