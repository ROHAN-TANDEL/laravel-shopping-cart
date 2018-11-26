<?php

use Faker\Generator as Faker;


$factory->define(App\Orders::class, function (Faker $faker) {
    return [

        'reference_id'=>rand(1,100),
        'user_id'=>rand(1,10),
        'status'=>$faker->name,
        'email'=>$faker->email,
        'phone'=>$faker->e164PhoneNumber,
        'payment_status'=>$faker->boolean($chanceOfGettingTrue = 50),
        'address_id'=>rand(1,10),
        'billing_id'=>rand(1,10)

    ];
});

