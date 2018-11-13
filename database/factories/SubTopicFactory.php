<?php

use Faker\Generator as Faker;

$factory->define(App\SubTopic::class, function (Faker $faker) {
    return [
        'topic_id'=>\App\Topic::inRandomOrder()->first()->id,
        'name'=>$faker->name,
        'duration'=>$faker->numberBetween($min=1,$max=10),
        'week'=>$faker->numberBetween($min=1,$max=365)
    ];
});
