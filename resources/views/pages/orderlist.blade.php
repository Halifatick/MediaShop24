@extends('layouts.layouts')
@section('title')
    Мои заказы
@endsection
@section('head-js')
    <script defer src="{{ asset('js/orderlist.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/orderlist.css') }}" rel="stylesheet">
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
    <page-order-details></page-order-details>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
@section('template')
    <modal-cancel-order></modal-cancel-order>
    <modal-feedback></modal-feedback>
    <modal-feedback-full></modal-feedback-full>
@endsection
