@extends('layouts.layouts')
@section('title')
    Обзоры
@endsection
@section('head-js')
    <script defer src="{{ asset('js/review.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/review.css') }}" rel="stylesheet">
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
    <page-review></page-review>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
