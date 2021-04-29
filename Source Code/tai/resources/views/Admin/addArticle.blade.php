@extends('layouts.admin_layout')
@section('content')
    <div class="container-fluid">
        <div class="row" style="display: flex; justify-content: center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-title"  style="background: #000; color: white; margin: 0; padding: 1rem">
                        <h2 class="text-center title-2">Add Article</h2>
                    </div>
                    <div class="card-body" style="background: white; padding: 3rem">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <form action="/admin/manageArticle" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="article_title" class="control-label mb-1">Article Title</label>
                                <input  name="article_title" type="text" class="form-control" value="{{old('article_title')}}">
                                @if ($errors->has('article_title'))
                                    <div class="text-danger">{{ $errors->first('article_title') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="article_body" class="control-label mb-1">Article Body</label>
                                <textarea id='article-ckeditor' name ="article_body" class="form-control">{{old('article_body')}}</textarea>
                                @if ($errors->has('article_body'))
                                    <div class="text-danger">{{ $errors->first('article_body') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="article_image" class="control-label mb-1">Article Image</label>
                                <input  name="article_image" type="file" class="form-control">
                                @if ($errors->has('article_image'))
                                    <div class="text-danger">{{ $errors->first('article_image') }}</div>
                                @endif
                            </div>

                            <div style="display: flex; justify-content: center">
                                <button id="payment-button" type="submit" class="btn btn-lg" style="background:#7fb82d; color:white; width: 50%" name="submit">Add
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

