<?php

use Faker\Generator as Faker;

$factory->define(App\TopStudent::class, function (Faker $faker) {
    return [
        'user_id'=>App\User::inRandomOrder()->first()->id,
        'subject'=>$faker->boolean?'Physics':'Overall',
        'exam_id'=>App\Exam::inRandomOrder()->first()->id,
        'score'=>$faker->numberBetween(1,100),
        'week'=>$faker->numberBetween(1,365)
    ];
});
