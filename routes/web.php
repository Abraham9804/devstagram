<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/crear-cuenta',[RegisterController::class,'index'])->name("register");
Route::post('/crear-cuenta',[RegisterController::class,'store']);

Route::get('/muro',[PostController::class,'index'])->name('posts.index');