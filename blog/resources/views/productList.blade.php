@extends('layouts.app')
@section('title')
    Vendor list
@endsection
@section('content')
    @include('includes.alertMessage')

    <div class="content-wrapper p-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h6 class="card-header bg-success text-center py-2 mx-1">Product list</h6>
                <div class="card-body p-1">
                    <button class="btn btn-sm btn-primary text-light my-1" data-toggle="modal" data-original-title="test"
                        data-target="#addProduct">
                        <i class="fas fa-plus-square nav-icon"></i> &nbsp; Add new product
                    </button>
                    <table class="table table-bordered">
                        <thead class="bg-info">
                            <th>Sl</th>
                            <th>Image</th>
                            <th>Product name</th>
                            <th>Category name</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($product as $item)
                                <tr>
                                    <td width="30">{{ $loop->iteration }}</td>                                    
                                    <td>
                                        <img src="{{asset('/')}}{{$item->photo ?? 'default.jpg'}}" class="img-thumbnail" alt="No Image found" width="60">
                                    </td>
                                    <td>
                                        {!! $item->name !!}
                                    </td>
                                    <td>{!! $item->productToCategory->name !!}</td>
                                    <td width="auto">
                                        <a href="{{ Route('vendor.productId', $item->id) }}"
                                            class="btn btn-sm btn-outline-danger py-1"
                                            onclick="return confirm('Are you want to delete this?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addProduct" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title text-center" id="exampleModalLabel">Add new product</h6>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>

                <div class="modal-body">
                    <form action="{{ Route('vendor.addProduct') }}" method="post" enctype="multipart/form-data" class="needs-validation">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="name">Category name*</label>
                                <select class="form-control mt-2" name="category_id" required>
                                    <option value="">Select category</option>
                                    @foreach ($category as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>>
                                    @endforeach                                    
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="name">Name*</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Product name" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="name">Product image*</label>
                                <input type="file" id="photo" class="form-control p-1" name="photo">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Close</button>
                            <button class="btn btn-sm btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $('.userView').click(function(){
            var name = $(this).data('name');
            var email = $(this).data('email');
            var photo = $(this).data('photo');

            $('#name').val(name);
            $('#email').val(email);
            $("#photo").attr('src', photo);
        });
    </script>
@endsection
