<?php

use Faker\Generator as Faker;

$factory->define(App\Exam::class, function (Faker $faker) {
    return [
        'user_id'=>\App\User::inRandomOrder()->first()->id,
        'exam_type_id'=>\App\ExamType::inRandomOrder()->first()->id,
        'title'=>$faker->word,
        'subject_id'=>App\Subject::inRandomOrder()->first()->id,
        'description'=>$faker->word,
        'start'=>$faker->dateTime($max = 'now', $timezone = null),
        'end'=>$faker->dateTime($max = 'now', $timezone = null),
        'attendance'=>$faker->numberBetween($min=0,$max=1000),
        'duration'=>$faker->numberBetween($min=1,$max=10),
        'week'=>$faker->numberBetween($min=1,$max=365),
    ];
});
