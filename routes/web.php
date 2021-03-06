<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */
Route::get('/', function () {
    return view('home');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/compte', function () {
    return view('compte');
});

Route::get('/inscription', function () {
    return view('inscription');
});

Route::resource('product', 'ProductController');

// Route::get('/avis', function () {
//     return view('avis');
// });

Route::resource('avis', 'AvisController');



// Route::get('/avis', 'AvisController@index');
//
// Route::get('/avis', 'AvisController@store');
Auth::routes();

// Route::middleware('auth')->group(function () {
//
//     Route::get('/avis', 'AvisController@create');
//
// });

Route::get('/addproduct', function () {
    return view('addproduct');
});
Route::get('/editproduct/{product}', 'ProductController@edit');
Route::get('product/{product}/destroy', 'ProductController@destroy');


Route::get('/voyage/{name}', 'ProductController@index')->where('name','[A-Za-z]+');
Route::get('/voyage/produit/{id}', 'ProductController@show')->where('id','[0-9]+');

Route::resource('cart', 'CartController');
Route::get('/cart/{id}/{product}' , 'CartController@cart');

Route::get('/coucou', function () {
    return view('coucou');
});



Route::get('/voyage/produit/createWishList', 'WishlistController@createByAjax');
Route::get('/voyage/produit/removeWishList', 'WishlistController@removeByAjax');

Route::resource('wishlist' , 'WishlistController');
Route::get('wishlist/{wishlist}/destroy', 'WishlistController@destroy');




//Route::get('/wishlist' , 'WishlistController@index');
