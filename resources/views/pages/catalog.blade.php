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
@section('content')
    <page-catalog :auth_user='{!! json_encode($profile) !!}'></page-catalog>
@endsection
