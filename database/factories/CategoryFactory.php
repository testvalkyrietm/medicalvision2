<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $faker_value = $faker->unique()->domainWord;
    return [
        'name'  =>  ucfirst($faker_value),
        'slug'  =>  $faker_value,
    ];
});
