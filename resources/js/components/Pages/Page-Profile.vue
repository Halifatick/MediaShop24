<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs bread-crumbs--lk">
                    <a href="/">Главная</a>
                    <a :href="'/'+auth_user.name+'/lk'">Личный кабинет</a>
                    <a :href="'/'+auth_user.name+'/profile'" aria-current="location">Личные данные</a>
                </div>
                <div class="lk">
                    <h1 class="title title-lk wrapper">Личный кабинет</h1>
                    <div class="lk__container">
                        <lk-left :user="auth_user"></lk-left>
                        <div class="lk__main">
                            <form class="form form--private lk-form" method="post" autocomplete="on">
                                <h2 class="title" data-edit="Редактирование профиля">Персональные данные</h2>
                                <fieldset class="lk-form__inner lk-form__inner--private" disabled>
                                    <legend class="visually-hidden">Персональные данные</legend>
                                    <div class="lk-form__private-block">
                                        <label class="form__field-wrap">
                                            Имя
                                            <input type="text" placeholder="Имя" name="firstname"
                                                   class="input-words"
                                                   @keyup="inputWords"
                                                   data-validate v-model="auth_user.firstname">
                                        </label>
                                        <label class="form__field-wrap">
                                            Фамилия
                                            <input type="text" placeholder="Фамилия" name="lastname"
                                                   class="input-words"
                                                   @keyup="inputWords"
                                                   data-validate v-model="auth_user.lastname">
                                        </label>
                                        <label class="form__field-wrap">
                                            Email
                                            <input type="email" placeholder="example@mail.ru" name="email"
                                                   class="input-email" @keyup="inputEmail"
                                                   data-validate="email" required v-model="auth_user.email">
                                        </label>
                                        <label class="form__field-wrap">
                                            Телефон
                                            <the-mask name="phone" id="phone" v-model="auth_user.phone"
                                                      :mask="['+# (###) ###-##-##', '+## (###) ###-##-##']" type="tel"
                                                      masked="true" placeholder="+7 (###) ###-##-##"></the-mask>
                                        </label>
                                    </div>
                                    <div class="lk-form__private-block">
                                        <div class="lk-form__birthday">
                                            <b class="lk-form__birthday-title">Дата рождения</b>
                                            <div class="lk-form__birthday-inner">
                                                <VueDatePicker v-model="date"
                                                               clearable
                                                               :locale="locale"
                                                               format="DD MMMM YYYY"
                                                               name="Выберите вашу дату рождения"
                                                               placeholder="Выберите ваш день рождения"
                                                               no-header
                                                               no-calendar-icon
                                                               fullscreen-mobile
                                                               ref="menu"
                                                               :color="color"
                                                               :max-date="new Date().toISOString().substr(0, 10)"
                                                               min-date="1900-01-01"
                                                               @onOpen="menu = true"
                                                               @onClose="menu = false"/>
                                            </div>
                                        </div>
                                        <label class="form__select">
                                            Пол
                                            <span class="lk-form__select-wrap mt-15 arrow arrow--down">
                                                <select name="sex" v-model="auth_user.gender">
                                                    <option value="Не задано">Не задано</option>
                                                    <option value="Мужской">Мужской</option>
                                                    <option value="Женский">Женский</option>
                                              </select>
                                            </span>
                                        </label>
                                        <label class="form__select">
                                            Семейное положение
                                            <span class="lk-form__select-wrap mt-15 arrow arrow--down">
                                                <select name="family" v-model="auth_user.status">
                                                    <option value="Не задано">Не задано</option>
                                                    <option value="Женат/Замужем">Женат/Замужем</option>
                                                    <option value="Холост/Не замужем">Холост/Не замужем</option>
                                                    <option value="Разведен(а)">Разведен(а)</option>
                                                    <option value="Вдовец/Вдова">Вдовец/Вдова</option>
                                                    <option value="Раздельное проживание">Раздельное проживание</option>
                                                    <option value="Гражданский брак">Гражданский брак</option>
                                                </select>
                                            </span>
                                        </label>
                                        <label class="form__select">
                                            Занятость
                                            <span class="lk-form__select-wrap mt-15 arrow arrow--down">
                                                <select name="busyness" v-model="auth_user.employment">
                                                    <option value="Не задано">Не задано</option>
                                                    <option value="Работаю">Работаю</option>
                                                    <option
                                                        value="Безработный/Безработная">Безработный/Безработная</option>
                                                    <option value="Учусь">Учусь</option>
                                                    <option value="Пенсионер(ка)">Пенсионер(ка)</option>
                                                    <option
                                                        value="Домохозяин/Домохозяйка">Домохозяин/Домохозяйка</option>
                                                </select>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="lk-form__buttons">
                                        <button class="btn btn-purple lk-form__save" type="button" @click="profileUser">
                                            Сохранить
                                        </button>
                                        <button class="btn btn-white lk-form__cancel" type="reset">Отменить</button>
                                        <button class="lk-form__remove" type="button">
                                            Удалить учетную запись
                                            <svg width="18" height="18">
                                                <use href="#icon-delete"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </fieldset>
                                <button class="btn btn-white lk-btn-change lk-btn-change--private lk-form__change"
                                        type="button">
                                    Изменить данные
                                    <svg width="18" height="18">
                                        <use href="#icon-edit"></use>
                                    </svg>
                                </button>
                            </form>
                            <form class="form lk-form" method="post" autocomplete="on">
                                <h2 class="title" data-edit="Редактирование профиля">Публичные данные</h2>
                                <fieldset class="lk-form__inner lk-form__inner--public" disabled>
                                    <legend class="visually-hidden">Публичные данные</legend>
                                    <label class="form__field-wrap">
                                        Логин
                                        <input type="text" placeholder="Введите ваше имя" name="name"
                                               data-validate v-model="auth_user.name"
                                               class="input-words"
                                               @keyup="inputWords">
                                    </label>
                                    <label class="form__field-wrap">
                                        Город
                                        <input type="text" placeholder="Введите ваш город" name="city"
                                               data-validate v-model="auth_user.city"
                                               class="input-words"
                                               @keyup="inputWords">
                                    </label>
                                    <div class="lk-form__buttons">
                                        <button class="btn btn-purple lk-form__save" type="button" @click="profileUserPublic">
                                            Сохранить
                                        </button>
                                        <button class="btn btn-white lk-form__cancel" type="reset">Отменить</button>
                                    </div>
                                </fieldset>
                                <button class="btn btn-white lk-btn-change lk-btn-change--private lk-form__change"
                                        type="button">
                                    Изменить данные
                                    <svg width="18" height="18">
                                        <use href="#icon-edit"></use>
                                    </svg>
                                </button>
                            </form>
                            <form class="form lk-form lk-form--password" method="post" autocomplete="on"
                                  @keydown="form.onKeydown($event)">
                                <h2 class="title" data-edit="Смена пароля">Пароль</h2>
                                <fieldset class="lk-form__inner lk-form__inner--password" disabled>
                                    <legend class="visually-hidden">Пароль</legend>
                                    <span class="form__field-wrap">
                                        <label class="form__field-password">
                                            <input placeholder="••••••">
                                            <span class="show-password">
                                                <svg width="20" height="20">
                                                    <use href="#icon-password-eye"></use>
                                                </svg>
                                            </span>
                                        </label>
                                    </span>
                                    <span class="form__field-wrap">
                                        Введите новый пароль
                                        <label class="form__field-password">
                                            <input type="password" placeholder="Введите новый пароль"
                                                   name="password" data-pass-origin
                                                   data-validate="password" required
                                                   id="password" v-model="form.password"
                                                   autocomplete="new-password">
                                            <span class="show-password">
                                                <svg width="20" height="20">
                                                    <use href="#icon-password-eye"></use>
                                                </svg>
                                            </span>
                                        </label>
                                    </span>
                                    <span class="form__field-wrap">
                                        Повторите новый пароль
                                        <label class="form__field-password password-repeat">
                                            <input type="password" placeholder="Повторите ввод пароля"
                                                   name="password_confirmation" data-pass-repeat
                                                   data-validate="password" required
                                                   id="password_confirmation"
                                                   v-model="form.password_confirmation"
                                                   autocomplete="new-password">
                                            <span class="show-password">
                                                <svg width="20" height="20">
                                                    <use href="#icon-password-eye"></use>
                                                </svg>
                                            </span>
                                        </label>
                                    </span>
                                    <div class="lk-form__buttons">
                                        <button class="btn btn-purple lk-form__save" type="button"
                                                @click="profileUserPassword">Сохранить
                                        </button>
                                        <button class="btn btn-white lk-form__cancel" type="reset">Отменить</button>
                                    </div>
                                </fieldset>
                                <div class="lk-form__change-wrap">
                                    <button class="btn btn-white lk-btn-change lk-btn-change--border lk-form__change"
                                            type="button">
                                        Изменить пароль
                                    </button>
                                </div>
                            </form>
                            <form class="form lk-form" method="post" autocomplete="on">
                                <h2 class="title">Мои адреса</h2>
                                <div class="lk-form__address-inner">
                                    <div class="lk-form__address">
                                        <p class="form__field-wrap ">
                                            Санкт-Петербург, ул. Лиговский проспект, д. 20, стр. 42, под. 1, кв. 254
                                        </p>
                                        <div class="lk-form__edit">
                                            <button class="lk-form__address-change" type="button"
                                                    aria-label="Изменить адрес"
                                                    data-modal-open="add-address">
                                                <svg width="24" height="24">
                                                    <use href="#icon-edit"></use>
                                                </svg>
                                            </button>
                                            <button class="lk-form__address-delete" type="button"
                                                    aria-label="Удалить адрес">
                                                <svg width="24" height="24">
                                                    <use href="#icon-delete"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="lk-form__add-block">
                                        <button
                                            class="btn btn-white lk-btn-change lk-btn-change--border lk-form__add-address"
                                            type="button"
                                            data-modal-open="add-address">Добавить новый адрес
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="lk__social">
                                <strong class="title">Ваши привязанные соцсети</strong>
                                <ul class="social-icons lk__social-list">
                                    <li>
                                        <a class=active href="#!" aria-label="наша страница фейсбук">
                                            <svg width="40" height="40">
                                                <use href="#icon-fb"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=active href="#!" aria-label="наша страница в контакте">
                                            <svg width="40" height="40">
                                                <use href="#icon-vk"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" aria-label="наша страница твиттер">
                                            <svg width="40" height="40">
                                                <use href="#icon-tw"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" aria-label="наша страница одноклассники">
                                            <svg width="40" height="40">
                                                <use href="#icon-ok"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" aria-label="наша страница гугл плюс">
                                            <svg width="40" height="40">
                                                <use href="#icon-gp"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" aria-label="наша страница майл ру">
                                            <svg width="40" height="40">
                                                <use href="#icon-mr"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="lk__mailing">
                                <strong class="title">Управление подписками</strong>
                                <label class="form__checkbox-wrap">
                                    <input class="visually-hidden"
                                           type="checkbox"
                                           name="subscription"
                                           v-model="auth_user.subscription"
                                           @change="profileUserSubscription">
                                    <span class="checkbox-item"></span>
                                    Согласен на рассылку по электронной почте
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
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
            <!-- Только на этой странице -->
            <modal-add-address></modal-add-address>
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>
</template>

<script>
import {VueDatePicker} from '@mathieustan/vue-datepicker';
import '@mathieustan/vue-datepicker/dist/vue-datepicker.min.css';
import Form from "vform"

export default {
    name: "Page-Profile",
    components: {
        VueDatePicker
    },
    props: {
        auth_user: {
            default: null
        }
    },
    data: () => ({
        locale: {lang: 'ru'},
        date: new Date(),
        color: '#5f3ec0',
        menu: false,

        form: new Form({
            password: '',
            password_confirmation: '',
            id: 0
        })
    }),
    watch: {
        menu(val) {
            val && setTimeout(() => (this.$refs.menu.$refs.agenda.mode = 'year'));
        }
    },
    mounted() {
        this.date = this.auth_user.created_at
    },
    methods: {
        async profileUser() {
            this.auth_user.created_at = this.date
            await axios.post('/api/settings/profile', this.auth_user).then(response => {
                if (response.data.newProfileUserSuccess === 'Успешно изменена информация в профиле') {
                    this.$swal.fire({
                        icon: 'success',
                        title: 'Успех!',
                        text: 'Вы изменили свои данные!',
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', this.$swal.stopTimer)
                            toast.addEventListener('mouseleave', this.$swal.resumeTimer)
                        }
                    })
                } else if (response.data.newProfileUserError === 'Ошибка. Проверьте правильность ввода') {
                    this.$swal.fire({
                        icon: 'error',
                        title: 'Ошибка!',
                        text: 'Проверьте правильность ввода!',
                    })
                }
            }).catch(error => {

            });
        },
        async profileUserPublic() {
            await axios.post('/api/settings/profile/public', this.auth_user).then(response => {
                if (response.data.newProfileUserPublicSuccess === 'Успешно изменена информация в профиле') {
                    this.$swal.fire({
                        icon: 'success',
                        title: 'Успех!',
                        text: 'Вы изменили свои данные!',
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', this.$swal.stopTimer)
                            toast.addEventListener('mouseleave', this.$swal.resumeTimer)
                        }
                    })
                } else if (response.data.newProfileUserPublicError === 'Ошибка. Проверьте правильность ввода') {
                    this.$swal.fire({
                        icon: 'error',
                        title: 'Ошибка!',
                        text: 'Проверьте правильность ввода!',
                    })
                }
            }).catch(error => {

            });
        },
        async profileUserSubscription() {
            await axios.post('/api/settings/profile/subscription', this.auth_user).then(response => {
                if (response.data.newSubscription === 'Успешно изменена подписка') {
                    console.log(this.auth_user.subscription)
                    if (this.auth_user.subscription === true) {
                        this.$swal.fire({
                            icon: 'success',
                            title: 'Успех!',
                            text: 'Вы подписались на рассылку!',
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', this.$swal.stopTimer)
                                toast.addEventListener('mouseleave', this.$swal.resumeTimer)
                            }
                        })
                    } else if (this.auth_user.subscription === false) {
                        this.$swal.fire({
                            icon: 'success',
                            title: 'Успех!',
                            text: 'Вы отписались от рассылки!',
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', this.$swal.stopTimer)
                                toast.addEventListener('mouseleave', this.$swal.resumeTimer)
                            }
                        })
                    }
                } else {
                }
            }).catch(error => {
            });
        },

        async profileUserPassword() {
            this.form.id = this.auth_user.id
            await this.form.post('/api/settings/profile/password')
                .then((response) => {
                    if (response.data.newPasswordSucceess === 'Успешно изменён пароль') {

                        this.form.password = ''
                        this.form.password_confirmation = ''
                        this.$swal.fire({
                            icon: 'success',
                            title: 'Успех!',
                            text: 'Вы сменили пароль!',
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', this.$swal.stopTimer)
                                toast.addEventListener('mouseleave', this.$swal.resumeTimer)
                            }
                        })
                    }
                })
                .catch((error) => {
                    if (error.response.data.newPasswordError === 'Новый пароль не совпадает') {

                        this.form.password_confirmation = ''
                        this.$swal.fire({
                            icon: 'error',
                            title: 'Ошибка!',
                            text: 'Новый пароль не совпадает! Проверьте правильность ввода!',
                        })
                    }
                });
        },
        async inputWords() {
            await $('body').on('input', '.input-words', function() {
                this.value = this.value.replace(/([^a-zA-Zа-яА-ЯёЁ\s]?|)/gi, '');
            })
        },
        async inputEmail() {
            await $('body').on('input', '.input-email', function() {
                this.value = this.value.replace(/^(([^<>()[]\.,;:\s@"]+(.[^<>()[]\.,;:\s@"]+)*)|(".+"))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/gi, '');
            })
        }
    }
}
</script>

<style scoped>
</style>
