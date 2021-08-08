<template>
    <div class="header__interaсtive-wrap">
        <a class="header__btn header__btn--location arrow arrow--down" data-city="Санкт-Петербург" href="#!"
           data-modal-open="location">
            <svg width="24" height="24">
                <use href="#icon-location"></use>
            </svg>
        </a>
        <div class="header__btn header__btn--sign">
            <a href="#!" data-modal-open="modal-login">
                <svg width="24" height="24">
                    <use href="#icon-sign"></use>
                </svg>
                <span class="touch">Вход/Регистрация</span>
                <span class="desktop">Войти</span>
            </a>
            <div class="header__additional-menu">
                <div>
                    <ul>
                        <li><a class="link" href="#!">Профиль</a></li>
                        <li><a class="link" href="#!">Личные данные</a></li>
                        <li><a class="link" href="#!">Мои заказы</a></li>
                        <li><a class="link" href="#!">Избранное</a></li>
                        <li><a class="link" href="#!">Лист ожидания</a></li>
                        <li><a class="link" href="#!">Мои отзывы</a></li>
                        <li><a class="link" href="#!">Помощь</a></li>
                    </ul>
                    <button class="logout-btn" type="button">
                        <svg width="24" height="24">
                            <use href="#icon-logout"></use>
                        </svg>
                        Выход
                    </button>
                </div>
            </div>
            <div class="header__additional-menu">
                <div>
                    <ul>
                        <li><a class="link" href="#!" data-modal-open="modal-login">Вход</a></li>
                        <li><a class="link" href="#!" data-modal-open="modal-register">Регистрация</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <a id="header-equal" class="header__btn link-compare-js header__btn--equal" href="compare">
              <span class="counter counter--red" data-count="3">
                <svg width="24" height="24">
                  <use href="#icon-equal"></use>
                </svg>
              </span>
            Сравнить
        </a>
        <a id="header-favorite" class="header__btn link-compare-js header__btn--favorite" href="favorite">
              <span class="counter counter--red" data-count="4">
                <svg width="24" height="24">
                  <use href="#icon-favorite"></use>
                </svg>
              </span>
            Избранное
        </a>
        <a id="header-cart" class="header__btn header__btn--cart" href="cart"
           aria-label="открыть корзину">
              <span class="counter counter--red">
                <svg width="24" height="24">
                  <use href="#icon-cart"></use>
                </svg>
              </span>
            Корзина
        </a>
    </div>
</template>

<script>
export default {
    name: "Header-Burger-Menu-Interactive"
}
</script>

<style scoped>

</style>
