@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card rounded-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-center">
                            <i class="far fa-circle mr-2 font-color"></i>
                            <span style="font-size:30px" class="font-color">
                                Create Product
                            </span>
                        </div>
                    </div>
                    <form method="post" action="/admin/fish" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="md-form">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" name="product_name" class="form-control" id="product_name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" class="form-control" id="price">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="file">Product Image</label>
                                <input type="file" name="file" class="form-control" id="file">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button type="submit" class="btn green-bg text-white btn-md rounded-0">
                                    Save Changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card rounded-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-center">
                            <i class="far fa-circle mr-2 font-color"></i>
                            <span style="font-size:30px;" class='font-color'>Product List</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        @foreach($fish as $data)
                            <div class="col-lg-4">
                                <div class="card rounded-0 bordered">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <img src="{{ asset('image/fish/'.$data->image) }}">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <h4>{{ $data->name_product }}</h4>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <small class="text-muted">{{ $data->description }}</small>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-lg-12 d-flex justify-content-between">
                                                <small>Price</small>
                                                <button type="button" class="btn p-0 z-depth-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <small class="fas fa-ellipsis-v"></small>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#editFish{{ $data->id }}">Edit</button>
                                                    <button class="dropdown-item" onclick="event.preventDefault(); document.getElementById('deleteFish').submit();">Delete</button>
                                                    <form method="post" action="/admin/fish/delete/{{ $data->id }}" id="deleteFish">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span>{{ $data->price }}</span>
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


    @foreach($fish as $data)
        <div class="modal fade" id="editFish{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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