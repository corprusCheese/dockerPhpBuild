<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/game', function () {
    return view('pages.game');
})->name('game');

Route::get('/profile', function () {
   return view('pages.profile');
})->name('profile');

Auth::routes();

/*Route::get('/home', [
    App\Http\Controllers\HomeController::class, 'index'
])->name('home');*/
