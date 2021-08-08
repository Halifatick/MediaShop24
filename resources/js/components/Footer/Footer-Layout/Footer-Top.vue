<template>
    <div class="footer__top">
        <h3>Контакты</h3>
        <a class="footer__link-phone" href="tel:+78003333224">+7 (800) 333 32 24</a>
        <a class="footer__link-phone" href="tel:+78124486811" aria-label="Интернет магазин">+7 (812) 448 68
            11</a>
        <button class="footer__btn btn" type="button" data-modal-open="modal-call">Заказать звонок</button>
        <a class="footer__modal-link" href="#!" data-tab="policy" data-modal-open="help">Политика
            конфиденциальности</a>
        <a class="footer__modal-link" href="#!" data-tab="offer" data-modal-open="help">Пользовательское
            соглашение</a>
    </div>
</template>

<script>
export default {
    name: "Footer-Top"
}
</script>

<style scoped>

</style>
