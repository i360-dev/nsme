@extends('layouts.base', ['title' => 'Blog Details || Advisr Tax Consulting', 'logo' => '/img/logo/titel1.svg'])

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
                        <h1>Blog Details</h1>
                        <div class="page-hero-p">
                            <a href="{{ route('second',['landing', 'index'])}}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Blog Details</p>
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

                <div class="col-lg-8 m-auto">
                    <div class="blog-sidebar-left-all">
                        <article>
                            <div class="img100">
                                <img src="/img/image/service-details-img1.png" alt="">
                            </div>
                            <div class="space30"></div>
                            <div class="page-hadding">
                                <h2>How consultation in business is affecting new ventures</h2>
                                <div class="space14"></div>
                                <p>Our track record speaks for itself.We have helped numerous organizations achieve tangible
                                    resultincluding improved employee engagement, increased productivity, and enhanced
                                    organizational performance
                                    Comprehensive Approach We take a holistic view of your HR function and consider the
                                    interconnectedness of various HR areas. Our integrated approach ensures that your HR
                                    strategies align with your overall business objectives.
                                </p>
                            </div>
                        </article>


                        <article>
                            <div class="space30"></div>
                            <div class="details-commnet-box">
                                <div class="commnet-icon">
                                    <img src="/img/icons/commnet.svg" alt="">
                                </div>
                                <div class="space24"></div>
                                <p>Client Collaboration We believe in building strong partnerships with our client. We work
                                    closely with you, actively listening to your needs, and involving your team in the
                                    process to ensure the solutions we develop are practical and sustainable Ethical and
                                    Confidential. We adhere the highest ethical standard and maintain strict
                                    confidentiality. </p>
                                <div class="space14"></div>
                                <div class="commnet-bottom-hadding">
                                    <h6><a href="#">_ Mark Johnson</a></h6>
                                </div>
                            </div>
                        </article>


                        <article>
                            <div class="space30"></div>
                            <div class="page-hadding">
                                <p>Technology and IT We understand the unique HR challenges faced by technology companies
                                    and startups. Our expertise in talent acquisition, retention, and HR technology can help
                                    you build a strong tech team and foster innovation. Healthcare and Pharmaceuticals: With
                                    our deep understanding of the healthcare industry, we provide tailored HR solutions.</p>
                            </div>
                            <div class="space30"></div>
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="img100">
                                        <img src="/img/image/blog-details-img2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="img100">
                                        <img src="/img/image/blog-details-img3.png" alt="">
                                    </div>
                                    <div class="space30"></div>
                                    <div class="img100">
                                        <img src="/img/image/blog-details-img4.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="space30"></div>
                            <div class="page-hadding">
                                <p> We assist banks, insurance companies, and financial institutions with their HR needs,
                                    including talent management,succession planning, and compliance with industry
                                    regulations.Manufacturing and Engineering Our consultants have experience in supporting
                                    manufacturing and engineering companies with workforce planning,skill development,and
                                    organizational restructuring to drive operational efficiency.</p>
                            </div>
                        </article>


                        <div class="blog-details-tags">
                            <div class="blog-details-tag">
                                <div class="hadding2">
                                    <h4 class="font-f-2 font-16 weight-700 line-height-16">Tags :</h4>
                                </div>
                                <div class="details-tag-list">
                                    <ul>
                                        <li><a href="#" class="font-f-2">Business consult</a></li>
                                        <li><a href="#" class="font-f-2">Consultant</a></li>
                                        <li><a href="#" class="font-f-2">Consulting</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="blog-details-icons">
                                <div class="hadding2">
                                    <h4>Share :</h4>
                                </div>
                                <div class="social1-blog">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-brands fa-github"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="space40"></div>

                        <div class="page-hadding">
                            <h4><a href="#">Comments (1)</a></h4>
                        </div>
                        <div class="space12"></div>
                        <div class="details-border"></div>
                        <div class="space30"></div>
                        <div class="replly-box">
                            <div class="">
                                <div class="replly-img border50">
                                    <img src="/img/image/replly-img.png" alt="">
                                </div>
                            </div>
                            <div class="replly-p">
                                <div class="replly-hadding">
                                    <h6><a href="#">Moris Jhonson</a></h6>
                                    <p>April 12, 2023</p>
                                </div>
                                <div class="space14"></div>
                                <p>Working with Advisr Consulting transformed our HR function. Their expertise in talent
                                    acquisition and development helped us attract top talent and build a high-performance
                                    culture. Professional, knowledgeable, and results-driven. HR Consulting guided us
                                    through a complex.</p>
                            </div>
                            <a href="#" class="replly-button">Reply</a>
                        </div>

                        <div class="space40"></div>

                        <div class="page-hadding">
                            <h4><a href="#">Write a comment</a></h4>
                            <div class="space30"></div>
                        </div>

                        <form action="#">
                            <div class="comment-form">
                                <div class="commnet-form-input">
                                    <textarea cols="30" rows="10" placeholder="Comment"></textarea>
                                </div>
                                <div class="space12"></div>
                                <div class="comment-form-input">
                                    <input type="text" placeholder="Name">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="space16"></div>
                                <div class="comment-form-input comment-form-input2">
                                    <input type="text" placeholder="Website">
                                </div>

                            </div>
                            <div class="space24"></div>
                            <div class="form-check form-check-inline input-chack-box">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label font-f-2" for="inlineCheckbox2">I agree to the
                                    <span>terms</span> & <span>conditions</span> and <span>privacy policy</span></label>
                            </div>
                            <div class="space24"></div>
                            <button class="comon-button">Post Comment</button>
                        </form>


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

    <!--=====Footer start=======-->

    @include('components/footer')
@endsection
