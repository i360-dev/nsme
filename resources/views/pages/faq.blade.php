@extends('layouts.base', ['title' => 'FAQ || Advisr Tax Consulting', 'logo' => '/img/logo/titel1.svg'])

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
                        <h1>Frequently Asked Questions</h1>
                        <div class="page-hero-p">
                            <a href="{{ route('second',['landing', 'index'])}}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>FAQ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====page hero end=======-->

    <!--=====faq 1 start=======-->

    <div class="faq-page sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="page-hadding">
                        <h1>Frequently Asked Questions</h1>
                        <div class="space16"></div>
                        <p>Comprehensive Approach: We take a holistic view of your HR function and consider the
                            interconnected ness of various HR areas. Our integrated approach ensures that your HR strategies
                            align with your
                        </p>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="space30"></div>
                    <div class="faq-img">
                        <img src="/img/image/faq-page-img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="space30"></div>
                    <div class="accordion" id="accordionExample">

                        <div class="accordion-item accordion-item">
                            <h2 class="accordion-header active-header accordion-header2" id="headingTwo">
                                <button class="accordion-button accordion-button2" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Why do I need a tech SEO agency?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body2">
                                    Coaching can be indicative of increased employee engagement; 65% of employees from
                                    companies with strong coaching cultures rated themselves as highly engaged. Coaching
                                    also has an impact on financial performance, with 60% of respondents from organizations
                                    with strong coaching cultures reporting their 2013 revenue to be above average, compared
                                    to their peer group.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item accordion-item">
                            <h2 class="accordion-header accordion-header2" id="headingTwo">
                                <button class="accordion-button accordion-button2 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    What differentiates Directive from another SEO company?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body2">
                                    Coaching can be indicative of increased employee engagement; 65% of employees from
                                    companies with strong coaching cultures rated themselves as highly engaged. Coaching
                                    also has an impact on financial performance, with 60% of respondents from organizations
                                    with strong coaching cultures reporting their 2013 revenue to be above average, compared
                                    to their peer group.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item accordion-item">
                            <h2 class="accordion-header accordion-header2" id="headingThere">
                                <button class="accordion-button accordion-button2 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThere" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    What brands does your agency work with?
                                </button>
                            </h2>
                            <div id="collapseThere" class="accordion-collapse collapse" aria-labelledby="headingThere"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body2">
                                    Coaching can be indicative of increased employee engagement; 65% of employees from
                                    companies with strong coaching cultures rated themselves as highly engaged. Coaching
                                    also has an impact on financial performance, with 60% of respondents from organizations
                                    with strong coaching cultures reporting their 2013 revenue to be above average, compared
                                    to their peer group.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item accordion-item">
                            <h2 class="accordion-header accordion-header2" id="headingFour">
                                <button class="accordion-button accordion-button2 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    What does communication look like with our team?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body2">
                                    Coaching can be indicative of increased employee engagement; 65% of employees from
                                    companies with strong coaching cultures rated themselves as highly engaged. Coaching
                                    also has an impact on financial performance, with 60% of respondents from organizations
                                    with strong coaching cultures reporting their 2013 revenue to be above average, compared
                                    to their peer group.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item accordion-item font-f-2">
                            <h2 class="accordion-header accordion-header2" id="headingFive">
                                <button class="accordion-button accordion-button2 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    What do my first 30 days look like?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body2">
                                    Coaching can be indicative of increased employee engagement; 65% of employees from
                                    companies with strong coaching cultures rated themselves as highly engaged. Coaching
                                    also has an impact on financial performance, with 60% of respondents from organizations
                                    with strong coaching cultures reporting their 2013 revenue to be above average, compared
                                    to their peer group.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====faq 1 end=======-->

    <!--=====faq 2 end=======-->

    <div class="faq sp3" style="background-color: #EDF0F6;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="page-hadding  text-center">
                        <h1>Frequently Asked Questions</h1>
                    </div>
                    <div class="space60"></div>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item accordion-item">
                            <h2 class="accordion-header accordion-header2" id="headingOne">
                                <button class="accordion-button accordion-button3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne">
                                    How to help you deal with any business ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body2">
                                    Coaching can be indicative of increased employee engagement; 65% of employees from
                                    companies with strong coaching cultures rated themselves as highly engaged. Coaching
                                    also has an impact on financial performance, with 60% of respondents from organizations
                                    with strong coaching cultures reporting their 2013 revenue to be above average, compared
                                    to their peer group.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item accordion-item">
                            <h2 class="accordion-header accordion-header2" id="headingTwo">
                                <button class="accordion-button accordion-button3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    How to help you deal with any business ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body2">
                                    Coaching can be indicative of increased employee engagement; 65% of employees from
                                    companies with strong coaching cultures rated themselves as highly engaged. Coaching
                                    also has an impact on financial performance, with 60% of respondents from organizations
                                    with strong coaching cultures reporting their 2013 revenue to be above average, compared
                                    to their peer group.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item accordion-item">
                            <h2 class="accordion-header accordion-header2" id="headingThere">
                                <button class="accordion-button accordion-button3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThere" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    How to help you deal with any business ?
                                </button>
                            </h2>
                            <div id="collapseThere" class="accordion-collapse collapse" aria-labelledby="headingThere"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body2">
                                    Coaching can be indicative of increased employee engagement; 65% of employees from
                                    companies with strong coaching cultures rated themselves as highly engaged. Coaching
                                    also has an impact on financial performance, with 60% of respondents from organizations
                                    with strong coaching cultures reporting their 2013 revenue to be above average, compared
                                    to their peer group.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item accordion-item">
                            <h2 class="accordion-header accordion-header2" id="headingFour">
                                <button class="accordion-button accordion-button3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    How to help you deal with any business ?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body2">
                                    Coaching can be indicative of increased employee engagement; 65% of employees from
                                    companies with strong coaching cultures rated themselves as highly engaged. Coaching
                                    also has an impact on financial performance, with 60% of respondents from organizations
                                    with strong coaching cultures reporting their 2013 revenue to be above average, compared
                                    to their peer group.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item accordion-item font-f-2">
                            <h2 class="accordion-header accordion-header2" id="headingFive">
                                <button class="accordion-button accordion-button3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    How to help you deal with any business ?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body2">
                                    Coaching can be indicative of increased employee engagement; 65% of employees from
                                    companies with strong coaching cultures rated themselves as highly engaged. Coaching
                                    also has an impact on financial performance, with 60% of respondents from organizations
                                    with strong coaching cultures reporting their 2013 revenue to be above average, compared
                                    to their peer group.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item accordion-item font-f-2">
                            <h2 class="accordion-header accordion-header2" id="headingSix">
                                <button class="accordion-button accordion-button3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix">
                                    How long until I see results for my website?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body2">
                                    Coaching can be indicative of increased employee engagement; 65% of employees from
                                    companies with strong coaching cultures rated themselves as highly engaged. Coaching
                                    also has an impact on financial performance, with 60% of respondents from organizations
                                    with strong coaching cultures reporting their 2013 revenue to be above average, compared
                                    to their peer group.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item accordion-item font-f-2">
                            <h2 class="accordion-header accordion-header2" id="headingSeven">
                                <button class="accordion-button accordion-button3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven">
                                    How many people from Directive will be managing my SEO project?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body2">
                                    Coaching can be indicative of increased employee engagement; 65% of employees from
                                    companies with strong coaching cultures rated themselves as highly engaged. Coaching
                                    also has an impact on financial performance, with 60% of respondents from organizations
                                    with strong coaching cultures reporting their 2013 revenue to be above average, compared
                                    to their peer group.
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

    <!--=====faq 2 end=======-->

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
@endsection
