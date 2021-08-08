<template>
    <main>
        <div class="bread-crumbs ">
            <a href="index">Главная</a>
            <a href="#" aria-current="location">Сравнение</a>
        </div>
        <div class="compare">
            <div class="compare__head">
                <h1 class="subtitle">Сравнение товаров<sup class="title-counter">156</sup></h1>
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
            <div class="compare__main">
                <div class="compare__options">
                    <fieldset class="sort-fieldset compare__fieldset-sticky">
                        <legend>Сортировка</legend>
                        <label class="sort-fieldset-radio">
                            <input type="radio" name="param">
                            <span class="custom-radio"></span>
                            <span>Все параметры</span>
                        </label>
                        <label class="sort-fieldset-radio">
                            <input type="radio" name="param">
                            <span class="custom-radio"></span>
                            <span>Только различающиеся</span>
                        </label>
                    </fieldset>
                </div>
                <div class="compare__product-slider product-card-container">
                    <div class="compare-container-img slider-container">
                        <div class="product-card-list swiper-wrapper">
                            <div class="swiper-slide swiper-slide--full">
                                <div class="product-card-wrap">
                                    <div data-vendor-code="64201"
                                         class="product-card product-card--full product-card--sm-icon">
                                        <div class="product-card__bonuses">
                                            <div class="bonus-icon priority-4">
                                                <img src="img/content/icon/delivery.svg" width="70" height="70"
                                                     alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-3">
                                                <img src="img/content/icon/black-friday.svg" width="70" height="70"
                                                     alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-0">
                                                <img src="img/content/icon/best-seller.svg" width="70" height="70"
                                                     alt="бонус">
                                            </div>
                                        </div>
                                        <div class="product-card__icons">
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-delete" type="button"
                                                    aria-label="удалить">
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
                                                        srcset="img/content/watch.webp 1x, img/content/watch@2x.webp 2x">
                                                <img class=content-img src="img/content/watch.jpg"
                                                     srcset="img/content/watch@2x.jpg 2x"
                                                     width="179" height="108" alt="Apple watch" loading=lazy
                                                     decoding=async>
                                            </picture>
                                        </div>
                                        <div class="product-card__info">
                                            <small class="product-card__name">Смарт-часы</small>
                                            <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                может быть в 3
                                                строки для
                                                длинных названий</p>
                                            <s class="product-card__old-price">53 999₽</s>
                                            <b class="product-card__price">32 230₽</b>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-purple compare__buy add-to-cart"
                                                        type="button"><span
                                                    class="counter counter--red">В корзину</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide--full">
                                <div class="product-card-wrap">
                                    <div data-vendor-code="64202"
                                         class="product-card product-card--full product-card--sm-icon">
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
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-delete" type="button"
                                                    aria-label="удалить">
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
                                                <img class=content-img src="img/content/phone-small.jpg"
                                                     srcset="img/content/phone-small@2x.jpg 2x" width="179" height="108"
                                                     alt="Sumsung phone"
                                                     loading=lazy decoding=async>
                                            </picture>
                                        </div>
                                        <div class="product-card__info">
                                            <small class="product-card__name">Смарт-часы</small>
                                            <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                может быть в 3
                                                строки для
                                                длинных названий</p>
                                            <s class="product-card__old-price">53 999₽</s>
                                            <b class="product-card__price">32 230₽</b>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-purple compare__buy add-to-cart"
                                                        type="button"><span
                                                    class="counter counter--red">В корзину</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide--full">
                                <div class="product-card-wrap">
                                    <div data-vendor-code="64203"
                                         class="product-card product-card--full product-card--sm-icon">
                                        <div class="product-card__bonuses">
                                            <div class="bonus-icon priority-1">
                                                <img src="img/content/icon/stock.svg" width="70" height="70"
                                                     alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-3">
                                                <img src="img/content/icon/cyber-monday.svg" width="70" height="70"
                                                     alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-2">
                                                <span class="bonus-discount">-80%</span>
                                            </div>
                                        </div>
                                        <div class="product-card__icons">
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-delete" type="button"
                                                    aria-label="удалить">
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
                                                        srcset="img/content/watch.webp 1x, img/content/watch@2x.webp 2x">
                                                <img class=content-img src="img/content/watch.jpg"
                                                     srcset="img/content/watch@2x.jpg 2x"
                                                     width="179" height="108" alt="Apple watch" loading=lazy
                                                     decoding=async>
                                            </picture>
                                        </div>
                                        <div class="product-card__info">
                                            <small class="product-card__name">Смарт-часы</small>
                                            <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                может быть в 3
                                                строки для
                                                длинных названий</p>
                                            <s class="product-card__old-price">53 999₽</s>
                                            <b class="product-card__price">32 230₽</b>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-purple compare__buy add-to-cart"
                                                        type="button"><span
                                                    class="counter counter--red">В корзину</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide--full">
                                <div class="product-card-wrap">
                                    <div data-vendor-code="64204"
                                         class="product-card product-card--full product-card--sm-icon">
                                        <div class="product-card__bonuses">
                                            <div class="bonus-icon priority-4">
                                                <img src="img/content/icon/delivery.svg" width="70" height="70"
                                                     alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-3">
                                                <img src="img/content/icon/black-friday.svg" width="70" height="70"
                                                     alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-0">
                                                <img src="img/content/icon/best-seller.svg" width="70" height="70"
                                                     alt="бонус">
                                            </div>
                                        </div>
                                        <div class="product-card__icons">
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-delete" type="button"
                                                    aria-label="удалить">
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
                                                <img class=content-img src="img/content/phone-small.jpg"
                                                     srcset="img/content/phone-small@2x.jpg 2x" width="179" height="108"
                                                     alt="Sumsung phone"
                                                     loading=lazy decoding=async>
                                            </picture>
                                        </div>
                                        <div class="product-card__info">
                                            <small class="product-card__name">Смарт-часы</small>
                                            <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                может быть в 3
                                                строки для
                                                длинных названий</p>
                                            <s class="product-card__old-price">53 999₽</s>
                                            <b class="product-card__price">32 230₽</b>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-purple compare__buy add-to-cart"
                                                        type="button"><span
                                                    class="counter counter--red">В корзину</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide--full">
                                <div class="product-card-wrap">
                                    <div data-vendor-code="64205"
                                         class="product-card product-card--full product-card--sm-icon">
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
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-delete" type="button"
                                                    aria-label="удалить">
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
                                                        srcset="img/content/watch.webp 1x, img/content/watch@2x.webp 2x">
                                                <img class=content-img src="img/content/watch.jpg"
                                                     srcset="img/content/watch@2x.jpg 2x"
                                                     width="179" height="108" alt="Apple watch" loading=lazy
                                                     decoding=async>
                                            </picture>
                                        </div>
                                        <div class="product-card__info">
                                            <small class="product-card__name">Смарт-часы</small>
                                            <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                может быть в 3
                                                строки для
                                                длинных названий</p>
                                            <s class="product-card__old-price">53 999₽</s>
                                            <b class="product-card__price">32 230₽</b>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-purple compare__buy add-to-cart"
                                                        type="button"><span
                                                    class="counter counter--red">В корзину</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide--full">
                                <div class="product-card-wrap">
                                    <div data-vendor-code="64206"
                                         class="product-card product-card--full product-card--sm-icon">
                                        <div class="product-card__bonuses">
                                            <div class="bonus-icon priority-1">
                                                <img src="img/content/icon/stock.svg" width="70" height="70"
                                                     alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-3">
                                                <img src="img/content/icon/cyber-monday.svg" width="70" height="70"
                                                     alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-2">
                                                <span class="bonus-discount">-80%</span>
                                            </div>
                                        </div>
                                        <div class="product-card__icons">
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-delete" type="button"
                                                    aria-label="удалить">
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
                                                <img class=content-img src="img/content/phone-small.jpg"
                                                     srcset="img/content/phone-small@2x.jpg 2x" width="179" height="108"
                                                     alt="Sumsung phone"
                                                     loading=lazy decoding=async>
                                            </picture>
                                        </div>
                                        <div class="product-card__info">
                                            <small class="product-card__name">Смарт-часы</small>
                                            <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                может быть в 3
                                                строки для
                                                длинных названий</p>
                                            <s class="product-card__old-price">53 999₽</s>
                                            <b class="product-card__price">32 230₽</b>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-purple compare__buy add-to-cart"
                                                        type="button"><span
                                                    class="counter counter--red">В корзину</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide--full">
                                <div class="product-card-wrap">
                                    <div data-vendor-code="64207"
                                         class="product-card product-card--full product-card--sm-icon">
                                        <div class="product-card__bonuses">
                                            <div class="bonus-icon priority-4">
                                                <img src="img/content/icon/delivery.svg" width="70" height="70"
                                                     alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-3">
                                                <img src="img/content/icon/black-friday.svg" width="70" height="70"
                                                     alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-0">
                                                <img src="img/content/icon/best-seller.svg" width="70" height="70"
                                                     alt="бонус">
                                            </div>
                                        </div>
                                        <div class="product-card__icons">
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-delete" type="button"
                                                    aria-label="удалить">
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
                                                        srcset="img/content/watch.webp 1x, img/content/watch@2x.webp 2x">
                                                <img class=content-img src="img/content/watch.jpg"
                                                     srcset="img/content/watch@2x.jpg 2x"
                                                     width="179" height="108" alt="Apple watch" loading=lazy
                                                     decoding=async>
                                            </picture>
                                        </div>
                                        <div class="product-card__info">
                                            <small class="product-card__name">Смарт-часы</small>
                                            <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                может быть в 3
                                                строки для
                                                длинных названий</p>
                                            <s class="product-card__old-price">53 999₽</s>
                                            <b class="product-card__price">32 230₽</b>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-purple compare__buy add-to-cart"
                                                        type="button"><span
                                                    class="counter counter--red">В корзину</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide--full">
                                <div class="product-card-wrap">
                                    <div data-vendor-code="64208"
                                         class="product-card product-card--full product-card--sm-icon">
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
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-delete" type="button"
                                                    aria-label="удалить">
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
                                                <img class=content-img src="img/content/phone-small.jpg"
                                                     srcset="img/content/phone-small@2x.jpg 2x" width="179" height="108"
                                                     alt="Sumsung phone"
                                                     loading=lazy decoding=async>
                                            </picture>
                                        </div>
                                        <div class="product-card__info">
                                            <small class="product-card__name">Смарт-часы</small>
                                            <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                может быть в 3
                                                строки для
                                                длинных названий</p>
                                            <s class="product-card__old-price">53 999₽</s>
                                            <b class="product-card__price">32 230₽</b>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-purple compare__buy add-to-cart"
                                                        type="button"><span
                                                    class="counter counter--red">В корзину</span></button>
                                            </div>
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
                    <label class="compare__all-dif">
                        Только различия
                        <input class="visually-hidden" type="checkbox" name="difference">
                        <span class="custom-checkbox"></span>
                    </label>
                    <div class="compare-container-def slider-container">
                        <div class="product-card-list swiper-wrapper">
                            <div class="swiper-slide swiper-slide--full">
                                <div class="difference">
                                    <dl class="difference__list">
                                        <dt>Стандарты связи</dt>
                                        <dd>EDGE, 3G, LTE</dd>
                                        <dt>ОС</dt>
                                        <dd>iOS 13</dd>
                                        <dt>Разрешение экрана</dt>
                                        <dd>2688х1242</dd>
                                        <dt>Число SIM-карт</dt>
                                        <dd>1</dd>
                                        <dt>Навигация</dt>
                                        <dd>GPS, A-GPS, ГЛОНАСС, iBeacon</dd>
                                        <dt>Встроенная память</dt>
                                        <dd>256 ГБ</dd>
                                        <dt>Оперативная память</dt>
                                        <dd>4 ГБ</dd>
                                        <dt>Функции камеры</dt>
                                        <dd>HDR, Широкоугольный объектив, Сверхширокоугольный объектив, Стабилизация
                                            изображения,
                                            Распознавание лиц, Автофокус, Телеобъектив, Двойная вспышка
                                        </dd>
                                        <dt>Встроенная датчики</dt>
                                        <dd>Компас, Акселерометр, Барометр, Гироскоп, Датчик освещенности, Датчик
                                            приближения, Датчик
                                            распознавания лица
                                        </dd>
                                        <dt>Максимальное время работы (музыка), ч</dt>
                                        <dd>80</dd>
                                        <dt>Разрешение дополнительной тыловой камеры</dt>
                                        <dd>12 + 12</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide--full">
                                <div class="difference">
                                    <dl class="difference__list">
                                        <dt>Стандарты связи</dt>
                                        <dd>EDGE, 3G, LTE</dd>
                                        <dt>ОС</dt>
                                        <dd>iOS 13</dd>
                                        <dt>Разрешение экрана</dt>
                                        <dd>2688х1242</dd>
                                        <dt>Число SIM-карт</dt>
                                        <dd>1</dd>
                                        <dt>Навигация</dt>
                                        <dd>GPS, A-GPS, ГЛОНАСС, iBeacon</dd>
                                        <dt>Встроенная память</dt>
                                        <dd>256 ГБ</dd>
                                        <dt>Оперативная память</dt>
                                        <dd>4 ГБ</dd>
                                        <dt>Функции камеры</dt>
                                        <dd>HDR, Широкоугольный объектив, Сверхширокоугольный объектив, Стабилизация
                                            изображения,
                                            Распознавание лиц, Автофокус, Телеобъектив, Двойная вспышка
                                        </dd>
                                        <dt>Встроенная датчики</dt>
                                        <dd>Компас, Акселерометр, Барометр, Гироскоп, Датчик освещенности, Датчик
                                            приближения, Датчик
                                            распознавания лица
                                        </dd>
                                        <dt>Максимальное время работы (музыка), ч</dt>
                                        <dd>80</dd>
                                        <dt>Разрешение дополнительной тыловой камеры</dt>
                                        <dd>12 + 12</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide--full">
                                <div class="difference">
                                    <dl class="difference__list">
                                        <dt>Стандарты связи</dt>
                                        <dd>EDGE, 3G, LTE</dd>
                                        <dt>ОС</dt>
                                        <dd>iOS 13</dd>
                                        <dt>Разрешение экрана</dt>
                                        <dd>2688х1242</dd>
                                        <dt>Число SIM-карт</dt>
                                        <dd>1</dd>
                                        <dt>Навигация</dt>
                                        <dd>GPS, A-GPS, ГЛОНАСС, iBeacon</dd>
                                        <dt>Встроенная память</dt>
                                        <dd>256 ГБ</dd>
                                        <dt>Оперативная память</dt>
                                        <dd>4 ГБ</dd>
                                        <dt>Функции камеры</dt>
                                        <dd>HDR, Широкоугольный объектив, Сверхширокоугольный объектив, Стабилизация
                                            изображения,
                                            Распознавание лиц, Автофокус, Телеобъектив, Двойная вспышка
                                        </dd>
                                        <dt>Встроенная датчики</dt>
                                        <dd>Компас, Акселерометр, Барометр, Гироскоп, Датчик освещенности, Датчик
                                            приближения, Датчик
                                            распознавания лица
                                        </dd>
                                        <dt>Максимальное время работы (музыка), ч</dt>
                                        <dd>80</dd>
                                        <dt>Разрешение дополнительной тыловой камеры</dt>
                                        <dd>12 + 12</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide--full">
                                <div class="difference">
                                    <dl class="difference__list">
                                        <dt>Стандарты связи</dt>
                                        <dd>EDGE, 3G, LTE</dd>
                                        <dt>ОС</dt>
                                        <dd>iOS 13</dd>
                                        <dt>Разрешение экрана</dt>
                                        <dd>2688х1242</dd>
                                        <dt>Число SIM-карт</dt>
                                        <dd>1</dd>
                                        <dt>Навигация</dt>
                                        <dd>GPS, A-GPS, ГЛОНАСС, iBeacon</dd>
                                        <dt>Встроенная память</dt>
                                        <dd>256 ГБ</dd>
                                        <dt>Оперативная память</dt>
                                        <dd>4 ГБ</dd>
                                        <dt>Функции камеры</dt>
                                        <dd>HDR, Широкоугольный объектив, Сверхширокоугольный объектив, Стабилизация
                                            изображения,
                                            Распознавание лиц, Автофокус, Телеобъектив, Двойная вспышка
                                        </dd>
                                        <dt>Встроенная датчики</dt>
                                        <dd>Компас, Акселерометр, Барометр, Гироскоп, Датчик освещенности, Датчик
                                            приближения, Датчик
                                            распознавания лица
                                        </dd>
                                        <dt>Максимальное время работы (музыка), ч</dt>
                                        <dd>80</dd>
                                        <dt>Разрешение дополнительной тыловой камеры</dt>
                                        <dd>12 + 12</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide--full">
                                <div class="difference">
                                    <dl class="difference__list">
                                        <dt>Стандарты связи</dt>
                                        <dd>EDGE, 3G, LTE</dd>
                                        <dt>ОС</dt>
                                        <dd>iOS 13</dd>
                                        <dt>Разрешение экрана</dt>
                                        <dd>2688х1242</dd>
                                        <dt>Число SIM-карт</dt>
                                        <dd>1</dd>
                                        <dt>Навигация</dt>
                                        <dd>GPS, A-GPS, ГЛОНАСС, iBeacon</dd>
                                        <dt>Встроенная память</dt>
                                        <dd>256 ГБ</dd>
                                        <dt>Оперативная память</dt>
                                        <dd>4 ГБ</dd>
                                        <dt>Функции камеры</dt>
                                        <dd>HDR, Широкоугольный объектив, Сверхширокоугольный объектив, Стабилизация
                                            изображения,
                                            Распознавание лиц, Автофокус, Телеобъектив, Двойная вспышка
                                        </dd>
                                        <dt>Встроенная датчики</dt>
                                        <dd>Компас, Акселерометр, Барометр, Гироскоп, Датчик освещенности, Датчик
                                            приближения, Датчик
                                            распознавания лица
                                        </dd>
                                        <dt>Максимальное время работы (музыка), ч</dt>
                                        <dd>80</dd>
                                        <dt>Разрешение дополнительной тыловой камеры</dt>
                                        <dd>12 + 12</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide--full">
                                <div class="difference">
                                    <dl class="difference__list">
                                        <dt>Стандарты связи</dt>
                                        <dd>EDGE, 3G, LTE</dd>
                                        <dt>ОС</dt>
                                        <dd>iOS 13</dd>
                                        <dt>Разрешение экрана</dt>
                                        <dd>2688х1242</dd>
                                        <dt>Число SIM-карт</dt>
                                        <dd>1</dd>
                                        <dt>Навигация</dt>
                                        <dd>GPS, A-GPS, ГЛОНАСС, iBeacon</dd>
                                        <dt>Встроенная память</dt>
                                        <dd>256 ГБ</dd>
                                        <dt>Оперативная память</dt>
                                        <dd>4 ГБ</dd>
                                        <dt>Функции камеры</dt>
                                        <dd>HDR, Широкоугольный объектив, Сверхширокоугольный объектив, Стабилизация
                                            изображения,
                                            Распознавание лиц, Автофокус, Телеобъектив, Двойная вспышка
                                        </dd>
                                        <dt>Встроенная датчики</dt>
                                        <dd>Компас, Акселерометр, Барометр, Гироскоп, Датчик освещенности, Датчик
                                            приближения, Датчик
                                            распознавания лица
                                        </dd>
                                        <dt>Максимальное время работы (музыка), ч</dt>
                                        <dd>80</dd>
                                        <dt>Разрешение дополнительной тыловой камеры</dt>
                                        <dd>12 + 12</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide--full">
                                <div class="difference">
                                    <dl class="difference__list">
                                        <dt>Стандарты связи</dt>
                                        <dd>EDGE, 3G, LTE</dd>
                                        <dt>ОС</dt>
                                        <dd>iOS 13</dd>
                                        <dt>Разрешение экрана</dt>
                                        <dd>2688х1242</dd>
                                        <dt>Число SIM-карт</dt>
                                        <dd>1</dd>
                                        <dt>Навигация</dt>
                                        <dd>GPS, A-GPS, ГЛОНАСС, iBeacon</dd>
                                        <dt>Встроенная память</dt>
                                        <dd>256 ГБ</dd>
                                        <dt>Оперативная память</dt>
                                        <dd>4 ГБ</dd>
                                        <dt>Функции камеры</dt>
                                        <dd>HDR, Широкоугольный объектив, Сверхширокоугольный объектив, Стабилизация
                                            изображения,
                                            Распознавание лиц, Автофокус, Телеобъектив, Двойная вспышка
                                        </dd>
                                        <dt>Встроенная датчики</dt>
                                        <dd>Компас, Акселерометр, Барометр, Гироскоп, Датчик освещенности, Датчик
                                            приближения, Датчик
                                            распознавания лица
                                        </dd>
                                        <dt>Максимальное время работы (музыка), ч</dt>
                                        <dd>80</dd>
                                        <dt>Разрешение дополнительной тыловой камеры</dt>
                                        <dd>12 + 12</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide--full">
                                <div class="difference">
                                    <dl class="difference__list">
                                        <dt>Стандарты связи</dt>
                                        <dd>EDGE, 3G, LTE</dd>
                                        <dt>ОС</dt>
                                        <dd>iOS 13</dd>
                                        <dt>Разрешение экрана</dt>
                                        <dd>2688х1242</dd>
                                        <dt>Число SIM-карт</dt>
                                        <dd>1</dd>
                                        <dt>Навигация</dt>
                                        <dd>GPS, A-GPS, ГЛОНАСС, iBeacon</dd>
                                        <dt>Встроенная память</dt>
                                        <dd>256 ГБ</dd>
                                        <dt>Оперативная память</dt>
                                        <dd>4 ГБ</dd>
                                        <dt>Функции камеры</dt>
                                        <dd>HDR, Широкоугольный объектив, Сверхширокоугольный объектив, Стабилизация
                                            изображения,
                                            Распознавание лиц, Автофокус, Телеобъектив, Двойная вспышка
                                        </dd>
                                        <dt>Встроенная датчики</dt>
                                        <dd>Компас, Акселерометр, Барометр, Гироскоп, Датчик освещенности, Датчик
                                            приближения, Датчик
                                            распознавания лица
                                        </dd>
                                        <dt>Максимальное время работы (музыка), ч</dt>
                                        <dd>80</dd>
                                        <dt>Разрешение дополнительной тыловой камеры</dt>
                                        <dd>12 + 12</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: "Page-Compare"
}
</script>

<style scoped>

</style>
