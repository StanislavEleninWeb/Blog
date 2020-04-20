<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'slug' => $faker->unique()->slug,
        'description' => $faker->paragraph,
    ];
});
