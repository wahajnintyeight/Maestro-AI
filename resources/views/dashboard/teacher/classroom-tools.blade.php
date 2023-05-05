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
                        Classroom Tools
                    </h2>

                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        @if ($user->is_paid == 1)
                        <a href="{{ route('teacher.showConceptExplainer') }}">
                            <div class="report-box zoom-in">
                                <div class="box p-5 py-10">
                                    <div class="flex">
                                        <svg style="width: 58px !important;" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="64" id="idea">
                                            <defs>
                                                <linearGradient id="b" x1="906.952" x2="931.379" y1="515.915"
                                                    y2="546.094"
                                                    gradientTransform="translate(-1388.715 212.304) scale(1.53785)"
                                                    gradientUnits="userSpaceOnUse" xlink:href="#a"></linearGradient>
                                                <linearGradient id="a">
                                                    <stop offset="0" stop-color="#ffd800"></stop>
                                                    <stop offset="1" stop-color="#ff6100"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g transform="translate(-.004 -1005.324)">
                                                <rect width="48" height="48" x=".004" y="1005.324" fill="url(#b)"
                                                    rx="10.144" ry="10.144"></rect>
                                                <path
                                                    style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-transform:none;block-progression:tb"
                                                    fill="#fff"
                                                    d="m23.768 1013.31-.496.063-.6.08-.043.01-.385.086-.488.107.217.977.488-.108.385-.086h.002l.555-.072.496-.065zm1.18.056-.213.978.488.106.51.113h.011l.403.127.478.148.297-.955-.478-.148-.446-.139-.04-.01-.522-.115zm-4.239.713-.445.228-.045.025-.037.02-.514.32-.033.023-.275.206-.4.298.597.801.4-.299.264-.195.012-.01.455-.281.033-.018.445-.229zm7.268.322-.594.803.4.297.444.328.306.27.375.33.66-.753-.374-.33-.323-.283-.033-.024-.459-.34zm-4.47 17.951v12.984h1v-12.984zm-5.335-16.35-.314.393-.047.061-.026.031-.34.504-.023.037-.154.275-.242.438.873.486.242-.435.133-.24.004-.01.312-.463.006-.01.041-.051.312-.39zm5.834.303a4.606 4.606 0 0 1 4.617 4.61c0 1.366-.683 2.352-1.459 3.59-.706 1.127-1.39 2.52-1.52 4.386h-1.138v-3.412a.52.52 0 0 0-.5-.507.52.52 0 0 0-.5.507v3.412h-1.139c-.13-1.866-.813-3.26-1.52-4.387-.775-1.237-1.458-2.223-1.458-3.59a4.606 4.606 0 0 1 4.617-4.609zm6.326.268-.873.488.246.436.28.492.005.016.157.344.207.455.91-.414-.207-.455-.162-.358-.02-.039-.299-.53zm-13.707 2.226-.123.485-.043.168-.008.043-.103.625-.004.043-.016.191-.037.5.998.074.037-.498.01-.15.002-.01.098-.602.002-.014.033-.125.123-.484zm14.934.68-.987.166.083.492.015.09.047.604-.002.213-.004.5 1 .012.004-.5.002-.256-.002-.045-.049-.621-.006-.043-.02-.117zm-14.235 2.32-.982.182.09.492.049.268.01.04.16.585.013.04.041.114.172.47.94-.343-.172-.47-.037-.102-.004-.012-.143-.52-.045-.252zm13.26.616-.13.48-.048.176-.002.01-.183.506-.08.172-.21.453.909.418.209-.453.088-.188.016-.039.205-.568.013-.04.05-.183.128-.482zm-12.385 2.02-.824.566.283.412.166.242.026.033.385.469.027.03.07.073.348.359.719-.697-.35-.36-.057-.059-.011-.012-.342-.418-.156-.228zm11.272.519-.316.386-.12.147-.396.412-.012.012-.103.092-.377.326.658.754.377-.33.135-.12.03-.026.423-.438.029-.033.133-.162.314-.388zm-7.012 4.937h1.467c.054.01.109.01.162 0h1.465v1.461h-3.094zm-3.242 4.62h.002c2.044 0 3.721 1.445 4.16 3.398-.342.087-.683.188-1.037.19-2.045 0-3.725-1.446-4.164-3.4.342-.086.685-.187 1.04-.189zm9.594 2.349h.002c.348 0 .684.1 1.021.186-.436 1.927-2.093 3.35-4.111 3.353-.35 0-.686-.1-1.024-.185.436-1.928 2.093-3.352 4.112-3.354z"
                                                    color="#000" font-family="sans-serif" font-weight="400"
                                                    overflow="visible"></path>
                                            </g>
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
                        <div class="report-box">
                            <div class="box p-5 py-6">
                                <div class="flex">
                                    <svg style="width: 58px !important;" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="64" id="idea">
                                        <defs>
                                            <linearGradient id="b" x1="906.952" x2="931.379" y1="515.915" y2="546.094"
                                                gradientTransform="translate(-1388.715 212.304) scale(1.53785)"
                                                gradientUnits="userSpaceOnUse" xlink:href="#a"></linearGradient>
                                            <linearGradient id="a">
                                                <stop offset="0" stop-color="#ffd800"></stop>
                                                <stop offset="1" stop-color="#ff6100"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g transform="translate(-.004 -1005.324)">
                                            <rect width="48" height="48" x=".004" y="1005.324" fill="url(#b)"
                                                rx="10.144" ry="10.144"></rect>
                                            <path
                                                style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-transform:none;block-progression:tb"
                                                fill="#fff"
                                                d="m23.768 1013.31-.496.063-.6.08-.043.01-.385.086-.488.107.217.977.488-.108.385-.086h.002l.555-.072.496-.065zm1.18.056-.213.978.488.106.51.113h.011l.403.127.478.148.297-.955-.478-.148-.446-.139-.04-.01-.522-.115zm-4.239.713-.445.228-.045.025-.037.02-.514.32-.033.023-.275.206-.4.298.597.801.4-.299.264-.195.012-.01.455-.281.033-.018.445-.229zm7.268.322-.594.803.4.297.444.328.306.27.375.33.66-.753-.374-.33-.323-.283-.033-.024-.459-.34zm-4.47 17.951v12.984h1v-12.984zm-5.335-16.35-.314.393-.047.061-.026.031-.34.504-.023.037-.154.275-.242.438.873.486.242-.435.133-.24.004-.01.312-.463.006-.01.041-.051.312-.39zm5.834.303a4.606 4.606 0 0 1 4.617 4.61c0 1.366-.683 2.352-1.459 3.59-.706 1.127-1.39 2.52-1.52 4.386h-1.138v-3.412a.52.52 0 0 0-.5-.507.52.52 0 0 0-.5.507v3.412h-1.139c-.13-1.866-.813-3.26-1.52-4.387-.775-1.237-1.458-2.223-1.458-3.59a4.606 4.606 0 0 1 4.617-4.609zm6.326.268-.873.488.246.436.28.492.005.016.157.344.207.455.91-.414-.207-.455-.162-.358-.02-.039-.299-.53zm-13.707 2.226-.123.485-.043.168-.008.043-.103.625-.004.043-.016.191-.037.5.998.074.037-.498.01-.15.002-.01.098-.602.002-.014.033-.125.123-.484zm14.934.68-.987.166.083.492.015.09.047.604-.002.213-.004.5 1 .012.004-.5.002-.256-.002-.045-.049-.621-.006-.043-.02-.117zm-14.235 2.32-.982.182.09.492.049.268.01.04.16.585.013.04.041.114.172.47.94-.343-.172-.47-.037-.102-.004-.012-.143-.52-.045-.252zm13.26.616-.13.48-.048.176-.002.01-.183.506-.08.172-.21.453.909.418.209-.453.088-.188.016-.039.205-.568.013-.04.05-.183.128-.482zm-12.385 2.02-.824.566.283.412.166.242.026.033.385.469.027.03.07.073.348.359.719-.697-.35-.36-.057-.059-.011-.012-.342-.418-.156-.228zm11.272.519-.316.386-.12.147-.396.412-.012.012-.103.092-.377.326.658.754.377-.33.135-.12.03-.026.423-.438.029-.033.133-.162.314-.388zm-7.012 4.937h1.467c.054.01.109.01.162 0h1.465v1.461h-3.094zm-3.242 4.62h.002c2.044 0 3.721 1.445 4.16 3.398-.342.087-.683.188-1.037.19-2.045 0-3.725-1.446-4.164-3.4.342-.086.685-.187 1.04-.189zm9.594 2.349h.002c.348 0 .684.1 1.021.186-.436 1.927-2.093 3.35-4.111 3.353-.35 0-.686-.1-1.024-.185.436-1.928 2.093-3.352 4.112-3.354z"
                                                color="#000" font-family="sans-serif" font-weight="400"
                                                overflow="visible"></path>
                                        </g>
                                    </svg>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Explicador de conceptos</div>
                                <div class="flex items-baseline align-middle" style="width: 80%; align-items: center;">
                                    <div class="text-base text-slate-500 mt-1">Want access? <span
                                            class="font-bold">Upgrade to Premium</span>
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
                            <div class="report-box zoom-in">
                                <div class="box p-5 py-10">
                                    <div class="flex">
                                        <svg style="width: 58px !important;" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 32 32" id="Document">
                                            <path
                                                d="M4 32h24a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v28a2 2 0 0 0 2 2zM4 2h24v28H4V2zm19 4h-8a1 1 0 0 0 0 2h8a1 1 0 0 0 0-2zm0 6H9a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2zm0 6H9a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2zm0 6H9a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2z"
                                                fill="#d8a353" class="color000000 svgShape"></path>
                                        </svg>
                                        <div class="ml-auto">

                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">Generador de ejercicios</div>
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
                                    <svg style="width: 58px !important;" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 32 32" id="Document">
                                        <path
                                            d="M4 32h24a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v28a2 2 0 0 0 2 2zM4 2h24v28H4V2zm19 4h-8a1 1 0 0 0 0 2h8a1 1 0 0 0 0-2zm0 6H9a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2zm0 6H9a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2zm0 6H9a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2z"
                                            fill="#d8a353" class="color000000 svgShape"></path>
                                    </svg>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Generador de ejercicios</div>
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
                        <a href="{{ route('teacher.comprehension.form') }}">
                            <div class="report-box zoom-in">
                                <div class="box p-5 py-10">
                                    <div class="flex">
                                        <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                            id="questionnaire">
                                            <linearGradient id="a" x1="925.021" x2="937.235" y1="-571.934" y2="-587.024"
                                                gradientTransform="matrix(3.0757 0 0 -3.0757 -2839.739 -1758.136)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#FCD600"></stop>
                                                <stop offset="1" stop-color="#F16222"></stop>
                                            </linearGradient>
                                            <path fill="url(#a)"
                                                d="M10.1 0h27.7C43.5 0 48 4.5 48 10.1v27.7C48 43.5 43.5 48 37.9 48H10.1C4.5 48 0 43.5 0 37.9V10.1C0 4.5 4.5 0 10.1 0z">
                                            </path>
                                            <path fill="#fff"
                                                d="M19.5 32.5h-.2c-.3-.1-.4-.4-.3-.7l7.4-17c.1-.3.4-.4.7-.3.3.1.4.4.3.7l-7.4 17c-.1.2-.3.3-.5.3z">
                                            </path>
                                            <path fill="#fff"
                                                d="M32 33.5c-.1 0-.2 0-.3-.1l-3.9-2.9H21c-.2 0-.5 0-.7-.1-.3-.1-.4-.4-.3-.6.1-.3.4-.4.6-.3.1 0 .3.1.4.1h7c.1 0 .2 0 .3.1l3.2 2.4v-2c0-.3.2-.5.5-.5h1c.8 0 1.5-.7 1.5-1.5v-7c0-.8-.7-1.5-1.5-1.5h-7.8c-.3 0-.5-.2-.5-.5s.2-.5.5-.5H33c1.4 0 2.5 1.1 2.5 2.5v7c0 1.4-1.1 2.5-2.5 2.5h-.5V33c0 .2-.1.4-.3.4-.1.1-.1.1-.2.1zm-13-8h-1c-.8 0-1.5-.7-1.5-1.5v-3c0-.8.7-1.5 1.5-1.5h1c.8 0 1.5.7 1.5 1.5v3c0 .8-.7 1.5-1.5 1.5zm-1-5c-.3 0-.5.2-.5.5v3c0 .3.2.5.5.5h1c.3 0 .5-.2.5-.5v-3c0-.3-.2-.5-.5-.5h-1z">
                                            </path>
                                            <path fill="#fff"
                                                d="M30 27.5c-.3 0-.5-.2-.5-.5v-4c0-.3-.2-.5-.5-.5h-2c-.3 0-.5.2-.5.5v4c0 .3-.2.5-.5.5s-.5-.2-.5-.5v-4c0-.8.7-1.5 1.5-1.5h2c.8 0 1.5.7 1.5 1.5v4c0 .3-.2.5-.5.5z">
                                            </path>
                                            <path fill="#fff"
                                                d="M29.5 25.5h-3c-.3 0-.5-.2-.5-.5s.2-.5.5-.5h3c.3 0 .5.2.5.5s-.2.5-.5.5zm-8.5 0c-.1 0-.3 0-.4-.1l-2-2c-.2-.2-.2-.5 0-.7s.5-.2.7 0l2 2c.2.2.2.5 0 .7 0 .1-.2.1-.3.1z">
                                            </path>
                                            <path fill="#fff"
                                                d="M15 31.5c-.1 0-.2 0-.2-.1-.2-.1-.3-.3-.3-.4v-2.5H14c-1.4 0-2.5-1.1-2.5-2.5v-7c0-1.4 1.1-2.5 2.5-2.5h12c.3 0 .5.2.5.5s-.2.5-.5.5H14c-.8 0-1.5.7-1.5 1.5v7c0 .8.7 1.5 1.5 1.5h1c.3 0 .5.2.5.5v2l3.2-2.4c.1-.1.2-.1.3-.1h2c.3 0 .5.2.5.5s-.2.5-.5.5h-1.8l-3.9 2.9c-.1.1-.2.1-.3.1z">
                                            </path>
                                        </svg>
                                        <div class="ml-auto">

                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">Generador de preguntas</div>
                                    <div class="text-base text-slate-500 mt-1">Genera preguntas con precisión y rapidez,
                                        gracias a la IA.</div>
                                </div>
                            </div>
                        </a>
                        @else
                        <div class="report-box">
                            <div class="box p-5 py-6">
                                <div class="flex">
                                    <svg style="width: 58px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                        id="questionnaire">
                                        <linearGradient id="a" x1="925.021" x2="937.235" y1="-571.934" y2="-587.024"
                                            gradientTransform="matrix(3.0757 0 0 -3.0757 -2839.739 -1758.136)"
                                            gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#FCD600"></stop>
                                            <stop offset="1" stop-color="#F16222"></stop>
                                        </linearGradient>
                                        <path fill="url(#a)"
                                            d="M10.1 0h27.7C43.5 0 48 4.5 48 10.1v27.7C48 43.5 43.5 48 37.9 48H10.1C4.5 48 0 43.5 0 37.9V10.1C0 4.5 4.5 0 10.1 0z">
                                        </path>
                                        <path fill="#fff"
                                            d="M19.5 32.5h-.2c-.3-.1-.4-.4-.3-.7l7.4-17c.1-.3.4-.4.7-.3.3.1.4.4.3.7l-7.4 17c-.1.2-.3.3-.5.3z">
                                        </path>
                                        <path fill="#fff"
                                            d="M32 33.5c-.1 0-.2 0-.3-.1l-3.9-2.9H21c-.2 0-.5 0-.7-.1-.3-.1-.4-.4-.3-.6.1-.3.4-.4.6-.3.1 0 .3.1.4.1h7c.1 0 .2 0 .3.1l3.2 2.4v-2c0-.3.2-.5.5-.5h1c.8 0 1.5-.7 1.5-1.5v-7c0-.8-.7-1.5-1.5-1.5h-7.8c-.3 0-.5-.2-.5-.5s.2-.5.5-.5H33c1.4 0 2.5 1.1 2.5 2.5v7c0 1.4-1.1 2.5-2.5 2.5h-.5V33c0 .2-.1.4-.3.4-.1.1-.1.1-.2.1zm-13-8h-1c-.8 0-1.5-.7-1.5-1.5v-3c0-.8.7-1.5 1.5-1.5h1c.8 0 1.5.7 1.5 1.5v3c0 .8-.7 1.5-1.5 1.5zm-1-5c-.3 0-.5.2-.5.5v3c0 .3.2.5.5.5h1c.3 0 .5-.2.5-.5v-3c0-.3-.2-.5-.5-.5h-1z">
                                        </path>
                                        <path fill="#fff"
                                            d="M30 27.5c-.3 0-.5-.2-.5-.5v-4c0-.3-.2-.5-.5-.5h-2c-.3 0-.5.2-.5.5v4c0 .3-.2.5-.5.5s-.5-.2-.5-.5v-4c0-.8.7-1.5 1.5-1.5h2c.8 0 1.5.7 1.5 1.5v4c0 .3-.2.5-.5.5z">
                                        </path>
                                        <path fill="#fff"
                                            d="M29.5 25.5h-3c-.3 0-.5-.2-.5-.5s.2-.5.5-.5h3c.3 0 .5.2.5.5s-.2.5-.5.5zm-8.5 0c-.1 0-.3 0-.4-.1l-2-2c-.2-.2-.2-.5 0-.7s.5-.2.7 0l2 2c.2.2.2.5 0 .7 0 .1-.2.1-.3.1z">
                                        </path>
                                        <path fill="#fff"
                                            d="M15 31.5c-.1 0-.2 0-.2-.1-.2-.1-.3-.3-.3-.4v-2.5H14c-1.4 0-2.5-1.1-2.5-2.5v-7c0-1.4 1.1-2.5 2.5-2.5h12c.3 0 .5.2.5.5s-.2.5-.5.5H14c-.8 0-1.5.7-1.5 1.5v7c0 .8.7 1.5 1.5 1.5h1c.3 0 .5.2.5.5v2l3.2-2.4c.1-.1.2-.1.3-.1h2c.3 0 .5.2.5.5s-.2.5-.5.5h-1.8l-3.9 2.9c-.1.1-.2.1-.3.1z">
                                        </path>
                                    </svg>
                                    <div class="ml-auto">

                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6 mb-2">Generador de preguntas
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