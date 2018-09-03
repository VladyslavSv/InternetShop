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
    return view('index');
})->name('index');

Route::get('/aboutUs',function(){
   return view('shop.aboutUs');
})->name('aboutUs');

Route::get('/contactUs',function(){
    return view('shop.contactUs');
})->name('contactUs');

Route::get('/single',function (){
   return view('shop.single');
})->name('singleProduct');

Route::get('/search', function(){
   return view('shop.search');
})->name('search');

