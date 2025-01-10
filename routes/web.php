<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/index', function () {
    return view('index');
});
Route::get('/', [NewsController::class, 'index']);
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/category/{id}', [NewsController::class, 'category'])->name('category.show');
Route::get('/post/{id}', [NewsController::class, 'show'])->name('post.show');