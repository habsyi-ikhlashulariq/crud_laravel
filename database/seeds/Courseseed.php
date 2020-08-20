<?php

use App\Course;
use Illuminate\Database\Seeder;

class Courseseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker  = Faker\Factory::create('id_ID');

        for ($i=0; $i < 20 ; $i++) { 
            Course::insert([
                'title' => $faker->name
            ]);
        }
    }
}
