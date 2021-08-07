@extends('layouts.layouts')
@section('title')
    Главная
@endsection
@section('head-js')
    <script defer src="{{ asset('js/index.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endsection
@section('style-body')
    class="body-main"
@endsection
@section('svg-icons')
    <svg-icons></svg-icons>
@endsection
@section('aside')
    <aside-index></aside-index>
@endsection
@section('header')
    <header-index></header-index>
@endsection
@section('content')
    <page-index></page-index>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
