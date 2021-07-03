<?php namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CoursesSeeder extends Seeder
{

    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            DB::table('courses')->insert([
                'course_name' => Str::random(10),
                'course_semaster' => Str::random(10),
                'course_year' => mt_rand(2016, 2021),
                'subject_id' => mt_rand(1, 20),
                'status' => 1,
            ]);
        }
    }
}