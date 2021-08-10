<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs ">
                    <a href="index">Главная</a>
                    <a href="#" aria-current="location">Избранное</a>
                </div>
                <div class="compare favorite">
                    <div class="compare__head">
                        <h1 class="subtitle">Избранное<sup class="title-counter">156</sup></h1>
                        <button class="compare__clear-list" type="button">Очистить список
                            <svg width="32" height="32">
                                <use href="#icon-delete"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="compare__category-slider slider-container">
                        <div class="compare__category swiper-wrapper">
                            <label class="compare__category-item swiper-slide">
                                <input class="visually-hidden" type="radio" name="category">
                                <span class="compare__category-type btn">
                Умные часы
                <span role="button" class="btn-close remove-compare-slide"></span>
                <sup class="title-counter">42</sup>
              </span>
                            </label>
                            <label class="compare__category-item swiper-slide">
                                <input class="visually-hidden" type="radio" name="category">
                                <span class="compare__category-type btn">
                Смартфоны
                <span role="button" class="btn-close remove-compare-slide"></span>
                <sup class="title-counter">42</sup>
              </span>
                            </label>
                            <label class="compare__category-item swiper-slide">
                                <input class="visually-hidden" type="radio" name="category">
                                <span class="compare__category-type btn">
                Телевизоры
                <span role="button" class="btn-close remove-compare-slide"></span>
                <sup class="title-counter">42</sup>
              </span>
                            </label>
                            <label class="compare__category-item swiper-slide">
                                <input class="visually-hidden" type="radio" name="category">
                                <span class="compare__category-type btn">
                Наушники и Гарнитуры
                <span role="button" class="btn-close remove-compare-slide"></span>
                <sup class="title-counter">42</sup>
              </span>
                            </label>
                            <label class="compare__category-item swiper-slide">
                                <input class="visually-hidden" type="radio" name="category">
                                <span class="compare__category-type btn">
                Проекторы
                <span role="button" class="btn-close remove-compare-slide"></span>
                <sup class="title-counter">42</sup>
              </span>
                            </label>
                            <label class="compare__category-item swiper-slide">
                                <input class="visually-hidden" type="radio" name="category">
                                <span class="compare__category-type btn">
                Умные часы
                <span role="button" class="btn-close remove-compare-slide"></span>
                <sup class="title-counter">42</sup>
              </span>
                            </label>
                            <label class="compare__category-item swiper-slide">
                                <input class="visually-hidden" type="radio" name="category">
                                <span class="compare__category-type btn">
                Смартфоны
                <span role="button" class="btn-close remove-compare-slide"></span>
                <sup class="title-counter">42</sup>
              </span>
                            </label>
                            <label class="compare__category-item swiper-slide">
                                <input class="visually-hidden" type="radio" name="category">
                                <span class="compare__category-type btn">
                Телевизоры
                <span role="button" class="btn-close remove-compare-slide"></span>
                <sup class="title-counter">42</sup>
              </span>
                            </label>
                            <label class="compare__category-item swiper-slide">
                                <input class="visually-hidden" type="radio" name="category">
                                <span class="compare__category-type btn">
                Наушники и Гарнитуры
                <span role="button" class="btn-close remove-compare-slide"></span>
                <sup class="title-counter">42</sup>
              </span>
                            </label>
                            <label class="compare__category-item swiper-slide">
                                <input class="visually-hidden" type="radio" name="category">
                                <span class="compare__category-type btn">
                Проекторы
                <span role="button" class="btn-close remove-compare-slide"></span>
                <sup class="title-counter">42</sup>
              </span>
                            </label>
                            <label class="compare__category-item swiper-slide">
                                <input class="visually-hidden" type="radio" name="category">
                                <span class="compare__category-type btn">
                Умные часы
                <span role="button" class="btn-close remove-compare-slide"></span>
                <sup class="title-counter">42</sup>
              </span>
                            </label>
                            <label class="compare__category-item swiper-slide">
                                <input class="visually-hidden" type="radio" name="category">
                                <span class="compare__category-type btn">
                Смартфоны
                <span role="button" class="btn-close remove-compare-slide"></span>
                <sup class="title-counter">42</sup>
              </span>
                            </label>
                            <label class="compare__category-item swiper-slide">
                                <input class="visually-hidden" type="radio" name="category">
                                <span class="compare__category-type btn">
                Телевизоры
                <span role="button" class="btn-close remove-compare-slide"></span>
                <sup class="title-counter">42</sup>
              </span>
                            </label>
                            <label class="compare__category-item swiper-slide">
                                <input class="visually-hidden" type="radio" name="category">
                                <span class="compare__category-type btn">
                Наушники и Гарнитуры
                <span role="button" class="btn-close remove-compare-slide"></span>
                <sup class="title-counter">42</sup>
              </span>
                            </label>
                            <label class="compare__category-item swiper-slide">
                                <input class="visually-hidden" type="radio" name="category">
                                <span class="compare__category-type btn">
                Проекторы
                <span role="button" class="btn-close remove-compare-slide"></span>
                <sup class="title-counter">42</sup>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="favorite__main">
                        <div class="favorite__options">
                            <fieldset class="sort-fieldset">
                                <legend>Наличие товаров</legend>
                                <label class="sort-fieldset-radio">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>Неважно</span>
                                </label>
                                <label class="sort-fieldset-radio">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>В наличии</span>
                                </label>
                                <label class="sort-fieldset-radio">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>Нет в наличии</span>
                                </label>
                            </fieldset>
                            <fieldset class="sort-fieldset">
                                <legend>Сортировка</legend>
                                <label class="sort-fieldset-radio">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>Сначала новые</span>
                                </label>
                                <label class="sort-fieldset-radio">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>С высоким рейтингом</span>
                                </label>
                                <label class="sort-fieldset-radio">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>По цене</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="favorite__cards">
                            <div class="product-card-wrap">
                                <div data-vendor-code="64201" class="product-card product-card--sm-icon">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-4">
                                            <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/black-friday.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/best-seller.svg" width="70" height="70" alt="бонус">
                                        </div>
                                    </div>
                                    <div class="product-card__icons">
                                        <button class="product-card__icon icon-type-equal" type="button" aria-label="добавить к сравнению">
                                            <svg width="16" height="16">
                                                <use href="#icon-equal"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                        <button class="product-card__icon icon-type-delete" type="button" aria-label="удалить">
                                            <svg width="16" height="16">
                                                <use href="#icon-delete"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                    </div>
                                    <div class="product-card__img fast-order-img">
                                        <picture>
                                            <!-- 1x-179px/108px 2x-358px/216px -->
                                            <source type="image/webp" srcset="img/content/watch.webp 1x, img/content/watch@2x.webp 2x">
                                            <img class=content-img src="img/content/watch.jpg" srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <span class="product-card__price">32 230₽</span>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-purple compare__buy add-to-cart" type="button"><span
                                                class="counter counter--red">В корзину</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-wrap">
                                <div data-vendor-code="64202" class="product-card product-card--sm-icon">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-5">
                                            <img src="img/content/icon/gift.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/new.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-1">
                                            <img src="img/content/icon/sale.svg" width="70" height="70" alt="бонус">
                                        </div>
                                    </div>
                                    <div class="product-card__icons">
                                        <button class="product-card__icon icon-type-equal" type="button" aria-label="добавить к сравнению">
                                            <svg width="16" height="16">
                                                <use href="#icon-equal"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                        <button class="product-card__icon icon-type-delete" type="button" aria-label="удалить">
                                            <svg width="16" height="16">
                                                <use href="#icon-delete"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                    </div>
                                    <div class="product-card__img fast-order-img">
                                        <picture>
                                            <!-- 1x-179px/108px 2x-358px/216px -->
                                            <source type="image/webp"
                                                    srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                                            <img class=content-img src="img/content/phone-small.jpg" srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <span class="product-card__price">32 230₽</span>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-purple compare__buy add-to-cart" type="button"><span
                                                class="counter counter--red">В корзину</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-wrap">
                                <div data-vendor-code="64203" class="product-card product-card--sm-icon">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-1">
                                            <img src="img/content/icon/stock.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/cyber-monday.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-2">
                                            <span class="bonus-discount">-80%</span>
                                        </div>
                                    </div>
                                    <div class="product-card__icons">
                                        <button class="product-card__icon icon-type-equal" type="button" aria-label="добавить к сравнению">
                                            <svg width="16" height="16">
                                                <use href="#icon-equal"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                        <button class="product-card__icon icon-type-delete" type="button" aria-label="удалить">
                                            <svg width="16" height="16">
                                                <use href="#icon-delete"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                    </div>
                                    <div class="product-card__img fast-order-img">
                                        <picture>
                                            <!-- 1x-179px/108px 2x-358px/216px -->
                                            <source type="image/webp" srcset="img/content/watch.webp 1x, img/content/watch@2x.webp 2x">
                                            <img class=content-img src="img/content/watch.jpg" srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <span class="product-card__price">32 230₽</span>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-purple compare__buy add-to-cart" type="button"><span
                                                class="counter counter--red">В корзину</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-wrap">
                                <div data-vendor-code="64204" class="product-card product-card--sm-icon">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-4">
                                            <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/black-friday.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/best-seller.svg" width="70" height="70" alt="бонус">
                                        </div>
                                    </div>
                                    <div class="product-card__icons">
                                        <button class="product-card__icon icon-type-equal" type="button" aria-label="добавить к сравнению">
                                            <svg width="16" height="16">
                                                <use href="#icon-equal"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                        <button class="product-card__icon icon-type-delete" type="button" aria-label="удалить">
                                            <svg width="16" height="16">
                                                <use href="#icon-delete"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                    </div>
                                    <div class="product-card__img fast-order-img">
                                        <picture>
                                            <!-- 1x-179px/108px 2x-358px/216px -->
                                            <source type="image/webp"
                                                    srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                                            <img class=content-img src="img/content/phone-small.jpg" srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <span class="product-card__price">32 230₽</span>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-purple compare__buy add-to-cart" type="button"><span
                                                class="counter counter--red">В корзину</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-wrap">
                                <div data-vendor-code="64205" class="product-card product-card--sm-icon">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-5">
                                            <img src="img/content/icon/gift.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/new.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-1">
                                            <img src="img/content/icon/sale.svg" width="70" height="70" alt="бонус">
                                        </div>
                                    </div>
                                    <div class="product-card__icons">
                                        <button class="product-card__icon icon-type-equal" type="button" aria-label="добавить к сравнению">
                                            <svg width="16" height="16">
                                                <use href="#icon-equal"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                        <button class="product-card__icon icon-type-delete" type="button" aria-label="удалить">
                                            <svg width="16" height="16">
                                                <use href="#icon-delete"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                    </div>
                                    <div class="product-card__img fast-order-img">
                                        <picture>
                                            <!-- 1x-179px/108px 2x-358px/216px -->
                                            <source type="image/webp" srcset="img/content/watch.webp 1x, img/content/watch@2x.webp 2x">
                                            <img class=content-img src="img/content/watch.jpg" srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <span class="product-card__price">32 230₽</span>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-purple compare__buy add-to-cart" type="button"><span
                                                class="counter counter--red">В корзину</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-wrap">
                                <div data-vendor-code="64206" class="product-card product-card--sm-icon">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-1">
                                            <img src="img/content/icon/stock.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/cyber-monday.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-2">
                                            <span class="bonus-discount">-80%</span>
                                        </div>
                                    </div>
                                    <div class="product-card__icons">
                                        <button class="product-card__icon icon-type-equal" type="button" aria-label="добавить к сравнению">
                                            <svg width="16" height="16">
                                                <use href="#icon-equal"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                        <button class="product-card__icon icon-type-delete" type="button" aria-label="удалить">
                                            <svg width="16" height="16">
                                                <use href="#icon-delete"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                    </div>
                                    <div class="product-card__img fast-order-img">
                                        <picture>
                                            <!-- 1x-179px/108px 2x-358px/216px -->
                                            <source type="image/webp"
                                                    srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                                            <img class=content-img src="img/content/phone-small.jpg" srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <span class="product-card__price">32 230₽</span>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-purple compare__buy add-to-cart" type="button"><span
                                                class="counter counter--red">В корзину</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-wrap">
                                <div data-vendor-code="64207" class="product-card product-card--sm-icon">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-4">
                                            <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/black-friday.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/best-seller.svg" width="70" height="70" alt="бонус">
                                        </div>
                                    </div>
                                    <div class="product-card__icons">
                                        <button class="product-card__icon icon-type-equal" type="button" aria-label="добавить к сравнению">
                                            <svg width="16" height="16">
                                                <use href="#icon-equal"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                        <button class="product-card__icon icon-type-delete" type="button" aria-label="удалить">
                                            <svg width="16" height="16">
                                                <use href="#icon-delete"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                    </div>
                                    <div class="product-card__img fast-order-img">
                                        <picture>
                                            <!-- 1x-179px/108px 2x-358px/216px -->
                                            <source type="image/webp" srcset="img/content/watch.webp 1x, img/content/watch@2x.webp 2x">
                                            <img class=content-img src="img/content/watch.jpg" srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <span class="product-card__price">32 230₽</span>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-purple compare__buy add-to-cart" type="button"><span
                                                class="counter counter--red">В корзину</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-wrap">
                                <div data-vendor-code="64208" class="product-card product-card--sm-icon">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-5">
                                            <img src="img/content/icon/gift.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/new.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-1">
                                            <img src="img/content/icon/sale.svg" width="70" height="70" alt="бонус">
                                        </div>
                                    </div>
                                    <div class="product-card__icons">
                                        <button class="product-card__icon icon-type-equal" type="button" aria-label="добавить к сравнению">
                                            <svg width="16" height="16">
                                                <use href="#icon-equal"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                        <button class="product-card__icon icon-type-delete" type="button" aria-label="удалить">
                                            <svg width="16" height="16">
                                                <use href="#icon-delete"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                    </div>
                                    <div class="product-card__img fast-order-img">
                                        <picture>
                                            <!-- 1x-179px/108px 2x-358px/216px -->
                                            <source type="image/webp"
                                                    srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                                            <img class=content-img src="img/content/phone-small.jpg" srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <span class="product-card__price">32 230₽</span>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-purple compare__buy add-to-cart" type="button"><span
                                                class="counter counter--red">В корзину</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <footer-main></footer-main>
        <template id="template">
            <!-- На всех страницах -->
            <modal-login></modal-login>
            <modal-fast-order></modal-fast-order>
            <modal-register></modal-register>
            <modal-recover></modal-recover>
            <modal-recover-next></modal-recover-next>
            <modal-call></modal-call>
            <modal-location></modal-location>
            <modal-search-header></modal-search-header>
            <modal-success-order></modal-success-order>
            <modal-fail></modal-fail>
            <modal-error></modal-error>
            <modal-subscribe></modal-subscribe>
            <modal-help></modal-help>
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>
</template>

<script>
export default {
    name: "Page-Favorite",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
