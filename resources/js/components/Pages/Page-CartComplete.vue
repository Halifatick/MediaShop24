<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main></header-main>
            <main>
                <div class="cart-complete">
                    <section class="cart-complete__main">
                        <div class="cart-complete__top wrap-block">
                            <h1 class="title">Ваш заказ успешно оформлен</h1>
                            <strong class="cart-complete__order-number">Номер заказа <span>ВТБ-122700</span></strong>
                            <p class="cart-complete__text">Спасибо, за ваш выбор, мы уже обрабатываем ваш заказ, наш оператор
                                свяжется с
                                вами в ближайшее время для уточнения информации.</p>
                            <p>Детали заказа отправлены на вашу электронную почту</p>
                            <a href="mailto:info@gmail.com">info@gmail.com</a>
                        </div>
                        <div class="cart-complete__bottom wrap-block">
                            <h2 class="title">Детали</h2>
                            <div class="cart-complete__details">
                                <div class="cart-complete__info-block cart-complete__recipient">
                                    <h3>Получатель</h3>
                                    <p>Розенберг А.О.</p>
                                    <p>+7 (965) 019-13-13</p>
                                    <p>Санкт-Петербург, ул. Цветочная, д.19 к3, кв 789</p>
                                    <p>191191</p>
                                </div>
                                <div class="cart-complete__info-block">
                                    <h3>Способ оплаты</h3>
                                    <p>Платежная карта</p>
                                    <p>MasterCard •••• •••• •••• 9123</p>
                                    <img src="img/bg/mc.svg" alt="мастер кард" width="65" height="39">
                                </div>
                                <div class="cart-complete__info-block">
                                    <h3>Способ доставки</h3>
                                    <p>Транспортной компанией до двери</p>
                                </div>
                            </div>
                            <a class="cart-complete__back arrow arrow--right" href="index">Вернуться на главную</a>
                        </div>
                        <div class="cart-complete__wrap-social wrap-block">
                            <strong>Следи за нами через социальные сети:</strong>
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
                                    <a href="#!" aria-label="наша страница в инстаграмм">
                                        <svg width="40" height="40">
                                            <use href="#icon-ig"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" aria-label="наша страница на ютубе">
                                        <svg width="40" height="40">
                                            <use href="#icon-yt"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" aria-label="наша страница в телеграмм">
                                        <svg width="40" height="40">
                                            <use href="#icon-tg"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="cart-complete__right submenu-block-desktop">
                        <div class="form-wrap modal-body">
                            <div class="menu-head">
                                <h3 class="menu-title">Войти</h3>
                            </div>
                            <p>Нет аккаунта? <a class="form__link" href="#!"
                                                data-modal-open="modal-register">Зарегистрироваться</a></p>
                            <form class="form form--login" method="post" autocomplete="on">
                                <label class="form__field-wrap">
                                    Электронная почта
                                    <input type="text" name="email" placeholder="Введите адрес электронной почты"
                                           data-validate="email"
                                           required>
                                </label>
                                <span class="form__field-wrap">
                Пароль
                <label class="form__field-password">
                  <input type="password" placeholder="Введите пароль" name="password" data-validate="password" required>
                  <span class="show-password">
                    <svg width="20" height="20">
                      <use href="#icon-password-eye"></use>
                    </svg>
                  </span>
                </label>
              </span>
                                <a class="form__forgot-pass form__link" href="#!" data-modal-open="modal-recover">Не помню
                                    пароль</a>
                                <button class="form__submit btn btn-purple" type="submit">Вход</button>
                            </form>
                            <div class="modal-login-footer">
                                <strong>Войти через социальные сети:</strong>
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
                    </div>
                </div>
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
    name: "Page-CartComplete"
}
</script>

<style scoped>

</style>
