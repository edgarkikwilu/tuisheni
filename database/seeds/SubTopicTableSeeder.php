<?php

use Illuminate\Database\Seeder;

class SubTopicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SubTopic::class,50)->create()->each(function($u){
            $u->save();
        });
    }
}
