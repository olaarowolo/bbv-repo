@extends('layouts.app')

@section('content')
    <div class="page-content  pbmit-bg-color-light">
        <!-- Static-box Start -->

        <!-- Title Bar -->
        <div class="pbmit-title-bar-wrapper">
            <div class="container">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner container">
                                <h1 class="pbmit-tbar-title"> Make Up</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span>
                                    <a title="" href="#" class="home"><span>BeautyByVickky</span></a>
                                </span>
                                <span class="sep">
                                    <i class="pbmit-base-icon-angle-right"></i>
                                </span>
                                <span><span class="post-root post post-post current-item"> MakeUp</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title Bar End-->
        <!-- Make up Start -->
        <section class="about-us-section-two section-lgb my-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-xl-6">
                        <div class="about-us-two-leftbox">
                            <img src="{{asset('xpm/images/homepage-2/bg/pbmit-mask-img.jpg')}}" class="img-fluid"
                                alt="">
                            <div class="ihbox-style-area">
                                <div class="pbmit-ihbox-style-11">
                                    <div class="pbmit-ihbox-headingicon">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">100
                                                <span>%</span>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">Satisfaction<br>Guarantee</h2>
                                        </div>
                                        <div class="pbmit-sticky-corner  pbmit-bottom-left-corner">
                                            <svg width="30" height="30" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M30 30V0C30 16 16 30 0 30H30Z"></path>
                                            </svg>
                                        </div>
                                        <div class="pbmit-sticky-corner pbmit-top-right-corner">
                                            <svg width="30" height="30" viewBox="0 0 30 30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M30 30V0C30 16 16 30 0 30H30Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-6">
                        <div class="about-us-wrap">
                            <div class="pbmit-heading-subheading animation-style2">
                                <h4 class="pbmit-subtitle">About us</h4>
                                <h2 class="pbmit-title">Welcome to the<br>
                                    Beauty & Spa Center</h2>
                                <div class="pbmit-heading-desc">Steam saunas or Turkish baths, provide a wet heat experience
                                    by using high humidity and steam ugit quando intellThese amenities provide heat therapy,
                                    relaxation, and potential health benefits.</div>
                            </div>
                            <div class="row">
                                <article class="pbmit-miconheading-style-8 col-md-6">
                                    <div class="pbmit-ihbox-style-8">
                                        <div class="pbmit-ihbox-box d-flex align-items-center">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-icon">
                                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                        <i class="pbmit-spaville-icon pbmit-spaville-icon-staff"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">Helps relieve pain</h2>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="pbmit-miconheading-style-8 col-md-6">
                                    <div class="pbmit-ihbox-style-8">
                                        <div class="pbmit-ihbox-box d-flex align-items-center">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-icon">
                                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                        <i class="pbmit-spaville-icon pbmit-spaville-icon-mortar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">Reduce Body Stress</h2>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="pbmit-miconheading-style-8 col-md-6">
                                    <div class="pbmit-ihbox-style-8">
                                        <div class="pbmit-ihbox-box d-flex align-items-center">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-icon">
                                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                        <i class="pbmit-spaville-icon pbmit-spaville-icon-slipper"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">Ease chronic pain</h2>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="pbmit-miconheading-style-8 col-md-6">
                                    <div class="pbmit-ihbox-style-8">
                                        <div class="pbmit-ihbox-box d-flex align-items-center">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-icon">
                                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                        <i class="pbmit-spaville-icon pbmit-spaville-icon-aromatic"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">Boosts your mood</h2>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <a id="card-button" href="{{ route('booking') }}" class="pbmit-btn pbmit-btn-blackish mt-2">
                                <span class="pbmit-button-content-wrapper">
                                    <span class="pbmit-button-text">Book Now</span>
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
                    </div>
                </div>
            </div>
        </section>
        <!-- Make up End -->
    </div>
@endsection
