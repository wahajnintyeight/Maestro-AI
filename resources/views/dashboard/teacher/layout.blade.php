<!DOCTYPE html>

<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="{{asset('dist/images/logo.svg')}}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Tinker admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Tinker Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Maestro AI - Dashboard</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">
    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img class="w-6" src="dist/images/logo.svg">
            </a>
            <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
        <ul class="border-t border-white/[0.08] py-5 hidden">
            <li>
                <a href="{{route('/')}}" class="menu">
                    <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                    <div class="menu__title"> Dashboard </div>
                </a>
            </li>

            <li class="menu__devider my-6"></li>

        </ul>
    </div>
    <!-- END: Mobile Menu -->
    <div class="flex overflow-hidden">
        <!-- BEGIN: Side Menu -->
        <nav class="side-nav">
            <a href="" class="intro-x flex items-center pl-5 pt-4 mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 311.899 291.707">
                    <g id="Icon_ionic-ios-apps" data-name="Icon ionic-ios-apps" transform="translate(-4.57 -4.492)">
                        <path id="Path_9" data-name="Path 9"
                            d="M305.678,64.318,184.327,9a65.721,65.721,0,0,0-47.842,0L15.22,64.318c-14.293,6.5-14.293,17.117,0,23.639l120.221,54.826a69.059,69.059,0,0,0,50.033,0L305.687,87.956C319.971,81.46,319.971,70.822,305.678,64.318Z"
                            transform="translate(0.07)" fill="#fff" opacity="0.999" />
                        <g id="Group_1" data-name="Group 1" transform="translate(4.533 135.941)">
                            <path id="Path_10" data-name="Path 10"
                                d="M108.2,53.266,44,24a10.438,10.438,0,0,0-8.553,0L12.99,34.227c-11.32,5.145-11.32,13.556,0,18.721L108.2,96.368a54.692,54.692,0,0,0,39.625,0l95.2-43.42c11.32-5.148,11.32-13.556,0-18.721L220.582,24a10.438,10.438,0,0,0-8.553,0l-64.2,29.268a54.692,54.692,0,0,1-39.625,0Z"
                                transform="translate(28.02 60.176)" fill="#fff" />
                            <path id="Path_11" data-name="Path 11"
                                d="M274.692,27.406l-23.1-10.493a11.652,11.652,0,0,0-9.618,0L163.294,52.538a64.317,64.317,0,0,1-37.812,0L46.815,16.914a11.652,11.652,0,0,0-9.618,0L14.108,27.407c-12.819,5.825-12.819,15.351,0,21.2L121.925,97.783a61.937,61.937,0,0,0,44.874,0L274.615,48.608C287.51,42.773,287.51,33.232,274.692,27.406Z"
                                transform="translate(11.592 -15.875)" fill="#fff" />
                        </g>
                    </g>
                </svg>
                <span class="hidden xl:block text-white text-lg ml-3"> Maestro AI </span>
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                <li>
                    <a href="{{route('teacher.dashboard')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                        <div class="side-menu__title"> Dashboard </div>
                    </a>
                </li>

                <li>
                    <a href="{{route('teacher.showHistory')}}" class="side-menu">
                        <div class="side-menu__icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" id="history">
                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                <path fill="white"
                                    d="M13.26 3C8.17 2.86 4 6.95 4 12H2.21c-.45 0-.67.54-.35.85l2.79 2.8c.2.2.51.2.71 0l2.79-2.8c.31-.31.09-.85-.36-.85H6c0-3.9 3.18-7.05 7.1-7 3.72.05 6.85 3.18 6.9 6.9.05 3.91-3.1 7.1-7 7.1-1.61 0-3.1-.55-4.28-1.48-.4-.31-.96-.28-1.32.08-.42.42-.39 1.13.08 1.49C9 20.29 10.91 21 13 21c5.05 0 9.14-4.17 9-9.26-.13-4.69-4.05-8.61-8.74-8.74zm-.51 5c-.41 0-.75.34-.75.75v3.68c0 .35.19.68.49.86l3.12 1.85c.36.21.82.09 1.03-.26.21-.36.09-.82-.26-1.03l-2.88-1.71v-3.4c0-.4-.34-.74-.75-.74z">
                                </path>
                            </svg> </div>
                        <div class="side-menu__title"> History </div>
                    </a>
                </li>

                <li>
                    <a href="{{route('teacher.teacherAccountInfo')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                        <div class="side-menu__title"> Account Information </div>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            <div class="top-bar -mx-4 px-4 md:mx-0 md:px-0">
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Application</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in"
                        role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        <img alt="Tinker Tailwind HTML Admin Template"
                            src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary text-white">
                            <li>
                                <a href="{{route('teacher.teacherAccountInfo')}}"
                                    class="dropdown-item hover:bg-white/5"> <i data-feather="user"
                                        class="w-4 h-4 mr-2"></i>
                                    Profile </a>
                            </li>


                            <li class="flex items-center">
                                <form action="{{ route('logout') }}" method="POST" class="flex items-center">
                                    @csrf
                                    <i data-feather="toggle-right" class="w-4 h-4 ml-2"></i>
                                    <input type="submit" class="w-full dropdown-item hover:bg-white/5" value="Logout">
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>

            @yield('content')
        </div>

        <!-- END: Content -->
    </div>


    <!-- BEGIN: JS Assets-->
    <script
        src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>

    <script src="{{ asset('dist/js/app.js') }}"></script>
    <!-- END: JS Assets-->
</body>

</html>