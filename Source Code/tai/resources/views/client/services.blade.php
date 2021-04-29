@extends('layouts.client_layout')
@section('content')  
        @section("title")
        <title>Tai | Services </title>
        <meta name="description" content="All services nearby">
    @endsection

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        @if(isset($searched))

                       <h3>Services Shop / {{$searched}}</h3>
                        <ul>
                            <li><a href="/">home</a></li>
                            <li>Services Shop</li>
                        </ul>
                        @else
                        <h3>Services Shop </h3>
                        <ul>
                            <li><a href="/">home</a></li>
                            <li>Services Shop</li>
                        </ul>
                        @endif

                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <!--shop  area start-->
    <div class="shop_area shop_fullwidth mt-70 mb-70">
        <div class="container">
            @if(isset($searched))
            <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title center-title">
                            <h2>search results for {{$searched}}</h2>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title center-title">
                            <span>Check cool services nearby</span>
                        </div>
                    </div>
                </div>
            @endif
           
            <div class="row">
                
                <div class="col-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">
                            
                            <button data-role="grid_3" type="button" class=" btn-grid-3" data-toggle="tooltip" title="3"></button>

                            <button data-role="grid_4" type="button"  class="active btn-grid-4" data-toggle="tooltip" title="4"></button>

                            <button data-role="grid_list" type="button"  class="btn-list" data-toggle="tooltip" title="List"></button>
                        </div>
       
                        <div class="page_amount">
                            <p>Showing 1–8 results</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <div class="row shop_wrapper">
                        @foreach($services as $service)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">

                            <div class="single_product">
                                <div class="product_thumb">

                       
                                        <a class="primary_img img-responsive" href="/service/{{$service->service_id}}"><img src={{asset("images/$service->service_image")}} alt=""></a>
                                        <a class="secondary_img img-responsive" href="/service/{{$service->service_id}}"><img src={{asset("images/$service->service_image")}} alt=""></a>
                                        <div class="label_product">
                                            {{-- <span class="label_sale">{{$service->service_type}}</span> --}}
                                            {{-- <span class="label_new">New</span> --}}
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
                              <div class="product_content grid_content">
                                        <h4 class="product_name"><a href="/service/{{$service->service_id}}">{{$service->service_name}}</a></h4>
                                        <p><a href="#">{{$service->service_type}}</a></p>
         
                                    </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="/service/{{$service->service_id}}">{{$service->service_name}}</a></h4>
                                    <p><a href="#">{{$service->service_type}}</a></p>
                                    {{-- <div class="price_box"> 
                                        <span class="current_price">$26.00</span>
                                    </div> --}}
                                    <div class="price_box"> 
                                        <span class="current_price">   <p> <a href="{{ url('user/profile/' . $service->giver_id) }}">
                                            {{$service->Service_giver}}</p>     </span>
                                        </a>
                                    </div>
                                    <div class="product_desc">
                                        <p>{{$service->service_desc}}</p>
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            <li class="add_to_cart"><a href="/service/{{$service->service_id}}" title="Add to cart">See More details</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>      
                    </div>  
                          
                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                <li class="current">    
                                    
                                    {{$services->links()}}
                                </li>
                
                            </ul>
                        </div>
                    </div>
                
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    

    <!--shop  area end-->
 
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


</body>
@endsection
</html>
