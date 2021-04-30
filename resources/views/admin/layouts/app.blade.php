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


<div class+="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-8">
        @yield('content')   
    </div>
</div>


<footer class="page-footer font-small green-bg pt-4 mt-5">
  <div class="container">
    <div class="row pb-4 pt-2">
      <div class="col-lg-3">
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <img src="{{ asset('image/asyifa.png') }}" style="width:50px;">
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-12 d-flex justify-content-center">
            <small class="weight">&copy; 2021 PT. Assyifa Berkah Abadi</small>
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
            <small>+62 - 812 9292 4142 (WA)</small>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <small class="weight">Email</small>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <small>assyifaberkahabadi@gmail.com</small>
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
      <div class="col-lg-3">
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
      </div>
    </div>
  </div>
</footer>

@include('master.js')
<script>
$(document).ready(function(){
  $(".preloader").fadeOut();
});
</script>



</body>
</html>
