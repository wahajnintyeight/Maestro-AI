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

    <!-- header area start -->
    <header>
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
    </header>
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
                                    <a href="index.html">
                                        <img src="{{ asset('assets/img/logo/logo-2.png') }}" alt="logo">
                                    </a>
                                </div>
                                <div class="offcanvas__close">
                                    <button class="offcanvas__close-btn" data-bs-toggle="modal"
                                        data-bs-target="#offcanvasmodal">
                                        <i class="fal fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="offcanvas__search mb-25">
                                <form action="#">
                                    <input type="text" placeholder="What are you searching for?">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                            <div class="mobile-menu fix"></div>
                            <div class="offcanvas__text d-none d-lg-block">
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and will give you a complete account of the system and
                                    expound the actual teachings of the great explore</p>
                            </div>
                            <div class="offcanvas__map d-none d-lg-block mb-15">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29176.030811137334!2d90.3883827!3d23.924917699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1605272373598!5m2!1sen!2sbd"></iframe>
                            </div>
                            <div class="offcanvas__contact mt-30 mb-20">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fal fa-map-marker-alt"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <a target="_blank"
                                                href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A,
                                                Mirnada City Tower, NYC</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <a href="mailto:support@gmail.com">088889797697</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <a href="tel:+012-345-6789">support@mail.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="offcanvas__social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
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
                            <a href="{{route('login')}}" class="tp-btn-green">Comenzar</a>
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
                </div>
            </div>
        </section>
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