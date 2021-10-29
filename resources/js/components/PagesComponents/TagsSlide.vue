<template>
    <fragment>
        <input class="visually-hidden" type="checkbox" :name="tagsArticle.title">
        <span>{{ tagsArticle.title }}</span>
    </fragment>
</template>

<script>
export default {
    name: "TagsSlide",
    props: {
        tagsArticle: {
            type: Object,
            required: true
        }
    },
}
</script>

<style scoped>

</style>
