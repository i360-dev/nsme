@extends('layouts.base', ['title' => 'Home 5 || Business Consulting', 'logo' => '/img/logo/titel5.svg'])

@section('body_attribute')
    class="font-f-5"
@endsection

@section('content')
    <!--=====HEADER START=======-->
    <header>
        <div class="header-area header-area-all d-none d-lg-block" id="header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header-elements">
                            <div class="site-logo home1-site-logo">
                                <a href="{{ route('second',['landing', 'index'])}}"><img src="/img/logo/header-logo5.svg" alt="" />
                                </a>
                            </div>



                            <div class="main-menu-ex main-menu-ex5">
                                <ul>

                                    <li><a href="#about">About</a></li>
                                    <li><a href="#service">Service</a></li>
                                    <li><a href="#testimonial">Testimonial</a></li>
                                    <li><a href="#blog">Blog</a></li>
                                    <li><a href="#contact">Contact</a></li>

                                </ul>
                            </div>



                            <div class="home2-header-buttons">
                                <div class="button2-all">
                                    <a href="{{ route('second', ['others', 'contact'])}}" class="theme-btn5">Book a Financial Session<span><i
                                                class="fa-solid fa-angle-right"></i></span></a>
                                </div>
                            </div>
                            <div class="mobile-menu-bar d-lg-none">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--=====HEADER END=======-->

    <!--=====Hero start=======-->
    <div class="main-hero main-hero5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 _relative">
                    <div class="main-hadding5">
                        <h1 data-aos="fade-right" data-aos-duration="800">Transform Your <span
                                class="after2">Business</span> with
                            Expert Consulting Services</h1>
                        <div class="space24"></div>
                        <p data-aos="fade-right" data-aos-duration="1000">Guiding Financial Success with Expertise and
                            Precision.
                            Drive Growth, Improve Efficiency and Make Informed DecisionsWe help business to perform with our
                            customized
                            solution helping them take business.</p>
                        <div class="space40"></div>
                        <div class="header2-buttons">

                            <div class="button2-all" data-aos="fade-right" data-aos-duration="1200">
                                <a href="{{ route('second', ['others', 'contact'])}}" class="theme-btn5">Schedule A Consultation <span><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                            </div>
                            <div class="button2-all2">
                                <a href="{{ route('second', ['others', 'contact'])}}" class="theme-btn6">Contact Us <span><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                            </div>
                        </div>

                    </div>

                    <div class="hero5-commnt-area text-right">
                        <div class="commnet-area-hadding">
                            <div class="commnet-area-shape">
                                <img src="/img/shapes/hero5-shape.svg" alt="">
                            </div>
                            <p>Finance Consulting <br> Expert Member</p>
                        </div>
                        <div class="commnet-area-img">
                            <img src="/img/image/hero5-commnet.png" alt="">
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="hero5-images">
                        <div class="hero5-img1">
                            <img src="/img/image/hero5-image1.png" alt="">
                        </div>

                        <div class="hero5-img2">
                            <img src="/img/image/hero5-image2.png" alt="">
                        </div>

                        <div class="hero5-img3">
                            <img src="/img/icons/hero5-icon.svg" alt="">
                            <p>Officially Certified</p>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <!--=====Hero end=======-->

    <!--=====about start=======-->

    <div class="about5 sp3" id="about" style="background-color: #F1F1F5;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about5-images">
                        <div class="aobut5-img1">
                            <img src="/img/shapes/about5-shape.svg" alt="">
                        </div>
                        <div class="aobut5-img2 img5 img100">
                            <img src="/img/image/about5-img.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hadding5">
                        <h1 data-aos="fade-left" data-aos-duration="700">Best Financial Company for Your Business</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-left" data-aos-duration="900">At Advisor Consulting, we are a trusted finance
                            consulting
                            firm dedicated to helping businesses achieve financial excellence and sustainable growth. The to
                            Whether your dream is to retire well or build a profitable business' JS Morlu offer a diverse
                            range of
                            exclusive accounting, tax, on audit and business.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about5-counter-box" data-aos="fade-left" data-aos-duration="700">
                                    <h1><span class="counter">76</span>+</h1>
                                    <p>Projects Completed</p>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                                <div class="about5-counter-box">
                                    <h1><span class="counter">76</span>+</h1>
                                    <p>Projects Completed</p>
                                </div>
                            </div>

                        </div>

                        <div class="space40"></div>

                        <div class="" data-aos="fade-left" data-aos-duration="1000">
                            <a href="{{ route('second', ['others', 'contact'])}}" class="theme-btn5">Plan Your Financial Future<span><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--=====about end=======-->

    <!--=====service start=======-->

    <div class="service5 sp3" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding5">
                        <h1 data-aos="fade-up" data-aos-duration="700">Services We Offered</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="900">Our team of experienced consultants combines
                            industry knowledge,
                            cutting-edge technology, and innovative strategies to guide you a brighter.</p>
                    </div>
                </div>
            </div>
            <div class="space30"></div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service5-box" data-aos="fade-up" data-aos-duration="700">
                        <div class="service5-icon">
                            <img src="/img/icons/service5-icon1.svg" alt="">
                        </div>
                        <div class="space20"></div>
                        <div class="hadding5">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">Financial Planning</a></h4>
                            <div class="service5-border"></div>
                            <p>We help optimize your capital
                                structure by assessing your...</p>

                            <div class="space16"></div>
                            <a href="{{ route('second', ['services', 'details'])}}" class="learn-more5">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service5-box" data-aos="fade-up" data-aos-duration="900">
                        <div class="service5-icon">
                            <img src="/img/icons/service5-icon2.svg" alt="">
                        </div>
                        <div class="space20"></div>
                        <div class="hadding5">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">Investment Advisory</a></h4>
                            <div class="service5-border"></div>
                            <p>We assist in identifying and to mitigating financial risk...</p>

                            <div class="space16"></div>
                            <a href="{{ route('second', ['services', 'details'])}}" class="learn-more5">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service5-box" data-aos="fade-up" data-aos-duration="1200">
                        <div class="service5-icon">
                            <img src="/img/icons/service5-icon3.svg" alt="">
                        </div>
                        <div class="space20"></div>
                        <div class="hadding5">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">Tax Strategy</a></h4>
                            <div class="service5-border"></div>
                            <p>We help optimize your capital
                                structure by assessing your...</p>

                            <div class="space16"></div>
                            <a href="{{ route('second', ['services', 'details'])}}" class="learn-more5">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="service5-box" data-aos="fade-up" data-aos-duration="800">
                        <div class="service5-icon">
                            <img src="/img/icons/service5-icon4.svg" alt="">
                        </div>
                        <div class="space20"></div>
                        <div class="hadding5">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">Risk Management</a></h4>
                            <div class="service5-border"></div>
                            <p>We assist in identifying and to mitigating financial risk...</p>

                            <div class="space16"></div>
                            <a href="{{ route('second', ['services', 'details'])}}" class="learn-more5">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


            </div>

            <div class="space40"></div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="" data-aos="fade-up" data-aos-duration="800">
                        <a href="{{ route('second', ['services', 'index'])}}" class="theme-btn5">View Our More Services<span><i
                                    class="fa-solid fa-angle-right"></i></span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--=====service end=======-->

    <!--=====industries start=======-->

    <div class="industries sp3" style="background-color: #1C1C57;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding5-w">
                        <h1 data-aos="fade-up" data-aos-duration="700">Industries we have served</h1>
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

    <!--=====industries end=======-->

    <!--=====testimonial start=======-->

    <div class="tes5 sp3" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding5">
                        <h1 data-aos="fade-up" data-aos-duration="700">Trusted by Our Customers</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="900">At Equity, we provide personalized and effective
                            solutions for a
                            wide range of legal needs. We are getting strength from our clients to deliver legal advice
                            suited</p>
                    </div>
                </div>
            </div>
            <div class="space30"></div>

            <div class="row">
                <div class="tes5-slider owl-carousel" data-aos="fade-up" data-aos-duration="900">
                    <div class="tes5-single-slider">
                        <div class="tes5-box">
                            <div class="tes-icon">
                                <img src="/img/icons/tes5-icon.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <ul class="tes5-icons">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="space20"></div>
                            <p>After the divorce is finalized, you may to need support with enforcing court best a of
                                finance orders,
                                making modifications, or addressing post-divorce issues.</p>
                        </div>
                        <div class="space50"></div>
                        <div class="tes5-bottom-hadding text-center">
                            <div class="tes5-img img50">
                                <img src="/img/image/tes5-img1.png" alt="">
                            </div>
                            <div class="space16"></div>
                            <h5><a href="#">Rodrygo De Paul</a></h5>
                            <div class="space10"></div>
                            <p>CEO, Paul Ltd</p>
                        </div>
                    </div>


                    <div class="tes5-single-slider">
                        <div class="tes5-box">
                            <div class="tes-icon">
                                <img src="/img/icons/tes5-icon.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <ul class="tes5-icons">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="space20"></div>
                            <p>After the divorce is finalized, you may to need support with enforcing court best a of
                                finance orders,
                                making modifications, or addressing post-divorce issues.</p>
                        </div>
                        <div class="space50"></div>
                        <div class="tes5-bottom-hadding text-center">
                            <div class="tes5-img img50">
                                <img src="/img/image/tes5-img1.png" alt="">
                            </div>
                            <div class="space16"></div>
                            <h5><a href="#">Mac Allister</a></h5>
                            <div class="space10"></div>
                            <p>CEO, Paul Ltd</p>
                        </div>
                    </div>


                    <div class="tes5-single-slider">
                        <div class="tes5-box">
                            <div class="tes-icon">
                                <img src="/img/icons/tes5-icon.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <ul class="tes5-icons">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="space20"></div>
                            <p>After the divorce is finalized, you may to need support with enforcing court best a of
                                finance orders,
                                making modifications, or addressing post-divorce issues.</p>
                        </div>
                        <div class="space50"></div>
                        <div class="tes5-bottom-hadding text-center">
                            <div class="tes5-img img50">
                                <img src="/img/image/tes5-img1.png" alt="">
                            </div>
                            <div class="space16"></div>
                            <h5><a href="#">Payelo Dibala</a></h5>
                            <div class="space10"></div>
                            <p>CEO, Paul Ltd</p>
                        </div>
                    </div>


                    <div class="tes5-single-slider">
                        <div class="tes5-box">
                            <div class="tes-icon">
                                <img src="/img/icons/tes5-icon.svg" alt="">
                            </div>
                            <div class="space16"></div>
                            <ul class="tes5-icons">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="space20"></div>
                            <p>After the divorce is finalized, you may to need support with enforcing court best a of
                                finance orders,
                                making modifications, or addressing post-divorce issues.</p>
                        </div>
                        <div class="space50"></div>
                        <div class="tes5-bottom-hadding text-center">
                            <div class="tes5-img img50">
                                <img src="/img/image/tes5-img1.png" alt="">
                            </div>
                            <div class="space16"></div>
                            <h5><a href="#">Rodrygo De Paul</a></h5>
                            <div class="space10"></div>
                            <p>CEO, Paul Ltd</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!--=====testimonial end=======-->

    <!--=====blog start=======-->

    <div class="blog5 sp3" id="blog" style="background-color: #F1F1F5;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding5">
                        <h1 data-aos="fade-up" data-aos-duration="700">Latest News and Blogs</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="900">Explore the world of smart investing with our latest
                            blog post.
                            This comprehensive guide offers insights and strategies to maximize your investment portfolio's
                            performance
                            and returns.</p>
                    </div>
                </div>
            </div>

            <div class="space30"></div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog5-box" data-aos="fade-up" data-aos-duration="900">
                        <div class="blog5-img img100">
                            <img src="/img/image/blog5-img1.png" alt="">
                        </div>
                        <div class="blog5-hadding">
                            <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Strategic Financial Planning for a Secure Future for best
                                    Services</a></h4>
                            <div class="space16"></div>
                            <p>Our goal is to empower you with the finance knowledge, strategies, our best finance.</p>
                            <div class="space16"></div>
                            <a href="{{ route('second', ['blog-details', 'index'])}}" class="blog5-learn">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog5-box" data-aos="fade-up" data-aos-duration="700">
                        <div class="blog5-img img100">
                            <img src="/img/image/blog5-img2.png" alt="">
                        </div>
                        <div class="blog5-hadding">
                            <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Navigating Tax Optimization: Smart Strategies for Financial</a>
                            </h4>
                            <div class="space16"></div>
                            <p>Our goal is to empower you with the finance knowledge, strategies, our best finance.</p>
                            <div class="space16"></div>
                            <a href="{{ route('second', ['blog-details', 'index'])}}" class="blog5-learn">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog5-box" data-aos="fade-up" data-aos-duration="1100">
                        <div class="blog5-img img100">
                            <img src="/img/image/blog5-img3.png" alt="">
                        </div>
                        <div class="blog5-hadding">
                            <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Market Trends 2023: What Best Finance Investors Need to
                                    Know</a></h4>
                            <div class="space16"></div>
                            <p>Our goal is to empower you with the finance knowledge, strategies, our best finance.</p>
                            <div class="space16"></div>
                            <a href="{{ route('second', ['blog-details', 'index'])}}" class="blog5-learn">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>


            </div>
            <div class="space40"></div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="" data-aos="fade-up" data-aos-duration="1000">
                        <a href="{{ route('second', ['blog', 'index'])}}" class="theme-btn5">Read More Blogs<span><i
                                    class="fa-solid fa-angle-right"></i></span></a>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <!--=====blog end=======-->

    <!--=====contact start=======-->

    <div class="contact5 sp3" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding5">
                        <h1 data-aos="fade-up" data-aos-duration="700">Get in Touch with Us Today</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="1100">Get in touch with our experienced immigration
                            lawyers today for
                            the best personalized support. Get fast and reliable results with our expert team.</p>
                    </div>
                </div>
            </div>

            <div class="space60"></div>
            <div class="contact-form-all" data-aos="zoom-out" data-aos-duration="700">
                <div class="row align-items-center">
                    <div class="col-lg-7">

                        <div class="hadding5">
                            <h3>Send Us A Message</h3>
                            <div class="space16"></div>
                            <p>Our response time is within 30 minutes during business hours</p>
                        </div>

                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact5-form-input">
                                        <input type="text" placeholder="First Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="contact5-form-input">
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="contact5-form-input">
                                        <input type="number" placeholder="Phone Number">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="contact5-form-input">
                                        <input type="email" placeholder="Email Address">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact5-form-input">
                                        <select class="wide contact5-select">
                                            <option value="">Service Type</option>

                                            <option value="">option 1</option>
                                            <option value="">Option 2</option>
                                            <option value="">Option 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact5-form-input">
                                        <textarea cols="30" rows="3" placeholder="Message"></textarea>
                                    </div>
                                    <div class="space24"></div>
                                    <button class="theme-btn5">Submit Now<span><i
                                                class="fa-solid fa-angle-right"></i></span></button>

                                </div>


                            </div>
                        </form>
                    </div>

                    <div class="col-lg-5">
                        <div class="contact5-boxs">
                            <div class="contact5-icon-box">
                                <div class="contact5-icon">
                                    <img src="/img/icons/contact5-iocn1.svg" alt="">
                                </div>
                                <div class="contact5-box-hadding">
                                    <h3>Contact us</h3>
                                    <div class="space16"></div>
                                    <a href="#">8708 Technology Forest Pl Suite 125 -G, The Woodlands, TX 77381</a>
                                </div>
                            </div>

                            <div class="contact5-icon-box">
                                <div class="contact5-icon">
                                    <img src="/img/icons/contact5-iocn2.svg" alt="">
                                </div>
                                <div class="contact5-box-hadding">
                                    <h3>Call or text</h3>
                                    <div class="space16"></div>
                                    <a href="#">123-456-7890</a>
                                </div>
                            </div>

                            <div class="contact5-icon-box">
                                <div class="contact5-icon">
                                    <img src="/img/icons/contact5-iocn1.svg" alt="">
                                </div>
                                <div class="contact5-box-hadding">
                                    <h3>Email us today</h3>
                                    <div class="space16"></div>
                                    <a href="#">info@taxvice.com</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--=====contact end=======-->


    <!--=====Footer start=======-->
    @include('components/footer2', [
        'areaNum' => '5',
        'bgColor' => '1C1C57',
        'logo' => '/img/logo/footer5-logo.svg',
        'socialClass' => 'social5',
        'btnClass' => 'theme-btn5',
    ])
@endsection
