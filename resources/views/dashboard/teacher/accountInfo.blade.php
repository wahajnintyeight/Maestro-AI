@extends('dashboard.teacher.layout')
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
                                        placeholder="Input text" value="{{$user->name}}" disabled>
                                </div>

                            </div>
                            <div class="col-span-12 2xl:col-span-6">
                                <div class="mt-3 2xl:mt-0">
                                    <label for="update-profile-form-3" class="form-label">Email</label>
                                    <input id="update-profile-form-1" type="text" class="form-control"
                                        placeholder="Input text" value="{{$user->email}}" disabled>
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
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Subscription Status
                </h2>
            </div>
            <div class="p-5">
                <div class="intro-y box flex flex-col lg:flex-row mt-5">
                    <div class="intro-y flex-1 px-5 py-16">
                        <i data-feather="credit-card" class="block w-12 h-12 text-primary mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Free Plan</div>
                        <div class="text-slate-600 dark:text-slate-500 text-center mt-5"> Few Tools <span
                                class="mx-1">•</span> Limited Access

                        </div>

                        <div class="flex justify-center">
                            <div class="relative text-5xl font-semibold mt-8 mx-auto"> <span
                                    class="absolute text-2xl top-0 left-0 -ml-4">$</span> 0 </div>
                        </div>
                        @if ($user->is_paid == 0)
                        <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8" disabled>
                            CURRENT
                        </button>
                        @endif
                    </div>

                    <div class="intro-y flex-1 px-5 py-16">
                        <i data-feather="shopping-bag" class="block w-12 h-12 text-primary mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Premium Tier</div>
                        <div class="text-slate-600 dark:text-slate-500 text-center mt-5"> Multiple Tools <span
                                class="mx-1">•</span> Complete Access
                            <span class="mx-1">•</span> Customer Support
                        </div>

                        <div class="flex justify-center">
                            <div class="relative text-5xl font-semibold mt-8 mx-auto"> <span
                                    class="absolute text-2xl top-0 left-0 -ml-4">$</span> 120 </div>
                        </div>
                        <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">
                            PURCHASE
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Personal Information -->
    </div>
</div>

@endsection