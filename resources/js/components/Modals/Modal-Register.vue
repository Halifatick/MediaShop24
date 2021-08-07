<template>
    <div id="modal-register" class="modal modal-from-right" aria-hidden="true">
        <div class="modal-wrap submenu-block-desktop">
            <div class="form-wrap modal-body">
                <div class="menu-head">
                    <h3 class="menu-title">Регистрация</h3>
                </div>
                <div class="modal-main">
                    <form class="form form--register" method="post" autocomplete="on">
                        <label class="form__field-wrap">
                            Ваше имя*
                            <input type="text" name="name" placeholder="Ваше имя" data-validate required>
                        </label>
                        <label class="form__field-wrap">
                            Электронная почта*
                            <input type="text" name="email" placeholder="Введите адрес электронной почты"
                                   data-validate="email"
                                   required>
                        </label>
                        <span class="form__field-wrap">
                Пароль*
                <label class="form__field-password">
                  <input type="password" placeholder="Введите пароль" name="password" data-pass-origin
                         data-validate="password" required>
                  <span class="show-password">
                    <svg width="20" height="20">
                      <use href="#icon-password-eye"></use>
                    </svg>
                  </span>
                </label>
              </span>
                        <span class="form__field-wrap">
                Повторите пароль*
                <label class="form__field-password password-repeat">
                  <input type="password" placeholder="Повторите пароль" name="password-rep" data-pass-repeat
                         data-validate="password" required>
                  <span class="show-password">
                    <svg width="20" height="20">
                      <use href="#icon-password-eye"></use>
                    </svg>
                  </span>
                </label>
              </span>
                        <label class="form__checkbox-wrap">
                            <input class="visually-hidden" type="checkbox" name="agreement" data-validate required>
                            <span class="checkbox-item"></span>
                            <span>Нажимая кнопку вы даете согласие на обработку персональных данных и соглашаетесь с <a
                                class="privacy-policy-link link" href="#!" data-tab="policy" data-modal-open="help">политикой
                    конфиденциальности.</a></span>
                        </label>
                        <button class="form__submit btn btn-purple form__btn-register" type="submit">Регистрация
                        </button>
                    </form>
                    <div class="modal-login-footer">
                        <p>Уже зарегистрированы? <a class="form__link" href="#!" data-modal-open="modal-login">Авторизоваться</a>
                        </p>
                        <strong>Войти через социальные сети:</strong>
                        <ul class="social-icons">
                            <li>
                                <a href="#!" aria-label="наша страница фейсбук">
                                    <svg width="40" height="40">
                                        <use href="#icon-fb"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#!" aria-label="наша страница в контакте">
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
                </div>
                <button class="submenu-close" type="button" aria-label="закрыть"
                        data-modal-close="modal-register"></button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal-Register"
}
</script>

<style scoped>

</style>
