@extends('layouts.base', ['title' => 'Service Details || Business Consulting Consulting', 'logo' => '/img/logo/titel1.svg'])

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
                        <h1>HR Strategy and Planning</h1>
                        <div class="page-hero-p">
                            <a href="{{ route('second',['landing', 'index'])}}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Service Details</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====page hero end=======-->


    <div class="service-details sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-details-sidebar">

                        <div class="single-widget widget_categories">
                            <h3>Services</h3>
                            <div class="space24"></div>
                            <div class="blog-category-list">
                                <ul class="serice-dtials-list">
                                    <li><a class="active" href="#">HR Strategy and Planning<span><i
                                                    class="fa-solid fa-angle-right"></i></span></a></li>
                                    <li><a href="#">HR Compliance and Policies <span><i
                                                    class="fa-solid fa-angle-right"></i></span></a></li>
                                    <li><a href="#">HR Technology Solutions<span><i
                                                    class="fa-solid fa-angle-right"></i></span></a></li>
                                    <li><a href="#">Organizational Management<span><i
                                                    class="fa-solid fa-angle-right"></i></span></a></li>
                                    <li><a href="#">Employee Engagement<span><i
                                                    class="fa-solid fa-angle-right"></i></span></a></li>
                                    <li><a href="#">HR Technology Solutions<span><i
                                                    class="fa-solid fa-angle-right"></i></span></a></li>
                                </ul>
                            </div>
                        </div>

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

                        <div class="space30"></div>

                        <div class="single-widget widget_categories">
                            <h3>Download Company Profile</h3>
                            <div class="space24"></div>

                            <div class="">
                                <a href="#" class="download-button"> <img src="/img/icons/dawnload-img.svg"
                                        alt=""> Company
                                    Brochure.pdf</a>
                            </div>

                            <div class="space10"></div>

                            <div class="">
                                <a href="#" class="download-button2"> <img src="/img/icons/dawnload-img.svg"
                                        alt=""> Price
                                    List.pdf</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="service-details-post-all">
                        <div class="img100">
                            <img src="/img/image/service-details-img1.png" alt="">
                        </div>
                        <div class="space30"></div>
                        <div class="page-hadding">
                            <h2>HR Strategy and Planning</h2>
                            <div class="space14"></div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alterat in
                                some form, by injected humour, or randomi words which don't look even slightly believable.
                                If you are
                                going to use a passage of Lorem Ipsum, you need to be sure the re isn't anything embarrassi
                                hidden in the
                                middle of text. All the Lorem Ipsum. Generators on the Internet tend to repeat predefined
                                chunks as
                                necessary, making this the first true generator on the Internet.</p>
                            <div class="space20"></div>
                            <p>With more than 20 years of experience we can deliver the best services cum soluta nobis est
                                eligendi
                                optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. If you are
                                going to use a
                                passage of Lorem Ipsum, you need to be sure there isn't anything embarrassi hons.</p>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="space30"></div>
                                <div class="img100">
                                    <img src="/img/image/service-details-img2.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="space30"></div>
                                <div class="img100">
                                    <img src="/img/image/service-details-img3.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="space30"></div>
                        <div class="page-hadding">
                            <h2>Our Solutions </h2>
                            <div class="space14"></div>
                            <p> on the Internet tend to repeat predefined chunks as necessary, making this the first true
                                generator on
                                the Internet. With more than 20 years of experience we can deliver the best services cum
                                soluta nobis est
                                eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="service-details-icon-box">
                                    <div class="box-icon">
                                        <img src="/img/icons/service-details-icon1.svg" alt="">
                                    </div>
                                    <div class="space20"></div>
                                    <div class="page-hadding">
                                        <h4><a href="#">Technology and IT</a></h4>
                                        <div class="space8"></div>
                                        <p>We understand the unique HR challenge faced by technology companie and
                                            startups.Our expertise in
                                            talent acquisition,</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="service-details-icon-box">
                                    <div class="box-icon">
                                        <img src="/img/icons/service-details-icon2.svg" alt="">
                                    </div>
                                    <div class="space20"></div>
                                    <div class="page-hadding">
                                        <h4><a href="#">Financial Services</a></h4>
                                        <div class="space8"></div>
                                        <p>We assist banks,insurance companies, and
                                            financial institutions with their HR needs, including talent management, </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="space30"></div>
                                <div class="img100">
                                    <img src="/img/image/service-details-img4.png" alt="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="space30"></div>
                                <div class="page-hadding">
                                    <p>Healthcare and Pharmaceuticals With our deep understanding of the healthcare
                                        industry, we provi
                                        de tailored HR solutions that address the specific needs of healthcare providers
                                        ensuringcompliance
                                        and optimizing workforce productivity.Financial Services We assist banks, insurance
                                        companies, and
                                        financial institutions with the HR needs,]
                                        including talent management succession planning, andcompliance industry regulations.
                                        Manufacturing talent management succession
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="space30"></div>
                        <div class="page-hadding">
                            <p>
                                Describe the HR challenges faced by the client and how your solutions helped them achieve
                                significant in
                                improvements in employee engagement, talent retention, or compliance. Highlight specific
                                strategies the
                                implemented and measurable outcomes.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

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

    @@endsection
