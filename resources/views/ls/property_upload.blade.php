@extends('layouts.app')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <p class="description bg-nav text-white" >Thank you for opting to work with us <br> Kindly drop an email if you an encounter any challenges
    </p>
    <hr>
      @include('inc.messages')
    <p class="description">Give us a few details about your property</p>

    <div class="jumbotron text-white text-center bg-white  justify-content-center" style="margin-top:0px;">
      <h4 class="text-info">Upload Your Property</h4>
      <div class="row">


      {{-- <div class="col-md-6">
        <img class="img-fluid" src="img/car1.jpg"  style="height:100%;"alt="">
      </div> --}}
      <div class="col-md-12" style="margin-left:20%;">
          <form method="post" action="/post_property" enctype="multipart/form-data">
              @csrf
            <div class="form-group">
              <input type="text" class="form-control w-50" value="{{old('property_name')}}" name="property_name" required  placeholder="Propert Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control w-50" value="{{old('location')}}" name="location" placeholder="Property Location">
            </div>
            <div class="form-group">
              <input type="text" class="form-control w-50" value="{{old('price')}}" name="price"  required placeholder="Price">
            </div>
            <div class="form-group">
              <select name="property_type" value="{{old('property_type')}}" required class="form-control w-50">
                <option>Property Type</option>
                <option>House</option>
                <option>Car</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group">
              <textarea name="description" class="form-control w-50" value="{{old('description')}}"  placeholder="Give a brief description" required rows="3"></textarea>
            </div>
            <div class="form-group text-left">
              <label class="text-black ">Chose your Property</label>
              <input type="file" name="property_image" value="{{old('property_image')}}" required class="form-control-file text-black" >
            </div>
            <button type="submit" class="c-btn btn-block w-50" style="height:40px; padding:5px; margin-left:-50%;">Upload Now</button>
          </form>
        </div>
        </div>
    <!-- /.jumbotron -->
  </div>
  </div>
  <!-- /.container -->

@endsection
