@extends('guest.layouts.app')
@section('content')
<div class="container">
    <div class="row" style="margin-top:150px;">
        @foreach($rice as $data)
            <div class="col-lg-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="{{ asset('image/rice/'.$data->image) }}" style="width:100%; height:200px;">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12">
                                <h4 class="text-center weight text-green">{{ $data->name_product }}</h4>
                            </div>
                        </div>
                        {{-- <div class="row mt-4">
                            <div class="col-lg-12">
                                <span class="text-center">{{ Str::limit($data->description, '150') }}</span>
                            </div>
                        </div> --}}
                        <div class="row mt-4 d-flex justify-content-end">
                            <div class="col-lg-6 d-flex justify-content-end">
                                <button type="button" class="btn btn-md green-bg text-white rounded" data-toggle="modal" data-target="#rice{{ $data->id }}">More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@foreach($rice as $data)
<div class="modal fade" id="rice{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="{{ asset('image/rice/'.$data->image) }}" style="width:100%">
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