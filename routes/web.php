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

Route::get('/{book}/{chapter}', 'ChapterController@show');

//Auth::routes();

Route::redirect('/', '/introduzione-e-testimoni/frontespizio-del-libro-di-mormon')->name('home');

Route::get('/chapters/{uuid}/stream', 'ChapterController@stream')->name('chapters.stream');