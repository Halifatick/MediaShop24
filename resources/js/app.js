/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import Fragment from 'vue-fragment'

Vue.use(Fragment.Plugin)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//--------------------------------------------------------------------------------
// SVG Icons
Vue.component('svg-icons', require('./components/SVG-Icons/SVG-Icons').default);
// SVG Icons для Email
Vue.component('svg-icons-email', require('./components/SVG-Icons/SVG-Icons-Email').default);
//--------------------------------------------------------------------------------
// Aside для всех страниц
Vue.component('aside-main', require('./components/Aside/Aside').default);
// Aside для главной странице
Vue.component('aside-index', require('./components/Aside/Aside-Index').default);
//--------------------------------------------------------------------------------
// Header Main
Vue.component('header-main', require('./components/Header/Header').default);
// Header Index (для главной)
Vue.component('header-index', require('./components/Header/Header-Index').default);
// Header для Email
Vue.component('header-email', require('./components/Header/Header-Email').default);
//--------------------------------------------------------------------------------
// Main footer
Vue.component('footer-main', require('./components/Footer/Footer').default);
// Footer card
Vue.component('footer-card', require('./components/Footer/Footer-Card').default);
// Footer v2 (вся информация носит справочный характер и т.д.)
Vue.component('footer-info', require('./components/Footer/Footer-Info').default);
// Footer для Email
Vue.component('footer-email', require('./components/Footer/Footer-Email').default);
//---------------------------------------------------------------------------------
// Cookies для всех страниц
Vue.component('cookies', require('./components/Cookies/Cookies').default);
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//Страницы
Vue.component('page-not-found', require('./components/Pages/NotFoundPage').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
