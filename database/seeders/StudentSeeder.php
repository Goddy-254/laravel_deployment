<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = \faker\Factory::create();


            for ($i = 0; $i < 100; $i++) {
            Student::create([
                'student_number' => $faker->unique()->numerify('STU-#####'),
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'gender' => $faker->randomElement(['Male', 'Female']),
                'date_of_birth' => $faker->date('Y-m-d', '-18 years'),
                'phone' => $faker->phoneNumber(),
                'email' => $faker->unique()->safeEmail(),
                'address' => $faker->address(),
                'status' => 'active',
            ]);
            

        
    };
}
}


