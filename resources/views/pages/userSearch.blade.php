@extends('layouts.default')
@section('settings')
    @include("include.search")
@stop
@section('content')

    @foreach($users as $user)
        <p>This is user {{ $user->id }}</p>
    @endforeach
@stop
