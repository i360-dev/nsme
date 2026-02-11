@extends('layouts.base', ['title' => 'Home 8 || Business Consulting Consulting', 'logo' => '/img/logo/titel8.svg'])

@section('body_attribute')
    class="font-f-6"
@endsection

@section('content')
    <!--=====HEADER START=======-->
    <x-topbar logo="/img/logo/header-logo8.svg" exClass="8">
        <div class="home2-header-buttons">
            <a href="{{ route('second', ['others', 'contact'])}}" class="theme-btn10">Strat Your Journey</a>
        </div>
    </x-topbar>

    <!--=====Hero start=======-->
    <div class="main-hero main-hero5 _relative" style="background-color: #E9EDF4;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 _relative">
                    <div class="main-hadding8">
                        <span>Welcome to Advisor</span>
                        <div class="space16"></div>
                        <h1>Cultivate your brand and expand your business</h1>
                        <div class="space24"></div>
                        <p>Your Partner in Achieving Sustainable Growth and Success,Unlock Your <br> Potential and Drive
                            Growth. We
                            help business to perform</p>
                        <div class="space40"></div>
                        <div class="header2-buttons">
                            <a href="#" class="theme-btn10">Unlock Your Potential</a>
                            <a href="#" class="theme-btn11">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero8-images">
                        <div class="hero8-img1 aniamtion-key-1">
                            <img src="/img/shapes/hero8-shape1.svg" alt="">
                        </div>
                        <div class="hero8-img2">
                            <img src="/img/shapes/hero8-shape2.svg" alt="">
                        </div>
                        <div class="hero8-img3">
                            <img src="/img/image/hero8-main-img.png" alt="">
                        </div>

                        <div class="hero8-counter-box hero8-counter-box1">
                            <h1><span class="counter">16</span>+</h1>
                            <div class="space8"></div>
                            <p>Years of Experience</p>
                        </div>

                        <div class="hero8-counter-box hero8-counter-box2">
                            <h1><span class="counter">95</span>%</h1>
                            <div class="space8"></div>
                            <p>Return on Investment</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--=====Hero end=======-->

    <!--=====about start=======-->

    <div class="about8 sp3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about8-images _relative" data-aos="zoom-out" data-aos-duration="700">
                        <div class="about8-shape">
                            <img src="/img/shapes/hero8-shape2.svg" alt="">
                        </div>
                        <div class="about8-img img100 img5">
                            <img src="/img/image/about8-img.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hadding8 about8-hadding">
                        <span data-aos="fade-left" data-aos-duration="700">About Us</span>
                        <div class="space16"></div>
                        <h1 data-aos="fade-left" data-aos-duration="900">Partner with Our Trusted to Consultants Today</h1>
                        <div class="space20"></div>
                        <p data-aos="fade-left" data-aos-duration="1100">At Advisor Consulting Company, we are a trusted
                            business
                            consulting firm dedicated to helping businesses thrive and reach their full potential. Consult
                            our team of experienced consultants brings diverse industry knowledge & expertise in various
                            business
                            disciplines. We prioritize understanding </p>
                        <div class="space20"></div>
                        <p data-aos="fade-left" data-aos-duration="800">Your unique challenges and goals to deliver
                            customized
                            solutions tailored to your specific needs We are committed to providing exceptional service
                            innovative
                            strategies, and tangible results for our clients.</p>
                        <div class="space32"></div>
                        <div class="" data-aos="fade-left" data-aos-duration="1000">
                            <a href="{{ route('second', ['services', 'index'])}}" class="theme-btn10">Discover Our Services</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====about end=======-->

    <!--=====service start=======-->

    <div class="service8 sp3" style="background-color: #E9EDF4;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding8">
                        <span data-aos="fade-up" data-aos-duration="700">Our Service</span>
                        <div class="space16"></div>
                        <h1 data-aos="fade-up" data-aos-duration="900">Cosulting Services We Offered</h1>
                    </div>
                </div>
            </div>

            <div class="space30"></div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="" data-aos="fade-up" data-aos-duration="700">
                        <div class="service8-box">
                            <div class="service8-icon">
                                <img src="/img/icons/service8-icon1.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <div class="hadding8">
                                <h4><a href="{{ route('second', ['services', 'details'])}}">Strategy Consulting</a></h4>
                                <div class="space16"></div>
                                <p>Consultants analyze current operations and identify areas for improvement in efficiency,
                                    productivity,
                                    and cost reduction.</p>
                                <div class="space16"></div>
                                <a href="{{ route('second', ['services', 'details'])}}" class="service8-learn">learn more <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="" data-aos="fade-up" data-aos-duration="900">
                        <div class="service8-box">
                            <div class="service8-icon">
                                <img src="/img/icons/service8-icon2.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <div class="hadding8">
                                <h4><a href="{{ route('second', ['services', 'details'])}}">Strategy & Planning</a></h4>
                                <div class="space16"></div>
                                <p>Consultants analyze current operations and identify areas for improvement in efficiency,
                                    productivity,
                                    and cost reduction.</p>
                                <div class="space16"></div>
                                <a href="{{ route('second', ['services', 'details'])}}" class="service8-learn">learn more <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="" data-aos="fade-up" data-aos-duration="1100">
                        <div class="service8-box">
                            <div class="service8-icon">
                                <img src="/img/icons/service8-icon3.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <div class="hadding8">
                                <h4><a href="{{ route('second', ['services', 'details'])}}">Marketing & Sales</a></h4>
                                <div class="space16"></div>
                                <p>Consultants analyze current operations and identify areas for improvement in efficiency,
                                    productivity,
                                    and cost reduction.</p>
                                <div class="space16"></div>
                                <a href="{{ route('second', ['services', 'details'])}}" class="service8-learn">learn more <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="" data-aos="fade-up" data-aos-duration="700">
                        <div class="service8-box">
                            <div class="service8-icon">
                                <img src="/img/icons/service8-icon4.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <div class="hadding8">
                                <h4><a href="{{ route('second', ['services', 'details'])}}">IT Consulting</a></h4>
                                <div class="space16"></div>
                                <p>Consultants analyze current operations and identify areas for improvement in efficiency,
                                    productivity,
                                    and cost reduction.</p>
                                <div class="space16"></div>
                                <a href="{{ route('second', ['services', 'details'])}}" class="service8-learn">learn more <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="" data-aos="fade-up" data-aos-duration="1100">
                        <div class="service8-box">
                            <div class="service8-icon">
                                <img src="/img/icons/service8-icon5.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <div class="hadding8">
                                <h4><a href="{{ route('second', ['services', 'details'])}}">Change Managment</a></h4>
                                <div class="space16"></div>
                                <p>Consultants analyze current operations and identify areas for improvement in efficiency,
                                    productivity,
                                    and cost reduction.</p>
                                <div class="space16"></div>
                                <a href="{{ route('second', ['services', 'details'])}}" class="service8-learn">learn more <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="" data-aos="fade-up" data-aos-duration="900">
                        <div class="service8-box">
                            <div class="service8-icon">
                                <img src="/img/icons/service8-icon6.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <div class="hadding8">
                                <h4><a href="{{ route('second', ['services', 'details'])}}">Process Improvement</a></h4>
                                <div class="space16"></div>
                                <p>Consultants analyze current operations and identify areas for improvement in efficiency,
                                    productivity,
                                    and cost reduction.</p>
                                <div class="space16"></div>
                                <a href="{{ route('second', ['services', 'details'])}}" class="service8-learn">learn more <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="space40"></div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="" data-aos="fade-up" data-aos-duration="900">
                        <a href="{{ route('second', ['services', 'index'])}}" class="theme-btn10">View Our All Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====service end=======-->

    <!--=====progress start=======-->

    <div class="progress8 sp3">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="hadding8 progress8-hadding">
                        <span data-aos="fade-right" data-aos-duration="700">Company Progress</span>
                        <div class="space16"></div>
                        <h1 data-aos="fade-right" data-aos-duration="800">Company progress world record in business </h1>
                        <div class="space20"></div>
                        <p data-aos="fade-right" data-aos-duration="1000">At Taxvice Business Consulting, we specialize in
                            helping
                            businesses achieve their full potential. Whether you're a startup looking to establish a strong.
                        </p>
                        <div class="space16"></div>
                        <p data-aos="fade-right" data-aos-duration="700">It's important to note that consulting services
                            can vary in
                            their approach and methodology, and the specific services offered will depend.</p>

                        <div class="space30"></div>

                        <div class="porgress-line-all" data-aos="fade-right" data-aos-duration="1000">
                            <div class="progress-line">
                                <h6>Consulting</h6>
                                <div id="progress1" data-init="true"></div>
                            </div>
                            <div class="progress-line">
                                <h6>Marketing</h6>
                                <div id="progress2" data-init="true"></div>
                            </div>
                        </div>

                        <div class="" data-aos="fade-right" data-aos-duration="800">
                            <a href="{{ route('second', ['services', 'index'])}}" class="theme-btn10">Request A Quote</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="_relative progress8-images" data-aos="zoom-out" data-aos-duration="1000">
                        <div class="progress8-shape ">
                            <img src="/img/shapes/hero8-shape2.svg" alt="">
                        </div>
                        <div class="progress8-img img5 img100">
                            <img src="/img/image/progress8-img.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--=====progress end=======-->

    <!--=====case start=======-->

    <div class="case8 sp3" style="background-color: #E9EDF4;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding8">
                        <h1 data-aos="fade-up" data-aos-duration="800">Industries we have served</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="1000">Consulting service is a key part of the future of
                            energy. It
                            can help you save money on your electricity bill, and it can also help to reduce your carbon
                            footprint.</p>
                    </div>
                </div>
            </div>
            <div class="space60"></div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="industries-slider owl-carousel" data-aos="fade-up" data-aos-duration="900">
                        <div class="industries-slider-single">
                            <div class="industries-box _relative">
                                <div class="industries-img img5">
                                    <img src="/img/image/industries-img1.png" alt="">
                                </div>
                                <div class="industries-hadding hadding5">
                                    <h4><a href="#">Finance Consulting</a></h4>
                                    <div class="space16"></div>
                                    <p>Our goal is to empower you with the law knowledge, strategies, Our best finance.</p>
                                    <div class="space16"></div>
                                    <a href="{{ route('second', ['services', 'details'])}}" class="learn-more5">Read More <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="industries-slider-single">
                            <div class="industries-box _relative">
                                <div class="industries-img img5">
                                    <img src="/img/image/industries-img2.png" alt="">
                                </div>
                                <div class="industries-hadding hadding5">
                                    <h4><a href="#">Finance Professional</a></h4>
                                    <div class="space16"></div>
                                    <p>Our goal is to empower you with the law knowledge, strategies, Our best finance.</p>
                                    <div class="space16"></div>
                                    <a href="{{ route('second', ['services', 'details'])}}" class="learn-more5">Read More <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="industries-slider-single">
                            <div class="industries-box _relative">
                                <div class="industries-img img5">
                                    <img src="/img/image/industries-img3.png" alt="">
                                </div>
                                <div class="industries-hadding hadding5">
                                    <h4><a href="#">Finance Assessment</a></h4>
                                    <div class="space16"></div>
                                    <p>Our goal is to empower you with the law knowledge, strategies, Our best finance.</p>
                                    <div class="space16"></div>
                                    <a href="{{ route('second', ['services', 'details'])}}" class="learn-more5">Read More <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="industries-slider-single">
                            <div class="industries-box _relative">
                                <div class="industries-img img5">
                                    <img src="/img/image/industries-img1.png" alt="">
                                </div>
                                <div class="industries-hadding hadding5">
                                    <h4><a href="#">Finance Consulting</a></h4>
                                    <div class="space16"></div>
                                    <p>Our goal is to empower you with the law knowledge, strategies, Our best finance.</p>
                                    <div class="space16"></div>
                                    <a href="{{ route('second', ['services', 'details'])}}" class="learn-more5">Read More <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>

    <!--=====case end=======-->

    <!--=====testimonial start=======-->

    <div class="tes8 sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding8">
                        <span data-aos="fade-up" data-aos-duration="700">Testimonials</span>
                        <div class="space16"></div>
                        <h1 data-aos="fade-up" data-aos-duration="900">Some love words from clients</h1>
                    </div>
                </div>
            </div>

            <div class="space60"></div>
            <div class="row">
                <div class="tes8-parent-slider owl-carousel" data-aos="fade-up" data-aos-duration="1200">
                    <div class="tes8-single-slider">
                        <div class="tes8-slider-box">
                            <div class="tes8-icon">
                                <img src="/img/icons/tes8-icon.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <ul class="tes8-stars">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="space20"></div>
                            <p>“Business Consultant to legal entity filing, the marketing setup, automation, on the legal
                                bookkeeping,
                                technology, in person of an networking, online sales, permits and user console consult.”</p>
                            <div class="tes8-border"></div>
                            <div class="tes8-bottom">
                                <div class="tes8-bottom-img">
                                    <img src="/img/image/tes8-img1.png" alt="">
                                </div>
                                <div class="tes8-bottom-hadding">
                                    <h5><a href="#">Tina Wilkinson</a></h5>
                                    <div class="space5"></div>
                                    <p>CEO, Wingree Ltd</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tes8-single-slider">
                        <div class="tes8-slider-box">
                            <div class="tes8-icon">
                                <img src="/img/icons/tes8-icon.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <ul class="tes8-stars">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="space20"></div>
                            <p>“Business Consultant to legal entity filing, the marketing setup, automation, on the legal
                                bookkeeping,
                                technology, in person of an networking, online sales, permits and user console consult.”</p>
                            <div class="tes8-border"></div>
                            <div class="tes8-bottom">
                                <div class="tes8-bottom-img">
                                    <img src="/img/image/tes8-img2.png" alt="">
                                </div>
                                <div class="tes8-bottom-hadding">
                                    <h5><a href="#">Leslie Alexander</a></h5>
                                    <div class="space5"></div>
                                    <p>CEO, Marquis Ltd</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tes8-single-slider">
                        <div class="tes8-slider-box">
                            <div class="tes8-icon">
                                <img src="/img/icons/tes8-icon.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <ul class="tes8-stars">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="space20"></div>
                            <p>“Business Consultant to legal entity filing, the marketing setup, automation, on the legal
                                bookkeeping,
                                technology, in person of an networking, online sales, permits and user console consult.”</p>
                            <div class="tes8-border"></div>
                            <div class="tes8-bottom">
                                <div class="tes8-bottom-img">
                                    <img src="/img/image/tes8-img3.png" alt="">
                                </div>
                                <div class="tes8-bottom-hadding">
                                    <h5><a href="#">Maurice Quitzon</a></h5>
                                    <div class="space5"></div>
                                    <p>CEO, Parkview Int</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tes8-single-slider">
                        <div class="tes8-slider-box">
                            <div class="tes8-icon">
                                <img src="/img/icons/tes8-icon.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <ul class="tes8-stars">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="space20"></div>
                            <p>“Business Consultant to legal entity filing, the marketing setup, automation, on the legal
                                bookkeeping,
                                technology, in person of an networking, online sales, permits and user console consult.”</p>
                            <div class="tes8-border"></div>
                            <div class="tes8-bottom">
                                <div class="tes8-bottom-img">
                                    <img src="/img/image/tes8-img1.png" alt="">
                                </div>
                                <div class="tes8-bottom-hadding">
                                    <h5><a href="#">Tina Wilkinson</a></h5>
                                    <div class="space5"></div>
                                    <p>CEO, Wingree Ltd</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tes8-single-slider">
                        <div class="tes8-slider-box">
                            <div class="tes8-icon">
                                <img src="/img/icons/tes8-icon.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <ul class="tes8-stars">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="space20"></div>
                            <p>“Business Consultant to legal entity filing, the marketing setup, automation, on the legal
                                bookkeeping,
                                technology, in person of an networking, online sales, permits and user console consult.”</p>
                            <div class="tes8-border"></div>
                            <div class="tes8-bottom">
                                <div class="tes8-bottom-img">
                                    <img src="/img/image/tes8-img2.png" alt="">
                                </div>
                                <div class="tes8-bottom-hadding">
                                    <h5><a href="#">Leslie Alexander</a></h5>
                                    <div class="space5"></div>
                                    <p>CEO, Marquis Ltd</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tes8-single-slider">
                        <div class="tes8-slider-box">
                            <div class="tes8-icon">
                                <img src="/img/icons/tes8-icon.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <ul class="tes8-stars">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="space20"></div>
                            <p>“Business Consultant to legal entity filing, the marketing setup, automation, on the legal
                                bookkeeping,
                                technology, in person of an networking, online sales, permits and user console consult.”</p>
                            <div class="tes8-border"></div>
                            <div class="tes8-bottom">
                                <div class="tes8-bottom-img">
                                    <img src="/img/image/tes8-img3.png" alt="">
                                </div>
                                <div class="tes8-bottom-hadding">
                                    <h5><a href="#">Maurice Quitzon</a></h5>
                                    <div class="space5"></div>
                                    <p>CEO, Parkview Int</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tes8-single-slider">
                        <div class="tes8-slider-box">
                            <div class="tes8-icon">
                                <img src="/img/icons/tes8-icon.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <ul class="tes8-stars">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="space20"></div>
                            <p>“Business Consultant to legal entity filing, the marketing setup, automation, on the legal
                                bookkeeping,
                                technology, in person of an networking, online sales, permits and user console consult.”</p>
                            <div class="tes8-border"></div>
                            <div class="tes8-bottom">
                                <div class="tes8-bottom-img">
                                    <img src="/img/image/tes8-img1.png" alt="">
                                </div>
                                <div class="tes8-bottom-hadding">
                                    <h5><a href="#">Tina Wilkinson</a></h5>
                                    <div class="space5"></div>
                                    <p>CEO, Wingree Ltd</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tes8-single-slider">
                        <div class="tes8-slider-box">
                            <div class="tes8-icon">
                                <img src="/img/icons/tes8-icon.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <ul class="tes8-stars">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="space20"></div>
                            <p>“Business Consultant to legal entity filing, the marketing setup, automation, on the legal
                                bookkeeping,
                                technology, in person of an networking, online sales, permits and user console consult.”</p>
                            <div class="tes8-border"></div>
                            <div class="tes8-bottom">
                                <div class="tes8-bottom-img">
                                    <img src="/img/image/tes8-img2.png" alt="">
                                </div>
                                <div class="tes8-bottom-hadding">
                                    <h5><a href="#">Leslie Alexander</a></h5>
                                    <div class="space5"></div>
                                    <p>CEO, Marquis Ltd</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tes8-single-slider">
                        <div class="tes8-slider-box">
                            <div class="tes8-icon">
                                <img src="/img/icons/tes8-icon.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <ul class="tes8-stars">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="space20"></div>
                            <p>“Business Consultant to legal entity filing, the marketing setup, automation, on the legal
                                bookkeeping,
                                technology, in person of an networking, online sales, permits and user console consult.”</p>
                            <div class="tes8-border"></div>
                            <div class="tes8-bottom">
                                <div class="tes8-bottom-img">
                                    <img src="/img/image/tes8-img3.png" alt="">
                                </div>
                                <div class="tes8-bottom-hadding">
                                    <h5><a href="#">Maurice Quitzon</a></h5>
                                    <div class="space5"></div>
                                    <p>CEO, Parkview Int</p>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>

    <!--=====testimonial end=======-->


    <!--=====blog start=======-->

    <div class="blog8 sp3" style="background-color: #E9EDF4;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding6">
                        <h1 data-aos="fade-up" data-aos-duration="800">Featured Blog Post</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="900">Discover the keys to boosting employee engagement
                            and
                            productivity in our latest blog post. We delve into strategies and insights that empower</p>
                    </div>
                </div>
            </div>

            <div class="space30"></div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog6-box" data-aos="fade-up" data-aos-duration="900">
                        <div class="blog6-box-img img100">
                            <img src="/img/image/blog6-img1.png" alt="">
                        </div>
                        <div class="hadding6 blog6-hadding">
                            <a href="#" class="blog6-tag">#Talent Management</a>
                            <div class="space16"></div>
                            <h3><a href="{{ route('second', ['blog-details', 'index'])}}">Remote Work Best Practices: Keeping Teams Connected</a></h3>
                            <div class="space16"></div>
                            <p>Learn how to ensure HR compliance and best mitigate risks in your organization while to be
                                our
                                maintaining a safe and compliant.</p>
                            <div class="space16"></div>
                            <a href="{{ route('second', ['blog-details', 'index'])}}" class="blog6-learn">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog6-box" data-aos="fade-up" data-aos-duration="1100">
                        <div class="blog6-box-img img100">
                            <img src="/img/image/blog6-img2.png" alt="">
                        </div>
                        <div class="hadding6 blog6-hadding">
                            <a href="#" class="blog6-tag">#Talent Management</a>
                            <div class="space16"></div>
                            <h3><a href="{{ route('second', ['blog-details', 'index'])}}">Navigating HR Compliance: Tips for a Risk-Free Workplace</a>
                            </h3>
                            <div class="space16"></div>
                            <p>Learn how to ensure HR compliance and best mitigate risks in your organization while to be
                                our
                                maintaining a safe and compliant.</p>
                            <div class="space16"></div>
                            <a href="{{ route('second', ['blog-details', 'index'])}}" class="blog6-learn">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog6-box" data-aos="fade-up" data-aos-duration="700">
                        <div class="blog6-box-img img100">
                            <img src="/img/image/blog6-img3.png" alt="">
                        </div>
                        <div class="hadding6 blog6-hadding">
                            <a href="#" class="blog6-tag">#Talent Management</a>
                            <div class="space16"></div>
                            <h3><a href="{{ route('second', ['blog-details', 'index'])}}">Diversity and Inclusion in the Workplace: A Path to Success</a>
                            </h3>
                            <div class="space16"></div>
                            <p>Learn how to ensure HR compliance and best mitigate risks in your organization while to be
                                our
                                maintaining a safe and compliant.</p>
                            <div class="space16"></div>
                            <a href="{{ route('second', ['blog-details', 'index'])}}" class="blog6-learn">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                            <p></p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!--=====blog end=======-->

    <!--=====cta start=======-->

    <div class="cta8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hadding7-w">
                        <h1>Transform Your HR Practices?</h1>
                        <div class="space16"></div>
                        <p>Unlock the full potential of your workforce with our tailored HR manage consulting services.
                            Whether you're
                            looking to optimize recruitment, enhance employe.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cta6-buttons">
                        <a href="{{ route('second', ['services', 'index'])}}" class="cta8-btn1">Request HR Consultation</a>
                        <a href="{{ route('second', ['others', 'contact'])}}" class="cta8-btn2">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====cta end=======-->


    <!--=====Footer start=======-->
    @include('components/footer2', [
        'areaNum' => '7',
        'bgColor' => '0C1822',
        'logo' => '/img/logo/footer-logo8.svg',
        'buttonClass' => 'subscribe-footer6',
        'socialClass' => 'social7 social8',
        'btnClass' => 'theme-btn10',
    ])
@endsection
