@extends('layouts.app')

@section('content')
    <div class="pbmit-slider-area pbmit-slider-three">
        <div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="true" data-arrows="false" data-columns="1"
            data-margin="0" data-effect="fade">
            <div class="swiper-wrapper">
                <!-- Slide1 -->
                <div class="swiper-slide">
                    <div class="pbmit-slider-item">
                        <div class="pbmit-slider-bg"
                            style="background-image: url({{ asset('xpm/images/home/slider1.jpg') }});">
                        </div>
                        {{-- <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-lg-6"></div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="pbmit-slider-content">
                                        <h5 class="pbmit-sub-title transform-left transform-delay-1">Beauty Art
                                        </h5>
                                        <h2 class="pbmit-title transform-left transform-delay-2"><strong>Make
                                                Time</strong> <br> for your Skin</h2>
                                        <div class="pbmit-button transform-bottom transform-delay-3"><a class="pbmit-btn pbmit-btn-white" href="../html-demo/contact-us.html"><span class="pbmit-button-content-wrapper"><span class="pbmit-button-text">Contact Us</span>
                                                    <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="10" height="19" viewBox="0 0 19 19"
                                                        xml:space="preserve">
                                                        <line x1="1" y1="18" x2="17.8" y2="1.2">
                                                        </line>
                                                        <line x1="1.2" y1="1" x2="18" y2="1">
                                                        </line>
                                                        <line x1="18" y1="17.8" x2="18" y2="1">
                                                        </line>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="slide-bg-img"></div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content pbmit-bg-color-light">
        <!-- Ihbox Start -->
        <section>
            <div class="container">
                <div class="ihbox-three-bg pbmit-bg-color-secondary">
                    <div class="row align-items-center g-0">
                        <div class="col-md-12 col-xl-4">
                            <div class="pbmit-ihbox-style-9">
                                <div class="pbmit-ihbox-box d-flex align-items-center">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-spaville-icon pbmit-spaville-icon-pbm-working-time"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <h2 class="pbmit-element-title">Our Opening Hours</h2>
                                        <div class="pbmit-heading-desc"><span class="pbmit-day">Mon to Fri :</span><span class="pbmit-time"> 12:00 pm - 19:00 pm</span><br><span class="pbmit-day">Sat to Sun :</span><span class="pbmit-time">8:00 am to 3:30 pm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-4">
                            <div class="ihbox-three-center-img"><img src="{{ asset('xpm/images/home/lotus-flower.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-4">
                            <div class="pbmit-ihbox-style-5">
                                <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                    <div class="pbmit-ihbox-contents">
                                        <h2 class="pbmit-element-title">Click to check out recent <br>work
                                            with our clients</h2>
                                    </div><a class="pbmin-lightbox-video" target="_blank"
                                        href="https://instagram.com/beautybyvickky_lounge/">
                                        <div class="pbmit-feature-wrapper-img">
                                            <div class="pbmit-ihbox-wrapper">
                                                <div class="pbmit-ihbox-icon-type-image"><img src="{{ asset('xpm/images/bg/beauty_by_vickky.jpg') }}"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                <i class="fa fa-play"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ihbox end -->
        <!-- About Us Start -->
        <section class="about-section-three">
            {{-- <div class="container">
                <div class="row g-0">
                    <div class="col-md-12 col-xl-6">
                        <div class="about-three-leftbox">
                            <div class="pbmit-heading-subheading animation-style2">
                                <h4 class="pbmit-subtitle">About Us</h4>
                                <h2 class="pbmit-title">We're Experienced MakeUp & Hair Experts</h2>
                                <div class="pbmit-heading-desc">
                                    We offer a variety of beauty services, including PMU Brows, Makeup, Lashes, Fineline
                                    Tatoo, Frontal installation and styling, sales of quality hairs, and more. Our team of
                                    experienced beauty professionals is dedicated to providing you with the best possible
                                    service and ensuring that you leave our salon feeling your best.
                                </div>
                            </div>
                            <div class="row"><article class="pbmit-miconheading-style-1 col-md-12">
                                    <div class="pbmit-ihbox-style-1">
                                        <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">
                                                    01.</div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title"> Highly Trained Staff
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </article><article class="pbmit-miconheading-style-1 col-md-12">
                                    <div class="pbmit-ihbox-style-1">
                                        <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">
                                                    02.</div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title"> Over 12 years in business</h2>
                                            </div>
                                        </div>
                                    </div>
                                </article><article class="pbmit-miconheading-style-1 col-md-12">
                                    <div class="pbmit-ihbox-style-1">
                                        <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">
                                                    03.</div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title"> Over 4 years in PMU Brows</h2>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="pbmit-btn-shape-rounded"><a class="pbmit-btn" href="#"><span class="pbmit-button-content-wrapper"><span class="pbmit-button-text">Read More</span>
                                        <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10"
                                            height="19" viewBox="0 0 19 19" xml:space="preserve">
                                            <line x1="1" y1="18" x2="17.8" y2="1.2">
                                            </line>
                                            <line x1="1.2" y1="1" x2="18" y2="1">
                                            </line>
                                            <line x1="18" y1="17.8" x2="18" y2="1">
                                            </line>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-6">
                        <div class="about-three-imgbox">
                            <div class="pbmit-animation-style7 about-three-img01"><img src="{{ asset('xpm/images/bg/beauty_by_vickky_home1.jpg') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="pbmit-animation-style7 about-three-img02"><img src="{{ asset('xpm/images/bg/BeautyByVickkyLounge_home2.gif') }}" class="img-fluid"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </section>
        <!-- About Us end -->
        <!-- Service Start -->
        <section class="service-section-three pbmit-element-service-style-3">
            <div class="container-fluid">
                <div class="row pbmit-element-column-three g-0">
                    <div class="col-md-12 col-xl-6 service-three-left-col">
                        <div class="service-three-left-inner"
                            style="background-image: url({{ asset('xpm/images/bg/beauty_by_vickky_home1.jpg') }})"></div>
                    </div>
                    <div class="col-md-12 col-xl-6 service-three-right-col">
                        <div class="pbmit-heading-subheading animation-style4">
                            <h2 class="pbmit-title">Our Service</h2>
                        </div>
                        <div class="pbmit-vertical-scroller-wrapper swiper-initialized swiper-vertical swiper-pointer-events"
                            style="height:630px;" data-dots="true">
                            <div class="swiper-wrapper">
                                <!-- Slide1 -->Y<article class="pbmit-ele pbmit-service-style-3 swiper-slide">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-service-image-wrapper d-flex">
                                            <div class="pbmit-bg-image"
                                                style="background-image: url({{ asset('xpm/images/services/brow_service.webp') }});">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper"><img src="{{ asset('xpm/images/services/brow_service.webp') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-content-box">
                                                <div class="pbmit-serv-cat"></div>
                                                <div class="pbmit-content-box-inner d-flex align-items-center">
                                                    <div class="pbmit-service-icon elementor-icon">
                                                        <i
                                                            class="pbmit-spaville-icon pbmit-spaville-icon-face-treatment"></i>
                                                    </div>
                                                    <h3 class="pbmit-service-title"><a href="#">Combination Brows</a>
                                                    </h3>
                                                </div>
                                                <div class="pbmit-service-description">
                                                    <p>Combination brows are a technique that combines microblading and shading to create natural and defined eyebrows.
                                                        Also, check out other option such as<a class="pbmit-button-text" href="#"> Ombre brows </a>,<a class="pbmit-button-text" href="#"> Microbladding brows </a>, and <a class="pbmit-button-text" href="#"> Microshadding brows></a>.
                                                    </p>
                                                </div><a class="pbmit-service-btn" href="#" title="Brow"><span class="pbmit-button-text">Book Now</span>
                                                    <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="10" height="19" viewBox="0 0 19 19"
                                                        xml:space="preserve">
                                                        <line x1="1" y1="18" x2="17.8"
                                                            y2="1.2"></line>
                                                        <line x1="1.2" y1="1" x2="18"
                                                            y2="1"></line>
                                                        <line x1="18" y1="17.8" x2="18"
                                                            y2="1"></line>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Slide2 -->
                                <article class="pbmit-ele pbmit-service-style-3 swiper-slide">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-service-image-wrapper d-flex">
                                            <div class="pbmit-bg-image"
                                                style="background-image: url({{ asset('xpm/images/services/touch_up_service.webp') }});">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper"><img src="{{ asset('xpm/images/services/touch_up_service.webp') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-content-box">
                                                <div class="pbmit-serv-cat"></div>
                                                <div class="pbmit-content-box-inner d-flex align-items-center">
                                                    <div class="pbmit-service-icon elementor-icon">
                                                        <i
                                                            class="pbmit-spaville-icon pbmit-spaville-icon-face-treatment"></i>
                                                    </div>
                                                    <h3 class="pbmit-service-title"><a href="#">Ombre</a>
                                                    </h3>
                                                </div>
                                                <div class="pbmit-service-description">
                                                    <p> Ombre Brows create stunning and defined eyebrows with a soft gradient effect. Also, check out other option such as<a class="pbmit-button-text" href="#"> Ombre brows </a>,<a class="pbmit-button-text" href="#"> Microbladding brows </a>, and <a class="pbmit-button-text" href="#"> Microshadding brows></a>.
                                                    </p>
                                                </div><a class="pbmit-service-btn" href="#" title="Touch Up"><span class="pbmit-button-text">Book Now</span>
                                                    <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="10" height="19" viewBox="0 0 19 19"
                                                        xml:space="preserve">
                                                        <line x1="1" y1="18" x2="17.8"
                                                            y2="1.2"></line>
                                                        <line x1="1.2" y1="1" x2="18"
                                                            y2="1"></line>
                                                        <line x1="18" y1="17.8" x2="18"
                                                            y2="1"></line>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Slide3 -->
                                {{-- <article class="pbmit-ele pbmit-service-style-3 swiper-slide">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-service-image-wrapper d-flex">
                                            <div class="pbmit-bg-image"
                                                style="background-image: url({{ asset('xpm/images/services/eyelashes_service.webp') }});">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper"><img src="{{ asset('xpm/images/services/eyelashes_service.webp') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-content-box">
                                                <div class="pbmit-serv-cat"></div>
                                                <div class="pbmit-content-box-inner d-flex align-items-center">
                                                    <div class="pbmit-service-icon elementor-icon">
                                                        <i
                                                            class="pbmit-spaville-icon pbmit-spaville-icon-face-treatment"></i>
                                                    </div>
                                                    <h3 class="pbmit-service-title"><a href="#!">Eye Lash</a>
                                                    </h3>
                                                </div>
                                                <div class="pbmit-service-description">
                                                    <p>We offer Volume lash, Classic lash, and Hybrid lash</p>
                                                </div><a class="pbmit-service-btn" href="../html-demo/service-details.html"
                                                    title="Revitalize Facial"><span class="pbmit-button-text">Book Now</span>
                                                    <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="10" height="19" viewBox="0 0 19 19"
                                                        xml:space="preserve">
                                                        <line x1="1" y1="18" x2="17.8"
                                                            y2="1.2"></line>
                                                        <line x1="1.2" y1="1" x2="18"
                                                            y2="1"></line>
                                                        <line x1="18" y1="17.8" x2="18"
                                                            y2="1"></line>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </article> --}}
                                <!-- Slide4 -->
                                {{-- <article class="pbmit-ele pbmit-service-style-3 swiper-slide">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-service-image-wrapper d-flex">
                                            <div class="pbmit-bg-image"
                                                style="background-image: url({{ asset('xpm/images/services/makeup_service.jpeg') }});">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper"><img src="{{ asset('xpm/images/services/makeup_service.jpeg') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-content-box">
                                                <div class="pbmit-serv-cat"></div>
                                                <div class="pbmit-content-box-inner d-flex align-items-center">
                                                    <div class="pbmit-service-icon elementor-icon">
                                                        <i
                                                            class="pbmit-spaville-icon pbmit-spaville-icon-face-treatment"></i>
                                                    </div>
                                                    <h3 class="pbmit-service-title"><a href="#!">Make-Up</a>
                                                    </h3>
                                                </div>
                                                <div class="pbmit-service-description">
                                                    <p>Bridal Makeup (White, traditional, and court), Party Makeup & Gele
                                                    </p>
                                                </div><a class="pbmit-service-btn" href="../html-demo/service-details.html"
                                                    title="Salt & Aroma"><span class="pbmit-button-text">Book Now</span>
                                                    <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="10" height="19" viewBox="0 0 19 19"
                                                        xml:space="preserve">
                                                        <line x1="1" y1="18" x2="17.8"
                                                            y2="1.2"></line>
                                                        <line x1="1.2" y1="1" x2="18"
                                                            y2="1"></line>
                                                        <line x1="18" y1="17.8" x2="18"
                                                            y2="1"></line>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </article> --}}
                                <!-- Slide5 -->
                                {{-- <article class="pbmit-ele pbmit-service-style-3 swiper-slide">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-service-image-wrapper d-flex">
                                            <div class="pbmit-bg-image"
                                                style="background-image: url({{ asset('xpm/images/services/hair_service.jpeg') }});">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper"><img src="{{ asset('xpm/images/services/hair_service.jpeg') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-content-box">
                                                <div class="pbmit-serv-cat"></div>
                                                <div class="pbmit-content-box-inner d-flex align-items-center">
                                                    <div class="pbmit-service-icon elementor-icon">
                                                        <i
                                                            class="pbmit-spaville-icon pbmit-spaville-icon-face-treatment"></i>
                                                    </div>
                                                    <h3 class="pbmit-service-title"><a href="#!">Hair Shop</a>
                                                    </h3>
                                                </div>
                                                <div class="pbmit-service-description">
                                                    <p>Long-lasting hair for different occassion</p>
                                                </div><a class="pbmit-service-btn" href="#!" title="Body Massage"><span class="pbmit-button-text">Book Now</span>
                                                    <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="10" height="19" viewBox="0 0 19 19"
                                                        xml:space="preserve">
                                                        <line x1="1" y1="18" x2="17.8"
                                                            y2="1.2"></line>
                                                        <line x1="1.2" y1="1" x2="18"
                                                            y2="1"></line>
                                                        <line x1="18" y1="17.8" x2="18"
                                                            y2="1"></line>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </article> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service End -->
        <!-- Marquee Start -->
        <section class="marquee-section-one section-lg">
            <div class="container-fluid p-0">
                <div class="swiper-slider marquee">
                    <div class="swiper-wrapper"><article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title" data-text="Make-Up">Make-Up</h2>
                            </div>
                        </article><article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title" data-text="Brows">Brows</h2>
                            </div>
                        </article><article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title" data-text="Touch Ups">Touch Ups</h2>
                            </div>
                        </article><article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title" data-text="EyeLashes">EyeLashes</h2>
                            </div>
                        </article><article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title" data-text="Hair Shop">Hair Shop</h2>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Marquee End -->
        @include('pages.testimonials')
    </div>
@endsection
