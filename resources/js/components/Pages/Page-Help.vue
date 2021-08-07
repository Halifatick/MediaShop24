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
                    <a href="help.html" aria-current="location">Помощь</a>
                </div>
                <h1 class="title">Помощь</h1>
                <div class="service__help-accordion accordion">
                    <div class="service__accordion-item">
                        <button class="accordion__title service__help-title accordion-title arrow arrow--down"
                                type="button">Доставка и оплата
                        </button>
                        <div class="accordion__content service__help-links">
                            <a class="link" href="#">Самовывоз</a>
                            <a class="link" href="#">Доставка по РФ</a>
                            <a class="link" href="#">Оплата товара</a>
                        </div>
                    </div>
                    <div class="service__accordion-item">
                        <button class="accordion__title service__help-title accordion-title arrow arrow--down"
                                type="button">Гарантия и возврат
                        </button>
                        <div class="accordion__content service__help-links">
                            <a class="link" href="#">Гарантия</a>
                            <a class="link" href="#">Возврат товара</a>
                        </div>
                    </div>
                    <div class="service__accordion-item">
                        <button class="accordion__title service__help-title accordion-title arrow arrow--down"
                                type="button">Покупки в кредит
                        </button>
                        <div class="accordion__content service__help-links">
                            <a class="link" href="#">Самовывоз</a>
                        </div>
                    </div>
                    <div class="service__accordion-item">
                        <button class="accordion__title service__help-title accordion-title arrow arrow--down"
                                type="button">Сервисные услуги
                        </button>
                        <div class="accordion__content service__help-links">
                            <a class="link" href="#">Сервис центр</a>
                            <a class="link" href="#">Ремонт</a>
                        </div>
                    </div>
                    <div class="service__accordion-item">
                        <button class="accordion__title service__help-title accordion-title arrow arrow--down"
                                type="button">Частые вопросы
                        </button>
                        <div class="accordion__content service__help-links">
                            <a class="link" href="#">Сервис центр</a>
                            <a class="link" href="#">Ремонт</a>
                        </div>
                    </div>
                    <div class="service__accordion-item">
                        <button class="accordion__title service__help-title accordion-title arrow arrow--down"
                                type="button">Условия продажи товаров
                        </button>
                        <div class="accordion__content service__help-links">
                            <a class="link" href="#">Политика </a>
                        </div>
                    </div>
                    <a class="service__accordion-item link" href="#">Политика конфиденциальности</a>
                    <a class="service__accordion-item link" href="#">Контакты</a>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: "Page-Help"
}
</script>

<style scoped>

</style>
