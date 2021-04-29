@extends('layouts.client_layout')

        @section("title")
        <title>Tai | Article {{$article->article_title}} </title>
        <meta name="description" content="All services nearby">
    @endsection




    @section('content')


    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                       <h3> {{$article->article_title}}</h3>
                       <ul>
                        <li>{{$article->created_at}}</li>
                    </ul>
                       <ul>
                            <li><a href="/">home</a></li>
                            <li><a href="/articles">articles</a></li>
                            <li>{{$article->article_title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->

                    <!-- Comments Section -->
            
    <!--blog body area start-->
    <div class="blog_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_wrapper blog_wrapper_details">
                        <article class="single_blog">
                            <figure>
                               <div class="post_header">
                                   <h3 class="post_title"><b>{{$article->article_title}}</b></h3>
                                    <div class="blog_meta">   
                                       <p>Posted On : <a href="#">{{$article->created_at->format('d.M.y | h:i a')}}</a>  </p>                                     
                                    </div>
                                </div>
                                <div class="blog_thumb">
                                   <a href="#"><img src="{{asset("images/$article->article_image")}}" alt=""></a>
                               </div>
                               <figcaption class="blog_content">
                                    <div class="post_content">
                                        <p>{!! $article->article_body !!}</p>
                                       
                                    </div>
                                    <div class="entry_content">
                                        {{-- <div class="post_meta">
                                            <span>Tags: </span>
                                            <span><a href="#">, fashion</a></span>
                                            <span><a href="#">, t-shirt</a></span>
                                            <span><a href="#">, white</a></span>
                                        </div> --}}

                                        <div class="social_sharing">
                                            <p>share this article:</p>
                                            <ul>
                                                <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#" title="google+"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                               </figcaption>
                            </figure>
                        </article>
                      

            <div id="comments_section"  class="comments_box">
                <h3>Comments	</h3>
                @if(count($comments))
                <div class="comment_list">
                    @foreach($comments as $comment)
                    <div class="comment_thumb">
                        @php $image=$comment->users->user_image; @endphp

                        @if (isset($user->user_image ))
                        <?php 
                        $image = $user->user_image;
                        ?>
                        <img src={{asset("images/$image")}} alt="" class="rounded-circle" width="40" height="40">
                        @else
                        <img src={{asset("assets/img/profile.jpg")}} alt="" class="rounded-circle" width="40" height="40">
                        @endif


                    
                   
                    </div>
                            <span style="font-weight:bold"><a href="{{ url('user/profile/' . $comment->users->user_id) }}">
                                {{$comment->users->user_name}}</span><br>
                            </a>
                            <p >{{$comment->comment_body}}</p> 
                            <span>{{$comment->updated_at->format('d.M.y | h:i a')}}</span> <br>

                        @endforeach
                    </div>




                    @else
                    <div class="alert alert-info d-flex align-items-center align-self-center" style="height:100px"> No Comments on this article!</div>

                    @endif



                        
                    </div>

                    @if(Auth::id() != null)
                
                    <div class="comments_form">
                        <h3>Leave a comment </h3>
                        <form action="/articles/{{$article->article_id}}#comments_section" method="POST" id="algin-form">
                            @method('POST')
                            {{csrf_field()}}
                            <div class="form-group">
                                <h4>Leave a comment</h4> 
                                <textarea name="comment_body" placeholder="add your comment.." msg cols="30" rows="5" class="form-control" required></textarea>
                            </div>                   
                            <div class="form-group"> 
                            <button type="submit" name="comment" class="button">Post Comment</button>
                            </div>
                        </form>
                    </div>
                    @else


                    <p>You must be logged in to post a comment.</p>
                    <a href="{{ route('login') }}" class="btn Admin">Login now</a>

                


                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
    

@endsection