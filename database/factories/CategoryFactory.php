<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categories;
use Faker\Generator as Faker;

$factory->define(Categories::class, function (Faker $faker) {
    $name = $faker->word;

    return [
        'name' => $name,
        'url' => $name,
        'depth' => 1
    ];
});
