@extends('layouts.app')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <p class="description bg-nav text-white">Thank you for opting to work with us <br> Kindly drop an email if you an encounter any challenge
    </p>
    <hr style="background:#AD1457;">
    @include('inc.messages')
    <div class="jumbotron text-white text-center bg-white  justify-content-center" style="margin-top:30px;">
      <p class="description text-info" style="margin-bottom:5px; margin-top:0;">Complete the form below</p>
      <h4 class="text-info">Create a new Account</h4>
      <div class="row">


      {{-- <div class="col-md-6">
        <img class="img-fluid" src="img/car1.jpg"  style="height:100%;"alt="">
      </div> --}}
      <div class="col-md-12" style="margin-left:20%;">

          <form method="post" action="/account_creation">
              @csrf
            <div class="form-group">
              <input type="text" class="form-control w-50" value="{{old('name')}}" name="name" required  placeholder="Full Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control w-50" value="{{old('email')}}" name="email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control w-50" value="{{old('phone')}}" name="phone"  required placeholder="Your Contact number">
            </div>
            <div class="form-group">
              <input type="text" class="form-control w-50" value="{{old('location')}}" name="location" required  placeholder="Location">
            </div>
            <div class="form-group">
              <input type="password" class="form-control w-50" value="{{old('password')}}" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control w-50" value="{{old('confirm')}}" name="confirm" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="c-btn btn-block w-50" style="height:40px; padding:5px; margin-left:-50%;">Register</button>
          </form>
        </div>
        </div>
    <!-- /.jumbotron -->
  </div>
  </div>
  <!-- /.container -->

@endsection
