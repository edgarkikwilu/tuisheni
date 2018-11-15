<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Subject::insert([
            'name'=>'mathematics',
            'priority'=>10
        ]);
        \App\Subject::insert([
            'name'=>'english',
            'priority'=>10
        ]);
        \App\Subject::insert([
            'name'=>'physics',
            'priority'=>8
        ]);
        \App\Subject::insert([
            'name'=>'chemistry',
            'priority'=>6
        ]);
        \App\Subject::insert([
            'name'=>'geography',
            'priority'=>5
        ]);
        \App\Subject::insert([
            'name'=>'kiswahili',
            'priority'=>10
        ]);
        \App\Subject::insert([
            'name'=>'civics',
            'priority'=>9
        ]);
        \App\Subject::insert([
            'name'=>'history',
            'priority'=>6
        ]);
    }
}
