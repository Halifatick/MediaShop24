@extends('layouts.layouts')
@section('title')
    Карточка товара пустая
@endsection
@section('head-js')
    <script defer src="{{ asset('js/card2.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/card2.css') }}" rel="stylesheet">
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
    <page-card2></page-card2>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
@section('template')
    <modal-card-slider></modal-card-slider>
    <modal-feedback-slider></modal-feedback-slider>
    <modal-feedback></modal-feedback>
    <modal-feedback-full></modal-feedback-full>
@endsection
