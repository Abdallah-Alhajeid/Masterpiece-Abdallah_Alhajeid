@extends('layouts.client_layout')
<html class="no-js" lang="en">
    <head>

        @section("title")
        <title>Tai | {{$service->service_name}} </title>
        <meta name="description" content="All services nearby">
        @endsection
        
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        @section('content')    
    


    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                     <h3>{{$service->service_name}}</h3>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/services">Services</a></li>
                            <li>{{$service->service_name}} Details</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    





    <!--product details start-->

    @if($message = Session::get('message'))
    <div class="alert alert-success alert-dismissible fade show">
        {{$message}}
    </div>
    @endif 
    <div class="product_details mt-70 mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                                <img id="zoom1" src="{{asset("images/$service->service_image")}} " data-zoom-image="{{asset("images/$service->service_image")}} " alt="">
                        </div>
                        <div class="single-zoom-thumb">
                          
                            </ul>
                        </div>
                    </div>
                </div>
     
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        
                        @if(Auth::check() && $service->giver_id == Auth::user()->user_id) 
                        <h1><a href="{{$service->service_id}}">{{$service->service_name}}</a></h1>
                        <div class="product_meta">
                            <span>Category: {{$service->service_type}} </h4>  </a></span>
                        </div>
                        <div class=" product_ratting">
                            <ul>
          
                                <li class="review"><a href="{{ url('user/profile/' . $service->giver_id) }}">Giver name: {{$service->Service_giver}} </a></li>
                            </ul>
                            
                        </div>  
                        <form action="{{ route('manageService.destroy', $service->service_id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-lg" style="color:#fff; border-radius: 4px;
                            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);">Delete</button>
                        </form>

                        @else
                        <form action="/service/{{$service->service_id}}/book" method="post">
                        @csrf()

                        
                        <h1><a href="{{$service->service_id}}">{{$service->service_name}}</a></h1>
                        <div class="product_nav">
                            {{-- <ul>
                                <li class="prev"><a href="product-details.html"><i class="fa fa-angle-left"></i></a></li>
                                <li class="next"><a href="variable-product.html"><i class="fa fa-angle-right"></i></a></li>
                            </ul> --}}
                        </div>
                        {{-- <span class="current_price"> {{$service->service_expiredate}} </span> --}}
                
                        
                        
                        <div class="product_meta">
                            <span>Category: {{$service->service_type}} </h4>  </a></span>
                        </div>
                        <div class=" product_ratting">
                            <ul>
          
                                <li class="review"><a href="{{ url('user/profile/' . $service->giver_id) }}">Giver name: {{$service->Service_giver}} </a></li>
                            </ul>
                            
                        </div>
                        <a>

                            <button class="btn btn-success btn-lg " type="submit" name="book" style="background-color:#7fb82d;color:#fff; border-radius: 4px;
                            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);">Request this</button>
                        </a>
                        </form>
    @endif
              
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>           
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>           
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>           
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>        
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>        
                            </ul>      
                        </div>

                    </div>
                    </div>
                    </div>
                </div>
     
    <!--product details end-->
    



    <!--product info start-->
    <div class="product_d_info mb-65">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">   
                        <div class="product_info_button">    
                            <ul class="nav" role="tablist" id="nav-tab">
                                <li >
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                                </li>


                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                <div class="product_info_content">
                              
                                    <p>{{$service->service_desc}}</p>
                                </div>    
                            </div>
                          
                   
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @endsection
    <!--product info end-->
















