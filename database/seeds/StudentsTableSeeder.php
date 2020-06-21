<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
         [
            'name'=>'Emanuele Sanquirico',
            'gender'=>'m',
            'description'=>'Its meeeee',
            'age'=>'22'
         ],
         [
            'name'=>'Gianni Verdi',
            'gender'=>'m',
            'description'=>'Its GIANNIII',
            'age'=>'22'
         ],
         [
            'name'=>'Mario Giallo',
            'gender'=>'m',
            'description'=>'Its MARIO',
            'age'=>'22'
         ]
         ];
  }
}
