@extends('layouts.layouts')
@section('title')
    Каталог общий
@endsection
@section('head-js')
    <script defer src="{{ asset('js/catalogmain.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/catalogmain.css') }}" rel="stylesheet">
@endsection
@section('style-body')
    class="parent"
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
    <page-catalog-main></page-catalog-main>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
