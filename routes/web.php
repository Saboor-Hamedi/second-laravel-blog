<?php
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

// Routes
    Route::get('/', [PagesController::class, 'index']);
    Route::get('/about', [PagesController::class, 'about']);
    Route::get('/insert', [PagesController::class, 'insert']);

    // posts endpoint
    Route::resource('/posts', PostsController::class);



