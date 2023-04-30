<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Auth;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::get();

        return view("plans", compact("plans"));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function show(Plan $plan, Request $request)
    {
        // dd($plan);
        $intent = auth()->user()->createSetupIntent();
        return view("dashboard.teacher.subscription", compact("plan", "intent"));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function subscription(Request $request)
    {
        $plan = Plan::find($request->plan);
        // dd($plan);
        if ($plan->stripe_plan == env('STRIPE_PREMIUM_ANNUAL_PLAN')) {

            $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
                ->create($request->token);
        } else {
            $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
                ->create($request->token);
            $nextSubscriptionDate = now()->addDays(30);
            $subscription->update(['ends_at' => $nextSubscriptionDate]);
        }

        $request->user()->update([
            'is_paid' => 1,
        ]);
        $user = Auth::user();
        $plans = Plan::all();
        return view('dashboard.teacher.accountInfo', compact('user', 'plans'));
    }
}