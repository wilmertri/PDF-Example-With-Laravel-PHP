<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $user = \App\User::all()->random();
    return [
        'name' => $faker->sentence(3),
        'description' => $faker->sentence(10),
        'price' => $faker->randomFloat(2, 0, 10000),
        'user_id' => $user->id
    ];
});
