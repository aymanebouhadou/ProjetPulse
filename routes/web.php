<?php

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


Route::get('/simple', function () {
    return view('simple');
});

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/ScoreCollaborateur', function () {
    return view('ScoreCollaborateur');
});


Route::get('/UpdateProfile', function () {
    return view('UpdateProfile');
});

Route::get('/', function () {
    return view('welcome');
});
