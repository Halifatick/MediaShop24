@extends('layouts.layouts')
@section('title')
    Избранное
@endsection
@section('head-js')
    <script defer src="{{ asset('js/favorite.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/favorite.css') }}" rel="stylesheet">
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
    <page-favorite></page-favorite>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
