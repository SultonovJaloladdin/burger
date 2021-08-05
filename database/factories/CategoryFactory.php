<?php

use Faker\Generator as Faker;
use App\Categories;

$factory->define(Categories::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(6), 
        'desc' => $faker->sentence(15), 
        'image' => $faker->imageUrl(100, 100, 'food')  
    ];
});
