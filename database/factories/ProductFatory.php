<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->words($nb = 3, $asText = true),
        'short_info' => $faker->sentences(3, $asText = true),
        'body' => $faker->paragraphs(3, $asText = true),
        'features' => $faker->sentences($nb = 5, $asText = false),
        'price' => $faker->numberBetween(50, 2000),
        'image' => $faker->imageUrl(800, 600),
        'created_by' => 1,
        'is_featured' => $faker->boolean($chanceOfGettingTrue = 30)
    ];
});
