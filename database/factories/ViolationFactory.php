<?php

use Faker\Generator as Faker;

$factory->define(App\Violation::class, function (Faker $faker) {
    return [
        'user_id'=>App\User::inRandomOrder()->first()->id,
        'reported_id'=>App\User::inRandomOrder()->first()->id,
        'post_id'=>App\Note::inRandomOrder()->first()->id,
        'type'=>$faker->boolean?'notes':'tutorial',
        'comments'=>$faker->word,
        'attended'=>$faker->boolean
    ];
});
