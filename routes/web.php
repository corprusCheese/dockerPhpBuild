<?php

use App\Models\User;
use App\Repository\Eloquent\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/game', function () {
    return view('pages.game');
})->name('game');

Route::get('/profile', function () {
   return view('pages.profile');
})->name('profile');

Route::get('/users', [
    \App\Http\Controllers\UserSearchController::class, 'index',
])->middleware(\App\Http\Middleware\UserSearch::class)->name('users');

Route::get('/user/{id}', [
    \App\Http\Controllers\UserController::class, 'index',
])->middleware(\App\Http\Middleware\UserSearch::class)->name('user');

Auth::routes();

/*Route::get('/home', [
    App\Http\Controllers\HomeController::class, 'index'
])->name('home');*/
