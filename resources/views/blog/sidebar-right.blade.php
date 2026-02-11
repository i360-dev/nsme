@extends('layouts.base', ['title' => 'Blog Sidebar Right || Advisr Tax Consulting', 'logo' => '/img/logo/titel1.svg'])

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
                        <h1>Blog Right Sidebar</h1>
                        <div class="page-hero-p">
                            <a href="{{ route('second',['landing', 'index'])}}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Blog Right Sidebar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====page hero end=======-->

    <!--=====blog sidebar start=======-->

    <div class="blog-sidebar-all sp3">
        <div class="container">
            <div class="row">


                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog1-single-box active page-blog1-single-box">
                                <div class="blog1-box-img img100">
                                    <img src="/img/image/blog1-img1.png" alt="">
                                </div>
                                <div class="blog1-hadding">
                                    <ul>
                                        <li><a href="#" class="span">11 March, 2023</a></li>
                                    </ul>
                                    <div class="space14"></div>
                                    <h4><a href="{{ route('second', ['blog-details', 'index'])}}">How consultation in business is affecting new ventures
                                        </a></h4>
                                    <div class="space30"></div>
                                    <a class="learn-more1" href="{{ route('second', ['blog-details', 'index'])}}">Read More<span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="blog1-single-box active page-blog1-single-box">
                                <div class="blog1-box-img img100">
                                    <img src="/img/image/blog1-img2.png" alt="">
                                </div>
                                <div class="blog1-hadding">
                                    <ul>
                                        <li><a href="#" class="span">16 March, 2023</a></li>
                                    </ul>
                                    <div class="space14"></div>
                                    <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Challanges of consultating new Business Firms </a></h4>
                                    <div class="space30"></div>
                                    <a class="learn-more1" href="{{ route('second', ['blog-details', 'index'])}}">Read More<span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="blog1-single-box active page-blog1-single-box">
                                <div class="blog1-box-img img100">
                                    <img src="/img/image/blog1-img3.png" alt="">
                                </div>
                                <div class="blog1-hadding">
                                    <ul>
                                        <li><a href="#" class="span">03 April, 2023</a></li>
                                    </ul>
                                    <div class="space14"></div>
                                    <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Revitalising your people in to a retail downturn</a>
                                    </h4>
                                    <div class="space30"></div>
                                    <a class="learn-more1" href="{{ route('second', ['blog-details', 'index'])}}">Read More<span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="blog1-single-box active page-blog1-single-box">
                                <div class="blog1-box-img img100">
                                    <img src="/img/image/blog1-img4.png" alt="">
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

                        <div class="col-lg-6">
                            <div class="blog1-single-box active page-blog1-single-box">
                                <div class="blog1-box-img img100">
                                    <img src="/img/image/blog1-img5.png" alt="">
                                </div>
                                <div class="blog1-hadding">
                                    <ul>
                                        <li><a href="#" class="span">22 April, 2023</a></li>
                                    </ul>
                                    <div class="space14"></div>
                                    <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Explore our regularly updated blog, where we share
                                            expert </a></h4>
                                    <div class="space30"></div>
                                    <a class="learn-more1" href="{{ route('second', ['blog-details', 'index'])}}">Read More<span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="blog1-single-box active page-blog1-single-box">
                                <div class="blog1-box-img img100">
                                    <img src="/img/image/blog1-img6.png" alt="">
                                </div>
                                <div class="blog1-hadding">
                                    <ul>
                                        <li><a href="#" class="span">19 March, 2023</a></li>
                                    </ul>
                                    <div class="space14"></div>
                                    <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Our commitment doesn't end with implementation. </a>
                                    </h4>
                                    <div class="space30"></div>
                                    <a class="learn-more1" href="{{ route('second', ['blog-details', 'index'])}}">Read More<span><i
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

                <div class="col-lg-4">
                    <div class="space28"></div>
                    <div class="blog-sidebar _relative">

                        <div class="blog-shearch">
                            <form action="#">
                                <div class="search-input">
                                    <input type="search" placeholder="Search here....">
                                </div>
                                <div class="search-button">
                                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="space40"></div>


                        <div class="single-widget">
                            <h3>Recent Posts</h3>

                            <div class="space24"></div>
                            <div class="recent-post">
                                <div class="">
                                    <div class="recent-img">
                                        <img src="/img/image/blog-sidebar-post1.png" alt="">
                                    </div>
                                </div>
                                <div class="recent-post-content">
                                    <h6><a href="#">Leadership Burnout: What causes it & how avoid it.</a></h6>
                                    <div class="space6"></div>
                                    <div class="blog-date-time">
                                        <ul class="blog-date">
                                            <li><img src="/img/icons/date.svg" alt=""> 11/02/2022</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>


                            <div class="recent-post">

                                <div class="">
                                    <div class="recent-img">
                                        <img src="/img/image/blog-sidebar-post2.png" alt="">
                                    </div>
                                </div>

                                <div class="recent-post-content">
                                    <h6><a href="#">New Consulting For All Kind Offer Finance...</a></h6>
                                    <div class="space6"></div>
                                    <div class="blog-date-time">
                                        <ul class="blog-date">
                                            <li><img src="/img/icons/date.svg" alt=""> 11/02/2022</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>


                            <div class="recent-post">
                                <div class="">
                                    <div class="recent-img">
                                        <img src="/img/image/blog-sidebar-post3.png" alt="">
                                    </div>
                                </div>

                                <div class="recent-post-content">
                                    <h6><a href="#">What we are capable to usually discovered...</a></h6>
                                    <div class="space6"></div>
                                    <div class="blog-date-time">
                                        <ul class="blog-date">
                                            <li><img src="/img/icons/date.svg" alt=""> 11/02/2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="recent-post">
                                <div class="">
                                    <div class="recent-img">
                                        <img src="/img/image/blog-sidebar-post4.png" alt="">
                                    </div>
                                </div>
                                <div class="recent-post-content">
                                    <h6><a href="#">Questions every work business owner able...</a></h6>
                                    <div class="space6"></div>
                                    <div class="blog-date-time">
                                        <ul class="blog-date">
                                            <li><img src="/img/icons/date.svg" alt=""> 11/02/2022</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="single-widget">
                            <h3>Categories</h3>

                            <div class="space24"></div>

                            <ul class="Categories-list">
                                <li><a href="#">Business</a><a href="#">(3)</a></li>
                                <li><a href="#">Corporate</a><a href="#">(2)</a></li>
                                <li><a href="#">Consultancy</a><a href="#">(4)</a></li>
                                <li><a href="#">Finance</a><a href="#">(1)</a></li>
                                <li><a href="#">Consultancy</a><a href="#">(6)</a></li>
                                <li><a href="#">HR Consultency</a><a href="#">(5)</a></li>
                            </ul>
                        </div>

                        <div class="single-widget widget_tag_cloud">
                            <h3>Tags</h3>
                            <div class="space24"></div>
                            <div class="tagcloud">
                                <a href="#">Finance</a>
                                <a href="#">Business</a>
                                <a href="#">Consultancy</a>
                                <a href="#">Process</a>
                                <a href="#">Campeigns</a>
                                <a href="#">Corporate</a>
                                <a href="#">HR Consultency</a>
                                <a href="#">Consultancy</a>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--=====blog sidebar end=======-->

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
