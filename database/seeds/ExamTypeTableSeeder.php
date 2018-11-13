<?php

use Illuminate\Database\Seeder;

class ExamTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\ExamType::insert([
            'name'=>'weekly',
            'points'=>10
        ]);
        App\ExamType::insert([
            'name'=>'monthly',
            'points'=>40
        ]);
        App\ExamType::insert([
            'name'=>'terminal',
            'points'=>60
        ]);
        App\ExamType::insert([
            'name'=>'annual',
            'points'=>80
        ]);
        App\ExamType::insert([
            'name'=>'necta',
            'points'=>100
        ]);
    }
}