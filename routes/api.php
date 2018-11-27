<?php

use Illuminate\Http\Request;
//use Log;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

if($_SERVER['REQUEST_METHOD']=='OPTIONS') {
	
	// Log::debug('server hit');
	header("Access-Control-Allow-Origin: http://localhost:8100");
	header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE, PATCH");
	header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");

}

header("Access-Control-Allow-Origin: http://localhost:8100");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");

header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE, PATCH");
Route::resource('article', 'ArticleController');
Route::resource('product','ProductsController');
//Route::resource('article', 'ArticleController');


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });