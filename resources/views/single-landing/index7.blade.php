@extends('layouts.base', ['title' => 'Home 7 || Business Consulting Consulting', 'logo' => '/img/logo/titel7.svg'])

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
                                <a href="{{ route('second',['landing', 'index'])}}"><img src="/img/logo/header-logo7.svg" alt="" />
                                </a>
                            </div>



                            <div class="main-menu-ex main-menu-ex7">
                                <ul>

                                    <li><a href="#about">About</a></li>
                                    <li><a href="#service">Service</a></li>
                                    <li><a href="#testimonial">Testimonial</a></li>
                                    <li><a href="#blog">Blog</a></li>
                                    <li><a href="#contact">Contact</a></li>

                                </ul>
                            </div>



                            <div class="home2-header-buttons">
                                <div class="header6-buttons">
                                    <a href="tel:+1(888)423-3526" class="header6-btn"> <span><img
                                                src="/img/icons/header6-phn-icon.svg" alt=""></span> +1 (888)
                                        423-3526</a>
                                    <a href="{{ route('second', ['others', 'contact'])}}" class="theme-btn8">Contact Us <span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
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
                    <div class="main-hadding7">
                        <h1 class="font-f-7">Protecting Your Rights in Times of Trouble</h1>
                        <div class="space24"></div>
                        <p>Defending Your Rights, Upholding Justice, provides additional context and reinforces your firm's
                            mission.
                            Ur experienced team is here to protect your rights and provide .</p>
                        <div class="space40"></div>
                        <div class="header2-buttons">
                            <a href="{{ route('second', ['services', 'index'])}}" class="theme-btn8">Schedule A Consultation <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                            <a href="{{ route('second', ['others', 'about'])}}" class="theme-btn9">Learn More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero7-images">
                        <div class="hero7-img1">
                            <img src="/img/image/hero7-img1.png" alt="">
                        </div>

                        <div class="hero7-img2">
                            <img src="/img/image/hero7-img2.png" alt="">
                        </div>

                        <div class="hero7-img3">
                            <img src="/img/image/hero7-img3.png" alt="">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--=====Hero end=======-->


    <!--=====service start=======-->

    <div class="service7 sp3" id="service" style="background-color: #0C1217;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding7-w">
                        <h1 class="font-f-7" data-aos-duration="700" data-aos="fade-up">Our Legal Tax law Services</h1>
                        <div class="space16"></div>
                        <p data-aos-duration="1100" data-aos="fade-up">Our legal team specializes in a wide range of
                            criminal defense
                            services, from DUI charges to drug-related offenses. We provide personalized strategies and
                            dedicated
                            representation</p>
                    </div>
                </div>
            </div>

            <div class="space30"></div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="" data-aos-duration="800" data-aos="fade-up">
                        <div class="service7-box _relative">
                            <div class="service-icon-align">
                                <div class="service7-icon">
                                    <img src="/img/icons/service7-iocn1.svg" alt="">
                                </div>
                            </div>
                            <div class="hadding7-w">
                                <h4><a href="{{ route('second', ['services', 'details'])}}" class="font-f-7">Business Law</a></h4>
                                <div class="space16"></div>
                                <p>Our tax planning strategies help you navigate complex tax codes, ensuring you pay no more
                                    than
                                    necessary...</p>
                                <div class="space16"></div>
                                <a href="{{ route('second', ['services', 'details'])}}" class="service7-learn">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="" data-aos-duration="900" data-aos="fade-up">
                        <div class="service7-box _relative">
                            <div class="service-icon-align">
                                <div class="service7-icon">
                                    <img src="/img/icons/service7-iocn2.svg" alt="">
                                </div>
                            </div>
                            <div class="hadding7-w">
                                <h4><a href="{{ route('second', ['services', 'details'])}}" class="font-f-7">Family Law</a></h4>
                                <div class="space16"></div>
                                <p>Our tax planning strategies help you navigate complex tax codes, ensuring you pay no more
                                    than
                                    necessary...</p>
                                <div class="space16"></div>
                                <a href="{{ route('second', ['services', 'details'])}}" class="service7-learn">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="" data-aos-duration="700" data-aos="fade-up">
                        <div class="service7-box _relative">
                            <div class="service-icon-align">
                                <div class="service7-icon">
                                    <img src="/img/icons/service7-iocn3.svg" alt="">
                                </div>
                            </div>
                            <div class="hadding7-w">
                                <h4><a href="{{ route('second', ['services', 'details'])}}" class="font-f-7">Criminal Defense</a></h4>
                                <div class="space16"></div>
                                <p>Our tax planning strategies help you navigate complex tax codes, ensuring you pay no more
                                    than
                                    necessary...</p>
                                <div class="space16"></div>
                                <a href="{{ route('second', ['services', 'details'])}}" class="service7-learn">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="" data-aos-duration="1200" data-aos="fade-up">
                        <div class="service7-box _relative">
                            <div class="service-icon-align">
                                <div class="service7-icon">
                                    <img src="/img/icons/service7-iocn4.svg" alt="">
                                </div>
                            </div>
                            <div class="hadding7-w">
                                <h4><a href="{{ route('second', ['services', 'details'])}}" class="font-f-7">Personal Injury</a></h4>
                                <div class="space16"></div>
                                <p>Our tax planning strategies help you navigate complex tax codes, ensuring you pay no more
                                    than
                                    necessary...</p>
                                <div class="space16"></div>
                                <a href="{{ route('second', ['services', 'details'])}}" class="service7-learn">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="" data-aos-duration="800" data-aos="fade-up">
                        <div class="service7-box _relative">
                            <div class="service-icon-align">
                                <div class="service7-icon">
                                    <img src="/img/icons/service7-iocn5.svg" alt="">
                                </div>
                            </div>
                            <div class="hadding7-w">
                                <h4><a href="{{ route('second', ['services', 'details'])}}" class="font-f-7">Employment Law</a></h4>
                                <div class="space16"></div>
                                <p>Our tax planning strategies help you navigate complex tax codes, ensuring you pay no more
                                    than
                                    necessary...</p>
                                <div class="space16"></div>
                                <a href="{{ route('second', ['services', 'details'])}}" class="service7-learn">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="" data-aos-duration="1100" data-aos="fade-up">
                        <div class="service7-box _relative">
                            <div class="service-icon-align">
                                <div class="service7-icon">
                                    <img src="/img/icons/service7-iocn6.svg" alt="">
                                </div>
                            </div>
                            <div class="hadding7-w">
                                <h4><a href="{{ route('second', ['services', 'details'])}}" class="font-f-7">Education Law</a></h4>
                                <div class="space16"></div>
                                <p>Our tax planning strategies help you navigate complex tax codes, ensuring you pay no more
                                    than
                                    necessary...</p>
                                <div class="space16"></div>
                                <a href="{{ route('second', ['services', 'details'])}}" class="service7-learn">Read More <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="space40"></div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="" data-aos-duration="900" data-aos="fade-up">
                        <a href="{{ route('second', ['services', 'index'])}}" class="theme-btn8">View More Services <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====service end=======-->

    <!--=====about start=======-->

    <div class="about7 sp3" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about7-images">
                        <div class="about7-img1" data-aos="zoom-out" data-aos-duration="700">
                            <img src="/img/image/about7-img1.png" alt="">
                        </div>
                        <div class="about7-img2" data-aos="zoom-out" data-aos-duration="900">
                            <img src="/img/image/about7-img2.png" alt="">
                        </div>
                        <div class="about7-img3" data-aos="zoom-out" data-aos-duration="1100">
                            <h1><span class="counter">25</span>+</h1>
                            <div class="space12"></div>
                            <p>Years Of experience</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hadding7 about7-hadding">
                        <h1 class="font-f-7" data-aos="fade-left" data-aos-duration="700">A professional lawyer ready to
                            assist you
                        </h1>
                        <div class="space24"></div>
                        <p data-aos="fade-left" data-aos-duration="900">John Smith, Esq., is a seasoned criminal defense
                            attorney with
                            over 15 years of experience. He is committed to providing aggressive legal representation and
                            ensuring that
                            every client's rights are upheld. With a track record of winning cases and...</p>
                        <div class="about4-counter-boxs">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="about7-counter-box" data-aos="fade-left" data-aos-duration="700">
                                        <h1><span class="counter">76</span>+</h1>
                                        <p>Projects Completed</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="about7-counter-box" data-aos="fade-left" data-aos-duration="900">
                                        <h1><span class="counter">76</span>+</h1>
                                        <p>Projects Completed</p>
                                    </div>
                                </div>

                            </div>
                            <div class="space30"></div>
                            <div class="" data-aos="fade-left" data-aos-duration="800">
                                <a href="{{ route('second', ['others', 'about'])}}" class="theme-btn8">More About Us <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====about end=======-->

    <!--=====team start=======-->

    <div class="team7 sp3" id="team" style="background-color: #F4F3EF;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding7">
                        <h1 class="font-f-7" data-aos="fade-up" data-aos-duration="700">Meet Our Attorneys</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="900">Our team of highly experienced and dedicated
                            attorneys is
                            committed to providing top-notch legal representation. With a deep understanding of the law and
                            a track
                            record.</p>
                    </div>
                </div>
            </div>

            <div class="space30"></div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team7-box text-center" data-aos="fade-left" data-aos-duration="700">
                        <div class="team7-box-img img5 img100">
                            <img src="/img/image/team7-img1.png" alt="">
                        </div>
                        <div class="space20"></div>
                        <div class="hadding7">
                            <p>Senior Lawyer</p>
                            <div class="space8"></div>
                            <h4><a href="#" class="font-f-7">Jone Barnsley</a></h4>

                            <div class="space16"></div>

                            <ul class="team7-icons">
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team7-box text-center" data-aos="fade-left" data-aos-duration="900">
                        <div class="team7-box-img img5 img100">
                            <img src="/img/image/team7-img2.png" alt="">
                        </div>
                        <div class="space20"></div>
                        <div class="hadding7">
                            <p>Junior Atorney</p>
                            <div class="space8"></div>
                            <h4><a href="#" class="font-f-7">Orlova Aleksey</a></h4>

                            <div class="space16"></div>

                            <ul class="team7-icons">
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="team7-box text-center" data-aos="fade-left" data-aos-duration="700">
                        <div class="team7-box-img img5 img100">
                            <img src="/img/image/team7-img3.png" alt="">
                        </div>
                        <div class="space20"></div>
                        <div class="hadding7">
                            <p>General Attorney</p>
                            <div class="space8"></div>
                            <h4><a href="#" class="font-f-7">Jessica Hersey</a></h4>

                            <div class="space16"></div>

                            <ul class="team7-icons">
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="team7-box text-center" data-aos="fade-left" data-aos-duration="1200">
                        <div class="team7-box-img img5 img100">
                            <img src="/img/image/team7-img4.png" alt="">
                        </div>
                        <div class="space20"></div>
                        <div class="hadding7">
                            <p>General Attorney</p>
                            <div class="space8"></div>
                            <h4><a href="#" class="font-f-7">Jessica Hersey</a></h4>

                            <div class="space16"></div>

                            <ul class="team7-icons">
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!--=====team end=======-->


    <!--=====testimonial start=======-->

    <div class="tes7 sp3" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding7">
                        <h1 class="font-f-7" data-aos="fade-up" data-aos-duration="700">Trusted by Our Customers</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="900">At Equity, we provide personalized and effective
                            solutions for a
                            wide range of legal needs.We are getting strength from our clients.</p>
                    </div>
                </div>
            </div>
            <div class="space60"></div>
            <div class="row">
                <div class="tes6-slider-all owl-carousel" data-aos="fade-up" data-aos-duration="1000">


                    <div class="tes6-single-slider tes7-single-slider">
                        <div class="tes6-slider-icon">
                            <img src="/img/icons/tes7-icon.svg" alt="">
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



                    <div class="tes6-single-slider tes7-single-slider">
                        <div class="tes6-slider-icon">
                            <img src="/img/icons/tes7-icon.svg" alt="">
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

                    <div class="tes6-single-slider tes7-single-slider">
                        <div class="tes6-slider-icon">
                            <img src="/img/icons/tes7-icon.svg" alt="">
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



                    <div class="tes6-single-slider tes7-single-slider">
                        <div class="tes6-slider-icon">
                            <img src="/img/icons/tes7-icon.svg" alt="">
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



                    <div class="tes6-single-slider tes7-single-slider">
                        <div class="tes6-slider-icon">
                            <img src="/img/icons/tes7-icon.svg" alt="">
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



                    <div class="tes6-single-slider tes7-single-slider">
                        <div class="tes6-slider-icon">
                            <img src="/img/icons/tes7-icon.svg" alt="">
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

    <!--=====counter start=======-->

    <div class="counter7">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="" data-aos="fade-up" data-aos-duration="700">
                        <div class="counter-box7 hadding7">
                            <h1 class="font-f-7"><span class="counter">400</span>+</h1>
                            <div class="space16"></div>
                            <p>Consulting Solution</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="" data-aos="fade-up" data-aos-duration="900">
                        <div class="counter-box7 hadding7">
                            <h1 class="font-f-7"><span class="counter">400</span>+</h1>
                            <div class="space16"></div>
                            <p>Consulting Solution</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="" data-aos="fade-up" data-aos-duration="700">
                        <div class="counter-box7 hadding7">
                            <h1 class="font-f-7"><span class="counter">400</span>+</h1>
                            <div class="space16"></div>
                            <p>Consulting Solution</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="" data-aos="fade-up" data-aos-duration="900">
                        <div class="counter-box7 hadding7">
                            <h1 class="font-f-7"><span class="counter">400</span>+</h1>
                            <div class="space16"></div>
                            <p>Consulting Solution</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--=====counter end=======-->


    <!--=====blog start=======-->

    <div class="blog7 sp3" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding6">
                        <h1 class="font-f-7" data-aos="fade-up" data-aos-duration="700">Featured Blog Post</h1>
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
                    <div class="blog6-box" data-aos="fade-up" data-aos-duration="700">
                        <div class="blog6-box-img img100">
                            <img src="/img/image/blog6-img1.png" alt="">
                        </div>
                        <div class="hadding6 blog6-hadding">
                            <a href="#" class="blog6-tag">#Talent Management</a>
                            <div class="space12"></div>
                            <h3><a href="{{ route('second', ['blog-details', 'index'])}}" class="font-f-7">Remote Work Best Practices: Keeping Teams
                                    Connected</a>
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
                    <div class="blog6-box" data-aos="fade-up" data-aos-duration="1000">
                        <div class="blog6-box-img img100">
                            <img src="/img/image/blog6-img2.png" alt="">
                        </div>
                        <div class="hadding6 blog6-hadding">
                            <a href="#" class="blog6-tag">#Talent Management</a>
                            <div class="space12"></div>
                            <h3><a href="{{ route('second', ['blog-details', 'index'])}}" class="font-f-7">Navigating HR Compliance: Tips for a
                                    Risk-Free
                                    Workplace</a></h3>
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
                    <div class="blog6-box" data-aos="fade-up" data-aos-duration="900">
                        <div class="blog6-box-img img100">
                            <img src="/img/image/blog6-img3.png" alt="">
                        </div>
                        <div class="hadding6 blog6-hadding">
                            <a href="#" class="blog6-tag">#Talent Management</a>
                            <div class="space12"></div>
                            <h3><a href="{{ route('second', ['blog-details', 'index'])}}" class="font-f-7">Diversity and Inclusion in the Workplace: A
                                    Path to
                                    Success</a></h3>
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

    <div class="contact5 sp3" id="contact" style="background-color: #F4F3EF;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding7">
                        <h1 class="font-f-7" data-aos="fade-up" data-aos-duration="700">Get in Touch with Us Today</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="900">Get in touch with our experienced immigration
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
                                    <button class="theme-btn8">Submit Now<span><i
                                                class="fa-solid fa-arrow-right"></i></span></button>

                                </div>


                            </div>
                        </form>
                    </div>

                    <div class="col-lg-5">
                        <div class="contact5-boxs contact7-boxs">
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

    <!--=====cta start=======-->

    <div class="cta7">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hadding7-w">
                        <h1 class="font-f-7">Transform Your HR Practices?</h1>
                        <div class="space16"></div>
                        <p>Unlock the full potential of your workforce with our tailored HR manage consulting services.
                            Whether you're
                            looking to optimize recruitment, enhance employe.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cta6-buttons">
                        <a href="{{ route('second', ['services', 'index'])}}" class="cta7-btn1">Request HR Consultation</a>
                        <a href="{{ route('second', ['others', 'contact'])}}" class="cta7-btn2">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====cta end=======-->


    <!--=====Footer start=======-->
    @include('components/footer2', [
        'areaNum' => '7',
        'bgColor' => '1C1C57',
        'logo' => '/img/logo/footer-logo7.svg',
        'buttonClass' => 'subscribe-footer6',
        'socialClass' => 'social7',
        'btnClass' => 'theme-btn8',
    ])
@endsection
