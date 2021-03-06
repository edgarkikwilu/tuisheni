<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'firstname' => $faker->name,
        'lastname' => $faker->name,
        'mobile'=>$faker->numberBetween($min = 100, $max = 9000),
        'school'=>$faker->word,
        'bio'=>$faker->word,
        'type'=>$faker->boolean?'teacher':'student',
        'points'=>$faker->numberBetween($min = 100, $max = 9000),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
