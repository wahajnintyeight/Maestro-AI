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
                        Herramientas para el aula
                    </h2>

                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        @if ($user->is_paid == 1)
                        <a href="{{ route('teacher.showConceptExplainer') }}">
                            <div style="height: 100% !important;" class="report-box zoom-in">
                                <div class="box h-full p-5 py-10">
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
                                    <div class="text-3xl font-medium leading-8 mt-6">Explicador de conceptos</div>
                                    <div class="text-base text-slate-500 mt-1">Aprende y explora nuevos conceptos usando
                                        IA</div>
                                </div>
                            </div>
                        </a>
                        @else
                        <div style="height: 100% !important;" class="report-box">
                            <div class="box h-full p-5 py-6">
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
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Explicador de conceptos</div>
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
                        @if ($user->is_paid == 1)
                        <a href="{{ route('teacher.showWorksheetGenerator') }}">
                            <div style="height: 100% !important;" class="report-box zoom-in">
                                <div class="box h-full p-5 py-10">
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
                                    <div class="text-base text-slate-500 mt-1">Crea tareas y ejercicios para tus clases
                                    </div>
                                </div>
                            </div>
                        </a>
                        @else
                        <div style="height: 100% !important;" class="report-box">
                            <div class="box h-full p-5 py-6">
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
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Generador de actividades</div>
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
                        @if ($user->is_paid == 1)
                        <a href="{{ route('teacher.comprehension.form') }}">
                            <div style="height: 100% !important;" class="report-box zoom-in">
                                <div class="box h-full p-5 py-10">
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
                                    <div class="text-base text-slate-500 mt-1">Genera preguntas con precisión y rapidez,
                                        gracias a la IA.</div>
                                </div>
                            </div>
                        </a>
                        @else
                        <div style="height: 100% !important;" class="report-box">
                            <div class="box h-full p-5 py-6">
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
                </div>

            </div>
        </div>
    </div>
</div>
@endsection