<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eduker – Online Course & Education HTML5 Template</title>
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
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{ asset('assets/img/logo/logo-2.png') }}" alt="logo">
                                    </a>
                                </div>
                                {{-- <div class="main-menu main-menu-2 main-menu-border ml-30 pl-30">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown">
                                                <a href="index.html">Home</a>
                                                <ul class="submenu">
                                                    <li><a href="index.html">Home Style 1</a></li>
                                                    <li><a href="index-2.html">Home Style 2</a></li>
                                                    <li><a href="index-3.html">Home Style 3</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="about.html">About</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="course-v1.html">Courses</a>
                                                <ul class="submenu">
                                                    <li><a href="course-v1.html">Course Style 1</a></li>
                                                    <li><a href="course-v2.html">Course Style 2</a></li>
                                                    <li><a href="course-sidebar.html">Course Sidebar</a></li>
                                                    <li><a href="course-details.html">Course Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="about.html">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="event.html">Our Events</a></li>
                                                    <li><a href="event-details.html">Event Details</a></li>
                                                    <li><a href="team.html">Team</a></li>
                                                    <li><a href="team-details.html">Team Details</a></li>
                                                    <li><a href="error.html">404 Error</a></li>
                                                    <li><a href="my-profile.html">My Profile</a></li>
                                                    <li><a href="my-course.html">My Courses</a></li>
                                                    <li><a href="sign-in.html">Sign In</a></li>
                                                    <li><a href="sign-up.html">Sign Up</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="blog.html">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div> --}}
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
                                {{-- <div class="header__search header__search-2 d-none d-xl-block">
                                    <form action="#">
                                        <div class="header__search-input">
                                            <input type="text" placeholder="Search...">
                                            <button class="header__search-btn">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.11111 15.2222C12.0385 15.2222 15.2222 12.0385 15.2222 8.11111C15.2222 4.18375 12.0385 1 8.11111 1C4.18375 1 1 4.18375 1 8.11111C1 12.0385 4.18375 15.2222 8.11111 15.2222Z"
                                                        stroke="#3E8454" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M17 17L13.1333 13.1333" stroke="#3E8454" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div> --}}
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
                            <span>The Leader in Online Learning</span>
                            <h3 class="slider__title-2">Build an Incredible Learning Experience</h3>
                            <p>The right mentoring relationship can be a powerful tool for Professional growth. Bark up
                                the right tree.</p>
                            <a href="course-v1.html" class="tp-btn-green">Explore Coureses</a>
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

        <!-- category area start -->
        <section class="category__area pt-105 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="category__wrapper">
                            <div class="section__title-wrapper-2">
                                <span class="section__title-pre-2">Categories</span>
                                <h3 class="section__title-2 section__title-2-30">Explore our Popular Categories</h3>
                            </div>
                            <p>Look into yourself, get something in return as your achievement</p>
                            <div class="category__btn">
                                <a href="course-v1.html" class="tp-btn-5">Browse all categories</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="category__item-wrapper">
                            <div class="row">
                                <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="category__item text-center mb-45">
                                        <div class="category__icon">
                                            <a href="course-v1.html">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M28.733 3.71736C26.5787 9.08912 21.1789 16.3914 16.6605 20.0145L13.9047 22.2247C13.555 22.4765 13.2052 22.7004 12.8135 22.8542C12.8135 22.6024 12.7996 22.3227 12.7576 22.0569C12.6037 20.8818 12.0721 19.7907 11.1349 18.8534C10.1836 17.9022 9.02254 17.3426 7.83348 17.1887C7.5537 17.1747 7.27392 17.1468 6.99414 17.1747C7.14802 16.7411 7.38583 16.3354 7.6796 15.9997L9.86188 13.2438C13.471 8.7254 20.8012 3.29769 26.159 1.15738C26.9844 0.849623 27.7817 1.07345 28.2853 1.59104C28.8169 2.10863 29.0687 2.906 28.733 3.71736Z"
                                                        stroke="#4270FF" stroke-width="1.56" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M12.8136 22.8543C12.8136 24.393 12.226 25.8619 11.1209 26.981C10.2676 27.8343 9.10649 28.4219 7.72158 28.6037L4.2803 28.9814C2.40578 29.1913 0.797051 27.5965 1.02087 25.694L1.39858 22.2527C1.73431 19.1891 4.29429 17.2307 7.00815 17.1747C7.28793 17.1608 7.58169 17.1747 7.84748 17.1887C9.03655 17.3426 10.1976 17.8882 11.1489 18.8534C12.0861 19.7907 12.6177 20.8818 12.7716 22.0569C12.7856 22.3227 12.8136 22.5885 12.8136 22.8543Z"
                                                        stroke="#4270FF" stroke-width="1.56" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M18.1433 18.4477C18.1433 14.7966 15.1776 11.8309 11.5265 11.8309"
                                                        stroke="#4270FF" stroke-width="1.56" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M26.3688 16.0137L27.404 17.0349C29.4884 19.1192 29.4884 21.1756 27.404 23.26L23.2633 27.4007C21.2069 29.4571 19.1225 29.4571 17.0662 27.4007"
                                                        stroke="#4270FF" stroke-width="1.56" stroke-linecap="round" />
                                                    <path
                                                        d="M2.57353 12.9081C0.517156 10.8237 0.517156 8.76737 2.57353 6.68301L6.71426 2.54228C8.77064 0.485906 10.855 0.485906 12.9114 2.54228L13.9466 3.57747"
                                                        stroke="#4270FF" stroke-width="1.56" stroke-linecap="round" />
                                                    <path d="M13.9606 3.59143L8.78467 8.76734" stroke="#4270FF"
                                                        stroke-width="1.56" stroke-linecap="round" />
                                                    <path d="M26.3688 16.0137L22.228 20.1404" stroke="#4270FF"
                                                        stroke-width="1.56" stroke-linecap="round" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="category__content">
                                            <h4 class="category__title">
                                                <a href="course-v1.html">Art & Design</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="category__item text-center mb-45">
                                        <div class="category__icon pink-bg">
                                            <a href="course-v1.html">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.32007 25.2251V22.1201" stroke="#FF6470"
                                                        stroke-width="1.6" stroke-linecap="round" />
                                                    <path d="M16 25.225V19.015" stroke="#FF6470" stroke-width="1.6"
                                                        stroke-linecap="round" />
                                                    <path d="M23.6799 25.225V15.895" stroke="#FF6470" stroke-width="1.6"
                                                        stroke-linecap="round" />
                                                    <path
                                                        d="M23.6801 6.77502L22.9901 7.58502C19.1651 12.055 14.0351 15.22 8.32007 16.645"
                                                        stroke="#FF6470" stroke-width="1.6" stroke-linecap="round" />
                                                    <path d="M19.2849 6.77502H23.6799V11.155" stroke="#FF6470"
                                                        stroke-width="1.6" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M11.5 31H20.5C28 31 31 28 31 20.5V11.5C31 4 28 1 20.5 1H11.5C4 1 1 4 1 11.5V20.5C1 28 4 31 11.5 31Z"
                                                        stroke="#FF6470" stroke-width="1.6" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="category__content">
                                            <h4 class="category__title">
                                                <a href="course-v1.html">Management</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="category__item text-center mb-45">
                                        <div class="category__icon green-bg">
                                            <a href="course-v1.html">
                                                <svg width="34" height="32" viewBox="0 0 34 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M31.4 6.76923H25.5333V5.03846C25.5321 3.96781 25.1384 2.94138 24.4385 2.18431C23.7386 1.42724 22.7898 1.00134 21.8 1H12.2C11.2102 1.00134 10.2614 1.42724 9.5615 2.18431C8.86163 2.94138 8.4679 3.96781 8.46667 5.03846V6.76923H2.6C2.17565 6.76923 1.76869 6.95158 1.46863 7.27616C1.16857 7.60074 1 8.04097 1 8.5L1 20.0385C1.00134 20.3952 1.10454 20.7427 1.29548 21.0336C1.48641 21.3244 1.75576 21.5443 2.06667 21.6632V29.2692C2.06667 29.7283 2.23524 30.1685 2.5353 30.4931C2.83535 30.8177 3.24232 31 3.66667 31H30.3333C30.7577 31 31.1646 30.8177 31.4647 30.4931C31.7648 30.1685 31.9333 29.7283 31.9333 29.2692V21.6632C32.2442 21.5443 32.5136 21.3244 32.7045 21.0336C32.8955 20.7427 32.9987 20.3952 33 20.0385V8.5C33 8.04097 32.8314 7.60074 32.5314 7.27616C32.2313 6.95158 31.8243 6.76923 31.4 6.76923ZM9.53333 5.03846C9.53422 4.27371 9.81545 3.54055 10.3154 2.99978C10.8153 2.45902 11.493 2.1548 12.2 2.15385H21.8C22.507 2.1548 23.1847 2.45902 23.6846 2.99978C24.1846 3.54055 24.4658 4.27371 24.4667 5.03846V6.76923H23.3787L23.4 5.03846C23.3989 4.57978 23.23 4.14022 22.9302 3.81588C22.6304 3.49155 22.224 3.30883 21.8 3.30769H12.18C11.756 3.30883 11.3496 3.49155 11.0498 3.81588C10.75 4.14022 10.5811 4.57978 10.58 5.03846V5.04423L10.5947 6.76923H9.53333V5.03846ZM22.3333 5.03053L22.312 6.76923H11.6613L11.6447 5.03846C11.6447 4.88545 11.7009 4.73871 11.8009 4.63052C11.9009 4.52232 12.0366 4.46154 12.178 4.46154H21.8C21.9402 4.46152 22.0747 4.52122 22.1746 4.6277C22.2744 4.73419 22.3314 4.8789 22.3333 5.03053ZM30.8667 29.2692C30.8667 29.4222 30.8105 29.569 30.7105 29.6772C30.6104 29.7854 30.4748 29.8462 30.3333 29.8462H3.66667C3.52522 29.8462 3.38956 29.7854 3.28954 29.6772C3.18952 29.569 3.13333 29.4222 3.13333 29.2692V21.7692H6.86667V23.5C6.86667 23.653 6.92286 23.7998 7.02288 23.9079C7.1229 24.0161 7.25855 24.0769 7.4 24.0769H9.53333C9.67478 24.0769 9.81044 24.0161 9.91046 23.9079C10.0105 23.7998 10.0667 23.653 10.0667 23.5V21.7692H23.9333V23.5C23.9333 23.653 23.9895 23.7998 24.0895 23.9079C24.1896 24.0161 24.3252 24.0769 24.4667 24.0769H26.6C26.7415 24.0769 26.8771 24.0161 26.9771 23.9079C27.0771 23.7998 27.1333 23.653 27.1333 23.5V21.7692H30.8667V29.2692ZM7.93333 22.9231V20.0385C7.93332 19.9615 7.94786 19.8853 7.97606 19.8146C8.00427 19.7439 8.04554 19.6802 8.09733 19.6274C8.14532 19.5742 8.20279 19.532 8.26628 19.5035C8.32976 19.475 8.39793 19.4607 8.46667 19.4615C8.60812 19.4615 8.74377 19.5223 8.84379 19.6305C8.94381 19.7387 9 19.8855 9 20.0385V22.9231H7.93333ZM25 22.9231V20.0385C25 19.8855 25.0562 19.7387 25.1562 19.6305C25.2562 19.5223 25.3919 19.4615 25.5333 19.4615C25.6045 19.4612 25.6749 19.4767 25.7403 19.5071C25.8057 19.5375 25.8646 19.5821 25.9133 19.6382C25.9624 19.6904 26.0013 19.7527 26.0277 19.8215C26.054 19.8902 26.0673 19.964 26.0667 20.0385V22.9231H25ZM31.9333 20.0385C31.9333 20.1915 31.8771 20.3382 31.7771 20.4464C31.6771 20.5546 31.5415 20.6154 31.4 20.6154H27.1333V20.0385C27.1333 19.5794 26.9648 19.1392 26.6647 18.8146C26.3646 18.49 25.9577 18.3077 25.5333 18.3077C25.109 18.3077 24.702 18.49 24.402 18.8146C24.1019 19.1392 23.9333 19.5794 23.9333 20.0385V20.6154H10.0667V20.0385C10.0667 19.5794 9.8981 19.1392 9.59804 18.8146C9.29798 18.49 8.89101 18.3077 8.46667 18.3077C8.04232 18.3077 7.63535 18.49 7.3353 18.8146C7.03524 19.1392 6.86667 19.5794 6.86667 20.0385V20.6154H2.6C2.45855 20.6154 2.3229 20.5546 2.22288 20.4464C2.12286 20.3382 2.06667 20.1915 2.06667 20.0385V8.5C2.06667 8.34699 2.12286 8.20025 2.22288 8.09205C2.3229 7.98386 2.45855 7.92308 2.6 7.92308H31.4C31.5415 7.92308 31.6771 7.98386 31.7771 8.09205C31.8771 8.20025 31.9333 8.34699 31.9333 8.5V20.0385Z"
                                                        fill="#59C578" stroke="#59C578" stroke-width="0.4" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="category__content">
                                            <h4 class="category__title">
                                                <a href="course-v1.html">Business</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="category__item text-center mb-45">
                                        <div class="category__icon orange-bg">
                                            <a href="course-v1.html">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21.3334 10.6666H10.6667V21.3333H21.3334V10.6666Z"
                                                        stroke="#F37F43" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M6.66675 29.3334C8.86675 29.3334 10.6667 27.5334 10.6667 25.3334V21.3334H6.66675C4.46675 21.3334 2.66675 23.1334 2.66675 25.3334C2.66675 27.5334 4.46675 29.3334 6.66675 29.3334Z"
                                                        stroke="#F37F43" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M6.66675 10.6666H10.6667V6.66663C10.6667 4.46663 8.86675 2.66663 6.66675 2.66663C4.46675 2.66663 2.66675 4.46663 2.66675 6.66663C2.66675 8.86663 4.46675 10.6666 6.66675 10.6666Z"
                                                        stroke="#F37F43" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M21.3333 10.6666H25.3333C27.5333 10.6666 29.3333 8.86663 29.3333 6.66663C29.3333 4.46663 27.5333 2.66663 25.3333 2.66663C23.1333 2.66663 21.3333 4.46663 21.3333 6.66663V10.6666Z"
                                                        stroke="#F37F43" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M25.3333 29.3334C27.5333 29.3334 29.3333 27.5334 29.3333 25.3334C29.3333 23.1334 27.5333 21.3334 25.3333 21.3334H21.3333V25.3334C21.3333 27.5334 23.1333 29.3334 25.3333 29.3334Z"
                                                        stroke="#F37F43" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="category__content">
                                            <h4 class="category__title">
                                                <a href="course-v1.html">Business</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="category__item text-center mb-45">
                                        <div class="category__icon">
                                            <a href="course-v1.html">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.25 18.625C12.25 20.08 13.375 21.25 14.755 21.25H17.575C18.775 21.25 19.75 20.23 19.75 18.955C19.75 17.59 19.15 17.095 18.265 16.78L13.75 15.205C12.865 14.89 12.265 14.41 12.265 13.03C12.265 11.77 13.24 10.735 14.44 10.735H17.26C18.64 10.735 19.765 11.905 19.765 13.36"
                                                        stroke="#2675FF" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M16 9.25V22.75" stroke="#2675FF" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M31 16C31 24.28 24.28 31 16 31C7.72 31 1 24.28 1 16C1 7.72 7.72 1 16 1"
                                                        stroke="#2675FF" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M31 7V1H25" stroke="#2675FF" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M23.5 8.5L31 1" stroke="#2675FF" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="category__content">
                                            <h4 class="category__title">
                                                <a href="course-v1.html">Finance</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="category__item text-center mb-45">
                                        <div class="category__icon purple-bg">
                                            <a href="course-v1.html">
                                                <svg width="27" height="29" viewBox="0 0 27 29" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M25.0833 14.175V8.14001C25.0833 2.43085 23.7517 1 18.3967 1H7.68667C2.33167 1 1 2.43085 1 8.14001V24.0916C1 27.86 3.06835 28.7525 5.57585 26.0608L5.58999 26.0467C6.75165 24.8142 8.52248 24.9133 9.52832 26.2591L10.9592 28.1717"
                                                        stroke="#E33CFF" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M7.375 8.08331H18.7083" stroke="#E33CFF" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.79175 13.75H17.2917" stroke="#E33CFF" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M21.8405 19.0912L16.8255 24.1063C16.6272 24.3046 16.443 24.6729 16.4005 24.9421L16.1313 26.8546C16.0322 27.5488 16.5139 28.0304 17.208 27.9313L19.1205 27.6621C19.3897 27.6196 19.7722 27.4354 19.9564 27.2371L24.9714 22.2221C25.8355 21.3579 26.2464 20.3521 24.9714 19.0771C23.7105 17.8163 22.7047 18.2271 21.8405 19.0912Z"
                                                        stroke="#E33CFF" stroke-width="1.5" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M21.1155 19.8137C21.5405 21.3437 22.7305 22.5337 24.2605 22.9587"
                                                        stroke="#E33CFF" stroke-width="1.5" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="category__content">
                                            <h4 class="category__title">
                                                <a href="course-v1.html">Content Writing</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="category__item text-center mb-45">
                                        <div class="category__icon green-bg-2">
                                            <a href="course-v1.html">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.25 18.75V10" stroke="#20AD96" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M6.5625 27.5C8.80616 27.5 10.625 25.6812 10.625 23.4375C10.625 21.1938 8.80616 19.375 6.5625 19.375C4.31884 19.375 2.5 21.1938 2.5 23.4375C2.5 25.6812 4.31884 27.5 6.5625 27.5Z"
                                                        stroke="#20AD96" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M6.25 10C8.32107 10 10 8.32107 10 6.25C10 4.17893 8.32107 2.5 6.25 2.5C4.17893 2.5 2.5 4.17893 2.5 6.25C2.5 8.32107 4.17893 10 6.25 10Z"
                                                        stroke="#20AD96" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M23.75 10C25.8211 10 27.5 8.32107 27.5 6.25C27.5 4.17893 25.8211 2.5 23.75 2.5C21.6789 2.5 20 4.17893 20 6.25C20 8.32107 21.6789 10 23.75 10Z"
                                                        stroke="#20AD96" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M6.41248 18.75C6.97498 16.5625 8.97497 14.9375 11.3375 14.95L15.625 14.9625C18.9 14.975 21.6875 12.875 22.7125 9.94995"
                                                        stroke="#20AD96" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="category__content">
                                            <h4 class="category__title">
                                                <a href="course-v1.html">Data Science</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="category__item text-center mb-45">
                                        <div class="category__icon yellow-bg">
                                            <a href="course-v1.html">
                                                <svg width="34" height="30" viewBox="0 0 34 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.6258 21.5381C13.5005 21.5379 13.3793 21.4933 13.2839 21.412L9.86503 18.5011C9.80677 18.4515 9.75999 18.3898 9.7279 18.3204C9.69582 18.2509 9.6792 18.1753 9.6792 18.0988C9.6792 18.0223 9.69582 17.9467 9.7279 17.8773C9.75999 17.8078 9.80677 17.7462 9.86503 17.6966L13.2839 14.7856C13.391 14.6986 13.528 14.6569 13.6655 14.6695C13.8029 14.6822 13.93 14.7481 14.0195 14.8533C14.1089 14.9584 14.1537 15.0944 14.1441 15.2321C14.1346 15.3698 14.0715 15.4983 13.9684 15.5902L11.025 18.0988L13.9684 20.6075C14.0507 20.6776 14.1096 20.7712 14.137 20.8758C14.1644 20.9804 14.1591 21.0909 14.1217 21.1923C14.0844 21.2938 14.0168 21.3813 13.9281 21.4431C13.8394 21.505 13.7339 21.5381 13.6258 21.5381Z"
                                                        fill="#FFA428" stroke="#F5B455" stroke-width="0.5" />
                                                    <path
                                                        d="M20.3744 21.5381C20.2663 21.5381 20.1608 21.505 20.0721 21.4431C19.9834 21.3813 19.9158 21.2938 19.8785 21.1923C19.8411 21.0909 19.8358 20.9804 19.8632 20.8758C19.8906 20.7712 19.9495 20.6776 20.0318 20.6075L22.9752 18.0988L20.0318 15.5902C19.9287 15.4983 19.8656 15.3698 19.8561 15.2321C19.8465 15.0944 19.8913 14.9584 19.9807 14.8533C20.0702 14.7481 20.1973 14.6822 20.3347 14.6695C20.4722 14.6569 20.6092 14.6986 20.7163 14.7856L24.1352 17.6966C24.1934 17.7462 24.2402 17.8078 24.2723 17.8773C24.3044 17.9467 24.321 18.0223 24.321 18.0988C24.321 18.1753 24.3044 18.2509 24.2723 18.3204C24.2402 18.3898 24.1934 18.4515 24.1352 18.5011L20.7163 21.412C20.6209 21.4933 20.4997 21.5379 20.3744 21.5381Z"
                                                        fill="#FFA428" stroke="#F5B455" stroke-width="0.5" />
                                                    <path
                                                        d="M15.7925 23.7215C15.7557 23.7214 15.719 23.7176 15.683 23.7102C15.5461 23.6812 15.4262 23.599 15.3498 23.4817C15.2734 23.3644 15.2467 23.2215 15.2755 23.0845L17.4061 12.9713C17.435 12.8342 17.5172 12.7142 17.6346 12.6377C17.752 12.5612 17.895 12.5345 18.0321 12.5634C18.1692 12.5923 18.2892 12.6745 18.3657 12.7919C18.4422 12.9093 18.4689 13.0523 18.44 13.1894L16.3087 23.3026C16.2836 23.421 16.2187 23.5272 16.1247 23.6034C16.0308 23.6797 15.9135 23.7214 15.7925 23.7215Z"
                                                        fill="#FFA428" stroke="#F5B455" stroke-width="0.5" />
                                                    <path
                                                        d="M29.4528 29.2332H4.54717C3.60677 29.232 2.70523 28.8579 2.04027 28.1929C1.3753 27.528 1.0012 26.6264 1 25.686V4.54717C1.0012 3.60677 1.3753 2.70523 2.04027 2.04027C2.70523 1.3753 3.60677 1.0012 4.54717 1H29.4528C30.3932 1.0012 31.2948 1.3753 31.9597 2.04027C32.6247 2.70523 32.9988 3.60677 33 4.54717V25.686C32.9988 26.6264 32.6247 27.528 31.9597 28.1929C31.2948 28.8579 30.3932 29.232 29.4528 29.2332ZM4.54717 2.0566C3.88663 2.0566 3.25315 2.319 2.78607 2.78607C2.319 3.25315 2.0566 3.88663 2.0566 4.54717V25.686C2.0566 26.3466 2.319 26.9801 2.78607 27.4471C3.25315 27.9142 3.88663 28.1766 4.54717 28.1766H29.4528C30.1134 28.1766 30.7469 27.9142 31.2139 27.4471C31.681 26.9801 31.9434 26.3466 31.9434 25.686V4.54717C31.9434 3.88663 31.681 3.25315 31.2139 2.78607C30.7469 2.319 30.1134 2.0566 29.4528 2.0566H4.54717Z"
                                                        fill="#FFA428" stroke="#F5B455" stroke-width="0.5" />
                                                    <path
                                                        d="M32.4717 9.45962H1.5283C1.38819 9.45962 1.25381 9.40396 1.15474 9.30488C1.05566 9.20581 1 9.07143 1 8.93132C1 8.7912 1.05566 8.65683 1.15474 8.55775C1.25381 8.45868 1.38819 8.40302 1.5283 8.40302H32.4717C32.6118 8.40302 32.7462 8.45868 32.8453 8.55775C32.9443 8.65683 33 8.7912 33 8.93132C33 9.07143 32.9443 9.20581 32.8453 9.30488C32.7462 9.40396 32.6118 9.45962 32.4717 9.45962Z"
                                                        fill="#FEA425" stroke="#F5B455" stroke-width="0.5" />
                                                    <path
                                                        d="M10.0264 6.93135C9.6958 6.93135 9.3726 6.83331 9.09769 6.64962C8.82278 6.46593 8.60851 6.20484 8.48199 5.89938C8.35546 5.59392 8.32236 5.2578 8.38686 4.93352C8.45136 4.60924 8.61058 4.31137 8.84437 4.07758C9.07816 3.84379 9.37603 3.68458 9.7003 3.62007C10.0246 3.55557 10.3607 3.58868 10.6662 3.7152C10.9716 3.84173 11.2327 4.056 11.4164 4.3309C11.6001 4.60581 11.6981 4.92902 11.6981 5.25965C11.6975 5.70283 11.5212 6.12768 11.2078 6.44106C10.8945 6.75443 10.4696 6.93075 10.0264 6.93135ZM10.0264 4.64456C9.90478 4.64456 9.78586 4.68063 9.68471 4.74822C9.58356 4.81581 9.50472 4.91187 9.45816 5.02426C9.41161 5.13666 9.39943 5.26033 9.42316 5.37965C9.44689 5.49897 9.50548 5.60857 9.5915 5.69459C9.67752 5.78061 9.78712 5.83919 9.90644 5.86293C10.0258 5.88666 10.1494 5.87448 10.2618 5.82792C10.3742 5.78137 10.4703 5.70253 10.5379 5.60138C10.6055 5.50023 10.6415 5.3813 10.6415 5.25965C10.6413 5.09658 10.5765 4.94024 10.4612 4.82493C10.3458 4.70962 10.1895 4.64476 10.0264 4.64456Z"
                                                        fill="#FFAD2D" />
                                                    <path
                                                        d="M4.88976 6.91546C4.55892 6.91561 4.23546 6.81763 3.96031 6.63392C3.68516 6.4502 3.47068 6.18901 3.34401 5.88338C3.21733 5.57775 3.18414 5.24141 3.24865 4.91692C3.31316 4.59242 3.47246 4.29435 3.7064 4.06041C3.94035 3.82647 4.23842 3.66716 4.56291 3.60266C4.88741 3.53815 5.22374 3.57133 5.52937 3.69801C5.83501 3.82469 6.0962 4.03917 6.27991 4.31432C6.46363 4.58946 6.56161 4.91292 6.56146 5.24377C6.56106 5.687 6.38481 6.11197 6.07139 6.42539C5.75797 6.73881 5.333 6.91506 4.88976 6.91546ZM4.88976 4.62792C4.76793 4.62777 4.64878 4.66376 4.54741 4.73134C4.44603 4.79892 4.36698 4.89505 4.32025 5.00757C4.27352 5.12008 4.26122 5.24393 4.2849 5.36345C4.30858 5.48296 4.36717 5.59276 4.45327 5.67897C4.53937 5.76517 4.6491 5.8239 4.76858 5.84772C4.88807 5.87155 5.01193 5.8594 5.12451 5.81281C5.23708 5.76622 5.33331 5.68728 5.40101 5.58599C5.46872 5.4847 5.50486 5.3656 5.50486 5.24377C5.50466 5.08062 5.43981 4.92421 5.32452 4.80878C5.20924 4.69335 5.0529 4.62831 4.88976 4.62792Z"
                                                        fill="#FFAD2D" />
                                                    <path
                                                        d="M15.1631 6.94716C14.8325 6.94701 14.5094 6.84884 14.2346 6.66506C13.9598 6.48128 13.7456 6.22014 13.6192 5.91467C13.4928 5.60919 13.4598 5.27309 13.5244 4.94886C13.589 4.62464 13.7483 4.32684 13.9821 4.09312C14.2159 3.85941 14.5138 3.70027 14.838 3.63583C15.1623 3.57138 15.4984 3.60453 15.8038 3.73108C16.1092 3.85763 16.3702 4.0719 16.5539 4.34679C16.7376 4.62168 16.8356 4.94486 16.8356 5.27546C16.8354 5.71889 16.6591 6.14409 16.3455 6.45757C16.0318 6.77106 15.6066 6.94716 15.1631 6.94716ZM15.1631 4.66036C15.0415 4.66051 14.9227 4.69671 14.8216 4.76439C14.7206 4.83207 14.6418 4.92819 14.5954 5.04059C14.549 5.153 14.5369 5.27665 14.5607 5.39592C14.5845 5.51519 14.6432 5.62471 14.7292 5.71066C14.8153 5.79661 14.9249 5.85512 15.0442 5.87879C15.1635 5.90246 15.2871 5.89024 15.3994 5.84366C15.5118 5.79708 15.6078 5.71824 15.6754 5.61711C15.7429 5.51597 15.779 5.39708 15.779 5.27546C15.7788 5.11226 15.7138 4.95581 15.5983 4.84048C15.4829 4.72514 15.3263 4.66036 15.1631 4.66036Z"
                                                        fill="#FFAD2D" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="category__content">
                                            <h4 class="category__title">
                                                <a href="course-v1.html">Devolopment</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="category__item text-center mb-45">
                                        <div class="category__icon violet-bg">
                                            <a href="course-v1.html">
                                                <svg width="34" height="30" id="_x31_" enable-background="new 0 0 24 24"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="m18.5 20c-.061 0-.121-.011-.18-.033l-13-5c-.193-.074-.32-.26-.32-.467v-6c0-.207.127-.393.32-.467l13-5c.155-.06.326-.038.463.055.136.093.217.247.217.412v16c0 .165-.081.319-.217.412-.085.058-.183.088-.283.088zm-12.5-5.844 12 4.616v-14.544l-12 4.616z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="m5.5 15h-3.5c-1.103 0-2-.897-2-2v-3c0-1.103.897-2 2-2h3.5c.276 0 .5.224.5.5v6c0 .276-.224.5-.5.5zm-3.5-6c-.552 0-1 .448-1 1v3c0 .552.448 1 1 1h3v-5z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="m7.5 22h-3c-.249 0-.46-.183-.495-.43l-1-7c-.039-.273.151-.526.425-.565.268-.034.526.151.565.425l.939 6.57h2.006l-.668-5.954c-.03-.274.167-.521.441-.553.265-.029.521.167.553.441l.73 6.51c.016.142-.029.283-.124.389-.094.106-.229.167-.372.167z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="m20.5 9c-.161 0-.319-.078-.416-.223-.153-.229-.091-.54.139-.693l3-2c.228-.152.539-.092.693.139.153.229.091.54-.139.693l-3 2c-.085.057-.181.084-.277.084z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="m23.5 18c-.096 0-.192-.027-.277-.084l-3-2c-.229-.153-.292-.464-.139-.693.154-.23.466-.291.693-.139l3 2c.229.153.292.464.139.693-.097.145-.255.223-.416.223z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="m23.5 12.5h-3c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h3c.276 0 .5.224.5.5s-.224.5-.5.5z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="category__content">
                                            <h4 class="category__title">
                                                <a href="course-v1.html">Marketing</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="category__item text-center mb-45">
                                        <div class="category__icon add">
                                            <a href="course-v1.html">+</a>
                                        </div>
                                        <div class="category__content">
                                            <h4 class="category__title add">
                                                <a href="course-v1.html">Add</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- category area end -->

        <!-- course area start -->
        <section class="course__area grey-bg-4 pt-110 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper-2 text-center mb-40">
                            <span class="section__title-pre-2">Categories</span>
                            <h3 class="section__title-2">Most Popular Courses</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="course__filter text-center mb-30">
                            <nav>
                                <div class="nav nav-tabs justify-content-center" id="course-tab" role="tablist">
                                    <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all"
                                        aria-selected="true">All Category</button>

                                    <button class="nav-link" id="nav-trending-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-trending" type="button" role="tab"
                                        aria-controls="nav-trending" aria-selected="false">Trending</button>

                                    <button class="nav-link" id="nav-popular-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-popular" type="button" role="tab"
                                        aria-controls="nav-popular" aria-selected="false">Popularity</button>

                                    <button class="nav-link" id="nav-featured-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-featured" type="button" role="tab"
                                        aria-controls="nav-featured" aria-selected="false">Featured</button>

                                    <button class="nav-link" id="nav-design-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-design" type="button" role="tab" aria-controls="nav-design"
                                        aria-selected="false">Design Architect</button>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="tab-content course__tab-content" id="course-tabContent">
                            <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                                aria-labelledby="nav-all-tab">
                                <div class="course__tab-wrapper">
                                    <div class="row">
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                                <div class="course__thumb-2 w-img fix">
                                                    <a href="course-details.html">
                                                        <img src="{{ asset('assets/img/course/2/course-1.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="course__content-2">
                                                    <div
                                                        class="course__top-2 d-flex align-items-center justify-content-between">
                                                        <div class="course__tag-2">
                                                            <a href="#">Design Thinking</a>
                                                        </div>
                                                        <div class="course__price-2">
                                                            <span>$136</span>
                                                        </div>
                                                    </div>
                                                    <h3 class="course__title-2">
                                                        <a href="course-details.html">Mechanical Engineering and
                                                            Electrical Engineering Explained.</a>
                                                    </h3>
                                                    <div
                                                        class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                        <div class="course__action">
                                                            <ul>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="10" height="12"
                                                                                    viewBox="0 0 10 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>4.2k</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="14" height="12"
                                                                                    viewBox="0 0 14 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>44k</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="12" height="12"
                                                                                    viewBox="0 0 12 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>5.0</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="course__tutor-2">
                                                            <a href="#">
                                                                <img src="{{ asset('assets/img/course/tutor/course-tutor-1.jpg') }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                                <div class="course__thumb-2 w-img fix">
                                                    <a href="course-details.html">
                                                        <img src="{{ asset('assets/img/course/2/course-2.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="course__content-2">
                                                    <div
                                                        class="course__top-2 d-flex align-items-center justify-content-between">
                                                        <div class="course__tag-2 pink-bg">
                                                            <a href="#">Mechanical</a>
                                                        </div>
                                                        <div class="course__price-2">
                                                            <span>$210</span>
                                                        </div>
                                                    </div>
                                                    <h3 class="course__title-2">
                                                        <a href="course-details.html">The Challenge Of Global Learning
                                                            In Public Education.</a>
                                                    </h3>
                                                    <div
                                                        class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                        <div class="course__action">
                                                            <ul>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="10" height="12"
                                                                                    viewBox="0 0 10 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>3.3k</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="14" height="12"
                                                                                    viewBox="0 0 14 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>56k</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="12" height="12"
                                                                                    viewBox="0 0 12 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>4.5</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="course__tutor-2">
                                                            <a href="#">
                                                                <img src="{{ asset('assets/img/course/tutor/course-tutor-2.jpg') }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                                <div class="course__thumb-2 w-img fix">
                                                    <a href="course-details.html">
                                                        <img src="{{ asset('assets/img/course/2/course-3.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="course__content-2">
                                                    <div
                                                        class="course__top-2 d-flex align-items-center justify-content-between">
                                                        <div class="course__tag-2 violet-bg">
                                                            <a href="#">Design Thinking</a>
                                                        </div>
                                                        <div class="course__price-2">
                                                            <span>$136</span>
                                                        </div>
                                                    </div>
                                                    <h3 class="course__title-2">
                                                        <a href="course-details.html">Mechanical Engineering and
                                                            Electrical Engineering Explained.</a>
                                                    </h3>
                                                    <div
                                                        class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                        <div class="course__action">
                                                            <ul>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="10" height="12"
                                                                                    viewBox="0 0 10 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>3.7k</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="14" height="12"
                                                                                    viewBox="0 0 14 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>36k</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="12" height="12"
                                                                                    viewBox="0 0 12 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>2.5</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="course__tutor-2">
                                                            <a href="#">
                                                                <img src="{{ asset('assets/img/course/tutor/course-tutor-3.jpg') }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                                <div class="course__thumb-2 w-img fix">
                                                    <a href="course-details.html">
                                                        <img src="{{ asset('assets/img/course/2/course-4.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="course__content-2">
                                                    <div
                                                        class="course__top-2 d-flex align-items-center justify-content-between">
                                                        <div class="course__tag-2 yellow-bg">
                                                            <a href="#">Photography</a>
                                                        </div>
                                                        <div class="course__price-2">
                                                            <span>$136</span>
                                                        </div>
                                                    </div>
                                                    <h3 class="course__title-2">
                                                        <a href="course-details.html">Statistics Data Scince and
                                                            Business Analysis.</a>
                                                    </h3>
                                                    <div
                                                        class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                        <div class="course__action">
                                                            <ul>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="10" height="12"
                                                                                    viewBox="0 0 10 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>2.3k</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="14" height="12"
                                                                                    viewBox="0 0 14 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>66k</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="12" height="12"
                                                                                    viewBox="0 0 12 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>3.5</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="course__tutor-2">
                                                            <a href="#">
                                                                <img src="{{ asset('assets/img/course/tutor/course-tutor-4.jpg') }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                                <div class="course__thumb-2 w-img fix">
                                                    <a href="course-details.html">
                                                        <img src="{{ asset('assets/img/course/2/course-5.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="course__content-2">
                                                    <div
                                                        class="course__top-2 d-flex align-items-center justify-content-between">
                                                        <div class="course__tag-2 blue-bg-2">
                                                            <a href="#">Python</a>
                                                        </div>
                                                        <div class="course__price-2">
                                                            <span>$136</span>
                                                        </div>
                                                    </div>
                                                    <h3 class="course__title-2">
                                                        <a href="course-details.html">Machine Learning A-Z: Hands-On
                                                            Python and java.</a>
                                                    </h3>
                                                    <div
                                                        class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                        <div class="course__action">
                                                            <ul>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="10" height="12"
                                                                                    viewBox="0 0 10 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>1.2k</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="14" height="12"
                                                                                    viewBox="0 0 14 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>32k</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="12" height="12"
                                                                                    viewBox="0 0 12 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>4.7</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="course__tutor-2">
                                                            <a href="#">
                                                                <img src="{{ asset('assets/img/course/tutor/course-tutor-5.jpg') }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                                <div class="course__thumb-2 w-img fix">
                                                    <a href="course-details.html">
                                                        <img src="{{ asset('assets/img/course/2/course-6.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="course__content-2">
                                                    <div
                                                        class="course__top-2 d-flex align-items-center justify-content-between">
                                                        <div class="course__tag-2 purple-bg">
                                                            <a href="#">Design Thinking</a>
                                                        </div>
                                                        <div class="course__price-2">
                                                            <span>$136</span>
                                                        </div>
                                                    </div>
                                                    <h3 class="course__title-2">
                                                        <a href="course-details.html">The most complete Design Thinking
                                                            Course on the Market..</a>
                                                    </h3>
                                                    <div
                                                        class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                        <div class="course__action">
                                                            <ul>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="10" height="12"
                                                                                    viewBox="0 0 10 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>3.0k</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="14" height="12"
                                                                                    viewBox="0 0 14 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>26k</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div
                                                                        class="course__action-item d-flex align-items-center">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <svg width="12" height="12"
                                                                                    viewBox="0 0 12 12" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                        stroke="#5F6160"
                                                                                        stroke-width="1.3"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="course__action-content">
                                                                            <span>4.1</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="course__tutor-2">
                                                            <a href="#">
                                                                <img src="{{ asset('assets/img/course/tutor/course-tutor-6.jpg') }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-trending" role="tabpanel"
                                aria-labelledby="nav-trending-tab">
                                <div class="row">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-4.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 yellow-bg">
                                                        <a href="#">Photography</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">Statistics Data Scince and Business
                                                        Analysis.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>2.3k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>66k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>3.5</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-4.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-5.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 blue-bg-2">
                                                        <a href="#">Python</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">Machine Learning A-Z: Hands-On Python
                                                        and java.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>1.2k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>32k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>4.7</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-5.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-6.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 purple-bg">
                                                        <a href="#">Design Thinking</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">The most complete Design Thinking
                                                        Course on the Market..</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>3.0k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>26k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>4.1</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-6.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-1.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2">
                                                        <a href="#">Design Thinking</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">Mechanical Engineering and Electrical
                                                        Engineering Explained.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>4.2k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>44k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>5.0</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-1.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-2.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 pink-bg">
                                                        <a href="#">Mechanical</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$210</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">The Challenge Of Global Learning In
                                                        Public Education.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>3.3k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>56k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>4.5</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-2.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-3.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 violet-bg">
                                                        <a href="#">Design Thinking</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">Mechanical Engineering and Electrical
                                                        Engineering Explained.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>3.7k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>36k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>2.5</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-3.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-popular" role="tabpanel"
                                aria-labelledby="nav-popular-tab">
                                <div class="row">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-3.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 violet-bg">
                                                        <a href="#">Design Thinking</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">Mechanical Engineering and Electrical
                                                        Engineering Explained.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>3.7k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>36k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>2.5</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-3.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-4.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 yellow-bg">
                                                        <a href="#">Photography</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">Statistics Data Scince and Business
                                                        Analysis.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>2.3k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>66k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>3.5</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-4.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-5.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 blue-bg-2">
                                                        <a href="#">Python</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">Machine Learning A-Z: Hands-On Python
                                                        and java.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>1.2k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>32k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>4.7</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-5.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-1.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2">
                                                        <a href="#">Design Thinking</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">Mechanical Engineering and Electrical
                                                        Engineering Explained.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>4.2k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>44k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>5.0</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-1.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-2.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 pink-bg">
                                                        <a href="#">Mechanical</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$210</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">The Challenge Of Global Learning In
                                                        Public Education.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>3.3k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>56k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>4.5</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-2.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-6.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 purple-bg">
                                                        <a href="#">Design Thinking</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">The most complete Design Thinking
                                                        Course on the Market..</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>3.0k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>26k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>4.1</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-6.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-featured" role="tabpanel"
                                aria-labelledby="nav-featured-tab">
                                <div class="row">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-2.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 pink-bg">
                                                        <a href="#">Mechanical</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$210</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">The Challenge Of Global Learning In
                                                        Public Education.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>3.3k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>56k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>4.5</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-2.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-3.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 violet-bg">
                                                        <a href="#">Design Thinking</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">Mechanical Engineering and Electrical
                                                        Engineering Explained.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>3.7k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>36k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>2.5</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-3.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-4.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 yellow-bg">
                                                        <a href="#">Photography</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">Statistics Data Scince and Business
                                                        Analysis.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>2.3k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>66k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>3.5</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-4.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-1.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2">
                                                        <a href="#">Design Thinking</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">Mechanical Engineering and Electrical
                                                        Engineering Explained.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>4.2k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>44k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>5.0</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-1.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-5.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 blue-bg-2">
                                                        <a href="#">Python</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">Machine Learning A-Z: Hands-On Python
                                                        and java.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>1.2k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>32k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>4.7</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-5.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-6.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 purple-bg">
                                                        <a href="#">Design Thinking</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">The most complete Design Thinking
                                                        Course on the Market..</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>3.0k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>26k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>4.1</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-6.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-design" role="tabpanel" aria-labelledby="nav-design-tab">
                                <div class="row">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-1.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2">
                                                        <a href="#">Design Thinking</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">Mechanical Engineering and Electrical
                                                        Engineering Explained.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>4.2k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>44k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>5.0</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-1.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-3.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 violet-bg">
                                                        <a href="#">Design Thinking</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">Mechanical Engineering and Electrical
                                                        Engineering Explained.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>3.7k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>36k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>2.5</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-3.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-4.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 yellow-bg">
                                                        <a href="#">Photography</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">Statistics Data Scince and Business
                                                        Analysis.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>2.3k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>66k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>3.5</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-4.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-2.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 pink-bg">
                                                        <a href="#">Mechanical</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$210</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">The Challenge Of Global Learning In
                                                        Public Education.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>3.3k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>56k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>4.5</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-2.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-5.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 blue-bg-2">
                                                        <a href="#">Python</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">Machine Learning A-Z: Hands-On Python
                                                        and java.</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>1.2k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>32k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>4.7</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-5.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                            <div class="course__thumb-2 w-img fix">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('assets/img/course/2/course-6.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="course__content-2">
                                                <div
                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__tag-2 purple-bg">
                                                        <a href="#">Design Thinking</a>
                                                    </div>
                                                    <div class="course__price-2">
                                                        <span>$136</span>
                                                    </div>
                                                </div>
                                                <h3 class="course__title-2">
                                                    <a href="course-details.html">The most complete Design Thinking
                                                        Course on the Market..</a>
                                                </h3>
                                                <div
                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                    <div class="course__action">
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="10" height="12"
                                                                                viewBox="0 0 10 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                    stroke="#5F6160" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>3.0k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="14" height="12"
                                                                                viewBox="0 0 14 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>26k</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="course__action-item d-flex align-items-center">
                                                                    <div class="course__action-icon mr-5">
                                                                        <span>
                                                                            <svg width="12" height="12"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                    stroke="#5F6160" stroke-width="1.3"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="course__action-content">
                                                                        <span>4.1</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="course__tutor-2">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/course/tutor/course-tutor-6.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course area end -->

        <!-- research area start -->
        <section class="research__area pt-115 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="research__wrapper-2">
                            <div class="section__title-wrapper-2">
                                <span class="section__title-pre-2">Discover Research</span>
                                <h3 class="section__title-2">More then just learning</h3>
                            </div>
                            <p>Learn from anywhere in the world on desktop, or mobile phone with an Internet connection.
                            </p>
                            <div class="research__btn-2 mb-70">
                                <a href="contact.html" class="tp-btn-5 tp-btn-6">Get started now</a>
                            </div>

                            <div class="research__download">
                                <div class="research__download-bg include-bg"
                                    data-background="{{ asset('assets/img/research/2/research-bg.jpg') }}"></div>
                                <div class="research__content-2 p-relative z-index-1">
                                    <h3 class="research__title-2">Start Learning by Downloading Apps</h3>
                                    <div class="research__store">
                                        <ul>
                                            <li>
                                                <a href="#"><img
                                                        src="{{ asset('assets/img/icon/google-play-store.png') }}"
                                                        alt="google-play-store"> Google play</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{ asset('assets/img/icon/apple-store.png') }}"
                                                        alt="apple-store">Apple store</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="research__thumb-2">
                                    <img src="{{ asset('assets/img/research/2/research-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-1 col-lg-6">
                        <div class="research__features-wrapper pt-35">
                            <div class="research__features-item d-sm-flex align-items-start mb-40">
                                <div class="research__features-icon mr-25">
                                    <span>
                                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M26 13.9961V15.1656C26 19.8436 24.8875 21 20.45 21H6.55C2.1125 21 1 19.8305 1 15.1656V6.83443C1 2.16951 2.1125 1 6.55 1H8.5"
                                                stroke="#6151FB" stroke-width="1.6" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M13.5 21.5V25.5" stroke="#6151FB" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1 14.75H26" stroke="#6151FB" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.875 26H19.125" stroke="#6151FB" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M20.825 10.2127H14.875C13.15 10.2127 12.575 9.0627 12.575 7.9127V3.5127C12.575 2.1377 13.7 1.0127 15.075 1.0127H20.825C22.1 1.0127 23.125 2.0377 23.125 3.31269V7.9127C23.125 9.1877 22.1 10.2127 20.825 10.2127Z"
                                                stroke="#6151FB" stroke-width="1.6" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M24.6375 8.39985L23.125 7.33735V3.88735L24.6375 2.82485C25.3875 2.31235 26 2.62485 26 3.53735V7.69985C26 8.61235 25.3875 8.92485 24.6375 8.39985Z"
                                                stroke="#6151FB" stroke-width="1.6" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="research__features-content">
                                    <h4>Educal Online <br> Training from Experts </h4>
                                    <p>Learn from anywhere in the world on desktop mobile Phone with an Internet
                                        connection.</p>
                                </div>
                            </div>
                            <div class="research__features-item d-sm-flex align-items-start mb-40">
                                <div class="research__features-icon mr-25">
                                    <span class="yellow-bg">
                                        <svg width="28" height="27" viewBox="0 0 28 27" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4 19.746H6.47299C2.092 19.746 1 18.654 1 14.273V6.47299C1 2.092 2.092 1 6.47299 1H20.162C24.543 1 25.635 2.092 25.635 6.47299"
                                                stroke="#F4930E" stroke-width="1.7" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M11.3999 25.6218V19.7458" stroke="#F4930E" stroke-width="1.7"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1 14.5459H11.4" stroke="#F4930E" stroke-width="1.7"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.16211 25.6218H11.4001" stroke="#F4930E" stroke-width="1.7"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M26.9999 14.3509V21.7739C26.9999 24.8549 26.2329 25.6219 23.152 25.6219H18.537C15.456 25.6219 14.689 24.8549 14.689 21.7739V14.3509C14.689 11.2699 15.456 10.5029 18.537 10.5029H23.152C26.2329 10.5029 26.9999 11.2699 26.9999 14.3509Z"
                                                stroke="#F4930E" stroke-width="1.7" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M20.8179 21.4359H20.8296" stroke="#F4930E" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="research__features-content">
                                    <h4>Over 2.4k <br> Video Course (all coures)</h4>
                                    <p>Learn from anywhere in the world on desktop mobile Phone with an Internet
                                        connection.</p>
                                </div>
                            </div>
                            <div class="research__features-item d-sm-flex align-items-start">
                                <div class="research__features-icon mr-25">
                                    <span class="green-bg">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.6185 23.8234H7.24516C3.5585 23.8234 2.3335 21.3734 2.3335 18.9118V9.08842C2.3335 5.40176 3.5585 4.17676 7.24516 4.17676H14.6185C18.3052 4.17676 19.5302 5.40176 19.5302 9.08842V18.9118C19.5302 22.5984 18.2935 23.8234 14.6185 23.8234Z"
                                                stroke="#20AD96" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M22.7736 19.9502L19.5303 17.6752V10.3135L22.7736 8.03849C24.3603 6.93015 25.6669 7.60682 25.6669 9.55515V18.4452C25.6669 20.3935 24.3603 21.0702 22.7736 19.9502Z"
                                                stroke="#20AD96" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13.4165 12.8345C14.383 12.8345 15.1665 12.051 15.1665 11.0845C15.1665 10.118 14.383 9.33447 13.4165 9.33447C12.45 9.33447 11.6665 10.118 11.6665 11.0845C11.6665 12.051 12.45 12.8345 13.4165 12.8345Z"
                                                stroke="#20AD96" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="research__features-content">
                                    <h4>Occasional <br>Video updates (2022)</h4>
                                    <p>Learn from anywhere in the world on desktop mobile Phone with an Internet
                                        connection.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- research area end -->



        <!-- team area start -->
        <section class="team__area pt-115">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="section__title-wrapper-2 mb-40">
                            <span class="section__title-pre-2">Top Instructors</span>
                            <h3 class="section__title-2">Become A Instruction Instructor.</h3>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="team__wrapper mb-45 pl-70">
                            <p>Placerat veritatis ullamco rutrum quia illo, aenean eaque necessitatibus aptent vehicula
                                porta? Sollicitudin id, laboris commodi! </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                        <div class="team__item text-center mb-40">
                            <div class="team__thumb">
                                <div class="team__shape">
                                    <img src="{{ asset('assets/img/team/team-shape-1.png') }}" alt="">
                                </div>
                                <img src="{{ asset('assets/img/team/team-1.png') }}" alt="">
                                <div class="team__social transition-3">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                </div>
                            </div>
                            <div class="team__content">
                                <h3 class="team__title">
                                    <a href="team-details.html">Melissa Jones</a>
                                </h3>
                                <span class="team__designation">Professor</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                        <div class="team__item text-center mb-40">
                            <div class="team__thumb">
                                <div class="team__shape">
                                    <img src="{{ asset('assets/img/team/team-shape-2.png') }}" alt="">
                                </div>
                                <img src="{{ asset('assets/img/team/team-2.png') }}" alt="">
                                <div class="team__social transition-3">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                </div>
                            </div>
                            <div class="team__content">
                                <h3 class="team__title">
                                    <a href="team-details.html">Morgan Key</a>
                                </h3>
                                <span class="team__designation">Teacher MBA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                        <div class="team__item text-center mb-40">
                            <div class="team__thumb">
                                <div class="team__shape">
                                    <img src="{{ asset('assets/img/team/team-shape-3.png') }}" alt="">
                                </div>
                                <img src="{{ asset('assets/img/team/team-3.png') }}" alt="">
                                <div class="team__social transition-3">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                </div>
                            </div>
                            <div class="team__content">
                                <h3 class="team__title">
                                    <a href="team-details.html">Andra Flatcher </a>
                                </h3>
                                <span class="team__designation">Lead Teacher</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                        <div class="team__item text-center mb-40">
                            <div class="team__thumb">
                                <div class="team__shape">
                                    <img src="{{ asset('assets/img/team/team-shape-4.png') }}" alt="">
                                </div>
                                <img src="{{ asset('assets/img/team/team-4.png') }}" alt="">
                                <div class="team__social transition-3">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                </div>
                            </div>
                            <div class="team__content">
                                <h3 class="team__title">
                                    <a href="team-details.html">Oliver Porter</a>
                                </h3>
                                <span class="team__designation">Photogrepher</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team area end -->

        <!-- testimonial area start -->
        <section class="testimonial__area pt-80 pb-120 fix">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper-2 mb-40 text-center">
                            <span class="section__title-pre-2">Testimonials</span>
                            <h3 class="section__title-2">What our Customers Say.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="testimonial__slider">
                            <div class="testimonial__active owl-carousel">
                                <div class="testimonial__item transition-3 text-center white-bg">
                                    <div class="testimonial__avater">
                                        <img src="{{ asset('assets/img/testimonial/testimonial-1.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial__text">
                                        <h4>Great quality!</h4>
                                        <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Phasellus feugiat
                                            lacus vitae neque ornare.</p>
                                    </div>
                                    <div class="testimonial__avater-info mb-5">
                                        <h3>Dianne Ameter</h3>
                                        <span>UX Designer</span>
                                    </div>
                                    <div class="testimonial__rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="testimonial__item transition-3 text-center white-bg">
                                    <div class="testimonial__avater">
                                        <img src="{{ asset('assets/img/testimonial/testimonial-2.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial__text">
                                        <h4>Code Quality!</h4>
                                        <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Phasellus feugiat
                                            lacus vitae neque ornare.</p>
                                    </div>
                                    <div class="testimonial__avater-info mb-5">
                                        <h3>Douglas Lyphe</h3>
                                        <span>Devolopment</span>
                                    </div>
                                    <div class="testimonial__rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="testimonial__item transition-3 text-center white-bg">
                                    <div class="testimonial__avater">
                                        <img src="{{ asset('assets/img/testimonial/testimonial-3.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial__text">
                                        <h4>Customer Support</h4>
                                        <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Phasellus feugiat
                                            lacus vitae neque ornare.</p>
                                    </div>
                                    <div class="testimonial__avater-info mb-5">
                                        <h3>Russell Sprout</h3>
                                        <span>IT Specialist</span>
                                    </div>
                                    <div class="testimonial__rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="testimonial__item transition-3 text-center white-bg">
                                    <div class="testimonial__avater">
                                        <img src="{{ asset('assets/img/testimonial/testimonial-4.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial__text">
                                        <h4>Good Product</h4>
                                        <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Phasellus feugiat
                                            lacus vitae neque ornare.</p>
                                    </div>
                                    <div class="testimonial__avater-info mb-5">
                                        <h3>Shahnewaz Sakil</h3>
                                        <span>Developer</span>
                                    </div>
                                    <div class="testimonial__rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial area end -->

        <!-- brand area start -->
        <section class="brand__area pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="brand__wrapper">
                            <div class="section__title-wrapper-2">
                                <span class="section__title-pre-2">Testimonials</span>
                                <h3 class="section__title-2 section__title-2-30">Who will you learn with?</h3>
                            </div>
                            <p>You can list your partners or instructors's brands here to show off your site's
                                reputation</p>
                            <div class="brand__btn">
                                <a href="about.html" class="tp-btn-5 tp-btn-6">View all partners</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="brand__item-wrapper pl-100">
                            <div class="row align-items-center">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="brand__item text-center m-img mb-40">
                                        <img src="{{ asset('assets/img/brand/brand-1.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="brand__item text-center m-img mb-40">
                                        <img src="{{ asset('assets/img/brand/brand-2.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="brand__item text-center m-img mb-40">
                                        <img src="{{ asset('assets/img/brand/brand-3.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="brand__item text-center m-img mb-40">
                                        <img src="{{ asset('assets/img/brand/brand-4.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="brand__item text-center m-img mb-40">
                                        <img src="{{ asset('assets/img/brand/brand-5.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="brand__item text-center m-img mb-40">
                                        <img src="{{ asset('assets/img/brand/brand-6.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                    <div class="brand__item text-center m-img mb-40">
                                        <img src="{{ asset('assets/img/brand/brand-7.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand area end -->

    </main>

    <!-- footer area start -->
    <footer>
        <div class="footer__area">
            <div class="footer__top grey-bg-4 pt-95 pb-45">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                            <div class="footer__widget footer__widget-2 footer-col-2-1 mb-50">
                                <div class="footer__logo">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="{{ asset('assets/img/logo/logo-2.png') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__widget-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit. Nunc maximus, nulla
                                            utlaoki comm odo sagittis.</p>
                                        <div class="footer__social">
                                            <h4>Follow Us</h4>

                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="footer__widget footer__widget-2 mb-50 footer-col-2-2">
                                <h3 class="footer__widget-title">Explore</h3>
                                <div class="footer__widget-content">
                                    <ul>
                                        <li>
                                            <a href="#">About us</a>
                                        </li>
                                        <li>
                                            <a href="#">Success story</a>
                                        </li>
                                        <li>
                                            <a href="#">Courses</a>
                                        </li>
                                        <li>
                                            <a href="#">About us</a>
                                        </li>
                                        <li>
                                            <a href="#">Instructor</a>
                                        </li>
                                        <li>
                                            <a href="#">Events</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="footer__widget footer__widget-2 mb-50 footer-col-2-3">
                                <h3 class="footer__widget-title">Links</h3>
                                <div class="footer__widget-content">
                                    <ul>
                                        <li>
                                            <a href="#">News & Blogs</a>
                                        </li>
                                        <li>
                                            <a href="#">Library</a>
                                        </li>
                                        <li>
                                            <a href="#">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="#">Terms of service</a>
                                        </li>
                                        <li>
                                            <a href="#">Membership</a>
                                        </li>
                                        <li>
                                            <a href="#">Career</a>
                                        </li>
                                        <li>
                                            <a href="#">Partners</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                            <div class="footer__widget footer__widget-2 footer-col-2-4 mb-50">
                                <h3 class="footer__widget-title">Sign up for our newsletter</h3>
                                <div class="footer__subscribe">
                                    <p>Receive weekly newsletter with educational materials, popular books and much
                                        more!</p>
                                    <form action="#">
                                        <div class="footer__subscribe-input">
                                            <input type="text" placeholder="Email">
                                            <button type="submit" class="tp-btn-subscribe">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom grey-bg-4">
                <div class="container">
                    <div class="footer__bottom-inner">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="footer__copyright text-center">
                                    <p>© 2022 Educal. All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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