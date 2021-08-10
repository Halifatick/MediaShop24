<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs ">
                    <a href="index">Главная</a>
                    <a href="#" aria-current="location">Каталог</a>
                </div>
                <section class="aside catalog-main">
                    <h1 class="wrapper">Каталог товаров</h1>
                    <ul class="aside__list catalog-main__category-list">
                        <li class=" submenu-item">
                            <h2 class="aside__link catalog-main__category-title">
                                <a href="catalog" aria-label="Телевизоры">
                                    <svg width="24" height="24">
                                        <use href="#icon-tv"></use>
                                    </svg>
                                    <span>Телевизоры</span><sup class="title-counter">27</sup>
                                </a>
                            </h2>
                            <div class="submenu-block parent">
                                <div class="menu-head">
                                    <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                    <h3 class="menu-title">Телевизоры</h3>
                                </div>
                                <ul class="aside__list catalog-main__subcategory-list">
                                    <li class="submenu-item catalog-main__subcategory-item">
                                        <a class="aside__link" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-brand"></use>
                                            </svg>
                                            По бренду
                                        </a>
                                        <div class="submenu-block parent">
                                            <div class="menu-head">
                                                <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                                <h3 class="menu-title">По бренду</h3>
                                            </div>
                                            <ul class="aside__list">
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Телевизоры Sony</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Телевизоры Samsung</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Телевизоры LG</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Телевизоры Philips</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Телевизоры ProCaster</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Телевизоры Panasonic</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="submenu-item catalog-main__subcategory-item">
                                        <a class="aside__link" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-size"></use>
                                            </svg>
                                            По диагонали
                                        </a>
                                        <div class="submenu-block parent">
                                            <div class="menu-head">
                                                <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                                <h3 class="menu-title">По диагонали</h3>
                                            </div>
                                            <ul class="aside__list">
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Телевизоры до 20&quot;</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Телевизоры 20&quot;- 30&quot;</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Телевизоры 20&quot;- 30&quot;</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Телевизоры 40&quot;- 50&quot;</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Телевизоры 50&quot;- 60&quot;</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Телевизоры более 60&quot; </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="submenu-item catalog-main__subcategory-item">
                                        <a class="aside__link" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-tv-small"></use>
                                            </svg>
                                            По типу экрана
                                        </a>
                                        <div class="submenu-block parent">
                                            <div class="menu-head">
                                                <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                                <h3 class="menu-title">По типу экрана</h3>
                                            </div>
                                            <ul class="aside__list">
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">ЖК(LED)</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">ЖК(LCD)</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">OLED</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">QLED</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Nano Cell</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="submenu-item catalog-main__subcategory-item">
                                        <a class="aside__link" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-hometv"></use>
                                            </svg>
                                            По назначению
                                        </a>
                                        <div class="submenu-block parent">
                                            <div class="menu-head">
                                                <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                                <h3 class="menu-title">По назначению</h3>
                                            </div>
                                            <ul class="aside__list">
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Для бизнеса</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Для киноманов</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Для гостиной</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Для кухни</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Для спальни</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Для дачи</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="submenu-item catalog-main__subcategory-item catalog-main__all-category">
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-tv"></use>
                                            </svg>
                                            Все телевизоры
                                        </a>
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-tv"></use>
                                            </svg>
                                            Новинки
                                        </a>
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-tv"></use>
                                            </svg>
                                            Лидеры продаж
                                        </a>
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-tv"></use>
                                            </svg>
                                            Распродажа
                                        </a>
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-tv"></use>
                                            </svg>
                                            Уценка
                                        </a>
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-tv"></use>
                                            </svg>
                                            Видеообзоры
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=" submenu-item">
                            <h2 class="aside__link catalog-main__category-title">
                                <a href="catalog" aria-label="Apple">
                                    <svg width="24" height="24">
                                        <use href="#icon-apple"></use>
                                    </svg>
                                    <span>Apple</span><sup class="title-counter">27</sup>
                                </a>
                            </h2>
                            <div class="submenu-block parent">
                                <div class="menu-head">
                                    <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                    <h3 class="menu-title">Apple</h3>
                                </div>
                                <ul class="aside__list catalog-main__subcategory-list">
                                    <li class="submenu-item catalog-main__subcategory-item">
                                        <a class="aside__link" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-ipad"></use>
                                            </svg>
                                            iPad
                                        </a>
                                        <div class="submenu-block parent">
                                            <div class="menu-head">
                                                <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                                <h3 class="menu-title">iPad</h3>
                                            </div>
                                            <ul class="aside__list">
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">iPad Air (2019)</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">iPad mini (2019)</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Apple iPad (2019)</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">iPad Pro 11 (2018)</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">iPad Pro 11 (2020)</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="submenu-item catalog-main__subcategory-item">
                                        <a class="aside__link" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-iphone"></use>
                                            </svg>
                                            iPhone
                                        </a>
                                        <div class="submenu-block parent">
                                            <div class="menu-head">
                                                <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                                <h3 class="menu-title">iPhone</h3>
                                            </div>
                                            <ul class="aside__list">
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">iPhone Pro Max</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">iPhone 11 Pro</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">iPhone 11</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">iPhone XS Max</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">iPhone XS</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">iPhone XR</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">iPhone 8 Plus</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">iPhone 8</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">iPhone 7 Plus </a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">iPhone 7</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">iPhone SE </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="submenu-item catalog-main__subcategory-item catalog-main__all-category">
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-apple"></use>
                                            </svg>
                                            Все категории
                                        </a>
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-apple"></use>
                                            </svg>
                                            iPad
                                        </a>
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-apple"></use>
                                            </svg>
                                            iPhone
                                        </a>
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-apple"></use>
                                            </svg>
                                            Apple AirPods
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=" submenu-item">
                            <h2 class="aside__link catalog-main__category-title">
                                <a href="catalog" aria-label="Техника для кухни">
                                    <svg width="24" height="24">
                                        <use href="#icon-fridge"></use>
                                    </svg>
                                    <span>Техника для кухни</span><sup class="title-counter">27</sup>
                                </a>
                            </h2>
                            <div class="submenu-block parent">
                                <div class="menu-head">
                                    <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                    <h3 class="menu-title">Техника для кухни</h3>
                                </div>
                                <ul class="aside__list catalog-main__subcategory-list">
                                    <li class="submenu-item catalog-main__subcategory-item">
                                        <a class="aside__link" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-brand"></use>
                                            </svg>
                                            OBH Nordica
                                        </a>
                                        <div class="submenu-block parent">
                                            <div class="menu-head">
                                                <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                                <h3 class="menu-title">OBH Nordica</h3>
                                            </div>
                                            <ul class="aside__list">
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Электрический гриль</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Противень для гриля</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="submenu-item catalog-main__subcategory-item">
                                        <a class="aside__link" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-mixer"></use>
                                            </svg>
                                            Миксеры и кухонные комбайны
                                        </a>
                                        <div class="submenu-block parent">
                                            <div class="menu-head">
                                                <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                                <h3 class="menu-title">Миксеры и кухонные комбайны</h3>
                                            </div>
                                            <ul class="aside__list">
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Стационарные миксеры</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Ручные миксеры</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Планетарные миксеры</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Кухонные комбайны</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="submenu-item catalog-main__subcategory-item">
                                        <a class="aside__link" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-coffeem"></use>
                                            </svg>
                                            Кофеварки и кофемашины
                                        </a>
                                        <div class="submenu-block parent">
                                            <div class="menu-head">
                                                <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                                <h3 class="menu-title">Кофеварки и кофемашины</h3>
                                            </div>
                                            <ul class="aside__list">
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Кофемашины</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Капельные кофеварки</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="submenu-item catalog-main__subcategory-item">
                                        <a class="aside__link" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-blender"></use>
                                            </svg>
                                            Блендеры
                                        </a>
                                        <div class="submenu-block parent">
                                            <div class="menu-head">
                                                <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                                <h3 class="menu-title">Блендеры</h3>
                                            </div>
                                            <ul class="aside__list">
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Погружные блендеры</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Стационарные блендеры</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="submenu-item catalog-main__subcategory-item">
                                        <a class="aside__link" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-teapot"></use>
                                            </svg>
                                            Чайники и тостеры
                                        </a>
                                        <div class="submenu-block parent">
                                            <div class="menu-head">
                                                <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                                <h3 class="menu-title">Чайники и тостеры</h3>
                                            </div>
                                            <ul class="aside__list">
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Чайники</a>
                                                </li>
                                                <li class="submenu-item">
                                                    <a class="aside__link no-arrow" href="catalog">Противень для гриля</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="submenu-item catalog-main__subcategory-item catalog-main__all-category">
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-fridge"></use>
                                            </svg>
                                            Все категории
                                        </a>
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-fridge"></use>
                                            </svg>
                                            OBH Nordica
                                        </a>
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-fridge"></use>
                                            </svg>
                                            Миксеры и кухонные комбайны
                                        </a>
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-fridge"></use>
                                            </svg>
                                            Кофеварки и кофемашины
                                        </a>
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-fridge"></use>
                                            </svg>
                                            Блендеры
                                        </a>
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-fridge"></use>
                                            </svg>
                                            Чайники и тостеры
                                        </a>
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-fridge"></use>
                                            </svg>
                                            Посуда
                                        </a>
                                        <a class="aside__link no-arrow" href="catalog">
                                            <svg width="48" height="48">
                                                <use href="#icon-fridge"></use>
                                            </svg>
                                            Прочее
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </section>
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
    name: "Page-CatalogMain",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
