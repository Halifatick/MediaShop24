<template>
    <header class="header">
        <div class="header__inner">
            <button class="header__toggle" type="button" aria-label="открыть меню" aria-controls="burger-menu"
                    aria-expanded="false" data-modal-open="burger-menu">
                <span class="header__menu-icon"></span>
            </button>
            <a class="logo logo--small" href="index" aria-label="логотип">
                <svg width="60" height="24">
                    <use href="#icon-logo"></use>
                </svg>
            </a>
            <div id="burger-menu" class="header__burger-menu parent">
                <div class="menu-head">
                    <strong class="menu-title">Меню</strong>
                </div>
                <div class="aside-wrap">
                    <div class="aside">
                        <ul class="aside__list">
                            <li class="aside__item submenu-item">
                                <a class="aside__link" href="#!" aria-label="Телевизоры">
                                    <svg width="24" height="24">
                                        <use href="#icon-tv"></use>
                                    </svg>
                                    <span>Телевизоры</span>
                                </a>
                                <div class="submenu-block parent">
                                    <div class="menu-head">
                                        <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                        <strong class="menu-title">Телевизоры</strong>
                                    </div>
                                    <ul class="aside__list">
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Все телевизоры
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По бренду
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По бренду</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Sony
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">Sony</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="Sony" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Samsung
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">Samsung</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="Samsung"
                                                                         loading=lazy decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LG
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">LG</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="LG" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Philips
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            ProCaster
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Panasonic
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По диагонали
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По диагонали</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            24
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">24</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="24" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            32
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">32</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="32" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            40-41
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">40-41</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="40-41" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            49-50
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            55
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            60
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            80
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По типу экрана
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По типу экрана</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LED
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">LED</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="LED" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            OLED
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">OLED</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="OLED" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            IPS
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">IPS</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="IPS" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            VA
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LCD
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            TN
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            TN+FILM
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            DLED
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                По назначению
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Новинки
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Лидеры продаж
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Распродажа
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Уценка
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Видеообзор
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="aside__item submenu-item">
                                <a class="aside__link" href="#!" aria-label="Проекторы">
                                    <svg width="24" height="24">
                                        <use href="#icon-projector"></use>
                                    </svg>
                                    <span>Проекторы</span>
                                </a>
                                <div class="submenu-block parent">
                                    <div class="menu-head">
                                        <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                        <strong class="menu-title">Проекторы</strong>
                                    </div>
                                    <ul class="aside__list">
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Все проекторы
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По бренду
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По бренду</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Sony
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">Sony</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="Sony" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Samsung
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">Samsung</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="Samsung"
                                                                         loading=lazy decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LG
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">LG</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="LG" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Philips
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            ProCaster
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Panasonic
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По диагонали
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По диагонали</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            24
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">24</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="24" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            32
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">32</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="32" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            40-41
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">40-41</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="40-41" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            49-50
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            55
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            60
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            80
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По типу экрана
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По типу экрана</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LED
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">LED</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="LED" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            OLED
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">OLED</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="OLED" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            IPS
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">IPS</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="IPS" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            VA
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LCD
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            TN
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            TN+FILM
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            DLED
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Новинки
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Распродажа
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Уценка
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Видеообзор
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="aside__item submenu-item">
                                <a class="aside__link" href="#!" aria-label="Умные часы и Браслеты">
                                    <svg width="24" height="24">
                                        <use href="#icon-watch"></use>
                                    </svg>
                                    <span>Умные часы и Браслеты</span>
                                </a>
                                <div class="submenu-block parent">
                                    <div class="menu-head">
                                        <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                        <strong class="menu-title">Умные часы и Браслеты</strong>
                                    </div>
                                    <ul class="aside__list">
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Все часы
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По бренду
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По бренду</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Sony
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">Sony</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="Sony" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Samsung
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">Samsung</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="Samsung"
                                                                         loading=lazy decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LG
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">LG</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="LG" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Philips
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            ProCaster
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Panasonic
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По диагонали
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По диагонали</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            24
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">24</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="24" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            32
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">32</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="32" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            40-41
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">40-41</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="40-41" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            49-50
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            55
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            60
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            80
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По типу экрана
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По типу экрана</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LED
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">LED</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="LED" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            OLED
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">OLED</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="OLED" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            IPS
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">IPS</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="IPS" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            VA
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LCD
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            TN
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            TN+FILM
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            DLED
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Новинки
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Распродажа
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Уценка
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Видеообзор
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="aside__item submenu-item">
                                <a class="aside__link" href="#!" aria-label="Акустические системы">
                                    <svg width="24" height="24">
                                        <use href="#icon-sound"></use>
                                    </svg>
                                    <span>Акустические системы</span>
                                </a>
                                <div class="submenu-block parent">
                                    <div class="menu-head">
                                        <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                        <strong class="menu-title">Акустические системы</strong>
                                    </div>
                                    <ul class="aside__list">
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Все Акустические системы
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По бренду
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По бренду</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Sony
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">Sony</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="Sony" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Samsung
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">Samsung</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="Samsung"
                                                                         loading=lazy decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LG
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">LG</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="LG" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Philips
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            ProCaster
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Panasonic
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По диагонали
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По диагонали</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            24
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">24</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="24" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            32
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">32</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="32" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            40-41
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">40-41</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="40-41" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            49-50
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            55
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            60
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            80
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По типу экрана
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По типу экрана</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LED
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">LED</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="LED" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            OLED
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">OLED</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="OLED" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            IPS
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">IPS</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="IPS" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            VA
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LCD
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            TN
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            TN+FILM
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            DLED
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Новинки
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Распродажа
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Уценка
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Видеообзор
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="aside__item submenu-item">
                                <a class="aside__link" href="#!" aria-label="Наушники и Гарнитура">
                                    <svg width="24" height="24">
                                        <use href="#icon-headphones"></use>
                                    </svg>
                                    <span>Наушники и Гарнитура</span>
                                </a>
                                <div class="submenu-block parent">
                                    <div class="menu-head">
                                        <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                        <strong class="menu-title">Наушники и Гарнитура</strong>
                                    </div>
                                    <ul class="aside__list">
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Все Наушники и Гарнитура
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По бренду
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По бренду</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Sony
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">Sony</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="Sony" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Samsung
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">Samsung</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="Samsung"
                                                                         loading=lazy decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LG
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">LG</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="LG" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Philips
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            ProCaster
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Panasonic
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По диагонали
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По диагонали</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            24
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">24</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="24" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            32
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">32</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="32" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            40-41
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">40-41</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="40-41" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            49-50
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            55
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            60
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            80
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По типу экрана
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По типу экрана</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LED
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">LED</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="LED" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            OLED
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">OLED</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="OLED" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            IPS
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">IPS</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="IPS" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            VA
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LCD
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            TN
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            TN+FILM
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            DLED
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Новинки
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Распродажа
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Уценка
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Видеообзор
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="aside__item submenu-item">
                                <a class="aside__link" href="#!" aria-label="Комплектующие и ПК">
                                    <svg width="24" height="24">
                                        <use href="#icon-pc"></use>
                                    </svg>
                                    <span>Комплектующие и ПК</span>
                                </a>
                                <div class="submenu-block parent">
                                    <div class="menu-head">
                                        <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                        <strong class="menu-title">Комплектующие и ПК</strong>
                                    </div>
                                    <ul class="aside__list">
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Все Комплектующие и ПК
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По бренду
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По бренду</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Sony
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">Sony</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="Sony" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Samsung
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">Samsung</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="Samsung"
                                                                         loading=lazy decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LG
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">LG</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="LG" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Philips
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            ProCaster
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Panasonic
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По диагонали
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По диагонали</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            24
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">24</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="24" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            32
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">32</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="32" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            40-41
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">40-41</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="40-41" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            49-50
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            55
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            60
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            80
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По типу экрана
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По типу экрана</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LED
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">LED</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="LED" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            OLED
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">OLED</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="OLED" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            IPS
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">IPS</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="IPS" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            VA
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LCD
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            TN
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            TN+FILM
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            DLED
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Новинки
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Распродажа
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Уценка
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Видеообзор
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="aside__item submenu-item">
                                <a class="aside__link" href="#!" aria-label="Игровые приставки и аксессуары">
                                    <svg width="24" height="24">
                                        <use href="#icon-x-box"></use>
                                    </svg>
                                    <span>Игровые приставки и аксессуары</span>
                                </a>
                                <div class="submenu-block parent">
                                    <div class="menu-head">
                                        <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                        <strong class="menu-title">Игровые приставки и аксессуары</strong>
                                    </div>
                                    <ul class="aside__list">
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Все Игровые приставки и аксессуары
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По бренду
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По бренду</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Sony
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">Sony</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="Sony" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Samsung
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">Samsung</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="Samsung"
                                                                         loading=lazy decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LG
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">LG</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="LG" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Philips
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            ProCaster
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Panasonic
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По диагонали
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По диагонали</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            24
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">24</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="24" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            32
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">32</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="32" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            40-41
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">40-41</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="40-41" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            49-50
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            55
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            60
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            80
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По типу экрана
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По типу экрана</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LED
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">LED</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="LED" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            OLED
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">OLED</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="OLED" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            IPS
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">IPS</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="IPS" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            VA
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LCD
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            TN
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            TN+FILM
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            DLED
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Новинки
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Распродажа
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Уценка
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Видеообзор
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="aside__item submenu-item">
                                <a class="aside__link" href="#!" aria-label="Apple">
                                    <svg width="24" height="24">
                                        <use href="#icon-apple"></use>
                                    </svg>
                                    <span>Apple</span>
                                </a>
                                <div class="submenu-block parent">
                                    <div class="menu-head">
                                        <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                        <strong class="menu-title">Apple</strong>
                                    </div>
                                    <ul class="aside__list">
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Все Apple
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По бренду
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По бренду</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Sony
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">Sony</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="Sony" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Samsung
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">Samsung</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="Samsung"
                                                                         loading=lazy decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LG
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">LG</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="LG" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Philips
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            ProCaster
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            Panasonic
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По диагонали
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По диагонали</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            24
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">24</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="24" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            32
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">32</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="32" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            40-41
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">40-41</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="40-41" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            49-50
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            55
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            60
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            80
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link " href="#!">
                                                По типу экрана
                                            </a>
                                            <div class="submenu-block parent">
                                                <div class="menu-head">
                                                    <button class="submenu-close" type="button"
                                                            aria-label="закрыть"></button>
                                                    <strong class="menu-title">По типу экрана</strong>
                                                </div>
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LED
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">LED</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="LED" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            OLED
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">OLED</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="OLED" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            IPS
                                                        </a>
                                                        <div class="submenu-block parent">
                                                            <div class="menu-head">
                                                                <button class="submenu-close" type="button"
                                                                        aria-label="закрыть"></button>
                                                                <strong class="menu-title">IPS</strong>
                                                            </div>
                                                            <a class="aside__img" href="#!">
                                                                <picture>
                                                                    <!-- 1x-1px/1px 2x-2px/2px -->
                                                                    <source type="image/webp"
                                                                            srcset="img/content/phone.webp 1x, img/content/phone@2x.webp 2x">
                                                                    <img class=content-img src="img/content/phone.jpg"
                                                                         srcset="img/content/phone@2x.jpg 2x" width="1"
                                                                         height="1" alt="IPS" loading=lazy
                                                                         decoding=async>
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            VA
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            LCD
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            TN
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            TN+FILM
                                                        </a>
                                                    </li>
                                                    <li class="aside__item submenu-item">
                                                        <a class="aside__link no-arrow" href="#!">
                                                            DLED
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Новинки
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Распродажа
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Уценка
                                            </a>
                                        </li>
                                        <li class="aside__item submenu-item">
                                            <a class="aside__link no-arrow" href="#!">
                                                Видеообзор
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <a href="catalogmain" class="aside__more">
                            <svg width="24" height="24">
                                <use href="#icon-circles"></use>
                            </svg>
                            <span>Все категории</span>
                        </a>
                    </div>
                </div>
                <a v-if="isIndex" class="logo logo--big" href="index">
                    <svg width="290" height="50">
                        <use href="#icon-logo-big"></use>
                    </svg>
                </a>
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
                <div class="header__interaсtive-wrap">
                    <a class="header__btn header__btn--location arrow arrow--down" data-city="Санкт-Петербург" href="#!"
                       data-modal-open="location">
                        <svg width="24" height="24">
                            <use href="#icon-location"></use>
                        </svg>
                    </a>
                    <div class="header__btn header__btn--sign">
                        <a href="#!" data-modal-open="modal-login">
                            <svg width="24" height="24">
                                <use href="#icon-sign"></use>
                            </svg>
                            <span class="touch">Вход/Регистрация</span>
                            <span class="desktop">Войти</span>
                        </a>
                        <div v-if="user!==null" class="header__additional-menu">
                            <div>
                                <ul>
                                    <li><a class="link" href="#!">Профиль</a></li>
                                    <li><a class="link" href="#!">Личные данные</a></li>
                                    <li><a class="link" href="#!">Мои заказы</a></li>
                                    <li><a class="link" href="#!">Избранное</a></li>
                                    <li><a class="link" href="#!">Лист ожидания</a></li>
                                    <li><a class="link" href="#!">Мои отзывы</a></li>
                                    <li><a class="link" href="#!">Помощь</a></li>
                                </ul>
                                <button class="logout-btn" type="button"
                                        @click.prevent="logout">
                                    <svg width="24" height="24">
                                        <use href="#icon-logout"></use>
                                    </svg>
                                    Выход
                                </button>
                            </div>
                        </div>
                        <div v-if="user===null" class="header__additional-menu">
                            <div>
                                <ul>
                                    <li><a class="link" href="#!" data-modal-open="modal-login">Вход</a></li>
                                    <li><a class="link" href="#!" data-modal-open="modal-register">Регистрация</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a id="header-equal" class="header__btn link-compare-js header__btn--equal" href="compare">
              <span class="counter counter--red" data-count="3">
                <svg width="24" height="24">
                  <use href="#icon-equal"></use>
                </svg>
              </span>
                        Сравнить
                    </a>
                    <a id="header-favorite" class="header__btn link-compare-js header__btn--favorite" href="favorite">
              <span class="counter counter--red" data-count="4">
                <svg width="24" height="24">
                  <use href="#icon-favorite"></use>
                </svg>
              </span>
                        Избранное
                    </a>
                    <a id="header-cart" class="header__btn header__btn--cart" href="cart"
                       aria-label="открыть корзину">
              <span class="counter counter--red">
                <svg width="24" height="24">
                  <use href="#icon-cart"></use>
                </svg>
              </span>
                        Корзина
                    </a>
                </div>
                <div class="header__contact">
                    <p>Контакты</p>
                    <a href="tel:+78003333224">+7 (800) 333 32 24</a>
                    <a href="tel:+78124486811">+7 (812) 448 68 11</a>
                </div>
                <button class="header__menu-close" type="button" aria-label="закрыть"
                        data-modal-close="burger-menu"></button>
            </div>
            <div class="header__right">
                <div class="header__action-btn">
                    <button class="header__btn-mob header__search-form" type="button" data-modal-open="search-header"
                            aria-label="поиск по сайту">
                        <svg width="24" height="24">
                            <use href="#icon-search"></use>
                        </svg>
                    </button>
                    <a class="header__btn-mob header__phone link" href="tel:+78124486811">
                        <span>+7 (812) 448 68 11</span>
                        <svg width="24" height="24">
                            <use href="#icon-phone"></use>
                        </svg>
                    </a>
                    <a class="header__make-call" href="#!" data-modal-open="modal-call">Заказать звонок</a>
                    <button class="header__btn-mob header__cart-btn" type="button">
                        <svg width="24" height="24">
                            <use href="#icon-cart"></use>
                        </svg>
                    </button>
                </div>
                <div class="header__bottom-level">
                    <a class="header__btn header__btn--location arrow arrow--down" href="#!" data-city="Санкт-Петербург"
                       data-modal-open="location">
                        <svg width="24" height="24">
                            <use href="#icon-location"></use>
                        </svg>
                    </a>
                    <a class="header__bottom-decr link" href="#!" target="_blank">Новые обзоры каждую неделю, смотри нас
                        на нашем YouTube канале</a>
                    <a class="youtube-link" href="#!" target="_blank">
                        <svg width="26" height="20">
                            <use href="#icon-youtube"></use>
                        </svg>
                        YouTube
                    </a>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: "Header",
    props:{
        isIndex:{
            type: Boolean,
            default: true
        },
        user:{
            type:Object,
            default: null
        }
    },
    methods: {
        logout: function () {
            axios.post('logout').then(response => {
                if (response.status === 302 || 401) {
                    location.reload()
                } else {
                    // throw error and go to catch block
                }
            }).catch(error => {

            });
        }

    }
}
</script>

<style scoped>

</style>
