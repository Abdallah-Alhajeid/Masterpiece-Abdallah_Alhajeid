@extends('layouts.client_layout')
@section('content')    

        @section("title")
        <title>Tai | Add Services </title>
        <meta name="description" content="All services nearby">
    @endsection




    @section('content')
    
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                       <h3>Add Service</h3>
                        <ul>
                            <li><a href="/">home</a></li>
                            <li>Add Service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    

    <div class="container-fluid">
        <div class="row" style="display: flex; justify-content: center">
            <div class="col-lg-8">
                <div class="card">
                    {{-- <div class="card-title"  style="background:#7fb82d; color: white; margin: 0; padding: 1rem">
                        <h2 class="text-center title-2">Add Service</h2>
                    </div> --}}
                    <div class="card-body" style="background: white; padding: 3rem">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <form action="/addServiceContoller" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label for="Service_giver" class="control-label mb-1">Service giver name</label>
                                    <input value="{{  Auth::user()->user_name }} "  placeholder="Service giver name" name="Service_giver" type="text" class="form-control" value="{{old('Service_giver')}}">
                                    @if ($errors->has('Service_giver'))
                                        <div class="text-danger">{{ $errors->first('Service_giver') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label for="service_name" class="control-label mb-1">Service Name</label>
                                    <input  placeholder="e.g homemade mansaf" name="service_name" type="text" class="form-control" value="{{old('service_name')}}">
                                    @if ($errors->has('service_name'))
                                        <div class="text-danger">{{ $errors->first('service_name') }}</div>
                                    @endif
                                </div>
                      
                                <div class="col-lg-6">
                                    <label for="service_type" class="control-label mb-1">Service type</label>
                                    <select name="service_type" class="form-control" value="{{ old('service_type') }}">
                                        <option value="Food">Food</option>
                                        <option value="Non-Food">Non-Food</option>
                                    </select>
                                </div>
    
                            </div>
            
                            <div class="form-group">
                                <label for="service_desc" class="control-label mb-1">Service description</label>
                                <textarea placeholder="e.g big plate of homemade mansaf with lambs and alot of jameed " name ="service_desc" class="form-control">{{old('service_desc')}}</textarea>
                                @if ($errors->has('service_desc'))
                                    <div class="text-danger">{{ $errors->first('service_desc') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="service_image" class="control-label mb-1">Service Image</label>
                                <input  name="service_image" type="file" class="form-control">
                                @if ($errors->has('service_image'))
                                    <div class="text-danger">{{ $errors->first('service_image') }}</div>
                                @endif
                            </div>

                            <div style="display: flex; justify-content: center">
                                <button id="payment-button" type="submit" class="btn btn-lg"style="background:#7fb82d; color:white; width: 50%" name="submit">Add
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection




























