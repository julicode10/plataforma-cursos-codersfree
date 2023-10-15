<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Image;
use App\Models\Requirement;
use App\Models\Goal;
use App\Models\Audience;
use App\Models\Section;
use App\Models\Lesson;
use App\Models\Description;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::factory(100)->create()->each(function($course){
            Image::factory(1)->create([
                'imageable_id' => $course->id,
                'imageable_type' => Course::class
            ]);

            Requirement::factory(4)->create([
                'course_id' => $course->id
            ]);

            Goal::factory(4)->create([
                'course_id' => $course->id
            ]);

            Audience::factory(4)->create([
                'course_id' => $course->id
            ]);

            Section::factory(4)->create(['course_id' => $course->id])->each(function($section){
                Lesson::factory(4)->create(['section_id' => $section->id])->each(function($lesson){
                    Description::factory(1)->create(['lesson_id' => $lesson->id]);
                });
            });
        });
    }
}
