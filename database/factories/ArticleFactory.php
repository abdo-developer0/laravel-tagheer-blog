<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        "user_id" => 2,
        "title" => $faker->sentence(3),
        "body" => $faker->text(400)
    ];
});
