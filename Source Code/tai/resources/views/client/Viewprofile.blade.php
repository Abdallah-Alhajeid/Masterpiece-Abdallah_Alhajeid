@extends('layouts.client_layout')
@section('content')    

        @section("title")
        <title>Tai |  {{ $user->user_name }} </title>
        <meta name="description" content="All services nearby">
    @endsection

 

    @section('content')
    
<style>
    .profile {
       
    }
    .center {
        display: grid;
        place-items: center;
    }
    .center-Flex {
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 1rem;
    }
    .profContainer {
        display: grid;
        place-items: center;
        position: relative;
    }
    .backProfile {
        overflow: hidden;
        height: 30rem;
        /* max-width: 50rem; */
        display: flex;
    align-items: center;
    /* opacity: 0.5; */
        }
        .profileIMG {
            position: relative;
        }
        .profileIMG img {
            position: absolute;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            top: -425px;
        }
        .space {
            height: fit-content;
            padding: 2rem;
            margin-top: -350px;
            padding-top: 7rem;
            width: 700px;
            box-shadow: 0 0 5px 0px #555;
            background-color: #f3f3f3c1;
            transition: 0.3s;
        }
        .space:hover , .space:focus {
            box-shadow: 0 0 15px -1px #aaa;

        }
        .spaceX {
            height: 25px;
            width: 500px;
        }
        .formRow {
            padding: 0 4rem;
            display: flex;
            justify-content: space-around;
        }
        .centerProflile {
           
            text-align: center;
        }
        .centerProflile h1 {
            font-size: 2.5rem;
        }
        .centerProflile h3 {
            font-size: 1rem;
        }
      
        .edit {
            margin: 0;
            margin-top: 15px;
            transition: 0.2s;
            width: fit-content;
        }
        .edit:hover {
           color: #0c2b4b;
           transform: scale(1.01);
        }    
        .bold {
            font-weight: bolder;
        }
        input::placeholder {
        color: #ccc !important;
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    input[type='number'] {
    -moz-appearance: textfield;
     }

     .file-Input {
        box-sizing: border-box;
        font: 1rem/1.5 "PT Sans", Arial, sans-serif;
        color: #5a5a5a;
     }
     .input {
         display: flex;
         flex-direction: column;
         align-items: flex-end;
     }
     .user_icon {
            margin: 0;
        }
        .edit {
            margin-top: 15px;
            transition: 0.2s;
            width: fit-content;
            color: #7fb82d;
        }
        .edit:hover {
           color: #0c2b4b;
           transform: scale(1.05);

        }
        .user_icon i {
            font-size: 2rem;
        }     
        .bold {
            font-weight: bolder;

        }
</style>
<div class="profile">

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                       <h3> {{ $user->user_name }} Profile </h3>
                        <ul>
                            <li><a href="/">home</a></li>
                            <li> profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->


















    <div class="container">

        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="profile_info" role="tabpanel" aria-labelledby="profile_tab">
            <div>
            <div class="container profContainer">
               
                <div class="spaceX"></div>
                <div class="backProfile">
                    <!-- <img src={{asset("public_assets/img/log-bg.jpg")}} height="450px" alt=""> -->
                    <!-- <img src="https://i.pinimg.com/originals/06/38/eb/0638eb576104ff3cb6a6ef1e2d576610.png" alt=""> -->
                </div>
                <div class="profileIMG center">
                    <div class="space">
                        <div class="centerProflile">
                            
                                <div class="center">
                                    <h1>  {{ $user->user_name }}</h1>
                                </div>
                                <hr>




                                
                                <div class="formRow">
                                    <label for="user_number" class="form-label">{{ __('Phone Number') }}</label>
                                        <h3>{{ $user->user_number }}</h3>
                                        
                                  
                                </div>
                                <hr>
                                <div class="formRow">
                                    <label for="email" class="form-label">{{ __('Email') }}</label>
                                        <h3>{{ $user->email }}</h3>
                                      
                             
                                </div>
                                <hr>            
                                <div class="formRow">
                                    <label for="user_age" class="form-label">{{ __(' Age') }}</label>
                                        <p>{{ $user->user_age }}</p>
                                 
                                </div>
                                <hr>
                                <div class="center">
                               
                                    </a>
                                </div>                
                            </form>
                            </div>
                            </div>
                            <div class="spaceX"></div>
                            @if (isset($user->user_image ))
                            <?php 
                            $image = $user->user_image;
                            ?>
                            <img src={{asset("images/$image")}} alt="">
                            @else
                            <img src={{asset("assets/img/profile.jpg")}} alt="">
                            @endif
                       
                        </div>
                    </div>
                </div>
            </div>

            
 
                 </div>

            </form> 
      

        </div>
    </div>
             

          
                    </div>
                </div>     
          

        </div>
        </div>
        @endsection