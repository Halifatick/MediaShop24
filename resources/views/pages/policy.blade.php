@extends('layouts.layouts')
@section('title')
    Политика конфиденциальности
@endsection
@section('head-js')
    <script defer src="{{ asset('js/policy.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/policy.css') }}" rel="stylesheet">
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
    <page-policy></page-policy>
@endsection
@section('footer')
    <footer-info></footer-info>
@endsection
