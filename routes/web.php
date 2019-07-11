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
    return view('welcome');
});
route::get('/home', function (){
    return view('home');
});
route::get('/about', function (){
    return view('about');
});
route::get('/contact', function (){
    return view('contact');
});
route::get('/master', function (){
    return view('guru.index');
});
route::get('/app', function (){
    return view('petugas.index');
});

