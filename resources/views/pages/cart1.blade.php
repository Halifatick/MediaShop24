@extends('layouts.layouts')
@section('title')
    Оформление заказа
@endsection
@section('head-js')
    <script defer src="{{ asset('js/cart1.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/cart1.css') }}" rel="stylesheet">
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
    <page-cart1></page-cart1>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
