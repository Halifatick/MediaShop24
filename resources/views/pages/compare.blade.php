@extends('layouts.layouts')
@section('title')
    Сравнение
@endsection
@section('head-js')
    <script defer src="{{ asset('js/compare.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/compare.css') }}" rel="stylesheet">
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
    <page-compare></page-compare>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
