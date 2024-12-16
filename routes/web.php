<?php

use App\Http\Controllers\ArticleController;
use App\Http\Middleware\isAdmin;
use App\Models\Article;
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
    $articles=Article::where('is_published',true)->get();
    return view('news',compact('articles'));
});
Route::middleware(['auth',isAdmin::class])->group(function () {
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

