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
    <title>Maestro AI - Admin Dashboard</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body style="font-family: Inter;" class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">
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
                <a href="{{route('admin.dashboard')}}" class="menu">
                    <div class="menu__icon"> <i data-feather="home"></i> </div>
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
                <a href="{{route('teacher.dashboard')}}"> <span class="hidden xl:block text-white text-lg ml-3">
                        MaestroIA </span></a>
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                        <div class="side-menu__title"> Dashboard </div>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.viewMembers')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="user"></i></div>
                        <div class="side-menu__title"> Users </div>
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
                        <li class="breadcrumb-item"><a href="{{route('teacher.dashboard')}}">MaestroIA</a></li>
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