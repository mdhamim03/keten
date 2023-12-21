@extends('layouts.backendLayout')
@section('backendContent')
    <div class="card">
        <div class="card-header">
            <h2>Profile</h2>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4>User Informaion</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <input name="name" value="{{auth()->user()->name}}" type="text" class="form-control mt-4 bg-gray-100" placeholder="Your name">
                            @error('name')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                            <input name="email" value="{{auth()->user()->email}}" type="text" class="form-control mt-4 mb-4 bg-gray-100" placeholder="Your email">
                            @error('email')
                                <span style="color:red">{{ $message }}</span>
                            @enderror<br>
                            <label for="img">
                            <h6>Uplode Image</h6>
                            </label>
                            <input name="profile_img" type="file" class="form-control mt-4 bg-gray-100" id="img">
                            @error('profile_img')
                                <span style="color:red">{{ $message }}</span>
                            @enderror<br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Password</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('profile.password.update')}}" method="POST">
                            @csrf
                            @method('put')
                            <input name="oldPassword" type="text" placeholder="Old Password" class="form-control mt-4">
                            @error('oldPassword')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                            <input name="password" type="text" placeholder="New Password" class="form-control mt-4">
                            @error('password')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                            <input name="password_confirmation" type="text" placeholder="Confirm Password" class="form-control mt-4">
                            <button class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection