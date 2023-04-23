<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orhanerday\OpenAi\OpenAi;

class ToolController extends Controller
{
    public function showLessonPlanner()
    {
        return view('dashboard.teacher.lessonPlanner01');
    }

    public function generateLessonPlanner(Request $request)
    {
        $open_ai_key = getenv('OPENAI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);

        $grade = $request->input('grade');
        $title = $request->input('title');
        $description = $request->input('description');


        $complete = $open_ai->completion([
            'model' => 'text-davinci-002',
            'prompt' => 'Hello',
            'temperature' => 0.9,
            'max_tokens' => 150,
            'frequency_penalty' => 0,
            'presence_penalty' => 0.6,
        ]);
    }
}
