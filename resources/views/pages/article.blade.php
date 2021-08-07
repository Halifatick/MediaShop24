@extends('layouts.layouts')
@section('title')
    Статья
@endsection
@section('head-js')
    <script defer src="{{ asset('js/article.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/article.css') }}" rel="stylesheet">
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
    <page-article></page-article>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
