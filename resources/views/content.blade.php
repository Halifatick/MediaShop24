@extends('layouts.layouts')
@section('title')
    Содержание
@endsection
@section('head-js')
    <script defer src="{{ asset('js/content.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/content.css') }}" rel="stylesheet">
@endsection
@section('style-body')
    class="body-min"
@endsection
@section('svg-icons')
    <svg-icons></svg-icons>
@endsection
@section('aside')
    <aside-main></aside-main>
@endsection
@section('header')
    <header-main></header-main>
@endsection
@section('content')
    <page-content></page-content>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
@section('template')
    <modal-write-us></modal-write-us>
    <modal-vacancy></modal-vacancy>
    <modal-feedback></modal-feedback>
    <modal-feedback-full></modal-feedback-full>
    <modal-add-address></modal-add-address>
    <modal-cancel-order></modal-cancel-order>


    <div id="modal-test" class="modal modal-from-right" aria-hidden="true">
        <style>
            input,
            input::placeholder {
                font-size: inherit !important;
            }
        </style>
        <div class="modal-wrap submenu-block-desktop">
            <div class="form-wrap modal-body">
                <div class="menu-head">
                    <h3 class="menu-title">Удобство полей ввода с мелким шрифтом</h3>
                </div>
                <div class="modal-main">
                    <p style="color: #D7364F;padding: 15px;">Оцените зумирование safari iOs полей с шрифтом меньше 16px</p>
                    <p style="color: cadetblue;padding: 15px;">И если у вас не будет спасительного поля с шрифтом меньше 16px,
                        назад масштаб наврядли вы уменьшите</p>

                    <form class="form form--login" method="post" autocomplete="on">
                        <label class="form__field-wrap" style="font-size: 12px;">
                            Шрифт 12 px
                            <input type="text" name="email" placeholder="Введите адрес электронной почты" data-validate="email"
                                   required>
                        </label>
                        <label class="form__field-wrap" style="font-size: 14px;">
                            Шрифт 14 px
                            <input type="text" name="email" placeholder="Введите адрес электронной почты" data-validate="email"
                                   required>
                        </label>
                        <label class="form__field-wrap" style="font-size: 16px;">
                            Шрифт 16 px
                            <input type="text" name="email" placeholder="Введите адрес электронной почты" data-validate="email"
                                   required>
                        </label>
                    </form>
                </div>
                <button class="submenu-close" type="button" aria-label="закрыть" data-modal-close="modal-test"></button>
            </div>
        </div>
    </div>
@endsection
