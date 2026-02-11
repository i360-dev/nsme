 <!--=====Mobile header start=======-->
 <div class="mobile-header mobile-header-4 d-block d-lg-none ">
     <div class="container-fluid">
         <div class="col-12">
             <div class="mobile-header-elements">
                 <div class="mobile-logo">
                     <a href="{{ route('second',['landing', 'index'])}}"><img src="/img/logo/header1-logo.svg" alt=""></a>
                 </div>
                 <div class="mobile-nav-icon">
                     <i class="fa-solid fa-bars"></i>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="mobile-sidebar d-block d-lg-none">
     <div class="menu-close">
         <i class="fa-solid fa-xmark"></i>
     </div>
     <div class="mobile-nav">

         <li class="has-dropdown"><a href="#">Home </a>
             <ul class="sub-menu">
                 <li class="has-dropdown has-dropdown1"><a href="{{ route('second', ['landing', 'index4'])}}">Multipage</a>
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
                 <li class="has-dropdown has-dropdown1"><a href="{{ route('second', ['landing', 'index4'])}}">Landing Page</a>
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
         <li class="has-dropdown"><a href="#">Service</a>
             <ul class="sub-menu">
                 <li class="has-dropdown has-dropdown1"><a href="{{ route('second', ['landing', 'index4'])}}">Our Service</a>
                     <ul class="sub-menu">
                         <li><a href="{{ route('second', ['services', 'index'])}}">Our Service 1</a></li>
                         <li><a href="{{ route('second', ['services', 'index2'])}}">Our Service 2</a></li>
                     </ul>
                 </li>
                 <li><a href="{{ route('second', ['services', 'details'])}}">Service Details</a></li>
             </ul>
         </li>

         <li class="dropdown-menu-parrent"><a href="#">Pages</a>
             <ul>
                 <li><a href="{{ route('second', ['pages', 'case'])}}">Case Study</a></li>
                 <li><a href="{{ route('second', ['pages', 'case-details1'])}}">Case Details 1</a></li>
                 <li><a href="{{ route('second', ['pages', 'case-details2'])}}">Case Details 2</a></li>
                 <li><a href="{{ route('second', ['pages', 'faq'])}}{{ route('second', ['pages', 'faq'])}}">FAQ</a></li>
                 <li><a href="{{ route('second', ['pages', 'error'])}}">404</a></li>
             </ul>
         </li>

         <li class="has-dropdown"><a href="#">Shop</a>
             <ul class="sub-menu">
                 <li class="has-dropdown has-dropdown1"><a href="{{ route('second', ['shop', 'index'])}}">shop</a>
                     <ul class="sub-menu">
                         <li><a href="{{ route('second', ['shop', 'index'])}}">Shop</a></li>
                         <li><a href="{{ route('second', ['shop', 'sidebar-left'])}}">Shop Left</a></li>
                         <li><a href="{{ route('second', ['shop', 'sidebar-right'])}}">Shop Right</a></li>
                     </ul>
                 </li>

                 <li class="has-dropdown has-dropdown1"><a href="{{ route('second', ['shop', 'index'])}}">Others</a>
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

                 <li class="has-dropdown has-dropdown1"><a href="{{ route('second', ['blog', 'index'])}}">Blog</a>
                     <ul class="sub-menu">
                         <li><a href="{{ route('second', ['blog', 'index'])}}">Blog 1</a></li>
                         <li><a href="{{ route('second', ['blog', 'index2'])}}">Blog 2</a></li>
                         <li><a href="{{ route('second', ['blog', 'sidebar-left'])}}">Blog Left</a></li>
                         <li><a href="{{ route('second', ['blog', 'sidebar-right'])}}">Blog Right </a></li>
                     </ul>
                 </li>

                 <li class="has-dropdown has-dropdown1"><a href="{{ route('second', ['blog', 'index'])}}">Blog Details</a>
                     <ul class="sub-menu">
                         <li><a href="{{ route('second', ['blog-details', 'sidebar-left'])}}">Details Left</a></li>
                         <li><a href="{{ route('second', ['blog-details', 'sidebar-right'])}}">Details Right</a></li>
                         <li><a href="{{ route('second', ['blog-details', 'index'])}}">Single Details</a></li>
                     </ul>
                 </li>

             </ul>
         </li>
         <li><a href="{{ route('second', ['others', 'contact'])}}">Contact Us</a></li>

         <li><a class="mobile-menu-button" href="{{ route('second', ['others', 'contact'])}}">Get Started</a></li>



     </div>

     <div class="single-footer single-footer-menu single-footer4">
         <h3>Contact Info</h3>
         <div class="footer4-contact-info">
             <div class="contact-info-single">
                 <div class="contact-info-icon">
                     <img src="/img/icons/footer4-contact1.svg" alt="">
                 </div>
                 <div class="contact-info-text">
                     <a href="tel:+3(924)4596512">+3(924)4596512</a>
                 </div>
             </div>

             <div class="contact-info-single">
                 <div class="contact-info-icon">
                     <img src="/img/icons/footer4-contact2.svg" alt="">
                 </div>
                 <div class="contact-info-text">
                     <a href="mailto:info@example.com">info@example.com</a>
                 </div>
             </div>

             <div class="single-footer single-footer-menu single-footer4">
                 <h3>Our Location</h3>

                 <div class="contact-info-single">
                     <div class="contact-info-icon">
                         <img src="/img/icons/footer4-contact3.svg" alt="">
                     </div>
                     <div class="contact-info-text">
                         <a href="mailto:info@example.com">55 East Birchwood Ave.Brooklyn, <br> New York 11201,United
                             States</a>
                     </div>
                 </div>

             </div>

             <div class="single-footer single-footer-menu single-footer4">
                 <h3>Social Links</h3>

                 <div class="social social4-menu social4">
                     <ul>
                         <li>
                             <a data-bs-toggle="tooltip" title="Linked in" href="#"><i
                                     class="fa-brands fa-facebook"></i></a>
                         </li>
                         <li>
                             <a data-bs-toggle="tooltip" title="Facebook" href="#"><i
                                     class="fa-brands fa-linkedin-in"></i></a>
                         </li>
                         <li>
                             <a data-bs-toggle="tooltip" title="Instagram" href="#"><i
                                     class="fa-brands fa-youtube"></i></a>
                         </li>
                         <li>
                             <a data-bs-toggle="tooltip" title="TikTok" href="#"><i
                                     class="fa-brands fa-twitter"></i></a>
                         </li>
                     </ul>
                 </div>

             </div>

         </div>

     </div>
 </div>
