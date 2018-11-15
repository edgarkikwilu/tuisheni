<?php

use Faker\Generator as Faker;

$factory->define(App\Topic::class, function (Faker $faker) {
    return [
        'subject_id'=>App\Subject::inRandomOrder()->first()->id,
       'name' =>$faker->name,
       'duration'=>$faker->numberBetween($min=1,$max=10),
       'priority'=>$faker->numberBetween($min=1,$max=10),
    ];
});
