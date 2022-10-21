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
    return view('welcome');
});

Route::get('/top', function () {
    return view('top');
});

Route::get('/prologue', function () {
    return view('prologue');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/story', function () {
    return view('story');
});

Route::get('/collection', function () {
    return view('collection');
});

Route::get('/story_list', function () {
    return view('story_list');
});

Route::get('/kohan_list', function () {
    return view('kohan_list');
});

Route::get('/kohan_detail', function () {
    return view('kohan_detail');
});

Route::get('/kohan_get', function () {
    return view('kohan_get');
});

Route::get('/option', function () {
    return view('option');
});