<?php

use Faker\Generator as Faker;

$factory->define(App\PackageSpec::class, function (Faker $faker) {
    return [
        'package_id'=>App\Package::inRandomOrder()->first()->id,
        'name'=>$faker->word
    ];
});
