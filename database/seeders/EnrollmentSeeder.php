<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\AcademicYear;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Semester;
use App\Models\Student;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

         Enrollment::truncate();

         
        // Read existing IDs from the database tables
        $studentIds = Student::pluck('id')->toArray();
        $courseIds = Course::pluck('id')->toArray();
        $semesterIds = Semester::pluck('id')->toArray();
        $academicYearIds = AcademicYear::pluck('id')->toArray();

        // Safety check to ensure data actually exists
        if (empty($studentIds) || empty($courseIds) || empty($semesterIds) || empty($academicYearIds)) {
            $this->command->error('One or more tables are empty. Make sure you have inserted students, courses, semesters, and academic years.');
            return;
        }

        // Loop through the existing students and assign them one course
        foreach ($studentIds as $studentId) {
            // Pick exactly 1 random course ID
            $courseId = $courseIds[array_rand($courseIds)];

            // Ensure a student only has one enrollment record
            Enrollment::firstOrCreate(
                [
                    'student_id' => $studentId, // Unique check: 1 record per student
                ],
                [
                    'course_id'        => $courseId,
                    'semester_id'      => $semesterIds[array_rand($semesterIds)],
                    'academic_year_id' => $academicYearIds[array_rand($academicYearIds)],
                ]
            );
        }

        $this->command->info('Enrollments successfully created with one course per student!');
    }
}