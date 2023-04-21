<!DOCTYPE html>

<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Tinker admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Tinker Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Register - Maestro AI</title>
    <!-- BEGIN: CSS Assets-->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Tinker Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                    <span class="text-white text-lg ml-3"> Maestro AI </span>
                </a>
                <div class="my-auto">
                    <img alt="Tinker Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16"
                        src="dist/images/illustration.svg">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        A few more clicks to
                        <br>
                        sign up to your account.
                    </div>

                </div>
            </div>
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        Sign Up
                    </h2>
                    <div class="intro-x mt-2 text-slate-400 dark:text-slate-400 xl:hidden text-center">A few more clicks
                        to sign in to your account.</div>
                    <form action="{{ route('register') }}" method="POST" class="space-y-8">
                        @csrf
                        @method('POST')
                        <div class="intro-x mt-8">
                            <input type="text" name="name" class="intro-x login__input form-control py-3 px-4 block"
                                placeholder="Full Name">

                            <input type="text" name="email"
                                class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Email">
                            <input type="password" name="password"
                                class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password">
                            <input type="password" name="password2"
                                class="intro-x login__input form-control py-3 px-4 block mt-4"
                                placeholder="Password Confirmation">
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <input type="submit"
                                class="btn btn-primary text-black py-3 px-4 w-full xl:w-32 xl:mr-3 align-top"
                                value="Register">
                            <button
                                class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Sign
                                in</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END: Register Form -->
        </div>
    </div>

    <!-- BEGIN: JS Assets-->
    <script src="{{ asset('dist/js/app.js') }}"></script>
    <!-- END: JS Assets-->
</body>

</html>