<?php

use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Package::insert([
            'title'=>'light',
            'price'=>4000,
            'duration'=>'1 month'
        ]);
        \App\Package::insert([
            'title'=>'gold',
            'price'=>7000,
            'duration'=>'1 month'
        ]);
        \App\Package::insert([
            'title'=>'premium',
            'price'=>10000,
            'duration'=>'1 month'
        ]);
    }
}
