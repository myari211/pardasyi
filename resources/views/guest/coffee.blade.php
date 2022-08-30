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
                        @foreach($coffee as $data)
                            <div class="col-lg-4 mb-2">
                                <div class="card rounded-0 h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <img src="{{ asset('content/'.$data->image) }}" style="width:100%; height:200px;">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-12">
                                                <h4 class="text-center weight text-primary">{{ $data->name_product }}</h4>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <small class="text-muted text-center">
                                                    {{ Str::limit($data->description, 150) }}
                                                </small>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <a data-toggle="modal" data-target="#coffee{{ $data->id }}">
                                                    <small class="text-muted">More ...</small>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-12">
                                                <div>
                                                    <button type="button" class="btn btn-md btn-primary z-depth-0 text-white rounded btn-block" data-toggle="modal" data-target="#coffee{{ $data->id }}">Buy</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- modal --}}

@foreach($coffee as $data)
<div class="modal fade" id="coffee{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="{{ asset('content/'.$data->image) }}" class="w-100 h-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>{{ $data->name_product }}</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <small>{{ $data->description }}</small>
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
@endforeach
@endsection