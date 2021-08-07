@extends('layouts.layouts')
@section('title')
    Мои отзывы
@endsection
@section('head-js')
    <script defer src="{{ asset('js/fblist.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/fblist.css') }}" rel="stylesheet">
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
    <page-fblist></page-fblist>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
@section('template')
    <modal-feedback></modal-feedback>
    <modal-feedback-full></modal-feedback-full>
@endsection
