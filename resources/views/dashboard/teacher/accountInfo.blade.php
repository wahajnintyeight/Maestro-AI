@extends('dashboard.teacher.layout')
{{--
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" /> --}}
@section('content')
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Account Settings
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->

        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-12 2xl:col-span-12">
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Display Information
                    </h2>
                </div>
                <div class="p-5">
                    <div class="flex flex-col-reverse xl:flex-row flex-col">
                        <div class="flex-1 mt-6 xl:mt-0">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 2xl:col-span-6">
                                    <div>
                                        <label for="update-profile-form-1" class="form-label">Full Name</label>
                                        <input id="update-profile-form-1" type="text" class="form-control"
                                            placeholder="Input text" value="{{ $user->name }}" disabled>
                                    </div>

                                </div>
                                <div class="col-span-12 2xl:col-span-6">
                                    <div class="mt-3 2xl:mt-0">
                                        <label for="update-profile-form-3" class="form-label">Email</label>
                                        <input id="update-profile-form-1" type="text" class="form-control"
                                            placeholder="Input text" value="{{ $user->email }}" disabled>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END: Display Information -->
            <!-- BEGIN: Personal Information -->
            <div class="intro-y box mt-5">
                <div class="flex items-center justify-start p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <div class="flex justify-start gap-4 items-center">
                        <h2 class="font-medium text-base mr-auto">
                            Mi suscripción
                        </h2>
                        <button
                            class="btn btn-sm btn-primary w-24 mr-1">{{ $user->is_paid == 0 ? 'Free Tier' : 'Premium' }}</button>
                    </div>
                </div>
                <div class="p-5">
                    <div class="intro-y box mt-5">
                        @if ($user->is_paid == 0)
                            {{-- START --}}
                            <div class="xl:container m-auto">
                                <div class="m-auto text-center">

                                    <div class="bg-white py-6 sm:py-8 lg:py-12">
                                        <div class="mx-auto px-4 md:px-8">
                                            <h2
                                                class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-8 lg:text-3xl xl:mb-12">
                                                Suscríbete a MaestroIA
                                            </h2>

                                            <div class="mb-6 grid gap-6 sm:grid-cols-2 md:mb-8 lg:grid-cols-4 lg:gap-8">
                                                <!-- plan - start -->
                                                <div class="flex flex-col rounded-lg border p-4 pt-6">
                                                    <div class="mb-12">
                                                        <div
                                                            class="mb-2 text-center text-2xl border-b border-gray-200 pb-2 font-bold text-gray-800">
                                                            Gratis
                                                        </div>

                                                        <p class="mx-auto pt-2 mb-8 text-left text-gray-500"
                                                            style="padding-left: 7px;">
                                                            Acceso a
                                                            nuestras
                                                            herramientas gratis para que puedas comprobar como funcionan
                                                        </p>

                                                        <div class="space-y-2">
                                                            <!-- check - start -->
                                                            <div class="flex gap-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6 shrink-0 text-indigo-500" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>

                                                                <span class="text-gray-600 text-left">Accesso a la
                                                                    plataforma</span>
                                                            </div>
                                                            <!-- check - end -->

                                                            <!-- check - start -->
                                                            <div class="flex gap-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6 shrink-0 text-indigo-500" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>

                                                                <span class="text-gray-600 text-left">Herramientas
                                                                    Gratis</span>
                                                            </div>
                                                            <!-- check - end -->

                                                            <!-- check - start -->
                                                            <div class="flex gap-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor"
                                                                    class="h-6 w-6 shrink-0 text-gray-500">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M6 18L18 6M6 6l12 12" />
                                                                </svg>

                                                                <span class="text-gray-600 text-left">Historial</span>
                                                            </div>
                                                            <!-- check - end -->

                                                            <!-- check - start -->
                                                            <div class="flex gap-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor"
                                                                    class="h-6 w-6 shrink-0 text-gray-500">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M6 18L18 6M6 6l12 12" />
                                                                </svg>

                                                                <span class="text-gray-600 text-left">Comunity
                                                                    support</span>
                                                            </div>
                                                            <!-- check - end -->
                                                        </div>
                                                    </div>

                                                    <div class="mt-auto flex flex-col gap-8">
                                                        <div class="flex items-end justify-center gap-1">
                                                            <span class="self-start text-gray-600">€</span>
                                                            <span class="text-4xl font-bold text-gray-800">0</span>
                                                            <span class="text-gray-500">per month</span>
                                                        </div>

                                                        <button disabled
                                                            class="block rounded-lg bg-gray-200 px-8 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base">Actual</button>
                                                    </div>
                                                </div>
                                                <!-- plan - end -->

                                                <!-- plan - start -->
                                                <div
                                                    class="relative flex flex-col rounded-lg border-2 border-indigo-500 p-4 pt-6">
                                                    <div class="mb-12">
                                                        <div class="absolute inset-x-0 -top-3 flex justify-center">
                                                            <span
                                                                class="flex h-6 items-center justify-center rounded-full bg-indigo-500 px-3 py-1 text-xs font-semibold uppercase tracking-widest text-white">Más
                                                                Popular ✨</span>
                                                        </div>

                                                        <div
                                                            class="mb-2 pb-2 border-b border-gray-200 text-center text-2xl font-bold text-gray-800">
                                                            Premium
                                                            Anual
                                                        </div>

                                                        <p class="mx-auto pt-2 mb-8 text-left text-gray-500"
                                                            style="padding-left: 7px;">Acceso
                                                            a
                                                            herramientas premium con soporte completo</p>

                                                        <div class="space-y-2">
                                                            <!-- check - start -->
                                                            <div class="flex gap-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6 shrink-0 text-indigo-500"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>

                                                                <span class="text-gray-600 text-left">Accesso a la
                                                                    plataforma</span>
                                                            </div>
                                                            <!-- check - end -->

                                                            <!-- check - start -->
                                                            <div class="flex gap-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6 shrink-0 text-indigo-500"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>

                                                                <span class="text-gray-600 text-left">Herramientas
                                                                    Gratis</span>
                                                            </div>
                                                            <!-- check - end -->

                                                            <!-- check - start -->
                                                            <div class="flex gap-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6 shrink-0 text-indigo-500"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>

                                                                <span class="text-gray-600 text-left">Historial</span>
                                                            </div>
                                                            <!-- check - end -->

                                                            <!-- check - start -->
                                                            <div class="flex gap-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6 shrink-0 text-indigo-500"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>

                                                                <span class="text-gray-600 text-left">Herramientas
                                                                    Premium</span>
                                                            </div>
                                                            <!-- check - end -->

                                                            <!-- check - start -->
                                                            <div class="flex gap-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6 shrink-0 text-indigo-500"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>

                                                                <span class="text-gray-600 text-left">Solicitar
                                                                    Herramientas</span>
                                                            </div>


                                                            <!-- check - end -->
                                                        </div>
                                                    </div>

                                                    <div class="mt-auto flex flex-col gap-2">
                                                        <div class="flex items-end justify-center gap-1">
                                                            <span class="self-start text-gray-600">€</span>
                                                            <span class="text-4xl font-bold text-gray-800">6.00</span>

                                                        </div>
                                                        <span class="text-gray-500">72€/Año - Un único pago con descuento
                                                            del
                                                            14%</span>


                                                    </div>
                                                    <a href="{{ route('teacher.plans.show', trim(' annual')) }}"
                                                        class="block rounded-lg mt-4 bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">Suscríbete</a>
                                                </div>
                                                <!-- plan - end -->

                                                <!-- plan - start -->
                                                <div class="flex flex-col rounded-lg border-2 border-blue-500 p-4 pt-6">
                                                    <div class="mb-12">
                                                        <div
                                                            class="mb-2 pb-2 border-b border-gray-200 text-center text-2xl font-bold text-gray-800">
                                                            Premium Mensual</div>

                                                        <p class="mx-auto pt-2 mb-8 text-left text-gray-500"
                                                            style="padding-left: 7px;">Acceso
                                                            a
                                                            herramientas premium con soporte completo</p>

                                                        <div class="space-y-2">
                                                            <!-- check - start -->
                                                            <div class="flex gap-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6 shrink-0 text-indigo-500"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>

                                                                <span class="text-gray-600  text-left">Accesso a la
                                                                    plataforma</span>
                                                            </div>
                                                            <!-- check - end -->

                                                            <!-- check - start -->
                                                            <div class="flex gap-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6 shrink-0 text-indigo-500"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>

                                                                <span class="text-gray-600 text-left">Herramientas
                                                                    Gratis</span>
                                                            </div>
                                                            <!-- check - end -->

                                                            <!-- check - start -->
                                                            <div class="flex gap-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6 shrink-0 text-indigo-500"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>

                                                                <span class="text-gray-600 text-left">Historial</span>
                                                            </div>
                                                            <!-- check - end -->

                                                            <!-- check - start -->
                                                            <div class="flex gap-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6 shrink-0 text-indigo-500"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>

                                                                <span class="text-gray-600 text-left">Herramientas
                                                                    Premium</span>
                                                            </div>
                                                            <!-- check - end -->

                                                            <!-- check - start -->
                                                            <div class="flex gap-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6 shrink-0 text-indigo-500"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>

                                                                <span class="text-gray-600 text-left">Solicitar
                                                                    Herramientas</span>
                                                            </div>
                                                            <!-- check - end -->
                                                        </div>
                                                    </div>

                                                    <div class="mt-auto flex flex-col gap-2">
                                                        <div class="flex items-end justify-center gap-1">
                                                            <span class="self-start text-gray-600">€</span>
                                                            <span class="text-4xl font-bold text-gray-800">6.99</span>

                                                        </div>
                                                        <span class="text-gray-500">Paga cada mes y cancela cuando
                                                            quieras</span>

                                                    </div>
                                                    <a href="{{ route('teacher.plans.show', trim(' monthly')) }}"
                                                        class="block rounded-lg mt-4 bg-blue-500 px-8 py-3
                                                text-center text-sm font-semibold text-white outline-none
                                                ring-blue-300 transition duration-100 hover:bg-blue-600
                                                focus-visible:ring active:bg-blue-700 md:text-base">Suscríbete</a>
                                                </div>

                                                <!-- plan - start -->
                                                <div class="flex flex-col rounded-lg border p-4 pt-6">
                                                    <div class="mb-12">
                                                        <div
                                                            class="mb-2 pb-2 border-b border-gray-200 text-center text-2xl font-bold text-gray-800">
                                                            Cuentas para Centros</div>



                                                        {{-- <div class="space-y-2">
                                                    <!-- check - start -->
                                                    <div class="flex gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-6 w-6 shrink-0 text-indigo-500" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>

                                                        <span class="text-gray-600 text-left">Unlimited file
                                                            storage</span>
                                                    </div>
                                                    <!-- check - end -->

                                                    <!-- check - start -->
                                                    <div class="flex gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-6 w-6 shrink-0 text-indigo-500" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>

                                                        <span class="text-gray-600 text-left">Unlimited bandwidth per
                                                            month</span>
                                                    </div>
                                                    <!-- check - end -->

                                                    <!-- check - start -->
                                                    <div class="flex gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-6 w-6 shrink-0 text-indigo-500" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>

                                                        <span class="text-gray-600 text-left">1.000.000 tasks per
                                                            month</span>
                                                    </div>
                                                    <!-- check - end -->

                                                    <!-- check - start -->
                                                    <div class="flex gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-6 w-6 shrink-0 text-indigo-500" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>

                                                        <span class="text-gray-600 text-left">Email and phone
                                                            support</span>
                                                    </div>
                                                    <!-- check - end -->

                                                    <!-- check - start -->
                                                    <div class="flex gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-6 w-6 shrink-0 text-indigo-500" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>

                                                        <span class="text-gray-600 text-left">Unlimited Webhooks</span>
                                                    </div>
                                                    <!-- check - end -->
                                                </div> --}}
                                                    </div>
                                                    <p
                                                        style="font-size: 45px;line-height: 1.1;font-weight: 500;margin-top: 20%;">
                                                        MUY
                                                        PRONTO</p>
                                                    <div class="mt-auto flex flex-col gap-8">


                                                        <button disabled
                                                            class="block rounded-lg bg-gray-800 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-gray-700 focus-visible:ring active:bg-gray-600 md:text-base">Suscríbete</button>
                                                    </div>
                                                </div>
                                                <!-- plan - end -->
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{-- END --}}
                        @else
                            <div class="flex flex-col-reverse xl:flex-row flex-col">
                                <div class="flex-1 mt-2 xl:mt-0">
                                    <div class="grid grid-cols-12 gap-x-5 gap-y-5">
                                        <div class="col-span-12 2xl:col-span-6">
                                            <div>
                                                <label for="update-profile-form-1" class="form-label">Access Level</label>
                                                <input id="update-profile-form-1" type="text" class="form-control"
                                                    placeholder="Input text" value="Premium" disabled>
                                            </div>

                                        </div>
                                        <div class="col-span-12 2xl:col-span-6">
                                            <div class="mt-3 2xl:mt-0">
                                                <label for="update-profile-form-3" class="form-label">Type</label>
                                                <input id="update-profile-form-1" type="text" class="form-control"
                                                    placeholder="Input text" value="{{ $user->sub_type }}" disabled>
                                            </div>

                                        </div>

                                        <div class="col-span-12 2xl:col-span-4">
                                            <div class="mt-3 2xl:mt-0">
                                                <label for="update-profile-form-3" class="form-label">Last 4
                                                    Digits</label>
                                                <input id="update-profile-form-1" type="text" class="form-control"
                                                    placeholder="Input text" value="{{ $user->pm_last_four }}" disabled>
                                            </div>

                                        </div>

                                        <div class="col-span-12 2xl:col-span-4">
                                            <div class="mt-3 2xl:mt-0">
                                                <label for="update-profile-form-3" class="form-label">Start Date</label>
                                                <input id="update-profile-form-1" type="text" class="form-control"
                                                    placeholder="Input text" value="{{ $started_at }}" disabled>
                                            </div>

                                        </div>

                                        <div class="col-span-12 2xl:col-span-4">
                                            <div class="mt-3 2xl:mt-0">
                                                <label for="update-profile-form-3" class="form-label">Ends At</label>
                                                <input id="update-profile-form-1" type="text" class="form-control"
                                                    placeholder="Input text" value="{{ $ended_at }}" disabled>
                                            </div>

                                        </div>
                                        <div class="flex gap-3">
                                            <div class="">
                                                <form action="{{ route('teacher.view-cancel-now') }}" method="post">
                                                    @csrf
                                                    {{-- @dd($plan); --}}
                                                    {{-- <input type="hidden" name="plan" value="{{  }}"> --}}
                                                    <button type="submit" class="btn btn-danger">Cancel
                                                        Now</button>
                                                </form>
                                            </div>
                                            <div class="">
                                                <a href="{{ route('teacher.updateCard') }}" class="btn btn-secondary"
                                                    method="get">
                                                    Update Card
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-5">
                <div class="bg-white rounded-lg shadow-lg border border-red-500">
                    <div class="px-6 py-4">
                        <h2 class="text-xl font-bold text-red-500">Danger Zone</h2>
                        <div class="mt-4 flex flex-row items-center">
                            <div class="w-1/2 pr-2 text-left">
                                <h4 class="font-bold text-lg">Account deletion</h4>
                                <p class="font-medium">This will delete your account forever.</p>
                            </div>
                            <div class="w-1/2 pl-2 flex justify-end">
                                <a class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline mr-2"
                                    href="{{ route('teacher.view.delete') }}">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Personal Information -->
        </div>
    </div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
