@extends('layouts.layouts')
@section('title')
    Корзина
@endsection
@section('head-js')
    <script defer src="{{ asset('js/cart.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
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
    <page-cart></page-cart>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
