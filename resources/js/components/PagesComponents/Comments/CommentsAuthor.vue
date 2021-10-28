<template>
    <fragment>
        <b class="card-main__person">Медведев Анатолий
            <svg width="18" height="18">
                <use href="#icon-like"></use>
            </svg>
        </b>
        <time datetime="2020-09-11">11 сентября 2020</time>
        <div class="card-main__experience">
            Опыт использования:&nbsp;<span> несколько месяцев</span>
        </div>
        <dl class="card-main__feedback-list">
            <dt>Качество</dt>
            <dd class="star-rating star-rating--5"></dd>
            <dt>Сервис</dt>
            <dd class="star-rating star-rating--5"></dd>
            <dt>Доставка</dt>
            <dd class="star-rating star-rating--5"></dd>
        </dl>
    </fragment>
</template>

<script>
export default {
    name: "CommentsAuthor"
}
</script>

<style scoped>

</style>
