@extends('dashboard.teacher.layout')
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Delete Account
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-12 2xl:col-span-4 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5">
                <form method="POST" action="{{ route('teacher.delete-account') }}">
                    @csrf
                    {{-- write a confirmation message --}}
                    @if (session('error'))
                        <div class="px-5 py-3 w-full text-left text-red-600 font-medium  border-red-500 rounded-md mb-4">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="px-5 py-3 w-full  dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">
                            Type your email below to confirm
                        </h2>
                    </div>
                    <div class="px-5 py-3 w-full  border-gray-200 ">
                        <input type="email" class="w-full rounded-md" name="email" value="">
                    </div>
                    <div class="px-5 py-2 border-gray-200 ">
                        <button type="submit" class="btn btn-danger w-26">Confirm Deletion</button>
                </form>
            </div>
        </div>
    </div>
@endsection
