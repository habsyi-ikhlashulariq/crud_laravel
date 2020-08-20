<?php

use Illuminate\Database\Seeder;
use App\Student;

class Studentseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');
        for ($i=0; $i < 20; $i++) { 
            Student::insert([
                    'name' => $faker->name(),
                    'address' => $faker->address(),
                    'email' => $faker->email
            ]);
        }
    }
}
