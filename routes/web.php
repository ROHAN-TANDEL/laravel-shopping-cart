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
//header("Access-Control-Allow-Origin: *");
//header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
//Route::resource('article', 'ArticleController');

Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/github', 'Auth\LoginController@redirectToProvider');

Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::post('payment/add-funds/paypal', 'PaymentController@payWithpaypal');