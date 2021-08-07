<template>
    <main>
        <div class="contact">
            <div class="contact__content">
                <div class="bread-crumbs ">
                    <a href="index.html">Главная</a>
                    <a href="contact.html" aria-current="location">Контакты</a>
                </div>
                <h1 class="title">Контакты</h1>
                <h2 class="subtitle subtitle--point">Пункт самовывоза</h2>
                <div class="contact__address-wrap">
                    <p class="contact__address">
                        <svg width="24" height="24">
                            <use href="#icon-location"></use>
                        </svg>
                        Санкт-Петербург станция метро Спортивная, Ждановская набережная, д. 7
                    </p>
                    <p class="contact__schedule">Ежедневно, по будним дням с 10.00 до 21.00, по выходным с 11.00 до 20.00 </p>
                    <dl class="contact__requisites">
                        <dt>Наименование ИП:</dt>
                        <dd>Демидова Л.И.</dd>
                        <dt>ОГРН:</dt>
                        <dd>304784725700099 (13.09.2004 г.)</dd>
                        <dt>ИНН:</dt>
                        <dd>781128388406</dd>
                    </dl>
                </div>
                <div class="contact__phones">
                    <h2 class="subtitle">Многоканальные телефоны:</h2>
                    <div class="block-contact">
                        <a href="tel:88124486811">
                            <svg width="24" height="24">
                                <use href="#icon-phone"></use>
                            </svg>
                            8 (812) 448-68-11</a>
                        <a href="tel:88003333224">
                            <svg width="24" height="24">
                                <use href="#icon-phone"></use>
                            </svg>
                            8 (800) 333-32-24</a>
                    </div>
                </div>
                <div class="contact__emails">
                    <h2 class="subtitle">Электронная почта</h2>
                    <ul class="block-contact">
                        <li>
                            <a href="mailto:info@mediashop24.ru">
                                <svg width="24" height="24">
                                    <use href="#icon-mail"></use>
                                </svg>
                                info@mediashop24.ru</a>
                            <small>Общие вопросы</small>
                        </li>
                        <li>
                            <a href="mailto:info@mediashop24.ru">
                                <svg width="24" height="24">
                                    <use href="#icon-mail"></use>
                                </svg>
                                info@mediashop24.ru</a>
                            <small>Контроль качества обслуживания</small>
                        </li>
                        <li>
                            <a href="mailto:info@mediashop24.ru">
                                <svg width="24" height="24">
                                    <use href="#icon-mail"></use>
                                </svg>
                                info@mediashop24.ru</a>
                            <small>Закупки и партнерство</small>
                        </li>
                        <li>
                            <a href="mailto:info@mediashop24.ru">
                                <svg width="24" height="24">
                                    <use href="#icon-mail"></use>
                                </svg>
                                info@mediashop24.ru</a>
                            <small>Генеральный директор</small>
                        </li>
                    </ul>
                </div>
                <button class="btn btn-purple contact__btn" type="button" data-modal-open="write-us">Написать нам</button>
                <div id="map" class="contact__map"></div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: "Page-Contact"
}
</script>

<style scoped>

</style>
