@extends('layouts.layouts')
@section('title')
    Личные данные
@endsection
@section('head-js')
    <script defer src="{{ asset('js/profile.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
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
    <page-profile></page-profile>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
@section('template')
    <modal-add-address></modal-add-address>
@endsection
