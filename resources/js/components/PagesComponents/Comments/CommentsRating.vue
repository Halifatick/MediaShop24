<template>
    <fragment>
        <h4>Рейтинг пользователей</h4>
        <div class="card-main__rating-header">
            <span class="card-main__rating-score">5,0</span>
            <div class="card-main__rating-star">
                <div class="star-rating star-rating--5"></div>
                <span class="card-main__feedback-count">243 отзыва</span>
            </div>
        </div>
        <div class="card-main__statistic">
            <div>
                5
                <meter value="0.4"></meter>
                <span>1234</span>
            </div>
            <div>
                4
                <meter value="0.8"></meter>
                <span>4567</span>
            </div>
            <div>
                3
                <meter value="0.3"></meter>
                <span>5692</span>
            </div>
            <div>
                2
                <meter value="0.6"></meter>
                <span>10997</span>
            </div>
            <div>
                1
                <meter value="0.1"></meter>
                <span>2222</span>
            </div>
        </div>
        <div class="card-main__rating-footer">
            <p>Для расчёта рейтинга используются общие оценки товара и оценки по характеристикам за
                всё время.
                Оставьте свой отзыв о товаре:</p>
            <button class="card-main__btn-feedback btn btn-purple" type="button"
                    data-modal-open="feedback-full">Оставить отзыв
            </button>
        </div>
    </fragment>
</template>

<script>
export default {
    name: "CommentsRating"
}
</script>

<style scoped>

</style>
