<?php

use Illuminate\Database\Seeder;

class QuizQuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\QuizQuestion::class,50)->create()->each(function($u){
            $u->save();
        });
    }
}
