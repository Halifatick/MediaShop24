@extends('layouts.layouts')
@section('title')
    Акции-2
@endsection
@section('head-js')
    <script defer src="{{ asset('js/stock2.js') }}"></script>
@endsection
@section('head-css')
    <link href="{{ asset('css/stock2.css') }}" rel="stylesheet">
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
    <page-stock2></page-stock2>
@endsection
@section('footer')
    <footer-main></footer-main>
@endsection
