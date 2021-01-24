@extends('layouts.default')
@section('settings')
    @include("include.search")
@stop
@section('content')
    <div id="app">
    </div>
    <script src="{{ asset ('js/app.js')}}" defer></script>
@stop
@section('footer')
    @include("include.footer")
@stop
