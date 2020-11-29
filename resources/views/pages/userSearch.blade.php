@extends('layouts.default')
@section('settings')
    @include("include.search")
@stop
@section('content')
    <div id="userSearch">
    </div>
    <script src="{{ asset ('js/app.js')}}" defer></script>
@stop
