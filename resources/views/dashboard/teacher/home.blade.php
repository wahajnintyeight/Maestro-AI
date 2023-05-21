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
                        Todas Las Herramientas
                    </h2>

                </div>

                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        @if ($lessonPlanner->free_status == 1 || $user->is_paid == 1)
                        <a href="{{ route('teacher.showLessonPlanner') }}">
                            <div style="height: 100% !important;" class="report-box zoom-in">
                                <div class="box p-5 h-full py-10">
                                    <div class="flex">
                                        <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                            id="OnlineLesson">
                                            <g data-name="online lesson" fill="#595bd4" class="color000000 svgShape">
                                                <path
                                                    d="M24 23a1 1 0 0 1-1-1V8a3.003 3.003 0 0 1 3-3h9a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1h-9a1 1 0 0 0-1 1 1 1 0 0 1-1 1Zm2-16a1 1 0 0 0-1 1v11.17a2.998 2.998 0 0 1 1-.17h8V7Z"
                                                    fill="#595bd4" class="color000000 svgShape"></path>
                                                <path
                                                    d="M31 11h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2zm0 3h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2zm0 3h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2zm-7 6a1 1 0 0 1-1-1 1 1 0 0 0-1-1h-9a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h9a3.003 3.003 0 0 1 3 3v14a1 1 0 0 1-1 1zm-10-4h8a2.998 2.998 0 0 1 1 .17V8a1 1 0 0 0-1-1h-8z"
                                                    fill="#595bd4" class="color000000 svgShape"></path>
                                                <path
                                                    d="M20 11h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2zm0 3h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2zm0 3h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2z"
                                                    fill="#595bd4" class="color000000 svgShape"></path>
                                                <path
                                                    d="M24 27a3.006 3.006 0 0 1-2.83-2H10a2.003 2.003 0 0 1-2-2V9.042a2.003 2.003 0 0 1 2-2h3a1 1 0 0 1 0 2h-3V23h12a1 1 0 0 1 1 1 1 1 0 0 0 2 0 1 1 0 0 1 1-1h12V9h-3a1 1 0 0 1 0-2h3a2.003 2.003 0 0 1 2 2v14a2.003 2.003 0 0 1-2 2H26.83A3.006 3.006 0 0 1 24 27Z"
                                                    fill="#595bd4" class="color000000 svgShape"></path>
                                                <path
                                                    d="M44 35H4a1 1 0 0 1-1-1V10a2.003 2.003 0 0 1 2-2h4a1 1 0 0 1 0 2H5v23h38V10h-4a1 1 0 0 1 0-2h4a2.003 2.003 0 0 1 2 2v24a1 1 0 0 1-1 1Z"
                                                    fill="#595bd4" class="color000000 svgShape"></path>
                                                <path
                                                    d="M45 43H3a1 1 0 0 1-.992-.876l-1-8A.999.999 0 0 1 2 33h44a.999.999 0 0 1 .992 1.124l-1 8A1 1 0 0 1 45 43ZM3.883 41h40.234l.75-6H3.133Z"
                                                    fill="#595bd4" class="color000000 svgShape"></path>
                                                <path
                                                    d="M29 40H19a1 1 0 0 1-.97-.758l-1-4A1 1 0 0 1 18 34h12a1 1 0 0 1 .97 1.242l-1 4A1 1 0 0 1 29 40Zm-9.219-2h8.438l.5-2H19.28Z"
                                                    fill="#595bd4" class="color000000 svgShape"></path>
                                            </g>
                                        </svg>

                                        <div class="ml-auto">

                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">Planificador de situaciones de
                                        aprendizaje</div>
                                    <div class="text-base text-slate-500 mt-1">Con tan solo unos clics, puedes
                                        generar
                                        ideas para una clase</div>
                                </div>
                            </div>
                        </a>
                        @else
                        <div style="height: 100% !important;" class="report-box">
                            <div class="box p-5 h-full py-6">
                                <div class="flex">
                                    <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                        id="OnlineLesson">
                                        <g data-name="online lesson" fill="#595bd4" class="color000000 svgShape">
                                            <path
                                                d="M24 23a1 1 0 0 1-1-1V8a3.003 3.003 0 0 1 3-3h9a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1h-9a1 1 0 0 0-1 1 1 1 0 0 1-1 1Zm2-16a1 1 0 0 0-1 1v11.17a2.998 2.998 0 0 1 1-.17h8V7Z"
                                                fill="#595bd4" class="color000000 svgShape"></path>
                                            <path
                                                d="M31 11h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2zm0 3h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2zm0 3h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2zm-7 6a1 1 0 0 1-1-1 1 1 0 0 0-1-1h-9a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h9a3.003 3.003 0 0 1 3 3v14a1 1 0 0 1-1 1zm-10-4h8a2.998 2.998 0 0 1 1 .17V8a1 1 0 0 0-1-1h-8z"
                                                fill="#595bd4" class="color000000 svgShape"></path>
                                            <path
                                                d="M20 11h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2zm0 3h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2zm0 3h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2z"
                                                fill="#595bd4" class="color000000 svgShape"></path>
                                            <path
                                                d="M24 27a3.006 3.006 0 0 1-2.83-2H10a2.003 2.003 0 0 1-2-2V9.042a2.003 2.003 0 0 1 2-2h3a1 1 0 0 1 0 2h-3V23h12a1 1 0 0 1 1 1 1 1 0 0 0 2 0 1 1 0 0 1 1-1h12V9h-3a1 1 0 0 1 0-2h3a2.003 2.003 0 0 1 2 2v14a2.003 2.003 0 0 1-2 2H26.83A3.006 3.006 0 0 1 24 27Z"
                                                fill="#595bd4" class="color000000 svgShape"></path>
                                            <path
                                                d="M44 35H4a1 1 0 0 1-1-1V10a2.003 2.003 0 0 1 2-2h4a1 1 0 0 1 0 2H5v23h38V10h-4a1 1 0 0 1 0-2h4a2.003 2.003 0 0 1 2 2v24a1 1 0 0 1-1 1Z"
                                                fill="#595bd4" class="color000000 svgShape"></path>
                                            <path
                                                d="M45 43H3a1 1 0 0 1-.992-.876l-1-8A.999.999 0 0 1 2 33h44a.999.999 0 0 1 .992 1.124l-1 8A1 1 0 0 1 45 43ZM3.883 41h40.234l.75-6H3.133Z"
                                                fill="#595bd4" class="color000000 svgShape"></path>
                                            <path
                                                d="M29 40H19a1 1 0 0 1-.97-.758l-1-4A1 1 0 0 1 18 34h12a1 1 0 0 1 .97 1.242l-1 4A1 1 0 0 1 29 40Zm-9.219-2h8.438l.5-2H19.28Z"
                                                fill="#595bd4" class="color000000 svgShape"></path>
                                        </g>
                                    </svg>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Planificador de situaciones de
                                    aprendizaje
                                </div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1"><span class="font-bold">¡Hazte
                                            Premium!</span>
                                    </div>
                                    <a href="{{ route('teacher.teacherAccountInfo') }}"
                                        class="btn rounded-md py-3 px-4 block mx-auto">Upgrade</a>
                                </div>

                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        @if ($comprehensionGenerator->free_status == 1 || $user->is_paid == 1)
                        <a href="{{ route('teacher.comprehension.form') }}">
                            <div style="height: 100% !important;" class="report-box zoom-in">
                                <div class="box p-5 h-full py-10">
                                    <div class="flex">
                                        <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                            viewBox="0 0 128 128" id="Teacher">
                                            <path
                                                d="M81.195 27.936h-9.36A15.898 15.898 0 0 1 74 35.94c0 .291-.028.576-.044.863zM40 62.958v8.005h4v-8.005a2 2 0 1 0-4 0zm38.045-5.032L95.417 35.62a5.743 5.743 0 0 0 1.373-3.731 5.899 5.899 0 0 0-2.121-4.522 5.992 5.992 0 0 0-8.378.653l-13 15.926h-1.456a16.1 16.1 0 0 1-3.288 4.003h5.693a2 2 0 0 0 1.549-.735L89.349 30.6a1.966 1.966 0 0 1 2.745-.17 1.883 1.883 0 0 1 .696 1.459 1.744 1.744 0 0 1-.426 1.145 1.444 1.444 0 0 0-.071.086l-17.83 22.894a2 2 0 0 0-.423 1.23v.028c.02 2.206.008 12.014.005 13.692h4"
                                                fill="#595bd4" class="color000000 svgShape"></path>
                                            <path
                                                d="M44 43.946a12.017 12.017 0 0 0-12 12.008v15.01h4v-15.01a8.012 8.012 0 0 1 8-8.005h3.453a16.1 16.1 0 0 1-3.288-4.003zm14-20.013a12.008 12.008 0 1 0 12 12.008 12.017 12.017 0 0 0-12-12.008z"
                                                fill="#595bd4" class="color000000 svgShape"></path>
                                            <path
                                                d="M122 0H6a6.008 6.008 0 0 0-6 6.004V62.04a6.008 6.008 0 0 0 6 6.004l22-.151v-11.94a16.023 16.023 0 0 1 14.546-15.936 15.756 15.756 0 0 1 1.619-12.081H10a2.001 2.001 0 0 1 0-4.003h37.453A15.91 15.91 0 0 1 58 19.931H10a2.001 2.001 0 0 1 0-4.003h62a2.001 2.001 0 0 1 0 4.003H58a15.91 15.91 0 0 1 10.547 4.002h16.29a10.017 10.017 0 0 1 12.412.376 9.878 9.878 0 0 1 3.541 7.58 9.764 9.764 0 0 1-2.293 6.285L82.052 59.292c.008 1.924.006 4.235-.002 6.687v1.543l4.985-.034c-.011-.176-.035-.349-.035-.527v-4.003a8.012 8.012 0 0 1 8-8.005h18a8.012 8.012 0 0 1 8 8.005v.585a8.035 8.035 0 0 1 4.045 3.664A5.438 5.438 0 0 0 128 62.04V6.004A6.008 6.008 0 0 0 122 0ZM34 11.926H10a2.001 2.001 0 0 1 0-4.003h24a2.001 2.001 0 0 1 0 4.003Z"
                                                fill="#595bd4" class="color000000 svgShape"></path>
                                            <path
                                                d="M124 74.966h-2v-4.002a4.001 4.001 0 0 0-4-4.003h-1v-4.003a4.001 4.001 0 0 0-4-4.002H95a4.001 4.001 0 0 0-4 4.002v4.003a4.001 4.001 0 0 0 4 4.002h1v4.003H4a4.001 4.001 0 0 0-4 4.003v4.002a4.001 4.001 0 0 0 4 4.003h2v39.025a2 2 0 1 0 4 0V86.974h108v39.025a2 2 0 1 0 4 0V86.974h2a4.001 4.001 0 0 0 4-4.003V78.97a4.001 4.001 0 0 0-4-4.003Zm-6-4.002v4.002h-18v-4.002ZM95 66.96v-4.003h18v4.003Zm29 16.01H4V78.97h120Z"
                                                fill="#595bd4" class="color000000 svgShape"></path>
                                        </svg>
                                        <div class="ml-auto">

                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">Comprensión lectora</div>
                                    <div class="text-base text-slate-500 mt-1">Genera preguntas con precisión y
                                        rapidez,
                                        gracias a la IA.</div>
                                </div>
                            </div>
                        </a>
                        @else
                        <div style="height: 100% !important;" class="report-box">
                            <div class="box p-5 h-full py-6">
                                <div class="flex">
                                    <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                        viewBox="0 0 128 128" id="Teacher">
                                        <path
                                            d="M81.195 27.936h-9.36A15.898 15.898 0 0 1 74 35.94c0 .291-.028.576-.044.863zM40 62.958v8.005h4v-8.005a2 2 0 1 0-4 0zm38.045-5.032L95.417 35.62a5.743 5.743 0 0 0 1.373-3.731 5.899 5.899 0 0 0-2.121-4.522 5.992 5.992 0 0 0-8.378.653l-13 15.926h-1.456a16.1 16.1 0 0 1-3.288 4.003h5.693a2 2 0 0 0 1.549-.735L89.349 30.6a1.966 1.966 0 0 1 2.745-.17 1.883 1.883 0 0 1 .696 1.459 1.744 1.744 0 0 1-.426 1.145 1.444 1.444 0 0 0-.071.086l-17.83 22.894a2 2 0 0 0-.423 1.23v.028c.02 2.206.008 12.014.005 13.692h4"
                                            fill="#595bd4" class="color000000 svgShape"></path>
                                        <path
                                            d="M44 43.946a12.017 12.017 0 0 0-12 12.008v15.01h4v-15.01a8.012 8.012 0 0 1 8-8.005h3.453a16.1 16.1 0 0 1-3.288-4.003zm14-20.013a12.008 12.008 0 1 0 12 12.008 12.017 12.017 0 0 0-12-12.008z"
                                            fill="#595bd4" class="color000000 svgShape"></path>
                                        <path
                                            d="M122 0H6a6.008 6.008 0 0 0-6 6.004V62.04a6.008 6.008 0 0 0 6 6.004l22-.151v-11.94a16.023 16.023 0 0 1 14.546-15.936 15.756 15.756 0 0 1 1.619-12.081H10a2.001 2.001 0 0 1 0-4.003h37.453A15.91 15.91 0 0 1 58 19.931H10a2.001 2.001 0 0 1 0-4.003h62a2.001 2.001 0 0 1 0 4.003H58a15.91 15.91 0 0 1 10.547 4.002h16.29a10.017 10.017 0 0 1 12.412.376 9.878 9.878 0 0 1 3.541 7.58 9.764 9.764 0 0 1-2.293 6.285L82.052 59.292c.008 1.924.006 4.235-.002 6.687v1.543l4.985-.034c-.011-.176-.035-.349-.035-.527v-4.003a8.012 8.012 0 0 1 8-8.005h18a8.012 8.012 0 0 1 8 8.005v.585a8.035 8.035 0 0 1 4.045 3.664A5.438 5.438 0 0 0 128 62.04V6.004A6.008 6.008 0 0 0 122 0ZM34 11.926H10a2.001 2.001 0 0 1 0-4.003h24a2.001 2.001 0 0 1 0 4.003Z"
                                            fill="#595bd4" class="color000000 svgShape"></path>
                                        <path
                                            d="M124 74.966h-2v-4.002a4.001 4.001 0 0 0-4-4.003h-1v-4.003a4.001 4.001 0 0 0-4-4.002H95a4.001 4.001 0 0 0-4 4.002v4.003a4.001 4.001 0 0 0 4 4.002h1v4.003H4a4.001 4.001 0 0 0-4 4.003v4.002a4.001 4.001 0 0 0 4 4.003h2v39.025a2 2 0 1 0 4 0V86.974h108v39.025a2 2 0 1 0 4 0V86.974h2a4.001 4.001 0 0 0 4-4.003V78.97a4.001 4.001 0 0 0-4-4.003Zm-6-4.002v4.002h-18v-4.002ZM95 66.96v-4.003h18v4.003Zm29 16.01H4V78.97h120Z"
                                            fill="#595bd4" class="color000000 svgShape"></path>
                                    </svg>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Comprensión lectora
                                </div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1"><span class="font-bold">¡Hazte
                                            Premium!</span>
                                    </div>
                                    <a href="{{ route('teacher.teacherAccountInfo') }}"
                                        class="btn rounded-md py-3 px-4 block mx-auto">Upgrade</a>
                                </div>

                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        @if ($conceptExplainer->free_status == 1 || $user->is_paid == 1)
                        <a href="{{ route('teacher.showConceptExplainer') }}">
                            <div style="height: 100% !important;" class="report-box zoom-in">
                                <div class="box p-5 h-full py-10">
                                    <div class="flex">
                                        <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                            viewBox="0 0 64 64" id="ConceptExchange">
                                            <rect width="2" height="2" x="6" y="26" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <rect width="2" height="2" x="6" y="30" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <rect width="2" height="2" x="6" y="34" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <rect width="2" height="2" x="6" y="38" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <rect width="2" height="2" x="6" y="42" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <rect width="2" height="2" x="14" y="46" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <rect width="2" height="2" x="18" y="46" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <rect width="2" height="2" x="6" y="46" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <rect width="2" height="2" x="10" y="46" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <polygon points="22 50 26 47 22 44 22 50" fill="#595bd4"
                                                class="color000000 svgShape"></polygon>
                                            <rect width="2" height="2" x="56" y="36" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <rect width="2" height="2" x="56" y="32" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <rect width="2" height="2" x="56" y="28" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <rect width="2" height="2" x="56" y="24" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <rect width="2" height="2" x="56" y="20" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <rect width="2" height="2" x="48" y="16" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <rect width="2" height="2" x="44" y="16" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <rect width="2" height="2" x="56" y="16" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <rect width="2" height="2" x="52" y="16" fill="#595bd4"
                                                class="color000000 svgShape"></rect>
                                            <polygon points="42 20 42 14 38 17 42 20" fill="#595bd4"
                                                class="color000000 svgShape"></polygon>
                                            <circle cx="45" cy="51" r="1" fill="#595bd4" class="color000000 svgShape">
                                            </circle>
                                            <circle cx="37" cy="51" r="1" fill="#595bd4" class="color000000 svgShape">
                                            </circle>
                                            <path
                                                d="M48,32,35,40H28V62H62V40H44ZM37,54a3,3,0,1,1,3-3A3,3,0,0,1,37,54Zm16-6a3,3,0,1,1-3,3A3,3,0,0,1,53,48Zm-8,0a3,3,0,1,1-3,3A3,3,0,0,1,45,48Z"
                                                fill="#595bd4" class="color000000 svgShape"></path>
                                            <circle cx="53" cy="51" r="1" fill="#595bd4" class="color000000 svgShape">
                                            </circle>
                                            <circle cx="19" cy="13" r="1" fill="#595bd4" class="color000000 svgShape">
                                            </circle>
                                            <circle cx="27" cy="13" r="1" fill="#595bd4" class="color000000 svgShape">
                                            </circle>
                                            <path
                                                d="M16,32l13-8h7V2H2V24H20ZM27,10a3,3,0,1,1-3,3A3,3,0,0,1,27,10ZM11,16a3,3,0,1,1,3-3A3,3,0,0,1,11,16Zm8,0a3,3,0,1,1,3-3A3,3,0,0,1,19,16Z"
                                                fill="#595bd4" class="color000000 svgShape"></path>
                                            <circle cx="11" cy="13" r="1" fill="#595bd4" class="color000000 svgShape">
                                            </circle>
                                        </svg>
                                        <div class="ml-auto">

                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">Explicación de conceptos</div>
                                    <div class="text-base text-slate-500 mt-1">Aprende y explora nuevos conceptos
                                        usando
                                        IA</div>
                                </div>
                            </div>
                        </a>
                        @else
                        <div style="height: 100% !important;" class="report-box">
                            <div class="box p-5 h-full py-6">
                                <div class="flex">
                                    <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                        viewBox="0 0 64 64" id="ConceptExchange">
                                        <rect width="2" height="2" x="6" y="26" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <rect width="2" height="2" x="6" y="30" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <rect width="2" height="2" x="6" y="34" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <rect width="2" height="2" x="6" y="38" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <rect width="2" height="2" x="6" y="42" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <rect width="2" height="2" x="14" y="46" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <rect width="2" height="2" x="18" y="46" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <rect width="2" height="2" x="6" y="46" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <rect width="2" height="2" x="10" y="46" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <polygon points="22 50 26 47 22 44 22 50" fill="#595bd4"
                                            class="color000000 svgShape"></polygon>
                                        <rect width="2" height="2" x="56" y="36" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <rect width="2" height="2" x="56" y="32" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <rect width="2" height="2" x="56" y="28" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <rect width="2" height="2" x="56" y="24" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <rect width="2" height="2" x="56" y="20" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <rect width="2" height="2" x="48" y="16" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <rect width="2" height="2" x="44" y="16" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <rect width="2" height="2" x="56" y="16" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <rect width="2" height="2" x="52" y="16" fill="#595bd4"
                                            class="color000000 svgShape"></rect>
                                        <polygon points="42 20 42 14 38 17 42 20" fill="#595bd4"
                                            class="color000000 svgShape"></polygon>
                                        <circle cx="45" cy="51" r="1" fill="#595bd4" class="color000000 svgShape">
                                        </circle>
                                        <circle cx="37" cy="51" r="1" fill="#595bd4" class="color000000 svgShape">
                                        </circle>
                                        <path
                                            d="M48,32,35,40H28V62H62V40H44ZM37,54a3,3,0,1,1,3-3A3,3,0,0,1,37,54Zm16-6a3,3,0,1,1-3,3A3,3,0,0,1,53,48Zm-8,0a3,3,0,1,1-3,3A3,3,0,0,1,45,48Z"
                                            fill="#595bd4" class="color000000 svgShape"></path>
                                        <circle cx="53" cy="51" r="1" fill="#595bd4" class="color000000 svgShape">
                                        </circle>
                                        <circle cx="19" cy="13" r="1" fill="#595bd4" class="color000000 svgShape">
                                        </circle>
                                        <circle cx="27" cy="13" r="1" fill="#595bd4" class="color000000 svgShape">
                                        </circle>
                                        <path
                                            d="M16,32l13-8h7V2H2V24H20ZM27,10a3,3,0,1,1-3,3A3,3,0,0,1,27,10ZM11,16a3,3,0,1,1,3-3A3,3,0,0,1,11,16Zm8,0a3,3,0,1,1,3-3A3,3,0,0,1,19,16Z"
                                            fill="#595bd4" class="color000000 svgShape"></path>
                                        <circle cx="11" cy="13" r="1" fill="#595bd4" class="color000000 svgShape">
                                        </circle>
                                    </svg>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Explicación de conceptos
                                </div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1"><span class="font-bold">¡Hazte
                                            Premium!</span>
                                    </div>
                                    <a href="{{ route('teacher.teacherAccountInfo') }}"
                                        class="btn rounded-md py-3 px-4 block mx-auto">Upgrade</a>
                                </div>

                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        @if ($worksheetGenerator->free_status == 1 || $user->is_paid == 1)
                        <a href="{{ route('teacher.showWorksheetGenerator') }}">
                            <div style="height: 100% !important;" class="report-box zoom-in">
                                <div class="box p-5 h-full py-10">
                                    <div class="flex">
                                        <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"
                                            id="Clipboard">
                                            <path
                                                d="M15 18.998v54a2 2 0 0 0 2 2h46a2 2 0 0 0 2-2v-54a2 2 0 0 0-2-2h-8v-2a2 2 0 0 0-2-2h-4.055a8.937 8.937 0 0 0-2.58-5.364 8.937 8.937 0 0 0-5.99-2.624c-2.382-.09-4.666.78-6.44 2.48a9.57 9.57 0 0 0-2.836 5.508H27a2 2 0 0 0-2 2v2h-8a2 2 0 0 0-2 2zm14-2h4a2 2 0 0 0 2-2v-.65a5.53 5.53 0 0 1 1.703-3.97 4.831 4.831 0 0 1 3.51-1.372 4.956 4.956 0 0 1 3.322 1.456A4.97 4.97 0 0 1 45 13.998v1a2 2 0 0 0 2 2h4v3H29v-3zm-10 4h6v1a2 2 0 0 0 2 2h26a2 2 0 0 0 2-2v-1h6v50H19v-50z"
                                                fill="#595bd4" class="color000000 svgShape"></path>
                                            <path
                                                d="M56.5 34.498h-19a2 2 0 0 0 0 4h19a2 2 0 0 0 0-4zm-31.36 5.408a2.002 2.002 0 0 0 2.84 0l6.94-7a2 2 0 1 0-2.84-2.816l-5.52 5.567-1.64-1.655a2.001 2.001 0 0 0-2.842 2.816l3.062 3.088zm31.36 7.092h-19a2 2 0 0 0 0 4h19a2 2 0 0 0 0-4zm-21.592-4.42a1.998 1.998 0 0 0-2.828.012l-5.52 5.567-1.64-1.655a2.001 2.001 0 0 0-2.842 2.816l3.062 3.088a2.002 2.002 0 0 0 2.84 0l6.94-7a2 2 0 0 0-.012-2.828zM56.5 59.498h-19a2 2 0 0 0 0 4h19a2 2 0 0 0 0-4zm-24.086-1.914a2 2 0 0 0-2.828 0L28 59.17l-1.586-1.586a2 2 0 1 0-2.828 2.828l1.586 1.586-1.586 1.586a2 2 0 1 0 2.828 2.828L28 64.826l1.586 1.586c.39.39.902.586 1.414.586s1.023-.195 1.414-.586a2 2 0 0 0 0-2.828l-1.586-1.586 1.586-1.586a2 2 0 0 0 0-2.828z"
                                                fill="#595bd4" class="color000000 svgShape"></path>
                                        </svg>
                                        <div class="ml-auto">

                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">Generador de actividades</div>
                                    <div class="text-base text-slate-500 mt-1">Crea tareas y ejercicios para tus
                                        clases
                                    </div>
                                </div>
                            </div>
                        </a>
                        @else
                        <div style="height: 100% !important;" class="report-box">
                            <div class="box p-5 h-full py-6">
                                <div class="flex">
                                    <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"
                                        id="Clipboard">
                                        <path
                                            d="M15 18.998v54a2 2 0 0 0 2 2h46a2 2 0 0 0 2-2v-54a2 2 0 0 0-2-2h-8v-2a2 2 0 0 0-2-2h-4.055a8.937 8.937 0 0 0-2.58-5.364 8.937 8.937 0 0 0-5.99-2.624c-2.382-.09-4.666.78-6.44 2.48a9.57 9.57 0 0 0-2.836 5.508H27a2 2 0 0 0-2 2v2h-8a2 2 0 0 0-2 2zm14-2h4a2 2 0 0 0 2-2v-.65a5.53 5.53 0 0 1 1.703-3.97 4.831 4.831 0 0 1 3.51-1.372 4.956 4.956 0 0 1 3.322 1.456A4.97 4.97 0 0 1 45 13.998v1a2 2 0 0 0 2 2h4v3H29v-3zm-10 4h6v1a2 2 0 0 0 2 2h26a2 2 0 0 0 2-2v-1h6v50H19v-50z"
                                            fill="#595bd4" class="color000000 svgShape"></path>
                                        <path
                                            d="M56.5 34.498h-19a2 2 0 0 0 0 4h19a2 2 0 0 0 0-4zm-31.36 5.408a2.002 2.002 0 0 0 2.84 0l6.94-7a2 2 0 1 0-2.84-2.816l-5.52 5.567-1.64-1.655a2.001 2.001 0 0 0-2.842 2.816l3.062 3.088zm31.36 7.092h-19a2 2 0 0 0 0 4h19a2 2 0 0 0 0-4zm-21.592-4.42a1.998 1.998 0 0 0-2.828.012l-5.52 5.567-1.64-1.655a2.001 2.001 0 0 0-2.842 2.816l3.062 3.088a2.002 2.002 0 0 0 2.84 0l6.94-7a2 2 0 0 0-.012-2.828zM56.5 59.498h-19a2 2 0 0 0 0 4h19a2 2 0 0 0 0-4zm-24.086-1.914a2 2 0 0 0-2.828 0L28 59.17l-1.586-1.586a2 2 0 1 0-2.828 2.828l1.586 1.586-1.586 1.586a2 2 0 1 0 2.828 2.828L28 64.826l1.586 1.586c.39.39.902.586 1.414.586s1.023-.195 1.414-.586a2 2 0 0 0 0-2.828l-1.586-1.586 1.586-1.586a2 2 0 0 0 0-2.828z"
                                            fill="#595bd4" class="color000000 svgShape"></path>
                                    </svg>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Generador de actividades
                                </div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1"><span class="font-bold">¡Hazte
                                            Premium!</span>
                                    </div>
                                    <a href="{{ route('teacher.teacherAccountInfo') }}"
                                        class="btn rounded-md py-3 px-4 block mx-auto">Upgrade</a>
                                </div>

                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        @if ($rubricGenerator->free_status == 1 || $user->is_paid == 1)
                        <a href="{{ route('teacher.showRubricGenerator') }}">
                            <div style="height: 100% !important;" class="report-box zoom-in">
                                <div class="box p-5 h-full py-10">
                                    <div class="flex items-baseline">
                                        <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 256 256" id="Table">
                                            <rect width="256" height="256" fill="none"></rect>
                                            <path fill="none" stroke="#595bd4" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="16"
                                                d="M32,56H224a0,0,0,0,1,0,0V192a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V56A0,0,0,0,1,32,56Z"
                                                class="colorStroke000000 svgStroke"></path>
                                            <line x1="32" x2="224" y1="104" y2="104" fill="none" stroke="#595bd4"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="16"
                                                class="colorStroke000000 svgStroke"></line>
                                            <line x1="32" x2="224" y1="152" y2="152" fill="none" stroke="#595bd4"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="16"
                                                class="colorStroke000000 svgStroke"></line>
                                            <line x1="88" x2="88" y1="104" y2="200" fill="none" stroke="#595bd4"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="16"
                                                class="colorStroke000000 svgStroke"></line>
                                        </svg>
                                        <div class="ml-auto">

                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">Generador de Rúbricas</div>
                                    <div class="text-base text-slate-500 mt-1">Crea rúbricas para todos tus
                                        proyectos de
                                        clase</div>
                                </div>
                            </div>
                        </a>
                        @else
                        <div style="height: 100% !important;" class="report-box">
                            <div class="box p-5 h-full py-6">
                                <div class="flex">
                                    <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"
                                        id="Table">
                                        <rect width="256" height="256" fill="none"></rect>
                                        <path fill="none" stroke="#595bd4" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="16"
                                            d="M32,56H224a0,0,0,0,1,0,0V192a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V56A0,0,0,0,1,32,56Z"
                                            class="colorStroke000000 svgStroke"></path>
                                        <line x1="32" x2="224" y1="104" y2="104" fill="none" stroke="#595bd4"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16"
                                            class="colorStroke000000 svgStroke"></line>
                                        <line x1="32" x2="224" y1="152" y2="152" fill="none" stroke="#595bd4"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16"
                                            class="colorStroke000000 svgStroke"></line>
                                        <line x1="88" x2="88" y1="104" y2="200" fill="none" stroke="#595bd4"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16"
                                            class="colorStroke000000 svgStroke"></line>
                                    </svg>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Generador de Rúbricas</div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1"><span class="font-bold">¡Hazte
                                            Premium!</span>
                                    </div>
                                    <a href="{{ route('teacher.teacherAccountInfo') }}"
                                        class="btn rounded-md py-3 px-4 block mx-auto">Upgrade</a>
                                </div>

                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        @if ($slidesGenerator->free_status == 1 || $user->is_paid == 1)
                        <a href="{{ route('teacher.showSlidesGenerator') }}">
                            <div style="height: 100% !important;" class="report-box zoom-in">
                                <div class="box p-5 h-full py-10">
                                    <div class="flex">
                                        <svg style="width: 58px; !important" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 64 64" id="presentation">
                                            <path fill="#595bd4"
                                                d="M59.12972,4.77628h-48c-4.18939-.054-4.18835,8.05383,0,8v6.44793c-3.73126-1.81524-7.759,3.16327-5.20562,6.7627a3.88329,3.88329,0,0,0,1.92779,6.02814,8.50824,8.50824,0,0,0,4.90772,6.95575v.9591C2.19894,38.90323-1.68973,57.45407,5.12936,58.77732c11.012-1.86335,31.02569,7.14923,23.91589-13.001h5.08447v2.59784A4.02661,4.02661,0,0,0,32.019,52.9036a3.63071,3.63071,0,0,0,5.2398,2.3988c1.57038-.97314,2.80017-3.06818,1.63233-4.79779-.44922-.79181-1.05506-1.80609-2.07154-1.825a3.90306,3.90306,0,0,0-.68988-.30689V45.77628c33.96888,1.11853,20.401.79583,23-33C63.3182,12.83035,63.31875,4.72232,59.12972,4.77628ZM21.30062,6.89871c8.65222-.292,20.97772-.8396,29.46411-.4024a7.179,7.179,0,0,0-2.15,2.12653c-1.05573-.06092-2.16272-.11377-3.30658-.15882.4245-.25964,1.217-.613,1.01764-1.13269a.4593.4593,0,0,0-.53925-.26465,4.57215,4.57215,0,0,0-2.19787,1.33643q-1.03-.03251-2.089-.05664A8.66779,8.66779,0,0,0,42.055,7.64a.45054.45054,0,0,0-.50287-.65418,5.65892,5.65892,0,0,0-2.3078,1.31842q-1.04782-.01528-2.10681-.02289c.40637-.28485,1.77276-1.21862.71289-1.50769a7.98722,7.98722,0,0,0-3.19172,1.50061c-1.39508.002-2.788.01349-4.16021.03546a3.94539,3.94539,0,0,0,1.22308-.947.40055.40055,0,0,0-.34405-.59954,9.50993,9.50993,0,0,0-2.80671,1.58483c-.95971.0224-1.90521.04957-2.82818.08216.25921-.31647.88006-.60156.72052-1.07813a.41333.41333,0,0,0-.38562-.25934A4.13927,4.13927,0,0,0,23.08383,8.542c-1.63.07965-3.16108.17676-4.54944.292C19.43368,8.21939,20.75735,7.87845,21.30062,6.89871ZM10.78872,9.87522a.63865.63865,0,0,0-.10571.75891c-1.0542-.69867-.87085-3.85712.44629-3.85785.26208.36334,3.72863.32727,8.71258.17029-.77.49981-1.50256,1.04119-2.25763,1.56079a.39106.39106,0,0,0-.16388.42627c-1.43084.137-2.67462.29535-3.67651.47522.49329-.32758,2.183-1.72608.96887-2.06556a3.93055,3.93055,0,0,0-2.07666,1.04682A13.23058,13.23058,0,0,0,10.78872,9.87522ZM9.19613,20.88016c6.70166,4.53656,12.17877-6.12659,14.9342,2.78278C21.82314,30.374,16.85458,27.35306,12.8287,24.9064a.97469.97469,0,0,0-1.63123-1.01483c-.54352.47162-.68933,1.2237-1.23095,1.69025a1.39235,1.39235,0,0,1-1.585.22809C7.44912,24.143,5.86819,21.73917,9.19613,20.88016ZM9.8099,31.14639c-.39807-1.51123-3.80042-1.21789-2.44824-3.72522.912.04328,1.463.47992,2.34478.3949a3.39373,3.39373,0,0,0,2.1637-1.21466c1.98584,2.81909,7.59021,4.049,10.25958,2.34339C23.94351,38.43472,10.52371,41.38187,9.8099,31.14639Zm9.41455,10.76807,2.84375.50879-2.07666,2.07666L17.952,43.18839C18.01077,43.12851,19.161,41.98093,19.22445,41.91446ZM17.22884,46.972a.46241.46241,0,0,0-.51617-.21,4.9531,4.9531,0,0,0-1.92975,1.44458c.48956-5.38544,2.31818-4.99341,2.7251.27581a7.04789,7.04789,0,0,0-2.94769,2.4278c.02179-.35364.0459-.7077.07251-1.05945a11.13292,11.13292,0,0,1,1.70459-1.63031C16.70229,47.91818,17.492,47.54733,17.22884,46.972Zm-2.46923-7.40851a7.52219,7.52219,0,0,0,2.73-.0509,2.51137,2.51137,0,0,1-1.16169,2.47161C15.88857,41.50223,14.37936,40.373,14.75961,39.56351Zm-.06617,12.86816a9.78376,9.78376,0,0,1,2.949-2.39038c.05768.79328.10266,1.59821.14,2.36365-1.34094.00018-2.42077,1.17242-3.39428,1.98614.02459-.55346.051-1.17169.08221-1.822A.41181.41181,0,0,0,14.69344,52.43167ZM13.368,41.85294l1.17286,1.17285-2.27539,1.47168-2.0752-2.07471ZM12.19869,56.77628c-.90387-.37207-8.28564.96789-8.069-1-.11438-4.29334-.53381-10.28565,4.09119-12.49475.90662.49371,3.40918,4.62756,4.71826,3.16223Zm4.461,0a5.20423,5.20423,0,0,0,.84168-.99933.38938.38938,0,0,0-.52912-.529,6.80373,6.80373,0,0,0-1.15869.9917.494.494,0,0,0-.10571.53668H14.20394a7.19822,7.19822,0,0,0,.13172-1.30011c.5448.31982.94659-.34448,1.356-.61139.47766-.4065,1.50867-.9563,2.13794-1.43891a26.98253,26.98253,0,0,0,.22595,3.35041Zm11.46027-1c.2409,1.96582-7.18707.62988-8.05927,1l-.741-10.33228a1.09868,1.09868,0,0,0,1.517.03925l3.19343-3.19336C28.655,45.48038,28.2344,51.495,28.12,55.77628Zm8.08954-4.97217a3.18974,3.18974,0,0,1,.82409,1.243c.02454.19342-.16137.42975-.27606.59747-.29315.28-.51141.70771-.93432.79358.0227.02973-.13855.027-.17408.04352-.0589-.0058-.15222-.00366-.245-.01141-.00238-.0047-.13257-.00116-.13581-.02789-1.792-.2746-1.27679-3.711.61506-3.01844A2.11757,2.11757,0,0,0,36.2095,50.80411Zm20.92022-7.02783H27.7369c-1.77136-2.49243-5.26367-3.64331-8.24731-3.846V38.82114c4.14233-1.8028,5.03485-6.96039,4.63971-11.18494,4.22711-3.418,1.0285-9.27234-3.57148-9.83258-3.264-.46857-4.40216,3.02033-7.4281,2.35407V10.77628h44ZM57.816,8.59134a3.58768,3.58768,0,0,0-.85888.90173c-.65076-.12957-1.42426-.2489-2.30262-.35791.54187-.25329,2.24042-1.37548.963-1.75366a6.479,6.479,0,0,0-3.09845,1.52576c-.79566-.07276-1.64777-.13892-2.54181-.19916.46-.38214.95086-.72851,1.4071-1.11.24311-.2768.68708-.6344.482-1.03833,3.423.22161,6.10315.62817,7.48492,1.311A2.33308,2.33308,0,0,0,57.816,8.59134Zm2.31372,1.18494a1.0013,1.0013,0,0,1-1,1c.32038-.3534-.01-.66931-.84393-.94818.53626-.45832,1.87805-.74018,1.54791-1.66474A1.05794,1.05794,0,0,1,60.12972,9.77628Z"
                                                class="color4d4d4d svgShape"></path>
                                            <path fill="#595bd4"
                                                d="M30.68917 19.92642a.57054.57054 0 00.57739.06665c6.56647.93964 13.316.40033 19.93763.55451 1.53558.12945 1.44372-2.51965-.30219-2.23273-5.39386.52893-10.87506.21991-16.298.31879-.92121.0011-1.84448.0011-2.76538.01611-.47644.00775-1.11627-.03064-1.36078.47089A.601.601 0 0030.68917 19.92642zM30.83456 25.45139c5.117.36993 10.25476.11389 15.383.23883 1.64411-.11457 3.40412.39544 4.95826-.23175a.95722.95722 0 00-.00007-1.63947c-1.53369-.68353-3.48663-.2315-5.15289-.37616a102.37 102.37 0 00-15.35339.78845C29.93551 24.3552 30.184 25.39713 30.83456 25.45139zM49.11752 31.31717c.94842.03943 3.06183.39069 2.8844-1.17474-.15564-1.37366-2.14081-1.10944-3.13434-1.13684a61.34788 61.34788 0 00-9.24793.44555 2.70477 2.70477 0 00-1.69873.5932.63892.63892 0 00.15308 1.00177c.46045.38288 1.21521.27411 1.79816.27118C42.95195 31.17964 46.03684 31.20208 49.11752 31.31717zM51.42654 34.93973a32.22421 32.22421 0 00-10.40131.85944.73012.73012 0 00.19318 1.42736c3.39453.034 6.84143.13562 10.20813-.02649A1.1814 1.1814 0 0051.42654 34.93973zM35.97329 50.55283c-.0805-.09192-.11493-.13318.0354.05072C35.993 50.58432 35.98715 50.57065 35.97329 50.55283zM35.26833 53.44242c.04725.006.09009.02441.13581.02789C35.30959 53.43637 35.267 53.433 35.26833 53.44242zM35.6979 53.46951a1.153 1.153 0 01.12531-.03131A.21624.21624 0 0035.6979 53.46951zM36.37447 30.22287a3.86233 3.86233 0 00-2.28979.11212c-.29181.06568-.63373.18055-.71649.50495-.14722.96905 1.04327.62951 1.621.64233.53528-.07178 1.16241.06732 1.58722-.33581A.582.582 0 0036.37447 30.22287zM38.7936 35.33817a.79735.79735 0 000 1.59375A.79735.79735 0 0038.7936 35.33817zM19.60067 25.91385c2.17682.21307 4.34223-1.96191 3.68634-4.1499a.34982.34982 0 00-.38574-.25177c-.4162.07568-.275.611-.4516.89776a2.8075 2.8075 0 01-2.84906 1.98041A.76187.76187 0 0019.60067 25.91385zM24.74447 49.62949a10.96937 10.96937 0 00-1.95721.5636.50644.50644 0 00.134.9898 5.98511 5.98511 0 002.99194-.23272.7323.7323 0 00-.173-1.32379A1.70221 1.70221 0 0024.74447 49.62949zM21.59029 50.24961a.73872.73872 0 000 1.47656A.73872.73872 0 0021.59029 50.24961z"
                                                class="color4d4d4d svgShape"></path>
                                        </svg>

                                        <div class="ml-auto">

                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">Generador de Presentaciones
                                    </div>
                                    <div class="text-base text-slate-500 mt-1">Crea el contenido para tus
                                        presentaciones
                                    </div>
                                </div>
                            </div>
                        </a>
                        @else
                        <div style="height: 100% !important;" class="report-box">
                            <div class="box p-5 h-full py-6">
                                <div class="flex">
                                    <svg style="width: 58px; !important" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 64 64" id="presentation">
                                        <path fill="#595bd4"
                                            d="M59.12972,4.77628h-48c-4.18939-.054-4.18835,8.05383,0,8v6.44793c-3.73126-1.81524-7.759,3.16327-5.20562,6.7627a3.88329,3.88329,0,0,0,1.92779,6.02814,8.50824,8.50824,0,0,0,4.90772,6.95575v.9591C2.19894,38.90323-1.68973,57.45407,5.12936,58.77732c11.012-1.86335,31.02569,7.14923,23.91589-13.001h5.08447v2.59784A4.02661,4.02661,0,0,0,32.019,52.9036a3.63071,3.63071,0,0,0,5.2398,2.3988c1.57038-.97314,2.80017-3.06818,1.63233-4.79779-.44922-.79181-1.05506-1.80609-2.07154-1.825a3.90306,3.90306,0,0,0-.68988-.30689V45.77628c33.96888,1.11853,20.401.79583,23-33C63.3182,12.83035,63.31875,4.72232,59.12972,4.77628ZM21.30062,6.89871c8.65222-.292,20.97772-.8396,29.46411-.4024a7.179,7.179,0,0,0-2.15,2.12653c-1.05573-.06092-2.16272-.11377-3.30658-.15882.4245-.25964,1.217-.613,1.01764-1.13269a.4593.4593,0,0,0-.53925-.26465,4.57215,4.57215,0,0,0-2.19787,1.33643q-1.03-.03251-2.089-.05664A8.66779,8.66779,0,0,0,42.055,7.64a.45054.45054,0,0,0-.50287-.65418,5.65892,5.65892,0,0,0-2.3078,1.31842q-1.04782-.01528-2.10681-.02289c.40637-.28485,1.77276-1.21862.71289-1.50769a7.98722,7.98722,0,0,0-3.19172,1.50061c-1.39508.002-2.788.01349-4.16021.03546a3.94539,3.94539,0,0,0,1.22308-.947.40055.40055,0,0,0-.34405-.59954,9.50993,9.50993,0,0,0-2.80671,1.58483c-.95971.0224-1.90521.04957-2.82818.08216.25921-.31647.88006-.60156.72052-1.07813a.41333.41333,0,0,0-.38562-.25934A4.13927,4.13927,0,0,0,23.08383,8.542c-1.63.07965-3.16108.17676-4.54944.292C19.43368,8.21939,20.75735,7.87845,21.30062,6.89871ZM10.78872,9.87522a.63865.63865,0,0,0-.10571.75891c-1.0542-.69867-.87085-3.85712.44629-3.85785.26208.36334,3.72863.32727,8.71258.17029-.77.49981-1.50256,1.04119-2.25763,1.56079a.39106.39106,0,0,0-.16388.42627c-1.43084.137-2.67462.29535-3.67651.47522.49329-.32758,2.183-1.72608.96887-2.06556a3.93055,3.93055,0,0,0-2.07666,1.04682A13.23058,13.23058,0,0,0,10.78872,9.87522ZM9.19613,20.88016c6.70166,4.53656,12.17877-6.12659,14.9342,2.78278C21.82314,30.374,16.85458,27.35306,12.8287,24.9064a.97469.97469,0,0,0-1.63123-1.01483c-.54352.47162-.68933,1.2237-1.23095,1.69025a1.39235,1.39235,0,0,1-1.585.22809C7.44912,24.143,5.86819,21.73917,9.19613,20.88016ZM9.8099,31.14639c-.39807-1.51123-3.80042-1.21789-2.44824-3.72522.912.04328,1.463.47992,2.34478.3949a3.39373,3.39373,0,0,0,2.1637-1.21466c1.98584,2.81909,7.59021,4.049,10.25958,2.34339C23.94351,38.43472,10.52371,41.38187,9.8099,31.14639Zm9.41455,10.76807,2.84375.50879-2.07666,2.07666L17.952,43.18839C18.01077,43.12851,19.161,41.98093,19.22445,41.91446ZM17.22884,46.972a.46241.46241,0,0,0-.51617-.21,4.9531,4.9531,0,0,0-1.92975,1.44458c.48956-5.38544,2.31818-4.99341,2.7251.27581a7.04789,7.04789,0,0,0-2.94769,2.4278c.02179-.35364.0459-.7077.07251-1.05945a11.13292,11.13292,0,0,1,1.70459-1.63031C16.70229,47.91818,17.492,47.54733,17.22884,46.972Zm-2.46923-7.40851a7.52219,7.52219,0,0,0,2.73-.0509,2.51137,2.51137,0,0,1-1.16169,2.47161C15.88857,41.50223,14.37936,40.373,14.75961,39.56351Zm-.06617,12.86816a9.78376,9.78376,0,0,1,2.949-2.39038c.05768.79328.10266,1.59821.14,2.36365-1.34094.00018-2.42077,1.17242-3.39428,1.98614.02459-.55346.051-1.17169.08221-1.822A.41181.41181,0,0,0,14.69344,52.43167ZM13.368,41.85294l1.17286,1.17285-2.27539,1.47168-2.0752-2.07471ZM12.19869,56.77628c-.90387-.37207-8.28564.96789-8.069-1-.11438-4.29334-.53381-10.28565,4.09119-12.49475.90662.49371,3.40918,4.62756,4.71826,3.16223Zm4.461,0a5.20423,5.20423,0,0,0,.84168-.99933.38938.38938,0,0,0-.52912-.529,6.80373,6.80373,0,0,0-1.15869.9917.494.494,0,0,0-.10571.53668H14.20394a7.19822,7.19822,0,0,0,.13172-1.30011c.5448.31982.94659-.34448,1.356-.61139.47766-.4065,1.50867-.9563,2.13794-1.43891a26.98253,26.98253,0,0,0,.22595,3.35041Zm11.46027-1c.2409,1.96582-7.18707.62988-8.05927,1l-.741-10.33228a1.09868,1.09868,0,0,0,1.517.03925l3.19343-3.19336C28.655,45.48038,28.2344,51.495,28.12,55.77628Zm8.08954-4.97217a3.18974,3.18974,0,0,1,.82409,1.243c.02454.19342-.16137.42975-.27606.59747-.29315.28-.51141.70771-.93432.79358.0227.02973-.13855.027-.17408.04352-.0589-.0058-.15222-.00366-.245-.01141-.00238-.0047-.13257-.00116-.13581-.02789-1.792-.2746-1.27679-3.711.61506-3.01844A2.11757,2.11757,0,0,0,36.2095,50.80411Zm20.92022-7.02783H27.7369c-1.77136-2.49243-5.26367-3.64331-8.24731-3.846V38.82114c4.14233-1.8028,5.03485-6.96039,4.63971-11.18494,4.22711-3.418,1.0285-9.27234-3.57148-9.83258-3.264-.46857-4.40216,3.02033-7.4281,2.35407V10.77628h44ZM57.816,8.59134a3.58768,3.58768,0,0,0-.85888.90173c-.65076-.12957-1.42426-.2489-2.30262-.35791.54187-.25329,2.24042-1.37548.963-1.75366a6.479,6.479,0,0,0-3.09845,1.52576c-.79566-.07276-1.64777-.13892-2.54181-.19916.46-.38214.95086-.72851,1.4071-1.11.24311-.2768.68708-.6344.482-1.03833,3.423.22161,6.10315.62817,7.48492,1.311A2.33308,2.33308,0,0,0,57.816,8.59134Zm2.31372,1.18494a1.0013,1.0013,0,0,1-1,1c.32038-.3534-.01-.66931-.84393-.94818.53626-.45832,1.87805-.74018,1.54791-1.66474A1.05794,1.05794,0,0,1,60.12972,9.77628Z"
                                            class="color4d4d4d svgShape"></path>
                                        <path fill="#595bd4"
                                            d="M30.68917 19.92642a.57054.57054 0 00.57739.06665c6.56647.93964 13.316.40033 19.93763.55451 1.53558.12945 1.44372-2.51965-.30219-2.23273-5.39386.52893-10.87506.21991-16.298.31879-.92121.0011-1.84448.0011-2.76538.01611-.47644.00775-1.11627-.03064-1.36078.47089A.601.601 0 0030.68917 19.92642zM30.83456 25.45139c5.117.36993 10.25476.11389 15.383.23883 1.64411-.11457 3.40412.39544 4.95826-.23175a.95722.95722 0 00-.00007-1.63947c-1.53369-.68353-3.48663-.2315-5.15289-.37616a102.37 102.37 0 00-15.35339.78845C29.93551 24.3552 30.184 25.39713 30.83456 25.45139zM49.11752 31.31717c.94842.03943 3.06183.39069 2.8844-1.17474-.15564-1.37366-2.14081-1.10944-3.13434-1.13684a61.34788 61.34788 0 00-9.24793.44555 2.70477 2.70477 0 00-1.69873.5932.63892.63892 0 00.15308 1.00177c.46045.38288 1.21521.27411 1.79816.27118C42.95195 31.17964 46.03684 31.20208 49.11752 31.31717zM51.42654 34.93973a32.22421 32.22421 0 00-10.40131.85944.73012.73012 0 00.19318 1.42736c3.39453.034 6.84143.13562 10.20813-.02649A1.1814 1.1814 0 0051.42654 34.93973zM35.97329 50.55283c-.0805-.09192-.11493-.13318.0354.05072C35.993 50.58432 35.98715 50.57065 35.97329 50.55283zM35.26833 53.44242c.04725.006.09009.02441.13581.02789C35.30959 53.43637 35.267 53.433 35.26833 53.44242zM35.6979 53.46951a1.153 1.153 0 01.12531-.03131A.21624.21624 0 0035.6979 53.46951zM36.37447 30.22287a3.86233 3.86233 0 00-2.28979.11212c-.29181.06568-.63373.18055-.71649.50495-.14722.96905 1.04327.62951 1.621.64233.53528-.07178 1.16241.06732 1.58722-.33581A.582.582 0 0036.37447 30.22287zM38.7936 35.33817a.79735.79735 0 000 1.59375A.79735.79735 0 0038.7936 35.33817zM19.60067 25.91385c2.17682.21307 4.34223-1.96191 3.68634-4.1499a.34982.34982 0 00-.38574-.25177c-.4162.07568-.275.611-.4516.89776a2.8075 2.8075 0 01-2.84906 1.98041A.76187.76187 0 0019.60067 25.91385zM24.74447 49.62949a10.96937 10.96937 0 00-1.95721.5636.50644.50644 0 00.134.9898 5.98511 5.98511 0 002.99194-.23272.7323.7323 0 00-.173-1.32379A1.70221 1.70221 0 0024.74447 49.62949zM21.59029 50.24961a.73872.73872 0 000 1.47656A.73872.73872 0 0021.59029 50.24961z"
                                            class="color4d4d4d svgShape"></path>
                                    </svg>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Generador de Presentaciones
                                </div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1"><span class="font-bold">¡Hazte
                                            Premium!</span>
                                    </div>
                                    <a href="{{ route('teacher.teacherAccountInfo') }}"
                                        class="btn rounded-md py-3 px-4 block mx-auto">Upgrade</a>
                                </div>

                            </div>
                        </div>
                        @endif
                    </div>

                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">

                        <div style="height: 100% !important;" class="report-box">
                            <div class="box p-5 h-full py-6">
                                <div class="flex">
                                    <svg style="width: 58px; !important" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 64 64" id="presentation">
                                        <path fill="#595bd4"
                                            d="M59.12972,4.77628h-48c-4.18939-.054-4.18835,8.05383,0,8v6.44793c-3.73126-1.81524-7.759,3.16327-5.20562,6.7627a3.88329,3.88329,0,0,0,1.92779,6.02814,8.50824,8.50824,0,0,0,4.90772,6.95575v.9591C2.19894,38.90323-1.68973,57.45407,5.12936,58.77732c11.012-1.86335,31.02569,7.14923,23.91589-13.001h5.08447v2.59784A4.02661,4.02661,0,0,0,32.019,52.9036a3.63071,3.63071,0,0,0,5.2398,2.3988c1.57038-.97314,2.80017-3.06818,1.63233-4.79779-.44922-.79181-1.05506-1.80609-2.07154-1.825a3.90306,3.90306,0,0,0-.68988-.30689V45.77628c33.96888,1.11853,20.401.79583,23-33C63.3182,12.83035,63.31875,4.72232,59.12972,4.77628ZM21.30062,6.89871c8.65222-.292,20.97772-.8396,29.46411-.4024a7.179,7.179,0,0,0-2.15,2.12653c-1.05573-.06092-2.16272-.11377-3.30658-.15882.4245-.25964,1.217-.613,1.01764-1.13269a.4593.4593,0,0,0-.53925-.26465,4.57215,4.57215,0,0,0-2.19787,1.33643q-1.03-.03251-2.089-.05664A8.66779,8.66779,0,0,0,42.055,7.64a.45054.45054,0,0,0-.50287-.65418,5.65892,5.65892,0,0,0-2.3078,1.31842q-1.04782-.01528-2.10681-.02289c.40637-.28485,1.77276-1.21862.71289-1.50769a7.98722,7.98722,0,0,0-3.19172,1.50061c-1.39508.002-2.788.01349-4.16021.03546a3.94539,3.94539,0,0,0,1.22308-.947.40055.40055,0,0,0-.34405-.59954,9.50993,9.50993,0,0,0-2.80671,1.58483c-.95971.0224-1.90521.04957-2.82818.08216.25921-.31647.88006-.60156.72052-1.07813a.41333.41333,0,0,0-.38562-.25934A4.13927,4.13927,0,0,0,23.08383,8.542c-1.63.07965-3.16108.17676-4.54944.292C19.43368,8.21939,20.75735,7.87845,21.30062,6.89871ZM10.78872,9.87522a.63865.63865,0,0,0-.10571.75891c-1.0542-.69867-.87085-3.85712.44629-3.85785.26208.36334,3.72863.32727,8.71258.17029-.77.49981-1.50256,1.04119-2.25763,1.56079a.39106.39106,0,0,0-.16388.42627c-1.43084.137-2.67462.29535-3.67651.47522.49329-.32758,2.183-1.72608.96887-2.06556a3.93055,3.93055,0,0,0-2.07666,1.04682A13.23058,13.23058,0,0,0,10.78872,9.87522ZM9.19613,20.88016c6.70166,4.53656,12.17877-6.12659,14.9342,2.78278C21.82314,30.374,16.85458,27.35306,12.8287,24.9064a.97469.97469,0,0,0-1.63123-1.01483c-.54352.47162-.68933,1.2237-1.23095,1.69025a1.39235,1.39235,0,0,1-1.585.22809C7.44912,24.143,5.86819,21.73917,9.19613,20.88016ZM9.8099,31.14639c-.39807-1.51123-3.80042-1.21789-2.44824-3.72522.912.04328,1.463.47992,2.34478.3949a3.39373,3.39373,0,0,0,2.1637-1.21466c1.98584,2.81909,7.59021,4.049,10.25958,2.34339C23.94351,38.43472,10.52371,41.38187,9.8099,31.14639Zm9.41455,10.76807,2.84375.50879-2.07666,2.07666L17.952,43.18839C18.01077,43.12851,19.161,41.98093,19.22445,41.91446ZM17.22884,46.972a.46241.46241,0,0,0-.51617-.21,4.9531,4.9531,0,0,0-1.92975,1.44458c.48956-5.38544,2.31818-4.99341,2.7251.27581a7.04789,7.04789,0,0,0-2.94769,2.4278c.02179-.35364.0459-.7077.07251-1.05945a11.13292,11.13292,0,0,1,1.70459-1.63031C16.70229,47.91818,17.492,47.54733,17.22884,46.972Zm-2.46923-7.40851a7.52219,7.52219,0,0,0,2.73-.0509,2.51137,2.51137,0,0,1-1.16169,2.47161C15.88857,41.50223,14.37936,40.373,14.75961,39.56351Zm-.06617,12.86816a9.78376,9.78376,0,0,1,2.949-2.39038c.05768.79328.10266,1.59821.14,2.36365-1.34094.00018-2.42077,1.17242-3.39428,1.98614.02459-.55346.051-1.17169.08221-1.822A.41181.41181,0,0,0,14.69344,52.43167ZM13.368,41.85294l1.17286,1.17285-2.27539,1.47168-2.0752-2.07471ZM12.19869,56.77628c-.90387-.37207-8.28564.96789-8.069-1-.11438-4.29334-.53381-10.28565,4.09119-12.49475.90662.49371,3.40918,4.62756,4.71826,3.16223Zm4.461,0a5.20423,5.20423,0,0,0,.84168-.99933.38938.38938,0,0,0-.52912-.529,6.80373,6.80373,0,0,0-1.15869.9917.494.494,0,0,0-.10571.53668H14.20394a7.19822,7.19822,0,0,0,.13172-1.30011c.5448.31982.94659-.34448,1.356-.61139.47766-.4065,1.50867-.9563,2.13794-1.43891a26.98253,26.98253,0,0,0,.22595,3.35041Zm11.46027-1c.2409,1.96582-7.18707.62988-8.05927,1l-.741-10.33228a1.09868,1.09868,0,0,0,1.517.03925l3.19343-3.19336C28.655,45.48038,28.2344,51.495,28.12,55.77628Zm8.08954-4.97217a3.18974,3.18974,0,0,1,.82409,1.243c.02454.19342-.16137.42975-.27606.59747-.29315.28-.51141.70771-.93432.79358.0227.02973-.13855.027-.17408.04352-.0589-.0058-.15222-.00366-.245-.01141-.00238-.0047-.13257-.00116-.13581-.02789-1.792-.2746-1.27679-3.711.61506-3.01844A2.11757,2.11757,0,0,0,36.2095,50.80411Zm20.92022-7.02783H27.7369c-1.77136-2.49243-5.26367-3.64331-8.24731-3.846V38.82114c4.14233-1.8028,5.03485-6.96039,4.63971-11.18494,4.22711-3.418,1.0285-9.27234-3.57148-9.83258-3.264-.46857-4.40216,3.02033-7.4281,2.35407V10.77628h44ZM57.816,8.59134a3.58768,3.58768,0,0,0-.85888.90173c-.65076-.12957-1.42426-.2489-2.30262-.35791.54187-.25329,2.24042-1.37548.963-1.75366a6.479,6.479,0,0,0-3.09845,1.52576c-.79566-.07276-1.64777-.13892-2.54181-.19916.46-.38214.95086-.72851,1.4071-1.11.24311-.2768.68708-.6344.482-1.03833,3.423.22161,6.10315.62817,7.48492,1.311A2.33308,2.33308,0,0,0,57.816,8.59134Zm2.31372,1.18494a1.0013,1.0013,0,0,1-1,1c.32038-.3534-.01-.66931-.84393-.94818.53626-.45832,1.87805-.74018,1.54791-1.66474A1.05794,1.05794,0,0,1,60.12972,9.77628Z"
                                            class="color4d4d4d svgShape"></path>
                                        <path fill="#595bd4"
                                            d="M30.68917 19.92642a.57054.57054 0 00.57739.06665c6.56647.93964 13.316.40033 19.93763.55451 1.53558.12945 1.44372-2.51965-.30219-2.23273-5.39386.52893-10.87506.21991-16.298.31879-.92121.0011-1.84448.0011-2.76538.01611-.47644.00775-1.11627-.03064-1.36078.47089A.601.601 0 0030.68917 19.92642zM30.83456 25.45139c5.117.36993 10.25476.11389 15.383.23883 1.64411-.11457 3.40412.39544 4.95826-.23175a.95722.95722 0 00-.00007-1.63947c-1.53369-.68353-3.48663-.2315-5.15289-.37616a102.37 102.37 0 00-15.35339.78845C29.93551 24.3552 30.184 25.39713 30.83456 25.45139zM49.11752 31.31717c.94842.03943 3.06183.39069 2.8844-1.17474-.15564-1.37366-2.14081-1.10944-3.13434-1.13684a61.34788 61.34788 0 00-9.24793.44555 2.70477 2.70477 0 00-1.69873.5932.63892.63892 0 00.15308 1.00177c.46045.38288 1.21521.27411 1.79816.27118C42.95195 31.17964 46.03684 31.20208 49.11752 31.31717zM51.42654 34.93973a32.22421 32.22421 0 00-10.40131.85944.73012.73012 0 00.19318 1.42736c3.39453.034 6.84143.13562 10.20813-.02649A1.1814 1.1814 0 0051.42654 34.93973zM35.97329 50.55283c-.0805-.09192-.11493-.13318.0354.05072C35.993 50.58432 35.98715 50.57065 35.97329 50.55283zM35.26833 53.44242c.04725.006.09009.02441.13581.02789C35.30959 53.43637 35.267 53.433 35.26833 53.44242zM35.6979 53.46951a1.153 1.153 0 01.12531-.03131A.21624.21624 0 0035.6979 53.46951zM36.37447 30.22287a3.86233 3.86233 0 00-2.28979.11212c-.29181.06568-.63373.18055-.71649.50495-.14722.96905 1.04327.62951 1.621.64233.53528-.07178 1.16241.06732 1.58722-.33581A.582.582 0 0036.37447 30.22287zM38.7936 35.33817a.79735.79735 0 000 1.59375A.79735.79735 0 0038.7936 35.33817zM19.60067 25.91385c2.17682.21307 4.34223-1.96191 3.68634-4.1499a.34982.34982 0 00-.38574-.25177c-.4162.07568-.275.611-.4516.89776a2.8075 2.8075 0 01-2.84906 1.98041A.76187.76187 0 0019.60067 25.91385zM24.74447 49.62949a10.96937 10.96937 0 00-1.95721.5636.50644.50644 0 00.134.9898 5.98511 5.98511 0 002.99194-.23272.7323.7323 0 00-.173-1.32379A1.70221 1.70221 0 0024.74447 49.62949zM21.59029 50.24961a.73872.73872 0 000 1.47656A.73872.73872 0 0021.59029 50.24961z"
                                            class="color4d4d4d svgShape"></path>
                                    </svg>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Escritor de Cartas
                                </div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1"><span
                                            class="font-bold">¡Próximamente!</span>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">

                        <div style="height: 100% !important;" class="report-box">
                            <div class="box p-5 h-full py-6">
                                <div class="flex">
                                    <svg style="width: 58px; !important" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 64 64" id="presentation">
                                        <path fill="#595bd4"
                                            d="M59.12972,4.77628h-48c-4.18939-.054-4.18835,8.05383,0,8v6.44793c-3.73126-1.81524-7.759,3.16327-5.20562,6.7627a3.88329,3.88329,0,0,0,1.92779,6.02814,8.50824,8.50824,0,0,0,4.90772,6.95575v.9591C2.19894,38.90323-1.68973,57.45407,5.12936,58.77732c11.012-1.86335,31.02569,7.14923,23.91589-13.001h5.08447v2.59784A4.02661,4.02661,0,0,0,32.019,52.9036a3.63071,3.63071,0,0,0,5.2398,2.3988c1.57038-.97314,2.80017-3.06818,1.63233-4.79779-.44922-.79181-1.05506-1.80609-2.07154-1.825a3.90306,3.90306,0,0,0-.68988-.30689V45.77628c33.96888,1.11853,20.401.79583,23-33C63.3182,12.83035,63.31875,4.72232,59.12972,4.77628ZM21.30062,6.89871c8.65222-.292,20.97772-.8396,29.46411-.4024a7.179,7.179,0,0,0-2.15,2.12653c-1.05573-.06092-2.16272-.11377-3.30658-.15882.4245-.25964,1.217-.613,1.01764-1.13269a.4593.4593,0,0,0-.53925-.26465,4.57215,4.57215,0,0,0-2.19787,1.33643q-1.03-.03251-2.089-.05664A8.66779,8.66779,0,0,0,42.055,7.64a.45054.45054,0,0,0-.50287-.65418,5.65892,5.65892,0,0,0-2.3078,1.31842q-1.04782-.01528-2.10681-.02289c.40637-.28485,1.77276-1.21862.71289-1.50769a7.98722,7.98722,0,0,0-3.19172,1.50061c-1.39508.002-2.788.01349-4.16021.03546a3.94539,3.94539,0,0,0,1.22308-.947.40055.40055,0,0,0-.34405-.59954,9.50993,9.50993,0,0,0-2.80671,1.58483c-.95971.0224-1.90521.04957-2.82818.08216.25921-.31647.88006-.60156.72052-1.07813a.41333.41333,0,0,0-.38562-.25934A4.13927,4.13927,0,0,0,23.08383,8.542c-1.63.07965-3.16108.17676-4.54944.292C19.43368,8.21939,20.75735,7.87845,21.30062,6.89871ZM10.78872,9.87522a.63865.63865,0,0,0-.10571.75891c-1.0542-.69867-.87085-3.85712.44629-3.85785.26208.36334,3.72863.32727,8.71258.17029-.77.49981-1.50256,1.04119-2.25763,1.56079a.39106.39106,0,0,0-.16388.42627c-1.43084.137-2.67462.29535-3.67651.47522.49329-.32758,2.183-1.72608.96887-2.06556a3.93055,3.93055,0,0,0-2.07666,1.04682A13.23058,13.23058,0,0,0,10.78872,9.87522ZM9.19613,20.88016c6.70166,4.53656,12.17877-6.12659,14.9342,2.78278C21.82314,30.374,16.85458,27.35306,12.8287,24.9064a.97469.97469,0,0,0-1.63123-1.01483c-.54352.47162-.68933,1.2237-1.23095,1.69025a1.39235,1.39235,0,0,1-1.585.22809C7.44912,24.143,5.86819,21.73917,9.19613,20.88016ZM9.8099,31.14639c-.39807-1.51123-3.80042-1.21789-2.44824-3.72522.912.04328,1.463.47992,2.34478.3949a3.39373,3.39373,0,0,0,2.1637-1.21466c1.98584,2.81909,7.59021,4.049,10.25958,2.34339C23.94351,38.43472,10.52371,41.38187,9.8099,31.14639Zm9.41455,10.76807,2.84375.50879-2.07666,2.07666L17.952,43.18839C18.01077,43.12851,19.161,41.98093,19.22445,41.91446ZM17.22884,46.972a.46241.46241,0,0,0-.51617-.21,4.9531,4.9531,0,0,0-1.92975,1.44458c.48956-5.38544,2.31818-4.99341,2.7251.27581a7.04789,7.04789,0,0,0-2.94769,2.4278c.02179-.35364.0459-.7077.07251-1.05945a11.13292,11.13292,0,0,1,1.70459-1.63031C16.70229,47.91818,17.492,47.54733,17.22884,46.972Zm-2.46923-7.40851a7.52219,7.52219,0,0,0,2.73-.0509,2.51137,2.51137,0,0,1-1.16169,2.47161C15.88857,41.50223,14.37936,40.373,14.75961,39.56351Zm-.06617,12.86816a9.78376,9.78376,0,0,1,2.949-2.39038c.05768.79328.10266,1.59821.14,2.36365-1.34094.00018-2.42077,1.17242-3.39428,1.98614.02459-.55346.051-1.17169.08221-1.822A.41181.41181,0,0,0,14.69344,52.43167ZM13.368,41.85294l1.17286,1.17285-2.27539,1.47168-2.0752-2.07471ZM12.19869,56.77628c-.90387-.37207-8.28564.96789-8.069-1-.11438-4.29334-.53381-10.28565,4.09119-12.49475.90662.49371,3.40918,4.62756,4.71826,3.16223Zm4.461,0a5.20423,5.20423,0,0,0,.84168-.99933.38938.38938,0,0,0-.52912-.529,6.80373,6.80373,0,0,0-1.15869.9917.494.494,0,0,0-.10571.53668H14.20394a7.19822,7.19822,0,0,0,.13172-1.30011c.5448.31982.94659-.34448,1.356-.61139.47766-.4065,1.50867-.9563,2.13794-1.43891a26.98253,26.98253,0,0,0,.22595,3.35041Zm11.46027-1c.2409,1.96582-7.18707.62988-8.05927,1l-.741-10.33228a1.09868,1.09868,0,0,0,1.517.03925l3.19343-3.19336C28.655,45.48038,28.2344,51.495,28.12,55.77628Zm8.08954-4.97217a3.18974,3.18974,0,0,1,.82409,1.243c.02454.19342-.16137.42975-.27606.59747-.29315.28-.51141.70771-.93432.79358.0227.02973-.13855.027-.17408.04352-.0589-.0058-.15222-.00366-.245-.01141-.00238-.0047-.13257-.00116-.13581-.02789-1.792-.2746-1.27679-3.711.61506-3.01844A2.11757,2.11757,0,0,0,36.2095,50.80411Zm20.92022-7.02783H27.7369c-1.77136-2.49243-5.26367-3.64331-8.24731-3.846V38.82114c4.14233-1.8028,5.03485-6.96039,4.63971-11.18494,4.22711-3.418,1.0285-9.27234-3.57148-9.83258-3.264-.46857-4.40216,3.02033-7.4281,2.35407V10.77628h44ZM57.816,8.59134a3.58768,3.58768,0,0,0-.85888.90173c-.65076-.12957-1.42426-.2489-2.30262-.35791.54187-.25329,2.24042-1.37548.963-1.75366a6.479,6.479,0,0,0-3.09845,1.52576c-.79566-.07276-1.64777-.13892-2.54181-.19916.46-.38214.95086-.72851,1.4071-1.11.24311-.2768.68708-.6344.482-1.03833,3.423.22161,6.10315.62817,7.48492,1.311A2.33308,2.33308,0,0,0,57.816,8.59134Zm2.31372,1.18494a1.0013,1.0013,0,0,1-1,1c.32038-.3534-.01-.66931-.84393-.94818.53626-.45832,1.87805-.74018,1.54791-1.66474A1.05794,1.05794,0,0,1,60.12972,9.77628Z"
                                            class="color4d4d4d svgShape"></path>
                                        <path fill="#595bd4"
                                            d="M30.68917 19.92642a.57054.57054 0 00.57739.06665c6.56647.93964 13.316.40033 19.93763.55451 1.53558.12945 1.44372-2.51965-.30219-2.23273-5.39386.52893-10.87506.21991-16.298.31879-.92121.0011-1.84448.0011-2.76538.01611-.47644.00775-1.11627-.03064-1.36078.47089A.601.601 0 0030.68917 19.92642zM30.83456 25.45139c5.117.36993 10.25476.11389 15.383.23883 1.64411-.11457 3.40412.39544 4.95826-.23175a.95722.95722 0 00-.00007-1.63947c-1.53369-.68353-3.48663-.2315-5.15289-.37616a102.37 102.37 0 00-15.35339.78845C29.93551 24.3552 30.184 25.39713 30.83456 25.45139zM49.11752 31.31717c.94842.03943 3.06183.39069 2.8844-1.17474-.15564-1.37366-2.14081-1.10944-3.13434-1.13684a61.34788 61.34788 0 00-9.24793.44555 2.70477 2.70477 0 00-1.69873.5932.63892.63892 0 00.15308 1.00177c.46045.38288 1.21521.27411 1.79816.27118C42.95195 31.17964 46.03684 31.20208 49.11752 31.31717zM51.42654 34.93973a32.22421 32.22421 0 00-10.40131.85944.73012.73012 0 00.19318 1.42736c3.39453.034 6.84143.13562 10.20813-.02649A1.1814 1.1814 0 0051.42654 34.93973zM35.97329 50.55283c-.0805-.09192-.11493-.13318.0354.05072C35.993 50.58432 35.98715 50.57065 35.97329 50.55283zM35.26833 53.44242c.04725.006.09009.02441.13581.02789C35.30959 53.43637 35.267 53.433 35.26833 53.44242zM35.6979 53.46951a1.153 1.153 0 01.12531-.03131A.21624.21624 0 0035.6979 53.46951zM36.37447 30.22287a3.86233 3.86233 0 00-2.28979.11212c-.29181.06568-.63373.18055-.71649.50495-.14722.96905 1.04327.62951 1.621.64233.53528-.07178 1.16241.06732 1.58722-.33581A.582.582 0 0036.37447 30.22287zM38.7936 35.33817a.79735.79735 0 000 1.59375A.79735.79735 0 0038.7936 35.33817zM19.60067 25.91385c2.17682.21307 4.34223-1.96191 3.68634-4.1499a.34982.34982 0 00-.38574-.25177c-.4162.07568-.275.611-.4516.89776a2.8075 2.8075 0 01-2.84906 1.98041A.76187.76187 0 0019.60067 25.91385zM24.74447 49.62949a10.96937 10.96937 0 00-1.95721.5636.50644.50644 0 00.134.9898 5.98511 5.98511 0 002.99194-.23272.7323.7323 0 00-.173-1.32379A1.70221 1.70221 0 0024.74447 49.62949zM21.59029 50.24961a.73872.73872 0 000 1.47656A.73872.73872 0 0021.59029 50.24961z"
                                            class="color4d4d4d svgShape"></path>
                                    </svg>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Explicalo con una Canción
                                </div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1"><span
                                            class="font-bold">¡Próximamente!</span>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">

                        <div style="height: 100% !important;" class="report-box">
                            <div class="box p-5 h-full py-6">
                                <div class="flex">
                                    <svg style="width: 58px; !important" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 64 64" id="presentation">
                                        <path fill="#595bd4"
                                            d="M59.12972,4.77628h-48c-4.18939-.054-4.18835,8.05383,0,8v6.44793c-3.73126-1.81524-7.759,3.16327-5.20562,6.7627a3.88329,3.88329,0,0,0,1.92779,6.02814,8.50824,8.50824,0,0,0,4.90772,6.95575v.9591C2.19894,38.90323-1.68973,57.45407,5.12936,58.77732c11.012-1.86335,31.02569,7.14923,23.91589-13.001h5.08447v2.59784A4.02661,4.02661,0,0,0,32.019,52.9036a3.63071,3.63071,0,0,0,5.2398,2.3988c1.57038-.97314,2.80017-3.06818,1.63233-4.79779-.44922-.79181-1.05506-1.80609-2.07154-1.825a3.90306,3.90306,0,0,0-.68988-.30689V45.77628c33.96888,1.11853,20.401.79583,23-33C63.3182,12.83035,63.31875,4.72232,59.12972,4.77628ZM21.30062,6.89871c8.65222-.292,20.97772-.8396,29.46411-.4024a7.179,7.179,0,0,0-2.15,2.12653c-1.05573-.06092-2.16272-.11377-3.30658-.15882.4245-.25964,1.217-.613,1.01764-1.13269a.4593.4593,0,0,0-.53925-.26465,4.57215,4.57215,0,0,0-2.19787,1.33643q-1.03-.03251-2.089-.05664A8.66779,8.66779,0,0,0,42.055,7.64a.45054.45054,0,0,0-.50287-.65418,5.65892,5.65892,0,0,0-2.3078,1.31842q-1.04782-.01528-2.10681-.02289c.40637-.28485,1.77276-1.21862.71289-1.50769a7.98722,7.98722,0,0,0-3.19172,1.50061c-1.39508.002-2.788.01349-4.16021.03546a3.94539,3.94539,0,0,0,1.22308-.947.40055.40055,0,0,0-.34405-.59954,9.50993,9.50993,0,0,0-2.80671,1.58483c-.95971.0224-1.90521.04957-2.82818.08216.25921-.31647.88006-.60156.72052-1.07813a.41333.41333,0,0,0-.38562-.25934A4.13927,4.13927,0,0,0,23.08383,8.542c-1.63.07965-3.16108.17676-4.54944.292C19.43368,8.21939,20.75735,7.87845,21.30062,6.89871ZM10.78872,9.87522a.63865.63865,0,0,0-.10571.75891c-1.0542-.69867-.87085-3.85712.44629-3.85785.26208.36334,3.72863.32727,8.71258.17029-.77.49981-1.50256,1.04119-2.25763,1.56079a.39106.39106,0,0,0-.16388.42627c-1.43084.137-2.67462.29535-3.67651.47522.49329-.32758,2.183-1.72608.96887-2.06556a3.93055,3.93055,0,0,0-2.07666,1.04682A13.23058,13.23058,0,0,0,10.78872,9.87522ZM9.19613,20.88016c6.70166,4.53656,12.17877-6.12659,14.9342,2.78278C21.82314,30.374,16.85458,27.35306,12.8287,24.9064a.97469.97469,0,0,0-1.63123-1.01483c-.54352.47162-.68933,1.2237-1.23095,1.69025a1.39235,1.39235,0,0,1-1.585.22809C7.44912,24.143,5.86819,21.73917,9.19613,20.88016ZM9.8099,31.14639c-.39807-1.51123-3.80042-1.21789-2.44824-3.72522.912.04328,1.463.47992,2.34478.3949a3.39373,3.39373,0,0,0,2.1637-1.21466c1.98584,2.81909,7.59021,4.049,10.25958,2.34339C23.94351,38.43472,10.52371,41.38187,9.8099,31.14639Zm9.41455,10.76807,2.84375.50879-2.07666,2.07666L17.952,43.18839C18.01077,43.12851,19.161,41.98093,19.22445,41.91446ZM17.22884,46.972a.46241.46241,0,0,0-.51617-.21,4.9531,4.9531,0,0,0-1.92975,1.44458c.48956-5.38544,2.31818-4.99341,2.7251.27581a7.04789,7.04789,0,0,0-2.94769,2.4278c.02179-.35364.0459-.7077.07251-1.05945a11.13292,11.13292,0,0,1,1.70459-1.63031C16.70229,47.91818,17.492,47.54733,17.22884,46.972Zm-2.46923-7.40851a7.52219,7.52219,0,0,0,2.73-.0509,2.51137,2.51137,0,0,1-1.16169,2.47161C15.88857,41.50223,14.37936,40.373,14.75961,39.56351Zm-.06617,12.86816a9.78376,9.78376,0,0,1,2.949-2.39038c.05768.79328.10266,1.59821.14,2.36365-1.34094.00018-2.42077,1.17242-3.39428,1.98614.02459-.55346.051-1.17169.08221-1.822A.41181.41181,0,0,0,14.69344,52.43167ZM13.368,41.85294l1.17286,1.17285-2.27539,1.47168-2.0752-2.07471ZM12.19869,56.77628c-.90387-.37207-8.28564.96789-8.069-1-.11438-4.29334-.53381-10.28565,4.09119-12.49475.90662.49371,3.40918,4.62756,4.71826,3.16223Zm4.461,0a5.20423,5.20423,0,0,0,.84168-.99933.38938.38938,0,0,0-.52912-.529,6.80373,6.80373,0,0,0-1.15869.9917.494.494,0,0,0-.10571.53668H14.20394a7.19822,7.19822,0,0,0,.13172-1.30011c.5448.31982.94659-.34448,1.356-.61139.47766-.4065,1.50867-.9563,2.13794-1.43891a26.98253,26.98253,0,0,0,.22595,3.35041Zm11.46027-1c.2409,1.96582-7.18707.62988-8.05927,1l-.741-10.33228a1.09868,1.09868,0,0,0,1.517.03925l3.19343-3.19336C28.655,45.48038,28.2344,51.495,28.12,55.77628Zm8.08954-4.97217a3.18974,3.18974,0,0,1,.82409,1.243c.02454.19342-.16137.42975-.27606.59747-.29315.28-.51141.70771-.93432.79358.0227.02973-.13855.027-.17408.04352-.0589-.0058-.15222-.00366-.245-.01141-.00238-.0047-.13257-.00116-.13581-.02789-1.792-.2746-1.27679-3.711.61506-3.01844A2.11757,2.11757,0,0,0,36.2095,50.80411Zm20.92022-7.02783H27.7369c-1.77136-2.49243-5.26367-3.64331-8.24731-3.846V38.82114c4.14233-1.8028,5.03485-6.96039,4.63971-11.18494,4.22711-3.418,1.0285-9.27234-3.57148-9.83258-3.264-.46857-4.40216,3.02033-7.4281,2.35407V10.77628h44ZM57.816,8.59134a3.58768,3.58768,0,0,0-.85888.90173c-.65076-.12957-1.42426-.2489-2.30262-.35791.54187-.25329,2.24042-1.37548.963-1.75366a6.479,6.479,0,0,0-3.09845,1.52576c-.79566-.07276-1.64777-.13892-2.54181-.19916.46-.38214.95086-.72851,1.4071-1.11.24311-.2768.68708-.6344.482-1.03833,3.423.22161,6.10315.62817,7.48492,1.311A2.33308,2.33308,0,0,0,57.816,8.59134Zm2.31372,1.18494a1.0013,1.0013,0,0,1-1,1c.32038-.3534-.01-.66931-.84393-.94818.53626-.45832,1.87805-.74018,1.54791-1.66474A1.05794,1.05794,0,0,1,60.12972,9.77628Z"
                                            class="color4d4d4d svgShape"></path>
                                        <path fill="#595bd4"
                                            d="M30.68917 19.92642a.57054.57054 0 00.57739.06665c6.56647.93964 13.316.40033 19.93763.55451 1.53558.12945 1.44372-2.51965-.30219-2.23273-5.39386.52893-10.87506.21991-16.298.31879-.92121.0011-1.84448.0011-2.76538.01611-.47644.00775-1.11627-.03064-1.36078.47089A.601.601 0 0030.68917 19.92642zM30.83456 25.45139c5.117.36993 10.25476.11389 15.383.23883 1.64411-.11457 3.40412.39544 4.95826-.23175a.95722.95722 0 00-.00007-1.63947c-1.53369-.68353-3.48663-.2315-5.15289-.37616a102.37 102.37 0 00-15.35339.78845C29.93551 24.3552 30.184 25.39713 30.83456 25.45139zM49.11752 31.31717c.94842.03943 3.06183.39069 2.8844-1.17474-.15564-1.37366-2.14081-1.10944-3.13434-1.13684a61.34788 61.34788 0 00-9.24793.44555 2.70477 2.70477 0 00-1.69873.5932.63892.63892 0 00.15308 1.00177c.46045.38288 1.21521.27411 1.79816.27118C42.95195 31.17964 46.03684 31.20208 49.11752 31.31717zM51.42654 34.93973a32.22421 32.22421 0 00-10.40131.85944.73012.73012 0 00.19318 1.42736c3.39453.034 6.84143.13562 10.20813-.02649A1.1814 1.1814 0 0051.42654 34.93973zM35.97329 50.55283c-.0805-.09192-.11493-.13318.0354.05072C35.993 50.58432 35.98715 50.57065 35.97329 50.55283zM35.26833 53.44242c.04725.006.09009.02441.13581.02789C35.30959 53.43637 35.267 53.433 35.26833 53.44242zM35.6979 53.46951a1.153 1.153 0 01.12531-.03131A.21624.21624 0 0035.6979 53.46951zM36.37447 30.22287a3.86233 3.86233 0 00-2.28979.11212c-.29181.06568-.63373.18055-.71649.50495-.14722.96905 1.04327.62951 1.621.64233.53528-.07178 1.16241.06732 1.58722-.33581A.582.582 0 0036.37447 30.22287zM38.7936 35.33817a.79735.79735 0 000 1.59375A.79735.79735 0 0038.7936 35.33817zM19.60067 25.91385c2.17682.21307 4.34223-1.96191 3.68634-4.1499a.34982.34982 0 00-.38574-.25177c-.4162.07568-.275.611-.4516.89776a2.8075 2.8075 0 01-2.84906 1.98041A.76187.76187 0 0019.60067 25.91385zM24.74447 49.62949a10.96937 10.96937 0 00-1.95721.5636.50644.50644 0 00.134.9898 5.98511 5.98511 0 002.99194-.23272.7323.7323 0 00-.173-1.32379A1.70221 1.70221 0 0024.74447 49.62949zM21.59029 50.24961a.73872.73872 0 000 1.47656A.73872.73872 0 0021.59029 50.24961z"
                                            class="color4d4d4d svgShape"></path>
                                    </svg>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Linea de Tiempo
                                </div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1"><span
                                            class="font-bold">¡Próximamente!</span>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">

                        <div style="height: 100% !important;" class="report-box">
                            <div class="box p-5 h-full py-6">
                                <div class="flex">
                                    <svg style="width: 58px; !important" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 64 64" id="presentation">
                                        <path fill="#595bd4"
                                            d="M59.12972,4.77628h-48c-4.18939-.054-4.18835,8.05383,0,8v6.44793c-3.73126-1.81524-7.759,3.16327-5.20562,6.7627a3.88329,3.88329,0,0,0,1.92779,6.02814,8.50824,8.50824,0,0,0,4.90772,6.95575v.9591C2.19894,38.90323-1.68973,57.45407,5.12936,58.77732c11.012-1.86335,31.02569,7.14923,23.91589-13.001h5.08447v2.59784A4.02661,4.02661,0,0,0,32.019,52.9036a3.63071,3.63071,0,0,0,5.2398,2.3988c1.57038-.97314,2.80017-3.06818,1.63233-4.79779-.44922-.79181-1.05506-1.80609-2.07154-1.825a3.90306,3.90306,0,0,0-.68988-.30689V45.77628c33.96888,1.11853,20.401.79583,23-33C63.3182,12.83035,63.31875,4.72232,59.12972,4.77628ZM21.30062,6.89871c8.65222-.292,20.97772-.8396,29.46411-.4024a7.179,7.179,0,0,0-2.15,2.12653c-1.05573-.06092-2.16272-.11377-3.30658-.15882.4245-.25964,1.217-.613,1.01764-1.13269a.4593.4593,0,0,0-.53925-.26465,4.57215,4.57215,0,0,0-2.19787,1.33643q-1.03-.03251-2.089-.05664A8.66779,8.66779,0,0,0,42.055,7.64a.45054.45054,0,0,0-.50287-.65418,5.65892,5.65892,0,0,0-2.3078,1.31842q-1.04782-.01528-2.10681-.02289c.40637-.28485,1.77276-1.21862.71289-1.50769a7.98722,7.98722,0,0,0-3.19172,1.50061c-1.39508.002-2.788.01349-4.16021.03546a3.94539,3.94539,0,0,0,1.22308-.947.40055.40055,0,0,0-.34405-.59954,9.50993,9.50993,0,0,0-2.80671,1.58483c-.95971.0224-1.90521.04957-2.82818.08216.25921-.31647.88006-.60156.72052-1.07813a.41333.41333,0,0,0-.38562-.25934A4.13927,4.13927,0,0,0,23.08383,8.542c-1.63.07965-3.16108.17676-4.54944.292C19.43368,8.21939,20.75735,7.87845,21.30062,6.89871ZM10.78872,9.87522a.63865.63865,0,0,0-.10571.75891c-1.0542-.69867-.87085-3.85712.44629-3.85785.26208.36334,3.72863.32727,8.71258.17029-.77.49981-1.50256,1.04119-2.25763,1.56079a.39106.39106,0,0,0-.16388.42627c-1.43084.137-2.67462.29535-3.67651.47522.49329-.32758,2.183-1.72608.96887-2.06556a3.93055,3.93055,0,0,0-2.07666,1.04682A13.23058,13.23058,0,0,0,10.78872,9.87522ZM9.19613,20.88016c6.70166,4.53656,12.17877-6.12659,14.9342,2.78278C21.82314,30.374,16.85458,27.35306,12.8287,24.9064a.97469.97469,0,0,0-1.63123-1.01483c-.54352.47162-.68933,1.2237-1.23095,1.69025a1.39235,1.39235,0,0,1-1.585.22809C7.44912,24.143,5.86819,21.73917,9.19613,20.88016ZM9.8099,31.14639c-.39807-1.51123-3.80042-1.21789-2.44824-3.72522.912.04328,1.463.47992,2.34478.3949a3.39373,3.39373,0,0,0,2.1637-1.21466c1.98584,2.81909,7.59021,4.049,10.25958,2.34339C23.94351,38.43472,10.52371,41.38187,9.8099,31.14639Zm9.41455,10.76807,2.84375.50879-2.07666,2.07666L17.952,43.18839C18.01077,43.12851,19.161,41.98093,19.22445,41.91446ZM17.22884,46.972a.46241.46241,0,0,0-.51617-.21,4.9531,4.9531,0,0,0-1.92975,1.44458c.48956-5.38544,2.31818-4.99341,2.7251.27581a7.04789,7.04789,0,0,0-2.94769,2.4278c.02179-.35364.0459-.7077.07251-1.05945a11.13292,11.13292,0,0,1,1.70459-1.63031C16.70229,47.91818,17.492,47.54733,17.22884,46.972Zm-2.46923-7.40851a7.52219,7.52219,0,0,0,2.73-.0509,2.51137,2.51137,0,0,1-1.16169,2.47161C15.88857,41.50223,14.37936,40.373,14.75961,39.56351Zm-.06617,12.86816a9.78376,9.78376,0,0,1,2.949-2.39038c.05768.79328.10266,1.59821.14,2.36365-1.34094.00018-2.42077,1.17242-3.39428,1.98614.02459-.55346.051-1.17169.08221-1.822A.41181.41181,0,0,0,14.69344,52.43167ZM13.368,41.85294l1.17286,1.17285-2.27539,1.47168-2.0752-2.07471ZM12.19869,56.77628c-.90387-.37207-8.28564.96789-8.069-1-.11438-4.29334-.53381-10.28565,4.09119-12.49475.90662.49371,3.40918,4.62756,4.71826,3.16223Zm4.461,0a5.20423,5.20423,0,0,0,.84168-.99933.38938.38938,0,0,0-.52912-.529,6.80373,6.80373,0,0,0-1.15869.9917.494.494,0,0,0-.10571.53668H14.20394a7.19822,7.19822,0,0,0,.13172-1.30011c.5448.31982.94659-.34448,1.356-.61139.47766-.4065,1.50867-.9563,2.13794-1.43891a26.98253,26.98253,0,0,0,.22595,3.35041Zm11.46027-1c.2409,1.96582-7.18707.62988-8.05927,1l-.741-10.33228a1.09868,1.09868,0,0,0,1.517.03925l3.19343-3.19336C28.655,45.48038,28.2344,51.495,28.12,55.77628Zm8.08954-4.97217a3.18974,3.18974,0,0,1,.82409,1.243c.02454.19342-.16137.42975-.27606.59747-.29315.28-.51141.70771-.93432.79358.0227.02973-.13855.027-.17408.04352-.0589-.0058-.15222-.00366-.245-.01141-.00238-.0047-.13257-.00116-.13581-.02789-1.792-.2746-1.27679-3.711.61506-3.01844A2.11757,2.11757,0,0,0,36.2095,50.80411Zm20.92022-7.02783H27.7369c-1.77136-2.49243-5.26367-3.64331-8.24731-3.846V38.82114c4.14233-1.8028,5.03485-6.96039,4.63971-11.18494,4.22711-3.418,1.0285-9.27234-3.57148-9.83258-3.264-.46857-4.40216,3.02033-7.4281,2.35407V10.77628h44ZM57.816,8.59134a3.58768,3.58768,0,0,0-.85888.90173c-.65076-.12957-1.42426-.2489-2.30262-.35791.54187-.25329,2.24042-1.37548.963-1.75366a6.479,6.479,0,0,0-3.09845,1.52576c-.79566-.07276-1.64777-.13892-2.54181-.19916.46-.38214.95086-.72851,1.4071-1.11.24311-.2768.68708-.6344.482-1.03833,3.423.22161,6.10315.62817,7.48492,1.311A2.33308,2.33308,0,0,0,57.816,8.59134Zm2.31372,1.18494a1.0013,1.0013,0,0,1-1,1c.32038-.3534-.01-.66931-.84393-.94818.53626-.45832,1.87805-.74018,1.54791-1.66474A1.05794,1.05794,0,0,1,60.12972,9.77628Z"
                                            class="color4d4d4d svgShape"></path>
                                        <path fill="#595bd4"
                                            d="M30.68917 19.92642a.57054.57054 0 00.57739.06665c6.56647.93964 13.316.40033 19.93763.55451 1.53558.12945 1.44372-2.51965-.30219-2.23273-5.39386.52893-10.87506.21991-16.298.31879-.92121.0011-1.84448.0011-2.76538.01611-.47644.00775-1.11627-.03064-1.36078.47089A.601.601 0 0030.68917 19.92642zM30.83456 25.45139c5.117.36993 10.25476.11389 15.383.23883 1.64411-.11457 3.40412.39544 4.95826-.23175a.95722.95722 0 00-.00007-1.63947c-1.53369-.68353-3.48663-.2315-5.15289-.37616a102.37 102.37 0 00-15.35339.78845C29.93551 24.3552 30.184 25.39713 30.83456 25.45139zM49.11752 31.31717c.94842.03943 3.06183.39069 2.8844-1.17474-.15564-1.37366-2.14081-1.10944-3.13434-1.13684a61.34788 61.34788 0 00-9.24793.44555 2.70477 2.70477 0 00-1.69873.5932.63892.63892 0 00.15308 1.00177c.46045.38288 1.21521.27411 1.79816.27118C42.95195 31.17964 46.03684 31.20208 49.11752 31.31717zM51.42654 34.93973a32.22421 32.22421 0 00-10.40131.85944.73012.73012 0 00.19318 1.42736c3.39453.034 6.84143.13562 10.20813-.02649A1.1814 1.1814 0 0051.42654 34.93973zM35.97329 50.55283c-.0805-.09192-.11493-.13318.0354.05072C35.993 50.58432 35.98715 50.57065 35.97329 50.55283zM35.26833 53.44242c.04725.006.09009.02441.13581.02789C35.30959 53.43637 35.267 53.433 35.26833 53.44242zM35.6979 53.46951a1.153 1.153 0 01.12531-.03131A.21624.21624 0 0035.6979 53.46951zM36.37447 30.22287a3.86233 3.86233 0 00-2.28979.11212c-.29181.06568-.63373.18055-.71649.50495-.14722.96905 1.04327.62951 1.621.64233.53528-.07178 1.16241.06732 1.58722-.33581A.582.582 0 0036.37447 30.22287zM38.7936 35.33817a.79735.79735 0 000 1.59375A.79735.79735 0 0038.7936 35.33817zM19.60067 25.91385c2.17682.21307 4.34223-1.96191 3.68634-4.1499a.34982.34982 0 00-.38574-.25177c-.4162.07568-.275.611-.4516.89776a2.8075 2.8075 0 01-2.84906 1.98041A.76187.76187 0 0019.60067 25.91385zM24.74447 49.62949a10.96937 10.96937 0 00-1.95721.5636.50644.50644 0 00.134.9898 5.98511 5.98511 0 002.99194-.23272.7323.7323 0 00-.173-1.32379A1.70221 1.70221 0 0024.74447 49.62949zM21.59029 50.24961a.73872.73872 0 000 1.47656A.73872.73872 0 0021.59029 50.24961z"
                                            class="color4d4d4d svgShape"></path>
                                    </svg>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Corrector de Gramática
                                </div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1"><span class="font-bold">¡Próximamente!
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">

                        <div style="height: 100% !important;" class="report-box">
                            <div class="box p-5 h-full py-6">
                                <div class="flex">
                                    <svg style="width: 58px; !important" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 64 64" id="presentation">
                                        <path fill="#595bd4"
                                            d="M59.12972,4.77628h-48c-4.18939-.054-4.18835,8.05383,0,8v6.44793c-3.73126-1.81524-7.759,3.16327-5.20562,6.7627a3.88329,3.88329,0,0,0,1.92779,6.02814,8.50824,8.50824,0,0,0,4.90772,6.95575v.9591C2.19894,38.90323-1.68973,57.45407,5.12936,58.77732c11.012-1.86335,31.02569,7.14923,23.91589-13.001h5.08447v2.59784A4.02661,4.02661,0,0,0,32.019,52.9036a3.63071,3.63071,0,0,0,5.2398,2.3988c1.57038-.97314,2.80017-3.06818,1.63233-4.79779-.44922-.79181-1.05506-1.80609-2.07154-1.825a3.90306,3.90306,0,0,0-.68988-.30689V45.77628c33.96888,1.11853,20.401.79583,23-33C63.3182,12.83035,63.31875,4.72232,59.12972,4.77628ZM21.30062,6.89871c8.65222-.292,20.97772-.8396,29.46411-.4024a7.179,7.179,0,0,0-2.15,2.12653c-1.05573-.06092-2.16272-.11377-3.30658-.15882.4245-.25964,1.217-.613,1.01764-1.13269a.4593.4593,0,0,0-.53925-.26465,4.57215,4.57215,0,0,0-2.19787,1.33643q-1.03-.03251-2.089-.05664A8.66779,8.66779,0,0,0,42.055,7.64a.45054.45054,0,0,0-.50287-.65418,5.65892,5.65892,0,0,0-2.3078,1.31842q-1.04782-.01528-2.10681-.02289c.40637-.28485,1.77276-1.21862.71289-1.50769a7.98722,7.98722,0,0,0-3.19172,1.50061c-1.39508.002-2.788.01349-4.16021.03546a3.94539,3.94539,0,0,0,1.22308-.947.40055.40055,0,0,0-.34405-.59954,9.50993,9.50993,0,0,0-2.80671,1.58483c-.95971.0224-1.90521.04957-2.82818.08216.25921-.31647.88006-.60156.72052-1.07813a.41333.41333,0,0,0-.38562-.25934A4.13927,4.13927,0,0,0,23.08383,8.542c-1.63.07965-3.16108.17676-4.54944.292C19.43368,8.21939,20.75735,7.87845,21.30062,6.89871ZM10.78872,9.87522a.63865.63865,0,0,0-.10571.75891c-1.0542-.69867-.87085-3.85712.44629-3.85785.26208.36334,3.72863.32727,8.71258.17029-.77.49981-1.50256,1.04119-2.25763,1.56079a.39106.39106,0,0,0-.16388.42627c-1.43084.137-2.67462.29535-3.67651.47522.49329-.32758,2.183-1.72608.96887-2.06556a3.93055,3.93055,0,0,0-2.07666,1.04682A13.23058,13.23058,0,0,0,10.78872,9.87522ZM9.19613,20.88016c6.70166,4.53656,12.17877-6.12659,14.9342,2.78278C21.82314,30.374,16.85458,27.35306,12.8287,24.9064a.97469.97469,0,0,0-1.63123-1.01483c-.54352.47162-.68933,1.2237-1.23095,1.69025a1.39235,1.39235,0,0,1-1.585.22809C7.44912,24.143,5.86819,21.73917,9.19613,20.88016ZM9.8099,31.14639c-.39807-1.51123-3.80042-1.21789-2.44824-3.72522.912.04328,1.463.47992,2.34478.3949a3.39373,3.39373,0,0,0,2.1637-1.21466c1.98584,2.81909,7.59021,4.049,10.25958,2.34339C23.94351,38.43472,10.52371,41.38187,9.8099,31.14639Zm9.41455,10.76807,2.84375.50879-2.07666,2.07666L17.952,43.18839C18.01077,43.12851,19.161,41.98093,19.22445,41.91446ZM17.22884,46.972a.46241.46241,0,0,0-.51617-.21,4.9531,4.9531,0,0,0-1.92975,1.44458c.48956-5.38544,2.31818-4.99341,2.7251.27581a7.04789,7.04789,0,0,0-2.94769,2.4278c.02179-.35364.0459-.7077.07251-1.05945a11.13292,11.13292,0,0,1,1.70459-1.63031C16.70229,47.91818,17.492,47.54733,17.22884,46.972Zm-2.46923-7.40851a7.52219,7.52219,0,0,0,2.73-.0509,2.51137,2.51137,0,0,1-1.16169,2.47161C15.88857,41.50223,14.37936,40.373,14.75961,39.56351Zm-.06617,12.86816a9.78376,9.78376,0,0,1,2.949-2.39038c.05768.79328.10266,1.59821.14,2.36365-1.34094.00018-2.42077,1.17242-3.39428,1.98614.02459-.55346.051-1.17169.08221-1.822A.41181.41181,0,0,0,14.69344,52.43167ZM13.368,41.85294l1.17286,1.17285-2.27539,1.47168-2.0752-2.07471ZM12.19869,56.77628c-.90387-.37207-8.28564.96789-8.069-1-.11438-4.29334-.53381-10.28565,4.09119-12.49475.90662.49371,3.40918,4.62756,4.71826,3.16223Zm4.461,0a5.20423,5.20423,0,0,0,.84168-.99933.38938.38938,0,0,0-.52912-.529,6.80373,6.80373,0,0,0-1.15869.9917.494.494,0,0,0-.10571.53668H14.20394a7.19822,7.19822,0,0,0,.13172-1.30011c.5448.31982.94659-.34448,1.356-.61139.47766-.4065,1.50867-.9563,2.13794-1.43891a26.98253,26.98253,0,0,0,.22595,3.35041Zm11.46027-1c.2409,1.96582-7.18707.62988-8.05927,1l-.741-10.33228a1.09868,1.09868,0,0,0,1.517.03925l3.19343-3.19336C28.655,45.48038,28.2344,51.495,28.12,55.77628Zm8.08954-4.97217a3.18974,3.18974,0,0,1,.82409,1.243c.02454.19342-.16137.42975-.27606.59747-.29315.28-.51141.70771-.93432.79358.0227.02973-.13855.027-.17408.04352-.0589-.0058-.15222-.00366-.245-.01141-.00238-.0047-.13257-.00116-.13581-.02789-1.792-.2746-1.27679-3.711.61506-3.01844A2.11757,2.11757,0,0,0,36.2095,50.80411Zm20.92022-7.02783H27.7369c-1.77136-2.49243-5.26367-3.64331-8.24731-3.846V38.82114c4.14233-1.8028,5.03485-6.96039,4.63971-11.18494,4.22711-3.418,1.0285-9.27234-3.57148-9.83258-3.264-.46857-4.40216,3.02033-7.4281,2.35407V10.77628h44ZM57.816,8.59134a3.58768,3.58768,0,0,0-.85888.90173c-.65076-.12957-1.42426-.2489-2.30262-.35791.54187-.25329,2.24042-1.37548.963-1.75366a6.479,6.479,0,0,0-3.09845,1.52576c-.79566-.07276-1.64777-.13892-2.54181-.19916.46-.38214.95086-.72851,1.4071-1.11.24311-.2768.68708-.6344.482-1.03833,3.423.22161,6.10315.62817,7.48492,1.311A2.33308,2.33308,0,0,0,57.816,8.59134Zm2.31372,1.18494a1.0013,1.0013,0,0,1-1,1c.32038-.3534-.01-.66931-.84393-.94818.53626-.45832,1.87805-.74018,1.54791-1.66474A1.05794,1.05794,0,0,1,60.12972,9.77628Z"
                                            class="color4d4d4d svgShape"></path>
                                        <path fill="#595bd4"
                                            d="M30.68917 19.92642a.57054.57054 0 00.57739.06665c6.56647.93964 13.316.40033 19.93763.55451 1.53558.12945 1.44372-2.51965-.30219-2.23273-5.39386.52893-10.87506.21991-16.298.31879-.92121.0011-1.84448.0011-2.76538.01611-.47644.00775-1.11627-.03064-1.36078.47089A.601.601 0 0030.68917 19.92642zM30.83456 25.45139c5.117.36993 10.25476.11389 15.383.23883 1.64411-.11457 3.40412.39544 4.95826-.23175a.95722.95722 0 00-.00007-1.63947c-1.53369-.68353-3.48663-.2315-5.15289-.37616a102.37 102.37 0 00-15.35339.78845C29.93551 24.3552 30.184 25.39713 30.83456 25.45139zM49.11752 31.31717c.94842.03943 3.06183.39069 2.8844-1.17474-.15564-1.37366-2.14081-1.10944-3.13434-1.13684a61.34788 61.34788 0 00-9.24793.44555 2.70477 2.70477 0 00-1.69873.5932.63892.63892 0 00.15308 1.00177c.46045.38288 1.21521.27411 1.79816.27118C42.95195 31.17964 46.03684 31.20208 49.11752 31.31717zM51.42654 34.93973a32.22421 32.22421 0 00-10.40131.85944.73012.73012 0 00.19318 1.42736c3.39453.034 6.84143.13562 10.20813-.02649A1.1814 1.1814 0 0051.42654 34.93973zM35.97329 50.55283c-.0805-.09192-.11493-.13318.0354.05072C35.993 50.58432 35.98715 50.57065 35.97329 50.55283zM35.26833 53.44242c.04725.006.09009.02441.13581.02789C35.30959 53.43637 35.267 53.433 35.26833 53.44242zM35.6979 53.46951a1.153 1.153 0 01.12531-.03131A.21624.21624 0 0035.6979 53.46951zM36.37447 30.22287a3.86233 3.86233 0 00-2.28979.11212c-.29181.06568-.63373.18055-.71649.50495-.14722.96905 1.04327.62951 1.621.64233.53528-.07178 1.16241.06732 1.58722-.33581A.582.582 0 0036.37447 30.22287zM38.7936 35.33817a.79735.79735 0 000 1.59375A.79735.79735 0 0038.7936 35.33817zM19.60067 25.91385c2.17682.21307 4.34223-1.96191 3.68634-4.1499a.34982.34982 0 00-.38574-.25177c-.4162.07568-.275.611-.4516.89776a2.8075 2.8075 0 01-2.84906 1.98041A.76187.76187 0 0019.60067 25.91385zM24.74447 49.62949a10.96937 10.96937 0 00-1.95721.5636.50644.50644 0 00.134.9898 5.98511 5.98511 0 002.99194-.23272.7323.7323 0 00-.173-1.32379A1.70221 1.70221 0 0024.74447 49.62949zM21.59029 50.24961a.73872.73872 0 000 1.47656A.73872.73872 0 0021.59029 50.24961z"
                                            class="color4d4d4d svgShape"></path>
                                    </svg>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Consejos de Comportamiento en el
                                    Aula
                                </div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1"><span
                                            class="font-bold">¡Próximamente!</span>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection