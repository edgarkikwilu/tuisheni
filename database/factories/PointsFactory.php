<?php

use Faker\Generator as Faker;

$factory->define(App\Point::class, function (Faker $faker) {
    return [
        'user_id'=>App\User::inRandomOrder()->first()->id,
        'source'=>(string)$faker->boolean?"Exam weekly Test":"Speed quiz 2",
        'type'=>(string)$faker->boolean?"Exam":"Quiz",
        'action'=>(string)$faker->word,
        'from_id'=>App\User::inRandomOrder()->first()->id,
        'value'=>$faker->numberBetween(10,1000)
    ];
});
