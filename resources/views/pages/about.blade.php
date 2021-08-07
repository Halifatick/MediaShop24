@extends('layouts.layouts')
@section('title')
    О нас
@endsection
@section('head-js')
    <script defer src="{{ asset('js/about.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
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
    <page-about></page-about>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
