@extends('layouts.client_layout')
@section('content')    
<!doctype html>
<html class="no-js" lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @section("title")
        <title>Tai | Login </title>
        <meta name="description" content="Online Appointments Registeration system for book driving lessons">
    @endsection
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        



    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                       <h3>Login</h3>
                        <ul>
                            <li><a href="/">home</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    

    <!-- customer login start -->
    <div class="customer_login">
        <div class="container">
            <div class="row">
               <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>login</h2>
                        <h5>{{ $title }}</h5>

                        <form action="{{ $loginRoute }}" method="POST">
                            <p>   
                                @csrf
                                <div class="">
                                    <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                                    <input id="email"  type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="example@tai.com" autocomplete="email" >  
                                    @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                      @enderror
                             </p>
                             <p>   
                                <hr>

                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" placeholder="Password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                             </p>   
                            <div class="login_submit">
                               {{-- <a href="#">Lost your password?</a> --}}
                                {{-- <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Remember me
                                </label> --}}
                                <button type="submit" class="site-btn second-bg">{{ __('Login') }}</button>
                       
                            </div>
                            @if($title != "Admin Login")
                            <p>Don't have an account?</p>
                            <a  href="{{ route('register') }}" class="btn Admin"> {{ __('register Now') }} </a>
                            @endif
                        </form>
                     </div>    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
