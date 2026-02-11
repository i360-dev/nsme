@extends('layouts.base', ['title' => 'Home 4 || Finance Consulting', 'logo' => '/img/logo/titel4.svg'])

@section('body_attribute')
    class="font-f-4"
@endsection

@section('content')
    <!--=====HEADER START=======-->
    <x-topbar headderClass="header-area4" logo="/img/logo/header4-logo.svg" exClass="4" isId="2">
        <div class="home3-header-buttons">
            <a href="{{ route('second', ['others', 'contact'])}}" class="button4-header">Contact Us</a>
        </div>
    </x-topbar>

    <!--=====Hero start=======-->
    <div class="main-hero main-hero3" style="background-color: #021334;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="main-hadding4">
                        <h1>Expert Tax Consulting Services for Individual and Businesses.</h1>
                        <div class="space24"></div>
                        <p>Maximize Your Tax Saving and Ensure Compliance.We help businesses to perform with our customized
                            solutions
                            helping them take business decisions.</p>
                        <div class="space40"></div>
                        <div class="header3-buttons">
                            <div class="header4-button">
                                <a href="{{ route('second', ['others', 'contact'])}}" class="button4-header">Schedule A Consultation</a>
                                <a href="{{ route('second', ['others', 'about'])}}" class="header4-button4">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 text-center">
                    <div class="hero4-image-all">
                        <div class="hero4-img1 aniamtion-key-1">
                            <img src="/img/shapes/header4-shape.svg" alt="">
                        </div>
                        <div class="hero4-img2">
                            <img src="/img/image/header4-main-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====Hero end=======-->

    <!--=====brand start=======-->
    <div class="brand4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand4-slider-all owl-carousel">
                        <div class="brand4-single-slider">
                            <img src="/img/logo/brand4-logo1.svg" alt="">
                        </div>
                        <div class="brand4-single-slider">
                            <img src="/img/logo/brand4-logo2.svg" alt="">
                        </div>
                        <div class="brand4-single-slider">
                            <img src="/img/logo/brand4-logo3.svg" alt="">
                        </div>
                        <div class="brand4-single-slider">
                            <img src="/img/logo/brand4-logo4.svg" alt="">
                        </div>
                        <div class="brand4-single-slider">
                            <img src="/img/logo/brand4-logo5.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====brand end=======-->

    <!--=====about start=======-->
    <div class="about4 sp2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about4-img-all" data-aos="zoom-out" data-aos-duration="700">
                        <div class="about4-img-1 img100">
                            <img src="/img/image/about4-img1.png" alt="">
                        </div>

                        <div class="about4-img-2">
                            <div class="about4-counter">
                                <div class="about4-counter-text">
                                    <h1>16</h1>
                                    <p>Years of <br>
                                        Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hadding4 about4-hadding">
                        <h1 data-aos="fade-left" data-aos-duration="700">We are Best Financial
                            Company for Your Business</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-left" data-aos-duration="900">At Advisor Consulting, we are a trusted finance
                            consulting
                            firm dedicated to helping businesses achieve financial excellence and sustainable growth.Whether
                            your dream
                            is to retire well or build a profitable busines JS Morlu offers a diverse range of exclusive
                            accounting,
                            tax, on audit and business advisory</p>

                        <div class="space30"></div>
                        <div class="porgress-line-all" data-aos="fade-left" data-aos-duration="900">
                            <div class="progress-line">
                                <h6>Consulting</h6>
                                <div id="progress1" data-init="true"></div>
                            </div>
                            <div class="progress-line">
                                <h6>Marketing</h6>
                                <div id="progress2" data-init="true"></div>
                            </div>
                            <div class="progress-line">
                                <h6>Marketing</h6>
                                <div id="progress3" data-init="true"></div>
                            </div>
                        </div>
                        <div class="space40"></div>
                        <a href="{{ route('second', ['others', 'about'])}}" class="button4-header4">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====about end=======-->

    <!--=====service start=======-->
    <div class="service4 sp3" style="background-color: #EEF1F7;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding4">
                        <h1 data-aos="fade-up" data-aos-duration="700"> Services We Offered</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="800">Our team of experienced consultants combines industry
                            knowledge,
                            cutting-edge technology, and innovative strategies to guide you towards a brighter and greener
                            future. </p>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">
                <div class="col-lg-4 text-center">
                    <div class="" data-aos="fade-up" data-aos-duration="700">
                        <div class="service4-box">
                            <div class="service4-box-iocn">
                                <img src="/img/icons/service4-icon1.svg" alt="">
                            </div>
                            <div class="hadding4">
                                <h4><a href="{{ route('second', ['services', 'details'])}}">Financial Planning and Analysis</a></h4>
                                <div class="space14"></div>
                                <p> Our experienced consultants help businesses develop comprehensive financial plans,
                                    perform financial
                                    forecasting,</p>
                                <div class="space24"></div>
                                <a class="read-more4" href="{{ route('second', ['services', 'details'])}}">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 text-center">
                    <div class="" data-aos="fade-up" data-aos-duration="900">
                        <div class="service4-box">
                            <div class="service4-box-iocn">
                                <img src="/img/icons/service4-icon1.svg" alt="">
                            </div>
                            <div class="hadding4">
                                <h4><a href="{{ route('second', ['services', 'details'])}}">Financial Risk Management</a></h4>
                                <div class="space14"></div>
                                <p> Our experienced consultants help businesses develop comprehensive financial plans,
                                    perform financial
                                    forecasting,</p>
                                <div class="space24"></div>
                                <a class="read-more4" href="{{ route('second', ['services', 'details'])}}">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 text-center">
                    <div class="" data-aos="fade-up" data-aos-duration="700">
                        <div class="service4-box">
                            <div class="service4-box-iocn">
                                <img src="/img/icons/service4-icon3.svg" alt="">
                            </div>
                            <div class="hadding4">
                                <h4><a href="{{ route('second', ['services', 'details'])}}">Capital Structure Optimization</a></h4>
                                <div class="space14"></div>
                                <p> Our experienced consultants help businesses develop comprehensive financial plans,
                                    perform financial
                                    forecasting,</p>
                                <div class="space24"></div>
                                <a class="read-more4" href="{{ route('second', ['services', 'details'])}}">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="space40"></div>
            <div class="row" data-aos="fade-up" data-aos-duration="700">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('second', ['services', 'index'])}}" class="button4-header4">More Services</a>
                </div>
            </div>
        </div>
    </div>

    <!--=====service end=======-->

    <!--=====case start=======-->

    <div class="case4 sp2">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding4">
                        <h1 data-aos="fade-up" data-aos-duration="700">Featured Case Studies</h1>
                        <div class="space16"></div>
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
                    <div class="case4-box-all" data-aos="fade-up" data-aos-duration="900">
                        <div class="case-box-img img100 border5">
                            <img src="/img/image/case4-img1.png" alt="">
                        </div>
                        <div class="case4-box-hadding hadding4-w">
                            <h4><a href="{{ route('second', ['pages', 'case-details1'])}}">Financial Risk Management</a></h4>
                            <div class="space14"></div>
                            <p> Describe the HR challenges faced by the client and how your the solutions helped them
                                achieve
                                significant </p>
                            <div class="space24"></div>
                            <div>
                                <a class="read-more4-w" href="{{ route('second', ['pages', 'case-details1'])}}">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="case4-box-all" data-aos="fade-up" data-aos-duration="700">
                        <div class="case-box-img img100 border5">
                            <img src="/img/image/case4-img2.png" alt="">
                        </div>
                        <div class="case4-box-hadding hadding4-w">
                            <h4><a href="{{ route('second', ['pages', 'case-details1'])}}">Financial Risk Management</a></h4>
                            <div class="space14"></div>
                            <p> Describe the HR challenges faced by the client and how your the solutions helped them
                                achieve
                                significant </p>
                            <div class="space24"></div>
                            <a class="read-more4-w" href="{{ route('second', ['pages', 'case-details1'])}}">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="case4-box-all" data-aos="fade-up" data-aos-duration="900">
                        <div class="case-box-img img100 border5">
                            <img src="/img/image/case4-img3.png" alt="">
                        </div>
                        <div class="case4-box-hadding hadding4-w">
                            <h4><a href="{{ route('second', ['pages', 'case-details1'])}}">Financial Risk Management</a></h4>
                            <div class="space14"></div>
                            <p> Describe the HR challenges faced by the client and how your the solutions helped them
                                achieve
                                significant </p>
                            <div class="space24"></div>
                            <a class="read-more4-w" href="{{ route('second', ['pages', 'case-details1'])}}">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space40"></div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('second', ['others', 'cart'])}}" class="button4-header4">View All Project</a>
                </div>
            </div>
        </div>
    </div>

    <!--=====case end=======-->

    <!--=====testimonial start=======-->
    <div class="testimonial1 testimonial4 sp4">
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

                <div class="col-md-7">
                    <div class="trusred-slider-all owl-carousel">
                        <div class="testimonial1-hadding">
                            <div class="testimonial-stars testimonial-stars3">
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
                                <div class="sapce6"></div>
                                <p>
                                    CEO of XYZ Company
                                </p>
                            </div>
                        </div>

                        <div class="testimonial1-hadding">
                            <div class="testimonial-stars testimonial-stars3">
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
                                <div class="space6"></div>
                                <p>
                                    CEO of XYZ Company
                                </p>
                            </div>
                        </div>

                        <div class="testimonial1-hadding">
                            <div class="testimonial-stars testimonial-stars3">
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
    <!--=====testimonial end=======-->

    <!--=====cta start=======-->
    <div class="subscribe4"
        style="background-image: url(/img/bg/subscribe4-bg.png); padding: 80px 0; background-attachment: fixed; background-position: center; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding4-w">
                        <h1 data-aos="fade-up" data-aos-duration="700">Take advantage of a consultation</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="800">Take advantage of a one on one consultation with our
                            tax
                            experts. We'll assess your unique situation and provide personalized advice and strategies.</p>
                        <div class="space40"></div>
                        <div class="header3-buttons header4-button-subsribe">
                            <div class="header4-button">
                                <a href="{{ route('second', ['others', 'contact'])}}" class="button4-header">Schedule A Consultation</a>
                                <a href="{{ route('second', ['others', 'about'])}}" class="header4-button4">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====cta end=======-->

    <!--=====blog start=======-->
    <div class="blog4 sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding4">
                        <h1 data-aos="fade-up" data-aos-duration="700">Latest News and Blogs</h1>
                        <div class="space16"></div>
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
                    <div class="blog4-box" data-aos="fade-up" data-aos-duration="700">
                        <div class="blog-box-img img100">
                            <img src="/img/image/blog4-img1.png" alt="">
                        </div>
                        <div class="hadding4 blog4-hadding">
                            <ul class="blog4-box-hadding">
                                <li class="blog4-titel1">
                                    <a href="#">Business</a>
                                </li>
                                <li class="blog4-titel2">
                                    <a href="#">15 March, 2023</a>
                                </li>
                            </ul>
                            <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Technology and Startups: Our finance consultants</a></h4>
                            <div class="space16"></div>
                            <p>Technology and Startups: Our finance consultants understand the financial challenges faced by
                                technology
                                companies and startups. in financial modeling,</p>
                            <div class="space24"></div>
                            <a class="read-more4" href="{{ route('second', ['blog-details', 'index'])}}">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog4-box active" data-aos="fade-up" data-aos-duration="1000">
                        <div class="blog-box-img img100">
                            <img src="/img/image/blog4-img2.png" alt="">
                        </div>
                        <div class="hadding4 blog4-hadding">
                            <ul class="blog4-box-hadding">
                                <li class="blog4-titel1">
                                    <a href="#">Business</a>
                                </li>
                                <li class="blog4-titel2">
                                    <a href="#">15 March, 2023</a>
                                </li>
                            </ul>
                            <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Technology and Startups: Our finance consultants</a></h4>
                            <div class="space14"></div>
                            <p>Technology and Startups: Our finance consultants understand the financial challenges faced by
                                technology
                                companies and startups. in financial modeling,</p>
                            <div class="space24"></div>
                            <a class="read-more4" href="{{ route('second', ['blog-details', 'index'])}}">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog4-box" data-aos="fade-up" data-aos-duration="700">
                        <div class="blog-box-img img100">
                            <img src="/img/image/blog4-img3.png" alt="">
                        </div>
                        <div class="hadding4 blog4-hadding">
                            <ul class="blog4-box-hadding">
                                <li class="blog4-titel1">
                                    <a href="#">Business</a>
                                </li>
                                <li class="blog4-titel2">
                                    <a href="#">15 March, 2023</a>
                                </li>
                            </ul>
                            <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Technology and Startups: Our finance consultants</a></h4>
                            <div class="space14"></div>
                            <p>Technology and Startups: Our finance consultants understand the financial challenges faced by
                                technology
                                companies and startups. in financial modeling,</p>
                            <div class="space24"></div>
                            <a class="read-more4" href="{{ route('second', ['blog-details', 'index'])}}">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space40"></div>

        <div class="row" data-aos="fade-up" data-aos-duration="900">
            <div class="col-lg-12 text-center">
                <a href="{{ route('second', ['blog', 'index'])}}" class="button4-header4">View All Blogs</a>
            </div>
        </div>
    </div>

    <!--=====blog end=======-->

    <!--=====cta start=======-->
    <div class="cta4" style="background-color: #021334;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-1 col-0"></div>
                <div class="col-lg-5">
                    <div class="hadding4-w">
                        <h1>Sign Up for Newsletters For Latest Update</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta4-wrap">
                        <input type="email" placeholder="Enter your email here" />
                        <div class="subsribe-btn4 ps-3">
                            <button class="button4-header">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!--=====cta end=======-->

    @include('components/footer')
    
@endsection
