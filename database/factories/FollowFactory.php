<?php

use Faker\Generator as Faker;

$factory->define(App\Follow::class, function (Faker $faker) {
    return [
        'user_id'=>App\User::inRandomOrder()->first()->id,
        'follow_id'=>App\User::inRandomOrder()->first()->id,
    ];
});
