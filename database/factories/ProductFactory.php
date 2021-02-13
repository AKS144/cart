<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' =>$faker->sentence(5),
        'image' => 'https://via.placeholder.com/150*100',
        'price' => rand(10,100)
    ];
});
