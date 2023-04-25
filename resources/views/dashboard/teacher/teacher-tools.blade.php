@extends('dashboard.teacher.layout')
@section('content')
<!-- BEGIN: Top Bar -->

<!-- END: Top Bar -->
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-12">
        <div class="grid grid-cols-12 gap-6">

            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Teacher Tools
                    </h2>

                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        @if($user->is_paid == 1)
                        <a href="{{ route('teacher.showLessonPlanner') }}">
                            <div class="report-box zoom-in">
                                <div class="box p-5 py-10">
                                    <div class="flex">
                                        <i data-feather="cloud-lightning" class="report-box__icon text-primary"></i>
                                        <div class="ml-auto">

                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">Lesson Planner</div>
                                    <div class="text-base text-slate-500 mt-1">Organiza tus lecciones con precisión y
                                        facilidad, gracias a la IA.</div>
                                </div>
                            </div>
                        </a>
                        @else
                        <div class="report-box">
                            <div class="box p-5 py-6">
                                <div class="flex">
                                    <i data-feather="cloud-lightning" class="report-box__icon text-primary"></i>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Lesson Planner</div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1">Want access? <span
                                            class="font-bold">Upgrade to Premium</span>
                                    </div>
                                    <a href="{{route('teacher.teacherAccountInfo')}}"
                                        class="btn rounded-md py-3 px-4 block mx-auto">Upgrade</a>
                                </div>

                            </div>
                        </div>
                        @endif
                    </div>


                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        @if($user->is_paid == 1)
                        <div class="report-box zoom-in">
                            <div class="box p-5 py-10">
                                <div class="flex">
                                    <i data-feather="wind" class="report-box__icon text-primary"></i>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">Rubric Generator</div>
                                <div class="text-base text-slate-500 mt-1">Crea hojas de trabajo personalizadas con la
                                    ayuda de la IA.</div>
                            </div>
                        </div>
                        @else
                        <div class="report-box">
                            <div class="box p-5 py-6">
                                <div class="flex">
                                    <i data-feather="cloud-lightning" class="report-box__icon text-primary"></i>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Rubric Generator</div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1">Want access? <span
                                            class="font-bold">Upgrade to Premium</span>
                                    </div>
                                    <a href="{{route('teacher.teacherAccountInfo')}}"
                                        class="btn rounded-md py-3 px-4 block mx-auto">Upgrade</a>
                                </div>

                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        @if($user->is_paid == 1)
                        <a href="{{route('teacher.showSlidesGenerator')}}">
                            <div class="report-box zoom-in">
                                <div class="box p-5 py-10">
                                    <div class="flex">
                                        <i data-feather="zap" class="report-box__icon text-primary"></i>
                                        <div class="ml-auto">

                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">Slides Generator</div>
                                    <div class="text-base text-slate-500 mt-1">Crea hojas de trabajo personalizadas con
                                        la
                                        ayuda de la IA.</div>
                                </div>
                            </div>
                        </a>
                        @else
                        <div class="report-box">
                            <div class="box p-5 py-6">
                                <div class="flex">
                                    <i data-feather="cloud-lightning" class="report-box__icon text-primary"></i>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Slides Generator</div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1">Want access? <span
                                            class="font-bold">Upgrade to Premium</span>
                                    </div>
                                    <a href="{{route('teacher.teacherAccountInfo')}}"
                                        class="btn rounded-md py-3 px-4 block mx-auto">Upgrade</a>
                                </div>

                            </div>
                        </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection