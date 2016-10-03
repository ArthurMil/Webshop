<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',  [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);
Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);
Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout'
]);
Route::post('/checkout', [
   'uses' => 'ProductController@postCheckout',
    'as' => 'checkout'
]);
Route::get('/signup', [
    'uses' => 'UserController@getSignup',
    'as' => 'user.signup'
]);
Route::post('/signup', [
    'uses' => 'UserController@postSignup',
    'as' => 'user.signup'
]);
Route::get('/admin', [
    'uses' => 'UserController@getSignin',
    'as' => 'user.signin'
]);
Route::post('/admin', [
    'uses' => 'UserController@postSignin',
    'as' => 'user.signin'
]);

Route::get('/admin/panel', [
    'uses' => 'UserController@getPanel',
    'as' => 'user.adminPanel',
    'middleware' => 'auth'
]);
Route::get('/admin/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'admin.logout'
]);

Route::get('/remove/{id}', [
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove'
]);

Route::get('/shop', [
    'uses' => 'ProductController@shopRoute',
    'as' => 'back.shop'
]);

Route::get('/contact', [
   'uses' => 'ProductController@ContactUs',
    'as' => 'contactus'
]);

Route::post('/contact', 'ProductController@postContact');