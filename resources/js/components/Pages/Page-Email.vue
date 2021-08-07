<template>
    <main>
        <h1>Здравствуйте, <a href="lk.html">Петр!</a></h1>
        <div class="text-block">
            <p>Ваш заказ номер <a href="orderdetails.html">183102</a> принят в наши надежные руки.</p>
            <p>Мы свяжемся с Вами в ближайшее время для его подтверждения. Подробнее с условиями доставки Вы можете
                ознакомиться на сайте в разделе <a href="delivery.html">Доставка и оплата.</a></p>
            <p>Статус заказа можно отслеживать в личном кабинете в разделе <a href="orderlist.html">Мои заказы.</a></p>
        </div>
        <h2>Товары в заказе</h2>
        <div class="email__order">
            <div class="email__list">
                <div class="email__list-item">
                    <div class="img-wrap">
                        <img src="img/content/phone-cart.png" width="55" height="65" alt="айфон 8">
                    </div>
                    <div class="content-wrap">
                        <div class="name">
                            <small>Арт. 064206</small>
                            <p>Смартфон Apple iPhone 11 Pro Max 64GB Retina display </p>
                        </div>
                        <span class="amount">1шт</span>
                        <b class="price">99 999₽</b>
                    </div>
                </div>
                <div class="email__list-item">
                    <div class="img-wrap">
                        <img src="img/content/watch-cart.png" width="55" height="65" alt="айфон 8">
                    </div>
                    <div class="content-wrap">
                        <div class="name">
                            <small>Арт. 064206</small>
                            <p>Apple Watch 5 series 44mm +ремешек HERMES</p>
                        </div>
                        <span class="amount">1шт</span>
                        <b class="price">99 999₽</b>
                    </div>
                </div>
            </div>
        </div>
        <div class="email__price">Скидка: <b>12₽</b></div>
        <div class="email__price">Доставка: <b>10₽</b></div>
        <div class="email__price email__price--total">Итого: <b>99 999₽</b></div>
        <h2 class="email__title">Данные покупателя</h2>
        <dl class="email__user-info">
            <dt>Имя Фамилия:</dt>
            <dd>Александр Меладзе</dd>
            <dt>Номер телефона:</dt>
            <dd>+7 (812) 812 12 12</dd>
            <dt>Email:</dt>
            <dd>ameladze@gmail.com</dd>
        </dl>
        <h2 class="email__title">Доставка и оплата</h2>
        <dl class="email__user-info">
            <dt>Способ доставки:</dt>
            <dd>Курьер Mediashop</dd>
            <dt>Адрес доставки:</dt>
            <dd>Санкт-Петербург, ул. Лиговский проспект, д. 20, стр. 42, под.1, кв. 254</dd>
            <dt>Способ оплаты:</dt>
            <dd>Банковская карта</dd>
            <dt>Дата и время доставки:</dt>
            <dd>
                <time datetime="2021-08-27">27 августа 2021</time>
                с 10:00 до 15:00
            </dd>
        </dl>
    </main>
</template>

<script>
export default {
    name: "Page-Email"
}
</script>

<style scoped>

</style>
