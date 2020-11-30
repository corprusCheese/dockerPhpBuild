@extends('layouts.default')
@section('settings')
    @include("include.search")
@stop
@section('content')
    @if(isset($users)&&$users&&(sizeof($users)>1||sizeof($users)==1&&Auth::user()&&Auth::user()->name!=$users[0]->name||sizeof($users)==1&&!Auth::user()))
        <div class="user-template">
            @foreach($users as $user)
                <div class="user-item">
                    <p>username: <b>{{ $user->name }}</b></p>
                    <p>email: {{ $user->email }}</p>
                    @if(Auth::user())
                        <button class="btn btn-outline-success my-2 my-sm-0" style="display: inline-block">Пригласить на
                            игру
                        </button>
                    @endif
                    <button class="btn btn-outline-success my-2 my-sm-0" style="display: inline-block">Посмотреть
                        профиль
                    </button>
                </div>
            @endforeach
        </div>
    @endif
@stop


<script defer src="{{ asset('js/app.js') }}"></script>

