<header class="site-header header-style-3">
    <div class="container-fluid">
        <div class="pbmit-header-content d-flex justify-content-between align-items-center">
            <div class="pbmit-logo-menuarea d-flex justify-content-between align-items-center">
                <div class="site-navigation">
                    <nav class="main-menu navbar-expand-xl navbar-light">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button">
                                <i class="pbmit-base-icon-menu-1"></i>
                            </button>
                        </div>
                        <div class="pbmit-mobile-menu-bg"></div>
                        <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                            <div class="pbmit-menu-wrap">
                                <span class="closepanel">
                                    <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg"
                                        width="20.163" height="20.163" viewBox="0 0 26.163 26.163">
                                        <rect width="36" height="1" transform="translate(0.707) rotate(45)">
                                        </rect>
                                        <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)">
                                        </rect>
                                    </svg>
                                </span>
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li class="dropdown">
                                        <a href="#">Services</a>
                                        <ul>
                                            <li><a href="#">Trainings</a></li>
                                            <li><a href="{{ route('makeup') }}">Make Up</a></li>
                                            <li><a href="#">Brows</a></li>
                                            <li><a href="#">Brow Touch Up</a></li>
                                            <li><a href="#">Eye Lashes</a></li>
                                            <li><a href="#">Hair Shop</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Policy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="pbmit-logo-area d-flex align-items-center">
                <div class="site-branding">
                    <h1 class="site-title">
                        <a href="{{ route('home') }}">
                            <img class="logo-img" src="{{ asset('xpm/images/logo/logo513x136.svg') }}"
                                alt="BeautyByVickky">
                        </a>
                    </h1>
                </div>
            </div>
            <div class="pbmit-right-box d-flex align-items-center">
                <div class="pbmit-button-box">
                    <div class="pbmit-header-button">
                        <a href="tel:+447823845128">
                            <span class="pbmit-header-button-text-1">Call Us Now</span>
                            <span class="pbmit-header-button-text-2">+44 7823 845128</span>
                        </a>
                    </div>
                </div>
                <div class="pbmit-button-box-second">
                    <a class="pbmit-btn" href="{{ route('booking') }}">
                        <span class="pbmit-button-content-wrapper">
                            <span class="pbmit-button-text">Book Now</span>
                            <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10" height="19"
                                viewBox="0 0 19 19" xml:space="preserve">
                                <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                <line x1="18" y1="17.8" x2="18" y2="1"></line>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
