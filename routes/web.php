<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'HelloWorld']);

Route::get('/post', [PostController::class, 'index']);
Route::resource('posts', PostController::class);