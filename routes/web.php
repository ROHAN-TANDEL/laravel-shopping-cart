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

header("Access-Control-Allow-Origin: http://localhost:8100");
	header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE, PATCH");
	header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");


Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/github', 'Auth\LoginController@redirectToProvider');

Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::post('payment/add-funds/paypal', 'PaymentController@payWithpaypal');

Route::get('addmoney/stripe', array('as' => 'addmoney.paywithstripe','uses' => 'AddMoneyController@payWithStripe'));
Route::post('addmoney/stripe', array('as' => 'addmoney.stripe','uses' => 'AddMoneyController@postPaymentWithStripe'));

Route::get('checkout',function(){
	return view('checkout');
})->name('checkout');

Route::get('sample',function(){
	return view('sample');
});


Route::resource('article', 'ArticleController');

Route::resource('product','ProductsController');