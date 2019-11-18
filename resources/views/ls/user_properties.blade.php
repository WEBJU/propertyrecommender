@extends('layouts.app')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h4 class="mt-4 mb-7 p-4" style="color:#FF5722">My Properties.
    </h4>
    @if (count($property)>0)
    @foreach($property as $myproperty)
    <!-- Project Two -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0"  src="/property/images/{{$myproperty->property_image}}" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>{{$myproperty->property_name}}</h3>
        <p>Property Location : {{$myproperty->location}}</p>
        <p>Price <span style="color:green;">Ksh:{{$myproperty->price}}</span></p>
        <p>Edit or Delete your property</p>
        <a class="btn btn-info" href="#">Edit
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <a class="btn btn-danger" href="#">Delete
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
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
