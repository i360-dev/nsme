@extends('layouts.base', ['title' => 'Case Dtails 2 || Advisr Tax Consulting', 'logo' => '/img/logo/titel1.svg'])

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
                        <h1>Financial Investment</h1>
                        <div class="page-hero-p">
                            <a href="{{ route('second',['landing', 'index'])}}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Case Studies Details</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====page hero end=======-->

    <!--=====case start=======-->
    <div class="case-details-all sp3">
        <div class="container">
            <div class="row">


                <div class="col-lg-8">
                    <div class="service-details-post-all">
                        <div class="img100">
                            <img src="/img/image/case-details-img1.png" alt="">
                        </div>
                        <div class="space30"></div>
                        <div class="page-hadding">
                            <h2> HR Compliance and Policies</h2>
                            <div class="space14"></div>
                            <p> Our track record speaks for itself.We have helped numerou organizations achieve tangible
                                result including
                                improved employee engagement, increased productivity, and enhanced organizational
                                performance. Comprehensive Approach: We take a holistic view of your HR function and
                                consider the interconnectednes of various HR areas. Our integrated approach ensures that
                                your HR strategies align with your overall business objectives.
                            </p>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="space30"></div>
                                <div class="img100">
                                    <img src="/img/image/case-details-img2.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="space30"></div>
                                <div class="img100">
                                    <img src="/img/image/case-details-img3.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="space30"></div>
                        <div class="page-hadding">
                            <h2>Our Solutions </h2>
                            <div class="space14"></div>
                            <p> on the Internet tend to repeat predefined chunks as necessary, making this the first true
                                generator on the Internet. With more than 20 years of experience we can deliver the best
                                services cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                                placeat facere possimus.</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="case-details-icon-box">
                                    <div class="case-box-icon">
                                        <span>1</span>
                                    </div>
                                    <div class="page-hadding">
                                        <h4><a href="#">First appointment</a></h4>
                                        <div class="space8"></div>
                                        <p>We understand the unique HR challenge faced by technology companie and
                                            startups.Our expertise in talent acquisition,</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="case-details-icon-box">
                                    <div class="case-box-icon">
                                        <span>2</span>
                                    </div>
                                    <div class="page-hadding">
                                        <h4><a href="#">Project Brief</a></h4>
                                        <div class="space8"></div>
                                        <p>We understand the unique HR challenge faced by technology companie and
                                            startups.Our expertise in talent acquisition,</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="case-details-icon-box">
                                    <div class="case-box-icon">
                                        <span>3</span>
                                    </div>
                                    <div class="page-hadding">
                                        <h4><a href="#">Financial Analysis </a></h4>
                                        <div class="space8"></div>
                                        <p>We understand the unique HR challenge faced by technology companie and
                                            startups.Our expertise in talent acquisition,</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="case-details-icon-box">
                                    <div class="case-box-icon">
                                        <span>4</span>
                                    </div>
                                    <div class="page-hadding">
                                        <h4><a href="#">Campaign Design</a></h4>
                                        <div class="space8"></div>
                                        <p>We understand the unique HR challenge faced by technology companie and
                                            startups.Our expertise in talent acquisition,</p>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="space30"></div>
                        <div class="page-hadding">
                            <p>
                                We guide our clients through difficult issues, bringing insight and judgment to each
                                situation. Our innovativ
                                approache create original solutions to our clients most complex domestic & juristictional
                                deals and dispute
                                By thinking on behalf of our clients every day, we anticipate what they want, provide what
                                they need and build lasting relationships. Customize your pour with an added boost of
                                vitamins,

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="project-details-box">
                        <div class="project-details-hadding">
                            <h6>Project Details</h6>
                        </div>

                        <ul class="Category-list">
                            <li><a href="#"> Client Name: <span>Marico Inc. USA</span></a></li>
                            <li><a href="#">Category:<span>HR Strategy and Planning </span></a></li>
                            <li><a href="#"> Timeline: <span>21 May - 07 June 2023</span></a></li>
                            <li><a href="#"> Tags:<span>Agency, Marketing</span></a></li>
                        </ul>

                    </div>
                    <div class="space30"></div>

                    <div class="need-help _relative">
                        <div class="need-help-img img100">
                            <img src="/img/image/service-details-sidebar-img.png" alt="">
                        </div>

                        <div class="need-help-all">
                            <p class="need-help-p"> Need Any Help?</p>
                            <div class="need-border"></div>
                            <div class="coll-help">
                                <div class="">
                                    <div class="coll-help-icon">
                                        <a href="#"><i class="fa-solid fa-phone"></i></a>
                                    </div>
                                </div>
                                <div class="coll-help-text">
                                    <a href="tel:123456789">123 456 789</a> <br>
                                    <a href="tel:123456789">123 456 789</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <div class="space100"></div>

        <div class="case-studies">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center">
                        <div class="hadding1">
                            <h1>Related Projects</h1>
                            <div class="space24"></div>
                            <p>Consulting service is a key part of the future of energy. It can help you save money on your
                                electricity bill, and it can also help to reduce your carbon footprint.</p>
                        </div>
                    </div>
                </div>
                <div class="space30"></div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="space30"></div>
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
                        <div class="space30"></div>
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
