@extends('layouts.base', ['title' => 'Shop || Business Consulting Consulting', 'logo' => '/img/logo/titel1.svg'])

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
                        <h1>Shop</h1>
                        <div class="page-hero-p">
                            <a href="{{ route('second',['landing', 'index'])}}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Shop</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====page hero end=======-->

    <!--=====shop start=======-->
    <div class="shop-sidebar-all sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-sidebar-items-all">
                        <div class="shop-sidebar-top">
                            <div class="page-hadding">
                                <p>Showing 1–12 of 24 results</p>
                            </div>
                            <div class="shop-top-filter">
                                <select class="wide">
                                    <option value="#">Default Sorting </option>
                                    <option value="#">option 1</option>
                                    <option value="#">option 2</option>
                                    <option value="#">option 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="space10"></div>

                        <div class="row">

                            <div class="col-lg-3 col-md-6">
                                <div class="shop-single-box">
                                    <div class="shop-img _relative">
                                        <div class="shop-img-single img100">
                                            <img src="/img/shop/shop-img1.png" alt="">
                                        </div>

                                        <div class="shop-box-hover-effect">
                                            <a href="{{ route('second', ['others', 'cart'])}}" class="comon-button">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="space24"></div>
                                    <div class="shop-hadding">
                                        <h4><a href="{{ route('second', ['others', 'cart'])}}">Chair and pillow</a></h4>
                                        <div class="shop-box-border"></div>
                                        <p> <s>$1200</s> $1100</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="shop-single-box">
                                    <div class="shop-img _relative">
                                        <div class="shop-img-single img100">
                                            <img src="/img/shop/shop-img2.png" alt="">
                                        </div>

                                        <div class="shop-box-hover-effect">
                                            <a href="{{ route('second', ['others', 'cart'])}}" class="comon-button">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="space24"></div>
                                    <div class="shop-hadding">
                                        <h4><a href="{{ route('second', ['others', 'cart'])}}">Armchair and pillow</a></h4>
                                        <div class="shop-box-border"></div>
                                        <p> $1000</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="shop-single-box">
                                    <div class="shop-img _relative">
                                        <div class="shop-img-single img100">
                                            <img src="/img/shop/shop-img3.png" alt="">
                                        </div>

                                        <div class="shop-box-hover-effect">
                                            <a href="{{ route('second', ['others', 'cart'])}}" class="comon-button">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="space24"></div>
                                    <div class="shop-hadding">
                                        <h4><a href="{{ route('second', ['others', 'cart'])}}">Stylish grey chair</a></h4>
                                        <div class="shop-box-border"></div>
                                        <p> $2200</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="shop-single-box">
                                    <div class="shop-img _relative">
                                        <div class="shop-img-single img100">
                                            <img src="/img/shop/shop-img4.png" alt="">
                                        </div>

                                        <div class="shop-box-hover-effect">
                                            <a href="{{ route('second', ['others', 'cart'])}}" class="comon-button">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="space24"></div>
                                    <div class="shop-hadding">
                                        <h4><a href="{{ route('second', ['others', 'cart'])}}">Old wooden armchair</a></h4>
                                        <div class="shop-box-border"></div>
                                        <p> $1500</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="shop-single-box">
                                    <div class="shop-img _relative">
                                        <div class="shop-img-single img100">
                                            <img src="/img/shop/shop-img5.png" alt="">
                                        </div>

                                        <div class="shop-box-hover-effect">
                                            <a href="{{ route('second', ['others', 'cart'])}}" class="comon-button">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="space24"></div>
                                    <div class="shop-hadding">
                                        <h4><a href="{{ route('second', ['others', 'cart'])}}">Armchair and pillow</a></h4>
                                        <div class="shop-box-border"></div>
                                        <p> <s>$2200</s> $2000</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="shop-single-box">
                                    <div class="shop-img _relative">
                                        <div class="shop-img-single img100">
                                            <img src="/img/shop/shop-img6.png" alt="">
                                        </div>

                                        <div class="shop-box-hover-effect">
                                            <a href="{{ route('second', ['others', 'cart'])}}" class="comon-button">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="space24"></div>
                                    <div class="shop-hadding">
                                        <h4><a href="{{ route('second', ['others', 'cart'])}}">Stylish grey chair</a></h4>
                                        <div class="shop-box-border"></div>
                                        <p> $2200</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="shop-single-box">
                                    <div class="shop-img _relative">
                                        <div class="shop-img-single img100">
                                            <img src="/img/shop/shop-img7.png" alt="">
                                        </div>

                                        <div class="shop-box-hover-effect">
                                            <a href="{{ route('second', ['others', 'cart'])}}" class="comon-button">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="space24"></div>
                                    <div class="shop-hadding">
                                        <h4><a href="{{ route('second', ['others', 'cart'])}}">Red vintage armchair</a></h4>
                                        <div class="shop-box-border"></div>
                                        <p> <s>$2100</s> $1900</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="shop-single-box">
                                    <div class="shop-img _relative">
                                        <div class="shop-img-single img100">
                                            <img src="/img/shop/shop-img8.png" alt="">
                                        </div>

                                        <div class="shop-box-hover-effect">
                                            <a href="{{ route('second', ['others', 'cart'])}}" class="comon-button">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="space24"></div>
                                    <div class="shop-hadding">
                                        <h4><a href="{{ route('second', ['others', 'cart'])}}">Armchair and pillow</a></h4>
                                        <div class="shop-box-border"></div>
                                        <p> $1800</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="shop-single-box">
                                    <div class="shop-img _relative">
                                        <div class="shop-img-single img100">
                                            <img src="/img/shop/shop-img9.png" alt="">
                                        </div>

                                        <div class="shop-box-hover-effect">
                                            <a href="{{ route('second', ['others', 'cart'])}}" class="comon-button">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="space24"></div>
                                    <div class="shop-hadding">
                                        <h4><a href="{{ route('second', ['others', 'cart'])}}">Comfort modern chair</a></h4>
                                        <div class="shop-box-border"></div>
                                        <p> $2500</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="shop-single-box">
                                    <div class="shop-img _relative">
                                        <div class="shop-img-single img100">
                                            <img src="/img/shop/shop-img10.png" alt="">
                                        </div>

                                        <div class="shop-box-hover-effect">
                                            <a href="{{ route('second', ['others', 'cart'])}}" class="comon-button">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="space24"></div>
                                    <div class="shop-hadding">
                                        <h4><a href="{{ route('second', ['others', 'cart'])}}">Old wooden armchair</a></h4>
                                        <div class="shop-box-border"></div>
                                        <p> $1500</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="shop-single-box">
                                    <div class="shop-img _relative">
                                        <div class="shop-img-single img100">
                                            <img src="/img/shop/shop-img11.png" alt="">
                                        </div>

                                        <div class="shop-box-hover-effect">
                                            <a href="{{ route('second', ['others', 'cart'])}}" class="comon-button">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="space24"></div>
                                    <div class="shop-hadding">
                                        <h4><a href="{{ route('second', ['others', 'cart'])}}">Armchair and pillow</a></h4>
                                        <div class="shop-box-border"></div>
                                        <p> $1100</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="shop-single-box">
                                    <div class="shop-img _relative">
                                        <div class="shop-img-single img100">
                                            <img src="/img/shop/shop-img12.png" alt="">
                                        </div>

                                        <div class="shop-box-hover-effect">
                                            <a href="{{ route('second', ['others', 'cart'])}}" class="comon-button">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="space24"></div>
                                    <div class="shop-hadding">
                                        <h4><a href="{{ route('second', ['others', 'cart'])}}">Stylish grey chair</a></h4>
                                        <div class="shop-box-border"></div>
                                        <p> $2200</p>
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


            </div>
        </div>
    </div>

    <!--=====shop start=======-->

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
