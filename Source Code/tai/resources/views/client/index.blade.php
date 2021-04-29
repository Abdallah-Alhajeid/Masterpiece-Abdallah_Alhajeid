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
@extends('layouts.client_layout')
@section('content')    

        @section("title")
        <title>Tai | Profile </title>
        <meta name="description" content="All services nearby">
    @endsection

 

    @section('content')
<body>
    {{-- <div id="preloder">
        <div class="loader"></div>
    </div> --}}
    
    
<body>
    
    <!--slider area start-->
    <section class="slider_section color_two mb-70">
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/tai.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider_content">
                                <h1 
                                style="color:white;"
                                {{-- style="font-family: Redressed, cursive; font-size: 3rem;
                                text-shadow: 5px 5px 10px #dadada; --}}
                                color:#e8eee0;">The #1 free sharing app</h1>
                                <h3 
                                style="color:white;"
                                 {{-- style="font-family: Redressed, cursive; 
                                text-shadow: 5px 5px 10px #dadada;    color:#e8eee0" --}}
                                > 
                                 Fight food waste and Help your community
                                </h3>
                                
                            

                                    <button style="background-color:#7fb82c; color:white" class="btn btn-success btn-lg video" data-video="https://www.youtube.com/embed/jIbfAxD7mf8?autoplay=1&controls=1" data-toggle="modal" data-target="#videoModal">About</button>
                                

                                    <div class="modal fade col-lg-12"  id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body"> 
          <button type="button" class="close" data-dismiss="modal"   title="TAI food sharing" aria-label="Close"><span>&times;</span></button>
          <iframe  frameborder="0"width="560" height="315" src="" frameborder="" allow="autoplay; encrypted-media; accelerometer; clipboard-write;  gyroscope; picture-in-picture" allowfullscreen="true"  style="width: 100%; height: 415px;"></iframe>
        </div>
      </div>
    </div>
  </div>
    

                                <a href="/services">Services shop </a>
                        
                                   <!-- About Video Section Begin -->
   


</head>

<body>



        </div>
    </section>
    
    <!--slider area end-->
    {{-- <div 
    style="  position: relative;
    overflow: hidden;
    width: 100%;
    padding-top: 36.66%;
    padding-left: 30%;
">
        <iframe class="responsive-iframe" style= " position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        border: none;"" src="https://www.youtube.com/embed/2Zt8va_6HRk"  allow="autoplay;   encrypted-media" allowfullscreen ></iframe>
    </div>
     --}}

    <!--banner area start-->
        <div class="banner_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <img src="assets/img/bg/bg1.png" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--banner area end-->
     
        <!--banner area start-->
        <div class="banner_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                         <img src="assets/img/bg/bg2.png" alt="banner photo">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                          <img src="assets/img/bg/bg3.png" alt="banner photo">
                                {{-- <a href="shop.html"><img src="assets/img/bg/bg3.png" alt=""></a>  --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--banner area end-->

     <!--product area start-->
    <div class="product_area color_two mb-65">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                      <p>Recently added to our shop </p>
                       <h2>Mostview Services</h2>
                    </div>
                </div>
            </div> 
             <div class="product_container">  
                @if(count($Services) > 0)

             <div class="row">  
                 
                 <div class="col-12">
                     <div class="product_carousel product_column5 owl-carousel">
                            @foreach($Services as $Service)
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                          
                                        <a class="primary_img" href="/service/{{$Service->service_id}}""><img src="{{asset("images/$Service->service_image")}}" alt=""></a>
                                        <a class="secondary_img" href="/service/{{$Service->service_id}}""><img src="{{asset("images/$Service->service_image")}}" alt=""></a>
                                        <div class="label_product">
                                            {{-- <span class="label_sale">{{$Service->service_type}}</span> --}}
                                            {{-- <span class="label_new">Ne+w</span> --}}
                                        </div>
                                        {{-- <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" data-tippy="Add to cart" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"> <span class="lnr lnr-cart"></span></a></li>
                                               <li class="quick_button"><a href="#" data-tippy="quick view" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box" > <span class="lnr lnr-magnifier"></span></a></li>
                                                 <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li> 
                                                <li class="compare"><a href="#" data-tippy="Add to Compare" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                    <figcaption class="product_content">
                                        <h4 class="product_name"><a href="/service/{{$Service->service_id}}"">{{$Service->service_name}}</a></h4>
                                        <p><a href="/service/{{$Service->service_id}}">{{$Service->service_type}}</a></p>

                                        
                                        <div class="price_box"> 
                                            {{-- <span class="current_price">Free</span> --}}
                                            {{-- <span class="old_price">$235.00</span> --}}
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>

                            @endforeach
                        </div>
                    </div>
                    
                </div>  
            </div>  
            @else
            <p>no services found</p>
            @endif
        </div> 
    </div>
    <!--product area end-->
    
    <!--banner fullwidth area satrt-->
    <div class="banner_fullwidth color_two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner_full_content">
                        <p>Hot products !</p>
                        <h2 style="color:white;">Try now<span>all Food services</span></h2>
                        <a href="/services">discover now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner fullwidth area end-->
    

    <!--blog area start-->
  

    
 
    <section class="blog_section blog_section2 color_two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                       <p>Our recent articles about Food wasting</p>
                       <h2>Our Articles</h2>
                    </div>
                </div>
  
            </div>

            <div class="row">

                <div class="blog_carousel blog_column3 owl-carousel">
                    @if(count($Article) > 0)
                    @foreach($Article as $Articles)                    
                
                    <div class="col-lg-3">

                  
                        <article class="single_blog">
                          
                     
                            <figure>
                     
                                <div class="blog_thumb">
                                    <a href="/articles/{{$Articles->article_id}}"><img src="{{asset("images/$Articles->article_image")}}" alt=""></a>
                                </div>
                                
                                <figcaption class="blog_content"> 
                                   <div class="articles_date">
                                         <p>{{$Articles->created_at->format('d.M.y | h:i a')}} </p>
                                    </div>
                                    <h4 class="post_title"><a href="/articles/{{$Articles->article_id}}">{{$Articles->article_title}}</a></h4>
                                    <footer class="blog_footer">
                                        <a href="/articles/{{$Articles->article_id}}">Show more</a>
                                    </footer>

                                </figcaption>
                                
                            </figure>
                            
                        </article>
                        
                        
                    </div>
                    @endforeach
    
                  
                </div>
            </div>

      
        </div>
    </section>
    @else
    <p>No articles</p>

    @endif

    <!--blog area end-->

    <!--custom product area start-->
    <div class="custom_product_area color_two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                       <p>Check out more services </p>
                       <h2>More services</h2>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-12">
                    <div class="small_product_area product_carousel product_column3 owl-carousel">
                        <div class="product_items">
                            @foreach($Services as $Service)
                      
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="/service/{{$Service->service_id}}">
                                            <img src="{{asset("images/$Service->service_image")}}" alt=""></a>
                                        <a class="secondary_img" href="/service/{{$Service->service_id}}">
                                            <img src="{{asset("images/$Service->service_image")}}" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <h4 class="product_name"><a href="/service/{{$Service->service_id}}">{{$Service->service_name}}</a></h4>
                                        <p><a href="/service/{{$Service->service_id}}">{{$Service->service_type}}</a></p>
                                        {{-- <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" data-tippy="Add to cart" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"> <span class="lnr lnr-cart"></span></a></li>
                                               <li class="quick_button"><a href="#" data-tippy="quick view" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box" > <span class="lnr lnr-magnifier"></span></a></li>
                                               <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li> 
                                                <li class="compare"><a href="#" data-tippy="Add to Compare" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                            </ul>
                                        </div> --}}
                                        {{-- <div class="price_box"> 
                                            <span class="current_price">${{$Service->service_type}}</span>
                                            <span class="old_price">$382.00</span>
                                        </div> --}}
                                    </figcaption>
                                </figure>
                            </article>
                            @endforeach
                           
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--custom product area end-->

    <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel ">
                        {{-- <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand1.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand2.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand3.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand4.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand2.jpg" alt=""></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- JS
============================================ -->
<!--jquery min js-->
<script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
<!--popper min js-->
<script src="assets/js/popper.js"></script>
<!--bootstrap min js-->
<script src="assets/js/bootstrap.min.js"></script>
<!--owl carousel min js-->
<script src="assets/js/owl.carousel.min.js"></script>
<!--slick min js-->
<script src="assets/js/slick.min.js"></script>
<!--magnific popup min js-->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!--counterup min js-->
<script src="assets/js/jquery.counterup.min.js"></script>
<!--jquery countdown min js-->
<script src="assets/js/jquery.countdown.js"></script>
<!--jquery ui min js-->
<script src="assets/js/jquery.ui.js"></script>
<!--jquery elevatezoom min js-->
<script src="assets/js/jquery.elevatezoom.js"></script>
<!--isotope packaged min js-->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!--slinky menu js-->
<script src="assets/js/slinky.menu.js"></script>
<!--instagramfeed menu js-->
<script src="assets/js/jquery.instagramFeed.min.js"></script>
<!-- tippy bundle umd js -->
<script src="assets/js/tippy-bundle.umd.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
$(function() {
  $(".video").click(function () {
    var theModal = $(this).data("target"),
    videoSRC = $(this).attr("data-video"),
    videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
    $(theModal + ' iframe').attr('src', videoSRCauto);
    $(theModal + ' button.close').click(function () {
      $(theModal + ' iframe').attr('src', videoSRC);
    });
  });
});
</script>
</body>

</html>
@endsection
