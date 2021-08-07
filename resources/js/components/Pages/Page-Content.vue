<template>
    <main>
        <style>
            header,
            footer,
            .aside-container {
                display: none !important;
                visibility: hidden !important;
                position: absolute !important;
                opacity: 0;
                top: 0;
                left: 0;
            }

            body {
                background-color: moccasin;
            }

            .cont {
                display: grid;
                gap: 50px;
                background-color: moccasin;
            }

            @media (min-width: 769px) {
                .cont {
                    grid-template-columns: max-content max-content;
                    gap: 30px;
                }
            }

            .cont > div {
                padding: 20px;
            }

            .cont h2 {
                margin-bottom: 30px;
            }

            .cont > div a {
                font-weight: 400;
                font-size: 20px;
                color: initial;
                text-decoration: underline;
            }

            li {
                margin-bottom: 20px;
            }
        </style>
        <div class="cont">
            <div>
                <h2>Страницы</h2>
                <ul>
                    <li>
                        <a href="index.html">Главная</a>
                    </li>
                    <li>
                        <a href="catalogmain.html">Каталог-главная</a>
                    </li>
                    <li>
                        <a href="catalog.html">Каталог</a>
                    </li>
                    <li>
                        <a href="card.html">Карточка товара</a>
                    </li>
                    <li>
                        <a href="card2.html">Карточка товара пустая</a>
                    </li>
                    <li>
                        <a href="compare.html">Сравнение</a>
                    </li>
                    <li>
                        <a href="favorite.html">Избранное</a>
                    </li>
                    <li>
                        <a href="news.html">Новости</a>
                    </li>
                    <li>
                        <a href="review.html">Обзоры</a>
                    </li>
                    <li>
                        <a href="review2.html">Обзор2</a>
                    </li>
                    <li>
                        <a href="article.html">Статья</a>
                    </li>
                    <li>
                        <a href="stock.html">Акции</a>
                    </li>
                    <li>
                        <a href="stock2.html">Акции2</a>
                    </li>
                    <li>
                        <a href="vacancies.html">Вакансии</a>
                    </li>
                    <li>
                        <a href="about.html">О нас</a>
                    </li>
                    <li>
                        <a href="cart.html">Корзина</a>
                    </li>
                    <li>
                        <a href="cart1.html">Оформление заказа</a>
                    </li>
                    <li>
                        <a href="cartcomplete.html">Заказ Оформлен</a>
                    </li>
                    <li>
                        <a href="contact.html">Контакты</a>
                    </li>
                    <li>
                        <a href="policy.html">Политика конфиденциальности</a>
                    </li>
                    <li>
                        <a href="warranty.html">Гарантия и возврат</a>
                    </li>
                    <li>
                        <a href="delivery.html">Доставка и оплата</a>
                    </li>
                    <li>
                        <a href="faq.html">Вопросы и ответы</a>
                    </li>
                    <li>
                        <a href="help.html">Помощь главная</a>
                    </li>
                    <li>
                        <a href="lk.html">Личный кабинет</a>
                    </li>
                    <li>
                        <a href="profile.html">ЛК Личные данные</a>
                    </li>
                    <li>
                        <a href="orderlist.html">ЛК Мои заказы</a>
                    </li>
                    <li>
                        <a href="orderdetails.html">ЛК Заказ подробности</a>
                    </li>
                    <li>
                        <a href="waitlist.html">ЛК Лист Ожидания</a>
                    </li>
                    <li>
                        <a href="fblist.html">ЛК Мои отзывы</a>
                    </li>
                    <li>
                        <a href="404.html">404</a>
                    </li>
                    <li>
                        <a href="email.html">email</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2>Модалки</h2>
                <ul>
                    <li>
                        <a href="#!" data-modal-open="subscribe">подписка</a>
                    </li>
                    <li>
                        <a href="#!" data-modal-open="modal-recover">восстановление пароля</a>
                    </li>
                    <li>
                        <a href="#!" data-modal-open="modal-login">вход</a>
                    </li>
                    <li>
                        <a href="#!" data-modal-open="modal-register">регистрация</a>
                    </li>
                    <li>
                        <a href="#!" data-modal-open="modal-call">заказать звонок</a>
                    </li>
                    <li>
                        <a href="#!" data-modal-open="location">Выбор города</a>
                    </li>
                    <li>
                        <a href="#!" data-modal-open="help">Охват политики конфиденциальности</a>
                    </li>
                    <li>
                        <a href="#!" data-modal-open="feedback">Оставить отзыв</a>
                    </li>
                    <li>
                        <a href="#!" data-modal-open="feedback-full">Оставить отзыв подробный</a>
                    </li>
                    <li>
                        <a href="#!" data-modal-open="write-us">Напишите нам</a>
                    </li>
                    <li>
                        <a href="#!" data-modal-open="vacancy">Анкета соискателя</a>
                    </li>
                    <li>
                        <a href="#!" data-modal-open="success-order">Спасибо</a>
                    </li>
                    <li>
                        <a href="#!" data-modal-open="add-address">Добавить адрес</a>
                    </li>
                    <li>
                        <a href="#!" data-modal-open="cancel-order">Отменить заказ</a>
                    </li>
                    <li>
                        <a href="#!" data-modal-open="modal-test">Поведение полей ввода Safari Mobile</a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: "Page-Content"
}
</script>

<style scoped>

</style>
