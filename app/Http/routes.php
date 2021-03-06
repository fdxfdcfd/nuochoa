<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/home', function() {
     return view('template.index');
});

//user
Route::get('/user', 'UserController@Login' );
Route::post('/signin', 'UserController@Signin' );
Route::post('/signup', 'UserController@Signup' );

//end user

//product
Route::get('/product', 'ProductController@ProductList' );
//end product

Route::get('/','ProductController@ProductList' );