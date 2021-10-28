<template>
    <fragment>
        <div class="card-main__rating">
            <comment-rating></comment-rating>
        </div>
        <div class="card-main__feedback">
            <div class="card-main__feedback-author">
                <comment-author></comment-author>
            </div>
            <div class="card-main__feedback-content">
                <comment-content></comment-content>
            </div>
        </div>
    </fragment>
</template>

<script>
export default {
    name: "CommentsMain"
}
</script>

<style scoped>

</style>
