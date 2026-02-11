@extends('layouts.base', ['title' => 'Service2 || Business Consulting Consulting', 'logo' => '/img/logo/titel1.svg'])

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
                            <p>Our Service 2</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====page hero end=======-->
    <!--=====blog start=======-->
    <div class="blog1 sp3">
        <div class="container">
            <div class="row">


                <div class="col-lg-4">
                    <div class="blog1-single-box active page-blog1-single-box page-service-box2">
                        <div class="blog1-box-img img100">
                            <img src="/img/image/blog1-img1.png" alt="">
                        </div>
                        <div class="blog1-hadding hadding1">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">HR Strategy and Planning</a></h4>
                            <div class="space14"></div>
                            <p>Our expert consultants work with you to develop a comprehensive HR strategy aligned with your
                                business
                                goals. We assess your current HR </p>
                            <div class="space24"></div>
                            <a class="learn-more1" href="{{ route('second', ['services', 'details'])}}">Read More<span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog1-single-box active page-blog1-single-box page-service-box2">
                        <div class="blog1-box-img img100">
                            <img src="/img/image/blog1-img2.png" alt="">
                        </div>
                        <div class="blog1-hadding hadding1">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">HR Compliance and Policies</a></h4>
                            <div class="space14"></div>
                            <p>Our expert consultants work with you to develop a comprehensive HR strategy aligned with your
                                business
                                goals. We assess your current HR </p>
                            <div class="space24"></div>
                            <a class="learn-more1" href="{{ route('second', ['services', 'details'])}}">Read More<span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog1-single-box active page-blog1-single-box page-service-box2">
                        <div class="blog1-box-img img100">
                            <img src="/img/image/blog1-img3.png" alt="">
                        </div>
                        <div class="blog1-hadding hadding1">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">HR Technology Solutions</a></h4>
                            <div class="space14"></div>
                            <p>Our expert consultants work with you to develop a comprehensive HR strategy aligned with your
                                business
                                goals. We assess your current HR </p>
                            <div class="space24"></div>
                            <a class="learn-more1" href="{{ route('second', ['services', 'details'])}}">Read More<span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog1-single-box active page-blog1-single-box page-service-box2">
                        <div class="blog1-box-img img100">
                            <img src="/img/image/blog1-img4.png" alt="">
                        </div>
                        <div class="blog1-hadding hadding1">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">Organizational Change Management</a></h4>
                            <div class="space14"></div>
                            <p>Our expert consultants work with you to develop a comprehensive HR strategy aligned with your
                                business
                                goals. We assess your current HR </p>
                            <div class="space24"></div>
                            <a class="learn-more1" href="{{ route('second', ['services', 'details'])}}">Read More<span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog1-single-box active page-blog1-single-box page-service-box2">
                        <div class="blog1-box-img img100">
                            <img src="/img/image/blog1-img5.png" alt="">
                        </div>
                        <div class="blog1-hadding hadding1">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">HR Strategy and Planning</a></h4>
                            <div class="space14"></div>
                            <p>Our expert consultants work with you to develop a comprehensive HR strategy aligned with your
                                business
                                goals. We assess your current HR </p>
                            <div class="space24"></div>
                            <a class="learn-more1" href="{{ route('second', ['services', 'details'])}}">Read More<span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog1-single-box active page-blog1-single-box page-service-box2">
                        <div class="blog1-box-img img100">
                            <img src="/img/image/blog1-img6.png" alt="">
                        </div>
                        <div class="blog1-hadding hadding1">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">HR Strategy and Planning</a></h4>
                            <div class="space14"></div>
                            <p>Our expert consultants work with you to develop a comprehensive HR strategy aligned with your
                                business
                                goals. We assess your current HR </p>
                            <div class="space24"></div>
                            <a class="learn-more1" href="{{ route('second', ['services', 'details'])}}">Read More<span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog1-single-box active page-blog1-single-box page-service-box2">
                        <div class="blog1-box-img img100">
                            <img src="/img/image/blog1-img7.png" alt="">
                        </div>
                        <div class="blog1-hadding hadding1">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">Organizational Change Management</a></h4>
                            <div class="space14"></div>
                            <p>Our expert consultants work with you to develop a comprehensive HR strategy aligned with your
                                business
                                goals. We assess your current HR </p>
                            <div class="space24"></div>
                            <a class="learn-more1" href="{{ route('second', ['services', 'details'])}}">Read More<span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog1-single-box active page-blog1-single-box page-service-box2">
                        <div class="blog1-box-img img100">
                            <img src="/img/image/blog1-img8.png" alt="">
                        </div>
                        <div class="blog1-hadding hadding1">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">HR Technology Solutions</a></h4>
                            <div class="space14"></div>
                            <p>Our expert consultants work with you to develop a comprehensive HR strategy aligned with your
                                business
                                goals. We assess your current HR </p>
                            <div class="space24"></div>
                            <a class="learn-more1" href="{{ route('second', ['services', 'details'])}}">Read More<span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog1-single-box active page-blog1-single-box page-service-box2">
                        <div class="blog1-box-img img100">
                            <img src="/img/image/blog1-img9.png" alt="">
                        </div>
                        <div class="blog1-hadding hadding1">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">Organizational Change Management</a></h4>
                            <div class="space14"></div>
                            <p>Our expert consultants work with you to develop a comprehensive HR strategy aligned with your
                                business
                                goals. We assess your current HR </p>
                            <div class="space24"></div>
                            <a class="learn-more1" href="{{ route('second', ['services', 'details'])}}">Read More<span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>


            </div>

            <div class="space60"></div>
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="theme-pagination text-center">
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-angles-left"></i></a></li>
                            <li><a class="active" href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li>...</li>
                            <li><a href="#">12</a></li>
                            <li><a href="#"><i class="fa-solid fa-angles-right"></i></a></li>
                        </ul>
                    </div>
                </div>
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

    <!--=====Footer start=======-->
    @include('components/footer')
@endsection
