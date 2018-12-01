<?php

use Faker\Generator as Faker;

$factory->define(App\Choice::class, function (Faker $faker) {
    return [
        'quiz_question_id'=>App\QuizQuestion::inRandomOrder()->first()->id,
        'index'=>(string)$faker->randomElement($array = array ('a','b','c','d','f')),
        'name'=>$faker->word
    ];
});
