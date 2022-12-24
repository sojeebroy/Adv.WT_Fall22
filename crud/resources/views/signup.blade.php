@extends('layouts.app')
@section('header')
signup
@endsection
@section('content')

<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="profile" method="POST">
                @csrf

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" name="name" class="form-control form-control-lg" placeholder="Enter your name" value="{{old('name')}}" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                <span class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </span>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg" placeholder="Enter your email" value="{{old('email')}}" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                  <span class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example4cg" name="phone" class="form-control form-control-lg" placeholder="Enter your phone" value="{{old('phone')}}" />
                  <label class="form-label" for="form3Example4cg">Phone</label>
                  <span class="text-danger">
                    @error('phone')
                        {{$message}}
                    @enderror
                </span>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" name="password" class="form-control form-control-lg" placeholder="***********" value="{{old('password')}}" />
                  <label class="form-label" for="form3Example4cdg">Password</label>
                  <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
                </div>


                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
@endsection
