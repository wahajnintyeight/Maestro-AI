<?php

namespace App\Http\Controllers;

use App\Mail\UserSubscription;
use App\Models\Plan;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::get();

        return view("plans", compact("plans"));
    }

    // create update card view funciton
    public function createUpdateCardView()
    {
        $intent = auth()->user()->createSetupIntent();
        return view('dashboard.teacher.update-card', compact('intent'));
    }

    public function updateCard(Request $request)
    {
        $request->validate([
            'payment_method' => 'required',
        ]);

        $user = $request->user();

        $paymentMethod = $request['payment_method'];
        $user->updateDefaultPaymentMethod($paymentMethod);
        $user->save();
        // return response()->json(['success' => null]);

        return response()->json(['success' => 'Payment method updated successfully!']);
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
        $sub_type = '';
        // dd($plan);
        if ($plan->stripe_plan == env('STRIPE_PREMIUM_ANNUAL_PLAN')) {
            $sub_type = 'Premium Anual';
            $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
                ->create($request->token);
            $nextSubscriptionDate = now()->addYear(1);
            $subscription->update(['ends_at' => $nextSubscriptionDate]);
        } else {
            $sub_type = 'Premium Mensual';

            $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
                ->create($request->token);
            $nextSubscriptionDate = now()->addDays(30);
            $subscription->update(['ends_at' => $nextSubscriptionDate]);
        }



        $request->user()->update([
            'is_paid' => 1,
            'sub_type' => $sub_type
        ]);
        $user = Auth::user();
        $plans = Plan::all();

        Mail::to('signup@maestroia.com')->send(new UserSubscription($user, $sub_type));
        Mail::to('admin@maestroia.com')->send(new UserSubscription($user, $sub_type));


        return redirect()->route('teacher.teacherAccountInfo');
    }

    public function cancelSubscription(Request $request)
    {
        $user = Auth::user();
        $userPlan = $user->subscriptions->last()->name;
        $user->subscription($userPlan)->cancelNow();
        $user->update([
            'is_paid' => 0,
            'sub_type' => ''
        ]);
        $plans = Plan::all();
        return view('dashboard.teacher.accountInfo', compact('user', 'plans'));
    }

    public function viewCancelSubscription(Request $request)
    {
        //get current authenticated user, and fetch the subscription
        $user = Auth::user();
        //fetch his subscription from stripe
        // dd($user);
        $subscription = $user->subscription();
        return view('dashboard.teacher.cancel-subscription');
    }
}
