<template>
    <fragment>
        <a href="#" class="article-el__img">
            <picture>
                <source type="image/webp"
                        :srcset="cardArticle.image2 + ' ' + '345w' + ',' +  cardArticle.image3 + ' ' + '700w'"
                        sizes="(max-width: 768px) 100vw, 345px">
                <img :src="cardArticle.image" :srcset="cardArticle.image1 + ' ' + '700w'"
                     sizes="(max-width: 769px) 100vw, 345px" alt="новость" decoding="async" loading="lazy">
            </picture>
        </a>
        <div class="article-el__body">
            <h3><a class="text-limiter" href="#">{{ cardArticle.title }}</a></h3>
            <time :datetime="cardArticle.dateOfPublication">{{ cardArticle.dateOfPublication | myDate}}</time>
            <p class="text-limiter"> {{cardArticle.description}}</p>
            <a href="#" class="link">Читать далее</a>
        </div>
    </fragment>
</template>

<script>
export default {
    name: "NewsArticle",
    props: {
        cardArticle: {
            type: Object,
            required: true
        }
    }
}
</script>

<style scoped>

</style>
