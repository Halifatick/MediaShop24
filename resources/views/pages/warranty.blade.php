@extends('layouts.layouts')
@section('title')
    Гарантия и возврат
@endsection
@section('head-js')
    <script defer src="{{ asset('js/warranty.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/warranty.css') }}" rel="stylesheet">
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
    <page-warranty></page-warranty>
@endsection
@section('footer')
    <footer-info></footer-info>
@endsection
