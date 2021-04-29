<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield("title")
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href={{asset("assets/css/bootstrap.min.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("assets/css/font-awesome.min.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("assets/css/nice-select.css")}} type="text/css">
        <!--magnific popup min css-->
    <link rel="stylesheet" href={{asset("assets/css/magnific-popup.css")}} type="text/css">
        <!--jquery ui min css-->
    <link rel="stylesheet" href={{asset("assets/css/jquery-ui.min.css")}} type="text/css">
        <!--owl carousel min css-->
    <link rel="stylesheet" href={{asset("assets/css/owl.carousel.min.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("assets/css/slicknav.min.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("assets/css/style.css")}} type="text/css">
  
    <!--slick min css-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--font awesome css-->
    <link rel="stylesheet" href="assets/css/font.awesome.css">
    <!--ionicons css-->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!--linearicons css-->
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <!--animate css-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--slinky menu css-->
    <link rel="stylesheet" href="assets/css/slinky.menu.css">
    <!--plugins css-->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
</head>
    
<style>
    .dropProfile:focus,.dropProfile:hover {
        color: black !important;
    }
    .sign {
        transition: 0.2s;
        padding: 10px !important;
        color: #fff !important;
    }
    .sign:hover {
        transform: scale(1.05);
        color: #0c2b4b !important;

    }
    .header__menu {
        padding: 15px 0 ;
    }
    .header__right {
        padding: 0;
    }

    .header__logo {
        padding: 0 ;
        height: 3.9rem;
    }
    .header {
        height: 3.9rem;
    }
    .align {
        display: flex;
        align-items: center;
    }
    .align-right {
      padding-left: 20%;
    }
    .canvas__open {
        top : 13px ;
    }
    ::-webkit-scrollbar {
	width: 0.5em;
  }
::-webkit-scrollbar-thumb {
	position: relative; top: 0px; float: right; width: 6px; height: 200px; background-color: #7fb82d; border: 0px; background-clip: padding-box; border-radius: 0px 0px 10px 10px;
  }

</style>
    <body>
        {{-- <div id="preloder">
            <div class="loader"></div>
        </div> --}}
        
        <!--header area start-->
        
        <!--offcanvas menu area start-->
        <div class="off_canvars_overlay">
                    
        </div>
        <div class="offcanvas_menu offcanvas_two">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        
                        <div class="canvas_open">
                            <a href="javascript:void(0)"><i class="icon-menu"></i></a>
                        </div>
                        <div class="offcanvas_menu_wrapper">
                            <div class="canvas_close">
                                <a href="javascript:void(0)"><i class="icon-x"></i></a>  

                            </div>
                            
                            @if (Auth::check()) 

                            <li class="dropdown profile_details_drop">
                                <a style="color:#7fb82d;" href="{{url('profile')}}"><i class="fa fa-user-circle fa-2x"></i>  {{Auth::user()->user_name}}</a>                                          
                                <a href="profile" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    
                    </a>
                    <ul class="dropdown-menu drp-mnu">
                        <li>
                            <a style="color:black;" href="/profile"
                            >
                            Profile
                        </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a style="color:red;" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                logout
                            </a>


                    </ul>
                </li>


                @endif
                      
                           
                            </ul> 
         
    
                            <div class="search_container offcanvas__search">
                                <form action="/services/search" method="POST" class="search-model-form">
                                    @method('POST')
                                    {{csrf_field()}}
                                    <div class="search_box">
                                            <input placeholder="Search here..." type="text"  name="search_input" id="search-input">
                                             <button type="submit"><span class="lnr lnr-magnifier"></span></button>
                                        </div>
                                    </form>
                            </div>
                         
                            <div class="call-support">
                                <p><a href="tel:(962) 798513276">(962) 798513276</a> </p>
                            </div>
                            <div id="menu" class="text-left ">
                                <ul class="offcanvas_main_menu">
                                    @if (!(Auth::check())) 
                    
                                    <li><a href="/login">Login</a></li>
                                    <li><a href="/register">Register</a></li>
                                    
                                    
                                 @endif
                                 <li>
                                    <a class="{{Request::path() ===  '/' ? 'active' : ''}}"   href="/">home</a>
                                </li>
                                <li>
                                    <a class="{{Request::path() ===  '/services' ? 'active' : ''}}"   href="/services">Services Shop</a>
                                </li>
                                @if (Auth::check()) 

                                <li>
                                    <a class="{{'/addservice' == request()->path() ? 'active' : ''}}"   href="/addservice">Add New Service</a>
                                </li>
                                @endif
                                <li>
                                    <a class="{{'/articles' == request()->path() ? 'active' : ''}}"   href="/articles">Articles</a>
                                </li>
                                <li>
                                    <a class="{{'/contact' == request()->path() ? 'active' : ''}}"   href="/contact"> Contact Us</a>
                                </li>
                            </div>
                            <div class="offcanvas_footer">
                                <span><a href="#"><i class="fa fa-envelope-o"></i> info@tai</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--offcanvas menu area end-->

                <div class="header_middle header_middle2">
                    <div class="container">
                        <div class="row align-items-center">
                           <div class="col-lg-4 col_search">
                               <div class="search_container mobail_s_none">
                                

                                
                                <form action="/services/search" method="POST" class="search-model-form">
                                    @method('POST')
                                    {{csrf_field()}}
                                    <div class="search_box">
                                            <input placeholder="Search here..." type="text"  name="search_input" id="search-input">
                                             <button type="submit"><span class="lnr lnr-magnifier"></span></button>
                                        </div>
                                    </form>
                                 
                                </div>
                           </div>
                            <div class="col-lg-4 col-md-3 col-sm-3 col-3">
                                <div class="logo">
                                    <a href="/"><img src="assets/img/logo/logo2.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-7 col-8">
                                <div class="header_account_area">
                                    {{-- @if(count($Services) > 0) --}}
                                                                <!--mini cart-->
                                             @if (Auth::check())  
                                                      
                                             <div class="header_account_list  mini_cart_wrapper">
                                                @foreach(Auth::user()->services as $service)
                                                 @if($service->giver_id == Auth::user()->user_id) 
                                         
                                                 <a  href="javascript:void(0)"> <i class="fa fa-bell"></i><span style="background-color:red; color:#fff" class="item_count">
                                                    {{ $loop->count }}</span></a>
                                                 <div class="mini_cart">
                                                     <div class="cart_gallery">
                                                         <div class="cart_close">
                                                             <div class="cart_text">
                                                                 <h3>Services that has been requested</h3>
                                                             </div>
                                                             <div class="mini_cart_close">
                                                                 <a href="javascript:void(0)"><i class="icon-x"></i></a>
                                                             </div>
                                                             @php $image=$service->service_image; @endphp
                                                    
                                                          </div>
                                                    
                                                          <div class="cart_item">
                                                             <div class="cart_img">
                                                                 <a href="/service/{{$service->service_id}}""><img src="{{asset("images/$service->service_image")}}" alt=""></a>
                                                             </div>
                                                              <div class="cart_info">
                                                                  <a href="/service/{{$service->service_id}}">{{$service->service_name}}</a>
                                                                  <p>Requested By:
                                                                      <a href="{{ url('user/profile/' . $service->giver_id) }}">
                                                                       <span> {{$service->Service_giver}} </span>
                                                                       <span> {{optional ($service->serviceUsers_ids)->user_id}} </span>
                                                                       <span>{{ !empty($service->serviceUsers) ? $service->serviceUsers->service_id:'' }} </span>

                                                                   </a>
                                                                   </p>    
                                                                  <p> Requested at:<span>{{$service->created_at->format('d.M.y | h:i a')}} </span></p>    
                                                                 </div>
                                                                 
                                                          
                                                          </div>
                                                          
                                                         </div>
                                                         
                                                     </div>
                                                     @endif
                                                     @endforeach
                                                 </div>
                                                 @endif
                                         
                                         
                                         
                                                                             
                                                         
                                                 @if (!(Auth::check())) 
                                                    
                                                  @endif
                                                
                                                 </ul> 
                                         
                                                 <!--mini cart end-->
                                    <div class="header_account_list register">
                                    
                                    



                                        @if (Auth::check()) 
                                      
                                                    <li class="dropdown profile_details_drop">
                                                        <a style="color:#Ffff;" href="{{url('profile')}}"><i class="fa fa-user-circle fa-2x"></i>  </a>                                          
                                                        <a href="profile" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            
                                            </a>
                                            <ul class="dropdown-menu drp-mnu">
                                                <li>
                                                    <a style="color:#000;" href="{{url('profile')}}"><i class="fa fa-user-circle "></i>  {{Auth::user()->user_name}}</a>                                          

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                    <a style="color:red;" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                       <i class="fa fa-sign-out ">logout</i>  
                                                    </a>
     
            
                                            </ul>
                                        </li>


                                        @endif



                                    
                
                                                            @if (!(Auth::check())) 
                                                            <ul>
                                                            <ul>
                                                                <li><a href="/register">Register</a></li>
                                                                <li><span>|</span></li>
                                                                <li><a href="/login">Login</a></li>
                                                                
                                                            </ul>                 
                                                             @endif
                                                           
                                                            </ul> 
                                    
                                    
                                    
                                    
                                    

                                    </div>

                                   </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div class="header_bottom sticky-header">
                    <div class="container">  
                        <div class="row align-items-center">
                            <div class="col-lg-8 offset-lg-2">
                                <!--main menu start-->
                                <div class="main_menu  menu_two color_two menu_position"> 
                                    <nav>  
                                        <ul>
                                            <li>
                                                
                                            <li>
                                                <a class="{{Request::path() ===  '/' ? 'active' : ''}}"   href="/">home</a>
                                            </li>
                                            <li>
                                                <a class="{{Request::path() ===  '/services' ? 'active' : ''}}"   href="/services">Services Shop</a>
                                            </li>
                                            @if (Auth::check()) 

                                            <li>
                                                <a class="{{'/addservice' == request()->path() ? 'active' : ''}}"   href="/addservice">Add New Service</a>
                                            </li>
                                            @endif
                                            <li>
                                                <a class="{{'/articles' == request()->path() ? 'active' : ''}}"   href="/articles">Articles</a>
                                            </li>
                                            <li>
                                                <a class="{{'/contact' == request()->path() ? 'active' : ''}}"   href="/contact"> Contact Us</a>
                                            </li>
                             
                                            <ul class="sub_menu home_sub_menu d-flex">
                                               
                                    {{--  --}}
           
                                                </ul>
                                            </li>
                                        
                                    </nav> 
                                </div>
                                <!--main menu end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </header>
        <!--header area end-->
        @yield('content')
        
























<!-- Footer Section Begin -->
<footer class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
        
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="#"><img src={{asset("assets/img/logo/logo2.png")}} alt="Tai logo"></a>
                    </div>
                    <p style="color:white;">Address : Alhashime, Amman, 11063,  the Hashemite Kingdom of Jordan</p>
                    <ul>
                        <p><span style="color:white;">Email:</span> <a style="color:white;" href="#">info@tai.com</a></p>
                        <p><span style="color:white;">Call us:</span> <a style="color:white;" href="tel:(962)798513276">(962)798513276</a> </p>
                    </ul>
                </div>


            </div>
  
            <div class="col-lg-3 col-md-2 col-sm-6">
                <div class="footer__widget">
                    <h5 style="color:white;">Tai</h5>
                    <ul >
                        <li><a  style="color:white;"href="/">home</a></li>
                        <li><a style="color:white;"  href="/services">Services Shop</a></li>
                        <li><a style="color:white;"  href="/articles">Articles</a></li>
                        <li><a  style="color:white;" href="/contact"> Contact Us</a></li>
                        {{-- <li><a style="color:white;" href="#">Faq</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <div class="modal_social">
                        <h2  style="color:white;">Our social media</h2>
                        <ul>
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>    
                    </div>      
                </div>
            </div>
  
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="widgets_container widget_newsletter">
                    <h3  style="color:white;">Sign up newsletter</h3>
                    <p class="footer_desc" style="color:white;">Get updates by subscribe our  newsletter</p>
                    <div class="subscribe_form">
                        <form  style="color:white;" id="mc-form" class="mc-form footer-newsletter" >
                            <input id="mc-email" type="email" autocomplete="off"  style="color:white;" placeholder="Enter you email" />
                            <button id="mc-submit"  style="color:white;">Subscribe</button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> 
<!-- Footer Section End -->
   <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-x"></i></span>
                  </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">  
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig1.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig2.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig3.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig4.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">    
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li >
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/product/product1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/product/product6.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/product/product2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/product/product7.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>    
                                </div>  
                            </div> 
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Donec Ac Tempus</h2> 
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>    
                                        <span class="old_price" >$78.99</span>    
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>    
                                    </div> 
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                           <h2>size</h2>
                                           <select class="select_option">
                                               <option selected value="1">s</option>
                                               <option value="1">m</option>
                                               <option value="1">l</option>
                                               <option value="1">xl</option>
                                               <option value="1">xxl</option>
                                           </select>
                                        </div>
                                        <div class="variants_color">
                                           <h2>color</h2>
                                           <select class="select_option">
                                               <option selected value="1">purple</option>
                                               <option value="1">violet</option>
                                               <option value="1">black</option>
                                               <option value="1">pink</option>
                                               <option value="1">orange</option>
                                           </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>   
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>    
                                    </div>      
                                </div>    
                            </div>    
                        </div>     
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <!-- modal area end-->

<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>
</html>