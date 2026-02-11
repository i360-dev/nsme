@extends('layouts.base', ['title' => 'Shop Details || Business Consulting Consulting', 'logo' => '/img/logo/titel1.svg'])

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
                        <h1>Shop Details </h1>
                        <div class="page-hero-p">
                            <a href="{{ route('second',['landing', 'index'])}}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Shop Details</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--=====page hero end=======-->

    <!--=====shop details start=======-->

    <div class="shop-details-page sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="shop-detials-img">
                        <div class="shop-details-img">
                            <img src="/img/shop/shop-details-img1.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="shop-details-hadding">
                        <div class="page-hadding">
                            <h2>Pattern Included Men’s</h2>
                        </div>
                        <div class="space12"></div>
                        <div class="shop-page-hadding">
                            <h4><a href="">$2020</a></h4>
                        </div>
                        <div class="space12"></div>
                        <div class="shop-review">
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li class="black-star"><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="space6"></div>
                        <div class="shop-box-border"></div>
                        <div class="space6"></div>

                        <div class="shop-details-border"></div>
                        <div class="page-hadding">
                            <p>Without discrediting or enlarging yourselves, but on the contrary, rejoice the achievements
                                of your
                                colleagues. Respect, self-respect, and love others must be cultivated within the
                                organization Remember.
                            </p>
                        </div>
                        <div class="space30"></div>
                        <div class="shop-details-menus _relative">
                            <div>
                                <div class="number shop-details">
                                    <span class="plus plus2"><i class="fa-solid fa-caret-up"></i></span>
                                    <input type="text" value="1" />
                                    <span class="minus minus2"><i class="fa-solid fa-caret-down"></i></span>
                                </div>
                                <div class=" cart-input-btn2 header-btn-1 button btn-after home1-button">
                                    <button class="comon-button">Update Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="space30"></div>

                        <div class="shop-details-list">
                            <ul>
                                <li>SKU: <span>12</span></li>
                                <li>Category: <span>Chair, Pillow</span></li>
                                <li>Tag: <span>Comfortable</span></li>
                            </ul>
                        </div>
                        <div class="space30"></div>

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
                </div>


            </div>
        </div>
    </div>

    <!--=====shop details end=======-->


    <!--=====shop details end=======-->
    <div class="sp5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="comments-review margin-b60">

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true"
                                    class="font-22 lineh-30 font-cm color-11 weight-600">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false"
                                    class="font-22 lineh-30 font-cm color-11 weight-600">Review</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            </li>
                        </ul>

                        <div class="shop-box-border"></div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active page-hadding" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="space20"></div>
                                <p>When you give us the keys to your property, we give you peace of mind. We have some of
                                    the best rated
                                    landlord and tenant feedback in the region in the
                                    because we take care of our clients and their tenants.Our formula makes it easy to
                                    invest with
                                    confidence. We’ve successfully overseen hundreds of couse
                                    commercial and multi-family projects for our clients using our process.Our strong
                                    community ties and
                                    relationships help foster our client-driven approachol to business. Caton Commercial
                                    offers a full range
                                    of commercial real estate brokerage services, including property disposition, investment
                                    sales, leasing,
                                    tenant representation.</p>
                                <div class="space20"></div>

                                <p> We are a family-founded regional commercial real estate firm that uses its corporate
                                    experience and
                                    professional networks in local, national, and global the
                                    real estate markets to find innovative solutions and opportunities that position our
                                    clients for
                                    success. As trusted advisors, offering intelligent solutions,ass the Caton team strives
                                    for excellence
                                    for every client, every time.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="space20"></div>
                                <div class="row">
                                    <div class="col-lg-8">
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
                                                <p>Working with Advisr Consulting transformed our HR function. Their
                                                    expertise in talent
                                                    acquisition and development helped us attract top talent and build a
                                                    high-performance culture.
                                                    Professional, knowledgeable, and results-driven. HR Consulting guided us
                                                    through a complex.</p>
                                            </div>
                                            <a href="#" class="replly-button">Reply</a>
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

    <!--=====shop details end=======-->

    <!-- tabs starts header-elements -->
    <div class="sp5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 page-hadding">
                    <div class="page-hadding">
                        <h2>Write a Review</h2>
                        <div class="space12"></div>
                        <ul class="sta-reiew">
                            <p>Your Rating*</p>
                            <div class="space8"></div>
                            <li><i class="fa-regular fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="space20"></div>
                    <p>Your Review*</p>
                    <div class="space5"></div>
                    <div class="text-area-review">
                        <textarea cols="30" rows="10" placeholder="" class="w-100"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="review-input">
                                <p>Name*</p>
                                <div class="space5"></div>
                                <input type="text" class="w-100">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="review-input">
                                <p>Email*</p>
                                <div class="space5"></div>
                                <input type="Email" class="w-100">
                            </div>
                        </div>
                    </div>
                    <div class="space40"></div>
                    <a class="comon-button" href="#">Submit</a>

                </div>
            </div>
        </div>
    </div>

    <!--=====SHOP ENDS=======-->

    <!--=====shop-boxs=======-->

    <div class="sp5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="page-hadding">
                        <h1>Related Products</h1>
                        <div class="space16"></div>
                        <p>Consulting service is a key part of the future of energy. It can help you save money on your
                            electricity
                            bill, and it can also help to reduce your carbon footprint.</p>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
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

            </div>
        </div>
    </div>


    <!--=====shop-boxs=======-->


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
