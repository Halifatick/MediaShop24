<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main></header-main>
            <main>
                <div class="bread-crumbs bread-crumbs--error">
                    <a href="index">Главная</a>
                    <a href="404" aria-current="location">Страница не найдена</a>
                </div>
                <div class="error">
                    <div class="error__inner">
                        <img src="img/404.svg" width="685" height="285" alt="Страница не найдена">
                        <h1>Страница не найдена</h1>
                        <p>Наверное, вы ошиблись при наборе адреса или перешли по неверной ссылке. Используйте промокод выше, чтобы
                            получить скидку на вашу покупку</p>
                        <a class="btn btn-purple" href="index">Перейти на главную</a>
                    </div>
                </div>
            </main>
        </div>
        <footer-main></footer-main>
        <template id="template">
            <modal-layout></modal-layout>
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>
</template>

<script>
export default {
    name: "NotFoundPage"
}
</script>

<style scoped>

</style>
