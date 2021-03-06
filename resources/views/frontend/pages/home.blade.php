@extends('frontend.layouts.main')

@section('content')
    <div class="slider-area ">
        <div class="slider-active">
            <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 col-md-9 ">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp" data-delay=".4s">App Landing Page</span>
                                <h1 data-animation="fadeInUp" data-delay=".6s">Get things done<br>with Appco</h1>
                                <p data-animation="fadeInUp" data-delay=".8s">Dorem ipsum dolor sitamet, consectetur
                                    adipiscing elit, sed do eiusm tempor incididunt ulabore et dolore magna aliqua.
                                </p>

                                <div class="slider-btns">

                                    <a data-animation="fadeInLeft" data-delay="1.0s" href="{{ route('industries') }}"
                                        class="btn radius-btn">Download</a>

                                    <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn ani-btn"
                                        href="#"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                <img src="assets/img/hero/hero_right.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 col-md-9 ">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp" data-delay=".4s">App Landing Page</span>
                                <h1 data-animation="fadeInUp" data-delay=".6s">Get things done<br>with Appco</h1>
                                <p data-animation="fadeInUp" data-delay=".8s">Dorem ipsum dolor sitamet, consectetur
                                    adipiscing elit, sed do eiusm tempor incididunt ulabore et dolore magna aliqua.
                                </p>

                                <div class="slider-btns">

                                    <a data-animation="fadeInLeft" data-delay="1.0s" href="{{ route('industries') }}"
                                        class="btn radius-btn">Download</a>

                                    <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn ani-btn"
                                        href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                <img src="assets/img/hero/hero_right.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="best-features-area section-padd4">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-8 col-lg-10">

                    <div class="row">
                        <div class="col-lg-10 col-md-10">
                            <div class="section-tittle">
                                <h2>Some of the best features Of Our App!</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Easy to Costomize</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Extreme Security</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Customer Support</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Creative Design</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="features-shpae d-none d-lg-block">
            <img src="assets/img/shape/best-features.png" alt="">
        </div>
    </section>


    <section class="service-area sky-blue section-padding2">
        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center">
                        <h2>How Can We HelpYour<br>with Appco!</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="service-icon">
                            <span class="flaticon-businessman"></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="#">Easily Manage</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption active text-center mb-30">
                        <div class="service-icon">
                            <span class="flaticon-pay"></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="#">Get Payments Easily</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="service-icon">
                            <span class="flaticon-plane"></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="#">Quick Messaging</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="applic-apps section-padding2">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-8">
                    <div class="single-cases-info mb-30">
                        <h3>Applic Apps<br> Screenshot</h3>
                        <p>Lorem ipsum dolor sit amet, consecadipiscing elit, sed do eiusmod tempor incididunt ut
                            ore et dolore magna aliqua. Quis ipsum suspendisse gravida. Risus commodo viverra
                            maecenasan lacus vel facilisis. </p>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                    <div class="app-active owl-carousel">
                        <div class="single-cases-img">
                            <img src="assets/img/gallery/App1.png" alt="">
                        </div>
                        <div class="single-cases-img">
                            <img src="assets/img/gallery/App2.png" alt="">
                        </div>
                        <div class="single-cases-img">
                            <img src="assets/img/gallery/App3.png" alt="">
                        </div>
                        <div class="single-cases-img">
                            <img src="assets/img/gallery/App2.png" alt="">
                        </div>
                        <div class="single-cases-img">
                            <img src="assets/img/gallery/App1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="best-pricing pricing-padding" data-background="assets/img/gallery/best_pricingbg.jpg">
        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-tittle section-tittle2 text-center">
                        <h2>Choose Your Very Best Pricing Plan.</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="pricing-card-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <span>2 Years</span>
                            <h4>$05 <span>/ month</span></h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>Increase traffic 50%</li>
                                <li>E-mail support</li>
                                <li>10 Free Optimization</li>
                                <li>24/7 support</li>
                            </ul>
                            <a href="{{ route('services') }}" class="btn card-btn1">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-card  text-center mb-30">
                        <div class="card-top">
                            <span>2 Years</span>
                            <h4>$05 <span>/ month</span></h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>Increase traffic 50%</li>
                                <li>E-mail support</li>
                                <li>10 Free Optimization</li>
                                <li>24/7 support</li>
                            </ul>
                            <a href="{{ route('services') }}" class="btn card-btn1">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <span>2 Years</span>
                            <h4>$05 <span>/ month</span></h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>Increase traffic 50%</li>
                                <li>E-mail support</li>
                                <li>10 Free Optimization</li>
                                <li>24/7 support</li>
                            </ul>
                            <a href="{{ route('services') }}" class="btn card-btn1">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="our-customer section-padd-top30">
        <div class="container-fluid">
            <div class="our-customer-wrapper">

                <div class="row d-flex justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-tittle text-center">
                            <h2>What Our Customers<br> Have to Say</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="customar-active dot-style d-flex dot-style">
                            <div class="single-customer mb-100">
                                <div class="what-img">
                                    <img src="assets/img/shape/man1.png" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    <p>Utenim ad minim veniam quisnostrud exercitation ullamcolabor nisiut aliquip
                                        ex ea commodo consequat duis aute irure dolor in represse.</p>
                                </div>
                            </div>
                            <div class="single-customer mb-100">
                                <div class="what-img">
                                    <img src="assets/img/shape/man2.png" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    <p>Utenim ad minim veniam quisnostrud exercitation ullamcolabor nisiut aliquip
                                        ex ea commodo consequat duis aute irure dolor in represse.</p>
                                </div>
                            </div>
                            <div class="single-customer mb-100">
                                <div class="what-img">
                                    <img src="assets/img/shape/man3.png" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    <p>Utenim ad minim veniam quisnostrud exercitation ullamcolabor nisiut aliquip
                                        ex ea commodo consequat duis aute irure dolor in represse.</p>
                                </div>
                            </div>
                            <div class="single-customer mb-100">
                                <div class="what-img">
                                    <img src="assets/img/shape/man2.png" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    <p>Utenim ad minim veniam quisnostrud exercitation ullamcolabor nisiut aliquip
                                        ex ea commodo consequat duis aute irure dolor in represse.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="available-app-area">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="app-caption">
                        <div class="section-tittle section-tittle3">
                            <h2>Our App Available For Any Device Download now</h2>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fug.</p>
                            <div class="app-btn">
                                <a href="#" class="app-btn1"><img src="assets/img/shape/app_btn1.png" alt=""></a>
                                <a href="#" class="app-btn2"><img src="assets/img/shape/app_btn2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="app-img">
                        <img src="assets/img/shape/available-app.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="app-shape">
            <img src="assets/img/shape/app-shape-top.png" alt="" class="app-shape-top heartbeat d-none d-lg-block">
            <img src="assets/img/shape/app-shape-left.png" alt="" class="app-shape-left d-none d-xl-block">

        </div>
    </div>


    <div class="say-something-aera pt-90 pb-90 fix">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="offset-xl-1 offset-lg-1 col-xl-5 col-lg-5">
                    <div class="say-something-cap">
                        <h2>Say Hello To The Collaboration Hub.</h2>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3">
                    <div class="say-btn">
                        <a href="#" class="btn radius-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="say-shape">
            <img src="assets/img/shape/say-shape-left.png" alt="" class="say-shape1 rotateme d-none d-xl-block">
            <img src="assets/img/shape/say-shape-right.png" alt="" class="say-shape2 d-none d-lg-block">
        </div>
    </div>
@endsection
