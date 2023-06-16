<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;
use App\Models\Tool;
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

    public function exportCsv()
    {
        // Get users data
        $users = User::all();

        // Create a file
        $fileName = 'users.csv';
        $file = fopen($fileName, 'w');

        // Define the column names
        $fields = array('ID', 'Name', 'Email', 'Join Date', 'Payment Status');
        fputcsv($file, $fields);

        // Add the data
        foreach ($users as $user) {
            $row['id'] = $user->id;
            $row['name'] = $user->name;
            $row['email'] = $user->email;
            $row['created_at'] = $user->created_at;
            $row['is_paid'] = $user->is_paid == 1 ? 'Paid' : 'Unpaid';

            fputcsv($file, array($row['id'], $row['name'], $row['email'], $row['created_at'], $row['is_paid']));
        }

        fclose($file);

        // Download the file
        return response()->download($fileName);
    }


    public function adminViewTools()
    {
        $tools = Tool::all();
        return view('dashboard.admin.adminViewTools', compact('tools'));
    }

    public function viewContacts()
    {
        $contacts = Contact::all();
        return view('dashboard.admin.contacts', compact('contacts'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('view-contacts')->with('status', 'Contact deleted successfully!');
    }

    public function toggleToolStatus(Tool $tool)
    {
        // Toggle the free_status of the tool
        $tool->free_status = !$tool->free_status;
        $tool->save();

        // Redirect back or perform any other action as needed
        return redirect()->back()->with('success', 'Tool status toggled successfully.');
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

        $lessonPlanner = Tool::where('name', 'Lesson Planner')->first();
        $comprehensionGenerator = Tool::where('name', 'Comprehension Generator')->first();
        $worksheetGenerator = Tool::where('name', 'Worksheet Generator')->first();
        $conceptExplainer = Tool::where('name', 'Concept Explainer')->first();
        $slidesGenerator = Tool::where('name', 'Slides Generator')->first();
        $rubricGenerator = Tool::where('name', 'Rubric Generator')->first();
        $sendSupport = Tool::where('name', 'Send Support Tool')->first();
        $ideasTool = Tool::where('name', 'Ideas Competencias')->first();

        return view('dashboard.teacher.home', compact('user', 'lessonPlanner', 'comprehensionGenerator', 'worksheetGenerator', 'conceptExplainer', 'slidesGenerator', 'rubricGenerator', 'sendSupport', 'ideasTool'));
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
        $histories = $user->histories->sortByDesc('created_at');
        return view('dashboard.teacher.viewHistory', compact('histories', 'user'));
    }


    public function showTeacherTools()
    {

        $user = Auth::user();
        $tools = Tool::all();
        $lessonPlanner = Tool::where('name', 'Lesson Planner')->first();
        $comprehensionGenerator = Tool::where('name', 'Comprehension Generator')->first();
        $worksheetGenerator = Tool::where('name', 'Worksheet Generator')->first();
        $conceptExplainer = Tool::where('name', 'Concept Explainer')->first();
        $slidesGenerator = Tool::where('name', 'Slides Generator')->first();
        $rubricGenerator = Tool::where('name', 'Rubric Generator')->first();

        $free_tools_available = 0;
        foreach ($tools as $tool) {
            if ($tool->free_status == 1) {
                $free_tools_available = 1;
                break;
            }
        }

        return view('dashboard.teacher.teacher-tools', compact('user', 'lessonPlanner', 'comprehensionGenerator', 'worksheetGenerator', 'conceptExplainer', 'slidesGenerator', 'rubricGenerator', 'free_tools_available'));
    }

    public function showRubricGenerator()
    {
        $user = Auth::user();
        return view('dashboard.teacher.rubric-generator', compact('user'));
    }
    public function showClassroomTools()
    {
        $user = Auth::user();
        $tools = Tool::all();
        $lessonPlanner = Tool::where('name', 'Lesson Planner')->first();
        $comprehensionGenerator = Tool::where('name', 'Comprehension Generator')->first();
        $worksheetGenerator = Tool::where('name', 'Worksheet Generator')->first();
        $conceptExplainer = Tool::where('name', 'Concept Explainer')->first();
        $slidesGenerator = Tool::where('name', 'Slides Generator')->first();
        $rubricGenerator = Tool::where('name', 'Rubric Generator')->first();

        $free_tools_available = 0;
        foreach ($tools as $tool) {
            if ($tool->free_status == 1) {
                $free_tools_available = 1;
                break;
            }
        }

        return view('dashboard.teacher.classroom-tools', compact('user', 'lessonPlanner', 'comprehensionGenerator', 'worksheetGenerator', 'conceptExplainer', 'slidesGenerator', 'rubricGenerator', 'free_tools_available'));
    }

    public function showFreeTools()
    {
        $user = Auth::user();
        $tools = Tool::all();

        $lessonPlanner = Tool::where('name', 'Lesson Planner')->first();
        $comprehensionGenerator = Tool::where('name', 'Comprehension Generator')->first();
        $worksheetGenerator = Tool::where('name', 'Worksheet Generator')->first();
        $conceptExplainer = Tool::where('name', 'Concept Explainer')->first();
        $slidesGenerator = Tool::where('name', 'Slides Generator')->first();
        $rubricGenerator = Tool::where('name', 'Rubric Generator')->first();

        $free_tools_available = 0;
        foreach ($tools as $tool) {
            if ($tool->free_status == 1) {
                $free_tools_available = 1;
                break;
            }
        }

        return view('dashboard.teacher.free-tools', compact('user', 'lessonPlanner', 'comprehensionGenerator', 'worksheetGenerator', 'conceptExplainer', 'slidesGenerator', 'rubricGenerator', 'free_tools_available'));
    }
}
