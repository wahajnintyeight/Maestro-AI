<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('dashboard.teacher.home');
    }

    public function teacherAccountInfo()
    {
        $user = Auth::user();
        return view('dashboard.teacher.accountInfo', compact('user'));
    }
}
