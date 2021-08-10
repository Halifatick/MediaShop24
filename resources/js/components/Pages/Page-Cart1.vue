<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main></header-main>
            <main>
                <section class="cart">
                    <h1 class="visually-hidden">Оформление заказа</h1>
                    <div class="cart-checkout">
                        <div class="bread-crumbs ">
                            <a href="index">Главная</a>
                            <a href="cart">Корзина</a>
                            <a href="cart1" aria-current="location">Оформление заказа</a>
                        </div>
                        <h2 class="title cart__title wrapper">Укажите покупателя</h2>
                        <form class="cart-products" method="post" autocomplete="on">
                            <div class="cart-checkout__wrap">
                                <div class="cart-checkout__user">
                                    <div>
                                        <label class="form__field-wrap">
                                            Ваше имя
                                            <input type="text" placeholder="Введите ваше имя" name="name" data-validate
                                                   required>
                                        </label>
                                        <label class="form__field-wrap">
                                            Электронная почта
                                            <input type="text" placeholder="Введите вашу электронную почту" name="email"
                                                   data-validate="email"
                                                   required>
                                        </label>
                                        <label class="form__field-wrap">
                                            Номер телефона
                                            <input type="text" name="phone" placeholder="Введите номер телефона"
                                                   data-validate="phone" required>
                                        </label>
                                    </div>
                                    <div>
                                        <p class="cart-checkout__cabinet">У вас уже есть личный кабинет?</p>
                                        <p class="cart-checkout__enter"><a class="link" href="#" data-modal-open="modal-login">Войдите</a>
                                            для
                                            отслеживания статуса заказа в личном кабинете, накопления бонусов и автоматического
                                            заполнения форм
                                        </p>
                                        <strong class="cart-checkout__social-title">Войти через социальные сети:</strong>
                                        <ul class="social-icons">
                                            <li>
                                                <a href="#!" aria-label="наша страница фейсбук">
                                                    <svg width="40" height="40">
                                                        <use href="#icon-fb"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" aria-label="наша страница в контакте">
                                                    <svg width="40" height="40">
                                                        <use href="#icon-vk"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" aria-label="наша страница твиттер">
                                                    <svg width="40" height="40">
                                                        <use href="#icon-tw"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" aria-label="наша страница одноклассники">
                                                    <svg width="40" height="40">
                                                        <use href="#icon-ok"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" aria-label="наша страница гугл плюс">
                                                    <svg width="40" height="40">
                                                        <use href="#icon-gp"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" aria-label="наша страница майл ру">
                                                    <svg width="40" height="40">
                                                        <use href="#icon-mr"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cart-checkout__radio cart-checkout__radio-shpt">
                                    <h2 class="wrapper">Доставка в&ensp;<span data-modal-open="location">Санкт петербург</span>
                                    </h2>
                                    <div class="sort-fieldset">
                                        <h3 class="sort-title wrapper">Способ получения</h3>
                                        <div class="cart-checkout__tabs-wrap">
                                            <div class="sort-fieldset-radio">
                                                <input class="visually-hidden" id="shpt-courier" type="radio" name="shpt">
                                                <label for="shpt-courier"><span class="custom-radio"></span>Доставка
                                                    курьером</label>
                                                <span class="shpt-description">В удобный для вас день и интервал времени</span>
                                                <div class="shpt-footer">
                                                    <span>c 24/06</span>
                                                    <span>Бесплатно</span>
                                                </div>
                                            </div>
                                            <fieldset class="checkout-form-wrap" disabled>
                                                <legend class="visually-hidden">Адрес получателя</legend>
                                                <div class="form checkout-form">
                                                    <h3 class="checkout-form__title">Адрес получателя</h3>
                                                    <div class="checkout-form__wrap-fields">
                                                        <label class="form__field-wrap">
                                                            Улица*
                                                            <input type="text" placeholder="Введите вашу улицу" name="street"
                                                                   data-validate required>
                                                        </label>
                                                        <div class="form__three-blocks">
                                                            <label class="form__field-wrap">
                                                                Дом*
                                                                <input type="text" placeholder="Дом" name="house" data-validate
                                                                       required>
                                                            </label>
                                                            <label class="form__field-wrap">
                                                                Подъезд
                                                                <input type="text" placeholder="Подъезд" name="house">
                                                            </label>
                                                            <label class="form__field-wrap">
                                                                Квартира
                                                                <input type="text" placeholder="Квартира" name="house">
                                                            </label>
                                                        </div>
                                                        <div class="form__two-blocks">
                                                            <span>Дата и интервал доставки</span>
                                                            <label class="form__select" aria-label="Дата доставки">
                              <span class="checkout-form__date arrow arrow--down">
                                <select name="date">
                                  <option value="today">сегодня</option>
                                  <option value="tomorrow">завтра</option>
                                  <option value="after-t">послезавтра</option>
                                  <option value="later">потом</option>
                                </select>
                              </span>
                                                            </label>
                                                            <label class="form__select checkout-form__time arrow arrow--down"
                                                                   aria-label="Время доставки">
                                                                <select name="time">
                                                                    <option value="12-16">12:00-16:00</option>
                                                                    <option value="16-18">16:00-18:00</option>
                                                                    <option value="18-20">18:00-20:00</option>
                                                                    <option value="20-22">20:00-22:00</option>
                                                                </select>
                                                            </label>
                                                        </div>
                                                        <label class="form__field-wrap form__field-textarea">
                                                            Комментарий к доставке
                                                            <textarea name="comment"
                                                                      placeholder="Введите ваше сообщение"></textarea>
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="sort-fieldset-radio">
                                                <input class="visually-hidden" id="shpt-self" type="radio" name="shpt">
                                                <label for="shpt-self"><span class="custom-radio"></span>Самовывоз</label>
                                                <span class="shpt-description">Без лишних рук и когда удобно 1 пункт</span>
                                                <div class="shpt-footer">
                                                    <span>c 24/06</span>
                                                    <span>Бесплатно</span>
                                                </div>
                                            </div>
                                            <fieldset class="checkout-form-wrap" disabled>
                                                <legend class="visually-hidden">Пункт самовывоза</legend>
                                                <div class="form checkout-form">
                                                    <h3>Пункт самовывоза</h3>
                                                    <div id="map" class="map map--shpt"></div>
                                                    <div class="checkout-form__address">
                                                        <p>Mediashop24</p>
                                                        <p>СПб, Ждановская наб. 7</p>
                                                        <span>График : 10:00-21:00</span>
                                                    </div>
                                                    <div class="form__two-blocks form__two-blocks--map">
                                                        <span>Дата и интервал доставки</span>
                                                        <label class="form__select" aria-label="Дата доставки">
                            <span class="checkout-form__date arrow arrow--down">
                              <select name="date">
                                <option value="today">сегодня</option>
                                <option value="tomorrow">завтра</option>
                                <option value="after-t">послезавтра</option>
                                <option value="later">потом</option>
                              </select>
                            </span>
                                                        </label>
                                                        <label class="form__select checkout-form__time arrow arrow--down"
                                                               aria-label="Время доставки">
                                                            <select name="time">
                                                                <option value="12-16">12:00-16:00</option>
                                                                <option value="16-18">16:00-18:00</option>
                                                                <option value="18-20">18:00-20:00</option>
                                                                <option value="20-22">20:00-22:00</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="sort-fieldset-radio">
                                                <input class="visually-hidden" id="shpt-country" type="radio" name="shpt">
                                                <label for="shpt-country"><span class="custom-radio"></span>Доставка по
                                                    РФ</label>
                                                <span class="shpt-description">Без лишних рук и когда удобно 1 пункт</span>
                                                <div class="shpt-footer">
                                                    <span>c 24/06</span>
                                                    <span>Бесплатно</span>
                                                </div>
                                            </div>
                                            <fieldset class="checkout-form-wrap" disabled>
                                                <legend class="visually-hidden">Адрес получателя</legend>
                                                <div class="form checkout-form">
                                                    <h3 class="checkout-form__title">Адрес получателя</h3>
                                                    <div class="checkout-form__wrap-fields">
                                                        <label class="form__field-wrap">
                                                            Индекс*
                                                            <input type="text" placeholder="Введите ваш индекс" name="index"
                                                                   data-validate="number"
                                                                   required>
                                                        </label>
                                                        <label class="form__field-wrap">
                                                            Улица*
                                                            <input type="text" placeholder="Введите вашу улицу" name="street"
                                                                   data-validate required>
                                                        </label>
                                                        <div class="form__three-blocks">
                                                            <label class="form__field-wrap">
                                                                Дом*
                                                                <input type="text" placeholder="Дом" name="house" data-validate
                                                                       required>
                                                            </label>
                                                            <label class="form__field-wrap">
                                                                Подъезд
                                                                <input type="text" placeholder="Подъезд" name="house">
                                                            </label>
                                                            <label class="form__field-wrap">
                                                                Квартира
                                                                <input type="text" placeholder="Квартира" name="house">
                                                            </label>
                                                        </div>
                                                        <label class="form__field-wrap form__field-textarea">
                                                            Комментарий к доставке
                                                            <textarea name="comment"
                                                                      placeholder="Введите ваше сообщение"></textarea>
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-checkout__radio cart-checkout__payment">
                                    <h2>Способ оплаты</h2>
                                    <div class="sort-fieldset">
                                        <h3 class="sort-title">Выберите удобный способ оплаты</h3>
                                        <div class="sort-fieldset-radio">
                                            <input class="visually-hidden" id="payment-card" type="radio" name="payment"
                                                   required>
                                            <label for="payment-card"><span class="custom-radio"></span>Оплата банковской картой</label>
                                            <span class="payment-description">Оплата заказа картами Visa и MasterCard</span>
                                            <div class="pay-card-icon">
                                                <span class="visa-icon"></span>
                                                <span class="mc-icon"></span>
                                            </div>
                                        </div>
                                        <div class="sort-fieldset-radio">
                                            <input class="visually-hidden" id="payment-yandex" type="radio" name="payment"
                                                   required>
                                            <label for="payment-yandex"><span class="custom-radio"></span>Яндекс.Деньги</label>
                                            <span class="payment-description">Оплата заказа через сервис</span>
                                            <div class="pay-card-icon">
                                                <span class="ya-icon"></span>
                                            </div>
                                        </div>
                                        <div class="sort-fieldset-radio">
                                            <input class="visually-hidden" id="payment-cash" type="radio" name="payment"
                                                   required>
                                            <label for="payment-cash"><span class="custom-radio"></span>Наличными</label>
                                            <span class="payment-description">Оплата заказа наличными курьеру при доставке или продавцу в
                      магазине при самовывозе</span>
                                            <div class="pay-card-icon">
                                                <span class="cash-icon"></span>
                                            </div>
                                        </div>
                                        <div class="sort-fieldset-radio">
                                            <input class="visually-hidden" id="payment-credit" type="radio" name="payment"
                                                   required>
                                            <label for="payment-credit"><span class="custom-radio"></span>Кредит онлайн</label>
                                            <span class="payment-description">Оплата заказа через Банки</span>
                                            <div class="pay-card-icon">
                                                <span class="visa-icon"></span>
                                                <span class="mc-icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-products__amount-wrap">
                                <div class="cart-checkout__list-items">
                                    <div class="cart-checkout__item">
                                        <div class="cart-products__img">
                                            <img src="img/content/phone-cart.jpg" width="55" height="65" alt="айфон 8">
                                        </div>
                                        <div class="cart-products__name">
                                            <p>Apple MacBook Air 13 дисплей Retina с технологией True Tone Mid 2019 MVFL2
                                                (i51600/8Gb/256Gb SSD)
                                                EU</p>
                                            <small>Арт. 064206</small>
                                        </div>
                                        <div class="cart-products__price">
                                            <span class="cart-products__new-price">112 276₽</span>
                                            <s class="cart-products__old-price">113 999₽</s>
                                        </div>
                                    </div>
                                    <div class="cart-checkout__item">
                                        <div class="cart-products__img">
                                            <img src="img/content/phone-cart.jpg" width="55" height="65" alt="айфон 8">
                                        </div>
                                        <div class="cart-products__name">
                                            <p>Apple MacBook</p>
                                            <small>Арт. 064206</small>
                                        </div>
                                        <div class="cart-products__price">
                                            <span class="cart-products__new-price">112 276₽</span>
                                            <s class="cart-products__old-price">113 999₽</s>
                                        </div>
                                    </div>
                                </div>
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
                                    <div class="cart-products__amount-middle cart-products__amount-middle--checkout">
                                        <div>Скидка<s>99 999₽</s></div>
                                        <div>Доставка<span>200₽</span></div>
                                    </div>
                                    <div class="cart-products__amount-bottom wrapper">
                                        <div class="cart-products__total-wrap">Итого<span
                                            class="cart-products__total">99 999₽</span></div>
                                        <button class="cart-products__btn-order btn btn-purple" type="submit">Оформить заказ
                                        </button>
                                        <div class="cart-checkout__footer">
                                            <div>
                                                <p>После осуществления заказа мы свяжемся с вами, чтобы уточнить все детали</p>
                                                <p>*Итоговая стоимость заказа рассчитана без учета стоимости доставки,
                                                    информацию о стоимости
                                                    доставки
                                                    предоставит менеджер при звонке</p>
                                            </div>
                                            <div class="cart-checkout__links">
                                                <a class="link" href="#" data-tab="offer" data-modal-open="help">Договор
                                                    оферты</a>
                                                <a class="link" href="#" data-tab="ship" data-modal-open="help">Доставка и
                                                    оплата</a>
                                                <a class="link" href="#" data-tab="policy" data-modal-open="help">Политика
                                                    конфиденциальности</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </main>
        </div>
        <footer-main></footer-main>
        <template id="template">
            <modal-layout></modal-layout>
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>
</template>

<script>
export default {
    name: "Page-Cart1"
}
</script>

<style scoped>

</style>
