  @extends('layouts.app')
  @section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/house1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Get Your Property to the Buyers</h3>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/house2.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Check who liked your Property</h3>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/car1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>View what others have posted</h3>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h3 class="my-4">We Help Recommend Your Property to potential buyers</h3>

    <!-- Marketing Icons Section -->
    <div class="jumbotron bg-dark text-white">
  <h4 >Property Recommender</h4>
  <p class="lead">Just upload your property with few details and we will take care of the rest</p>
  <hr class="my-4" style="background:#fff;">
  <p>Potential buyers are waiting for your product</p>
  <a class="btn c-btn" href="#" role="button">Get Started</a>
</div>

    <!-- Features Section -->
    <div class="row features ">
      <div class="col-lg-12 justify-content-center">
        <h2>Who are we</h2>
        <p>We are commited to achieving the following:</p>
        <ul class="list-group">

          <li class="list-group-item">Getting your property to the hands of buyers</li>
          <li class="list-group-item">Getting quality services to you and notifying when a client has liked your property</li>
          <li class="list-group-item">Working closely with you in every step</li>
          <li class="list-group-item">Unstyled page elements for easy customization</li>
        </ul>
      </div>

    </div>
    <div class="row justify-content-center image-section">
        <div class="col-lg-12 ">
          <img class="img-fluid rounded" src="img/car2.jpg" alt="">
        </div>
      </div>
    <!-- /.row -->

    <hr>



  </div>
  <!-- /.container -->
@endsection
