<?php

use Illuminate\Database\Seeder;

class PackageSpecsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PackageSpec::class,50)->create()->each(function($u){
            $u->save();
        });
    }
}
