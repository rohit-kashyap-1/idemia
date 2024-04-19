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

Route::get('/', function () {
    return view('home');
});

Route::get('/user', function () {
    return view('users.user');
});
Route::get('/services/web-development', function () {
    return view('services.service', ['title' => 'Web Development','data'=>null,'hello'=>'world']);
});
Route::get('/services/web-designing', function () {
    return view('services.service', ['title' => 'Web Designing']);
});


Route::get('/demo', function () {
    return view('demo.index');
});

Route::get('/service-details', function () {
    return view('demo.service-details');
});
