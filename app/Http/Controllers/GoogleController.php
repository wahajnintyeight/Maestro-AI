<?php

namespace App\Http\Controllers;

use App\Mail\NewUserRegistered;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Str;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('google')->user();

        // do something with the user data (e.g. create a new user, log in, etc.)
        // find or create the user by email
        $authUser = User::where('email', $user->email)->first();
        if (!$authUser) {
            $authUser = User::create([
                'role_id' => 0,
                'is_paid' => 0,
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make(Str::random(24)), // random password
            ]);
        }

        // log in the user
        Auth::login($authUser, true);
        Mail::to('signup@maestroia.com')->send(new NewUserRegistered($authUser));

        // redirect to the dashboard
        return redirect()->route('teacher.dashboard');
    }
}
