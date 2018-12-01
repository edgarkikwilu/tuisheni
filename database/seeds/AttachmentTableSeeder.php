<?php

use Illuminate\Database\Seeder;

class AttachmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Attachement::class,400)->create()->each(function($u){
            $u->save();
        });
    }
}
