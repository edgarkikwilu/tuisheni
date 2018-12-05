<?php

use Faker\Generator as Faker;

$factory->define(App\Payment::class, function (Faker $faker) {
    return [
        'user_id'=>App\User::inRandomOrder()->first()->id,
        'type'=>$faker->word,
        'action'=>$faker->boolean?'deposit':'withdraw',
        'amount'=>$faker->numberBetween(500,10000),
        'bonus'=>$faker->numberBetween(100,1000),
        'client'=>$faker->word
    ];
});
