@extends('layouts.layouts')
@section('title')
    Акции
@endsection
@section('head-js')
    <script defer src="{{ asset('js/stock.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/stock.css') }}" rel="stylesheet">
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
    <page-stock></page-stock>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
