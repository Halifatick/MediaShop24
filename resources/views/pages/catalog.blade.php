@extends('layouts.layouts')
@section('title')
    Каталог
@endsection
@section('head-js')
    <script defer src="{{ asset('js/catalog.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/catalog.css') }}" rel="stylesheet">
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
    <page-catalog></page-catalog>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
