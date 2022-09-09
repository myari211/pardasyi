<!DOCTYPE html>
<html lang="en">
<head>
    @include('master.css')

    <style type="text/css">
      .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        /* background-color: #99daec; */
      }
      .preloader .loading {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        font: 14px arial;
      }
      </style>
</head>
<body>
  <div class="preloader">
    <div class="loading">
      <div class="animated bounce infinite">
        <img src="{{ asset('image/pardasyi.png') }}" width="70">
      </div>
    </div>
  </div>

<!--Main Navigation-->
<div class="d-none d-lg-block">
  <div class="row">
    <div class="col-lg-12">
      <nav class="navbar navbar-expand-lg navbar-dark z-depth-0 fixed-top pt-4 pb-4" id="header_nav">
        <div class="collapse navbar-collapse d-flex justify-content-between" id="basicExampleNav">
          <div class="container">
            <img src="{{ asset('image/pardasyi.png') }}" style="width: 50px; height: 50px;">
            <ul class="navbar-nav">
              <li class="nav-item" id="home">
                <a class="nav-link" href="/">
                  Home
                </a>
              </li>
              <li class="nav-item ml-4" id="about">
                <a class="nav-link" href="{{ url('/') }}/about">
                  About
                </a>
              </li>
              <li class="nav-item ml-4" id="product">
                <a class="nav-link" href="{{ url('/') }}/product">
                  Product
                </a>
              </li>
              <li class="nav-item ml-4" id="director">
                <a class="nav-link" href="/director">
                  Directors
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
<div class="d-block d-lg-none">
  <nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">
      <img src="{{ asset('image/pardasyi.png') }}" style="width: 50px; height: 50px;">
    </a>
  
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}/about">
            About
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}/product">
            Product
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}/director">
            Directors
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<div class="row">
  <div class="col-lg-12">
    @yield('content')
  </div>
</div>
  {{-- <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('image/asyifa.png') }}" style="width:50px; margin-right:20px">
      <strong style="margin-right:50px">PT. ASSYIFA BERKAH ABADI</strong>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link d-inline-flex" href="/">
            <i class="material-icons">home</i>&nbsp;
            Home 
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-inline-flex" href="/about">
            <i class="material-icons">eco</i>&nbsp;
            About
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-inline-flex" href="/product">
          <i class="material-icons">shopping_bag</i>&nbsp;
            Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-inline-flex" href="/company">
            <i class="material-icons">business</i>&nbsp;
            Company
          </a>
        </li>
      </ul>
      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fab fa-twitter"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>
    </div>
  </nav> --}}
<footer class="page-footer font-small bg-primary pt-4">
  <div class="container">
    <div class="row pb-4 pt-2">
      <div class="col-lg-3">
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <img src="{{ asset('image/pardasyi.png') }}" style="width:70px;">
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-12 d-flex justify-content-center">
            <small class="weight">&copy; 2021 PT. PARDASYI CAHAYA ABADI</small>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <button type="button" class="btn btn-sm p-0 z-depth-0">
              <i class="fab fa-facebook" style="font-size:20px;"></i>
            </button>
            <button type="button" class="btn btn-sm p-0 z-depth-0">
              <i class="fab fa-instagram" style="font-size:20px;"></i>
            </button>
            <button type="button" class="btn btn-sm p-0 z-depth-0">
              <i class="fab fa-twitter" style="font-size:20px;"></i>
            </button>
            <button type="button" class="btn btn-sm p-0 z-depth-0">
              <i class="fab fa-whatsapp" style="font-size:20px;"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="row">
          <div class="col-lg-12">
            <small class="weight">Contact Informations</small>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <small>(021) 210 - 170 - 72</small>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <small class="weight">Contact Employee</small>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <small>+62 - 812 1000 1197</small>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-12">
            <small>+62 857 8033 9671</small>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <small class="weight">Email</small>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <small>pardasyi12@gmail.com</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="row">
          <div class="col-lg-12">
            <small class="weight">Address</small>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <small>Perum PFN, Jl. Otto Iskandardinata Raya Kav. 125-127 R-19, Bidara Cina - Jatinegara, Jakarta Timur 13330</small>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <small class="weight">Working Hours</small>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <small>08.00 AM - 17.00 PM (Monday - Friday)</small>
          </div>
        </div>
      </div>
      {{-- <div class="col-lg-3">
        <div class="row">
          <div class="col-lg-12">
            <small>Subscribe Now</small>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <textarea class="form-control" id="exampleFormControlTextarea3" rows="2" placeholder="Ask A Question"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email Address">
            </div>
          </div>
          <div class="col-lg-2">
            <button type="submit" class="btn btn-sm z-depth-0 p-0">
              <i class="fas fa-chevron-right"></i>
            </button>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</footer>

@include('master.js')
<script>
$(document).ready(function(){
  $(".preloader").fadeOut();

  var url = window.location;
  $('ul.nav.a[href="'+ url +'"]').parent().addClass('active');
  $('ul.nav a').filter(function() {
    return this.href == url;
  }).parent().addClass('active');
});


$(window).on('scroll', function() {
  if($(window).scrollTop() > 100) {
    $('#header_nav').addClass('bg-primary');
    $('#header_nav').animate({duration:500});
    $('#header_nav').addClass('pr-4 pl-4 pt-2 pb-2');
  }
  else
  {
    $('#header_nav').removeClass('bg-primary');
    $('#header_nav').removeClass('pr-4 pl-4 pt-2 pb-2');
  }
});

</script>



</body>
</html>
