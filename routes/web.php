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

Route::get('/add-to-cart/{id}', [
  'uses' => 'ProductController@addtocart',
  'as' => 'product.addtocart'
]);

Route::get('/shopping-cart', [
  'uses' => 'ProductController@cart',
  'as' => 'product.shoppingcart'
]);

Route::get('/checkout', [
  'uses' => 'ProductController@checkout',
  'as' => 'product.checkout'
]);

Route::post('/checkout', [
  'uses' => 'ProductController@postcheckout',
  'as' => 'product.checkout'
]);

Route::group(['middleware'=>'auth'], function() {
  Route::get('/home', 'HomeController@index');
  Route::get('/', function () {
    return view('home');
  });
  Route::get('/', 'ProductController@index');
  Route::get('/products', 'ProductController@index');
  Route::get('/products/create', 'ProductController@create');
  Route::get('/products/{id}', 'ProductController@edit');
  Route::get('/user/{id}', 'UserController@show');
  Route::put('/products/{id}', 'ProductController@update');
  Route::put('/products/{id}', 'ProductController@destroy');
  Route::post('/products', 'ProductController@store');
});

Auth::routes();
