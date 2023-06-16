<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tool;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $toolNames = [
            'Lesson Planner',
            'Comprehension Generator',
            'Worksheet Generator',
            'Concept Explainer',
            'Slides Generator',
            'Rubric Generator',
            'Send Support Tool',
            'Ideas Competencias'
        ];

        \DB::table('tools')->truncate();


        foreach ($toolNames as $name) {
            Tool::create([
                'name' => $name,
                'free_status' => 0
            ]);
        }
    }
}
