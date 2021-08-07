@extends('layouts.layouts')
@section('title')
    Лист ожидания
@endsection
@section('head-js')
    <script defer src="{{ asset('js/waitlist.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/waitlist.css') }}" rel="stylesheet">
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
    <page-wait-list></page-wait-list>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
