<body class="defult-home">

    <!-- Preloader area start here -->
    <div id="loader" class="loader">
        <div class="spinner"></div>
    </div>
    <!--End preloader here -->

    <!--Full width header Start-->
    <div class="full-width-header">
        <!-- Toolbar Start -->
        <div class="toolbar-area hidden-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="toolbar-contact">
                            <ul>
                                <li><i class="flaticon-email"></i><a href="mailto:info@yourwebsite.com">support@rstheme.com</a></li>
                                <li><i class="flaticon-call"></i><a href="tel:+123456789">(+123) 456789</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="toolbar-sl-share">
                            <ul>
                                <li class="opening"> <i class="flaticon-clock"></i> Mon - Fri: 9:00 am - 06.00pm / Closed on Weekends</li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Toolbar End -->

        <!--Header Start-->
        <header id="rs-header" class="rs-header">
            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo-area">
                                <a href="{{route('frontend.index')}}"><img src="{{asset('uploads/settings/')}}/{{GeneralSiteSettings('site_logo') }}" alt="{{ GeneralSiteSettings('site_title') }}"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 text-right">
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a class="rs-menu-toggle">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <nav class="rs-menu pr-65">
                                        <ul class="nav-menu">

                                            <li><a href="{{route('frontend.index')}}">Anasayfa</a></li>


                                            <li class="menu-item-has-children">
                                                <a href="#">Bilgi Merkezi</a>
                                                <ul class="sub-menu">
                                                    <li><a href="about.html">Hakkımızda</a></li>
                                                    <li><a href="blog.html">Duyurular</a></li>
                                                    <li><a href="portfolio-gallery.html">Videolar</a></li>
                                                    <li><a href="portfolio-slider.html">Etkinlikler</a></li>

                                                </ul>
                                            </li>


                                            <li class="last-item"><a href="faq.html">S.S.S</a></li>
                                            <li><a href="{{URL('/news')}}">Blog</a></li>

                                            <li><a href="contact.html">İletişim</a></li>


                                        </ul>
                                        <!-- //.nav-menu -->
                                    </nav>
                                </div>
                                <!-- //.main-menu -->
                                <div class="expand-btn-inner">
                                    <ul>
                                        <li class="search-parent">
                                            <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a id="nav-expander" class="humburger nav-expander" href="#">
                                                <span class="dot1"></span>
                                                <span class="dot2"></span>
                                                <span class="dot3"></span>
                                                <span class="dot4"></span>
                                                <span class="dot5"></span>
                                                <span class="dot6"></span>
                                                <span class="dot7"></span>
                                                <span class="dot8"></span>
                                                <span class="dot9"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->

            <!-- Canvas Menu start -->
            <nav class="right_menu_togle hidden-md">
                <div class="close-btn">
                    <span id="nav-close" class="humburger">
                        <span class="dot1"></span>
                        <span class="dot2"></span>
                        <span class="dot3"></span>
                        <span class="dot4"></span>
                        <span class="dot5"></span>
                        <span class="dot6"></span>
                        <span class="dot7"></span>
                        <span class="dot8"></span>
                        <span class="dot9"></span>
                    </span>
                </div>
                <div class="canvas-logo">
                    <a href="{{route('frontend.index')}}"><img src="{{asset('uploads/settings/')}}/{{GeneralSiteSettings('site_logo') }}" alt="{{ GeneralSiteSettings('site_title') }}"></a>
                </div>
                <div class="offcanvas-text">
                    <p>Consectetur adipiscing elit. Duis at dictum risus, non suscip it arcu. Quisque aliquam posuere tortor aliquam posuere tortor develop database.</p>
                </div>
                <div class="canvas-contact">
                    <ul class="contact">
                        <li><i class="flaticon-location"></i> 374 William S Canning Blvd, Fall River MA 2721, USA</li>
                        <li><i class="flaticon-call"></i><a href="tel:+880155-69569">(+880)155-69569</a></li>
                        <li><i class="flaticon-email"></i><a href="mailto:support@rstheme.com">support@rstheme.com</a></li>
                        <li><i class="flaticon-clock"></i>10:00 - 17:00</li>
                    </ul>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </nav>
            <!-- Canvas Menu end -->
        </header>
        <!--Header End-->
    </div>
    <!--Full width header End-->