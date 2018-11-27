<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = [
	            'reference_id',
	            'user_id',
	            'status',
	            'email',
	            'phone',
	            'payment_status',
	            'address_id',
	            'billing_id'
	        ];
}