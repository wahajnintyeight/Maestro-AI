<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;
use App\Models\User;

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

    public function adminViewMembers()
    {
        $users = User::all();
        return view('dashboard.admin.viewMembers', compact('users'));
    }

    public function viewDeletePage()
    {
        return view('dashboard.teacher.delete-teacher');
    }

    public function deleteTeacher(Request $request)
    {
        $user = Auth::user();
        if ($user->email == $request->input('email')) {
            $user->delete();
            return redirect()->route('login');
        } else {
            // dd($user->email);
            return redirect()->back()->with('error', 'Email does not match');
        }
    }

    public function deleteUser(User $user)
    {
        // Delete the user
        $user->delete();

        // Redirect back to the previous page
        return redirect()->back();
    }

    public function toggleStatus(User $user)
    {
        // Toggle the is_paid status
        $user->is_paid = !$user->is_paid;

        // Save the updated status
        $user->save();

        // Redirect back to the previous page
        return redirect()->back();
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