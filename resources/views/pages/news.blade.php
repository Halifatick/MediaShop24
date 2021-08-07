@extends('layouts.layouts')
@section('title')
    Новости
@endsection
@section('head-js')
    <script defer src="{{ asset('js/news.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/news.css') }}" rel="stylesheet">
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
    <page-news></page-news>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
