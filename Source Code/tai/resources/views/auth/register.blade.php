@extends('layouts.client_layout')
@section('content')    
<!doctype html>
<html class="no-js" lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @section("title")
        <title>Tai | Register </title>
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
                       <h3>Register</h3>
                        <ul>
                            <li><a href="/">home</a></li>
                            <li>Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    






        <!--register area start-->
        <div class="customer_login">
            <div class="container">
                <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="account_form register">
                <h2>{{ __('Register') }}</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                                        <p>   
                                            <div class="">
                                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                                    <input id="name" autofocus placeholder="Your fullname" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                     </p>
                     <p>   
                        <hr>

                        <div class="">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="example@tai.com" autocomplete="email">  
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <hr>

                                <div class="">
                                    <label for="user_age" class="form-label">{{ __(' Age') }}</label>
                                    <input id="user_age" type="number" placeholder="Your age" class=" @error('user_age') is-invalid @enderror" name="user_age" value="{{ old('user_age') }}" required autocomplete="user_age">
                                    @error('user_age')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <hr>



                                <div class="">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" placeholder="Password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <hr>
                    
                                <div class="">
                                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" placeholder="Confirm Password" class=" @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                                </div>
                     </p>
                    <div class="login_submit">
                        <button type="submit" class="site-btn second-bg">{{ __('Register') }}</button>
                    </div>
                    <p>Already have an account?</p>
                    <a href="{{ route('login') }}" class="btn Admin">Login now</a>

                </form>
            </div>    
        </div>
        <!--register area end-->
    </div>
</div>    
</div>
</div>
</div>



@endsection



