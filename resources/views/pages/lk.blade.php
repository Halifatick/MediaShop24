@extends('layouts.layouts')
@section('title')
    Личный кабинет
@endsection
@section('head-js')
    <script defer src="{{ asset('js/lk.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/lk.css') }}" rel="stylesheet">
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
    <page-lk></page-lk>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
