<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;

class PageController extends Controller
{
    public function login()
    {
        return view('partials.login');
    }
    public function register()
    {
        return view('partials.register');
    }
    public function adminDashboard()
    {
        return view('dashboard.admin.home');
    }
    public function teacherDashboard()
    {
        $user = Auth::user();

        return view('dashboard.teacher.home', compact('user'));
    }

    public function teacherAccountInfo()
    {
        $user = Auth::user();
        $plans = Plan::all();
        return view('dashboard.teacher.accountInfo', compact('user', 'plans'));
    }

    public function showHistory()
    {
        $user = Auth::user();
        return view('dashboard.teacher.viewHistory', compact('user'));
    }

    public function showTeacherTools()
    {
        $user = Auth::user();
        return view('dashboard.teacher.teacher-tools', compact('user'));
    }

    public function showRubricGenerator()
    {
        $user = Auth::user();
        return view('dashboard.teacher.rubric-generator', compact('user'));
    }
    public function showClassroomTools()
    {
        $user = Auth::user();
        return view('dashboard.teacher.classroom-tools', compact('user'));
    }

    public function showFreeTools()
    {
        $user = Auth::user();
        return view('dashboard.teacher.free-tools', compact('user'));
    }
}
