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
                        <button type="button" class="btn btn-primary w-20 mt-5">Save</button>
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
                <div class="grid grid-cols-12 gap-x-5">
                    <div class="col-span-12 xl:col-span-6">
                        <div>
                            <label for="update-profile-form-6" class="form-label">Email</label>
                            <input id="update-profile-form-6" type="text" class="form-control" placeholder="Input text"
                                value="bradpitt@left4code.com" disabled>
                        </div>
                        <div class="mt-3">
                            <label for="update-profile-form-7" class="form-label">Name</label>
                            <input id="update-profile-form-7" type="text" class="form-control" placeholder="Input text"
                                value="Brad Pitt" disabled>
                        </div>
                        <div class="mt-3">
                            <label for="update-profile-form-8" class="form-label">ID Type</label>
                            <select id="update-profile-form-8" class="form-select">
                                <option>IC</option>
                                <option>FIN</option>
                                <option>Passport</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="update-profile-form-9" class="form-label">ID Number</label>
                            <input id="update-profile-form-9" type="text" class="form-control" placeholder="Input text"
                                value="357821204950001">
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-6">
                        <div class="mt-3 xl:mt-0">
                            <label for="update-profile-form-10" class="form-label">Phone Number</label>
                            <input id="update-profile-form-10" type="text" class="form-control" placeholder="Input text"
                                value="65570828">
                        </div>
                        <div class="mt-3">
                            <label for="update-profile-form-11" class="form-label">Address</label>
                            <input id="update-profile-form-11" type="text" class="form-control" placeholder="Input text"
                                value="10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore">
                        </div>
                        <div class="mt-3">
                            <label for="update-profile-form-12" class="form-label">Bank Name</label>
                            <select id="update-profile-form-12" data-search="true" class="tom-select w-full">
                                <option value="1">SBI - STATE BANK OF INDIA</option>
                                <option value="1">CITI BANK - CITI BANK</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="update-profile-form-13" class="form-label">Bank Account</label>
                            <input id="update-profile-form-13" type="text" class="form-control" placeholder="Input text"
                                value="DBS Current 011-903573-0">
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="button" class="btn btn-primary w-20 mr-auto">Save</button>
                    <a href="" class="text-danger flex items-center"> <i data-feather="trash-2"
                            class="w-4 h-4 mr-1"></i> Delete Account </a>
                </div>
            </div>
        </div>
        <!-- END: Personal Information -->
    </div>
</div>

@endsection