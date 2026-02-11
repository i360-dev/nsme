@extends('layouts.base', ['title' => 'My Account || Advisr Tax Consulting', 'logo' => '/img/logo/titel1.svg'])

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
                        <h1>My Account</h1>
                        <div class="page-hero-p">
                            <a href="{{ route('second',['landing', 'index'])}}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Account</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====page hero end=======-->

    <!--=====longin start=======-->

    <div class="login-form-all sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login-form">
                        <div class="page-hadding">
                            <h2>Login</h2>
                        </div>
                        <form action="#">
                            <div class="checkout-heads page-hadding">
                                <div class="col-lg-12">
                                    <div class="optional-input">
                                        <p>User name or email address *</p>
                                        <input type="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="optional-input">
                                        <p> Password *</p>
                                        <input type="password">
                                    </div>
                                </div>
                                <div class="form-check form-check-inline input-chack-box">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Remember me</label>
                                </div>
                                <div class="space24"></div>
                                <button type="submit" class="comon-button">Login</button>

                                <div class="space30"></div>
                                <a href="{{ route('second', ['others', 'account2'])}}" class="Forgot">Forgot password?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="Registration-form">
                        <div class="page-hadding">
                            <h2>Registration</h2>
                        </div>
                        <form action="#">
                            <div class="checkout-heads page-hadding">
                                <div class="col-lg-12">
                                    <div class="optional-input">
                                        <p>User name or email address *</p>
                                        <input type="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="optional-input">
                                        <p> Email address *</p>
                                        <input type="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="optional-input">
                                        <p> Password *</p>
                                        <input type="password">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="optional-input">
                                        <p> Re- enter Password *</p>
                                        <input type="password">
                                    </div>
                                </div>
                                <div class="space30"></div>
                                <button type="submit" class="comon-button">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====longin end=======-->

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
