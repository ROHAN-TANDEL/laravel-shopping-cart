<?php

use Faker\Generator as Faker;

$factory->define(App\Products::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'quantity' => rand(1,100),
        'category' => $faker->name,
        'image_address' => $faker->imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false),
        'unit_price' => rand(1,10),
    ];
});
