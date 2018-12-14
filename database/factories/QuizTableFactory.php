<?php

use Faker\Generator as Faker;

$factory->define(App\Quiz::class, function (Faker $faker) {
    return [
        'user_id'=>App\User::inRandomOrder()->first()->id,
        'subject_id'=>App\Subject::inRandomOrder()->first()->id,
        'topic_id'=>App\Topic::inRandomOrder()->first()->id,
        'subtopic_id'=>App\Subtopic::inRandomOrder()->first()->id,
        'form'=>$faker->numberBetween(1,6),
        'week'=>$faker->numberBetween(1,365),
        'title'=>$faker->word,
        'original'=>$faker->boolean
    ];
});
