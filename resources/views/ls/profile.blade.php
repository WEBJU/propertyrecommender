@extends('layouts.app')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h3 class="mt-4 mb-3 p-3">My Account Details
    </h3>
      <!-- Content Column -->
      <div class="col-lg-9 mb-4">
        @include('inc.messages')
        <div class="card bg-info">
          <ul class="list-group">
            <li class="list-group-item"><p><span class="text-info">Full Name:</span> {{auth()->user()->name}}</p></li>
            <li class="list-group-item"><p><span class="text-info">Email: </span> {{auth()->user()->email}}</p></li>
            <li class="list-group-item"><p><span class="text-info">Location:</span>  {{auth()->user()->location}}</p></li>
            <li class="list-group-item"><p><span class="text-info">Contact:</span>  {{auth()->user()->phone}}</p></li>
          </ul>

        </div>
    </div>
    <div>
      <a type="button" href="/update_profile" class="btn btn-info btn-small" style="margin-top:5px; margin-bottom:15px; margin-left:12px;" name="button">Edit Details</a>
    </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection
