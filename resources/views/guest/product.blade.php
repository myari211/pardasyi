@extends('guest.layouts.app')
@section('content')
<div class="container">
    <div class="row" style="margin-top:150px;">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="{{ asset('image/coffe/1.JPG') }}" style="width:100%; height:200px;" class="border">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <h4 class="weight text-green">Coffee</h4>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-md green-bg text-white rounded" onclick="location.href='/product/coffee';">
                                Look Around ...
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="{{ asset('image/rice/1.JPG') }}" style="width:100%; height:200px;" class="border">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <h4 class="weight text-green">Rice</h4>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-md green-bg text-white rounded" onclick="location.href='/product/rice';">
                                Look Around ...
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="{{ asset('image/herbs/1.JPG') }}" style="width:100%; height:200px;" class="border">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <h4 class="weight text-green">Herbs</h4>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-md green-bg text-white rounded" onclick="location.href='/product/herbs'">
                                Look Around ...
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="{{ asset('image/Fruit/MANGGA.jpg') }}" style="width:100%; height:200px;" class="border">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <h4 class="weight text-green">Fruits</h4>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-md green-bg text-white rounded" onclick="location.href='/product/fruits';">
                                Look Around ...
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="{{ asset('image/Meats/3.jpg') }}" style="width:100%; height:200px;" class="border">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <h4 class="weight text-green">Meats</h4>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-md green-bg text-white rounded" onclick="location.href='/product/meats';">
                                Look Around ...
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="{{ asset('image/Others/1.jpg') }}" style="width:100%; height:200px;" class="border">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <h4 class="weight text-green">Others</h4>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-md green-bg text-white rounded" onclick="location.href='/product/others';">
                                Look Around ...
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection