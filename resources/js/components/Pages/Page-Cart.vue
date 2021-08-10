<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs ">
                    <a href="index">Главная</a>
                    <a href="cart" aria-current="location">Корзина</a>
                </div>
                <section class="cart">
                    <h1 class="cart__title cart__title-product title wrapper">Корзина</h1>
                    <div class="cart-products">
                        <div class="cart-products__preview">
                            <div class="cart-products__list">
                                <div class="cart-products__caption">
                                    <div class="cart-products__caption-item">
                                        <span>товары</span>
                                        <span>кол-во</span>
                                    </div>
                                    <button type="button" class="cart-products__clear-cart">
                                        Очистить список
                                        <svg width="24" height="24">
                                            <use href="#icon-delete"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="cart-products__item wrapper">
                                    <div class="cart-products__img">
                                        <img src="img/content/phone-cart.jpg" width="55" height="65" alt="айфон 8">
                                    </div>
                                    <div class="cart-products__name">
                                        <p>Apple MacBook Air 13 дисплей Retina с технологией True Tone Mid 2019 MVFL2
                                            (i51600/8Gb/256Gb SSD)
                                            EU</p>
                                        <small>Арт. 064206</small>
                                    </div>
                                    <div class="cart-products__count">
                                        <div class="order-element-count">
                                            <button class="order-element__btn order-element__decrease" type="button">-</button>
                                            <span class="order-element__total">1</span>
                                            <button class="order-element__btn order-element__increase" type="button">+</button>
                                        </div>
                                    </div>
                                    <div class="cart-products__action">
                                        <label class="cart-products__favorite-btn">
                                            <input class="visually-hidden" type="checkbox" name="favorite">
                                            <svg width="24" height="24">
                                                <use href="#icon-favorite"></use>
                                            </svg>
                                        </label>
                                        <button class="cart-products__remove-btn" type="button">
                                            <svg width="24" height="24">
                                                <use href="#icon-delete"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="cart-products__price">
                                        <span class="cart-products__new-price">112 276₽</span>
                                        <s class="cart-products__old-price">113 999₽</s>
                                    </div>
                                </div>
                                <div class="cart-products__item wrapper">
                                    <div class="cart-products__img">
                                        <img src="img/content/phone-cart.jpg" width="55" height="65" alt="айфон 8">
                                    </div>
                                    <div class="cart-products__name">
                                        <p>Apple MacBook</p>
                                        <small>Арт. 064206</small>
                                    </div>
                                    <div class="cart-products__count">
                                        <div class="order-element-count">
                                            <button class="order-element__btn order-element__decrease" type="button">-</button>
                                            <span class="order-element__total">1</span>
                                            <button class="order-element__btn order-element__increase" type="button">+</button>
                                        </div>
                                    </div>
                                    <div class="cart-products__action">
                                        <label class="cart-products__favorite-btn">
                                            <input class="visually-hidden" type="checkbox" name="favorite">
                                            <svg width="24" height="24">
                                                <use href="#icon-favorite"></use>
                                            </svg>
                                        </label>
                                        <button class="cart-products__remove-btn" type="button">
                                            <svg width="24" height="24">
                                                <use href="#icon-delete"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="cart-products__price">
                                        <span class="cart-products__new-price">112 276₽</span>
                                        <s class="cart-products__old-price">113 999₽</s>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-products__amount-wrap">
                            <div class="cart-products__amount">
                                <div class="cart-products__amount-top wrapper">
                                    <div class="cart-products__promo">
                                        <button class="cart-products__promo-btn cart-products__promo-accept" type="button"
                                                data-toggle-text="Удалить">Применить
                                        </button>
                                        <label class="cart-products__promo-btn cart-products__has-promo">
                                            <input class="" type="text" placeholder="Есть промокод?" name="promo">
                                        </label>
                                    </div>
                                    <div class="cart-products__initial-price">
                                        <span class="cart-products__amount-name">Товаров (<span>2</span>) на сумму</span>
                                        <span class="cart-products__amount-price">112 276₽</span>
                                    </div>
                                </div>
                                <div class="cart-products__amount-middle">Скидка<s>99 999₽</s></div>
                                <div class="cart-products__amount-bottom wrapper">
                                    <div class="cart-products__total-wrap">Итого<span
                                        class="cart-products__total">99 999₽</span></div>
                                    <button class="cart-products__btn-order btn btn-purple" type="button">Перейти к оформлению
                                    </button>
                                    <p>Оформляя заказ вы подтверждаете свое согласие с нашими <a
                                        class="link cart-products__condition"
                                        href="#!" data-tab="offer" data-modal-open="help">условиями покупки</a> в
                                        интернет-магазине</p>
                                    <p>После осуществления заказа мы свяжемся с вами, чтобы уточнить все детали</p>
                                    <p>*Итоговая стоимость заказа рассчитана без учета стоимости доставки, информацию о
                                        стоимости доставки
                                        предоставит менеджер при звонке</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="cart-products-slider product-type card-main__slider">
                    <div class="product-type__header">
                        <h2>С этим обычно покупают</h2>
                    </div>
                    <div class="product-card-container slider-container">
                        <div class="product-card-list swiper-wrapper">
                            <div class="product-card-wrap swiper-slide">
                                <div data-vendor-code="64201" class="product-card">
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
                                        <button class="product-card__icon icon-type-equal" type="button"
                                                aria-label="добавить к сравнению">
                                            <svg width="16" height="16">
                                                <use href="#icon-equal"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                        <button class="product-card__icon icon-type-favorite" type="button"
                                                aria-label="добавить в избранное">
                                            <svg width="16" height="16">
                                                <use href="#icon-favorite"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                    </div>
                                    <div class="product-card__img fast-order-img" data-empty="Товар на фотосессии"></div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <p class="product-card__assets">Нет в наличии</p>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="subscribe">Подписаться
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-wrap swiper-slide">
                                <div data-vendor-code="64202" class="product-card">
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
                                        <button class="product-card__icon icon-type-equal" type="button"
                                                aria-label="добавить к сравнению">
                                            <svg width="16" height="16">
                                                <use href="#icon-equal"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                        <button class="product-card__icon icon-type-favorite" type="button"
                                                aria-label="добавить в избранное">
                                            <svg width="16" height="16">
                                                <use href="#icon-favorite"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                    </div>
                                    <div class="product-card__img fast-order-img">
                                        <picture>
                                            <!-- 1x-179px/108px 2x-358px/216px -->
                                            <source type="image/webp"
                                                    srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                                            <img class=content-img src="img/content/phone-small.jpg"
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
                                            </button>
                                            <button class="product-card__cart add-to-cart" type="button">
                      <span class="counter counter--red" data-count="">
                        <span>В корзину</span>
                      </span>
                                                <svg width="32" height="32">
                                                    <use href="#icon-cart"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-wrap swiper-slide">
                                <div data-vendor-code="64203" class="product-card">
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
                                        <button class="product-card__icon icon-type-equal" type="button"
                                                aria-label="добавить к сравнению">
                                            <svg width="16" height="16">
                                                <use href="#icon-equal"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                        <button class="product-card__icon icon-type-favorite" type="button"
                                                aria-label="добавить в избранное">
                                            <svg width="16" height="16">
                                                <use href="#icon-favorite"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                    </div>
                                    <div class="product-card__img fast-order-img">
                                        <picture>
                                            <!-- 1x-179px/108px 2x-358px/216px -->
                                            <source type="image/webp"
                                                    srcset="img/content/watch.webp 1x, img/content/watch@2x.webp 2x">
                                            <img class=content-img src="img/content/watch.jpg"
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
                                            </button>
                                            <button class="product-card__cart add-to-cart" type="button">
                      <span class="counter counter--red" data-count="">
                        <span>В корзину</span>
                      </span>
                                                <svg width="32" height="32">
                                                    <use href="#icon-cart"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-wrap swiper-slide">
                                <div data-vendor-code="64204" class="product-card">
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
                                        <button class="product-card__icon icon-type-equal" type="button"
                                                aria-label="добавить к сравнению">
                                            <svg width="16" height="16">
                                                <use href="#icon-equal"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                        <button class="product-card__icon icon-type-favorite" type="button"
                                                aria-label="добавить в избранное">
                                            <svg width="16" height="16">
                                                <use href="#icon-favorite"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                    </div>
                                    <div class="product-card__img fast-order-img">
                                        <picture>
                                            <!-- 1x-179px/108px 2x-358px/216px -->
                                            <source type="image/webp"
                                                    srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                                            <img class=content-img src="img/content/phone-small.jpg"
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
                                            </button>
                                            <button class="product-card__cart add-to-cart" type="button">
                      <span class="counter counter--red" data-count="">
                        <span>В корзину</span>
                      </span>
                                                <svg width="32" height="32">
                                                    <use href="#icon-cart"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-wrap swiper-slide">
                                <div data-vendor-code="64205" class="product-card">
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
                                        <button class="product-card__icon icon-type-equal" type="button"
                                                aria-label="добавить к сравнению">
                                            <svg width="16" height="16">
                                                <use href="#icon-equal"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                        <button class="product-card__icon icon-type-favorite" type="button"
                                                aria-label="добавить в избранное">
                                            <svg width="16" height="16">
                                                <use href="#icon-favorite"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                    </div>
                                    <div class="product-card__img fast-order-img">
                                        <picture>
                                            <!-- 1x-179px/108px 2x-358px/216px -->
                                            <source type="image/webp"
                                                    srcset="img/content/watch.webp 1x, img/content/watch@2x.webp 2x">
                                            <img class=content-img src="img/content/watch.jpg"
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
                                            </button>
                                            <button class="product-card__cart add-to-cart" type="button">
                      <span class="counter counter--red" data-count="">
                        <span>В корзину</span>
                      </span>
                                                <svg width="32" height="32">
                                                    <use href="#icon-cart"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-wrap swiper-slide">
                                <div data-vendor-code="64206" class="product-card">
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
                                        <button class="product-card__icon icon-type-equal" type="button"
                                                aria-label="добавить к сравнению">
                                            <svg width="16" height="16">
                                                <use href="#icon-equal"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                        <button class="product-card__icon icon-type-favorite" type="button"
                                                aria-label="добавить в избранное">
                                            <svg width="16" height="16">
                                                <use href="#icon-favorite"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                    </div>
                                    <div class="product-card__img fast-order-img">
                                        <picture>
                                            <!-- 1x-179px/108px 2x-358px/216px -->
                                            <source type="image/webp"
                                                    srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                                            <img class=content-img src="img/content/phone-small.jpg"
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
                                            </button>
                                            <button class="product-card__cart add-to-cart" type="button">
                      <span class="counter counter--red" data-count="">
                        <span>В корзину</span>
                      </span>
                                                <svg width="32" height="32">
                                                    <use href="#icon-cart"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-wrap swiper-slide">
                                <div data-vendor-code="64207" class="product-card">
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
                                        <button class="product-card__icon icon-type-equal" type="button"
                                                aria-label="добавить к сравнению">
                                            <svg width="16" height="16">
                                                <use href="#icon-equal"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                        <button class="product-card__icon icon-type-favorite" type="button"
                                                aria-label="добавить в избранное">
                                            <svg width="16" height="16">
                                                <use href="#icon-favorite"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                    </div>
                                    <div class="product-card__img fast-order-img">
                                        <picture>
                                            <!-- 1x-179px/108px 2x-358px/216px -->
                                            <source type="image/webp"
                                                    srcset="img/content/watch.webp 1x, img/content/watch@2x.webp 2x">
                                            <img class=content-img src="img/content/watch.jpg"
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
                                            </button>
                                            <button class="product-card__cart add-to-cart" type="button">
                      <span class="counter counter--red" data-count="">
                        <span>В корзину</span>
                      </span>
                                                <svg width="32" height="32">
                                                    <use href="#icon-cart"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-wrap swiper-slide">
                                <div data-vendor-code="64208" class="product-card">
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
                                        <button class="product-card__icon icon-type-equal" type="button"
                                                aria-label="добавить к сравнению">
                                            <svg width="16" height="16">
                                                <use href="#icon-equal"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                        <button class="product-card__icon icon-type-favorite" type="button"
                                                aria-label="добавить в избранное">
                                            <svg width="16" height="16">
                                                <use href="#icon-favorite"></use>
                                            </svg>
                                            <span></span>
                                        </button>
                                    </div>
                                    <div class="product-card__img fast-order-img">
                                        <picture>
                                            <!-- 1x-179px/108px 2x-358px/216px -->
                                            <source type="image/webp"
                                                    srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                                            <img class=content-img src="img/content/phone-small.jpg"
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
                                            </button>
                                            <button class="product-card__cart add-to-cart" type="button">
                      <span class="counter counter--red" data-count="">
                        <span>В корзину</span>
                      </span>
                                                <svg width="32" height="32">
                                                    <use href="#icon-cart"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn-slider btn-slider--next arrow arrow--right" type="button"
                                aria-label="следующий слайд"></button>
                        <button class="btn-slider btn-slider--prev arrow arrow--left" type="button"
                                aria-label="предыдущий слайд"></button>
                    </div>
                </section>
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
    name: "Page-Cart",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
