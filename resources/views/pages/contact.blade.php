@extends('layouts.layouts')
@section('title')
    Контакты
@endsection
@section('head-js')
    <script defer src="{{ asset('js/contact.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
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
    <page-contact></page-contact>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
@section('template')
    <modal-write-us></modal-write-us>
@endsection

<!-- РАЗОБРАТЬСЯ СО СКРИПТОМ -->
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
<script>
    const map = document.getElementById('map');
    let isMapReady = false;
    let isMapIntersect = false;
    const setMapInit = () => {
        if (isMapIntersect) {
            init();
        }
        isMapReady = true;
    }
    ymaps.ready(setMapInit);

    if (map) {
        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                isMapIntersect = true;
                observer.unobserve(map);
                if (isMapReady) {
                    init();
                }
            }
        });
        observer.observe(map);
    }

    function init() {
        const myMap = new ymaps.Map("map", {
            center: [59.953493, 30.288425],
            zoom: 15,
            controls: []
        });

        myMap.controls.add(new ymaps.control.ZoomControl({options: {position: {right: 10, top: 50}}}));

        const myPlacemark = new ymaps.Placemark([59.953493, 30.288425], {
            balloonContentHeader: 'mediashop24',
            balloonContentBody: 'Санкт-Петербург станция метро Спортивная, Ждановская набережная, д. 7',
            iconCaption: 'mediashop24'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map-pin.svg',
            iconImageSize: [90, 92],
            iconImageOffset: [-86, -2]
        });

        myMap.behaviors.disable('multiTouch');
        myMap.behaviors.disable('scrollZoom');
        myMap.geoObjects.add(myPlacemark);

        const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent);
        if (isMobile) {
            myMap.behaviors.disable('drag');
        }
    }
</script>
