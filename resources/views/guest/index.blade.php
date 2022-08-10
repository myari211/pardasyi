@extends('guest.layouts.app')
@section('content')

<style type="text/css">
  #header_banner {
    width: 100%;
        /* min-height: 800px; */
        height: 100vh;
        background-size:cover;
        background-attachment: fixed;
        color:white;
        background-image:
        linear-gradient(55.8deg, rgba(0,0,0, 0.75) 99.53%, rgba(0,0,0, 1) 100%),
        url({{ asset('asset/1.png') }});
  }

  #header_mobile {
    width: 100%;
    height: 100vh;
    background-size:cover;
    background-attachment: fixed;
    color: white;
    background-image:
    linear-gradient(55.8deg, rgba(0, 0, 0, 0.75) 99.53%, rgba(0, 0, 0, 1) 100%),
    url({{ asset('asset/1.png') }});
  }

</style>
<div class="d-none d-lg-block">
  <div id="header_banner" class='d-flex align-items-center justify-content-center'>
    <div>
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <span style="font-weight: 500; font-size: 40px;">PT Pardasyi Cahaya Abadi</span>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12 d-flex justify-content-center">
          <span style='font-size: 20px; font-weight: 500'>Export, Import, and Trading</span>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-12 d-flex justify-content-center">
          <button type="button" class="btn btn-md rounded btn-primary text-capitalize z-depth-0" style="font-weight: 500; font-size: 14px;" onclick="location.href='/about';">
            Look Around
            <i class="fas fa-arrow-right animated fadeInLeft infinite slow ml-3"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="d-block d-lg-none">
  <div id="header_mobile" class="d-flex align-items-center justify-content-center">
    <div>
      <div class="row">
        <div class="col-12 d-flex justify-content-center justify-content-center">
          <span style="font-weight: 500; font-size: 40px;" class="text-center">PT Pardasyi Cahaya Abadi</span>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12 d-flex justify-content-center">
          <span style="font-size: 20px; font-weight: 500">Export, Import, and Trading</span>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-12 d-flex justify-content-center">
          <button type="button" class="btn btn-md rounded btn-primary text-capitalize z-depth-0" style="font-weight: 500; font-size: 14px;">
            Look Around
            <i class="fas fa-arrow-right animated fadeInLeft infinite slow ml-3"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- <div class="flex-center"> --}}
    {{-- <div class="container">
      <div class="row d-md-flex align-items-md-center justify-content-center">
        <div class="col-md-6 pl-md-0 mt-md-0 mt-4 animated zoomIn delay-1s">
          <div class="row d-flex justify-content-md-start justify-content-center mt-md-0 mt-4">
            <p class="h2 text-green">PT. Assyifa Berkah Abadi</p>
          </div>
          <div class="row d-flex justify-content-md-start justify-content-center text-danger">
            <h4>Export,Import, And Trading</h4>
          </div>
          <div class="row">
            <p class="text-md-left text-center" style="font-weight:1000">Perum PFN, Jl. Otto Iskandardinata Raya Kav. 125-127 R-19, Bidara Cina - Jatinegara, Jakarta Timur 13330</p>
          </div>
          <div class="row mt-4 d-flex justify-content-md-start justify-content-center">
            <i class="material-icons text-primary">phone</i>&nbsp;
            <p style="font-weight:1000">(021)210-170-72</p>
            <i class="material-icons ml-4 text-danger">email</i>&nbsp;
            <p style="font-weight:1000">assyifaberkahabadi@gmail.com</p>
          </div>
          <div class="row mt-4">
            <div class="col-md-8 d-flex justify-content-center pl-md-0">
              <a href="/about">
                <button type="button" class="btn aqua-gradient animated bounce infinite slower rounded">Get Started</button>
              </a>
              <a href="/maps">
                <button type="button" class="btn purple-gradient animated bounce infinite slow rounded">Our Location</button>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
          <img src="{{ asset('image/harbour.svg') }}"  class="animated zoomIn delay-1s" width="700px">
        </div>
      </div>
    </div> --}}
  {{-- </div> --}}

@endsection