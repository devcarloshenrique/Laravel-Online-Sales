<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SubCategory;
use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

$factory->define(SubCategory::class, function (Faker $faker) {

        return [
            'name'  => $faker->name,
        ];
});
