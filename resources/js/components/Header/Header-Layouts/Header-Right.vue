<template>
    <div class="header__right">
        <div class="header__action-btn">
            <button class="header__btn-mob header__search-form" type="button" data-modal-open="search-header"
                    aria-label="поиск по сайту">
                <svg width="24" height="24">
                    <use href="#icon-search"></use>
                </svg>
            </button>
            <a class="header__btn-mob header__phone link" href="tel:+78124486811">
                <span>+7 (812) 448 68 11</span>
                <svg width="24" height="24">
                    <use href="#icon-phone"></use>
                </svg>
            </a>
            <a class="header__make-call" href="#!" data-modal-open="modal-call">Заказать звонок</a>
            <button class="header__btn-mob header__cart-btn" type="button">
                <svg width="24" height="24">
                    <use href="#icon-cart"></use>
                </svg>
            </button>
        </div>
        <div class="header__bottom-level">
            <a class="header__btn header__btn--location arrow arrow--down" href="#!" data-city="Санкт-Петербург"
               data-modal-open="location">
                <svg width="24" height="24">
                    <use href="#icon-location"></use>
                </svg>
            </a>
            <a class="header__bottom-decr link" href="#!" target="_blank">Новые обзоры каждую неделю, смотри нас
                на нашем YouTube канале</a>
            <a class="youtube-link" href="#!" target="_blank">
                <svg width="26" height="20">
                    <use href="#icon-youtube"></use>
                </svg>
                YouTube
            </a>
        </div>
    </div>
</template>

<script>
export default {
    name: "Header-Right"
}
</script>

<style scoped>

</style>
