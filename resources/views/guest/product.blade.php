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
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span style="font-size: 40px; font-weight: 500">Product</span>
                        </div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-lg-11">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card z-depth-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img src="{{ asset('image/coffe/1.JPG') }}" style="width:100px; height:100px;" class="border rounded-circle">
                                                </div>
                                                <div class="col-lg-8 d-flex justify-content-between align-items-center">
                                                    <span style="font-size: 30px;">Coffee</span>
                                                    <button type="button" class='btn btn-md btn-primary p-3'>
                                                        <i class="fas fa-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card z-depth-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img src="{{ asset('image/rice/1.JPG') }}" style="width:100px; height:100px;" class="rounded-circle">
                                                </div>
                                                <div class="col-lg-8 d-flex justify-content-between align-items-center">
                                                    <span style="font-size: 30px;">Rice</span>
                                                    <button type="button" class="btn btn-md btn-primary p-3">
                                                        <i class='fas fa-arrow-right'></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="card z-depth-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img src="{{ asset('image/herbs/1.JPG') }}" style="width:100px; height:100px;" class="rounded-circle">
                                                </div>
                                                <div class="col-lg-8 d-flex justify-content-between align-items-center">
                                                    <span style="font-size: 30px;">Herbs</span>
                                                    <button type="button" class="btn btn-md btn-primary p-3">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card z-depth-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img src="{{ asset('image/Fruit/MANGGA.jpg') }}" style="width:100px; height:100px;" class="rounded-circle">
                                                </div>
                                                <div class="col-lg-8 d-flex justify-content-between align-items-center">
                                                    <span style="font-size: 30px;">Fruits</span>
                                                    <button type="button" class="btn btn-md btn-primary p-3">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="card z-depth-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img src="{{ asset('image/Meats/3.jpg') }}" style="width:100px; height:100px;" class="rounded-circle">
                                                </div>
                                                <div class="col-lg-8 d-flex justify-content-between align-items-center">
                                                    <span style="font-size: 30px;">Meats</span>
                                                    <button type="button" class="btn btn-md btn-primary p-3">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card z-depth-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img src="{{ asset('image/fish/1.jpg') }}" style="width:100px; height:100px;" class="rounded-circle">
                                                </div>
                                                <div class="col-lg-8 d-flex justify-content-between align-items-center">
                                                    <span style="font-size: 30px;">Fish</span>
                                                    <button type="button" class="btn btn-md btn-primary p-3">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="card z-depth-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img src="{{ asset('image/Others/1.jpg') }}" style="width:100px; height:100px;" class="rounded-circle">
                                                </div>
                                                <div class="col-lg-8 d-flex justify-content-between align-items-center">
                                                    <span style="font-size: 30px;">Others</span>
                                                    <button type="button" class="btn btn-md btn-primary p-3">
                                                        <i class='fas fa-arrow-right'></i>
                                                    </button>
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