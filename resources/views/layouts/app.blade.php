<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Property Recommender</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top bg-nav">
    <div class="container">
      <a class="navbar-brand" href="/">Property Recommender</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="/properties">View Properties</a>
          </li>
          @if (auth()->check())
            <li class="nav-item">
              <a class="nav-link" href="/upload_property">Upload Property</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/my_properties">My Properties</a>
            </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{auth()->user()->name}}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="/user-profile">profile</a>
              <a class="dropdown-item" href="/logout">logout</a>
            </div>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
       @endif
        </ul>
      </div>
    </div>
  </nav>

  <header>
    @yield('content')

    <!-- Footer -->
    <footer class="py-5 bg-nav footer">
      <div class="container">
        <div class="row justify-content-center text-white">
            <div class="col-md-4">
              <p>Contacts</p>
              <li>071674579</li>
              <li>071674579</li>
              <li>071674579</li>
            </div>
            <div class="col-md-4">
              <p>Services</p>
              <li>Marketing</li>
              <li>Advertising</li>
              <li>Sales</li>
            </div>
            <div class="col-md-4">
              <p>Location</p>
              <li>Madaraka</li>
              <li>Ole Sangale Rd</li>
              <li>071674579</li>
            </div>
        </div>
        <p class="m-0 text-center text-white p-4">Copyright &copy; Property Recommender</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  </body>

  </html>
