<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Maestro AI - Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- CSS here -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/backtotop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>


    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->
    <header>
        <div id="header-sticky" class="header__area header__transparent">
            <div class="header__bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-6 col-6">
                            <div class="header__bottom-left d-flex align-items-center">
                                <div class="logo">
                                    <a href="{{route('/')}}">
                                        <h1 style="font-size: 24px; color: #258e46; margin: 0 !important;">MaestroIA
                                        </h1>
                                    </a>
                                </div>
                                <div class="main-menu main-menu-2 main-menu-border ml-30 pl-30">
                                    <nav id="mobile-menu">
                                        <ul>

                                            <li>
                                                <a href="{{route('/')}}">Home</a>
                                            </li>
                                            <li>
                                                <a href="{{route('pricing')}}">Precios</a>
                                            </li>
                                            <li>
                                                <a href="{{route('contactUs')}}">Contacto</a>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-3 col-lg-2 col-md-6 col-6">
                            <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">
                                <div class="header__action d-none d-xl-block">
                                    <ul>
                                        <li>
                                            <a href="{{route('login')}}" class="tp-btn-green"
                                                style="display: flex;width: auto !important;border: 2px solid rgba(12, 20, 15, 0.08);background-color: transparent;border-radius: 5px;align-items: center;">
                                                <div style="display: flex; align-items: center; gap: 10px;">
                                                    <svg width="15" height="20" viewBox="0 0 15 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.1466 8.96416C7.05493 8.95499 6.94493 8.95499 6.8441 8.96416C4.66243 8.89083 2.92993 7.10333 2.92993 4.90333C2.92993 2.65749 4.74493 0.833328 6.99993 0.833328C9.24576 0.833328 11.0699 2.65749 11.0699 4.90333C11.0608 7.10333 9.32826 8.89083 7.1466 8.96416Z"
                                                            stroke="#0C140F" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M2.56341 12.3467C0.345075 13.8317 0.345075 16.2517 2.56341 17.7275C5.08424 19.4142 9.21841 19.4142 11.7392 17.7275C13.9576 16.2425 13.9576 13.8225 11.7392 12.3467C9.22758 10.6692 5.09341 10.6692 2.56341 12.3467Z"
                                                            stroke="#0C140F" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <p style="margin: 0;line-height: 0; padding: 0 !important;">Login
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="header__hamburger ml-50 d-xl-none">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#offcanvasmodal"
                                        class="hamurger-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area start -->
    {{-- <header>
        <div style="padding-top: 10px; padding-bottom: 10px" id="header-sticky"
            class="header__area header__transparent my-10">
            <div class="header__bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-6 col-6">
                            <div class="header__bottom-left my-10 d-flex align-items-center">
                                <div style="font-family: 'Inter', sans-serif;font-weight: bold;font-size: 24px;color: #258e46;"
                                    class="logo">
                                    MaestroIA
                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-3 col-lg-2 col-md-6 col-6">
                            <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">
                                <div class="header__action d-none d-xl-block">
                                    <ul>

                                        <li>
                                            <a href="{{route('login')}}">
                                                <svg width="15" height="20" viewBox="0 0 15 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.1466 8.96416C7.05493 8.95499 6.94493 8.95499 6.8441 8.96416C4.66243 8.89083 2.92993 7.10333 2.92993 4.90333C2.92993 2.65749 4.74493 0.833328 6.99993 0.833328C9.24576 0.833328 11.0699 2.65749 11.0699 4.90333C11.0608 7.10333 9.32826 8.89083 7.1466 8.96416Z"
                                                        stroke="#0C140F" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M2.56341 12.3467C0.345075 13.8317 0.345075 16.2517 2.56341 17.7275C5.08424 19.4142 9.21841 19.4142 11.7392 17.7275C13.9576 16.2425 13.9576 13.8225 11.7392 12.3467C9.22758 10.6692 5.09341 10.6692 2.56341 12.3467Z"
                                                        stroke="#0C140F" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="header__hamburger  ml-50 d-xl-none">
                                    <ul>
                                        <li>
                                            <a style="display: inline-block;
                                                    width: 44px;
                                                    height: 44px;
                                                    line-height: 38px;
                                                    text-align: center;
                                                    border: 2px solid rgba(12, 20, 15, 0.08);
                                                    -webkit-border-radius: 50%;
                                                    -moz-border-radius: 50%;
                                                    -o-border-radius: 50%;
                                                    -ms-border-radius: 50%;
                                                    border-radius: 50%;" href="{{route('login')}}">
                                                <svg width="15" height="20" viewBox="0 0 15 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.1466 8.96416C7.05493 8.95499 6.94493 8.95499 6.8441 8.96416C4.66243 8.89083 2.92993 7.10333 2.92993 4.90333C2.92993 2.65749 4.74493 0.833328 6.99993 0.833328C9.24576 0.833328 11.0699 2.65749 11.0699 4.90333C11.0608 7.10333 9.32826 8.89083 7.1466 8.96416Z"
                                                        stroke="#0C140F" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M2.56341 12.3467C0.345075 13.8317 0.345075 16.2517 2.56341 17.7275C5.08424 19.4142 9.21841 19.4142 11.7392 17.7275C13.9576 16.2425 13.9576 13.8225 11.7392 12.3467C9.22758 10.6692 5.09341 10.6692 2.56341 12.3467Z"
                                                        stroke="#0C140F" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> --}}
    <!-- header area end -->

    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="modal fade" id="offcanvasmodal" tabindex="-1" aria-labelledby="offcanvasmodal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="offcanvas__wrapper">
                        <div class="offcanvas__content">
                            <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                                <div class="offcanvas__logo logo">
                                    <h1 style="font-size: 24px; color: #258e46; margin: 0 !important;">MaestroIA
                                    </h1>
                                </div>
                                <div class="offcanvas__close">
                                    <button class="offcanvas__close-btn" data-bs-toggle="modal"
                                        data-bs-target="#offcanvasmodal">
                                        <i class="fal fa-times"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="mobile-menu fix"></div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas area end -->
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <main>

        <!-- slider area start -->
        <section class="slider__area slider__height-2 include-bg d-flex align-items-center"
            data-background="{{ asset('assets/img/slider/2/slider-2-bg.jpg') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-lg-6">
                        <div class="slider__content-2 mt-30">
                            <span>Potencie su enseñanza con soluciones inteligentes</span>
                            <h3 class="slider__title-2">Herramientas de Inteligencia Artificial pioneras para educadores
                                en Español</h3>
                            <p>Aprovecha al máximo la Inteligencia Artificial.</p>
                            <a href="{{route('register')}}" class="tp-btn-green">Prueba Gratis</a>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6">
                        <div class="slider__thumb-2 p-relative">
                            <div class="slider__shape">
                                <img class="slider__shape-1"
                                    src="{{ asset('assets/img/slider/2/shape/slider-cap-1.png') }}" alt="">
                                <img class="slider__shape-2"
                                    src="{{ asset('assets/img/slider/2/shape/slider-cap-2.png') }}" alt="">
                                <img class="slider__shape-3"
                                    src="{{ asset('assets/img/slider/2/shape/slider-cap-3.png') }}" alt="">
                            </div>
                            <span class="slider__thumb-mask">
                                <img src="https://wphix.com/html/eduker-html/assets/img/slider/2/slider-thumb.png"
                                    alt="">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider area end -->



        <!-- course area start -->
        <!-- research area start -->
        <section class="research__area research__border grey-bg-3 pt-115 pb-90 p-relative z-index-1">
            <div class="research__shape">
                <img class="research__shape-1 d-none d-sm-block" src="assets/img/research/research-shape-1.png" alt="">
                <img class="research__shape-2 d-none d-sm-block" src="assets/img/research/research-shape-2.png" alt="">
                <img class="research__shape-3" src="assets/img/research/research-shape-3.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper mb-50 text-center">
                            <span class="section__title-pre">Experimenta el Futuro de la Enseñanza y el
                                Aprendizaje</span>
                            <h2 class="section__title section__title-44">Transformando la Educación con IA</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="research__item research__item-border text-center mb-30 transition-3">
                            <div class="research__thumb mb-35">
                                <img src="https://wphix.com/html/eduker-html/eduker/assets/img/research/research-1.jpg"
                                    alt="">
                            </div>
                            <div class="research__content">
                                <h3 class="research__title">Herramientas Innovadoras de IA</h3>
                                <p>Olvídate de las tareas tediosas y deja que nuestra herramienta haga el trabajo por ti
                                    de manera instantánea. ¡Sé más
                                    eficiente y dedica tu tiempo a lo que realmente importa!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="research__item research__item-border active text-center mb-30 transition-3">
                            <div class="research__thumb mb-35">
                                <img src="https://wphix.com/html/eduker-html/eduker/assets/img/research/research-2.jpg"
                                    alt="">
                            </div>
                            <div class="research__content">
                                <h3 class="research__title">¿Qué es MaestroIA?</h3>
                                <p>MaestroIA es una innovadora aplicación web diseñada en Español para maestros.
                                    Aprovecha el poder de la inteligencia
                                    artificial para automatizar tareas mundanas, brindar experiencias de aprendizaje
                                    personalizadas y ayudar a los maestros
                                    a ahorrar tiempo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="research__item text-center mb-30 transition-3">
                            <div class="research__thumb mb-35">
                                <img src="https://wphix.com/html/eduker-html/eduker/assets/img/research/research-3.jpg"
                                    alt="">
                            </div>
                            <div class="research__content">
                                <h3 class="research__title">Cuentas en MaestroIA</h3>
                                <p>¡Regístrese gratis para probar algunas de nuestras herramientas! Luego, por tan solo
                                    6 euros al mes, puede acceder a una
                                    suscripción Pro. Y lo mejor de todo: puede cancelar en cualquier momento. ¿Por qué
                                    no empezar hoy mismo y crear una
                                    cuenta gratuita para ver cómo la Inteligencia Artificial puede ayudar a simplificar
                                    su vida como profesor?</p>
                            </div>
                        </div>
                    </div>
                    {{-- <a href="{{route('login')}}" style="width: 170px; border-radius: 200px;"
                        class="tp-btn-green w-32 text-center mx-auto">Prueba Gratis</a> --}}
                </div>

            </div>
        </section>

        <!-- price area start -->
        <section class="price__area pb-85">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper text-center mt-40 mb-60">
                            <h2 class="section__title-2">Nuestros Precios</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-stretch">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 d-flex">
                        <div style="display: flex; flex-direction: column;"
                            class="price__banner theme-bg-3 mb-30 fix p-relative">
                            <div class="price__shape">
                                <img src="assets/img/price/price-shape.png" alt="">
                            </div>
                            <div class="price__banner-content p-relative z-index-1">
                                <h3>
                                    <span>Comienza Gratis Con Nuestros Planes Iniciales.</span>

                                </h3>
                                <p>Únete ahora y explora sin coste.</p>

                                <a href="{{route('register')}}" class="tp-price-btn">Prueba Gratis</a>
                            </div>
                            <div class="price__thumb">
                                <img src="https://wphix.com/html/eduker-html/eduker/assets/img/price/price-thumb.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div style="filter: drop-shadow(6px 5px 15px rgba(0, 0, 0, 0.2));"
                        class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 d-flex">
                        <div style="display: flex; flex-direction: column;"
                            class="price__item active white-bg mb-30 transition-3 fix">
                            <h3 class="price__title">Premium Anual</h3>

                            <div class="price__content">
                                <div class="price__list mb-35">
                                    <ul>
                                        <li>Accesso a la plataforma <span><i class="fa-solid fa-check"></i></span></li>
                                        <li>Herramientas Gratis <span><i class="fa-solid fa-check"></i></span></li>
                                        <li>Historial <span><i class="fa-solid fa-check"></i></span></li>
                                        <li>Herramientas Premium<span><i class="fa-solid fa-check"></i></span></li>
                                        <li>Solicitar Herramientas <span><i class="fa-solid fa-check"></i></span></li>
                                    </ul>
                                </div>
                                <div style="text-align: center" class="price__amount mb-30">
                                    <h4>€5.00 <span>/ Mes</span></h4>
                                    <p style="text-align: center">60€/Año - Un único pago con descuento del 14%</p>
                                </div>
                                <div class="price__btn">
                                    <a href="{{route('login')}}" class="tp-btn-9 tp-btn-12 w-100">Suscribete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 d-flex">
                        <div style="display: flex; flex-direction: column;"
                            class="price__item white-bg mb-30 transition-3 fix">
                            <h3 class="price__title">Premium Mensual</h3>

                            <div class="price__content">
                                <div class="price__list mb-35">
                                    <ul>
                                        <li>Accesso a la plataforma <span><i class="fa-solid fa-check"></i></span></li>
                                        <li>Herramientas Gratis <span><i class="fa-solid fa-check"></i></span></li>
                                        <li>Historial <span><i class="fa-solid fa-check"></i></span></li>
                                        <li>Herramientas Premium <span><i class="fa-solid fa-check"></i></span></li>
                                        </li>
                                        <li>Solicitar Herramientas <span><i class="fa-solid fa-check"></i></span></li>
                                        </li>
                                    </ul>
                                </div>
                                <div style="text-align: center" class="price__amount mb-30">
                                    <h4>€5.99 <span> / Mes</span></h4>
                                    <p style="text-align: center">Paga cada mes y cancela cuando quieras</p>
                                </div>
                                <div class="price__btn">
                                    <a href="{{route('login')}}" class="tp-btn-9 tp-btn-12 w-100">Suscribete</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <div style="margin-bottom: 40px;" class="row justify-content-center mb-40 ">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="course__enroll-wrapper p-relative d-sm-flex align-items-center justify-content-between include-bg"
                    data-background="assets/img/course/bg/course-bg.png">
                    <div class="course__enroll-icon">
                        <span>
                            <svg width="28" height="34" viewBox="0 0 28 34" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_268_615)">
                                    <path
                                        d="M7.59649 15.161H11.2015V23.561C11.2015 25.521 12.2632 25.9177 13.5582 24.4477L22.3898 14.4144C23.4748 13.1894 23.0198 12.1744 21.3748 12.1744H17.7698V3.77435C17.7698 1.81435 16.7082 1.41769 15.4132 2.88769L6.58149 12.921C5.50816 14.1577 5.96316 15.161 7.59649 15.161Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_268_615" x="2" y="2" width="24.9795" height="31.3354"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="4" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0.825 0 0 0 0 0.38207 0 0 0 0 0 0 0 0 0.5 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_268_615" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_268_615"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </span>
                    </div>
                    <div class="course__enroll-content">
                        {{-- <p>Permítenos Ayudar</p> --}}
                        <h4>Simplifica tu enseñanza con IA</h4>
                    </div>
                    <div class="course__enroll-btn pt-5">
                        <a href="{{route('register')}}" class="tp-btn-5 tp-btn-11">Prueba Gratis</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- price area end -->
        <!-- research area end -->
        <!-- course area end -->

    </main>

    <!-- footer area start -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© 2023 Maestro AI</p>

            <a href="/"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img src="{{ asset('assets/img/favicon.png') }}" />
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="{{route('/')}}" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="{{route('login')}}" class="nav-link px-2 text-muted">Login</a></li>
                <li class="nav-item"><a href="{{route('register')}}" class="nav-link px-2 text-muted">Sign Up</a></li>
            </ul>
        </footer>
    </div>
    <!-- footer area end -->

    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.js') }}"></script>
    <script src="{{ asset('assets/js/backtotop.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>