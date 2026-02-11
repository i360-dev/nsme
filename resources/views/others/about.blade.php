@extends('layouts.base', ['title' => 'About || Advisr Tax Consulting', 'logo' => '/img/logo/titel1.svg'])

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
                        <h1>About Us</h1>
                        <div class="page-hero-p">
                            <a href="{{ route('second',['landing', 'index'])}}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>About Us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====page hero end=======-->

    <!--=====about start=======-->
    <div class="about1 sp3" style="background-color: #EFF0F7;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about1-image-all">
                        <div class="about-1-img1 aniamtion-key-1">
                            <img src="/img/shapes/about1-shape1.svg" alt="">
                        </div>
                        <div class="about-1-img2 border5">
                            <img src="/img/image/about1-img1.png" alt="">
                        </div>
                        <div class="about-1-img3 border5">
                            <img src="/img/image/about1-img2.png" alt="">
                        </div>
                        <div class="about-1-img4">
                            <img src="/img/image/about1-img3.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="page-hadding about1-hadding">
                        <h1 class="titleGreathorned">Partner with Our Trusted Consultants Today.</h1>
                        <div class="space24"></div>
                        <p>At Advisor Consulting Company, we are a trusted business consulting firm dedicated to helping
                            businesses thrive and reach their full potential.Our team of experienced consultants brings
                            diverse industry </p>
                        <div class="space20"></div>
                        <p>knowledge and expertise in various business disciplines.We prioritize understanding your unique
                            challenges and goals to deliver customized solutions tailored to your specific needs</p>
                        <div class="space40"></div>
                        <a href="#" class="comon-button">More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====about end=======-->

    <!--=====conunter start=======-->

    <div class="about-counter sp3" style="background-color: #03163B;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="page-hadding-w about1-hadding">
                        <h1>One Of The Fastest Way To <br> Gain Business Success</h1>
                        <div class="space24"></div>
                        <p>At Advisor Consulting Company, we are a trusted business consulting firm dedicated to helping
                            businesses thrive and reach their full potential.Our team of experienced consultants brings
                            diverse industry </p>
                        <div class="space20"></div>
                        <p>knowledge and expertise in various business disciplines.We prioritize understanding your unique
                            challenges and goals to deliver customized solutions tailored to your specific needs</p>
                        <div class="space40"></div>
                        <a href="#" class="comon-button2">More About Us</a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="counter-box-all _relative">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 align-items-center">
                                <div class="counter-about-box text-center">
                                    <div class="">
                                        <h1><span class="counter">90</span>%</h1>
                                        <p>Satisfied Customer</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6 text-center align-items-center">
                                <div class="counter-about-box">
                                    <div class="text-center">
                                        <h1><span span class="counter">23</span>k+</h1>
                                        <p>Projects Success
                                            Rate</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6 text-center">
                                <div class="counter-about-box">
                                    <div class="text-center">
                                        <h1><span span class="counter">42</span>k+</h1>
                                        <p>Employers Work All Over World</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6 text-center">
                                <div class="counter-about-box">
                                    <div class="text-center">
                                        <h1><span span class="counter">514</span>+</h1>
                                        <p>Projects Complete</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-counter-shap aniamtion-key-1"
                            style="position: absolute; top: 50px; right: 100px;">
                            <img src="/img/shapes/counter-shape.svg" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--=====counter end=======-->

    <!--=====service start=======-->
    <div class="about-page-service sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-hadding">
                        <h1 class="square">Cosulting Services We Offered</h1>
                        <div class="space24"></div>
                        <p>Our team of experienced consultants combines industry knowledge, cutting-edge technology, and
                            innovative strategies to guide you towards a brighter and greener future.
                        </p>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
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
                                <h2><a href="{{ route('second', ['services', 'index'])}}">HR Strategy and Planning</a></h2>
                                <div class="space14"></div>
                                <p>Our expert consultants work with you to develop a comprehensive HR strategy aligned with
                                    your business goals. <br> We assess your current HR </p>
                                <div class="space24"></div>
                                <a class="learn-more1" href="{{ route('second', ['services', 'index'])}}">Read More<span><i
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
                                <h2><a href="{{ route('second', ['services', 'index'])}}">HR Compliance and Policies</a></h2>
                                <div class="space14"></div>
                                <p>We ensure your HR policies and procedures are compliant with local labor laws and
                                    regulations. Our consultants review and update your employee handbook,</p>
                                <div class="space24"></div>
                                <a class="learn-more1" href="{{ route('second', ['services', 'index'])}}">Read More<span><i
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
                                <h2><a href="{{ route('second', ['services', 'index'])}}">HR Technology Solutions</a></h2>
                                <div class="space14"></div>
                                <p>We ensure your HR policies and procedures are compliant with local labor laws and
                                    regulations. Our consultants review and update your employee handbook,</p>
                                <div class="space24"></div>
                                <a class="learn-more1" href="{{ route('second', ['services', 'index'])}}">Read More<span><i
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
                                <h2><a href="{{ route('second', ['services', 'index'])}}">Organizational Change Management</a></h2>
                                <div class="space14"></div>
                                <p>We ensure your HR policies and procedures are compliant with local labor laws and
                                    regulations. Our consultants review and update your employee handbook,</p>
                                <div class="space24"></div>
                                <a class="learn-more1" href="{{ route('second', ['services', 'index'])}}">Read More<span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="space40"></div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="#" class="comon-button">More About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!--=====service end=======-->

    <!--=====brand start=======-->
    <div class="about-brand">
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

    <!--=====team start=======-->

    <div class="about-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="page-hadding">
                        <h1>We have the expert team </h1>
                        <div class="space16"></div>
                        <p>Our team of experienced consultants combines industry knowledge, cutting-edge technology, and
                            innovative strategies to guide you towards a brighter and greener future. </p>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">
                <div class="slider-all owl-carousel">

                    <div class="about-team-box ">
                        <div class="text-center _relative">
                            <div class="about-team-img img100">
                                <img src="/img/image/about-team1.png" alt="">
                            </div>
                            <div class="page-hadding about-team-hadding">
                                <h4><a href="#">Malisa Omanis</a></h4>
                                <div class="space8"></div>
                                <p>Manager</p>
                            </div>
                            <ul class="about-team-icons">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="about-team-box ">
                        <div class="text-center _relative">
                            <div class="about-team-img img100">
                                <img src="/img/image/about-team2.png" alt="">
                            </div>
                            <div class="page-hadding about-team-hadding">
                                <h4><a href="#">Marina Lamos</a></h4>
                                <div class="space8"></div>
                                <p>Senior Consultant</p>
                            </div>
                            <ul class="about-team-icons">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="about-team-box ">
                        <div class="text-center _relative">
                            <div class="about-team-img img100">
                                <img src="/img/image/about-team3.png" alt="">
                            </div>
                            <div class="page-hadding about-team-hadding">
                                <h4><a href="#">Malisa Omanis</a></h4>
                                <div class="space8"></div>
                                <p>Co-Funder</p>
                            </div>
                            <ul class="about-team-icons">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="about-team-box ">
                        <div class="text-center _relative">
                            <div class="about-team-img img100">
                                <img src="/img/image/about-team1.png" alt="">
                            </div>
                            <div class="page-hadding about-team-hadding">
                                <h4><a href="#">Anelina Moron</a></h4>
                                <div class="space8"></div>
                                <p>Business Specialist</p>
                            </div>
                            <ul class="about-team-icons">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="about-team-box ">
                        <div class="text-center _relative">
                            <div class="about-team-img img100">
                                <img src="/img/image/about-team1.png" alt="">
                            </div>
                            <div class="page-hadding about-team-hadding">
                                <h4><a href="#">Malisa Omanis</a></h4>
                                <div class="space8"></div>
                                <p>Manager</p>
                            </div>
                            <ul class="about-team-icons">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="about-team-box ">
                        <div class="text-center _relative">
                            <div class="about-team-img img100">
                                <img src="/img/image/about-team2.png" alt="">
                            </div>
                            <div class="page-hadding about-team-hadding">
                                <h4><a href="#">Marina Lamos</a></h4>
                                <div class="space8"></div>
                                <p>Senior Consultant</p>
                            </div>
                            <ul class="about-team-icons">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="about-team-box ">
                        <div class="text-center _relative">
                            <div class="about-team-img img100">
                                <img src="/img/image/about-team3.png" alt="">
                            </div>
                            <div class="page-hadding about-team-hadding">
                                <h4><a href="#">Malisa Omanis</a></h4>
                                <div class="space8"></div>
                                <p>Co-Funder</p>
                            </div>
                            <ul class="about-team-icons">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="about-team-box ">
                        <div class="text-center _relative">
                            <div class="about-team-img img100">
                                <img src="/img/image/about-team1.png" alt="">
                            </div>
                            <div class="page-hadding about-team-hadding">
                                <h4><a href="#">Anelina Moron</a></h4>
                                <div class="space8"></div>
                                <p>Business Specialist</p>
                            </div>
                            <ul class="about-team-icons">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="about-team-box">
                        <div class="text-center _relative">
                            <div class="about-team-img img100">
                                <img src="/img/image/about-team2.png" alt="">
                            </div>
                            <div class="page-hadding about-team-hadding">
                                <h4><a href="#">Marina Lamos</a></h4>
                                <div class="space8"></div>
                                <p>Senior Consultant</p>
                            </div>
                            <ul class="about-team-icons">
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!--=====team end=======-->

    <!--=====blog start=======-->
    <div class="blog1 sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-hadding">
                        <h1>Latest News and Blogs</h1>
                        <div class="space24"></div>
                        <p>Consulting service is a key part of the future of energy. It can help you save money on your
                            electricity bill, and it can also help to reduce your carbon footprint.</p>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="">
                        <div class="blog1-single-box page-blog1-single-box">
                            <div class="blog1-box-img img100">
                                <img src="/img/image/blog1-img1.png" alt="">
                            </div>
                            <div class="blog1-hadding">
                                <a href="#" class="span">15 March, 2023</a>
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
                    <div class="">
                        <div class="blog1-single-box active page-blog1-single-box">
                            <div class="blog1-box-img img100">
                                <img src="/img/image/blog1-img2.png" alt="">
                            </div>
                            <div class="blog1-hadding">
                                <a href="#" class="span">19 March, 2023</a>
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
                    <div class="">
                        <div class="blog1-single-box page-blog1-single-box">
                            <div class="">
                                <div class="blog1-box-img border-50 img100">
                                    <img src="/img/image/blog1-img3.png" alt="">
                                </div>
                            </div>
                            <div class="blog1-hadding">
                                <a href="#" class="span">22 April, 2023</a>
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
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('second', ['blog', 'index'])}}" class="comon-button">View Blogs</a>
                </div>
            </div>
        </div>
    </div>

    <!--=====blog end=======-->

    <!--=====cta start=======-->
    <div class="cta4" style="background-color: #021334;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
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
