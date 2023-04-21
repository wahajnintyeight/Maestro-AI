@extends('dashboard.admin.layout')
@section('content')
    <div class="content">
        <!-- BEGIN: Top Bar -->
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
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button"
                    aria-expanded="false" data-tw-toggle="dropdown">
                    <img alt="Tinker Tailwind HTML Admin Template" src="dist/images/profile-14.jpg">
                </div>
                <div class="dropdown-menu w-56">
                    <ul class="dropdown-content bg-primary text-white">
                        <li class="p-2">
                            <div class="font-medium">Keanu Reeves</div>
                            <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Software Engineer</div>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="user"
                                    class="w-4 h-4 mr-2"></i> Profile </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="edit"
                                    class="w-4 h-4 mr-2"></i> Add Account </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="lock"
                                    class="w-4 h-4 mr-2"></i> Reset Password </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="help-circle"
                                    class="w-4 h-4 mr-2"></i> Help </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <input type="submit" class="dropdown-item hover:bg-white/5" value="Logout"> <i
                                    data-feather="toggle-right" class="w-4 h-4 mr-2"></i>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
        <!-- END: Top Bar -->
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 2xl:col-span-12">
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: Notification -->
                    <div class="col-span-12 mt-6 -mb-6 intro-y">
                        <div class="alert alert-dismissible show box bg-primary text-white flex items-center mb-6"
                            role="alert">
                            <span>Introducing new dashboard! Download now at <a
                                    href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                    class="underline ml-1" target="blank">themeforest.net</a>.</span>
                            <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close">
                                <i data-feather="x" class="w-4 h-4"></i> </button>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <h2>Hello, {{ Auth()->user()->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
