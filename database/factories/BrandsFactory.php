<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brands;
use Faker\Generator as Faker;

$factory->define(Brands::class, function (Faker $faker) {
    $name = $faker->word;

    return [
        'name' => $name,
        'url' => $name
    ];
});
