<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ToolController extends Controller
{
    public function showLessonPlanner()
    {
        return view('dashboard.teacher.lessonPlanner01');
    }
}
