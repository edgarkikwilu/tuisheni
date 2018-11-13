<?php

use Faker\Generator as Faker;

$factory->define(App\Note::class, function (Faker $faker) {
    return [
        'user_id'=>App\User::inRandomOrder()->first()->id,
        'topic_id'=>App\Topic::inRandomOrder()->first()->id,
        'title'=>$faker->word,
        'article'=>$faker->sentence($nbWords = 6, $variableNbWords = true) ,
        'original'=>$faker->boolean,
        'votes'=>$faker->numberBetween($min=0,$max=100000),
        'thumbnail'=>$faker->word
    ];
});
