@extends('layouts.layouts')
@section('title')
    Вопросы и ответы
@endsection
@section('head-js')
    <script defer src="{{ asset('js/faq.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/faq.css') }}" rel="stylesheet">
@endsection
@section('style-body')
    class="body-service"
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
    <page-faq></page-faq>
@endsection
@section('footer')
    <footer-info></footer-info>
@endsection
