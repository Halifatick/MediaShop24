<template>
    <main>
        <div class="service">
            <div class="service-aside">
                <div class="service-aside__inner">
                    <a class="logo logo--big" href="index.html">
                        <svg width="240" height="43">
                            <use href="#icon-logo-big"></use>
                        </svg>
                    </a>
                    <div class="service-aside__links">
                        <a href="delivery.html">Доставка и оплата</a>
                        <a href="warranty.html">Гарантия и возврат</a>
                        <a href="faq.html">Покупки в кредит</a>
                        <a href="faq.html">Сервисные услуги</a>
                        <a href="faq.html">Частые вопросы</a>
                        <a href="faq.html">Условия продажи товаров</a>
                        <a href="policy.html">Политика конфиденциальности</a>
                        <a href="contact.html">Контакты</a>
                        <a href="index.html">Вернуться на главную</a>
                    </div>
                </div>
            </div>
            <div class="service__container">
                <div class="bread-crumbs ">
                    <a href="index.html">Главная</a>
                    <a href="delivery.html" aria-current="location">Доставка и оплата</a>
                </div>
                <h1 class="title">Доставка и оплата</h1>
                <h2 class="service__title">Собственный отдел логистики быстро и бережно доставит ваш заказ по адресу в
                    Санкт-Петербурге:</h2>
                <div class="service__text-block service__text-block--logistic">
                    <ul class="unmarked-list">
                        <li>в день заказа, либо на следующий день в рабочие дни*</li>
                        <li>в удобное для вас время</li>
                        <li>вам позвонят за час</li>
                        <li>помогут распаковать заказ, предоставят 10 минут на проверку</li>
                    </ul>
                    <p>* при статусе "наличие"; до 2-х дней ожидания в выходные и до 3-4-х в праздники</p>
                </div>
                <div id="map" class="service__map"></div>
                <h2 class="service__title">Оплата наличными:</h2>
                <ul class="service__text-block unmarked-list">
                    <li>Оплата наличными в пункте выдачи;</li>
                    <li>Оплата наличными курьеру при получении*;</li>
                </ul>
                <h2 class="service__title">Оплата по счёту для юридических лиц:</h2>
                <ul class="service__text-block unmarked-list">
                    <li>Безналичная оплата по счёту для юридических лиц**;</li>
                </ul>
                <h2 class="service__title">Оплата при доставке в регионы:</h2>
                <div class="service__text-block service__text-block--region">
                    <ul class="unmarked-list">
                        <li>Предоплата 100% на карту Альфа-банк (без комиссии*);</li>
                        <li>Предоплата 100% на карту Сбербанк (без комиссии*);</li>
                        <li>Предоплата 100% на карту Тинькофф Банк (без комиссии*);</li>
                    </ul>
                    <p>* Только при доставке собственной службой логистики по СПб и ЛО;</p>
                    <p>** Счёт выставляется без НДС, +5% к стоимости товара на момент заказа, только при наличии
                        реквизитов
                        плательщика в текстовом формате. </p>
                    <p>*** Комиссия за перевод денежных средств в большинстве случаев не взимается при транзакциях между
                        дебетовыми картами одного эмитента. Подробную информацию можно получить, обратившись в банк,
                        выпустивший
                        Вашу карту;</p>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: "Page-Delivery"
}
</script>

<style scoped>

</style>
