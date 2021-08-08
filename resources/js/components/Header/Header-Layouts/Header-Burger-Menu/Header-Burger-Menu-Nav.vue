<template>
    <nav class="header__nav">
        <ul id="main-menu" class="header__nav-list">
            <li class="header__nav-item">
                <a class="header__nav-link" href="#!">Каталог</a>
            </li>
            <li class="header__nav-item">
                <a class="header__nav-link" href="#!">Акции</a>
            </li>
            <li class="header__nav-item">
                <a class="header__nav-link" href="#!">Доставка и Оплата</a>
            </li>
            <li class="header__nav-item">
                <a class="header__nav-link" href="#!">О магазине</a>
            </li>
            <li class="header__nav-item">
                <a class="header__nav-link" href="#!">Кредит и Рассрочка</a>
            </li>
            <li class="header__nav-item">
                <a class="header__nav-link" href="#!">Поддержка</a>
            </li>
            <li class="header__nav-item header__nav-more">
                <button class="header__nav-link header__more-link arrow arrow--down">Еще</button>
                <div class="header__additional-menu">
                    <ul>
                        <li><a class="link" href="#!">элемент меню 1</a></li>
                        <li><a class="link" href="#!">элемент меню 2</a></li>
                        <li><a class="link" href="#!">элемент меню 3</a></li>
                        <li><a class="link" href="#!">элемент меню 4</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: "Header-Burger-Menu-Nav"
}
</script>

<style scoped>

</style>
