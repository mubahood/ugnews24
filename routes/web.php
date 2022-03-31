<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'] );
Route::get('/about', [MainController::class, 'about'] );
Route::get('/contact', [MainController::class, 'contact'] );

Route::get('/posts', [PostsController::class, 'index'] );
Route::get('/post', [PostsController::class, 'view_post'] );
Route::get('/post-delete', [PostsController::class, 'delete_post'] );
Route::get('/post-create', [PostsController::class, 'create_post'] );

 



/*Route::get('/', function () {
    return view('welcome');
});*/