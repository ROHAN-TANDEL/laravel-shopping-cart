<?php

namespace App\Http\Controllers;

use App\Product;

use App\Address;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redis;

use Log;

use Auth;

class CheckoutController extends Controller {
	function index() {
			if (Auth::check()) {
				Log::emergency("user is  not logged in.");
				$get_address = Address::where('user_id',Auth::id())->get();
				session(['address' => $get_address]);
			} else {
				session('address', 'No address specified');
				Log::emergency("user is  not logged in...");
				return redirect()->route('signin');

			}
			return view('checkout');
		
	}

	function signIn() {
		return view('checkout');
	}
} 