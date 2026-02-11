<header>
  <div class="header-area header-area-all d-none d-lg-block {{ $headClass ?? '' }}" id="header{{ $isId ?? '' }}">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header-elements">
            <div class="site-logo home1-site-logo">
              <a href="{{ route('second',['landing', 'index'])}}"><img src="{{ $logo }}" alt="" />
              </a>
            </div>


            <div class="main-menu-ex main-menu-ex{{ $exClass }}">
              <ul>
                <li class="has-dropdown"><a href="#">Home <i class="fa-solid fa-angle-down"></i></a>
                  <ul class="sub-menu">
                    <li class="has-dropdown has-dropdown1"><a href="{{ route('second', ['landing', 'index4'])}}">Multipage<span><i
                            class="fa-solid fa-angle-right"></i></span></a>
                      <ul class="sub-menu">
                        <li><a href="{{ route('second',['landing', 'index'])}}">Home 1</a></li>
                        <li><a href="{{ route('second', ['landing', 'index2'])}}">Home 2</a></li>
                        <li><a href="{{ route('second', ['landing', 'index3'])}}">Home 3</a></li>
                        <li><a href="{{ route('second', ['landing', 'index4'])}}">Home 4</a></li>
                        <li><a href="{{ route('second', ['landing', 'index5'])}}">Home 5</a></li>
                        <li><a href="{{ route('second', ['landing', 'index6'])}}">Home 6</a></li>
                        <li><a href="{{ route('second', ['landing', 'index7'])}}">Home 7</a></li>
                        <li><a href="{{ route('second', ['landing', 'index8'])}}">Home 8</a></li>
                        <li><a href="{{ route('second', ['landing', 'index9'])}}">Home 9</a></li>
                        <li><a href="{{ route('second', ['landing', 'index10'])}}">Home 10</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown has-dropdown1"><a href="{{ route('second', ['landing', 'index4'])}}">Landing Page<span><i
                            class="fa-solid fa-angle-right"></i></span></a>
                      <ul class="sub-menu">
                        <li><a href="{{ route('second', ['single-landing', 'index1'])}}">Home 1</a></li>
                        <li><a href="{{ route('second', ['single-landing', 'index2'])}}">Home 2</a></li>
                        <li><a href="{{ route('second', ['single-landing', 'index3'])}}">Home 3</a></li>
                        <li><a href="{{ route('second', ['single-landing', 'index4'])}}">Home 4 </a></li>
                        <li><a href="{{ route('second', ['single-landing', 'index5'])}}">Home 5 </a></li>
                        <li><a href="{{ route('second', ['single-landing', 'index6'])}}">Home 6 </a></li>
                        <li><a href="{{ route('second', ['single-landing', 'index7'])}}">Home 7 </a></li>
                        <li><a href="{{ route('second', ['single-landing', 'index8'])}}">Home 8 </a></li>
                        <li><a href="{{ route('second', ['single-landing', 'index9'])}}">Home 9 </a></li>
                        <li><a href="{{ route('second', ['single-landing', 'index10'])}}">Home 10 </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li><a href="{{ route('second', ['others', 'about'])}}">About Us</a></li>
                <li class="has-dropdown"><a href="#">Service <i class="fa-solid fa-angle-down"></i></a>
                  <ul class="sub-menu">
                    <li class="has-dropdown has-dropdown1"><a href="{{ route('second', ['landing', 'index4'])}}">Our Service<span><i
                            class="fa-solid fa-angle-right"></i></span></a>
                      <ul class="sub-menu">
                        <li><a href="{{ route('second', ['services', 'index'])}}">Our Service 1</a></li>
                        <li><a href="{{ route('second', ['services', 'index2'])}}">Our Service 2</a></li>
                      </ul>
                    </li>
                    <li><a href="{{ route('second', ['services', 'details'])}}">Service Details</a></li>
                  </ul>
                </li>

                <li class="dropdown-menu-parrent"><a href="#">Pages <i class="fa-solid fa-angle-down"></i></a>
                  <ul>
                    <li><a href="{{ route('second', ['pages', 'case'])}}">Case Study</a></li>
                    <li><a href="{{ route('second', ['pages', 'case-details1'])}}">Case Details 1</a></li>
                    <li><a href="{{ route('second', ['pages', 'case-details2'])}}">Case Details 2</a></li>
                    <li><a href="{{ route('second', ['pages', 'faq'])}}">FAQ</a></li>
                    <li><a href="{{ route('second', ['pages', 'error'])}}">404</a></li>
                  </ul>
                </li>

                <li class="has-dropdown"><a href="#">Shop <i class="fa-solid fa-angle-down"></i></a>
                  <ul class="sub-menu">
                    <li class="has-dropdown has-dropdown1"><a href="{{ route('second', ['shop', 'index'])}}">shop<span><i
                            class="fa-solid fa-angle-right"></i></span></a>
                      <ul class="sub-menu">
                        <li><a href="{{ route('second', ['shop', 'index'])}}">Shop</a></li>
                        <li><a href="{{ route('second', ['shop', 'sidebar-left'])}}">Shop Left</a></li>
                        <li><a href="{{ route('second', ['shop', 'sidebar-right'])}}">Shop Right</a></li>
                      </ul>
                    </li>

                    <li class="has-dropdown has-dropdown1"><a href="{{ route('second', ['shop', 'index'])}}">Others<span><i
                            class="fa-solid fa-angle-right"></i></span></a>
                      <ul class="sub-menu">
                        <li><a href="{{ route('second', ['others', 'cart'])}}">Cart</a></li>
                        <li><a href="{{ route('second', ['others', 'checkout'])}}">Checkout</a></li>
                        <li><a href="{{ route('second', ['others', 'account'])}}">Account 1</a></li>
                        <li><a href="{{ route('second', ['others', 'account2'])}}">Account 2</a></li>
                      </ul>
                    </li>

                    <li><a href="{{ route('second', ['shop', 'details'])}}">Shop Details</a></li>
                  </ul>
                </li>

                <li class="has-dropdown"><a href="#">Blog <i class="fa-solid fa-angle-down"></i></a>
                  <ul class="sub-menu">

                    <li class="has-dropdown has-dropdown1"><a href="{{ route('second', ['blog', 'index'])}}">Blog<span><i
                            class="fa-solid fa-angle-right"></i></span></a>
                      <ul class="sub-menu">
                        <li><a href="{{ route('second', ['blog', 'index'])}}">Blog 1</a></li>
                        <li><a href="{{ route('second', ['blog', 'index2'])}}">Blog 2</a></li>
                        <li><a href="{{ route('second', ['blog', 'sidebar-left'])}}">Blog Left</a></li>
                        <li><a href="{{ route('second', ['blog', 'sidebar-right'])}}">Blog Right </a></li>
                      </ul>
                    </li>

                    <li class="has-dropdown has-dropdown1"><a href="{{ route('second', ['blog', 'index'])}}">Blog Details<span><i
                            class="fa-solid fa-angle-right"></i></span></a>
                      <ul class="sub-menu">
                        <li><a href="{{ route('second', ['blog-details', 'sidebar-left'])}}">Details Left</a></li>
                        <li><a href="{{ route('second', ['blog-details', 'sidebar-right'])}}">Details Right</a></li>
                        <li><a href="{{ route('second', ['blog-details', 'index'])}}">Single Details</a></li>
                      </ul>
                    </li>

                  </ul>
                </li>
                <li><a href="{{ route('second', ['others', 'contact'])}}">Contact Us</a></li>

              </ul>
            </div>


            {{ $slot }}
            <div class="mobile-menu-bar d-lg-none">
              <i class="fas fa-bars"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>