@extends('layouts.layouts')
@section('title')
    Заказ оформлен
@endsection
@section('head-js')
    <script defer src="{{ asset('js/cartcomplete.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/cartcomplete.css') }}" rel="stylesheet">
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
    <page-cart-complete></page-cart-complete>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
