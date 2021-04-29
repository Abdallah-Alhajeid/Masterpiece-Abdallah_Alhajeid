@extends('layouts.admin_layout')
@section('content')

        <div class="container-fluid">
            <div class="row" style="display: flex; justify-content: center">
                <div class="col-lg-8">
                    <div class="card">
                            <div class="card-title"  style="background: #0000; color: white; margin: 0; padding: 1rem">
                                <h2 class="text-center title-2">Edit Admin</h2>
                            </div>
                        <div class="card-body"  style="background: white; padding: 3rem">
                            <hr>
                            <form action="{{ route('admin.manageAdmin.update', $admin->admin_id)}}" method="post" enctype="multipart/form-data">
                                @method('PATCH')
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="admin_name" class="control-label mb-1">Admin Name</label>
                                    <input  name="admin_name" type="text" class="form-control" value="{{ $admin-> admin_name }}">
                                    @if ($errors->has('admin_name'))
                                        <div class="alert alert-danger">{{ $errors->first('admin_name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label mb-1">Admin Email</label>
                                    <input  name="email" type="email" class="form-control" value="{{ $admin->email }}">
                                    @if ($errors->has('email'))
                                        <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label mb-1">Admin Password</label>
                                    <input  name="password" type="password" class="form-control">
                                    @if ($errors->has('password'))
                                        <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="admin_image" class="control-label mb-1">Admin Image</label>
                                    <input  name="admin_image" type="file" class="form-control">
                                </div>
                                <div style="display: flex; justify-content: center">
                                    <button id="payment-button" type="submit" class="btn btn-lg" style="background: #7fb82d; color:white; width: 50%" name="submit">Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('footer')

    <!--copy rights start here-->
    <div class="copyrights">
        <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
    <!--COPY rights end here-->

@endsection
