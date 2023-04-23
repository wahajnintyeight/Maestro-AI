@extends('dashboard.teacher.layout')
@section('content')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Lesson Planner Generator
    </h2>
</div>
<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    <div class="col-span-12 lg:col-span-4 2xl:col-span-4 flex lg:block flex-col-reverse">
        <div class="intro-y box mt-5">
            <form method="POST" action="">
                @csrf
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 64 64" id="lesson">
                            <defs>
                                <linearGradient id="a" x1="32" x2="32" y1="63.323" y2="-1.327"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#e93e3a"></stop>
                                    <stop offset=".35" stop-color="#ed683c"></stop>
                                    <stop offset=".7" stop-color="#f3903f"></stop>
                                    <stop offset="1" stop-color="#fdc70c"></stop>
                                </linearGradient>
                                <linearGradient id="b" x1="55" x2="55" y1="63.323" y2="-1.327" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="c" x1="32.667" x2="32.667" y1="63.323" y2="-1.327" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="d" x1="49" x2="49" y1="63.323" y2="-1.327" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="e" x1="44" x2="44" y1="63.323" y2="-1.327" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="f" x1="52" x2="52" y1="63.323" y2="-1.327" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="g" x1="15" x2="15" y1="63.323" y2="-1.327" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="h" x1="10" x2="10" y1="63.323" y2="-1.327" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="i" x1="18" x2="18" y1="63.323" y2="-1.327" xlink:href="#a">
                                </linearGradient>
                            </defs>
                            <path fill="url(#a)"
                                d="M55 2H9a7.008 7.008 0 0 0-7 7v34a7.008 7.008 0 0 0 7 7h13.867l-.75 6H19a3 3 0 0 0 0 6h26a3 3 0 0 0 0-6h-3.117l-.75-6H55a7.008 7.008 0 0 0 7-7V9a7.008 7.008 0 0 0-7-7ZM9 4h46a5.006 5.006 0 0 1 5 5v31H4V9a5.006 5.006 0 0 1 5-5Zm37 55a1 1 0 0 1-1 1H19a1 1 0 0 1 0-2h26a1 1 0 0 1 1 1Zm-6.133-3H24.133l.75-6h14.234ZM55 48H9a5.006 5.006 0 0 1-5-5v-1h56v1a5.006 5.006 0 0 1-5 5Z">
                            </path>
                            <path fill="url(#b)" d="M54 44h2v2h-2z"></path>
                            <path fill="url(#c)"
                                d="m21.2 29.557-1.907 1.907a3 3 0 0 0 4.243 4.243l1.907-1.907 3.239-.648a1 1 0 0 0 .51-.274l16.264-16.263a5 5 0 1 0-7.071-7.071L22.122 25.808a1 1 0 0 0-.274.51Zm.922 4.736a1 1 0 0 1-1.415-1.415l1.414-1.414 1.415 1.415Zm1.557-6.928 3.956 3.956-2.357.472-2.071-2.071ZM39.8 19.444 29.192 30.05l-1.414-1.414 9.193-9.193-1.414-1.414-9.193 9.193-1.414-1.414L35.557 15.2Zm-2.828-5.657.707-.707 4.243 4.242-.708.708Zm7.071-2.829a3.005 3.005 0 0 1 0 4.243l-.707.707-4.243-4.242.707-.708a3 3 0 0 1 4.242 0Z">
                            </path>
                            <path fill="url(#d)" d="M42 34h14v2H42zM42 30h14v2H42z"></path>
                            <path fill="url(#e)" d="M42 26h4v2h-4z"></path>
                            <path fill="url(#f)" d="M48 26h8v2h-8z"></path>
                            <path fill="url(#g)" d="M8 16h14v2H8zM8 12h14v2H8z"></path>
                            <path fill="url(#h)" d="M8 8h4v2H8z"></path>
                            <path fill="url(#i)" d="M14 8h8v2h-8z"></path>
                        </svg>
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">Lesson Planner</div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div>
                        <label for="grade-level" class="form-label">Grade Level</label>
                        <select id="grade-level" name="grade" class="form-select">
                            <option value="Kindergarten">Kindergarten</option>
                            <option value="1st Grade">1st Grade</option>
                            <option value="2nd Grade">2nd Grade</option>
                            <option value="3rd Grade">3rd Grade</option>
                            <option value="4th Grade">4th Grade</option>
                            <option value="5th Grade">5th Grade</option>
                            <option value="6th Grade">6th Grade</option>
                            <option value="7th Grade">7th Grade</option>
                            <option value="8th Grade">8th Grade</option>
                            <option value="9th Grade">9th Grade</option>
                            <option value="10th Grade">10th Grade</option>
                            <option value="11th Grade">11th Grade</option>
                            <option value="12th Grade">12th Grade</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="lesson-title" class="form-label">Lesson Title</label>
                        <input id="lesson-title" name="title" type="text" class="form-control"
                            placeholder="Add a Lesson Title or Topic">
                    </div>
                    <div class="mt-5">
                        <label for="lesson-description" class="form-label">Lesson Description</label>
                        <textarea id="lesson-description"
                            placeholder="Try something like this: Write a lesson plan about how music is used in native american tribes"
                            name="description" class="form-control h-40"></textarea>
                    </div>
                </div>
                <div class="p-5 border-t justify-center mx-auto border-slate-200/60 dark:border-darkmode-400 flex">

                    <button type="button" class="btn btn-primary px-2 py-2">✨Generate Lesson
                        Plan</button>
                </div>
            </form>
        </div>
    </div>
    <!-- END: Profile Menu -->
    <div class="col-span-12 lg:col-span-8 2xl:col-span-8">
        <!-- BEGIN: Display Information -->
        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Generated Results
                </h2>
            </div>
            <div class="p-5">
                <h1 class="text-xl font-medium leading-none py-2">Directions</h1>
                <ul class="list-disc list-inside border-b pb-5 border-slate-200/60 dark:border-darkmode-400"
                    style="list-style-type: disc;">
                    <li class="ml-4">Enter your display name</li>
                    <li class="ml-4">Select your nearest MRT station</li>
                    <li class="ml-4">Click the "Save" button to save your changes</li>
                </ul>
                <div>
                    Results Here
                </div>
            </div>
        </div>


    </div>
</div>
@endsection