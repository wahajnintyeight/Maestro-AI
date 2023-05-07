@extends('dashboard.teacher.layout')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
@section('content')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Account Settings
    </h2>
</div>
<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->

    <!-- END: Profile Menu -->
    <div class="col-span-12 lg:col-span-12 2xl:col-span-12">
        <!-- BEGIN: Display Information -->
        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Display Information
                </h2>
            </div>
            <div class="p-5">
                <div class="flex flex-col-reverse xl:flex-row flex-col">
                    <div class="flex-1 mt-6 xl:mt-0">
                        <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 2xl:col-span-6">
                                <div>
                                    <label for="update-profile-form-1" class="form-label">Full Name</label>
                                    <input id="update-profile-form-1" type="text" class="form-control"
                                        placeholder="Input text" value="{{ $user->name }}" disabled>
                                </div>

                            </div>
                            <div class="col-span-12 2xl:col-span-6">
                                <div class="mt-3 2xl:mt-0">
                                    <label for="update-profile-form-3" class="form-label">Email</label>
                                    <input id="update-profile-form-1" type="text" class="form-control"
                                        placeholder="Input text" value="{{ $user->email }}" disabled>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END: Display Information -->
        <!-- BEGIN: Personal Information -->
        <div class="intro-y box mt-5">
            <div class="flex items-center justify-start p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex justify-start gap-4 items-center">
                    <h2 class="font-medium text-base mr-auto">
                        Mi suscripción
                    </h2>
                    <button class="btn btn-sm btn-primary w-24 mr-1">{{($user->is_paid == 0) ? 'Free Tier' :
                        "Premium"}}</button>
                </div>
            </div>
            <div class="p-5">
                <div class="intro-y box mt-5">
                    @if ($user->is_paid == 0)
                    {{-- START --}}
                    <div class="xl:container m-auto px-6 py-20 md:px-12 lg:px-20">
                        <div class="m-auto text-center">

                            <div class="mb-4">
                                <ul class="hidden mx-auto text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg shadow sm:flex w-96""
                                            id=" myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                    <li class="mr-2 w-full" role="presentation">
                                        <button
                                            class="inline-block w-full p-4 text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white"
                                            aria-current="page" id="monthly-tab" data-tabs-target="#monthly"
                                            type="button" role="tab" aria-controls="monthly"
                                            aria-selected="true">Monthly</button>
                                    </li>
                                    <li class="w-full" role="presentation">
                                        <button
                                            class="inline-block w-full p-4 bg-white hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                            id="annually-tab" data-tabs-target="#annually" type="button" role="tab"
                                            aria-controls="annually" aria-selected="false">Annual</button>
                                    </li>
                                </ul>
                            </div>
                            <div id="myTabContent">
                                @foreach ($plans as $key => $plan)
                                {{-- Monthly --}}
                                @if ($key == 0)
                                <div class="hidden p-4 mx-auto w-1/4 rounded-lg bg-gray-100 " id="monthly"
                                    role="tabpanel" aria-labelledby="monthly-tab">
                                    <div class="mt-4  items-center ">
                                        <div class="group relative row-start-1 md:col-span-2 lg:w-[36%]">
                                            <div aria-hidden="true"
                                                class="absolute top-0 h-full w-full rounded-3xl  shadow-2xl shadow-gray-600/10  transition duration-500 group-hover:scale-105 lg:group-hover:scale-110">
                                            </div>
                                            <div class="relative space-y-8 p-8">
                                                <h3
                                                    class="text-center text-3xl font-semibold text-gray-700 dark:text-white">
                                                    Monthly</h3>
                                                <div class="overflow-hidden">
                                                    <div class="-mr-20 flex items-end justify-center">
                                                        <div class="flex">
                                                            <span
                                                                class="-ml-6 mt-2 text-3xl font-bold text-primary">$</span>
                                                            <span
                                                                class="leading-0 text-8xl font-bold text-gray-800 dark:text-white">{{
                                                                intval($plan->price) }}</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <span
                                                                class="block text-xl font-bold text-gray-500 dark:text-gray-400">.99</span>
                                                            <span class="block text-xl font-bold text-primary">/
                                                                Month</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul role="list"
                                                    class="m-auto w-max space-y-4 pb-6 text-gray-600 dark:text-gray-300">
                                                    <li class="space-x-2">
                                                        <span class="font-semibold text-primary">&check;</span>
                                                        <span>Multiple Tools</span>
                                                    </li>
                                                    <li class="space-x-2">
                                                        <span class="font-semibold text-primary">&check;</span>
                                                        <span>Complete Access</span>
                                                    </li>
                                                    <li class="space-x-2">
                                                        <span class="font-semibold text-primary">&check;</span>
                                                        <span>Customer Support</span>
                                                    </li>
                                                </ul>
                                                <a href="{{ route('teacher.plans.show', $plan->slug) }}"
                                                    class="btn btn-rounded-primary w-32 py-3 px-4 block mx-auto mt-8">
                                                    Purchase
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="hidden p-4 mx-auto w-1/4 rounded-lg bg-gray-100" id="annually"
                                    role="tabpanel" aria-labelledby="annually-tab">
                                    <div class="mt-4  items-center ">
                                        <div class="group relative row-start-1 md:col-span-2 lg:w-[36%]">
                                            <div aria-hidden="true"
                                                class="absolute top-0 h-full w-full rounded-3xl  shadow-2xl shadow-gray-600/10  transition duration-500 group-hover:scale-105 lg:group-hover:scale-110">
                                            </div>
                                            <div class="relative space-y-8 p-8">
                                                <h3
                                                    class="text-center text-3xl font-semibold text-gray-700 dark:text-white">
                                                    Annually</h3>
                                                <div class="overflow-hidden">
                                                    <div class="-mr-20 flex items-end justify-center">
                                                        <div class="flex">
                                                            <span
                                                                class="-ml-6 mt-2 text-3xl font-bold text-primary">$</span>
                                                            <span
                                                                class="leading-0 text-8xl font-bold text-gray-800 dark:text-white">{{
                                                                intval($plan->price) }}</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <span
                                                                class="block text-xl font-bold text-gray-500 dark:text-gray-400"></span>
                                                            <span class="block text-xl font-bold text-primary">/
                                                                Year</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul role="list"
                                                    class="m-auto w-max space-y-4 pb-6 text-gray-600 dark:text-gray-300">
                                                    <li class="space-x-2">
                                                        <span class="font-semibold text-primary">&check;</span>
                                                        <span>Multiple Tools</span>
                                                    </li>
                                                    <li class="space-x-2">
                                                        <span class="font-semibold text-primary">&check;</span>
                                                        <span>Complete Access</span>
                                                    </li>
                                                    <li class="space-x-2">
                                                        <span class="font-semibold text-primary">&check;</span>
                                                        <span>Customer Support</span>
                                                    </li>
                                                </ul>
                                                <a href="{{ route('teacher.plans.show', $plan->slug) }}"
                                                    class="btn btn-rounded-primary w-32 py-3 px-4 block mx-auto mt-8">
                                                    Purchase
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- END --}}
                    @else
                    <div class="intro-y flex-1 px-5 py-16">
                        <i data-feather="shopping-bag" class="block w-12 h-12 text-primary mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Estás suscrito al plan de pago premium</div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- END: Personal Information -->
    </div>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>