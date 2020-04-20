<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'slug' => $faker->unique()->slug,
        'active' => $faker->numberBetween(0, 1),
        'header' => $faker->numberBetween(0, 1),
        'footer' => $faker->numberBetween(0, 1),
        'meta_title' => $faker->sentence,
        'meta_description' => $faker->paragraph
    ];
});
