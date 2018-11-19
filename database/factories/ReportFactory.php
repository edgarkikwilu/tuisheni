<?php

use Faker\Generator as Faker;

$factory->define(App\Report::class, function (Faker $faker) {
    return [
        'user_id'=>App\User::inRandomOrder()->first()->id,
        'exam_id'=>App\Exam::inRandomOrder()->first()->id,
        'week'=>$faker->numberBetween(1,365),
        'score'=>$faker->numberBetween(0,100),
        'grade'=>(string)$faker->randomElement($array = array ('a','b','c','d','f')),
        'remarks'=>(string)$faker->words(1,true),
        'teacher_id'=>App\User::inRandomOrder()->first()->id
    ];
});
