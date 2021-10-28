<template>
    <div id="modal-register" class="modal modal-from-right" aria-hidden="true">
        <div class="modal-wrap submenu-block-desktop">
            <div class="form-wrap modal-body">
                <div class="menu-head">
                    <h3 class="menu-title">Регистрация</h3>
                </div>
                <div class="modal-main">
                    <form @submit.prevent="registerUser"
                          @keydown="form.onKeydown($event)"
                          class="form form--register" method="post">
                        <AlertError :form="form" />
                        <label class="form__field-wrap">
                            Ваш логин
                            <input type="text" name="name" placeholder="Ваш логин" required
                                   id="name" v-model="form.name">
                        </label>
                        <HasError :form="form" field="name"/>
                        <label class="form__field-wrap">
                            Электронная почта*
                            <input type="email" name="email" placeholder="Введите адрес электронной почты" required
                                   id="email" v-model="form.email">
                        </label>
                        <HasError :form="form" field="email"/>
                        <span class="form__field-wrap">
                            Пароль*
                            <label class="form__field-password">
                              <input type="password" placeholder="Введите пароль" name="password" required
                                     id="password" v-model="form.password">
                              <span class="show-password">
                                <svg width="20" height="20">
                                  <use href="#icon-password-eye"></use>
                                </svg>
                              </span>
                            </label>
                            <HasError :form="form" field="password"/>
                        </span>
                        <span class="form__field-wrap">
                            Повторите пароль*
                            <label class="form__field-password password-repeat">
                              <input type="password" placeholder="Повторите пароль" name="password_confirmation" required
                                     id="password_confirmation" v-model="form.password_confirmation">
                              <span class="show-password">
                                <svg width="20" height="20">
                                  <use href="#icon-password-eye"></use>
                                </svg>
                              </span>
                            </label>
                            <HasError :form="form" field="password_confirmation"/>
                        </span>
                        <label class="form__checkbox-wrap">
                            <input class="visually-hidden" type="checkbox" name="submitted" required
                                   v-model="form.submitted">
                            <span class="checkbox-item"></span>
                            <span>Нажимая кнопку вы даете согласие на обработку персональных данных и соглашаетесь с <a
                                class="privacy-policy-link link" href="#!" data-tab="policy" data-modal-open="help">политикой
                                конфиденциальности.</a></span>
                            <HasError :form="form" field="submitted"/>
                        </label>
                        <Button class="form__submit btn btn-purple form__btn-register" :form="form">Регистрация</Button>
                    </form>
                    <div class="modal-login-footer">
                        <p>Уже зарегистрированы? <a class="form__link" href="#!" data-modal-open="modal-login">Авторизоваться</a>
                        </p>
                        <strong>Войти через социальные сети:</strong>
                        <ul class="social-icons">
                            <li>
                                <a href="social-auth/facebook" aria-label="Вход через Facebook">
                                    <svg width="40" height="40">
                                        <use href="#icon-fb"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="social-auth/vkontakte" aria-label="Вход через ВКонтакте">
                                    <svg width="40" height="40">
                                        <use href="#icon-vk"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="social-auth/twitter" aria-label="Вход через Twitter">
                                    <svg width="40" height="40">
                                        <use href="#icon-tw"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="social-auth/odnoklassniki" aria-label="Вход через Одноклассники">
                                    <svg width="40" height="40">
                                        <use href="#icon-ok"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="social-auth/google" aria-label="Вход через Google+">
                                    <svg width="40" height="40">
                                        <use href="#icon-gp"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="social-auth/mailru" aria-label="Вход через Mail.ru">
                                    <svg width="40" height="40">
                                        <use href="#icon-mr"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <button class="submenu-close" type="button" aria-label="закрыть"
                        data-modal-close="modal-register"></button>
            </div>
        </div>
    </div>
</template>

<script>
import Form from "vform"
import {HasError, Button, AlertError} from "vform/src/components/bootstrap5"

export default {
    components: {HasError, Button, AlertError},
    name: "Modal-Register",
    data: function () {
        return {
            form: new Form({
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
                submitted: '',
            })
        }
    },
    methods: {
        async registerUser() {
            await this.form.post('/register')
        }
    },
    computed: {
       /* isComplete () {
            return this.form.name && this.form.email && this.form.password && this.form.password_confirmation && this.form.submitted;
        }*/
    }
}
</script>

<style scoped>

</style>
