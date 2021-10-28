<template>
    <div class="lk__left">
        <div class="lk__left-inner">
            <div class="lk__name">
                <p>{{ user.name }}</p>
                <div>Бонусный счет: <span>12.256</span></div>
            </div>
            <div class="lk__nav">
                <a class="lk__nav-link link arrow arrow--right" :href="'/'+user.name+'/lk'">Профиль</a>
                <a class="lk__nav-link link arrow arrow--right" :href="'/'+user.name+'/profile'">Личные данные</a>
                <a class="lk__nav-link link arrow arrow--right" :href="'/'+user.name+'/orderlist'">Мои заказы</a>
                <a class="lk__nav-link link arrow arrow--right" href="/favorite">Избранное</a>
                <a class="lk__nav-link link arrow arrow--right" :href="'/'+user.name+'/waitlist'">Лист ожидания</a>
                <a class="lk__nav-link link arrow arrow--right" :href="'/'+user.name+'/fblist'">Мои отзывы</a>
                <a class="lk__nav-link link arrow arrow--right" href="/help">Помощь</a>
                <a class="lk__logout" @click.prevent="logout" href="/logout">Выход</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "LKNavLink",
    props: {
        user:{
            type:Object,
            default: null
        }
    },
    methods: {
        async logout() {
            await axios.post('/logout').then(response => {
                if (response.status === 302 || 401) {
                    location.reload()
                } else {}}).catch(error => {});
        }
    }
}
</script>

<style scoped>

</style>
