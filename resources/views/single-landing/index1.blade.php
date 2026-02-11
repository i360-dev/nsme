@extends('layouts.base', ['title' => 'Shop || Business Consulting Consulting', 'logo' => '/img/logo/titel2.svg'])

@section('body_attribute')
    class="font-f-2"
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
                                <a href="{{ route('second',['landing', 'index'])}}"><img src="/img/logo/header2-logo.svg" alt="" />
                                </a>
                            </div>



                            <div class="main-menu-ex main-menu-ex2">
                                <ul>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#service">Service</a></li>
                                    <li><a href="#choose">Choose Us</a></li>
                                    <li><a href="#testimonial">Testimonial</a></li>
                                    <li><a href="#blog">Blog</a></li>

                                </ul>
                            </div>



                            <div class="home2-header-buttons">
                                <div class="button2-all">
                                    <a href="{{ route('second', ['others', 'contact'])}}" class="button-h-2 btnfos2">Get Started</a>
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
    <div class="main-hero main-hero2" style="background-color: #EDF2F6;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="main-hadding2">
                        <span class="span" data-aos="fade-right" data-aos-duration="700">Welcome to Business
                            Advisor</span>
                        <div class="space16"></div>
                        <h1 data-aos="fade-right" data-aos-duration="700">Transform Your <span
                                class="after2">Business</span> with
                            Expert Consulting Services</h1>
                        <div class="space24"></div>
                        <p data-aos="fade-right" data-aos-duration="900">Unlock Your Potential and Drive Growth. We help
                            business to
                            perform with our <br> customized solutions helping them take business decisions.</p>
                        <div class="space40"></div>
                        <div class="header2-buttons" data-aos="fade-right" data-aos-duration="700">

                            <div class="button2-all">
                                <a href="{{ route('second', ['others', 'contact'])}}" class="button-h-2 btnfos2">Schedule A Consultation</a>
                            </div>
                            <div class="button2-all2">
                                <a href="{{ route('second', ['others', 'contact'])}}" class="button-h2-2 btnfos3">Contact Us</a>
                            </div>
                        </div>
                        <div class="space40"></div>
                        <div class="brand2-slider-all" data-aos="fade-right" data-aos-duration="800">
                            <h4>Our Trusted Partner:</h4>
                            <div class="space24"></div>
                            <div class="brand2-slider owl-carousel">
                                <div class="brand2-logo">
                                    <img src="/img/logo/brand2-logo1.svg" alt="">
                                </div>

                                <div class="brand2-logo">
                                    <img src="/img/logo/brand2-logo2.svg" alt="">
                                </div>

                                <div class="brand2-logo">
                                    <img src="/img/logo/brand2-logo3.svg" alt="">
                                </div>

                                <div class="brand2-logo">
                                    <img src="/img/logo/brand2-logo4.svg" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 text-center">
                    <div class="hero2-image-all1">
                        <div class="">
                            <div class="hero2-img1 img100 border-70" data-aos="zoom-out" data-aos-duration="700">
                                <img src="/img/image/header2-img1.png" alt="">
                            </div>
                        </div>
                        <div class="#">
                            <div class="hero2-img2 img100 border-70" data-aos="zoom-out" data-aos-duration="800">
                                <img src="/img/image/header2-img2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="space20"></div>
                    <div class="hero2-img3 img100 border-80" data-aos="zoom-out" data-aos-duration="900">
                        <img src="/img/image/header2-img3.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--=====Hero end=======-->

    <!--=====about end=======-->
    <div class="about2 sp3" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about2-images">
                        <div class="about2-img1 aniamtion-key-1">
                            <img src="/img/shapes/home2-main-shape.svg" alt="">
                        </div>
                        <div class="about2-img2 border-70" data-aos="zoom-out" data-aos-duration="800">
                            <img src="/img/image/about2-image.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hadding2 about2-hadding">
                        <span class="span" data-aos="fade-left" data-aos-duration="700">About Us</span>
                        <div class="space16"></div>
                        <h1 data-aos="fade-left" data-aos-duration="800">Partner with Our <span
                                class="after2">Trusted</span>
                            Consultants Today.</h1>
                        <div class="space24"></div>
                        <p data-aos="fade-left" data-aos-duration="1000">At Advisor Consulting Company, we are a trusted
                            business
                            consulting firm dedicated to helping businesses thrive and reach their full potential.
                            Our team of experienced consultants brings diverse industry knowledge and expertise in various
                            business
                            disciplines.We prioritize understanding</p>
                        <div class="space20"></div>
                        <p data-aos="fade-left" data-aos-duration="700">your unique challenges and goals to deliver
                            customized
                            solutions tailored to your specific needsWe are committed to providing exceptional service
                            innovative
                            strategies, and tangible results for our clients.</p>

                        <div class="space40"></div>
                        <a href="{{ route('second', ['others', 'about'])}}" class="button-h-2 btnfos2">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====about end=======-->

    <!--=====service end=======-->
    <div class="service2 sp3" id="service" style="background-color: #254969;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding2-w">
                        <span class="span" data-aos="fade-up" data-aos-duration="700">Our Service</span>
                        <div class="space16"></div>
                        <h1 data-aos="fade-up" data-aos-duration="900"><span class="after2">Cosulting</span> Services We
                            Offered</h1>
                        <div class="space24"></div>
                        <p data-aos="fade-up" data-aos-duration="1100">Our team of experienced consultants combines
                            industry
                            knowledge, cutting-edge technology, and innovative strategies to guide you towards a brighter
                            and greener
                            future.</p>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="" data-aos="fade-up" data-aos-duration="700">
                        <div class="service2-box">
                            <div class="serivce2-icon">
                                <img src="/img/icons/service2-icon1.svg" alt="">
                            </div>
                            <div class="space24"></div>
                            <div class="service2-hadding hadding2-w">
                                <h4><a href="{{ route('second', ['services', 'details'])}}">Strategy Consulting</a></h4>
                                <div class="space14"></div>
                                <p>Our experienced consultants help develop strategic plans to drive business growth,
                                    improve operations,
                                    and achieve long-term...</p>
                                <div class="space24"></div>
                                <a class="read-more-btn-w" href="{{ route('second', ['services', 'details'])}}">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="" data-aos="fade-up" data-aos-duration="900">
                        <div class="service2-box">
                            <div class="serivce2-icon">
                                <img src="/img/icons/service2-icon1.svg" alt="">
                            </div>
                            <div class="space24"></div>
                            <div class="service2-hadding hadding2-w">
                                <h4><a href="{{ route('second', ['services', 'details'])}}">Marketing Consulting</a></h4>
                                <div class="space14"></div>
                                <p>Our experienced consultants help develop strategic plans to drive business growth,
                                    improve operations,
                                    and achieve long-term...</p>
                                <div class="space24"></div>
                                <a class="read-more-btn-w" href="{{ route('second', ['services', 'details'])}}">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="" data-aos="fade-up" data-aos-duration="800">
                        <div class="service2-box">
                            <div class="serivce2-icon">
                                <img src="/img/icons/service2-icon1.svg" alt="">
                            </div>
                            <div class="space24"></div>
                            <div class="service2-hadding hadding2-w">
                                <h4><a href="{{ route('second', ['services', 'details'])}}">Financial Consulting</a></h4>
                                <div class="space14"></div>
                                <p>Our experienced consultants help develop strategic plans to drive business growth,
                                    improve operations,
                                    and achieve long-term...</p>
                                <div class="space24"></div>
                                <a class="read-more-btn-w" href="{{ route('second', ['services', 'details'])}}">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="" data-aos="fade-up" data-aos-duration="1000">
                        <div class="service2-box">
                            <div class="serivce2-icon">
                                <img src="/img/icons/service2-icon1.svg" alt="">
                            </div>
                            <div class="space24"></div>
                            <div class="service2-hadding hadding2-w">
                                <h4><a href="#">Operations Consulting</a></h4>
                                <div class="space14"></div>
                                <p>Our experienced consultants help develop strategic plans to drive business growth,
                                    improve operations,
                                    and achieve long-term...</p>
                                <div class="space24"></div>
                                <a class="read-more-btn-w" href="{{ route('second', ['services', 'details'])}}">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="space40"></div>
            <div class="row" data-aos="fade-up" data-aos-duration="800">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('second', ['services', 'index'])}}" class="button-h-2 btnfos2">View All Service</a>
                </div>
            </div>
        </div>
    </div>

    <!--=====service end=======-->

    <!--=====choose start=======-->

    <div class="choose2 sp3" id="choose">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hadding2">
                        <span class="span" data-aos="fade-right" data-aos-duration="700">Why Choose Us</span>
                        <div class="space16"></div>
                        <h1 data-aos="fade-right" data-aos-duration="900">We Provide A Professional Business <span
                                class="after2">Solutions</span></h1>
                        <div class="space24"></div>
                        <p data-aos="fade-right" data-aos-duration="800">At Advisor Consulting Company, we are a trusted
                            business
                            consulting firm dedicated to helping businesses thrive and reach their full potential.Our team
                            of
                            experienced consultants brings diverse industry knowledge and expertise in various business
                            disciplines.</p>
                        <div class="space20"></div>
                        <p data-aos="fade-right" data-aos-duration="1000">
                            We prioritize understanding your unique challenges and goals to deliver customized solutions
                            tailored to
                            your specific needs</p>

                        <div class="counter-boxs" data-aos="fade-right" data-aos-duration="800">
                            <div class="counter2-box">
                                <h2><span class="counter">76</span></h2>
                                <p>Projects <br> Completed</p>
                            </div>
                            <div class="counter2-box">
                                <h2><span class="counter">14</span></h2>
                                <p>Years of <br> Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <div class="choose2-images">
                        <div class="choose2-img1 aniamtion-key-1">
                            <img src="/img/shapes/home2-main-shape.svg" alt="">
                        </div>
                        <div class="choose2-img2 border-70" data-aos="zoom-out" data-aos-duration="800">
                            <img src="/img/image/about2-image.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====choose end=======-->

    <!--=====cta start=======-->
    <div class="cta2"
        style="background-image: url(/img/bg/cta2-bg.png); background-position: center; background-repeat: no-repeat; background-size: cover; background-attachment: fixed; padding: 70px 0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hadding2-w">
                        <h1 data-aos="fade-up" data-aos-duration="700">Take <span class="after2">advantage</span> of a
                            consultation
                        </h1>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <div class="header2-buttons header2-buttons2">
                        <div class="button2-all" data-aos-duration="800" data-aos="fade-up">
                            <a href="{{ route('second', ['services', 'details'])}}" class="button-h-2 btnfos2">Schedule A Consultation</a>
                        </div>
                        <div class="button2-all2" data-aos-duration="800" data-aos="fade-down">
                            <a href="#" class="button-h2-2 btnfos4">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====cta end=======-->

    <!--=====projects start=======-->
    <div class="projects sp3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hadding2">
                        <span class="span" data-aos-duration="700" data-aos="fade-up">Our Projects</span>
                        <div class="space16"></div>
                        <h1 data-aos-duration="900" data-aos="fade-up">Featured Case <span class="after2">Studies</span>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <div class="project-button" data-aos-duration="800" data-aos="fade-up">
                        <a href="{{ route('second', ['others', 'cart'])}}" class="button-h-2 btnfos2">View Full Projects</a>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="project-all-box" data-aos-duration="800" data-aos="fade-up">
                        <div class="project-img img100">
                            <img src="/img/image/project-img1.png" alt="">
                        </div>
                        <div class="project-box">
                            <div class="project-hadding hadding2-w">
                                <h4><a href="{{ route('second', ['pages', 'case-details1'])}}">Strategy Consulting</a></h4>
                                <div class="space14"></div>
                                <p>Our experienced consultants help develop strategic plans to drive business growth,
                                    improve operations,
                                    and achieve long-term...</p>
                                <div class="space24"></div>
                                <a class="read-more-btn-w" href="{{ route('second', ['pages', 'case-details1'])}}">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="project-all-box" data-aos-duration="1000" data-aos="fade-up">
                        <div class="project-img img100">
                            <img src="/img/image/project-img2.png" alt="">
                        </div>
                        <div class="project-box">
                            <div class="project-hadding hadding2-w">
                                <h4><a href="{{ route('second', ['pages', 'case-details1'])}}">ABC Company</a></h4>
                                <div class="space14"></div>
                                <p>Our experienced consultants help develop strategic plans to drive business growth,
                                    improve operations,
                                    and achieve long-term...</p>
                                <div class="space24"></div>
                                <a class="read-more-btn-w" href="{{ route('second', ['pages', 'case-details1'])}}">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--=====projects end=======-->

    <!--=====testimonial start=======-->

    <div class="testimonial2 sp3" id="testimonial" style="background-color: #03163B;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding2-w">
                        <span class="span" data-aos-duration="700" data-aos="fade-up">Testimonials</span>
                        <div class="space16"></div>
                        <h1 data-aos-duration="900" data-aos="fade-up">Don’t Listen To Us, Listen To Our Great <span
                                class="after2">Clients!</span></h1>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row" data-aos-duration="1000" data-aos="fade-up">
                <div class="testimonial2-slider-all owl-carousel">
                    <div class="testimonial-sliders">
                        <div class="testimonial-single-slider testimonial-single-slider2">
                            <div class="">
                                <div class="testimonial2-slider-img">
                                    <img src="/img/image/testimonial-slider1.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial1-hadding testimonial2-hadding">
                                <div class="testimonial-stars">
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <p style="font-style: italic;">
                                    “Working with Advisor the
                                    Consulting was a game
                                    changer for our business. Their strategic insights and guidance helped us double our
                                    revenue within a
                                    year."
                                </p>
                                <div class="space20"></div>
                                <div class="slider1-bottom">
                                    <h4>
                                        <a href="#">John Smith </a>
                                    </h4>
                                    <div class="space6"></div>
                                    <p>
                                        CEO of XYZ Company
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-sliders">
                        <div class="testimonial-single-slider testimonial-single-slider2">
                            <div class="">
                                <div class="testimonial2-slider-img">
                                    <img src="/img/image/testimonial-slider2.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial1-hadding testimonial2-hadding">
                                <div class="testimonial-stars">
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <p style="font-style: italic;">
                                    “Working with Advisor the
                                    Consulting was a game
                                    changer for our business. Their strategic insights and guidance helped us double our
                                    revenue within a
                                    year."
                                </p>
                                <div class="space20"></div>
                                <div class="slider1-bottom">
                                    <h4>
                                        <a href="#">John Smith</a>
                                    </h4>
                                    <div class="space6"></div>
                                    <p>
                                        CEO of XYZ Company
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-sliders">
                        <div class="testimonial-single-slider testimonial-single-slider2">
                            <div class="">
                                <div class="testimonial2-slider-img">
                                    <img src="/img/image/testimonial-slider1.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial1-hadding testimonial2-hadding">
                                <div class="testimonial-stars">
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <p style="font-style: italic;">
                                    “Working with Advisor the
                                    Consulting was a game
                                    changer for our business. Their strategic insights and guidance helped us double our
                                    revenue within a
                                    year."
                                </p>
                                <div class="space20"></div>
                                <div class="slider1-bottom">
                                    <h4>
                                        <a href="#">John Smith </a>
                                    </h4>
                                    <div class="space6"></div>
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
    </div>

    <!--=====testimonial end=======-->

    <!--=====blog start=======-->

    <div class="blog2 sp3" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding2">
                        <span class="span" data-aos-duration="800" data-aos="fade-up">Our Blog</span>
                        <div class="space16"></div>
                        <h1 data-aos-duration="900" data-aos="fade-up">Latest News and <span class="after2">Blogs</span>
                        </h1>
                        <div class="space24"></div>
                        <p data-aos-duration="1000" data-aos="fade-up">Consulting service is a key part of the future of
                            energy. It
                            can help you save money on your electricity bill, and it can also help to reduce your carbon
                            footprint.</p>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog2-box-all" data-aos-duration="700" data-aos="fade-up">
                        <div class="blog2-box-img img100">
                            <img src="/img/image/blog-img1.png" alt="">
                        </div>
                        <div class="hadding2 blog2-hadding">
                            <ul>
                                <li style="display: inline-block;"><a class="date2" href="#">15 March, 2023 /</a>
                                </li>
                                <li style="display: inline-block;"><a class="date2" href="#">Financial</a></li>
                            </ul>
                            <div class="space16"></div>
                            <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Explore our regularly updated blog, where we share expert </a>
                            </h4>
                            <div class="space14"></div>
                            <p>We conduct a thorough analysis of your business, industry, and market to identify areas for
                                improvement
                                and growth opportunities.</p>
                            <div class="space24"></div>
                            <a class="read-more-btn" href="{{ route('second', ['blog-details', 'index'])}}">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog2-box-all active" data-aos-duration="800" data-aos="fade-up">
                        <div class="blog2-box-img img100">
                            <img src="/img/image/blog-img2.png" alt="">
                        </div>
                        <div class="hadding2 blog2-hadding">
                            <ul>
                                <li style="display: inline-block;"><a class="date2" href="#">15 March, 2023 /</a>
                                </li>
                                <li style="display: inline-block;"><a class="date2" href="#">Financial</a></li>
                            </ul>
                            <div class="space16"></div>
                            <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Customized Solutions: Based on our analysis, we develop </a>
                            </h4>
                            <div class="space14"></div>
                            <p>We conduct a thorough analysis of your business, industry, and market to identify areas for
                                improvement
                                and growth opportunities.</p>
                            <div class="space24"></div>
                            <a class="read-more-btn" href="{{ route('second', ['blog-details', 'index'])}}">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog2-box-all" data-aos-duration="1000" data-aos="fade-up">
                        <div class="blog2-box-img img100">
                            <img src="/img/image/blog-img1.png" alt="">
                        </div>
                        <div class="hadding2 blog2-hadding">
                            <ul>
                                <li style="display: inline-block;"><a class="date2" href="#">15 March, 2023 /</a>
                                </li>
                                <li style="display: inline-block;"><a class="date2" href="#">Financial</a></li>
                            </ul>
                            <div class="space16"></div>
                            <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Our commitment doesn't end with implementation.</a></h4>
                            <div class="space14"></div>
                            <p>We conduct a thorough analysis of your business, industry, and market to identify areas for
                                improvement
                                and growth opportunities.</p>
                            <div class="space24"></div>
                            <a class="read-more-btn" href="{{ route('second', ['blog-details', 'index'])}}">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="space40"></div>
            <div class="row" data-aos-duration="800" data-aos="fade-up">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('second', ['blog', 'index'])}}" class="button-h-2 btnfos2">View All Blogs</a>
                </div>
            </div>
        </div>
    </div>
    <!--=====blog end=======-->

    <!--=====contact start=======-->
    <div class="contact2 sp3" style="background-color: #254969;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hadding2-w">
                        <div class="space10"></div>
                        <h1 data-aos="fade-right" data-aos-duration="700">Get In <span class="after2">Touch</span></h1>
                        <div class="space24"></div>
                        <p data-aos="fade-right" data-aos-duration="900">We are here to help you feel happy and healthy
                            again through
                            our revolutionary healthcare model that's evidence-based, supportive, and personalized to you.
                        </p>
                    </div>
                    <div class="space10"></div>

                    <div class="contact2-contacts">
                        <div class="contact2-single" data-aos="fade-right" data-aos-duration="900">
                            <div class="contact2-icon">
                                <img src="/img/icons/contact2-icon1.svg" alt="">
                            </div>
                            <div class="contact2-icon-hadding">
                                <a href="tel:281-377-7891">281-377-7891</a>
                            </div>
                        </div>
                        <div class="space10"></div>
                        <div class="contact2-single" data-aos="fade-right" data-aos-duration="700">
                            <div class="contact2-icon">
                                <img src="/img/icons/contact2-icon2.svg" alt="">
                            </div>
                            <div class="contact2-icon-hadding">
                                <a href="mailto:info@ihawmd.com">info@ihawmd.com</a>
                            </div>
                        </div>
                        <div class="space10"></div>
                        <div class="contact2-single" data-aos="fade-right" data-aos-duration="1000">
                            <div class="contact2-icon">
                                <img src="/img/icons/contact2-icon3.svg" alt="">
                            </div>
                            <div class="contact2-icon-hadding">
                                <a href="tel:281-377-7891">8708 Technology Forest Pl Suite <br> 125 -G, The Woodlands, TX
                                    77381</a>
                            </div>
                        </div>
                    </div>
                    <div class="space30"></div>
                    <div class="hadding2-w" data-aos="fade-right" data-aos-duration="800">
                        <p>For functional medicine inquiries contact Kim@ihawmd.com</p>
                        <p>All other inquires please contact Hailey@ihawmd.com</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact2-form-box-all" data-aos="zoom-in-up" data-aos-duration="800">
                        <div class="contact-form">
                            <form action="#">
                                <div class="hadding2">
                                    <h1>Leave A Message</h1>
                                </div>
                                <div class="sapce24"></div>
                                <div class="contact-inputs">
                                    <div class="contact-input">
                                        <div class="contact-input-signle">
                                            <input type="text" placeholder="Frist Name*">
                                            <input type="text" placeholder="Last Name*">
                                        </div>
                                        <div class="contact-input-signle contact-input-signle1">
                                            <input type="text" placeholder="Email Address*">
                                        </div>
                                        <div class="contact-input-signle contact-input-signle1">
                                            <select class="wide">
                                                <option value="">Appointment Type*</option>
                                                <option value="">option 1</option>
                                                <option value="">option 2</option>
                                            </select>
                                        </div>
                                        <div class="contact-input-signle">
                                            <textarea cols="30" rows="3" placeholder="Your Message*"></textarea>
                                        </div>
                                        <div class="space30"></div>
                                        <button class="button2">Send Massage</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====contact end=======-->

    <!--=====Footer start=======-->
    <footer class="footer-area footer-area2 padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer mr50">
                        <a href="{{ route('second',['landing', 'index'])}}" class="footer-logo">
                            <img src="/img/logo/header2-logo.svg" alt="" /></a>
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
                                <div class="input-footer2">
                                    <div class="">
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="button-footer">
                                    <button class="button2">Subscribe</button>
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
                    <ul class="Conditions2">
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <div class="social social2">
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
                            <li>s
                                <a data-bs-toggle="tooltip" title="TikTok" href="#"><i
                                        class="fa-brands fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=====Footer end=======-->
@endsection
