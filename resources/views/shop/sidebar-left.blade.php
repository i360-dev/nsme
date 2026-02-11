@extends('layouts.base', ['title' => 'Shop Sidebar Left || Business Consulting Consulting', 'logo' => '/img/logo/titel1.svg'])

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
                        <h1>Shop Left Sidebar</h1>
                        <div class="page-hero-p">
                            <a href="{{ route('second',['landing', 'index'])}}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Shop Left Sidebar</p>
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

                <div class="col-lg-4">
                    <div class="shop-sidebar">
                        <div class="blog-shearch _relative">
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
                            <h3>Filter by Price</h3>

                            <div class="filter level-filter level-req">
                                <div id="rangeSlider" class="range-slider">
                                    <div class="range-group">
                                        <input class="range-input" value="100" min="1" max="500"
                                            step="1" type="range">
                                        <input class="range-input" value="350" min="1" max="500"
                                            step="1" type="range">
                                    </div>

                                    <div class="filter-options">
                                        <div class="range-filter-button">
                                            <a href="#" class="comon-button">Filter</a>
                                        </div>
                                        <div class="range-slider-output">
                                            <p>Price:</p>
                                            <div class="number-group">
                                                $<input class="number-input" type="number" value="100" min="0"
                                                    max="500"><span class="range-output-divider">-</span> $<input
                                                    class="number-input" type="number" value="350" min="0"
                                                    max="500">
                                            </div>
                                        </div>
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

                        <div class="single-widget">
                            <h3>Popular Product</h3>

                            <div class="space24"></div>

                            <div class="product-items-all _relative">
                                <div class="product-items-img">
                                    <img src="/img/shop/product1.png" alt="">
                                </div>
                                <div class="product-items-hadding">
                                    <h6><a href="{{ route('second', ['others', 'cart'])}}">Chair and pillow</a></h6>
                                    <div class="space4"></div>
                                    <div class="">
                                        <div class="product-items-p">
                                            <div class="">
                                                <p>$1200</p>
                                            </div>
                                            <div class="review">
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-box-border"></div>

                            <div class="product-items-all _relative">
                                <div class="product-items-img">
                                    <img src="/img/shop/product2.png" alt="">
                                </div>
                                <div class="product-items-hadding">
                                    <h6><a href="{{ route('second', ['others', 'cart'])}}">Comfort modern chair</a></h6>
                                    <div class="space4"></div>
                                    <div class="">
                                        <div class="product-items-p">
                                            <div class="">
                                                <p>$2200</p>
                                            </div>
                                            <div class="review">
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-box-border"></div>


                            <div class="product-items-all _relative">
                                <div class="product-items-img">
                                    <img src="/img/shop/product3.png" alt="">
                                </div>
                                <div class="product-items-hadding">
                                    <h6><a href="{{ route('second', ['others', 'cart'])}}">Chair and pillow</a></h6>
                                    <div class="space4"></div>
                                    <div class="">
                                        <div class="product-items-p">
                                            <div class="">
                                                <p>$1200</p>
                                            </div>
                                            <div class="review">
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-box-border"></div>



                            <div class="product-items-all _relative">
                                <div class="product-items-img">
                                    <img src="/img/shop/product4.png" alt="">
                                </div>
                                <div class="product-items-hadding">
                                    <h6><a href="{{ route('second', ['others', 'cart'])}}">Comfort modern chair</a></h6>
                                    <div class="space4"></div>
                                    <div class="">
                                        <div class="product-items-p">
                                            <div class="">
                                                <p>$2200</p>
                                            </div>
                                            <div class="review">
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


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


                <div class="col-lg-8">
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

                            <div class="col-lg-4 col-md-6">
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

                            <div class="col-lg-4 col-md-6">
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

                            <div class="col-lg-4 col-md-6">
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

                            <div class="col-lg-4 col-md-6">
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

                            <div class="col-lg-4 col-md-6">
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

                            <div class="col-lg-4 col-md-6">
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

                            <div class="col-lg-4 col-md-6">
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

                            <div class="col-lg-4 col-md-6">
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

                            <div class="col-lg-4 col-md-6">
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

                            <div class="col-lg-4 col-md-6">
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

                            <div class="col-lg-4 col-md-6">
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

                            <div class="col-lg-4 col-md-6">
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
