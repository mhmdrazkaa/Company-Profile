<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/index', function () {
    return view('index');
});

Route::get('/', [NewsController::class, 'index']);
Route::get('/post/{id}', [NewsController::class, 'show'])->name('post.show');
