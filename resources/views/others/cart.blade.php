@extends('layouts.base', ['title' => 'Cart || Advisr Tax Consulting', 'logo' => '/img/logo/titel1.svg'])

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
                        <h1>Cart</h1>
                        <div class="page-hero-p">
                            <a href="{{ route('second',['landing', 'index'])}}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Cart</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====page hero end=======-->

    <!--=====SHOP STARTS=======-->
    <div class="cart-table-area cart-area section-padding5 sp3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cart-items">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="cart-head">
                                    <th class="first-th"></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                </tr>

                                <tr class="cart-product-list">
                                    <td class="cart-prodct cart-product-img"><span><i
                                                class="fa-solid fa-xmark"></i></span><img src="/img/shop/product1.png"
                                            alt=""></td>

                                    <td>
                                        <div class="cart-prodct">

                                            <div class="cart-product-details">
                                                <ul class="reviews">

                                                </ul>
                                                <p>solar panel drill</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-price">$180.00</td>
                                    <td>
                                        <div class="product-quantity">
                                            <div class="number shop-details">
                                                <span class="plus plus2"><i class="fa-solid fa-caret-up"></i></span>
                                                <input type="text" value="1" />
                                                <span class="minus minus2"><i class="fa-solid fa-caret-down"></i></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-price">$180.00</td>
                                </tr>

                                <tr class="cart-product-list">
                                    <td class="cart-prodct cart-product-img"><span><i
                                                class="fa-solid fa-xmark"></i></span><img src="/img/shop/product2.png"
                                            alt=""></td>
                                    <td>
                                        <div class="cart-prodct">

                                            <div class="cart-product-details">
                                                <ul class="reviews">

                                                </ul>
                                                <p>Solar bulbs</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$120.00</td>
                                    <td>
                                        <div class="product-quantity">
                                            <div class="number shop-details">
                                                <span class="plus plus2"><i class="fa-solid fa-caret-up"></i></span>
                                                <input type="text" value="1" />
                                                <span class="minus minus2"><i class="fa-solid fa-caret-down"></i></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-price">$240.00</td>
                                </tr>

                                <tr class="cart-product-list">
                                    <td class="cart-prodct cart-product-img"><span><i
                                                class="fa-solid fa-xmark"></i></span><img src="/img/shop/product3.png"
                                            alt=""></td>
                                    <td>
                                        <div class="cart-prodct">

                                            <div class="cart-product-details">
                                                <ul class="reviews">

                                                </ul>
                                                <p>Wind turbine tool</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-price">$150.00</td>
                                    <td>
                                        <div class="product-quantity">
                                            <div class="number shop-details">
                                                <span class="plus plus2"><i class="fa-solid fa-caret-up"></i></span>
                                                <input type="text" value="1" />
                                                <span class="minus minus2"><i class="fa-solid fa-caret-down"></i></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-price">$140.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="codepen-area">
                        <div class="coupon-input">
                            <input type="text" placeholder="Coupon Code">
                            <div class="all-3-btn">
                                <button class="comon-button">Apply Coupon</button>
                            </div>
                        </div>
                        <div class="all-3-btn">
                            <a href="#" class="comon-button">Update Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space60"></div>
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <div class="cart-totals-box">
                        <div class="page-hadding">
                            <h4><a href="#">Cart Totals</a></h4>
                        </div>
                        <div class="space24"></div>
                        <div class="cart-totals-inner-box">
                            <div class="total-flex">
                                <div class="cart-price-p">
                                    <p>Sub-total</p>
                                </div>
                                <div class="cart-price">
                                    <ul>
                                        <li>$390.00</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cart-border"></div>
                            <div class="total-flex">
                                <div class="cart-price-p">
                                    <p>Shipping</p>
                                </div>
                                <div class="cart-price">
                                    <ul>
                                        <li>Flat rate:<span> $10.00</span></li>
                                        <li>Shipping to :</li>
                                        <li>Change address</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cart-border"></div>
                            <div class="total-flex">
                                <div class="cart-price-p">
                                    <p>Total</p>
                                </div>
                                <div class="cart-price">
                                    <ul>
                                        <li>$410.00</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="space30"></div>
                        <a class="comon-button" href="{{ route('second', ['others', 'checkout'])}}">Proceed to checkout</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--=====SHOP ENDS=======-->

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
