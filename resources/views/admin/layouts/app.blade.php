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
        background-color: #99daec;
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
<body class="sea">
  <div class="preloader">
    <div class="loading">
      <div class="animated bounce infinite">
        <img src="{{ asset('image/asyifa.png') }}" width="70">
      </div>
    </div>
  </div>


<div class="row">
    <div class="col-lg-3 p-0">
      <div class="card rounded-0 z-depth-0 position-fixed" style="height:100vh !important">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <img src="{{ asset('image/asyifa.png') }}" width="70">
              <span class="ml-2 weight">PT Assyifa Berkah Abadi</span>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <button type="button" class="btn btn-md btn-danger" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                Log Out
              </button>
              <form method="post" action="{{ route('logout') }}" id="logout" class="d-none">
                @csrf
              </form>
            </div>
          </div>
          <div class="row" style="margin-top:200px;">
            <div class="col-lg-12">
              <a href="product" class="weight d-flex justify-content-between" style="color:black !important;">
                Coffee
                <i class="fas fa-bookmark"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-7">
        @yield('content')   
    </div>
</div>
@include('master.js')
<script>
$(document).ready(function(){
  $(".preloader").fadeOut();
});
</script>



</body>
</html>
