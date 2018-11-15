<?php

use Illuminate\Database\Seeder;

class TopStudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TopStudent::class,50)->create()->each(function($u){
            $u->save();
        });
    }
}
