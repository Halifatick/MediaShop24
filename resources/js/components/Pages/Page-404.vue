<template>
    <main>
        <div class="bread-crumbs bread-crumbs--error">
            <a href="index.html">Главная</a>
            <a href="404" aria-current="location">Страница не найдена</a>
        </div>
        <div class="error">
            <div class="error__inner">
                <img src="img/404.svg" width="685" height="285" alt="Страница не найдена">
                <h1>Страница не найдена</h1>
                <p>Наверное, вы ошиблись при наборе адреса или перешли по неверной ссылке. Используйте промокод выше, чтобы
                    получить скидку на вашу покупку</p>
                <a class="btn btn-purple" href="index.html">Перейти на главную</a>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: "NotFoundPage"
}
</script>

<style scoped>

</style>
