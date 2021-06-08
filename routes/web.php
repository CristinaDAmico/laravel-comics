<?php

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

// HOMEPAGE
Route::get('/', function () {
    return view('home');
})->name('home');

// COMICS
Route::get('/comics', function () {
    // comics via config
    $comics = config('comics');
    //dump($comics);

    return view('home', ['cards' => $comics]);
})->name('comics');

// NEWS
Route::get('/news', function () {
    return 'PAGINA NEWS';
})->name('news');



