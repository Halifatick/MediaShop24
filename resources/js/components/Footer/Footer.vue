<template>
    <footer class="footer">
        <div class="footer__container container">
            <div class="footer__company">
                <a class="footer__logo" href="index.html">

                    <svg width="180" height="32">
                        <use href="#icon-logo-white"></use>
                    </svg>

                </a>
                <p>Вся информация на сайте носит справочный характер и не является публичной офертой.</p>
                <a class="youtube-link" href="#!" target="_blank">

                    <svg width="26" height="20">
                        <use href="#icon-youtube"></use>
                    </svg>

                    YouTube
                </a>
            </div>
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

            <div class="footer__middle accordion">
                <div class="accordion__item accordion__item--inet">
                    <h3 class="footer__accordion-title accordion__title accordion-title arrow arrow--down">Интернет
                        магазин</h3>
                    <ul class="accordion__content footer__accordion-content">

                        <li><a href="#!">О магазине</a></li>

                        <li><a href="#!">Доставка и оплата</a></li>

                        <li><a href="#!">Гарантии и возврат</a></li>

                        <li><a href="#!">Кредит и рассрочка</a></li>

                        <li><a href="#!">Trade-in</a></li>

                        <li><a href="#!">Акции</a></li>

                        <li><a href="#!">Каталог товаров</a></li>

                        <li><a href="#!">Сервис</a></li>

                        <li><a href="#!">Новости</a></li>

                        <li><a href="#!">Обзоры</a></li>

                    </ul>
                </div>
                <div class="accordion__item">
                    <h3 class="footer__accordion-title accordion__title accordion-title arrow arrow--down">Компания</h3>
                    <ul class="accordion__content footer__accordion-content">

                        <li><a href="#!">О нас</a></li>

                        <li><a href="#!">Новости</a></li>

                        <li><a href="#!">Вакансии</a></li>

                        <li><a href="#!">Контакты</a></li>

                    </ul>
                </div>
                <div class="accordion__item accordion__item--help">
                    <h3 class="footer__accordion-title accordion__title accordion-title arrow arrow--down">Помощь</h3>
                    <ul class="accordion__content footer__accordion-content">

                        <li><a href="#!">Контакты</a></li>

                        <li><a href="#!">Гарантия и возврат</a></li>

                        <li><a href="#!">Сервис</a></li>

                        <li><a href="#!">Поддержка</a></li>

                    </ul>
                </div>
            </div>

            <div class="footer__bottom">
                <h3>Мы в соц.сетях</h3>
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
                        <a href="#!" aria-label="наша страница инстаграмм">

                            <svg width="40" height="40">
                                <use href="#icon-ig"></use>
                            </svg>

                        </a>
                    </li>

                    <li>
                        <a href="#!" aria-label="наша страница телеграмм">

                            <svg width="40" height="40">
                                <use href="#icon-tg"></use>
                            </svg>

                        </a>
                    </li>

                    <li class=social-icons__youtube>
                        <a href="#!" aria-label="наша страница ютуб">

                            <svg width="40" height="40">
                                <use href="#icon-yt"></use>
                            </svg>

                        </a>
                    </li>

                </ul>
            </div>
            <div class="footer__copyright">
                <p>© 2020 Все права защищены</p>

                <a class="footer__modal-link" href="#!" data-tab="policy" data-modal-open="help">Политика
                    конфиденциальности</a>
                <a class="footer__modal-link" href="#!" data-tab="offer" data-modal-open="help">Пользовательское
                    соглашение</a>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped>

</style>
