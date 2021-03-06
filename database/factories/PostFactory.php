<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Post::class, function (Faker $faker) {
    $date = $faker->dateTime($max = 'now', $timezone = null);
    return [
        'created_at' => $date,
        'created_at' => $date,
        'title' => $faker->text($maxNbChars = 150),
        'body' => $faker->realText($maxNbChars = 2500, $indexSize = 2)
    ];
});