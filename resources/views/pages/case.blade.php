@extends('layouts.base', ['title' => 'Case Study || Advisr Tax Consulting', 'logo' => '/img/logo/titel1.svg'])

@section('body_attribute')
    class="font-f-4"
@endsection

@section('content')
    <!--=====HEADER START=======-->
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
                        <h1>Case Studies</h1>
                        <div class="page-hero-p">
                            <a href="{{ route('second',['landing', 'index'])}}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Case Studies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====page hero end=======-->

    <!--=====case start=======-->
    <div class="case-studies sp3">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="case-box-all">
                        <div class="case-box-img case-box-img-page img100">
                            <img src="/img/image/case1-img1.png" alt="">
                        </div>
                        <div class="case-box-after case-box-after-page">
                            <div class="case-box-hover">
                                <div class="case-hover-hadding">
                                    <h4><a href="#">Financial Investment</a></h4>
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
                                    <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="case-box-all">
                        <div class="case-box-img case-box-img-page img100">
                            <img src="/img/image/case1-img2.png" alt="">
                        </div>
                        <div class="case-box-after case-box-after-page">
                            <div class="case-box-hover">
                                <div class="case-hover-hadding">
                                    <h4><a href="#">HR Consulting</a></h4>
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
                                    <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="case-box-all">
                        <div class="case-box-img case-box-img-page img100">
                            <img src="/img/image/case1-img3.png" alt="">
                        </div>
                        <div class="case-box-after case-box-after-page">
                            <div class="case-box-hover">
                                <div class="case-hover-hadding">
                                    <h4><a href="#">Cryptoocurrency Taxes</a></h4>
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
                                    <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="case-box-all">
                        <div class="case-box-img case-box-img-page img100">
                            <img src="/img/image/case1-img4.png" alt="">
                        </div>
                        <div class="case-box-after case-box-after-page">
                            <div class="case-box-hover">
                                <div class="case-hover-hadding">
                                    <h4><a href="#">Business Immigration</a></h4>
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
                                    <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="case-box-all">
                        <div class="case-box-img case-box-img-page img100">
                            <img src="/img/image/case1-img5.png" alt="">
                        </div>
                        <div class="case-box-after case-box-after-page">
                            <div class="case-box-hover">
                                <div class="case-hover-hadding">
                                    <h4><a href="#">Individual Taxation</a></h4>
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
                                    <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="case-box-all">
                        <div class="case-box-img case-box-img-page img100">
                            <img src="/img/image/case1-img6.png" alt="">
                        </div>
                        <div class="case-box-after case-box-after-page">
                            <div class="case-box-hover">
                                <div class="case-hover-hadding">
                                    <h4><a href="#">International Business</a></h4>
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
                                    <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
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

    <!--=====case end=======-->

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
