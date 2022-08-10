@extends('guest.layouts.app')
@section('content')
<style type="text/css">
  #header_banner {
    width: 100%;
        /* min-height: 800px; */
        height: 30vh;
        background-size:cover;
        background-attachment: fixed;
        color:white;
        background-image:
        linear-gradient(55.8deg, rgba(0,0,0, 0.75) 99.53%, rgba(0,0,0, 1) 100%),
        url({{ asset('asset/about.jfif') }});
  }
</style>
<div id="header_banner">
</div>
<div class="container">
  <div class="row" style="margin-top: -100px;">
    <div class="col-lg-12">
      <div class="card z-depth-0" style="background-color: #F5F6FF">
        <div class="card-body">
          <div class="row d-flex justify-content-center mt-5">
            <div class="col-lg-11">
              <div class='card z-depth-0'>
                <div class='card-body'>
                  <div class="row">
                    <div class='col-lg-12 d-flex justify-content-center'>
                      <span style="font-size: 40px; font-weight: 600">About Pardasyi</span>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-lg-12">
                      <span>
                        Our company is ready to serve wholesale and retail trade both domestically and internationally (exports and imports).
                      </span>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-lg-12">
                      <span>
                        In addition to serving wholesale and retail trade, our company also provides goods transportation services both domestically and internationally.
                      </span>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-lg-12">
                      <span>
                        Although the age of our company is relatively young compared to other similar companies. But we have the principle of serving professionally and quickly.
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4 d-flex justify-content-center">
            <div class="col-lg-11">
              <div class='row'>
                <div class="col-lg-6">
                  <div class='card z-depth-0 h-100'>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-12">
                          <span style="font-size: 40px; font-weight: 500">Vission</span>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col-lg-12">
                          <span>Making PT. Assyifa Berkah Abadi is a company that focuses on the field of Export - Import which is trusted, most advanced, productive, competitive, and ready to compete in the international arena</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card z-depth-0">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-12">
                          <span style="font-size: 40px; font-weight: 500">Mission</span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <span>1. Continue to provide the best and quality service to all customers and business partners</span>
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-lg-12">
                          <span>2. Improve service quality with acompetent team</span>
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-lg-12">
                          <span>3. Prioritizing speed and accuracy of handling</span>
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-lg-12">
                          <span>4. Prioritizing Time in accordance with customer expectations</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection