@extends('layouts.app')
@section('content')
  <!-- Page Content -->
  <div class="container">





    <!-- Portfolio Item Row -->
    <div class="row justify-content-center">
      <div class="col-md-7 text-center">
        <img class="img-fluid rounded-circle" style="height:200px; width:200px; margin-top:20px;" src="img/car1.jpg"  style="heigh:100%;"alt="">
        <!-- Page Heading/Breadcrumbs -->
        <hr>
        <h4 class="mt-4 mb-3 text-center">Welcome back again!!</h4>
        <p>Use your credentials to login</p>
      </div>
      <div class="col-md-7">
        <h3></h3>
        <div class="card">
          <div class="card-header bg-nav text-white text-center">
            User Login
          </div>
          <div class="card-body">
            @include('inc.messages')
            <form method="post" action="/login_access">
              @csrf
              <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email"  placeholder="Enter email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" name="remember">Remember me</label>
              </div>
              <button type="submit" style="height:40px; padding:5px;" class="c-btn btn-block">LOGIN</button>
            </form>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <h3 class="my-4">Featured Properties</h3>

    <div class="row">

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="img/car1.jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="img/car1.jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="img/car1.jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="img/car1.jpg" alt="">
        </a>
      </div>

    </div>
    <div class="row">

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="img/car1.jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="img/car1.jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="img/car1.jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="img/car1.jpg" alt="">
        </a>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection
