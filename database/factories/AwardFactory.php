<?php

use Faker\Generator as Faker;

$factory->define(App\Award::class, function (Faker $faker) {
    return [
        'user_id'=>App\User::inRandomOrder()->first()->id,
        'prize'=>$faker->word,
        'subject_id'=>App\Subject::inRandomOrder()->first()->id,
        'score'=>$faker->numberBetween(80,100),
        'title'=>$faker->word,
        'description'=>(string)$faker->word,
        'bonus'=>$faker->numberBetween(200,15000),
    ];
});
