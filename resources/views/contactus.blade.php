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
        <!-- contact area start -->
        <section class="contact__area pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-7 col-xl-7 col-lg-6">
                        <div class="contact__wrapper">
                            <div class="section__title-wrapper mb-40">
                                <h2 class="section__title">Póngase en<span class="yellow-bg yellow-bg-big"> contacto<img
                                            src="assets/img/shape/yellow-bg.png" alt=""></span></h2>
                                <p>¿Tiene alguna pregunta o simplemente quiere decir hola? Nos encantaría escuchar de
                                    usted.
                                </p>
                            </div>
                            <div class="contact__form">
                                <form action="{{ route('guest.contact.submit') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-md-6">
                                            <div class="contact__form-input">
                                                <input type="text" name="name" placeholder="Su nombre">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-md-6">
                                            <div class="contact__form-input">
                                                <input type="email" name="email" placeholder="Su correo electrónico">
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="contact__form-input">
                                                <input type="text" name="subject" placeholder="Asunto">
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="contact__form-input">
                                                <textarea name="message" placeholder="Ingrese su mensaje"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="contact__form-agree  d-flex align-items-center mb-20">
                                                <input class="e-check-input" type="checkbox" id="e-agree" name="terms">
                                                <label class="e-check-label" for="e-agree">Estoy de acuerdo con los <a
                                                        href="#">Términos y Condiciones</a></label>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="contact__btn">
                                                <button class="tp-btn" type="submit">Enviar su mensaje</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- the rest of your HTML code here -->
                    <div class="col-xxl-4 offset-xxl-1 col-xl-4 offset-xl-1 col-lg-5 offset-lg-1">
                        <div class="contact__info white-bg p-relative z-index-1">
                            <div class="contact__shape">
                                <img class="contact-shape-1" src="assets/img/contact/contact-shape-1.png" alt="">
                                <img class="contact-shape-2" src="assets/img/contact/contact-shape-2.png" alt="">
                                <img class="contact-shape-3" src="assets/img/contact/contact-shape-3.png" alt="">
                            </div>
                            <div class="contact__info-inner white-bg">
                                <ul>
                                    <li>
                                        <div class="contact__info-item d-flex align-items-start mb-35">
                                            <div class="contact__info-icon mr-15">
                                                <svg class="map" viewBox="0 0 24 24">
                                                    <path class="st0"
                                                        d="M21,10c0,7-9,13-9,13s-9-6-9-13c0-5,4-9,9-9S21,5,21,10z" />
                                                    <circle class="st0" cx="12" cy="10" r="3" />
                                                </svg>
                                            </div>
                                            <div class="contact__info-text">
                                                <h4>New York Office</h4>
                                                <p><a target="_blank"
                                                        href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">Maypole
                                                        Crescent 70-80 Upper St Norwich NR2 1LT</a></p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact__info-item d-flex align-items-start mb-35">
                                            <div class="contact__info-icon mr-15">
                                                <svg class="mail" viewBox="0 0 24 24">
                                                    <path class="st0"
                                                        d="M4,4h16c1.1,0,2,0.9,2,2v12c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V6C2,4.9,2.9,4,4,4z" />
                                                    <polyline class="st0" points="22,6 12,13 2,6 " />
                                                </svg>
                                            </div>
                                            <div class="contact__info-text">
                                                <h4>Email us directly</h4>
                                                <p><a href="mailto:support@educal.com">support@educal.com</a></p>
                                                <p><a href="mailto:info@educal.com"> info@educal.com</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact__info-item d-flex align-items-start mb-35">
                                            <div class="contact__info-icon mr-15">
                                                <svg class="call" viewBox="0 0 24 24">
                                                    <path class="st0"
                                                        d="M22,16.9v3c0,1.1-0.9,2-2,2c-0.1,0-0.1,0-0.2,0c-3.1-0.3-6-1.4-8.6-3.1c-2.4-1.5-4.5-3.6-6-6  c-1.7-2.6-2.7-5.6-3.1-8.7C2,3.1,2.8,2.1,3.9,2C4,2,4.1,2,4.1,2h3c1,0,1.9,0.7,2,1.7c0.1,1,0.4,1.9,0.7,2.8c0.3,0.7,0.1,1.6-0.4,2.1  L8.1,9.9c1.4,2.5,3.5,4.6,6,6l1.3-1.3c0.6-0.5,1.4-0.7,2.1-0.4c0.9,0.3,1.8,0.6,2.8,0.7C21.3,15,22,15.9,22,16.9z" />
                                                </svg>
                                            </div>
                                            <div class="contact__info-text">
                                                <h4>Phone</h4>
                                                <p><a href="tel:+(426)-742-26-44">+(426) 742 26 44</a></p>
                                                <p><a href="tel:+(224)-762-442-32">+(224) 762 442 32</a></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="contact__social pl-30">
                                    <h4>Follow Us</h4>
                                    <ul>
                                        <li><a href="#" class="fb"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="tw"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#" class="pin"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->

        <!-- contact info area start -->

        <!-- contact info area end -->

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