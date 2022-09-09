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
                        <div class="d-none d-lg-block">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card z-depth-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('image/gierza.jpeg') }}" style="width: 250px; height: 250px;" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size: 24px; font-weight: 600">Gierza Januar Parda S</span>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span class="badge badge-primary rounded-pill pt-2 pb-2 pr-3 pl-3 z-depth-0" style="font-size: 18px; font-weight: 500">Director</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-12">
                                    <div class="card z-depth-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('image/musya.jpeg') }}" style="width: 250px; height: 250px;" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size: 24px; font-weight: 600">Musyarofah</span>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span class="badge badge-primary rounded-pill pt-2 pb-2 pr-3 pl-3 z-depth-0" style="font-size: 18px; font-weight: 500">Admin</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-12">
                                    <div class="card z-depth-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('image/arief.jpeg') }}" style="width: 250px; height: 250px;" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size: 24px; font-weight: 600">Arief Sugiyanto</span>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span class="badge badge-primary rounded-pill pt-2 pb-2 pr-3 pl-3 z-depth-0" style="font-size: 18px; font-weight: 500">General Affair</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-12">
                                    <div class="card z-depth-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('image/nur.jpeg') }}" style="width: 250px; height: 250px;" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size: 24px; font-weight: 600">Nur Hasanah</span>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span class="badge badge-primary rounded-pill pt-2 pb-2 pr-3 pl-3 z-depth-0" style="font-size: 18px; font-weight: 500">Marketing</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-lg-none">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card z-depth-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('image/gierza.jpeg') }}" style="width: 150px; height: 150px" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <span style="font-size: 18px; font-weight: 600">Gierza Januar Parda S</span>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span class="badge badge-primary pt-1 pb-1 pr-2 pl-2 z-depth-0 rounded-pill" style="font-weight: 500; font-size: 16px;">Director</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <div class="card z-depth-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('image/musya.jpeg') }}" style="width: 150px; height: 150px" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <span style="font-size: 18px; font-weight: 600">Musyarofah</span>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span class="badge badge-primary pt-1 pb-1 pr-2 pl-2 z-depth-0 rounded-pill" style="font-weight: 500; font-size: 16px;">Admin</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <div class="card z-depth-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('image/arief.jpeg') }}" style="width: 150px; height: 150px" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <span style="font-size: 18px; font-weight: 600">Arief Sugiyanto</span>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span class="badge badge-primary pt-1 pb-1 pr-2 pl-2 z-depth-0 rounded-pill" style="font-weight: 500; font-size: 16px;">General Affair</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <div class="card z-depth-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('image/nur.jpeg') }}" style="width: 150px; height: 150px" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <span style="font-size: 18px; font-weight: 600">Nur Hasanah</span>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span class="badge badge-primary pt-1 pb-1 pr-2 pl-2 z-depth-0 rounded-pill" style="font-weight: 500; font-size: 16px;">Marketing</span>
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