@extends('layouts.base', ['title' => 'Contact Us || Advisr Tax Consulting', 'logo' => '/img/logo/titel1.svg'])

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
                        <h1>Contact Us</h1>
                        <div class="page-hero-p">
                            <a href="{{ route('second',['landing', 'index'])}}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Contact Us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====page hero end=======-->

    <!--=====contact start=======-->

    <div class="contact-page-all sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-page-box text-center">
                        <div class="contact-page-box-icon">
                            <img src="/img/icons/contact-page-icon1.svg" alt="">
                            <div class="space14"> </div>
                            <div class="contact-hadding">
                                <h4><a href="#">Our Location</a></h4>
                                <div class="space16"></div>
                                <a href="#">684 West College St Sun City, United States America.</a> <br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-page-box text-center">
                        <div class="contact-page-box-icon">
                            <img src="/img/icons/contact-page-icon2.svg" alt="">
                            <div class="space14"> </div>
                            <div class="contact-hadding">
                                <h4><a href="#">Phone Number</a></h4>
                                <div class="space16"></div>
                                <a href="tel:(+55)65-545-5418">(+55) 654 - 545 - 5418</a> <br>
                                <a href="tel:(+55)65-545-5418">(+55) 654 - 545 - 5418</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-page-box text-center">
                        <div class="contact-page-box-icon">
                            <img src="/img/icons/contact-page-icon3.svg" alt="">
                            <div class="space14"> </div>
                            <div class="contact-hadding">
                                <h4><a href="#">Email Address</a></h4>
                                <div class="space16"></div>
                                <a href="#">info@Example.com</a> <br>
                                <a href="#">info@Example.com</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="space100"></div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-img img100">
                        <img src="/img/image/contact-page-img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="page-hadding">
                        <h1>Leave A Message</h1>
                        <div class="space14"></div>
                        <p>Consulting service is a key part of the future of energy. It can help you save money on your
                            electricity
                            bill, and it can also help to reduce.</p>
                        <div class="space30"></div>
                        <form action="#">
                            <div class="checkout-heads">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout-input">
                                            <input type="text" placeholder="Frist Name*">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout-input">
                                            <input type="text" placeholder="Last Name*">
                                        </div>
                                    </div>
                                </div>
                                <div class="optional-input">
                                    <input type="text" placeholder="Email Address*">
                                </div>
                                <div class="optional-input">
                                    <select name="country" id="country" class="country-area wide">
                                        <option value="1" data-display="United states (US)">United states (US)</option>
                                        <option value="">Option 1</option>
                                        <option value="">Option 2</option>
                                        <option value="">Option 3</option>
                                        <option value="">Option 4</option>
                                        <option value="">Option 5</option>
                                    </select>
                                </div>
                                <div class="space60"></div>
                                <div class="optional-input">
                                    <textarea cols="30" rows="3" placeholder="Your Message*"></textarea>
                                </div>
                                <div class="space30"></div>
                                <a href="" class="comon-button">Sand Now</a>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====contact end=======-->

    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196064.65881483705!2d88.93201515862421!3d24.061083775097945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39febca82f6a21ed%3A0x4040980d7c6874f8!2sKushtia%20District!5e0!3m2!1sen!2sbd!4v1673751720794!5m2!1sen!2sbd"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
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
@endsection
