<!-- Страница личного кабинета - избранные товары -->

<?php require_once('breadcrumbs.php'); ?>

<section class="cabinet cabinet-current">
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
            <h2>Избранное</h2>
            <div class="filters">
                <div class="sort-way">Сортировать по:</div>
                <div class="settings flex">
                    <div class="settings__left">
                        <div class="filter active">
                            По популярности
                        </div>
                        <div class="filter">
                            Названию
                        </div>
                        <div class="filter">
                            Цене
                        </div>
                    </div>
                    <div class="settings__right">
                        <label class="settings__item">
                            <input type="checkbox" name="exist" id="exist" checked> В наличии
                            <span class="custom-check"></span>
                        </label>
                        <label class="settings__item">
                            <input type="checkbox" name="discont" id="discont"> Со скидкой
                            <span class="custom-check"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="title title_popular">
                <h2>Популярные товары</h2>
            </div>
            <div class="slider-box popular__items stateble-elements-sub-category">
                <div>
                    <div class="slider-item popular__item stateble-element">
                        <div class="stateble-element__check">
                            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0489 0.927049C11.3483 0.0057385 12.6517 0.00573993 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z" fill="white" />
                            </svg>

                        </div>
                        <div class="popular__item-image stateble-element__image">
                            <a href="javascript:;"><img src="/images/good.png" alt="good.png"></a>
                        </div>
                        <div class="popular__item-description stateble-element__description">
                            Азитрокс 100мг/5мл пор д/приг сусп д/пр внутрь 15,9г фл №1 Азитрокс 100мг/5мл пор д/приг сусп д/пр внутрь 15,9г фл №1 Азитрокс 100мг/5мл пор д/приг сусп д/пр внутрь 15,9г фл №1
                        </div>
                        <a href="javascripr:;" class="popular__item-brand stateble-element__brand">
                            Фармстандарт-Лексредства Фармстандарт-Лексредства Фармстандарт-Лексредства
                        </a>
                        <div class="popular__item-pannel stateble-element__pannel">
                            <div class="popular__item-prices stateble-element__prices">
                                <div class=" stateble-element__new-price popular__item-new-price">
                                    105.40 <span class="currency">руб.</span>
                                </div>
                                <div class="popular__item-old-price stateble-element__old-price">
                                    205.60 <span class="currency">руб.</span>
                                </div>
                            </div>
                            <div class="popular__item-price-toggler stateble-element__price-toggler price-toggler">
                                <button class="toggler-btn down">-</button>
                                <input type="text" disabled value="1" class="count">
                                <button class="toggler-btn up">+</button>
                            </div>
                        </div>
                        <div class="popular__item-chosen stateble-element__chosen chosen">
                            <label>
                                <input type="checkbox" name="" id=""> В избранное
                                <span class="input-custom"></span>
                            </label>
                        </div>
                        <button class="popular__item-to-cart stateble-element__to-cart to-cart">В корзину</button>
                    </div>
                </div>
                <div>
                    <div class="slider-item popular__item stateble-element">
                        <div class="stateble-element__check">
                            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0489 0.927049C11.3483 0.0057385 12.6517 0.00573993 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z" fill="white" />
                            </svg>

                        </div>
                        <div class="popular__item-image stateble-element__image">
                            <a href="javascript:;"><img src="/images/good.png" alt="good.png"></a>
                            <div class="mark individual">Под заказ</div>
                        </div>
                        <div class="popular__item-description stateble-element__description">
                            Азитрокс 100мг/5мл пор д/приг сусп д/пр внутрь 15,9г фл №1
                        </div>
                        <a href="javascripr:;" class="popular__item-brand stateble-element__brand">
                            Фармстандарт-Лексредства Фармстандарт-Лексредства
                        </a>
                        <div class="popular__item-pannel stateble-element__pannel">
                            <div class="popular__item-prices stateble-element__prices">
                                <div class=" stateble-element__new-price popular__item-new-price">
                                    105.40 <span class="currency">руб.</span>
                                </div>
                                <div class="popular__item-old-price stateble-element__old-price">
                                    205.60 <span class="currency">руб.</span>
                                </div>
                            </div>
                            <div class="popular__item-price-toggler stateble-element__price-toggler price-toggler">
                                <button class="toggler-btn down">-</button>
                                <input type="text" disabled value="1" class="count">
                                <button class="toggler-btn up">+</button>
                            </div>
                        </div>
                        <div class="popular__item-chosen stateble-element__chosen chosen">
                            <label>
                                <input type="checkbox" name="" id=""> В избранное
                                <span class="input-custom"></span>
                            </label>
                        </div>
                        <button class="popular__item-to-cart stateble-element__to-cart to-cart">В корзину</button>
                    </div>
                </div>
                <div>
                    <div class="slider-item popular__item stateble-element">
                        <div class="stateble-element__check">
                            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0489 0.927049C11.3483 0.0057385 12.6517 0.00573993 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z" fill="white" />
                            </svg>

                        </div>
                        <div class="popular__item-image stateble-element__image">
                            <a href="javascript:;"><img src="/images/good.png" alt="good.png"></a>
                        </div>
                        <div class="popular__item-description stateble-element__description">
                            Азитрокс 100мг/5мл пор д/приг сусп д/пр внутрь 15,9г фл №1
                        </div>
                        <a href="javascripr:;" class="popular__item-brand stateble-element__brand">
                            Фармстандарт-Лексредства
                        </a>
                        <div class="popular__item-pannel stateble-element__pannel">
                            <div class="popular__item-prices stateble-element__prices">
                                <div class=" stateble-element__new-price popular__item-new-price">
                                    105.40 <span class="currency">руб.</span>
                                </div>
                                <div class="popular__item-old-price stateble-element__old-price">
                                    205.60 <span class="currency">руб.</span>
                                </div>
                            </div>
                            <div class="popular__item-price-toggler stateble-element__price-toggler price-toggler">
                                <button class="toggler-btn down">-</button>
                                <input type="text" disabled value="1" class="count">
                                <button class="toggler-btn up">+</button>
                            </div>
                        </div>
                        <div class="popular__item-chosen stateble-element__chosen chosen">
                            <label>
                                <input type="checkbox" name="" id=""> В избранное
                                <span class="input-custom"></span>
                            </label>
                        </div>
                        <button class="popular__item-to-cart stateble-element__to-cart to-cart">В корзину</button>
                    </div>
                </div>
                <div>
                    <div class="slider-item popular__item stateble-element">
                        <div class="stateble-element__check">
                            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0489 0.927049C11.3483 0.0057385 12.6517 0.00573993 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z" fill="white" />
                            </svg>

                        </div>
                        <div class="popular__item-image stateble-element__image">
                            <a href="javascript:;"><img src="/images/good.png" alt="good.png"></a>
                        </div>
                        <div class="popular__item-description stateble-element__description">
                            Азитрокс 100мг/5мл пор д/приг сусп д/пр внутрь 15,9г фл №1
                        </div>
                        <a href="javascripr:;" class="popular__item-brand stateble-element__brand">
                            Фармстандарт-Лексредства
                        </a>
                        <div class="popular__item-pannel stateble-element__pannel">
                            <div class="popular__item-prices stateble-element__prices">
                                <div class=" stateble-element__new-price popular__item-new-price">
                                    105.40 <span class="currency">руб.</span>
                                </div>
                                <div class="popular__item-old-price stateble-element__old-price">
                                    205.60 <span class="currency">руб.</span>
                                </div>
                            </div>
                            <div class="popular__item-price-toggler stateble-element__price-toggler price-toggler">
                                <button class="toggler-btn down">-</button>
                                <input type="text" disabled value="1" class="count">
                                <button class="toggler-btn up">+</button>
                            </div>
                        </div>
                        <div class="popular__item-chosen stateble-element__chosen chosen">
                            <label>
                                <input type="checkbox" name="" id=""> В избранное
                                <span class="input-custom"></span>
                            </label>
                        </div>
                        <button class="popular__item-to-cart stateble-element__to-cart to-cart">В корзину</button>
                    </div>
                </div>

            </div>
        </div>


    </div>
</section>