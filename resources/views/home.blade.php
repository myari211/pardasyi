@extends('admin.layouts.app')
@section('content')

    <div class="card mt-5 rounded-0">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-between align-items-center">
                    <h3><i class="fas fa-bookmark"></i> Product</h3>
                    <button type="button" class="btn btn-md p-2 rounded-circle border z-depth-0" data-toggle="modal" data-target="#addCoffee">
                        <i class="fas fa-plus" style="font-size:20px;"></i>
                    </button>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <hr />
                </div>
            </div>
            <div class="row">
                @foreach($coffee as $data)
                    <div class="col-lg-4">
                        <div class="card" style="height:100% !important">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="{{ asset('content/'.$data->image) }}" style="width:100%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <span style="font-size:30px; font-weight:400">{{ $data->name_product }}</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <small class="text-muted">
                                            {{ Str::limit($data->description, 150) }}
                                        </small>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12 d-flex justify-content-between align-items-center">
                                        <div>
                                            <small class="text-muted">Price</small><br />
                                            <span>
                                                $ {{ $data->price }}
                                            </span>
                                        </div>
                                        <div>
                                            <button type="button" class="btn p-0 btn-md z-depth-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" data-toggle="modal" data-target="#editCoffee{{ $data->id }}">Edit</a>
                                                <button class="dropdown-item" onclick="event.preventDefault(); document.getElementById('deleteCoffe{{ $data->id }}').submit();">Delete</button>
                                                <form method="post" action="/coffee/delete/{{ $data->id }}" id="deleteCoffe{{ $data->id }}" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
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


    {{-- modal --}}
    <div class="modal fade" id="addCoffee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/coffee/post" enctype="multipart/form-data">
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
                                    <input type="text" name="product_name" class="form-control" id="name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" id="number" name="price">
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
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-md">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @foreach($coffee as $data)
        <div class="modal fade" id="editCoffee{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <form method="post" action="/coffee/update/{{ $data->id }}" enctype="multipart/form-data">
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