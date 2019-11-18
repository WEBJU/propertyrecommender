@extends('layouts.app')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h4 class="mt-4 mb-7 p-4 text-info">List of All properties Available
    </h4>
    @if (count($properties)>0)
    @foreach($properties as $property)
    <!-- Project Two -->
    <div class="row">
      <div class="col-md-6">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0"  src="/property/images/{{$property->property_image}}" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>{{$property->property_name}}</h3>
        <p>Located at:&nbsp;&nbsp;{{$property->location}}</p>
        <p>Price &nbsp;&nbsp;<span style="color:green;">Ksh:{{$property->price}}</span></p>
        @if (auth()->check())
        <p>Owner Contact &nbsp;&nbsp;{{$property->user->phone}}</p>
        <a class="btn btn-info" href="#" >Contact Owner
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      @else
        <p>Login to see owner contact</p>
          @endif
      </div>
    </div>
    <!-- /.row -->

    <hr>
  @endforeach
@else
    <div class="alert alert-info text-center" style="height:300px; padding-top:120px;" role="alert">
      There no properties yet..
    </div>
@endif
  </div>
  <!-- /.container -->

@endsection
