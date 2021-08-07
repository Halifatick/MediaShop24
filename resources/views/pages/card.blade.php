@extends('layouts.layouts')
@section('title')
    Карточка товара
@endsection
@section('head-js')
    <script defer src="{{ asset('js/card.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/card.css') }}" rel="stylesheet">
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
    <page-card></page-card>
@endsection
@section('footer')
    <footer-card></footer-card>
@endsection
@section('template')
    <modal-card-slider></modal-card-slider>
    <modal-feedback-slider></modal-feedback-slider>
    <modal-feedback></modal-feedback>
    <modal-feedback-full></modal-feedback-full>
@endsection
