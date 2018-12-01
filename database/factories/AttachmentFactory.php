<?php

use Faker\Generator as Faker;

$factory->define(App\Attachement::class, function (Faker $faker) {
    return [
        'note_id'=>App\Note::inRandomOrder()->first()->id,
        'exam_id'=>App\Exam::inRandomOrder()->first()->id,
        'filename'=>$faker->word
    ];
});
