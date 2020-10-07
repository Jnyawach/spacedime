<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel = "icon" href =
    "{{asset('images/icon-01.png')}}"
          type = "image/x-icon">
    @yield(' styles')
  </head>
  <body>
    <main>
	  <nav class="navbar navbar-expand-lg  fixed-top bg-light shadow-sm" >
	    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="{{asset('images/logo-01.png')}}" class="img-fluid" style="height: 60px"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#space" aria-controls="space" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> <i class="fa fa-bars" aria-hidden="true" style="color: #96bb7c; font-size:22px;"></i>
	      </button>

	      <div class="collapse navbar-collapse " id="space">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}"><a href="{{route('about')}}" class="nav-link">About</a></li>
            <li class="nav-item {{ (request()->is('services')) ? 'active' : '' }}"><a href="{{route('services')}}" class="nav-link">Services</a></li>
            <li class="nav-item {{ (request()->is('portfolio')) ? 'active' : '' }}"><a href="{{route('portfolio')}}" class="nav-link">Portfolio</a></li>
	          <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->


    @yield('content')





  <footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
          <img src="{{asset('images/logo-01.png')}}" class="img-fluid bg-light rounded p-2">
          <h2 class="mt-3">Mission</h2>
          <p>To deliver high quality services at revolutionary price</p>
          <h2 class="mt-3">Vision</h2>
          <p>To visualize the change you want to see</p>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Community</h2>
            <ul class="list-unstyled">
              <li><a href="{{route('portfolio')}}"><span class="fa fa-chevron-right mr-2"></span>Projects</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Reviews</a></li>
              <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>FAQs</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">About Us</h2>
            <ul class="list-unstyled">
              <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Our Story</a></li>
              <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Meet the team</a></li>
              <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Company</h2>
            <ul class="list-unstyled">
            <li><a href="{{route('about')}}"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
              <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>News</a></li>
              <li><a href="{{route('contact')}}"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
              <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon fa fa-map"></span><span class="text">Castella Building Meru</span></li>
                  <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+254 707 992 865 | +254 101 357 951</span></a></li>
                  <li><a href="#"><span class="icon fa fa-envelope pr-4"></span><span class="text">info@spacedime.com</span></a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e8efbdff2cc3431"></script>


</main>

<!-- loader -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
 <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('js/google-map.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

 @yield(' scripts')
  </body>
</html>
