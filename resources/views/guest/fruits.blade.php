@extends('guest.layouts.app')
@section('content')
<div class="container">
    <div class="row" style="margin-top:150px;">
        @foreach($fruits as $data)
            <div class="col-lg-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="{{ asset('image/Fruit/'.$data->image) }}" style="width:100%; height:200px;">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12">
                                <h4 class="text-center weight text-green">{{ $data->name_product }}</h4>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <span class="text-center">{{ Str::limit($data->description, '150') }}</span>
                            </div>
                        </div>
                        <div class="row mt-4 d-flex justify-content-end">
                            <div class="col-lg-6 d-flex justify-content-end">
                                <button type="button" class="btn btn-md green-bg text-white rounded" data-toggle="modal" data-target="#fruits{{ $data->id }}">More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@foreach($fruits as $data)
<div class="modal fade" id="fruits{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="{{ asset('image/fruit/'.$data->image) }}" style="width:100%">
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

@foreach($fruits as $data)
    <div class="modal fade" id="editFruits{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        @csrf
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/admin/edit/fish/{{ $data->id }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-2">
                            <div class="col-lg-12">
                                <label for="file">Image</label>
                                <input type="file" class="form-control" name="file" id="file">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <div class="md-form">
                                    <label for="name">Product Name</label>
                                    <input type="text" name="product_name" class="form-control" id="name" value="{{ $data->name_product }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" id="number" name="price" value="{{ $data->price }}">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10" name="description">{{ $data->description }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-md">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection