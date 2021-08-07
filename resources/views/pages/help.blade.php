@extends('layouts.layouts')
@section('title')
    Помощь главная
@endsection
@section('head-js')
    <script defer src="{{ asset('js/help.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/help.css') }}" rel="stylesheet">
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
    <page-help></page-help>
@endsection
@section('footer')
    <footer-info></footer-info>
@endsection
