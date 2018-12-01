<?php

use Faker\Generator as Faker;

$factory->define(App\QuizQuestion::class, function (Faker $faker) {
    return [
        'quiz_id'=>App\Quiz::inRandomOrder()->first()->id,
        'question'=>$faker->word,
        'answer'=>(string)$faker->randomElement($array = array ('a','b','c','d','f')),
        'question_type_id'=>$faker->numberBetween(1,2)
    ];
});
