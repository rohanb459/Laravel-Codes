<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i<10; $i++)
        {
            student::create([
                'name'=> fake()->name(),
                'email'=> fake()->unique()->email()
            ]);
        }

        // $json = File::get(path:'database/json/students.json');
        // $students = collect(json_decode($json));

        // $students->each(function($student){
        //     // student::insert($student);
        //     student::create([
        //         'name'=> $student->name,
        //         'email'=>$student->email
        //     ]);
        // });

        // student::create([
        //     'name'=>'Yahoo Baba',
        //     'email'=>'yahoobaba@gmail.com'
        // ]);
    }
}
