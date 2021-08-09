@extends('guest.layouts.app')
@section('content')
<div class="container">
    <div class="row" style="margin-top:150px;">
        @foreach($coffee as $data)
            <div class="col-lg-4 mb-2">
                <div class="card rounded-0 h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="{{ asset('content/'.$data->image) }}" style="width:100%; height:200px;">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12">
                                <h4 class="text-center weight text-green">{{ $data->name_product }}</h4>
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
                            <div class="col-lg-12 d-flex justify-content-between align-items-end">
                                <div>
                                    <small class="text-muted">Price</small><br />
                                    <span class="text-green" style="font-weight:400; font-size:25px;">Rp. {{ $data->price }}</span>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-md green-bg text-white rounded-0" data-toggle="modal" data-target="#coffee{{ $data->id }}">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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
                                <img src="{{ asset('image/coffe/'.$data->image) }}" style="width:100%">
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
                <button type="button" class="btn green-bg text-white btn-sm rounded">Contact Sales</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection