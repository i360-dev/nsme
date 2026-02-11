@extends('layouts.base', ['title' => 'Home 2 || Advisr Tax Consulting', 'logo' => '/img/logo/titel1.svg'])

@section('body_attribute')
    class="font-f-3"
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
                                <a href="{{ route('second',['landing', 'index'])}}"><img src="/img/logo/header1-logo.svg" alt="" />
                                </a>
                            </div>


                            <div class="main-menu-ex main-menu-ex1">
                                <ul>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#service">Service</a></li>
                                    <li><a href="#case">Case Study</a></li>
                                    <li><a href="#testimonial">Testimonial</a></li>
                                    <li><a href="#blog">Blog</a></li>

                                </ul>
                            </div>



                            <div class="home2-header-buttons">
                                <div class="button1-all">
                                    <a href="{{ route('second', ['others', 'contact'])}}" class="btn_theme btn_theme_active wow fadeInDown"
                                        data-wow-duration="0.8s">Get Started<span></span></a>
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
    <div class="main-hero main-hero1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="main-hadding">
                        <h1 data-aos="fade-right" data-aos-duration="700">Unlock Your HR <br> Potential with Strategic
                            Consulting
                            Services</h1>
                        <div class="space24"></div>
                        <p data-aos="fade-right" data-aos-duration="800">Maximize Your Human Capital and Drive
                            Organizational Success.
                            We help business <br> to perform with our customized solution helping them take business. </p>
                        <div class="space40"></div>
                        <div class="header1-buttons" data-aos="fade-right" data-aos-duration="1000">
                            <div class="button1-all">
                                <a href="{{ route('second', ['others', 'contact'])}}" class="btn_theme btn_theme_active mt_40 wow fadeInDown"
                                    data-wow-duration="0.8s">Schedule A Consultation<span></span></a>
                            </div>
                            <div class="header1-button-all">
                                <a href="{{ route('second', ['others', 'contact'])}}" class="btn_theme2 btn_theme btn_theme_active2 wow fadeInDown2"
                                    data-wow-duration="0.8s">Contact Us<span></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 text-center">
                    <div class="hero1-image-all">
                        <div class="hero1-img-1 aniamtion-key-1">
                            <img src="/img/shapes/header1-shape.svg" alt="">
                        </div>
                        <div class="hero1-img-2 border90" data-aos="zoom-out" data-aos-duration="1000">
                            <img src="/img/image/header-img1.png" alt="">
                        </div>
                        <div class="hero1-img-3 border90" data-aos="zoom-out" data-aos-duration="800">
                            <img src="/img/image/header-img2.png" alt="">
                        </div>
                        <div class="hero1-img-4" data-aos="zoom-out" data-aos-duration="800">
                            <div class="hero-counter-box">
                                <div class="hero-counter-text">
                                    <h1>16</h1>
                                    <p>Years <br> Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--=====Hero end=======-->

    <!--=====brand start=======-->

    <!-- <div class="brand-area">
                <dive class="brand-area-all owl-carousel" behavior="infinite">
                  <div class="brand-single-box">
                    <img src="/img/logo/brand-logo1.svg" alt="">
                  </div>
                  <div class="brand-single-box">
                    <img src="/img/logo/brand-logo2.svg" alt="">
                  </div>
                  <div class="brand-single-box">
                    <img src="/img/logo/brand-logo3.svg" alt="">
                  </div>
                  <div class="brand-single-box">
                    <img src="/img/logo/brand-logo4.svg" alt="">
                  </div>
                  <div class="brand-single-box">
                    <img src="/img/logo/brand-logo5.svg" alt="">
                  </div>
                  <div class="brand-single-box">
                    <img src="/img/logo/brand-logo6.svg" alt="">
                  </div>
                  <div class="brand-single-box">
                    <img src="/img/logo/brand-logo7.svg" alt="">
                  </div>
                  <div class="brand-single-box">
                    <img src="/img/logo/brand-logo8.svg" alt="">
                  </div>
                  <div class="brand-single-box">
                    <img src="/img/logo/brand-logo1.svg" alt="">
                  </div>
                  <div class="brand-single-box">
                    <img src="/img/logo/brand-logo2.svg" alt="">
                  </div>
                  <div class="brand-single-box">
                    <img src="/img/logo/brand-logo3.svg" alt="">
                  </div>
                  <div class="brand-single-box">
                    <img src="/img/logo/brand-logo4.svg" alt="">
                  </div>
                  <div class="brand-single-box">
                    <img src="/img/logo/brand-logo5.svg" alt="">
                  </div>
                  <div class="brand-single-box">
                    <img src="/img/logo/brand-logo6.svg" alt="">
                  </div>
                  <div class="brand-single-box">
                    <img src="/img/logo/brand-logo7.svg" alt="">
                  </div>
                  <div class="brand-single-box">
                    <img src="/img/logo/brand-logo8.svg" alt="">
                  </div>
                  
                </div>
              </div> -->


    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="marquee-wrap">
                        <div class="marquee-text">

                            <div class="brand-single-box">
                                <img src="/img/logo/brand-logo1.svg" alt="">
                            </div>

                            <div class="brand-single-box">
                                <img src="/img/logo/brand-logo2.svg" alt="">
                            </div>

                            <div class="brand-single-box">
                                <img src="/img/logo/brand-logo3.svg" alt="">
                            </div>

                            <div class="brand-single-box">
                                <img src="/img/logo/brand-logo4.svg" alt="">
                            </div>

                            <div class="brand-single-box">
                                <img src="/img/logo/brand-logo5.svg" alt="">
                            </div>

                            <div class="brand-single-box">
                                <img src="/img/logo/brand-logo6.svg" alt="">
                            </div>

                            <div class="brand-single-box">
                                <img src="/img/logo/brand-logo7.svg" alt="">
                            </div>

                            <div class="brand-single-box">
                                <img src="/img/logo/brand-logo8.svg" alt="">
                            </div>

                            <div class="brand-single-box">
                                <img src="/img/logo/brand-logo1.svg" alt="">
                            </div>

                            <div class="brand-single-box">
                                <img src="/img/logo/brand-logo2.svg" alt="">
                            </div>

                            <div class="brand-single-box">
                                <img src="/img/logo/brand-logo3.svg" alt="">
                            </div>

                            <div class="brand-single-box">
                                <img src="/img/logo/brand-logo4.svg" alt="">
                            </div>

                            <div class="brand-single-box">
                                <img src="/img/logo/brand-logo5.svg" alt="">
                            </div>

                            <div class="brand-single-box">
                                <img src="/img/logo/brand-logo6.svg" alt="">
                            </div>

                            <div class="brand-single-box">
                                <img src="/img/logo/brand-logo7.svg" alt="">
                            </div>

                            <div class="brand-single-box">
                                <img src="/img/logo/brand-logo8.svg" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====brand end=======-->

    <!--=====service start=======-->
    <div class="service1 sp3" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="hadding1">
                        <h1 class="square" data-aos="fade-up" data-aos-duration="700">Cosulting Services We Offered</h1>
                        <div class="space24"></div>
                        <p data-aos="fade-up" data-aos-duration="900">Our team of experienced consultants combines
                            industry knowledge,
                            cutting-edge technology, and innovative strategies to guide you towards a brighter and greener
                            future.
                        </p>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="" data-aos="fade-up" data-aos-duration="700">
                        <div class="service1-box">
                            <div class="">
                                <div class="service1-box-icon">
                                    <img src="/img/icons/service1-icon1.svg" alt="">
                                </div>
                            </div>
                            <div class="hadding1 text-start">
                                <h2><a href="{{ route('second', ['services', 'details'])}}">HR Strategy and Planning</a></h2>
                                <div class="space14"></div>
                                <p>Our expert consultants work with you to develop a comprehensive HR strategy aligned with
                                    your business
                                    goals. We assess your current HR </p>
                                <div class="space24"></div>
                                <a class="learn-more1" href="{{ route('second', ['services', 'details'])}}">Read More<span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="" data-aos="fade-up" data-aos-duration="800">
                        <div class="service1-box">
                            <div class="">
                                <div class="service1-box-icon">
                                    <img src="/img/icons/service1-icon2.svg" alt="">
                                </div>
                            </div>
                            <div class="hadding1 text-start">
                                <h2><a href="{{ route('second', ['services', 'details'])}}">HR Compliance and Policies</a></h2>
                                <div class="space14"></div>
                                <p>We ensure your HR policies and procedures are compliant with local labor laws and
                                    regulations. Our
                                    consultants review and update your employee handbook,</p>
                                <div class="space24"></div>
                                <a class="learn-more1" href="{{ route('second', ['services', 'details'])}}">Read More<span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="" data-aos="fade-up" data-aos-duration="900">
                        <div class="service1-box">
                            <div class="">
                                <div class="service1-box-icon">
                                    <img src="/img/icons/service1-icon3.svg" alt="">
                                </div>
                            </div>
                            <div class="hadding1 text-start">
                                <h2><a href="{{ route('second', ['services', 'details'])}}">HR Technology Solutions</a></h2>
                                <div class="space14"></div>
                                <p>We ensure your HR policies and procedures are compliant with local labor laws and
                                    regulations. Our
                                    consultants review and update your employee handbook,</p>
                                <div class="space24"></div>
                                <a class="learn-more1" href="{{ route('second', ['services', 'details'])}}">Read More<span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="" data-aos="fade-up" data-aos-duration="700">
                        <div class="service1-box">
                            <div class="">
                                <div class="service1-box-icon">
                                    <img src="/img/icons/service1-icon4.svg" alt="">
                                </div>
                            </div>
                            <div class="hadding1 text-start">
                                <h2><a href="{{ route('second', ['services', 'details'])}}">Organizational Change Management</a></h2>
                                <div class="space14"></div>
                                <p>We ensure your HR policies and procedures are compliant with local labor laws and
                                    regulations. Our
                                    consultants review and update your employee handbook,</p>
                                <div class="space24"></div>
                                <a class="learn-more1" href="{{ route('second', ['services', 'details'])}}">Read More<span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="space40"></div>
            <div class="row" data-aos="fade-up" data-aos-duration="700">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('second', ['services', 'details'])}}" class="btn_theme btn_theme btn_theme_active wow fadeInDown1"
                        data-wow-duration="0.8s">View All Services<span></span></a>
                </div>
            </div>
        </div>
    </div>
    <!--=====service end=======-->

    <!--=====about start=======-->
    <div class="about1 sp3" id="about" style="background-color: #EFF0F7;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about1-image-all">
                        <div class="about-1-img1 aniamtion-key-1">
                            <img src="/img/shapes/about1-shape1.svg" alt="">
                        </div>
                        <div class="about-1-img2 border5" data-aos="fade-down" data-aos-duration="700">
                            <img src="/img/image/about1-img1.png" alt="">
                        </div>
                        <div class="about-1-img3 border5" data-aos="fade-left" data-aos-duration="700">
                            <img src="/img/image/about1-img2.png" alt="">
                        </div>
                        <div class="about-1-img4" data-aos="fade-up" data-aos-duration="700">
                            <div class="about-counter-box">
                                <div class="about-counter-text">
                                    <h1>16</h1>
                                    <p>Years <br> Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hadding1 about1-hadding">
                        <h1 class="titleGreathorned" data-aos="fade-left" data-aos-duration="700">Partner with Our
                            Trusted Consultants
                            Today.</h1>
                        <div class="space24"></div>
                        <p data-aos="fade-left" data-aos-duration="900">At Advisor Consulting Company, we are a trusted
                            business
                            consulting firm dedicated to helping businesses thrive and reach their full potential.Our team
                            of
                            experienced consultants brings diverse industry </p>
                        <div class="space20"></div>
                        <p data-aos="fade-left" data-aos-duration="700">knowledge and expertise in various business
                            disciplines.We
                            prioritize understanding your unique challenges and goals to deliver customized solutions
                            tailored to your
                            specific needs</p>
                        <div class="space40"></div>
                        <a href="{{ route('second', ['services', 'index'])}}" data-aos="fade-left" data-aos-duration="900"
                            class="btn_theme btn_theme btn_theme_active wow fadeInDown1" data-wow-duration="0.8s">More
                            About
                            Us<span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====about end=======-->

    <!--=====case start=======-->
    <div class="case-studies sp3" id="case">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="hadding1">
                        <h1 data-aos="fade-up" data-aos-duration="700">Featured Case Studies</h1>
                        <div class="space24"></div>
                        <p data-aos="fade-up" data-aos-duration="800">Consulting service is a key part of the future of
                            energy. It can
                            help you save money on your electricity bill, and it can also help to reduce your carbon
                            footprint.</p>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="case-box-all" data-aos="fade-up" data-aos-duration="700">
                        <div class="case-box-img img100 border5">
                            <img src="/img/image/case1-img1.png" alt="">
                        </div>
                        <div class="case-box-after">
                            <div class="case-box-hover">
                                <div class="case-hover-hadding">
                                    <h4><a href="{{ route('second', ['pages', 'case-details1'])}}">Financial Investment</a></h4>
                                    <div class="space14"></div>
                                    <div class="hover-block">
                                        <p> Describe the HR challenges faced by the client and how your the
                                            solutions helped them achieve significant </p>
                                        <div class="space24"></div>
                                        <div class="case-hover-icon2">
                                            <a href="{{ route('second', ['pages', 'case-details1'])}}"><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="case-hover-icon">
                                    <a href="{{ route('second', ['pages', 'case-details1'])}}"><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="case-box-all" data-aos="fade-up" data-aos-duration="900">
                        <div class="case-box-img img100 border5">
                            <img src="/img/image/case1-img2.png" alt="">
                        </div>
                        <div class="case-box-after">
                            <div class="case-box-hover">
                                <div class="case-hover-hadding">
                                    <h4><a href="{{ route('second', ['pages', 'case-details1'])}}">HR Consulting</a></h4>
                                    <div class="space14"></div>
                                    <div class="hover-block">
                                        <p> Describe the HR challenges faced by the client and how your the
                                            solutions helped them achieve significant </p>
                                        <div class="space24"></div>
                                        <div class="case-hover-icon2">
                                            <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="case-hover-icon">
                                    <a href="{{ route('second', ['pages', 'case-details1'])}}"><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--=====case end=======-->

    <!--=====counter start=======-->
    <div class="counter1" style="background-color: #03163B; padding: 80px 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-6">
                    <div class="counter1-hadding" data-aos="zoom-out" data-aos-duration="900">
                        <div class="counter-hadding-h">
                            <h1><span class="counter">90</span>%</h1>
                        </div>
                        <div class="counter-hadding-p">
                            <p>Projects <br>
                                Success Rate</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-6 text-center">
                    <div class="counter1-hadding" data-aos="zoom-out" data-aos-duration="700">
                        <div class="counter-hadding-h">
                            <h1><span class="counter">255</span></h1>
                        </div>
                        <div class="counter-hadding-p">
                            <p>Number of <br>
                                installations</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-6 text-center">
                    <div class="counter1-hadding" data-aos="zoom-out" data-aos-duration="800">
                        <div class="counter-hadding-h">
                            <h1><span class="counter">50</span>k+</h1>
                        </div>
                        <div class="counter-hadding-p">
                            <p>Total CO2 <br>
                                Offset (Tons)</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6 col-sm-6 text-center">
                    <div class="counter1-hadding" data-aos="zoom-out" data-aos-duration="700">
                        <div class="counter-hadding-h">
                            <h1><span class="counter">255</span></h1>
                        </div>
                        <div class="counter-hadding-p">
                            <p>Number of <br>
                                installations</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="counter1-bg-img aniamtion-key-1">
            <img src="/img/shapes/counter-shape.svg" alt="">
        </div>
    </div>

    <!--=====counter end=======-->

    <!--=====testimonial start=======-->
    <div class="testimonial1 sp3" id="testimonial">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="testimonial1-image-all text-center">
                        <div class="testimonial1-img1">
                            <img src="/img/shapes/testimonial-shape.svg" alt="">
                        </div>
                        <div class="testimonial1-img2" data-aos="fade-up-left" data-aos-duration="700">
                            <img src="/img/image/testimonial1-img1.png" alt="">
                        </div>
                        <div class="testimonial1-img3" data-aos="fade-up-right" data-aos-duration="700">
                            <img src="/img/image/testimonial1-img2.png" alt="">
                        </div>
                        <div class="testimonial1-img4" data-aos="fade-down-right" data-aos-duration="700">
                            <img src="/img/image/testimonial1-img3.png" alt="">
                        </div>
                        <div class="testimonial1-img5" data-aos="fade-down-left" data-aos-duration="700">
                            <img src="/img/image/testimonial1-img4.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="trusred-slider-all owl-carousel">
                        <div class="testimonial1-hadding">
                            <div class="testimonial-stars">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                            <p>
                                “Professional, knowledgeable, and results-driven. Advisor the Consulting guided us through a
                                complex
                                organizational change, ensuring a smooth transition and positive employee engagement." .
                                Their strategic
                                insights and guidance helped us double our revenue within a year."
                            </p>
                            <div class="space24"></div>
                            <div class="slider1-bottom">
                                <h4>
                                    <a href="#">John Smith </a>
                                </h4>
                                <div class="space8"></div>
                                <p>
                                    CEO of XYZ Company
                                </p>
                            </div>
                        </div>

                        <div class="testimonial1-hadding">
                            <div class="testimonial-stars">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                            <p>
                                “Professional, knowledgeable, and results-driven. Advisor the Consulting guided us through a
                                complex
                                organizational change, ensuring a smooth transition and positive employee engagement." .
                                Their strategic
                                insights and guidance helped us double our revenue within a year."
                            </p>
                            <div class="space24"></div>
                            <div class="slider1-bottom">
                                <h4>
                                    <a href="#">John Smith </a>
                                </h4>
                                <div class="space8"></div>
                                <p>
                                    CEO of XYZ Company
                                </p>
                            </div>
                        </div>

                        <div class="testimonial1-hadding">
                            <div class="testimonial-stars">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                            <p>
                                “Professional, knowledgeable, and results-driven. Advisor the Consulting guided us through a
                                complex
                                organizational change, ensuring a smooth transition and positive employee engagement." .
                                Their strategic
                                insights and guidance helped us double our revenue within a year."
                            </p>
                            <div class="space24"></div>
                            <div class="slider1-bottom">
                                <h4>
                                    <a href="#">John Smith </a>
                                </h4>
                                <div class="space8"></div>
                                <p>
                                    CEO of XYZ Company
                                </p>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
    <!--=====testimonial end=======-->

    <!--=====cta start=======-->
    <div class="subscribe1 sp3" style="background-color: #03163B; padding: 80px 0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="cta-hadding1">
                        <h1 class="font-w" data-aos="fade-right" data-aos-duration="700">Take advantage of a consultation
                        </h1>
                        <div class="space24"></div>
                        <p data-aos="fade-right" data-aos-duration="900">Take advantage of a one on one consultation with
                            our tax
                            experts. We'll assess your unique situation and provide personalized advice and strategies.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <div class="cta1-buttons">
                        <a href="{{ route('second', ['services', 'details'])}}" data-aos="fade-up" data-aos-duration="700"
                            class="btn_theme2 btn_theme btn_theme2 btn_theme_active2 wow fadeInDown1"
                            data-wow-duration="0.8s">Schedule
                            A Consultation<span></span></a>
                        <a href="{{ route('second', ['services', 'details'])}}" data-aos="fade-up" data-aos-duration="900"
                            class="btn_theme3 btn_theme btn_theme_active3 wow fadeInDown2"
                            data-wow-duration="0.8s">Contact
                            Us<span></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="subscribe-img aniamtion-key-1">
            <img src="/img/shapes/counter-shape.svg" alt="">
        </div>
    </div>
    <!--=====cta end=======-->

    <!--=====blog start=======-->
    <div class="blog1 sp3" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="hadding1">
                        <h1 data-aos="fade-up" data-aos-duration="700">Latest News and Blogs</h1>
                        <div class="space24"></div>
                        <p data-aos="fade-up" data-aos-duration="900">Consulting service is a key part of the future of
                            energy. It can
                            help you save money on your electricity bill, and it can also help to reduce your carbon
                            footprint.</p>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">

                <div class="col-lg-4">
                    <div class="" data-aos="fade-up" data-aos-duration="700">
                        <div class="blog1-single-box">
                            <div class="blog1-box-img border5 img100">
                                <img src="/img/image/blog1-img1.png" alt="">
                            </div>
                            <div class="blog1-hadding">
                                <ul>
                                    <li><a href="#" class="span">15 March, 2023</a></li>
                                </ul>
                                <div class="space14"></div>
                                <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Customized Solutions: Based on our analysis, we develop
                                    </a></h4>
                                <div class="space30"></div>
                                <a class="learn-more1" href="{{ route('second', ['blog-details', 'index'])}}">Read More<span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="" data-aos="fade-up" data-aos-duration="900">
                        <div class="blog1-single-box active">
                            <div class="blog1-box-img border5 img100">
                                <img src="/img/image/blog1-img2.png" alt="">
                            </div>
                            <div class="blog1-hadding">
                                <ul>
                                    <li><a href="#" class="span">19 March, 2023</a></li>
                                </ul>
                                <div class="space14"></div>
                                <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Our commitment doesn't end with implementation. </a></h4>
                                <div class="space30"></div>
                                <a class="learn-more1" href="{{ route('second', ['blog-details', 'index'])}}">Read More<span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="" data-aos="fade-up" data-aos-duration="1100">
                        <div class="blog1-single-box">
                            <div class="blog1-box-img border5 img100">
                                <img src="/img/image/blog1-img3.png" alt="">
                            </div>
                            <div class="blog1-hadding">
                                <ul>
                                    <li><a href="#" class="span">22 April, 2023</a></li>
                                </ul>
                                <div class="space14"></div>
                                <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Explore our regularly updated blog, where we share expert
                                    </a></h4>
                                <div class="space30"></div>
                                <a class="learn-more1" href="{{ route('second', ['blog-details', 'index'])}}">Read More<span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="space40"></div>
            <div class="row" data-aos="fade-up" data-aos-duration="700">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('second', ['blog', 'index'])}}" class="btn_theme btn_theme btn_theme_active wow fadeInDown1"
                        data-wow-duration="0.8s">View
                        Blogs<span></span></a>
                </div>
            </div>
        </div>
    </div>

    <!--=====blog end=======-->

    <!--=====Footer start=======-->
    <footer class="footer-area padding-top footer-4 inner-font-1 inner-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer mr50">
                        <a href="{{ route('second',['landing', 'index'])}}" class="footer-logo">
                            <img src="/img/logo/header1-logo.svg" alt="" /></a>
                        <div class="space20"></div>
                        <p>
                            Our policies are underwritten by large partner A.M. Best top rated carriers, meaning you will be
                            protected
                            by the best. See our featured carrier list here.
                        </p>
                    </div>
                </div>
                <div class="col-lg col-sm-6">
                    <div class="single-footer">
                        <h3>Company</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="{{ route('second',['landing', 'index'])}}">Home</a></li>
                                <li><a href="{{ route('second', ['others', 'about'])}}">About</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="{{ route('second', ['blog', 'index'])}}">Blogs</a></li>
                                <li><a href="{{ route('second', ['others', 'contact'])}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-sm-6">
                    <div class="single-footer">
                        <h3>Useful Links</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Strategy Consulting</a></li>
                                <li><a href="#">Financial Consulting</a></li>
                                <li><a href="#">Marketing Consulting</a></li>
                                <li><a href="#">Operations Consulting</a></li>
                                <li><a href="#">Marketing Consulting</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-footer">
                        <h3>Subscribe to our newsletter</h3>

                        <div class="footer-subscribe-area">
                            <div class="hadding1">
                                <p>Consulting service is a key part of the future of energy. It can help you save money on
                                    your .</p>
                            </div>
                            <div class="space24"></div>
                            <div class="footer-contact-input">
                                <div class="input-footer">
                                    <div class="">
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="button-footer">
                                    <button class="btn_theme btn_theme btn_theme_active wow fadeInDown1"
                                        data-wow-duration="0.8s">Subscribe<span></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center copyright2">
                <div class="col-lg-6">
                    <p class="copyright-p">© Copyright 2023 Advisor Consulting Ltd. <br>
                    </p>
                    <ul class="Conditions">
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <div class="social social">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" title="Linked in" href="#"><i
                                        class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" title="Facebook" href="#"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" title="Instagram" href="#"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" title="TikTok" href="#"><i
                                        class="fa-brands fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
