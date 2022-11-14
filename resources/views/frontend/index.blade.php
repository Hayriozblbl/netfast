@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('navs.general.home'))

@section('content')
<div class="main-content">

    <!-- Main content Start -->
    <!-- Slider Start -->
    <!-- Slider Start -->
    <div id="rs-slider" class="rs-slider slider1">


        <div class="bend niceties">

            <div id="nivoSlider" class="slides">
                @foreach ($sliders as $slider)

                <img src="{{asset('uploads/sliders/')}}/{{$slider->image}}" alt="" style="display: inline;width: 1665px;height: 720px;" title="#slide-{{ $loop->index + 1 }}" />
                @endforeach
            </div>
            <!-- Slide 1 -->
            @foreach ($sliders as $slider)

            <div id="slide-{{ $loop->index + 1 }}" class="slider-direction">
                <div class="container">
                    <div class="content-part">
                        <div class="slider-des">
                            <h1 class="sl-title white-color">{{$slider->title}}</h1>
                            <div class="sl-desc">
                                {!!$slider->text!!}
                            </div>
                        </div>
                        <div class="slider-bottom">
                            <ul>
                                <li><a href="{{$slider->url}}" class="readon banner-style">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </div>
    <!-- Slider End -->


    <!-- Services Mini Section Start -->
    <div class="rs-services style1 pt-100 pb-84 md-pt-80 md-pb-64">
        <div class="container">
            <h2 align="center" ;><b>Distribütörü Olduğumuz Markalar</b> </h3> <br>

                <div class="row gutter-16">

                    <div class="col-lg-3 col-sm-6 mb-16">
                        <div class="service-wrap">

                            <div class="content-part">
                                <a href="netfastdraytek.php"><img src="{{('frontend/assets/img/marka/dry.png')}}" width="100%" height="auto" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-16">
                        <div class="service-wrap">

                            <div class="content-part">
                                <a href="netfastengenius.php"> <img src="{{('frontend/assets/img/marka/engenius_logo.png')}}" width="100%" height="auto" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-16">
                        <div class="service-wrap">

                            <div class="content-part">
                                <a href="netfastsynology.php"><img src="{{('frontend/assets/img/marka/Synology_logo_Black.png')}}" width="100%" height="auto" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-16">
                        <div class="service-wrap">

                            <div class="content-part">
                                <a href="lr-link.php"><img src="{{('frontend/assets/img/marka/lr-link-logo.png')}}" width="100%" height="auto" /></a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- Services Mini Section End -->

    <!-- About Section Start -->
    <div id="rs-about" class="rs-about style1 bg1 md-pt-80">
        <div class="container">
            <div class="row y-bottom">

                <div class="col-lg-12 pl-66 pt-75 pb-75 md-pt-42 md-pb-72">
                    <div class="sec-title mb-47 md-mb-42">
                        <h2 class="title mb-0">{{ $about->about_title }}</h2>
                    </div>

                    <div class="services-part">

                        <div class="services-text">
                            <div class="desc">{!! $about->about_text !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->
    <!-- Services Section Start -->
    <div id="rs-services" class="rs-services style1 modify pt-92 pb-84 md-pt-72 md-pb-64">
        <div class="container">
            <div class="sec-title text-center mb-47 md-mb-42">
                <h2 class="title mb-0">Ürünler</h2>
            </div>

            <div class="row gutter-16">
                @foreach ($shopping as $shop)

                <div class="col-lg-12 col-sm-6 mb-16">
                    <div class="service-wrap">

                        <div class="row">

                            <div class="col-3">

                                <img src="{{  URL::to('uploads/shopping/')}}/{{ $shop->image }}" alt="{{$shop->name}}">

                            </div>
                            <div class="col-9">


                                <div class="content-part">
                                    <h5 class="title"><a href="services-single.html">{{$shop->name}}</a></h5>
                                    <div class="desc">{!! $shop->description !!}</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                @endforeach

            </div>

        </div>
    </div>
    <!-- Services Section End -->


    <!-- Skillbar Section Start -->
    <div class="rs-skillbar style1 pt-92 pb-100 md-pt-72 md-pb-80 sm-pt-80">
        <div class="container">
            <div class="gray-bg">
                <div class="row">

                    <img src="{{asset('frontend/assets/img/netcom-banner.jpeg')}}" alt="">
                    <div class="col-lg-6 pl-0 md-order-first md-pl-pr-15">
                        <div class="bg-part md-pt-200 md-pb-200"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skillbar Section End -->



    <!-- Contact Section Start -->
    <div class="rs-contact style1 gray-bg pt-100 pb-100 md-pt-80 md-pb-80">
        <div class="container">
            <div class="white-bg">
                <div class="row">
                    <div class="col-lg-8 form-part">
                        <div class="sec-title mb-35 md-mb-30">
                            <div class="sub-title primary">CONTACT US</div>
                            <h2 class="title mb-0">Get In Touch</h2>
                        </div>
                        <div id="form-messages"></div>
                        <form id="contact-form" class="contact-form" method="post" action="https://rstheme.com/products/html/reobiz/mailer.php">
                            <div class="row">
                                <div class="col-md-6 mb-30">
                                    <div class="common-control">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="common-control">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="common-control">
                                        <input type="text" name="phone" placeholder="Phone Number" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="common-control">
                                        <input type="text" name="website" placeholder="Your Website" required="">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-30">
                                    <div class="common-control">
                                        <textarea name="message" placeholder="Your Message Here" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit-btn">
                                        <button type="submit" class="readon">Submit Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 pl-0 md-pl-pr-15 md-order-first">
                        <div class="contact-info">
                            <h3 class="title">Contact Info</h3>
                            <div class="info-wrap mb-20">
                                <div class="icon-part">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="content-part">
                                    <h4>USA Office</h4>
                                    127 Double Street, Dublin, United Kingdom.
                                </div>
                            </div>
                            <div class="info-wrap mb-20">
                                <div class="icon-part">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="content-part">
                                    <h4>Telephone</h4>
                                    <p>P: <a href="tel:+1235558888">(+123) 555 8888</a></p>
                                    <p>P: <a href="tel:+1235558899">(+123) 555 8899</a></p>
                                </div>
                            </div>
                            <div class="info-wrap mb-20">
                                <div class="icon-part">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="content-part">
                                    <h4>Mail Us</h4>
                                    <p>E: <a href="mailto:support@rstheme.com">support@rstheme.com</a></p>
                                    <p>E: <a href="mailto:info@codesless.com">info@codesless.com</a></p>
                                </div>
                            </div>
                            <div class="info-wrap">
                                <div class="icon-part">
                                    <i class="flaticon-clock"></i>
                                </div>
                                <div class="content-part">
                                    <h4>Opening Hours</h4>
                                    <p>Mon-Fri: 10:00-18:00</p>
                                    <p>Sat-Sun: 10:00-14:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- Blog Section Start -->
    <div class="rs-blog style1 pt-91 pb-92 md-pt-71 md-pb-72 sm-pb-75">
        <div class="container">
            <div class="row y-middle mb-53 md-mb-40 sm-mb-50">
                <div class="col-md-6 sm-mb-22">
                    <div class="sec-title">
                        <span class="sub-title primary right-line">Bizden Haberler</span>
                        <h2 class="title mb-0">Blog</h2>
                    </div>
                </div>

            </div>
            <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="3" data-md-device-nav="false" data-md-device-dots="true">
                @foreach($posts as $post)
                <div class="blog-wrap">
                    <div class="img-part">
                        <img src="{{asset('uploads/posts/')}}/{{$post->f_image}}" alt="{{$post->title}}">
                        <div class="fly-btn">
                            <a href="{{route('frontend.new',$post->slug)}}"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="content-part">
                        <a class="categories" href="{{route('frontend.new',$post->slug)}}">{{$post->title_tr}}</a>
                        <h3 class="title"><a href="{{route('frontend.new',$post->slug)}}">{!! Str::words($post->text_tr,30,'...')!!}</a></h3>
                        <div class="blog-meta">
                            <div class="date">
                                <i class="fa fa-clock-o"></i> {{ date('d',strtotime($post->date)) }} {{ date('M',strtotime($post->date)) }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog Section End -->
</div>
<!-- Main content End -->



@endsection