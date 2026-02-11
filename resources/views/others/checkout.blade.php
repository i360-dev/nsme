@extends('layouts.base', ['title' => 'Checkout || Advisr Tax Consulting', 'logo' => '/img/logo/titel1.svg'])

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
                        <h1>Checkout</h1>
                        <div class="page-hero-p">
                            <a href="{{ route('second',['landing', 'index'])}}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Checkout</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====page hero end=======-->

    <!--=====SHOP STARTS=======-->
    <div class="checkout-section-starts sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="checkout-headre">
                        <p>Have a coupon? Click here to enter your code</p>
                    </div>
                    <div class="space30"></div>
                    <div class="coupon-input-area">
                        <div class="coupon-head page-hadding">
                            <p>If you have a coupon code, please apply it below.</p>
                            <div class="space20"></div>
                            <div class="coupon-author _relative">
                                <input type="text" placeholder="Coupon Code">
                                <div class="coupon-author-button">
                                    <button type="submit" class="comon-button"> Apply Coupon</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space60"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="checkout-heads page-hadding">
                                <h2>Billing details</h2>
                                <div class="space55"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout-input page-hadding">
                                            <p>Frist Name *</p>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout-input">
                                            <p>Last Name*</p>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="optional-input">
                                            <p>Company name (optional)</p>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="optional-input">
                                            <p>Country / Region *</p>
                                            <select name="country" id="country" class="country-area wide">
                                                <option value="1" data-display="United states (US)">United states (US)
                                                </option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                                <option value="">Option 3</option>
                                                <option value="">Option 4</option>
                                                <option value="">Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="optional-input">
                                            <p>Street address *</p>
                                            <input type="text" placeholder="House number and Street number"> <br>
                                            <div class="space30"></div>
                                            <input type="text" placeholder="Apartment,suit ,unit,etc. (optional)">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="optional-input">
                                            <p>Town / City *</p>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="optional-input">
                                            <p> State *</p>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="optional-input">
                                            <p>Zip Code*</p>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="optional-input">
                                            <p>Email Adderss*</p>
                                            <input type="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check form-check-inline input-chack-box">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Create an account?</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="address-box-all">
                                <div class="address-checbok">
                                    <div class="form-check form-check-inline input-chack-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option2">
                                        <label class="form-check-label2" for="inlineCheckbox3">Ship to a different
                                            address?</label>
                                    </div>
                                </div>
                                <div class="optional-input page-hadding">
                                    <p>Town / City *</p>
                                    <textarea cols="30" rows="5" placeholder="Notes About your order,e.g especial Notes for Delivery"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="space60"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-order-area page-hadding">
                                <h2>Your Order</h2>
                                <div class="space24"></div>
                                <div class="cart-items">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr class="cart-head-1">
                                                <th class="table-product-1">Product</th>
                                                <th class="table-product-1">Total</th>
                                            </tr>
                                            <tr class="cart-product-list-1 product-table">
                                                <td>
                                                    <div class="cart-product-1">
                                                        <ul class="reviews">
                                                            <li class="product-p1">
                                                                Solar Panel Drill*1
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </td>
                                                <td class="product-p1">$180.00</td>
                                            </tr>

                                            <tr class="cart-product-list-1 product-table">
                                                <td>
                                                    <div class="cart-product">
                                                        <ul class="reviews">
                                                            <li class="product-p1">
                                                                Wind turbine Tools*2
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="product-p1">$240.00</td>
                                            </tr>
                                            <tr class="cart-product-list-1 product-table backgroud-table">
                                                <td>
                                                    <div class="cart-product">
                                                        <ul class="reviews">
                                                            <li class="product-p2">
                                                                Sub-total
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="product-p2">$420.00</td>
                                            </tr>
                                            <tr class="cart-product-list-1 product-table">
                                                <td>
                                                    <div class="cart-product">
                                                        <ul class="reviews">
                                                            <li class="product-p2">
                                                                Shipping
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="product-p2"> <span>Flat rate:</span> $20.00</td>
                                            </tr>
                                            <tr class="cart-product-list-1 product-table backgroud-table">
                                                <td>
                                                    <div class="cart-product">
                                                        <ul class="reviews">
                                                            <li class="product-p2">
                                                                Total
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="product-p2">$440.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="space20"></div>
                            <div class="check-click-area">
                                <form action="#">
                                    &nbsp; <div class="checkout-input-selact">
                                        <input class="form-check-input" type="radio" id="le1"
                                            name="fav_language" value="HTML">
                                        &nbsp; <label for="le1">Direct Bank Transfer</label><br>
                                        <p class="cleck-box">Please send a check to Store Name, Store Street, Store Town,
                                            Store State / County, Store Postcode.</p>
                                    </div>

                                    &nbsp; <div class="checkout-input-selact">
                                        <input class="form-check-input" type="radio" id="le2"
                                            name="fav_language" value="CSS">
                                        &nbsp; <label for="le2">Check Payments</label><br>
                                        <p class="cleck-box">Please send a check to Store Name, Store Street, Store Town,
                                            Store State / County, Store Postcode.</p>
                                    </div>

                                    &nbsp; <div class="checkout-input-selact">
                                        <input class="form-check-input" type="radio" id="le3"
                                            name="fav_language" value="CSS">
                                        &nbsp; <label for="le3">Cash on Delivery</label><br>
                                        <p class="cleck-box">Please send a check to Store Name, Store Street, Store Town,
                                            Store State / County, Store Postcode.</p>
                                    </div>
                                    <div class="space10"></div>
                                    <div class="checkout-button text-right">
                                        <button class="comon-button" type="submit"> Place Order</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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
