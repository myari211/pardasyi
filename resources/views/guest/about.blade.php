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
                  <div class="row d-flex justify-content-end mt-4">
                    <div class="col-lg-12">
                      <span>
                        is a Company engaged in the wholesale trade and transportation of goods of various types, to various destinations both local and international.
                        we are engaged in Export, Import and Trading. Established since September 26, 2019, we serve major international trade, either by land, sea or air.
                      </span>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-lg-12">
                      <span>
                        The establishment of PT Assyifa with eternal blessings was carried out with full dedication, a strong desire to move forward, and a high spirit to become a company that can meet customer needs and satisfaction.
                      </span>
                    </div>
                  </div>
                  <div class="row d-flex justify-content-end mt-4">
                    <div class="col-lg-12">
                      <span>
                        the Procession of the establishment of PT assyifa eternal blessings begins with the times and Renewal. PT Assyifa blessing eternal is a company that specializes in the wholesale trade of agricultural and animal products, fruits, forestry products, sports equipment, office stationery, steel, machinery, heavy equipment, and others with a custom clearance system.
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