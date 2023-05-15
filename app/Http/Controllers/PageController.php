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

    public function viewFAQ()
    {
        return view('dashboard.faq');
    }

    public function switchToAdmin()
    {
        $user = auth()->user();

        // Toggle the role_id (0 or 1)
        $user->role_id = !$user->role_id;

        // Save the updated user
        $user->save();

        // Redirect to the desired page
        return redirect()->back()->with('success', 'Role switched successfully.');
    }

    public function adminDashboard()
    {
        $userCount = count(User::all());
        $paidUsers = count(User::where('is_paid', 1)->get());
        return view('dashboard.admin.home', compact('userCount', 'paidUsers'));
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

        $started_at = '';
        $ended_at = '';

        foreach ($user->subscriptions as $subscription) {
            $started_at = $subscription->created_at->format('Y-m-d');  // Get the created_at timestamp
            $ended_at = $subscription->ends_at->format('Y-m-d');  // Get the ends_at timestamp
        }
        return view('dashboard.teacher.accountInfo', compact('user', 'plans', 'started_at', 'ended_at'));
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
