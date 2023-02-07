<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brands;
use App\Categories;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->sentence(3);

    return [
        'category_id' => create(Categories::class),
        'brand_id' => create(Brands::class),
        'name' => $name,
        'url' => $name,
    ];
});
