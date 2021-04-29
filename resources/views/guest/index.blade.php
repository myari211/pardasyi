@extends('guest.layouts.app')
@section('content')
<div class="flex-center">
    <div class="container">
      <div class="row d-md-flex align-items-md-center justify-content-center">
        <div class="col-md-6 pl-md-0 mt-md-0 mt-4 animated zoomIn delay-1s">
          <div class="row d-flex justify-content-md-start justify-content-center mt-md-0 mt-4">
            <p class="h2 text-green">PT. Assyifa Berkah Abadi</p>
          </div>
          <div class="row d-flex justify-content-md-start justify-content-center text-white">
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
              <a href="about.html">
                <button type="button" class="btn aqua-gradient animated bounce infinite slower rounded">Get Started</button>
              </a>
              <a href="maps.html">
                <button type="button" class="btn purple-gradient animated bounce infinite slow rounded">Our Location</button>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
          <img src="{{ asset('image/harbour.svg') }}"  class="animated zoomIn delay-1s" width="700px">
        </div>
      </div>
    </div>
  </div>

@endsection