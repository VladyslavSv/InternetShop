<?php
use \App\Http\Controllers\ProductController;
use \App\Product;
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
    $most_popular_products = Product::orderBy( 'views', 'DESC' )->take(4)->get();
    $most_expensive_products = Product::orderBy( 'price', 'DESC' )->take(4)->get();
    $the_cheapest_products = Product::orderBy( 'price', 'ASC' )->take(4)->get();

    return view('index', [
        'most_popular_products' => $most_popular_products,
        'most_expensive_products' => $most_expensive_products,
        'the_cheapest_products' => $the_cheapest_products,
        ]);
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

Route::get('/test',function(){
    $product = \App\Product::find(1);

    dd($product->name);

    $product->save();
});

