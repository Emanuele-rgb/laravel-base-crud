<?php

use Illuminate\Database\Seeder;
use App\Student;
use Faker\Generator as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $students = [
        //  [
        //     'name'=>'Emanuele Sanquirico',
        //     'gender'=>'m',
        //     'description'=>'Its meeeee',
        //     'age'=>'22'
        //  ],
        //  [
        //     'name'=>'Gianni Verdi',
        //     'gender'=>'m',
        //     'description'=>'Its GIANNIII',
        //     'age'=>'22'
        //  ],
        //  [
        //     'name'=>'Mario Giallo',
        //     'gender'=>'m',
        //     'description'=>'Its MARIO',
        //     'age'=>'22'
        //  ]
        //  ];
        //  foreach ($students as $student){
        //      $newStudent = new Student();
        //      $newStudent->fill($student);
        //      $newStudent->save();
        //  } 
        Student::truncate();

        $records = 10;

        for ($i=0; $i < $records; $i++) { 

            $gender = $faker->randomElement(['male', 'female']);
            $genderShort = ($gender == 'male') ? 'm' : 'f';

            $newStudent = new Student();

            $newStudent->name = $faker->name($gender);
            $newStudent->gender = $genderShort;
            $newStudent->description = $faker->paragraph(3, true);
            $newStudent->age = $faker->numberBetween(12,50);

            $newStudent->save();
        }
  }
}
