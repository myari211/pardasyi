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
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                                                    <i class="fas fa-user" style="font-size: 70px;"></i>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <span style="font-size: 18px; font-weight: 600">Gierza Januar Parda S</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <span>Director</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4 d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 d-flex justify-content-center">
                                                    <i class="fas fa-user" style="font-size: 70px;"></i>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <span style="font-size: 18px; font-weight: 600">Arief Soegiyanto</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <span>General Affair</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4 d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 d-flex justify-content-center">
                                                    <i class="fas fa-user" style="font-size: 70px;"></i>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <span style="font-size: 18px; font-weight: 600">Musyarofah</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <span>Admin</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4 d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 d-flex justify-content-center">
                                                    <i class="fas fa-user" style="font-size: 70px;"></i>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <span style="font-size: 18px; font-weight: 600">Agus Eko</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <span>Staff Operasional</span>
                                                        </div>
                                                    </div>
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
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                                                    <i class="fas fa-user" style="font-size: 70px;"></i>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <span style="font-size: 18px; font-weight: 600">Gierza Januar Parda S</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span>Director</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 d-flex justify-content-center">
                                                    <i class="fas fa-user" style="font-size: 70px;"></i>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size: 18px; font-weight: 600">Arief Soegiyanto</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span>General Affair</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <i class="fas fa-user" style="font-size: 70px;"></i>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span style="font-size: 18px; font-weight: 600">Musyarofah</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-center">
                                                    <span>Admin</span>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <i class="fas fa-user" style="font-size: 70px;"></i>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <span style="font-size: 18px; font-weight: 600">Agus Eko</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <span>Staff Operasional</span>
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