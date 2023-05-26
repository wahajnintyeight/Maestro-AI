<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Monthly',
                'slug' => 'monthly',
                'stripe_plan' => env('STRIPE_BASIC_PLAN'),
                'price' => 5.99,
                'description' => 'Monthly'
            ],
            [
                'name' => 'Annual',
                'slug' => 'annual',
                'stripe_plan' => env('STRIPE_PREMIUM_PLAN'),
                'price' => 60.00,
                'description' => 'Annual'
            ]
        ];

        \DB::table('plans')->truncate();

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
