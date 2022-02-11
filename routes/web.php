<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/learn', function () {
    return redirect(Article::all()->first()->path());
});

Route::get('/learn/{article}', function (Article $article) {
    $articles = Article::with('articles')->get();
    return view('learn', ['articles' => $articles, 'currentArticle' => $article]);
});


Route::get('/about', function () {
    return view('about');
});