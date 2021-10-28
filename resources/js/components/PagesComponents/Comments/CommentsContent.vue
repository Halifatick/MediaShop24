<template>
    <fragment>
        <div class="card-main__feedback-top">
            <h5>Достоинства:</h5>
            <ul class="unmarked-list">
                <li>Хорошая автономная работа</li>
                <li>Хорошая камера</li>
                <li>Производительность</li>
                <li>Интересные цвета корпуса</li>
            </ul>
            <h5>Недостатки</h5>
            <ul class="unmarked-list">
                <li>Размер</li>
                <li>Крепкое заднее стекло</li>
            </ul>
            <h5>Комментарий</h5>
            <p>После 8ки пересел на 11, решил что 6"1 не станет проблемой - но ошибся, не смотря
                на мои
                достаточно большие
                руки, пользоваться одной рукой из-за некоторых нюансов интерфейса</p>
        </div>
        <div class="card-main__feedback-gallery slider-container">
            <div class="card-main__feedback-slider swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/content/fb1.jpg" alt="задняя крышка телефона" loading="lazy"
                         decoding="async">
                </div>
                <div class="swiper-slide">
                    <img src="img/content/fb2.jpg" alt="боковая сторона телефона" loading="lazy"
                         decoding="async">
                </div>
                <div class="swiper-slide">
                    <img src="img/content/fb3.jpg" alt="боковая сторона телефона" loading="lazy"
                         decoding="async">
                </div>
                <div class="swiper-slide">
                    <img src="img/content/fb4.jpg" alt="боковая сторона телефона" loading="lazy"
                         decoding="async">
                </div>
            </div>
        </div>
        <div class="card-main__feedback-bottom">
            <b class="card-main__person">Администратор MediaShop 24</b>
            <time datetime="2020-09-11">11 сентября 2020</time>
            <p>Спасибо за ваш комментарий. Вы абсолютно правы.</p>
        </div>
    </fragment>
</template>

<script>
export default {
    name: "CommentsContent"
}
</script>

<style scoped>

</style>
