@extends('layouts.base', ['title' => 'Service || Business Consulting Consulting', 'logo' => '/img/logo/titel1.svg'])

@section('body_attribute')
    class="font-f-4"
@endsection

@section('content')
    <x-topbar headClass="header-area-all-pages" logo="/img/logo/header1-logo.svg" exClass="1">
        <div class="home2-header-buttons">
            <div class="button1-all">
                <a href="{{ route('second', ['others', 'contact'])}}" class="comon-button">Get Started<span></span></a>
            </div>
        </div>
    </x-topbar>

    <!--=====page hero start=======-->
    <div class="page-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-hero-haddig">
                        <h1>Our Services</h1>
                        <div class="page-hero-p">
                            <a href="{{ route('second',['landing', 'index'])}}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Our Services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====page hero end=======-->

    <!--=====service start=======-->
    <div class="about-page-service sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="">
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
                                    goals. <br> We assess your current HR </p>
                                <div class="space24"></div>
                                <a class="learn-more1" href="{{ route('second', ['services', 'details'])}}">Read More<span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="">
                        <div class="service1-box">
                            <div class="">
                                <div class="service1-box-icon">
                                    <img src="/img/icons/service1-icon2.svg" alt="">
                                </div>
                            </div>
                            <div class="hadding1 text-start">
                                <h2><a href="service-details  ">HR Compliance and Policies</a></h2>
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
                    <div class="">
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
                    <div class="">
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

                <div class="col-lg-6">
                    <div class="">
                        <div class="service1-box">
                            <div class="">
                                <div class="service1-box-icon">
                                    <img src="/img/icons/service1-icon5.svg" alt="">
                                </div>
                            </div>
                            <div class="hadding1 text-start">
                                <h2><a href="{{ route('second', ['services', 'details'])}}">HR Strategy and Planning</a></h2>
                                <div class="space14"></div>
                                <p>Our expert consultants work with you to develop a comprehensive HR strategy aligned with
                                    your business
                                    goals. <br> We assess your current HR </p>
                                <div class="space24"></div>
                                <a class="learn-more1" href="{{ route('second', ['services', 'details'])}}">Read More<span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="">
                        <div class="service1-box">
                            <div class="">
                                <div class="service1-box-icon">
                                    <img src="/img/icons/service1-icon6.svg" alt="">
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
                    <div class="">
                        <div class="service1-box">
                            <div class="">
                                <div class="service1-box-icon">
                                    <img src="/img/icons/service1-icon7.svg" alt="">
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
                    <div class="">
                        <div class="service1-box">
                            <div class="">
                                <div class="service1-box-icon">
                                    <img src="/img/icons/service1-icon8.svg" alt="">
                                </div>
                            </div>
                            <div class="hadding1 text-start">
                                <h2><a href="{{ route('second', ['services', 'details'])}}"">Organizational Change Management</a></h2>
                                <div class=" space14">
                                </div>
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
        </div>
    </div>
    <!--=====service end=======-->

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

    <!--=====Footer start=======-->
    @include('components/footer')
@endsection
