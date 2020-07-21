<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Snippet;
use Faker\Generator as Faker;

$factory->define(Snippet::class, function (Faker $faker) {
    return [
        "title" => $faker->sentence,
        "code" => $faker->paragraph
    ];
});
