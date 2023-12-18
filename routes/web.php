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

Route::get('/', function () {
    $comics = config('db.comics');
    return view('home' , compact('comics'));
});


Route::get('/characters' , function(){
    return view('pages.characters');
}) -> name('characters')
;
Route::get('/comics' , function(){
    return view('pages.comics');
}) -> name('comics')
;
Route::get('/movies' , function(){
    return view('pages.movies');
}) -> name('movies')
;

