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

Auth::routes();

Route::get('users/login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);

Route::group(array('prefix' => 'vendor', 'namespace' => 'Vendor', 'middleware' => 'vendor'), function () {

    Route::get('/login', 'VendorsController@showLoginForm');

    Route::get('/logout', 'VendorsController@logout');

    Route::get('/product/new', 'VendorsController@createProduct');

    Route::get('/product/{id}', 'VendorsController@editProduct');

});
