<?php

use App\Models\User;
use App\Repository\Eloquent\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// routes with auth
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// routes without auth
Route::get('/users', function (Request $request) {

    $userRepository = new UserRepository(new User());
    $result = null;
    if ($request['id']) {
        $result = $userRepository->find($request['id']);
    } else {
        $result = $userRepository->all();
    }

    return $result;
});

// routes for admin

