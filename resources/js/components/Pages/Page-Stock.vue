<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs ">
                    <a href="/">Главная</a>
                    <a href="#!" aria-current="location">Акции</a>
                </div>
                <div class="news">
                    <h1 class="subtitle">Акции<sup class="title-counter">12</sup></h1>
                    <div class="news__category slider-container">
                        <div class="news__category-slider slider-container">
                            <div class="news__slider-wrapper swiper-wrapper">
                                <label class="news__category-item swiper-slide" v-for="tagsArticle in stockTags">
                                    <tags-slide :tagsArticle="tagsArticle"></tags-slide>
                                </label>
                            </div>
                        </div>
                        <div class="sort-view">
                            <button class="btn-view" type="button" data-value="view-column">
                                <svg width="26" height="22">
                                    <use href="#icon-view-column"></use>
                                </svg>
                            </button>
                            <button class="btn-view active" type="button" data-value="view-row">
                                <svg width="26" height="22">
                                    <use href="#icon-view-row"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="news__body">
                        <div class="news__sorting">
                            <fieldset class="sort-fieldset">
                                <legend>Сортировка</legend>
                                <label class="sort-fieldset-radio">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>Сначала новые</span>
                                </label>
                                <label class="sort-fieldset-radio">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>С высоким рейтингом</span>
                                </label>
                                <label class="sort-fieldset-radio">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>По цене</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="news__content">
                            <div class="news__articles view-row">
                                <article class="article-el" v-for="cardArticle in stockArticles">
                                    <card-article :cardArticle="cardArticle"></card-article>
                                </article>
                            </div>
                            <div class="news__pagination">
                                <button class="btn btn-purple news__more">Показать еще</button>
                                <div class="pagination">
                                    <a href="#!" aria-current="location">1</a>
                                    <a href="#!">2</a>
                                    <a href="#!">3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <footer-main></footer-main>
        <template id="template">
            <!-- На всех страницах -->
            <modal-login></modal-login>
            <modal-fast-order></modal-fast-order>
            <modal-register></modal-register>
            <modal-recover></modal-recover>
            <modal-recover-next></modal-recover-next>
            <modal-call></modal-call>
            <modal-location></modal-location>
            <modal-search-header></modal-search-header>
            <modal-success-order></modal-success-order>
            <modal-fail></modal-fail>
            <modal-error></modal-error>
            <modal-subscribe></modal-subscribe>
            <modal-help></modal-help>
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>
</template>

<script>
export default {
    name: "Page-Stock",
    props: {
        auth_user: {
            default: null
        }
    },
    data() {
        return {
            stockTags: [
                {title: 'Все'},
                {title: 'Рассрочка'},
                {title: 'Trade-in'},
                {title: 'Распродажа'},
                {title: 'Кредит'},
                {title: 'Промокоды'},
                {title: 'Другое'}
            ],
            stockArticles: [
                {
                    title: '1 Iphone 5, почему такой же как и Pro Max, может быть в 3 строки и вот таким большим',
                    description: '5 Видео разбор с ответами на самые часто задаваемые вопросы может быть большим в 3 строки, видео разбор с ответами на самые часто задаваемые',
                    image: 'img/content/news/news.jpg',
                    image1: 'img/content/news/news@2x.jpg',
                    image2: 'img/content/news/news.webp',
                    image3: 'img/content/news/news@2x.webp',
                    dateOfPublication: '2021-08-11 21:46:37'
                },

                {
                    title: '2 Iphone 6, почему такой же как и Pro Max, может быть в 3 строки и вот таким большим',
                    description: '6 Видео разбор с ответами на самые часто задаваемые вопросы может быть большим в 3 строки, видео разбор с ответами на самые часто задаваемые',
                    image: 'img/content/news/news.jpg',
                    image1: 'img/content/news/news@2x.jpg',
                    image2: 'img/content/news/news.webp',
                    image3: 'img/content/news/news@2x.webp',
                    dateOfPublication: '2021-08-11 21:46:37'
                },
                {
                    title: '3 Iphone 7, почему такой же как и Pro Max, может быть в 3 строки и вот таким большим',
                    description: '7 Видео разбор с ответами на самые часто задаваемые вопросы может быть большим в 3 строки, видео разбор с ответами на самые часто задаваемые',
                    image: 'img/content/news/news.jpg',
                    image1: 'img/content/news/news@2x.jpg',
                    image2: 'img/content/news/news.webp',
                    image3: 'img/content/news/news@2x.webp',
                    dateOfPublication: '2021-08-11 21:46:37'
                },

                {
                    title: '4 Iphone 8, почему такой же как и Pro Max, может быть в 3 строки и вот таким большим',
                    description: '8 Видео разбор с ответами на самые часто задаваемые вопросы может быть большим в 3 строки, видео разбор с ответами на самые часто задаваемые',
                    image: 'img/content/news/news.jpg',
                    image1: 'img/content/news/news@2x.jpg',
                    image2: 'img/content/news/news.webp',
                    image3: 'img/content/news/news@2x.webp',
                    dateOfPublication: '2021-08-11 21:46:37'
                },

                {
                    title: '5 Iphone 9, почему такой же как и Pro Max, может быть в 3 строки и вот таким большим',
                    description: '9 Видео разбор с ответами на самые часто задаваемые вопросы может быть большим в 3 строки, видео разбор с ответами на самые часто задаваемые',
                    image: 'img/content/news/news.jpg',
                    image1: 'img/content/news/news@2x.jpg',
                    image2: 'img/content/news/news.webp',
                    image3: 'img/content/news/news@2x.webp',
                    dateOfPublication: '2021-08-11 21:46:37'
                }
            ]
        }
    }
}
</script>

<style scoped>

</style>
