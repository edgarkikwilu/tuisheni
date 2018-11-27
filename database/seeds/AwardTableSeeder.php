<?php

use Illuminate\Database\Seeder;

class AwardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Award::class,100)->create()->each(function($u){
            $u->save();
        });
    }
}
