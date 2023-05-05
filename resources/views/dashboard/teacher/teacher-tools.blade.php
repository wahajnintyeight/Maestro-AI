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
                        @if ($user->is_paid == 1)
                        <a href="{{ route('teacher.showLessonPlanner') }}">
                            <div class="report-box zoom-in">
                                <div class="box p-5 py-10">
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 58px;"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" id="lesson">
                                            <defs>
                                                <linearGradient id="a" x1="32" x2="32" y1="63.323" y2="-1.327"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#e93e3a"></stop>
                                                    <stop offset=".35" stop-color="#ed683c"></stop>
                                                    <stop offset=".7" stop-color="#f3903f"></stop>
                                                    <stop offset="1" stop-color="#fdc70c"></stop>
                                                </linearGradient>
                                                <linearGradient id="b" x1="55" x2="55" y1="63.323" y2="-1.327"
                                                    xlink:href="#a">
                                                </linearGradient>
                                                <linearGradient id="c" x1="32.667" x2="32.667" y1="63.323" y2="-1.327"
                                                    xlink:href="#a">
                                                </linearGradient>
                                                <linearGradient id="d" x1="49" x2="49" y1="63.323" y2="-1.327"
                                                    xlink:href="#a">
                                                </linearGradient>
                                                <linearGradient id="e" x1="44" x2="44" y1="63.323" y2="-1.327"
                                                    xlink:href="#a">
                                                </linearGradient>
                                                <linearGradient id="f" x1="52" x2="52" y1="63.323" y2="-1.327"
                                                    xlink:href="#a">
                                                </linearGradient>
                                                <linearGradient id="g" x1="15" x2="15" y1="63.323" y2="-1.327"
                                                    xlink:href="#a">
                                                </linearGradient>
                                                <linearGradient id="h" x1="10" x2="10" y1="63.323" y2="-1.327"
                                                    xlink:href="#a">
                                                </linearGradient>
                                                <linearGradient id="i" x1="18" x2="18" y1="63.323" y2="-1.327"
                                                    xlink:href="#a">
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
                                        <div class="ml-auto">

                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">Planificador de Lecciones</div>
                                    <div class="text-base text-slate-500 mt-1">Organiza tus lecciones con precisión
                                        y
                                        facilidad, gracias a la IA.</div>
                                </div>
                            </div>
                        </a>
                        @else
                        <div class="report-box">
                            <div class="box p-5 py-6">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 58px;"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" id="lesson">
                                        <defs>
                                            <linearGradient id="a" x1="32" x2="32" y1="63.323" y2="-1.327"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#e93e3a"></stop>
                                                <stop offset=".35" stop-color="#ed683c"></stop>
                                                <stop offset=".7" stop-color="#f3903f"></stop>
                                                <stop offset="1" stop-color="#fdc70c"></stop>
                                            </linearGradient>
                                            <linearGradient id="b" x1="55" x2="55" y1="63.323" y2="-1.327"
                                                xlink:href="#a"></linearGradient>
                                            <linearGradient id="c" x1="32.667" x2="32.667" y1="63.323" y2="-1.327"
                                                xlink:href="#a">
                                            </linearGradient>
                                            <linearGradient id="d" x1="49" x2="49" y1="63.323" y2="-1.327"
                                                xlink:href="#a"></linearGradient>
                                            <linearGradient id="e" x1="44" x2="44" y1="63.323" y2="-1.327"
                                                xlink:href="#a"></linearGradient>
                                            <linearGradient id="f" x1="52" x2="52" y1="63.323" y2="-1.327"
                                                xlink:href="#a"></linearGradient>
                                            <linearGradient id="g" x1="15" x2="15" y1="63.323" y2="-1.327"
                                                xlink:href="#a"></linearGradient>
                                            <linearGradient id="h" x1="10" x2="10" y1="63.323" y2="-1.327"
                                                xlink:href="#a"></linearGradient>
                                            <linearGradient id="i" x1="18" x2="18" y1="63.323" y2="-1.327"
                                                xlink:href="#a"></linearGradient>
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
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Planificador de Lecciones
                                </div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1">Want access? <span
                                            class="font-bold">Upgrade to
                                            Premium</span>
                                    </div>
                                    <a href="{{ route('teacher.teacherAccountInfo') }}"
                                        class="btn rounded-md py-3 px-4 block mx-auto">Upgrade</a>
                                </div>

                            </div>
                        </div>
                        @endif
                    </div>


                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        @if ($user->is_paid == 1)
                        <a href="{{ route('teacher.showRubricGenerator') }}">
                            <div class="report-box zoom-in">
                                <div class="box p-5 py-10">
                                    <div class="flex">
                                        <svg style="width: 58px !important" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" id="tablechart">
                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                            <path
                                                d="M10 10.02h5V21h-5V10.02zM17 21h3c1.1 0 2-.9 2-2v-9h-5v11zm3-18H5c-1.1 0-2 .9-2 2v3h19V5c0-1.1-.9-2-2-2zM3 19c0 1.1.9 2 2 2h3V10H3v9z"
                                                fill="#d8a353" class="color000000 svgShape"></path>
                                        </svg>
                                        <div class="ml-auto">

                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">Generador de rúbricas</div>
                                    <div class="text-base text-slate-500 mt-1">Crea hojas de trabajo personalizadas
                                        con la
                                        ayuda de la IA.</div>
                                </div>
                            </div>
                        </a>
                        @else
                        <div class="report-box">
                            <div class="box p-5 py-6">
                                <div class="flex">
                                    <svg style="width: 58px !important" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" id="tablechart">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path
                                            d="M10 10.02h5V21h-5V10.02zM17 21h3c1.1 0 2-.9 2-2v-9h-5v11zm3-18H5c-1.1 0-2 .9-2 2v3h19V5c0-1.1-.9-2-2-2zM3 19c0 1.1.9 2 2 2h3V10H3v9z"
                                            fill="#d8a353" class="color000000 svgShape"></path>
                                    </svg>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Generador de rúbricas</div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1">Want access? <span
                                            class="font-bold">Upgrade to
                                            Premium</span>
                                    </div>
                                    <a href="{{ route('teacher.teacherAccountInfo') }}"
                                        class="btn rounded-md py-3 px-4 block mx-auto">Upgrade</a>
                                </div>

                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        @if ($user->is_paid == 1)
                        <a href="{{ route('teacher.showSlidesGenerator') }}">
                            <div class="report-box zoom-in">
                                <div class="box p-5 py-10">
                                    <div class="flex">
                                        <svg style="width: 58px; !important" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 50 50" id="presentationboard">
                                            <path
                                                d="M26 3V1h-2v2H1v2h2v26H1v2h19.471L14 47.791V49h2v-.791L22.654 33H24v16h2V33h1.346L34 48.209V49h2v-1.209L29.529 33H49v-2h-2V5h2V3H26zm19 28H5V5h40v26z"
                                                fill="#d8a353" class="color000000 svgShape"></path>
                                            <path
                                                d="M16 28c4.411 0 8-3.589 8-8v-1h-7v-7h-1c-4.411 0-8 3.589-8 8s3.589 8 8 8zm-1-13.917V21h6.917A6.01 6.01 0 0 1 16 26c-3.309 0-6-2.691-6-6a6.01 6.01 0 0 1 5-5.917z"
                                                fill="#d8a353" class="color000000 svgShape"></path>
                                            <path
                                                d="M28 16c0-4.411-3.589-8-8-8h-1v9h9v-1zm-7-1v-4.917A6.016 6.016 0 0 1 25.917 15H21zM31 10h10v2H31zM31 15h10v2H31zM31 20h10v2H31z"
                                                fill="#d8a353" class="color000000 svgShape"></path>
                                        </svg>
                                        <div class="ml-auto">

                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">Generador de Presentaciones
                                    </div>
                                    <div class="text-base text-slate-500 mt-1">Crea hojas de trabajo personalizadas
                                        con
                                        la
                                        ayuda de la IA.</div>
                                </div>
                            </div>
                        </a>
                        @else
                        <div class="report-box">
                            <div class="box p-5 py-6">
                                <div class="flex">
                                    <svg style="width: 58px; !important" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 50 50" id="presentationboard">
                                        <path
                                            d="M26 3V1h-2v2H1v2h2v26H1v2h19.471L14 47.791V49h2v-.791L22.654 33H24v16h2V33h1.346L34 48.209V49h2v-1.209L29.529 33H49v-2h-2V5h2V3H26zm19 28H5V5h40v26z"
                                            fill="#d8a353" class="color000000 svgShape"></path>
                                        <path
                                            d="M16 28c4.411 0 8-3.589 8-8v-1h-7v-7h-1c-4.411 0-8 3.589-8 8s3.589 8 8 8zm-1-13.917V21h6.917A6.01 6.01 0 0 1 16 26c-3.309 0-6-2.691-6-6a6.01 6.01 0 0 1 5-5.917z"
                                            fill="#d8a353" class="color000000 svgShape"></path>
                                        <path
                                            d="M28 16c0-4.411-3.589-8-8-8h-1v9h9v-1zm-7-1v-4.917A6.016 6.016 0 0 1 25.917 15H21zM31 10h10v2H31zM31 15h10v2H31zM31 20h10v2H31z"
                                            fill="#d8a353" class="color000000 svgShape"></path>
                                    </svg>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Generador de Presentaciones
                                </div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1">Want access? <span
                                            class="font-bold">Upgrade to
                                            Premium</span>
                                    </div>
                                    <a href="{{ route('teacher.teacherAccountInfo') }}"
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