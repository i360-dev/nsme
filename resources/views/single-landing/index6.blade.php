@extends('layouts.base', ['title' => 'Home 6 || Business Consulting', 'logo' => '/img/logo/titel6.svg'])

@section('body_attribute')
    class="font-f-6"
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
                                <a href="{{ route('second',['landing', 'index'])}}"><img src="/img/logo/header-logo6.svg" alt="" />
                                </a>
                            </div>



                            <div class="main-menu-ex main-menu-ex6">
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
                                    <a href="{{ route('second', ['others', 'contact'])}}" class="theme-btn7">Book a Financial Session</a>
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
    <div class="main-hero main-hero5 _relative" style="background-color: #ECF5F6;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 _relative">
                    <div class="main-hadding6">
                        <h1>HR Consulting Best Excellence for Your Organization</h1>
                        <div class="space24"></div>
                        <p>Guiding Financial Success with Expertise and Precision. Drive Growth, <br> Improve Efficiency and
                            Make
                            Informed DecisionsWe help business to perform <br> with our customized solution helping them
                            take business.
                        </p>
                        <div class="space40"></div>
                        <div class="header2-buttons">

                            <div class="button2-all">
                                <a href="{{ route('second', ['others', 'contact'])}}" class="theme-btn7">Schedule A Consultation</a>
                            </div>
                            <div class="button2-all2">

                            </div>
                        </div>

                        <div class="space40"></div>
                        <div class="brand2-slider-all">
                            <h4>Our Trusted Partner:</h4>
                            <div class="space24"></div>
                            <div class="brand2-slider brand2-slider6 owl-carousel">
                                <div class="brand2-logo">
                                    <img src="/img/logo/header6-slider-logo1.svg" alt="">
                                </div>

                                <div class="brand2-logo">
                                    <img src="/img/logo/header6-slider-logo2.svg" alt="">
                                </div>

                                <div class="brand2-logo">
                                    <img src="/img/logo/header6-slider-logo3.svg" alt="">
                                </div>

                                <div class="brand2-logo">
                                    <img src="/img/logo/header6-slider-logo4.svg" alt="">
                                </div>

                            </div>
                        </div>


                    </div>


                </div>

                <div class="col-lg-6">
                    <div class="hero6-images">
                        <div class="hero6-main-img">
                            <img src="/img/image/hero6-main-img.png" alt="">
                        </div>
                        <div class="hero6-main-shape aniamtion-key-1">
                            <img src="/img/shapes/hero6-shape1.svg" alt="">
                        </div>
                        <div class="hero6-counter-box">
                            <div class="hero6-counter-flex">
                                <div class="hero6-counter text-center">
                                    <h1><span class="counter">546</span>+</h1>
                                    <div class="space16"></div>
                                    <p>Successful Cases</p>
                                </div>
                                <div class="hero6-counter text-center">
                                    <h1><span class="counter">550</span>+</h1>
                                    <div class="space16"></div>
                                    <p>Total Divorce Cases</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <img class="brand6-logo aniamtion-key-2" src="/img/logo/hero6-brand.svg" alt="">
        <img class="brand6-sahpe aniamtion-key-2" src="/img/shapes/hero6-shape.svg" alt="">
    </div>

    <!--=====Hero end=======-->

    <!--=====about start=======-->

    <div class="about6 sp3" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding6">
                        <h1 data-aos="fade-up" data-aos-duration="700">Why Choose Our HR Managment</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="700">We understand that every client has unique needs and
                            goals. We
                            take the time to listen, best HR managements consulting analyze your financial situation, &
                            tailor Services.
                        </p>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="space30"></div>
                    <div class="about6-images" data-aos="zoom-out" data-aos-duration="700">
                        <div class="about6-img1 aniamtion-key-1">
                            <img src="/img/shapes/hero6-shape1.svg" alt="">
                        </div>
                        <div class="about6-img2 img5">
                            <img src="/img/image/about6-img.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="space30"></div>
                    <div class="hadding6">
                        <div class="" data-aos="fade-left" data-aos-duration="700">
                            <div class="about6-box">
                                <div class="">
                                    <div class="about6-icon">
                                        <img src="/img/icons/about6-icon1.svg" alt="">
                                    </div>
                                </div>
                                <div class="hadding6">
                                    <h4><a href="#">Streamlined Hr Operations</a></h4>
                                    <div class="space10"></div>
                                    <p>Our team of seasoned professionals has in-depth service knowledge of tax law,
                                        regular, & industry
                                        management.</p>
                                </div>
                            </div>
                        </div>

                        <div class="" data-aos="fade-left" data-aos-duration="900">
                            <div class="about6-box">
                                <div class="">
                                    <div class="about6-icon">
                                        <img src="/img/icons/about6-icon2.svg" alt="">
                                    </div>
                                </div>
                                <div class="hadding6">
                                    <h4><a href="#">Training & Development</a></h4>
                                    <div class="space10"></div>
                                    <p>Our team of seasoned professionals has in-depth service knowledge of tax law,
                                        regular, & industry
                                        management.</p>
                                </div>
                            </div>
                        </div>

                        <div class="" data-aos="fade-left" data-aos-duration="1100">
                            <div class="about6-box">
                                <div class="">
                                    <div class="about6-icon">
                                        <img src="/img/icons/about6-icon3.svg" alt="">
                                    </div>
                                </div>
                                <div class="hadding6">
                                    <h4><a href="#">Benefits & Compensation</a></h4>
                                    <div class="space10"></div>
                                    <p>Our team of seasoned professionals has in-depth service knowledge of tax law,
                                        regular, & industry
                                        management.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <!--=====about end=======-->

    <!--=====service start=======-->

    <div class="service6 sp3" id="service" style="background-color: #10242D;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding6-w">
                        <h1 data-aos="fade-up" data-aos-duration="900">Ways to Support your Business</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="1100">Our team of experienced consultants combines
                            industry
                            knowledge, cutting-edge technology, and innovative to guide you towards a brighter and greener
                            future.</p>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="" data-aos="fade-up" data-aos-duration="700">
                        <div class="service6-box">
                            <div class="service6-box-iocn">
                                <img src="/img/icons/service6-icon1.svg" alt="">
                            </div>
                            <div class="service6-border"></div>
                            <div class="hadding6-w">
                                <h4><a href="{{ route('second', ['services', 'details'])}}">HR Strategy and Planning</a></h4>
                                <div class="space16"></div>
                                <p>Our expert consultants work with you to develop a comprehensive HR strategy aligned with
                                    your business
                                    goals. We assess your current Helping businesses to define their goals,</p>
                                <div class="space24"></div>
                                <a href="{{ route('second', ['services', 'details'])}}" class="service6-leran">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="" data-aos="fade-up" data-aos-duration="900">
                        <div class="service6-box">
                            <div class="service6-box-iocn">
                                <img src="/img/icons/service6-icon2.svg" alt="">
                            </div>
                            <div class="service6-border"></div>
                            <div class="hadding6-w">
                                <h4><a href="{{ route('second', ['services', 'details'])}}">Talent Management</a></h4>
                                <div class="space16"></div>
                                <p>Our expert consultants work with you to develop a comprehensive HR strategy aligned with
                                    your business
                                    goals. We assess your current Helping businesses to define their goals,</p>
                                <div class="space24"></div>
                                <a href="{{ route('second', ['services', 'details'])}}" class="service6-leran">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="" data-aos="fade-up" data-aos-duration="800">
                        <div class="service6-box">
                            <div class="service6-box-iocn">
                                <img src="/img/icons/service6-icon3.svg" alt="">
                            </div>
                            <div class="service6-border"></div>
                            <div class="hadding6-w">
                                <h4><a href="{{ route('second', ['services', 'details'])}}">Compliance Audits</a></h4>
                                <div class="space16"></div>
                                <p>Our expert consultants work with you to develop a comprehensive HR strategy aligned with
                                    your business
                                    goals. We assess your current Helping businesses to define their goals,</p>
                                <div class="space24"></div>
                                <a href="{{ route('second', ['services', 'details'])}}" class="service6-leran">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="" data-aos="fade-up" data-aos-duration="1100">
                        <div class="service6-box">
                            <div class="service6-box-iocn">
                                <img src="/img/icons/service6-icon4.svg" alt="">
                            </div>
                            <div class="service6-border"></div>
                            <div class="hadding6-w">
                                <h4><a href="{{ route('second', ['services', 'details'])}}">Employee Training</a></h4>
                                <div class="space16"></div>
                                <p>Our expert consultants work with you to develop a comprehensive HR strategy aligned with
                                    your business
                                    goals. We assess your current Helping businesses to define their goals,</p>
                                <div class="space24"></div>
                                <a href="{{ route('second', ['services', 'details'])}}" class="service6-leran">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="space40"></div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="" data-aos="fade-up" data-aos-duration="800">
                    <a href="{{ route('second', ['services', 'index'])}}" class="theme-btn7">Explore Our Services</a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!--=====service end=======-->

    <!--=====case start=======-->

    <div class="case6 sp3" id="case">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding6">
                        <h1 data-aos="fade-up" data-aos-duration="800">Featured Case Studies</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="1000">Consulting service is a key part of the future of
                            energy. It
                            can help you save electricity bill, and it can also help to reduce your carbon footprint.</p>
                    </div>
                </div>
            </div>

            <div class="space30"></div>
            <div class="row">
                <div class="col-lg-4 cal-md-6">
                    <div class="case6-box" data-aos="fade-up" data-aos-duration="800">
                        <div class="case6-img-box img100 img5">
                            <img src="/img/image/case6-img1.png" alt="">
                        </div>
                        <div class="case6-hadding-area">
                            <h5><a href="{{ route('second', ['pages', 'case-details1'])}}">Managements Employee Handbook Development for Company
                                    Growth</a></h5>
                            <div class="space20"></div>
                            <a href="{{ route('second', ['pages', 'case-details1'])}}" class="case6-learn">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 cal-md-6">
                    <div class="case6-box" data-aos="fade-up" data-aos-duration="1000">
                        <div class="case6-img-box img100 img5">
                            <img src="/img/image/case6-img2.png" alt="">
                        </div>
                        <div class="case6-hadding-area">
                            <h5><a href="{{ route('second', ['pages', 'case-details1'])}}">Business Strategic Employee Trust Handbook for Company Gro</a>
                            </h5>
                            <div class="space20"></div>
                            <a href="{{ route('second', ['pages', 'case-details1'])}}" class="case6-learn">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 cal-md-6">
                    <div class="case6-box" data-aos="fade-up" data-aos-duration="1200">
                        <div class="case6-img-box img100 img5">
                            <img src="/img/image/case6-img3.png" alt="">
                        </div>
                        <div class="case6-hadding-area">
                            <h5><a href="{{ route('second', ['pages', 'case-details1'])}}">Human Recourses Trusted By Our Customers to Effective
                                    Solution</a></h5>
                            <div class="space20"></div>
                            <a href="{{ route('second', ['pages', 'case-details1'])}}" class="case6-learn">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="space40"></div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="" data-aos="fade-up" data-aos-duration="1200">
                        <a href="{{ route('second', ['others', 'cart'])}}" class="theme-btn7">More Case Studies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====case end=======-->

    <!--=====testimonial start=======-->

    <div class="tes6 sp3" id="testimonial" style="background-color: #ECF5F6;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding6">
                        <h1 data-aos="fade-up" data-aos-duration="800">Trusted by Our Customers</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="1000">At Equity, we provide personalized and effective
                            solutions for
                            a wide range of legal needs.We are getting strength from our clients.</p>
                    </div>
                </div>
            </div>
            <div class="space60"></div>
            <div class="row">
                <div class="tes6-slider-all owl-carousel" data-aos="fade-up" data-aos-duration="1000">


                    <div class="tes6-single-slider">
                        <div class="tes6-slider-icon">
                            <img src="/img/icons/tes6-icon.svg" alt="">
                        </div>
                        <div class="space24"></div>
                        <p>"Engaging in collaboration with the Consultant has
                            been incredibly inspiring. Their team consistently go above & beyond, offering exceptional
                            service best
                            and achieving impressive service results. </p>

                        <div class="tes6-border"></div>

                        <div class="tes6-bottom-area">
                            <div class="tes6-bottom-hadding">
                                <div class="img50">
                                    <img src="/img/image/tes6-img.png" alt="">
                                </div>
                                <div class="tes6-hadding">
                                    <h5><a href="#">Jhone Weak</a></h5>
                                    <div class="space5"></div>
                                    <p>11 month ago</p>
                                </div>
                            </div>

                            <div class="tes6-icons">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>

                    </div>



                    <div class="tes6-single-slider">
                        <div class="tes6-slider-icon">
                            <img src="/img/icons/tes6-icon.svg" alt="">
                        </div>
                        <div class="space24"></div>
                        <p>"Engaging in collaboration with the Consultant has
                            been incredibly inspiring. Their team consistently go above & beyond, offering exceptional
                            service best
                            and achieving impressive service results. </p>

                        <div class="tes6-border"></div>

                        <div class="tes6-bottom-area">
                            <div class="tes6-bottom-hadding">
                                <div class="img50">
                                    <img src="/img/image/tes6-img.png" alt="">
                                </div>
                                <div class="tes6-hadding">
                                    <h5><a href="#">Virat Kohli</a></h5>
                                    <div class="space5"></div>
                                    <p>11 month ago</p>
                                </div>
                            </div>

                            <div class="tes6-icons">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="tes6-single-slider">
                        <div class="tes6-slider-icon">
                            <img src="/img/icons/tes6-icon.svg" alt="">
                        </div>
                        <div class="space24"></div>
                        <p>"Engaging in collaboration with the Consultant has
                            been incredibly inspiring. Their team consistently go above & beyond, offering exceptional
                            service best
                            and achieving impressive service results. </p>

                        <div class="tes6-border"></div>

                        <div class="tes6-bottom-area">
                            <div class="tes6-bottom-hadding">
                                <div class="img50">
                                    <img src="/img/image/tes6-img.png" alt="">
                                </div>
                                <div class="tes6-hadding">
                                    <h5><a href="#">Jhone Weak</a></h5>
                                    <div class="space5"></div>
                                    <p>11 month ago</p>
                                </div>
                            </div>

                            <div class="tes6-icons">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>

                    </div>



                    <div class="tes6-single-slider">
                        <div class="tes6-slider-icon">
                            <img src="/img/icons/tes6-icon.svg" alt="">
                        </div>
                        <div class="space24"></div>
                        <p>"Engaging in collaboration with the Consultant has
                            been incredibly inspiring. Their team consistently go above & beyond, offering exceptional
                            service best
                            and achieving impressive service results. </p>

                        <div class="tes6-border"></div>

                        <div class="tes6-bottom-area">
                            <div class="tes6-bottom-hadding">
                                <div class="img50">
                                    <img src="/img/image/tes6-img.png" alt="">
                                </div>
                                <div class="tes6-hadding">
                                    <h5><a href="#">Virat Kohli</a></h5>
                                    <div class="space5"></div>
                                    <p>11 month ago</p>
                                </div>
                            </div>

                            <div class="tes6-icons">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="tes6-single-slider">
                        <div class="tes6-slider-icon">
                            <img src="/img/icons/tes6-icon.svg" alt="">
                        </div>
                        <div class="space24"></div>
                        <p>"Engaging in collaboration with the Consultant has
                            been incredibly inspiring. Their team consistently go above & beyond, offering exceptional
                            service best
                            and achieving impressive service results. </p>

                        <div class="tes6-border"></div>

                        <div class="tes6-bottom-area">
                            <div class="tes6-bottom-hadding">
                                <div class="img50">
                                    <img src="/img/image/tes6-img.png" alt="">
                                </div>
                                <div class="tes6-hadding">
                                    <h5><a href="#">Jhone Weak</a></h5>
                                    <div class="space5"></div>
                                    <p>11 month ago</p>
                                </div>
                            </div>

                            <div class="tes6-icons">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>

                    </div>



                    <div class="tes6-single-slider">
                        <div class="tes6-slider-icon">
                            <img src="/img/icons/tes6-icon.svg" alt="">
                        </div>
                        <div class="space24"></div>
                        <p>"Engaging in collaboration with the Consultant has
                            been incredibly inspiring. Their team consistently go above & beyond, offering exceptional
                            service best
                            and achieving impressive service results. </p>

                        <div class="tes6-border"></div>

                        <div class="tes6-bottom-area">
                            <div class="tes6-bottom-hadding">
                                <div class="img50">
                                    <img src="/img/image/tes6-img.png" alt="">
                                </div>
                                <div class="tes6-hadding">
                                    <h5><a href="#">Virat Kohli</a></h5>
                                    <div class="space5"></div>
                                    <p>11 month ago</p>
                                </div>
                            </div>

                            <div class="tes6-icons">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>

    <!--=====testimonial end=======-->


    <!--=====blog start=======-->

    <div class="blog6 sp3" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding6">
                        <h1 data-aos="fade-up" data-aos-duration="900">Featured Blog Post</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="1100">Discover the keys to boosting employee engagement
                            and
                            productivity in our latest blog post. We delve into strategies and insights that empower</p>
                    </div>
                </div>
            </div>

            <div class="space30"></div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog6-box" data-aos="fade-up" data-aos-duration="800">
                        <div class="blog6-box-img img100">
                            <img src="/img/image/blog6-img1.png" alt="">
                        </div>
                        <div class="hadding6 blog6-hadding">
                            <a href="#" class="blog6-tag">#Talent Management</a>
                            <div class="space12"></div>
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
                            <div class="space12"></div>
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
                    <div class="blog6-box" data-aos="fade-up" data-aos-duration="1200">
                        <div class="blog6-box-img img100">
                            <img src="/img/image/blog6-img3.png" alt="">
                        </div>
                        <div class="hadding6 blog6-hadding">
                            <a href="#" class="blog6-tag">#Talent Management</a>
                            <div class="space12"></div>
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

    <!--=====contact start=======-->

    <div class="contact6 sp3" id="contact" style="background-color: #ECF5F6;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hadding6">
                        <h1 data-aos="fade-right" data-aos-duration="800">Contact us now for a free consulation for today.
                        </h1>
                        <div class="space16"></div>
                        <p data-aos="fade-right" data-aos-duration="1000">Get in touch with our experienced immigration
                            lawyers today
                            for personalized support. Get fast results with & best expert team.</p>
                    </div>

                    <div class="space16"></div>
                    <form action="#">
                        <div class="contact6-form" data-aos="fade-right" data-aos-duration="800">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact6-input">
                                        <input type="text" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact6-input">
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="contact6-input">
                                        <input type="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact6-input">
                                        <input type="number" placeholder="Phone Number">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact6-input">
                                        <select class="wide selet6">
                                            <option value="">Are you a new client?</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                            <option value="">Option 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact6-input">
                                        <textarea cols="30" rows="5" placeholder="How can we help you?"></textarea>
                                    </div>
                                    <div class="space30"></div>
                                    <div class="" data-aos="fade-right" data-aos-duration="1000">
                                        <button class="theme-btn7">Subscribe</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6">
                    <div class="contact6-img img100 img5" data-aos="zoom-out" data-aos-duration="800">
                        <img src="/img/image/contact6-image.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====contact end=======-->

    <!--=====cta start=======-->

    <div class="cta6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hadding6-w">
                        <h1>Transform Your HR Practices?</h1>
                        <div class="space16"></div>
                        <p>Unlock the full potential of your workforce with our tailored HR manage consulting services.
                            Whether you're
                            looking to optimize recruitment, enhance employe.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cta6-buttons">
                        <a href="{{ route('second', ['services', 'index'])}}" class="cta6-btn1">Request HR Consultation</a>
                        <a href="{{ route('second', ['others', 'contact'])}}" class="cta6-btn2">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====cta end=======-->


    <!--=====Footer start=======-->
    @include('components/footer2', [
        'areaNum' => '5',
        'bgColor' => '1C1C57',
        'logo' => '/img/logo/footer6-logo.svg',
        'buttonClass' => 'subscribe-footer6',
        'socialClass' => 'social6',
        'btnClass' => 'theme-btn7',
    ])
@endsection
