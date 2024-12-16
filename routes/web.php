<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/news', function () {
    return view('news');
});
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    });
    Route::resources([
        'articles' => ArticleController::class
    ]);
});
Route::get('/home', function () {
    return redirect('/dashboard');
});
Auth::routes();

