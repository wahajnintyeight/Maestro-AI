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
    <title>Maestro AI - Dashboard</title>
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
            <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
        <ul class="border-t border-white/[0.08] py-5 hidden">
            <li>
                <a href="{{route('teacher.dashboard')}}" class="menu">
                    <div class="menu__icon"> <i data-feather="home"></i> </div>
                    <div class="menu__title"> Dashboard </div>
                </a>
            </li>

            <li>
                <a href="{{route('teacher.showTeacherTools')}}" class="menu">
                    <div class="menu__icon"> <svg style="color: white; width: 24px; height: 24px"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="teacher">
                            <path fill="#fff"
                                d="M12.25 45a8.5 8.5 0 1 1 8.5-8.5 8.51 8.51 0 0 1-8.5 8.5Zm0-14a5.5 5.5 0 1 0 5.5 5.5 5.51 5.51 0 0 0-5.5-5.5Z">
                            </path>
                            <path fill="#fff"
                                d="M19.75 57h-15a1.5 1.5 0 0 1-1.5-1.5v-7a6.51 6.51 0 0 1 6.5-6.5h5a6.51 6.51 0 0 1 6.5 6.5v7a1.5 1.5 0 0 1-1.5 1.5Zm-13.5-3h12v-5.5a3.5 3.5 0 0 0-3.5-3.5h-5a3.5 3.5 0 0 0-3.5 3.5Z">
                            </path>
                            <path fill="#fff"
                                d="M20.25 51a1.5 1.5 0 0 1-1.13-2.49l14-16a1.5 1.5 0 1 1 2.26 2l-14 16a1.49 1.49 0 0 1-1.13.49zm39-41h-49a1.5 1.5 0 0 1 0-3h49a1.5 1.5 0 0 1 0 3zm0 31h-21a1.5 1.5 0 0 1 0-3h21a1.5 1.5 0 0 1 0 3z">
                            </path>
                            <path fill="#fff"
                                d="M55.25 41a1.5 1.5 0 0 1-1.5-1.5v-31a1.5 1.5 0 0 1 3 0v31a1.5 1.5 0 0 1-1.5 1.5zm-41-17a1.5 1.5 0 0 1-1.5-1.5v-14a1.5 1.5 0 0 1 3 0v14a1.5 1.5 0 0 1-1.5 1.5zm22-5h-11a1.5 1.5 0 0 1 0-3h11a1.5 1.5 0 0 1 0 3zm7 8h-18a1.5 1.5 0 0 1 0-3h18a1.5 1.5 0 0 1 0 3z">
                            </path>
                        </svg></div>
                    <div class="menu__title"> Maestros </div>
                </a>
            </li>

            <li>
                <a href="{{route('teacher.showClassroomTools')}}" class="menu">
                    <div class="menu__icon"> <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" fill="white"
                            style="color: white; width: 24px; height: 24px" stroke-linejoin="round"
                            stroke-miterlimit="2" clip-rule="evenodd" viewBox="0 0 512 512" id="classroom">
                            <path
                                d="M2315.47,423.322L2315.47,472.93C2315.47,475.689 2317.72,477.93 2320.47,477.93C2323.23,477.93 2325.47,475.689 2325.47,472.93L2325.47,423.76L2386.2,423.76L2386.2,472.93C2386.2,475.689 2388.44,477.93 2391.2,477.93C2393.96,477.93 2396.2,475.689 2396.2,472.93L2396.2,423.322C2406.64,421.245 2414.52,412.028 2414.52,400.986C2414.52,388.416 2404.31,378.211 2391.74,378.211L2319.94,378.211C2307.37,378.211 2297.16,388.416 2297.16,400.986C2297.16,412.028 2305.04,421.245 2315.47,423.322ZM2611.8,423.322L2611.8,472.93C2611.8,475.689 2614.04,477.93 2616.8,477.93C2619.56,477.93 2621.8,475.689 2621.8,472.93L2621.8,423.76L2682.53,423.76L2682.53,472.93C2682.53,475.689 2684.77,477.93 2687.53,477.93C2690.28,477.93 2692.53,475.689 2692.53,472.93L2692.53,423.322C2702.96,421.245 2710.84,412.028 2710.84,400.986C2710.84,388.416 2700.63,378.211 2688.06,378.211L2616.26,378.211C2603.69,378.211 2593.48,388.416 2593.48,400.986C2593.48,412.028 2601.36,421.245 2611.8,423.322ZM2463.64,423.322L2463.64,472.93C2463.64,475.689 2465.88,477.93 2468.64,477.93C2471.4,477.93 2473.64,475.689 2473.64,472.93L2473.64,423.76L2534.36,423.76L2534.36,472.93C2534.36,475.689 2536.6,477.93 2539.36,477.93C2542.12,477.93 2544.36,475.689 2544.36,472.93L2544.36,423.322C2554.8,421.245 2562.68,412.028 2562.68,400.986C2562.68,388.416 2552.47,378.211 2539.9,378.211L2468.1,378.211C2455.53,378.211 2445.32,388.416 2445.32,400.986C2445.32,412.028 2453.2,421.245 2463.64,423.322ZM2700.84,400.986C2700.84,408.036 2695.12,413.76 2688.06,413.76L2616.26,413.76C2609.21,413.76 2603.48,408.036 2603.48,400.986C2603.48,393.935 2609.21,388.211 2616.26,388.211C2616.26,388.211 2688.06,388.211 2688.06,388.211C2695.12,388.211 2700.84,393.935 2700.84,400.986ZM2404.52,400.986C2404.52,408.036 2398.79,413.76 2391.74,413.76L2319.94,413.76C2312.89,413.76 2307.16,408.036 2307.16,400.986C2307.16,393.935 2312.89,388.211 2319.94,388.211C2319.94,388.211 2391.74,388.211 2391.74,388.211C2398.79,388.211 2404.52,393.935 2404.52,400.986ZM2552.68,400.986C2552.68,408.036 2546.95,413.76 2539.9,413.76L2468.1,413.76C2461.05,413.76 2455.32,408.036 2455.32,400.986C2455.32,393.935 2461.05,388.211 2468.1,388.211C2468.1,388.211 2539.9,388.211 2539.9,388.211C2546.95,388.211 2552.68,393.935 2552.68,400.986ZM2680,62.07L2328,62.07L2328,55.57C2328,43.704 2318.37,34.07 2306.5,34.07C2294.63,34.07 2285,43.704 2285,55.57L2285,62.07L2275.5,62.07C2266.39,62.07 2259,69.464 2259,78.57C2259,87.336 2265.85,94.514 2274.48,95.04L2274.48,317.101C2265.85,317.627 2259,324.805 2259,333.57C2259,342.677 2266.39,350.07 2275.5,350.07C2275.5,350.07 2732.5,350.07 2732.5,350.07C2741.61,350.07 2749,342.677 2749,333.57C2749,324.805 2742.15,317.627 2733.52,317.101L2733.52,95.04C2742.15,94.514 2749,87.336 2749,78.57C2749,69.464 2741.61,62.07 2732.5,62.07L2723,62.07L2723,55.57C2723,43.704 2713.37,34.07 2701.5,34.07C2689.63,34.07 2680,43.704 2680,55.57L2680,62.07ZM2275.5,327.07L2732.5,327.07C2736.09,327.07 2739,329.983 2739,333.57C2739,337.158 2736.09,340.07 2732.5,340.07L2275.5,340.07C2271.91,340.07 2269,337.158 2269,333.57C2269,329.983 2271.91,327.07 2275.5,327.07ZM2712,317.07L2723.52,317.07L2723.52,95.07L2284.48,95.07L2284.48,317.07L2627,317.07L2627,294.07C2627,291.309 2629.24,289.07 2632,289.07L2707,289.07C2709.76,289.07 2712,291.309 2712,294.07L2712,317.07ZM2702,317.07L2702,299.07C2702,299.07 2637,299.07 2637,299.07L2637,317.07L2702,317.07ZM2368.57,132.195C2367.34,130.377 2365.06,129.576 2362.96,130.22C2360.86,130.865 2359.43,132.804 2359.43,135L2359.43,256C2359.43,258.761 2361.67,261 2364.43,261L2446.43,261C2448.28,261 2449.98,259.978 2450.85,258.343C2451.71,256.707 2451.61,254.727 2450.57,253.195L2368.57,132.195ZM2369.43,151.291L2437,251C2437,251 2369.43,251 2369.43,251L2369.43,151.291ZM2495.55,233.401L2643.57,233.401C2646.33,233.401 2648.57,231.16 2648.57,228.401C2648.57,225.641 2646.33,223.401 2643.57,223.401L2495.55,223.401C2492.79,223.401 2490.55,225.641 2490.55,228.401C2490.55,231.16 2492.79,233.401 2495.55,233.401ZM2495.55,211.467L2643.57,211.467C2646.33,211.467 2648.57,209.227 2648.57,206.467C2648.57,203.707 2646.33,201.467 2643.57,201.467L2495.55,201.467C2492.79,201.467 2490.55,203.707 2490.55,206.467C2490.55,209.227 2492.79,211.467 2495.55,211.467ZM2495.55,189.533L2643.57,189.533C2646.33,189.533 2648.57,187.293 2648.57,184.533C2648.57,181.773 2646.33,179.533 2643.57,179.533L2495.55,179.533C2492.79,179.533 2490.55,181.773 2490.55,184.533C2490.55,187.293 2492.79,189.533 2495.55,189.533ZM2516.95,167.599L2643.57,167.599C2646.33,167.599 2648.57,165.359 2648.57,162.599C2648.57,159.84 2646.33,157.599 2643.57,157.599L2516.95,157.599C2514.2,157.599 2511.95,159.84 2511.95,162.599C2511.95,165.359 2514.2,167.599 2516.95,167.599ZM2275.5,72.07L2732.5,72.07C2736.09,72.07 2739,74.983 2739,78.57C2739,82.158 2736.09,85.07 2732.5,85.07L2275.5,85.07C2271.91,85.07 2269,82.158 2269,78.57C2269,74.983 2271.91,72.07 2275.5,72.07ZM2318,62.07L2318,55.57C2318,49.223 2312.85,44.07 2306.5,44.07C2300.15,44.07 2295,49.223 2295,55.57L2295,62.07L2318,62.07ZM2713,62.07L2713,55.57C2713,49.223 2707.85,44.07 2701.5,44.07C2695.15,44.07 2690,49.223 2690,55.57L2690,62.07L2713,62.07Z"
                                transform="translate(-2248)"></path>
                        </svg> </div>
                    <div class="menu__title"> Aula </div>
                </a>
            </li>

            <li>
                <a href="{{route('teacher.showFreeTools')}}" class="menu">
                    <div class="menu__icon"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" id="free">
                            <g font-family="sans-serif" font-weight="400">
                                <path fill="#fff" fill-rule="evenodd"
                                    style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"
                                    d="M23.637 737.484a3.498 3.498 0 0 1 .23-2.27.5.5 0 0 1 .908.423 2.494 2.494 0 0 0 .702 2.998 2.493 2.493 0 0 0 3.078.04 2.495 2.495 0 0 0 .783-2.978 2.495 2.495 0 0 0-2.703-1.476.5.5 0 1 1-.162-.987 3.502 3.502 0 0 1 3.783 2.067 3.506 3.506 0 0 1-1.096 4.172 3.502 3.502 0 0 1-4.31-.059 3.492 3.492 0 0 1-1.213-1.93z"
                                    color="#000" overflow="visible" transform="translate(-3.549 -718.188)"></path>
                                <path fill="#fff" fill-rule="evenodd"
                                    style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"
                                    d="M7.66 723.688a.5.5 0 0 0-.463.369l-1.34 5a.5.5 0 1 0 .965.26l1.211-4.518 11.104 2.976 7.406 1.983.988 6.879a.5.5 0 1 0 .99-.143l-1.037-7.205a.5.5 0 0 0-.365-.412l-7.724-2.068-11.586-3.106a.5.5 0 0 0-.149-.015z"
                                    color="#000" overflow="visible" transform="translate(-3.549 -718.188)"></path>
                                <path fill="#fff" fill-rule="evenodd"
                                    style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"
                                    d="M4.049 729.188a.5.5 0 0 0-.5.5v14a.5.5 0 0 0 .5.5H24.04a.5.5 0 0 0 .434-.252l4-7a.5.5 0 0 0 0-.497l-4-7a.5.5 0 0 0-.434-.251H4.049zm.5 1h19.203l3.713 6.5-3.713 6.5H4.549v-13z"
                                    color="#000" overflow="visible" transform="translate(-3.549 -718.188)"></path>
                                <path fill="#fff" fill-rule="evenodd"
                                    style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"
                                    d="M25.541 736.688c0-1.097-.9-1.997-1.996-1.997-1.097 0-1.996.9-1.996 1.996 0 1.097.9 1.997 1.996 1.997 1.097 0 1.996-.9 1.996-1.996zm-1 0c0 .556-.44.996-.996.996a.988.988 0 0 1-.996-.996c0-.557.44-.997.996-.997s.996.44.996.996zm5-.5v1h2.5v-1h-2.5z"
                                    color="#000" overflow="visible" transform="translate(-3.549 -718.188)"></path>
                                <path fill="#fff" fill-rule="evenodd"
                                    style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"
                                    d="M31.541 736.68a.5.5 0 0 1 .508-.492 3.5 3.5 0 0 1 3.5 3.5.5.5 0 1 1-1 0 2.5 2.5 0 0 0-2.5-2.5.5.5 0 0 1-.508-.508z"
                                    color="#000" overflow="visible" transform="translate(-3.549 -718.188)"></path>
                                <g style="line-height:125%">
                                    <path fill="#fff"
                                        d="M7.56 734.387h1.665v-.92H6.55v6.44H7.56v-2.659h1.307v-.92H7.56v-1.94zm5.296 5.52c-.1-.24-.11-.47-.11-.783v-.993c0-.671-.166-1.159-.671-1.37.45-.212.662-.644.662-1.307v-.506c0-.993-.45-1.48-1.5-1.48H9.711v6.438h1.011v-2.621h.35c.46 0 .662.22.662.818v1.012c0 .525.037.626.092.791h1.03zm-1.646-5.52c.359 0 .515.203.515.663v.634c0 .515-.23.681-.607.681h-.396v-1.978h.488zm3.213 0h1.748v-.92h-2.76v6.44h2.76v-.92h-1.748V737.1h1.39v-.92h-1.39v-1.794zm3.378 0h1.748v-.92h-2.76v6.44h2.76v-.92H17.8V737.1h1.389v-.92H17.8v-1.794z"
                                        font-family="Bebas Neue" font-size="9.198" font-weight="700"
                                        style="-inkscape-font-specification:'Bebas Neue Bold'" letter-spacing="0"
                                        transform="translate(-3.549 -718.188)" word-spacing="0"></path>
                                </g>
                            </g>
                        </svg> </div>
                    <div class="menu__title"> Gratis </div>
                </a>
            </li>

            <li>
                <a href="{{route('teacher.showHistory')}}" class="menu">
                    <div class="menu__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" id="history">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path fill="white"
                                d="M13.26 3C8.17 2.86 4 6.95 4 12H2.21c-.45 0-.67.54-.35.85l2.79 2.8c.2.2.51.2.71 0l2.79-2.8c.31-.31.09-.85-.36-.85H6c0-3.9 3.18-7.05 7.1-7 3.72.05 6.85 3.18 6.9 6.9.05 3.91-3.1 7.1-7 7.1-1.61 0-3.1-.55-4.28-1.48-.4-.31-.96-.28-1.32.08-.42.42-.39 1.13.08 1.49C9 20.29 10.91 21 13 21c5.05 0 9.14-4.17 9-9.26-.13-4.69-4.05-8.61-8.74-8.74zm-.51 5c-.41 0-.75.34-.75.75v3.68c0 .35.19.68.49.86l3.12 1.85c.36.21.82.09 1.03-.26.21-.36.09-.82-.26-1.03l-2.88-1.71v-3.4c0-.4-.34-.74-.75-.74z">
                            </path>
                        </svg> </div>
                    <div class="menu__title"> Historial </div>
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
                <span class="hidden xl:block text-white text-lg ml-3"> MaestroIA </span>
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
                    <a href="{{route('teacher.teacherAccountInfo')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                        <div class="side-menu__title"> Mis Datos </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('teacher.showTeacherTools')}}" class="side-menu">
                        <div class="side-menu__icon">
                            <svg style="color: white; width: 24px; height: 24px" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 64 64" id="teacher">
                                <path fill="#fff"
                                    d="M12.25 45a8.5 8.5 0 1 1 8.5-8.5 8.51 8.51 0 0 1-8.5 8.5Zm0-14a5.5 5.5 0 1 0 5.5 5.5 5.51 5.51 0 0 0-5.5-5.5Z">
                                </path>
                                <path fill="#fff"
                                    d="M19.75 57h-15a1.5 1.5 0 0 1-1.5-1.5v-7a6.51 6.51 0 0 1 6.5-6.5h5a6.51 6.51 0 0 1 6.5 6.5v7a1.5 1.5 0 0 1-1.5 1.5Zm-13.5-3h12v-5.5a3.5 3.5 0 0 0-3.5-3.5h-5a3.5 3.5 0 0 0-3.5 3.5Z">
                                </path>
                                <path fill="#fff"
                                    d="M20.25 51a1.5 1.5 0 0 1-1.13-2.49l14-16a1.5 1.5 0 1 1 2.26 2l-14 16a1.49 1.49 0 0 1-1.13.49zm39-41h-49a1.5 1.5 0 0 1 0-3h49a1.5 1.5 0 0 1 0 3zm0 31h-21a1.5 1.5 0 0 1 0-3h21a1.5 1.5 0 0 1 0 3z">
                                </path>
                                <path fill="#fff"
                                    d="M55.25 41a1.5 1.5 0 0 1-1.5-1.5v-31a1.5 1.5 0 0 1 3 0v31a1.5 1.5 0 0 1-1.5 1.5zm-41-17a1.5 1.5 0 0 1-1.5-1.5v-14a1.5 1.5 0 0 1 3 0v14a1.5 1.5 0 0 1-1.5 1.5zm22-5h-11a1.5 1.5 0 0 1 0-3h11a1.5 1.5 0 0 1 0 3zm7 8h-18a1.5 1.5 0 0 1 0-3h18a1.5 1.5 0 0 1 0 3z">
                                </path>
                            </svg>
                        </div>
                        <div class="side-menu__title"> Maestros </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('teacher.showClassroomTools')}}" class="side-menu">
                        <div class="side-menu__icon"> <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                fill="white" style="color: white; width: 24px; height: 24px" stroke-linejoin="round"
                                stroke-miterlimit="2" clip-rule="evenodd" viewBox="0 0 512 512" id="classroom">
                                <path
                                    d="M2315.47,423.322L2315.47,472.93C2315.47,475.689 2317.72,477.93 2320.47,477.93C2323.23,477.93 2325.47,475.689 2325.47,472.93L2325.47,423.76L2386.2,423.76L2386.2,472.93C2386.2,475.689 2388.44,477.93 2391.2,477.93C2393.96,477.93 2396.2,475.689 2396.2,472.93L2396.2,423.322C2406.64,421.245 2414.52,412.028 2414.52,400.986C2414.52,388.416 2404.31,378.211 2391.74,378.211L2319.94,378.211C2307.37,378.211 2297.16,388.416 2297.16,400.986C2297.16,412.028 2305.04,421.245 2315.47,423.322ZM2611.8,423.322L2611.8,472.93C2611.8,475.689 2614.04,477.93 2616.8,477.93C2619.56,477.93 2621.8,475.689 2621.8,472.93L2621.8,423.76L2682.53,423.76L2682.53,472.93C2682.53,475.689 2684.77,477.93 2687.53,477.93C2690.28,477.93 2692.53,475.689 2692.53,472.93L2692.53,423.322C2702.96,421.245 2710.84,412.028 2710.84,400.986C2710.84,388.416 2700.63,378.211 2688.06,378.211L2616.26,378.211C2603.69,378.211 2593.48,388.416 2593.48,400.986C2593.48,412.028 2601.36,421.245 2611.8,423.322ZM2463.64,423.322L2463.64,472.93C2463.64,475.689 2465.88,477.93 2468.64,477.93C2471.4,477.93 2473.64,475.689 2473.64,472.93L2473.64,423.76L2534.36,423.76L2534.36,472.93C2534.36,475.689 2536.6,477.93 2539.36,477.93C2542.12,477.93 2544.36,475.689 2544.36,472.93L2544.36,423.322C2554.8,421.245 2562.68,412.028 2562.68,400.986C2562.68,388.416 2552.47,378.211 2539.9,378.211L2468.1,378.211C2455.53,378.211 2445.32,388.416 2445.32,400.986C2445.32,412.028 2453.2,421.245 2463.64,423.322ZM2700.84,400.986C2700.84,408.036 2695.12,413.76 2688.06,413.76L2616.26,413.76C2609.21,413.76 2603.48,408.036 2603.48,400.986C2603.48,393.935 2609.21,388.211 2616.26,388.211C2616.26,388.211 2688.06,388.211 2688.06,388.211C2695.12,388.211 2700.84,393.935 2700.84,400.986ZM2404.52,400.986C2404.52,408.036 2398.79,413.76 2391.74,413.76L2319.94,413.76C2312.89,413.76 2307.16,408.036 2307.16,400.986C2307.16,393.935 2312.89,388.211 2319.94,388.211C2319.94,388.211 2391.74,388.211 2391.74,388.211C2398.79,388.211 2404.52,393.935 2404.52,400.986ZM2552.68,400.986C2552.68,408.036 2546.95,413.76 2539.9,413.76L2468.1,413.76C2461.05,413.76 2455.32,408.036 2455.32,400.986C2455.32,393.935 2461.05,388.211 2468.1,388.211C2468.1,388.211 2539.9,388.211 2539.9,388.211C2546.95,388.211 2552.68,393.935 2552.68,400.986ZM2680,62.07L2328,62.07L2328,55.57C2328,43.704 2318.37,34.07 2306.5,34.07C2294.63,34.07 2285,43.704 2285,55.57L2285,62.07L2275.5,62.07C2266.39,62.07 2259,69.464 2259,78.57C2259,87.336 2265.85,94.514 2274.48,95.04L2274.48,317.101C2265.85,317.627 2259,324.805 2259,333.57C2259,342.677 2266.39,350.07 2275.5,350.07C2275.5,350.07 2732.5,350.07 2732.5,350.07C2741.61,350.07 2749,342.677 2749,333.57C2749,324.805 2742.15,317.627 2733.52,317.101L2733.52,95.04C2742.15,94.514 2749,87.336 2749,78.57C2749,69.464 2741.61,62.07 2732.5,62.07L2723,62.07L2723,55.57C2723,43.704 2713.37,34.07 2701.5,34.07C2689.63,34.07 2680,43.704 2680,55.57L2680,62.07ZM2275.5,327.07L2732.5,327.07C2736.09,327.07 2739,329.983 2739,333.57C2739,337.158 2736.09,340.07 2732.5,340.07L2275.5,340.07C2271.91,340.07 2269,337.158 2269,333.57C2269,329.983 2271.91,327.07 2275.5,327.07ZM2712,317.07L2723.52,317.07L2723.52,95.07L2284.48,95.07L2284.48,317.07L2627,317.07L2627,294.07C2627,291.309 2629.24,289.07 2632,289.07L2707,289.07C2709.76,289.07 2712,291.309 2712,294.07L2712,317.07ZM2702,317.07L2702,299.07C2702,299.07 2637,299.07 2637,299.07L2637,317.07L2702,317.07ZM2368.57,132.195C2367.34,130.377 2365.06,129.576 2362.96,130.22C2360.86,130.865 2359.43,132.804 2359.43,135L2359.43,256C2359.43,258.761 2361.67,261 2364.43,261L2446.43,261C2448.28,261 2449.98,259.978 2450.85,258.343C2451.71,256.707 2451.61,254.727 2450.57,253.195L2368.57,132.195ZM2369.43,151.291L2437,251C2437,251 2369.43,251 2369.43,251L2369.43,151.291ZM2495.55,233.401L2643.57,233.401C2646.33,233.401 2648.57,231.16 2648.57,228.401C2648.57,225.641 2646.33,223.401 2643.57,223.401L2495.55,223.401C2492.79,223.401 2490.55,225.641 2490.55,228.401C2490.55,231.16 2492.79,233.401 2495.55,233.401ZM2495.55,211.467L2643.57,211.467C2646.33,211.467 2648.57,209.227 2648.57,206.467C2648.57,203.707 2646.33,201.467 2643.57,201.467L2495.55,201.467C2492.79,201.467 2490.55,203.707 2490.55,206.467C2490.55,209.227 2492.79,211.467 2495.55,211.467ZM2495.55,189.533L2643.57,189.533C2646.33,189.533 2648.57,187.293 2648.57,184.533C2648.57,181.773 2646.33,179.533 2643.57,179.533L2495.55,179.533C2492.79,179.533 2490.55,181.773 2490.55,184.533C2490.55,187.293 2492.79,189.533 2495.55,189.533ZM2516.95,167.599L2643.57,167.599C2646.33,167.599 2648.57,165.359 2648.57,162.599C2648.57,159.84 2646.33,157.599 2643.57,157.599L2516.95,157.599C2514.2,157.599 2511.95,159.84 2511.95,162.599C2511.95,165.359 2514.2,167.599 2516.95,167.599ZM2275.5,72.07L2732.5,72.07C2736.09,72.07 2739,74.983 2739,78.57C2739,82.158 2736.09,85.07 2732.5,85.07L2275.5,85.07C2271.91,85.07 2269,82.158 2269,78.57C2269,74.983 2271.91,72.07 2275.5,72.07ZM2318,62.07L2318,55.57C2318,49.223 2312.85,44.07 2306.5,44.07C2300.15,44.07 2295,49.223 2295,55.57L2295,62.07L2318,62.07ZM2713,62.07L2713,55.57C2713,49.223 2707.85,44.07 2701.5,44.07C2695.15,44.07 2690,49.223 2690,55.57L2690,62.07L2713,62.07Z"
                                    transform="translate(-2248)"></path>
                            </svg> </div>
                        <div class="side-menu__title"> Aula </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('teacher.showFreeTools')}}" class="side-menu">
                        <div class="side-menu__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" id="free">
                                <g font-family="sans-serif" font-weight="400">
                                    <path fill="#fff" fill-rule="evenodd"
                                        style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"
                                        d="M23.637 737.484a3.498 3.498 0 0 1 .23-2.27.5.5 0 0 1 .908.423 2.494 2.494 0 0 0 .702 2.998 2.493 2.493 0 0 0 3.078.04 2.495 2.495 0 0 0 .783-2.978 2.495 2.495 0 0 0-2.703-1.476.5.5 0 1 1-.162-.987 3.502 3.502 0 0 1 3.783 2.067 3.506 3.506 0 0 1-1.096 4.172 3.502 3.502 0 0 1-4.31-.059 3.492 3.492 0 0 1-1.213-1.93z"
                                        color="#000" overflow="visible" transform="translate(-3.549 -718.188)"></path>
                                    <path fill="#fff" fill-rule="evenodd"
                                        style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"
                                        d="M7.66 723.688a.5.5 0 0 0-.463.369l-1.34 5a.5.5 0 1 0 .965.26l1.211-4.518 11.104 2.976 7.406 1.983.988 6.879a.5.5 0 1 0 .99-.143l-1.037-7.205a.5.5 0 0 0-.365-.412l-7.724-2.068-11.586-3.106a.5.5 0 0 0-.149-.015z"
                                        color="#000" overflow="visible" transform="translate(-3.549 -718.188)"></path>
                                    <path fill="#fff" fill-rule="evenodd"
                                        style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"
                                        d="M4.049 729.188a.5.5 0 0 0-.5.5v14a.5.5 0 0 0 .5.5H24.04a.5.5 0 0 0 .434-.252l4-7a.5.5 0 0 0 0-.497l-4-7a.5.5 0 0 0-.434-.251H4.049zm.5 1h19.203l3.713 6.5-3.713 6.5H4.549v-13z"
                                        color="#000" overflow="visible" transform="translate(-3.549 -718.188)"></path>
                                    <path fill="#fff" fill-rule="evenodd"
                                        style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"
                                        d="M25.541 736.688c0-1.097-.9-1.997-1.996-1.997-1.097 0-1.996.9-1.996 1.996 0 1.097.9 1.997 1.996 1.997 1.097 0 1.996-.9 1.996-1.996zm-1 0c0 .556-.44.996-.996.996a.988.988 0 0 1-.996-.996c0-.557.44-.997.996-.997s.996.44.996.996zm5-.5v1h2.5v-1h-2.5z"
                                        color="#000" overflow="visible" transform="translate(-3.549 -718.188)"></path>
                                    <path fill="#fff" fill-rule="evenodd"
                                        style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"
                                        d="M31.541 736.68a.5.5 0 0 1 .508-.492 3.5 3.5 0 0 1 3.5 3.5.5.5 0 1 1-1 0 2.5 2.5 0 0 0-2.5-2.5.5.5 0 0 1-.508-.508z"
                                        color="#000" overflow="visible" transform="translate(-3.549 -718.188)"></path>
                                    <g style="line-height:125%">
                                        <path fill="#fff"
                                            d="M7.56 734.387h1.665v-.92H6.55v6.44H7.56v-2.659h1.307v-.92H7.56v-1.94zm5.296 5.52c-.1-.24-.11-.47-.11-.783v-.993c0-.671-.166-1.159-.671-1.37.45-.212.662-.644.662-1.307v-.506c0-.993-.45-1.48-1.5-1.48H9.711v6.438h1.011v-2.621h.35c.46 0 .662.22.662.818v1.012c0 .525.037.626.092.791h1.03zm-1.646-5.52c.359 0 .515.203.515.663v.634c0 .515-.23.681-.607.681h-.396v-1.978h.488zm3.213 0h1.748v-.92h-2.76v6.44h2.76v-.92h-1.748V737.1h1.39v-.92h-1.39v-1.794zm3.378 0h1.748v-.92h-2.76v6.44h2.76v-.92H17.8V737.1h1.389v-.92H17.8v-1.794z"
                                            font-family="Bebas Neue" font-size="9.198" font-weight="700"
                                            style="-inkscape-font-specification:'Bebas Neue Bold'" letter-spacing="0"
                                            transform="translate(-3.549 -718.188)" word-spacing="0"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="side-menu__title"> Gratis </div>
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
                        <div class="side-menu__title"> Historial </div>
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
                                <a href="{{route('switchToAdmin')}}" class="dropdown-item hover:bg-white/5"> <i
                                        data-feather="shield" class="w-4 h-4 mr-2"></i>
                                    Admin Dashboard </a>
                            </li>
                            <li>
                                <a href="{{route('teacher.teacherAccountInfo')}}"
                                    class="dropdown-item hover:bg-white/5"> <i data-feather="user"
                                        class="w-4 h-4 mr-2"></i>
                                    Profile </a>
                            </li>


                            <li class="flex items-center w-full dropdown-item hover:bg-white/5">
                                <form action="{{ route('logout') }}" method="POST" class="flex items-center">
                                    @csrf
                                    <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i>
                                    <input type="submit" class="" value="Logout">
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