@extends('layouts.base', ['title' => 'Home 3 || Tax Consulting', 'logo' => '/img/logo/titel3.svg'])

@section('body_attribute')
    class="font-f-1"
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
                                <a href="{{ route('second',['landing', 'index'])}}"><img src="/img/logo/header3-logo.svg" alt="" />
                                </a>
                            </div>


                            <div class="main-menu-ex main-menu-ex3">
                                <ul>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#service">Service</a></li>
                                    <li><a href="#featured">Featured</a></li>
                                    <li><a href="#testimonial">Testimonial</a></li>
                                    <li><a href="#blog">Blog</a></li>

                                </ul>
                            </div>



                            <div class="home3-header-buttons">
                                <a class="buttonBox2 fifth" href="{{ route('second', ['others', 'contact'])}}">Contact Us</a>
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
    <div class="main-hero main-hero3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="main-hadding3">
                        <h1>Expert Tax Consulting Services for Individual and Businesses.</h1>
                        <div class="space24"></div>
                        <p>Maximize Your Tax Saving and Ensure Compliance.We help businesses to perform with our customized
                            solutions
                            helping them take business decisions.</p>
                        <div class="space40"></div>
                        <div class="header3-buttons">
                            <div class="">
                                <a class="buttonBox2 fifth" href="{{ route('second', ['others', 'contact'])}}">Schedule A Consultation</a>
                            </div>
                            <div class="header3-btn">
                                <a href="tel:281-378-7496">Call Us:
                                    <span>281-378-7496</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 text-center">
                    <div class="hero3-image-all">
                        <div class="hero3-img1 img100 border-70">
                            <img src="/img/image/header3-main-img2.png" alt="">
                        </div>
                        <div class="hero3-img2 border50">
                            <img src="/img/image/header3-main-img.png" alt="">
                        </div>
                        <div class="hero3-img3 aniamtion-key-2">
                            <div class="header-icon-box">
                                <div class="header-icon">
                                    <img src="/img/icons/header3-icon1.svg" alt="">
                                </div>
                                <div class="header-icon-text">
                                    <p>24/7 Hours Support</p>
                                </div>
                            </div>
                        </div>
                        <div class="hero3-img4 aniamtion-key-2">
                            <div class="header-icon-box">
                                <div class="header-icon">
                                    <img src="/img/icons/header3-icon2.svg" alt="">
                                </div>
                                <div class="header-icon-text">
                                    <p>24/7 Hours Support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====Hero end=======-->

    <!--=====serivce start=======-->
    <div class="service3 sp3" id="service" style="background-color: #333982;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding3-w">
                        <h1 data-aos="fade-up" data-aos-duration="700">Best Cosulting Services We Offered</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="800">Our team of experienced consultants combines industry
                            knowledge,
                            cutting-edge technology, and innovative strategies to guide you towards a brighter and greener
                            future. </p>
                    </div>
                </div>
            </div>
            <div class="space60"></div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="service3-box-all border3-right after3-service" data-aos="fade-up" data-aos-duration="700">
                        <div class="service3-box-icon">
                            <img src="/img/icons/service3-icon1.svg" alt="">
                        </div>
                        <div class="hadding3-w">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">Personal Tax Consulting</a></h4>
                            <div class="space14"></div>
                            <p>Our experienced consultants provide personal
                                ized tax planning and preparation services tailored to your unique financial</p>
                            <div class="space24"></div>
                            <a class="read-more3" href="{{ route('second', ['services', 'details'])}}">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service3-box-all border3-right p3-left after3-service2" data-aos="fade-up"
                        data-aos-duration="900">
                        <div class="service3-box-icon">
                            <img src="/img/icons/service3-icon2.svg" alt="">
                        </div>
                        <div class="hadding3-w">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">Business Tax Consulting</a></h4>
                            <div class="space14"></div>
                            <p>Our experienced consultants provide personal
                                ized tax planning and preparation services tailored to your unique financial</p>
                            <div class="space24"></div>
                            <a class="read-more3" href="{{ route('second', ['services', 'details'])}}">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service3-box-all p3-left" data-aos="fade-up" data-aos-duration="700">
                        <div class="service3-box-icon">
                            <img src="/img/icons/service3-icon3.svg" alt="">
                        </div>
                        <div class="hadding3-w">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">Tax Planning and Strategy</a></h4>
                            <div class="space14"> </div>
                            <p>Our experienced consultants provide personal
                                ized tax planning and preparation services tailored to your unique financial</p>
                            <div class="space24"></div>

                            <a class="read-more3" href="{{ route('second', ['services', 'details'])}}">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service3-box-all border3-top border3-right" data-aos="fade-up" data-aos-duration="900">
                        <div class="service3-box-icon">
                            <img src="/img/icons/service3-icon4.svg" alt="">
                        </div>
                        <div class="hadding3-w">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">Tax Compliance and Filing</a></h4>
                            <div class="space14"></div>
                            <p>Our experienced consultants provide personal
                                ized tax planning and preparation services tailored to your unique financial</p>
                            <div class="space24"></div>
                            <a class="read-more3" href="{{ route('second', ['services', 'details'])}}">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service3-box-all border3-top border3-right p3-left" data-aos="fade-up"
                        data-aos-duration="1000">
                        <div class="service3-box-icon">
                            <img src="/img/icons/service3-icon5.svg" alt="">
                        </div>
                        <div class="hadding3-w">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">IRS Dispute Resolution</a></h4>
                            <div class="space14"></div>
                            <p>Our experienced consultants provide personal
                                ized tax planning and preparation services tailored to your unique financial</p>
                            <div class="space24"></div>
                            <a class="read-more3" href="{{ route('second', ['services', 'details'])}}">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service3-box-all border3-top p3-left" data-aos="fade-up" data-aos-duration="700">
                        <div class="service3-box-icon">
                            <img src="/img/icons/service3-icon6.svg" alt="">
                        </div>
                        <div class="hadding3-w">
                            <h4><a href="{{ route('second', ['services', 'details'])}}">Tax Planning and Strategy</a></h4>
                            <div class="space14"></div>
                            <p>Our experienced consultants provide personal
                                ized tax planning and preparation services tailored to your unique financial</p>
                            <div class="space24"></div>

                            <a class="read-more3" href="{{ route('second', ['services', 'details'])}}">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====service end=======-->

    <!--=====about start=======-->

    <div class="about3 sp3" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about3-images">
                        <div class="about3-img1 img100" data-aos="zoom-out" data-aos-duration="700">
                            <img src="/img/image/about3-img1.png" alt="">
                        </div>
                        <div class="about3-img2" data-aos="flip-up" data-aos-duration="800">
                            <img src="/img/image/about3-img2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hadding3 about-hadding3">
                        <h1 data-aos="fade-left" data-aos-duration="700">Partner with Our Trusted Consultants Today.</h1>
                        <div class="space24"></div>
                        <p data-aos="fade-left" data-aos-duration="800">At Toxa tax Consulting Company, we are a trusted
                            tax
                            consulting firm with over 15 years of experience. Our mission is to provide exceptional tax
                            services,
                            personalized attention, and expert guidance to individuals and businesses. Our team of seasoned
                            professionals</p>
                        <div class="space20"></div>
                        <p data-aos="fade-left" data-aos-duration="1000">has in-depth knowledge of tax laws,regulations,
                            and industry
                            best practices. We stay up-to-date with the latest changes in tax legislation to ensure we
                            provide accurate
                            and reliable advice.</p>

                        <div class="space40"></div>
                        <a class="buttonBox2 fifth" href="{{ route('second', ['others', 'about'])}}">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====about end=======-->

    <!--=====mission start=======-->
    <div class="mission1 sp3" id="mission" style="background-color: #00092C;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="hadding3-w mission-hadding">
                        <h1 data-aos="fade-right" data-aos-duration="700">Why Our mission is to provide exceptional tax
                            services</h1>
                        <div class="space24"></div>
                        <p data-aos="fade-right" data-aos-duration="700">Flexible energy service is a key part of the
                            future of
                            energy. It can help you save money on your electricity bill, and it can also help to reduce your
                            carbon
                            footprint.We have a track.</p>
                        <div class="space40"></div>
                        <a data-aos-duration="700" data-aos="fade-right" class="buttonBox2 fifth"
                            href="{{ route('second', ['others', 'about'])}}">About Us</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mission-boxs-all">
                        <div class="mission-box" data-aos="fade-left" data-aos-duration="700">
                            <div class="">
                                <div class="mission-box-icon">
                                    <img src="/img/icons/mission-icon1.svg" alt="">
                                </div>
                            </div>

                            <div class="mission-hadding hadding3-w">
                                <h4><a href="{{ route('second', ['others', 'about'])}}">Expertise</a></h4>
                                <div class="space12"></div>
                                <p>Our team of seasoned professionals has in-depth knowledge of tax laws, regulations, and
                                    industry best
                                    practices. We stay up-to-date with the latest changes in tax.</p>
                            </div>
                        </div>
                        <div class="mission-border"></div>
                        <div class="mission-box" data-aos="fade-left" data-aos-duration="900">
                            <div class="">
                                <div class="mission-box-icon">
                                    <img src="/img/icons/mission-icon2.svg" alt="">
                                </div>
                            </div>

                            <div class="mission-hadding hadding3-w">
                                <h4><a href="{{ route('second', ['others', 'about'])}}">Client-Centric Approach</a></h4>
                                <div class="space12"></div>
                                <p>Our team of seasoned professionals has in-depth knowledge of tax laws, regulations, and
                                    industry best
                                    practices. We stay up-to-date with the latest changes in tax.</p>
                            </div>
                        </div>
                        <div class="mission-border"></div>
                        <div class="mission-box" data-aos="fade-left" data-aos-duration="700">
                            <div class="">
                                <div class="mission-box-icon">
                                    <img src="/img/icons/mission-icon3.svg" alt="">
                                </div>
                            </div>

                            <div class="mission-hadding hadding3-w">
                                <h4><a href="{{ route('second', ['others', 'about'])}}">Commitment to Excellence</a></h4>
                                <div class="space12"></div>
                                <p>Our team of seasoned professionals has in-depth knowledge of tax laws, regulations, and
                                    industry best
                                    practices. We stay up-to-date with the latest changes in tax.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====mission end=======-->

    <!--=====Featured start=======-->

    <div class="featured sp3" id="featured">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hadding3">
                        <h1 data-aos="fade-up" data-aos-duration="700">Featured Case Studies</h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="800">Flexible energy service is a key part of the future
                            of energy.
                            It can help you save money on your electricity bill, and it can also help to reduce your carbon
                            footprint.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 text-right">
                    <div class="featured-button">
                        <div class="">
                            <a data-aos="fade-up" data-aos-duration="700" class="buttonBox2 fifth" href="{{ route('second', ['pages', 'case'])}}">View
                                Full Case
                                Studies</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space60"></div>
            <div class="row">
                <div class="featured-slider-all" data-aos="fade-up" data-aos-duration="800">
                    <div class="featured-slider owl-carousel">
                        <div class="featured-slider-single">
                            <div class="featured-slider-img img100">
                                <img src="/img/image/featured-img1.png" alt="">
                            </div>
                            <div class="featured-slider-hadding hadding3-w">
                                <h4><a href="{{ route('second', ['pages', 'case-details1'])}}">Financial Investment</a></h4>
                                <div class="space8"></div>
                                <p>Describe the challenges faced by the client and how your solutions helped them.</p>
                            </div>
                            <div class="featured-slider-button">
                                <a class="buttonBox3" href="{{ route('second', ['pages', 'case-details1'])}}">Learn More</a>
                            </div>
                        </div>

                        <div class="featured-slider-single">
                            <div class="featured-slider-img img100">
                                <img src="/img/image/featured-img2.png" alt="">
                            </div>
                            <div class="featured-slider-hadding hadding3-w">
                                <h4><a href="{{ route('second', ['pages', 'case-details1'])}}">Tax Consulting</a></h4>
                                <div class="space8"></div>
                                <p>Describe the challenges faced by the client and how your solutions helped them.</p>
                            </div>
                            <div class="featured-slider-button">
                                <a class="buttonBox3" href="{{ route('second', ['pages', 'case-details1'])}}">Learn More</a>
                            </div>
                        </div>

                        <div class="featured-slider-single">
                            <div class="featured-slider-img img100">
                                <img src="/img/image/featured-img3.png" alt="">
                            </div>
                            <div class="featured-slider-hadding hadding3-w">
                                <h4><a href="{{ route('second', ['pages', 'case-details1'])}}">Financial Investment</a></h4>
                                <div class="space8"></div>
                                <p>Describe the challenges faced by the client and how your solutions helped them.</p>
                            </div>
                            <div class="featured-slider-button">
                                <a class="buttonBox3" href="{{ route('second', ['pages', 'case-details1'])}}">Learn More</a>
                            </div>
                        </div>

                        <div class="featured-slider-single">
                            <div class="featured-slider-img img100">
                                <img src="/img/image/featured-img4.png" alt="">
                            </div>
                            <div class="featured-slider-hadding hadding3-w">
                                <h4><a href="{{ route('second', ['pages', 'case-details1'])}}">Tax Consulting</a></h4>
                                <div class="space8"></div>
                                <p>Describe the challenges faced by the client and how your solutions helped them.</p>
                            </div>
                            <div class="featured-slider-button">
                                <a class="buttonBox3" href="{{ route('second', ['pages', 'case-details1'])}}">Learn More</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====Featured end=======-->

    <!--=====testimonial start=======-->
    <div class="testimonial3 sp3" id="testimonial" style="background-color: #333982;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding3-w">
                        <h1 data-aos="fade-up" data-aos-duration="700">Our Testimonials, Don't just take our word for it!
                        </h1>
                    </div>
                </div>
            </div>
            <div class="space70"></div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="testimonial3-img" data-aos="flip-left" data-aos-duration="700">
                        <img src="/img/image/testimonial3-img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial3-slider-all">
                        <div class="testimonial3-slider owl-carousel">
                            <div class="testimonial3-single-slider">
                                <div class="testimonial3-hadding">
                                    <div class="testimonial-stars testimonial3-stars">
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <p>
                                        "Professional,reliable,and thorough.Toxa Consulting guided us through complex tax
                                        matters with ease.A
                                        true partner Download our comprehensive guides and ebooks on tax planning,
                                        deductions, and compliance
                                        to enhance your understanding of tax-related matters, A true partner! Download our
                                        comprehensive
                                        guides and ebooks on tax planning."
                                    </p>
                                    <div class="space30"></div>
                                    <div class="slider3-bottom-all">
                                        <div class="slider3-bottom">
                                            <h4>
                                                <a href="#">John Smith </a>
                                            </h4>
                                            <p>
                                                CEO of XYZ Company
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial3-single-slider">
                                <div class="testimonial3-hadding">
                                    <div class="testimonial-stars testimonial3-stars">
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <p>
                                        "Professional,reliable,and thorough.Toxa Consulting guided us through complex tax
                                        matters with ease.A
                                        true partner Download our comprehensive guides and ebooks on tax planning,
                                        deductions, and compliance
                                        to enhance your understanding of tax-related matters, A true partner! Download our
                                        comprehensive
                                        guides and ebooks on tax planning."
                                    </p>
                                    <div class="space30"></div>
                                    <div class="slider3-bottom-all">
                                        <div class="slider3-bottom">
                                            <h4>
                                                <a href="#">John Smith </a>
                                            </h4>
                                            <p>
                                                CEO of XYZ Company
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial3-single-slider">
                                <div class="testimonial3-hadding">
                                    <div class="testimonial-stars testimonial3-stars">
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <p>
                                        "Professional,reliable,and thorough.Toxa Consulting guided us through complex tax
                                        matters with ease.A
                                        true partner Download our comprehensive guides and ebooks on tax planning,
                                        deductions, and compliance
                                        to enhance your understanding of tax-related matters, A true partner! Download our
                                        comprehensive
                                        guides and ebooks on tax planning."
                                    </p>
                                    <div class="space30"></div>
                                    <div class="slider3-bottom-all">
                                        <div class="slider3-bottom">
                                            <h4>
                                                <a href="#">John Smith </a>
                                            </h4>
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
        </div>
    </div>

    <!--=====testimonial end=======-->

    <!--=====blog start=======-->
    <div class="blog3 sp3" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding3">
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
                    <div class="blog3-box-all" data-aos="fade-up" data-aos-duration="700">
                        <div class="blog3-box-img img100">
                            <img src="/img/image/blog3-img1.png" alt="">
                        </div>
                        <div class="hadding3 blog3-hadding">
                            <ul>
                                <li style="display: inline-block;"><a href="#" class="date2">15 March, 2023 /</a>
                                </li>
                                <li style="display: inline-block;"><a href="#" class="date2">Uncategorized</a>
                                </li>
                            </ul>
                            <div class="space16"></div>
                            <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Explore our regularly updated blog, where we share expert tips,
                                    industry
                                    trends.</a></h4>
                            <div class="space24"></div>
                            <a class="read-more3-3" href="{{ route('second', ['blog-details', 'index'])}}">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog3-box-all active" data-aos="fade-up" data-aos-duration="900">
                        <div class="blog3-box-img img100">
                            <img src="/img/image/blog3-img2.png" alt="">
                        </div>
                        <div class="hadding3 blog3-hadding">
                            <ul>
                                <li style="display: inline-block;"><a href="#" class="date2">15 March, 2023 /</a>
                                </li>
                                <li style="display: inline-block;"><a href="#" class="date2">Uncategorized</a>
                                </li>
                            </ul>

                            <div class="space16"></div>
                            <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Explore our regularly updated blog, where we share expert tips,
                                    industry
                                    trends.</a></h4>
                            <div class="space24"></div>
                            <a class="read-more3-3" href="{{ route('second', ['blog-details', 'index'])}}">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog3-box-all" data-aos="fade-up" data-aos-duration="700">
                        <div class="blog3-box-img img100">
                            <img class="fifth" src="/img/image/blog3-img3.png" alt="">
                        </div>
                        <div class="hadding3 blog3-hadding">
                            <ul>
                                <li style="display: inline-block;"><a href="#" class="date2">15 March, 2023 /</a>
                                </li>
                                <li style="display: inline-block;"><a href="#" class="date2">Uncategorized</a>
                                </li>
                            </ul>
                            <div class="space16"></div>
                            <h4><a href="{{ route('second', ['blog-details', 'index'])}}">Explore our regularly updated blog, where we share expert tips,
                                    industry
                                    trends.</a></h4>
                            <div class="space24"></div>
                            <a class="read-more3-3" href="{{ route('second', ['blog-details', 'index'])}}">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="space40"></div>
            <div class="row" data-aos="fade-up" data-aos-duration="700">
                <div class="col-lg-12 text-center m-auto">
                    <a class="buttonBox2 fifth" href="{{ route('second', ['blog', 'index'])}}">View All Blogs</a>
                </div>
            </div>
        </div>
    </div>

    <!--=====blog end=======-->

    <!--=====contact start=======-->
    <div class="contect3 sp3" style="background-color: #EFEFF7;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 contect3-bg1"
                    style="background-image: url(/img/bg/contect3-bg.png); background-position: center; background-repeat: no-repeat; background-size: cover; padding: 52px; border-radius: 10px 0px 0px 10px; background-attachment: fixed;">
                    <div class="contect3-touch-hadding">
                        <div class="hadding3-w">
                            <div class="space10"></div>
                            <h1 data-aos="fade-right" data-aos-duration="700">Get In <span class="after2">Touch</span>
                            </h1>
                            <div class="space16"></div>
                            <p data-aos="fade-right" data-aos-duration="800">We are here to help you feel happy and
                                healthy again
                                through our revolutionary healthcare model that's evidence-based, supportive, and
                                personalized to you.</p>
                        </div>

                        <div class="contact2-contacts">
                            <div class="contact2-single" data-aos="fade-right" data-aos-duration="700">
                                <div class="contact2-icon">
                                    <img src="/img/icons/contact3-icon1.svg" alt="">
                                </div>
                                <div class="contact2-icon-hadding">
                                    <a href="tel:281-377-7891">281-377-7891</a>
                                </div>
                            </div>
                            <div class="contact2-single" data-aos="fade-right" data-aos-duration="900">
                                <div class="contact2-icon">
                                    <img src="/img/icons/contact3-icon2.svg" alt="">
                                </div>
                                <div class="contact2-icon-hadding">
                                    <a href="mailto:info@ihawmd.com">info@ihawmd.com</a>
                                </div>
                            </div>
                            <div class="contact2-single" data-aos="fade-right" data-aos-duration="1000">
                                <div class="contact2-icon">
                                    <img src="/img/icons/contact3-icon3.svg" alt="">
                                </div>
                                <div class="contact2-icon-hadding">
                                    <a href="tel:281-377-7891">8708 Technology Forest Pl Suite <br> 125 -G, The Woodlands,
                                        TX 77381</a>
                                </div>
                            </div>
                        </div>
                        <div class="space30"></div>
                        <div class="hadding2-w" data-aos="fade-right" data-aos-duration="700">
                            <p>For functional medicine inquiries contact Kim@ihawmd.com</p>
                            <p>All other inquires please contact Hailey@ihawmd.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="background-color: #00092C; padding: 50px; border-radius: 0px 10px 10px 0px;">
                    <div class="contact3-form-box-all">
                        <div class="contact-form">
                            <form action="#">
                                <div class="hadding3-w">
                                    <h1>Leave A Message</h1>
                                </div>
                                <div class="contact-inputs">
                                    <div class="contact-input">
                                        <div class="contact-input-signle contact-input-signle3">
                                            <input type="text" placeholder="Frist Name*">
                                            <input type="text" placeholder="Last Name*">
                                        </div>
                                        <div class="contact-input-signle contact-input-signle1 contact-input-signle3">
                                            <input type="text" placeholder="Email Address*">
                                        </div>
                                        <div class="contact-input-signle contact-input-signle3">
                                            <select class="wide">
                                                <option value="">Appointment Type*</option>
                                                <option value="">option 1</option>
                                                <option value="">option 2</option>
                                            </select>
                                        </div>
                                        <div class="contact-input-signle contact-input-signle3">
                                            <textarea cols="30" rows="3" placeholder="Your Message*"></textarea>
                                        </div>
                                        <div class="space30"></div>
                                        <div>
                                            <button type="submit" class="buttonBox2 fifth">Send Massage</button>
                                        </div>
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

    <!--=====footer start=======-->

    <div class="footer3" style="background-color: #333982;">
        <div class="container">
            <div class="space60"></div>
            <div class="footer3-border-all">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <div class="footer3-all-form">
                            <a href="{{ route('second',['landing', 'index'])}}" class="footer3-logo">
                                <img src="/img/logo/footer3-logo.svg" alt="">
                            </a>
                            <div class="space30"></div>
                            <div class="hadding3-w">
                                <h1>Sign Up for Newsletters For Letest News & Update</h1>
                            </div>
                            <div class="space40"></div>
                            <div class="footer-contact-input footer-contact-input3 text-center">
                                <div class="input-footer2 input-footer3">
                                    <div class="">
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="ps-3">
                                    <button class="buttonBox2 fifth">Subscribe</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 m-auto text-center">
                        <div class="footer3-border"></div>

                        <div class="footer3-menu-list">
                            <ul>
                                <li>
                                    <a href="{{ route('second',['landing', 'index'])}}">Home</a>
                                </li>

                                <li>
                                    <a href="#">Privecy policy</a>
                                </li>

                                <li>
                                    <a href="#">Terms & Conditions</a>
                                </li>

                                <li>
                                    <a href="{{ route('second', ['services', 'index'])}}">Our Service</a>
                                </li>

                                <li>
                                    <a href="#">Our Team</a>
                                </li>
                                <li>
                                    <a href="{{ route('second', ['blog', 'index'])}}">Blogs</a>
                                </li>
                                <li>
                                    <a href="{{ route('second', ['others', 'contact'])}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer3-bottom-contact">
                            <div class="contact2-single contact2-single3">
                                <div class="contact2-icon">
                                    <img src="/img/icons/contact3-icon1.svg" alt="">
                                </div>
                                <div class="contact2-icon-hadding">
                                    <a href="tel:281-377-7891">281-377-7891</a>
                                </div>
                            </div>
                            <div class="contact2-single contact2-single3">
                                <div class="contact2-icon">
                                    <img src="/img/icons/contact3-icon2.svg" alt="">
                                </div>
                                <div class="contact2-icon-hadding">
                                    <a href="mailto:info@ihawmd.com">info@ihawmd.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center footer3-bottom">
                <div class="col-lg-6">
                    <p>© Copyright 2023 Advisor Consulting Ltd. <br>
                    </p>
                    <ul class="Conditions3">
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <div class="social social2 social3">
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
                            <li>
                                <a data-bs-toggle="tooltip" title="TikTok" href="#"><i
                                        class="fa-brands fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====footer end=======-->
@endsection
