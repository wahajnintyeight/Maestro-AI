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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

    <title>Maestro AI - Admin Dashboard</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body style="font-family: 'Poppins', sans-serif;" class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">
    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img class="w-6" src="dist/images/logo.svg">
            </a>
            <a href="javascript:;" id="mobile-menu-toggler"> <i data-lucide="bar-chart-2"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
        <ul class="border-t border-white/[0.08] py-5 hidden">
            <li>
                <a href="{{route('admin.dashboard')}}" class="menu">
                    <div class="menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="menu__title"> Dashboard </div>
                </a>
            </li>

            <li>
                <a href="{{route('admin.viewMembers')}}" class="menu">
                    <div class="menu__icon"> <i data-lucide="user"></i> </div>
                    <div class="menu__title"> Users </div>
                </a>
            </li>

            <li>
                <a href="{{route('admin.viewTools')}}" class="menu">
                    <div class="menu__icon"> <i data-lucide="pen-tool"></i> </div>
                    <div class="menu__title"> Tools </div>
                </a>
            </li>

            <li class="menu__devider my-6"></li>

        </ul>
    </div>
    <!-- END: Mobile Menu -->
    <div class="flex overflow-hidden">
        <!-- BEGIN: Side Menu -->
        <nav class="side-nav">
            <a href="" class="intro-x text-center flex items-center pl-5 pt-4 mt-3">

                <a href="{{route('admin.dashboard')}}"> <span
                        class="hidden xl:block text-center text-white text-lg ml-3">
                        MaestroIA </span></a>
                <span style="color: #b1b1b1;" class="hidden xl:block text-center text-gray-200 text-sm ml-3">
                    Admin Dashboard </span>
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="side-menu__title"> Dashboard </div>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.viewMembers')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-lucide="user"></i></div>
                        <div class="side-menu__title"> Users </div>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.viewTools')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-lucide="pen-tool"></i></div>
                        <div class="side-menu__title"> Tools </div>
                    </a>
                </li>
                 <li>
                    <a href="{{route('admin.view-contacts')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-lucide="phone-call"></i></div>
                        <div class="side-menu__title"> Contacts </div>
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
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">MaestroIA</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
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
                                <a href="{{route('switchToAdmin')}}" class="dropdown-item hover:bg-white/5"> <i
                                        data-feather="shield" class="w-4 h-4 mr-2"></i>
                                    User Dashboard </a>
                            </li>
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