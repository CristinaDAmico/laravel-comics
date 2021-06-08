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

    // ottieni tipologie 
    $types = ['lunghe', 'corte', 'cortissime'];
    //dump($types);

    return view('home', ['user'=> 'Paolo', 'types'=> $types]);
})->name('home'); 

// COMICS
Route::get('/comics', function () {
    return 'PAGINA COMICS';
})->name('comics');

// NEWS
Route::get('/news', function () {
    return 'PAGINA NEWS';
})->name('news');



