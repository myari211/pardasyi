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
<div id="header_banner"></div>
<div class="container">
    <div class="row d-flex justify-content-center" style="margin-top: -100px;">
        <div class="col-lg-11">
            <div class="card z-depth-0" style="background-color: #F5F6FF">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mb-2">
                            <div class="card rounded-0 h-100">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex justify-content-center">
                                            <img src="{{ asset('image/coconut/coconut2.png') }}" style="width:100%; height:200px;" class="d-none d-lg-block">
                                            <img src="{{ asset('image/coconut/coconut2.png') }}" style="width:150px;height:150px;" class="rounded-circle d-block d-lg-none">
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <h4 class="text-center weight text-primary">Coconut Fiber</h4>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12 d-flex justify-content-center">
                                            <small class="text-muted text-center">
                                                {{ Str::limit("With wide coconut’s plantation surround factory and big human resource we produce in stable amount of quantity and always keep in export quality standard.", 150) }}
                                            </small>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-12 d-flex justify-content-center">
                                            <a data-toggle="modal" data-target="#coconut">
                                                <small class="text-muted">More ...</small>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div>
                                                <button type="button" class="btn btn-md btn-primary z-depth-0 text-white rounded btn-block" data-toggle="modal" data-target="#coconut">Buy</button>
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

{{-- modal --}}

<div class="modal fade" id="coconut" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12 h-100 d-flex justify-content-center">
                                <img src="{{ asset('image/coconut/coconut1.png') }}" style="width: 400px; height: 400px;" class="position-fixed d-none d-lg-block mt-4">
                                <img src="{{ asset('image/coconut/coconut1.png') }}" style="width: 200px; height: 200px;" class="d-block d-lg-none rounded-circle">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <h4>Coconut Fiber</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <small>
                                    With wide coconut’s plantation surround factory and big human resource we produce in stable amount of quantity and always keep in export quality standard.
                                    Recently we expand with bigger production capacity, wider drying floor, and warehouse. Total width of the factory is 1.9 hectare. We deliver coconut fiber about 2-3 container 40HC per month. 
                                    We produce export quality of coconut fiber which is golden brown color, and high quality specification as you can see on our product specifications.
                                    Our brand is sold to domestic and international markets.
                                </small>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <small>
                                    Coconut fiber has a high lignin content and thus a low cellulose content, as a result of which it is resilient, strong and highly durable. The remarkable lightness of the fibers is due to the cavities arising from the dried out sieve cells.
                                    The best grade fibers are light in color, gold-yellow (fiber from unripe coconuts) or brown (fiber from ripe coconuts).
                                    Application : 
                                </small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul>
                                    <li>
                                        <small>
                                            Other uses of brown coir
                                            (made from ripe coconut) are in upholstery padding,
                                        </small>
                                    </li>
                                    <li>
                                        <small>Sacking and horticulture. </small>
                                    </li>
                                    <li>
                                        <small>White coir, harvested from unripe coconuts, </small>
                                    </li>
                                    <small>Is used for making :</small>
                                    <ul>
                                            <li>
                                                <small>Finer brushes,</small>
                                            </li>
                                            <li>
                                                <small>String, rope and</small>
                                            </li>
                                            <li>
                                                <small>Fishing nets.</small>
                                            </li>
                                    </ul>
                                </ul>
                            </div>    
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <ul>
                                    <small>SPECIFICATION & LOADABILITY</small>
                                    <li>
                                        <small>Colour			: Golden Brown</small>
                                    </li>
                                    <li>
                                        <small>Maturity		: Matured</small>
                                    </li>
                                    <li>
                                        <small>Moisture		: 15 - 20%</small>
                                    </li>
                                    <li>
                                        <small>Length		: 5 - 20cm</small>
                                    </li>
                                    <li>
                                        <small>Impurity		: 5%</small>
                                    </li>
                                    <li>
                                        <small>Short choir		: 20%</small>
                                    </li>
                                    <li>
                                        <small>Package		: 100 - 110 kg/bale</small>
                                    </li>
                                    <li>
                                        <small>Supply ability		: 90 tons/month</small>
                                    </li>
                                    <li>
                                        <small>Payment Terms	: Irrevocable LC at Sight</small>
                                    </li>
                                    <li>
                                        <small>Incoterms		: FOB, Tanjung Priok</small>
                                    </li>
                                    <li>
                                        <small>40' HC Container	: ± 180 bale/40' HC</small>
                                    </li>
                                    <li>
                                        <small>Unit Price		: per MT</small>
                                    </li>
                                    <li>
                                        <small>Price			: $0.38 - $0.45 (Negotiable)</small>
                                    </li>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-danger btn-sm rounded" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary text-white btn-sm rounded">Contact Sales</button>
            </div>
        </div>
    </div>
</div>
@endsection