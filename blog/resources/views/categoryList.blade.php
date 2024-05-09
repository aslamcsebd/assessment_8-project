@extends('layouts.app')
@section('title')
    Vendor list
@endsection
@section('content')
    @include('includes.alertMessage')

    <div class="content-wrapper p-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h6 class="card-header bg-success text-center py-2 mx-1">Category list</h6>
                <div class="card-body p-1">
                    <button class="btn btn-sm btn-primary text-light my-1" data-toggle="modal" data-original-title="test"
                        data-target="#addVender">
                        <i class="fas fa-plus-square nav-icon"></i> &nbsp; Add new category
                    </button>
                    <table class="table table-bordered">
                        <thead class="bg-info">
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Total product</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($category as $item)
                                <tr>
                                    <td width="30">{{ $loop->iteration }}</td>                                    
                                    <td>{!! $item->name !!}</td>
                                    <td>{!! $item->categoryToProduct->count() !!}</td>
                                    <td width="auto">
                                        <a href="{{ Route('vendor.categoryId', $item->id) }}"
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

    <div class="modal fade" id="addVender" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title text-center" id="exampleModalLabel">Add new category</h6>
                    <button class="close" type="button"
                        data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>

                <div class="modal-body">
                    <form action="{{ Route('vendor.addCategory') }}" method="post" enctype="multipart/form-data" class="needs-validation">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="name">Name*</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Category name" required />
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
        $('.userView').click(function() {
            var name = $(this).data('name');
            var email = $(this).data('email');
            var photo = $(this).data('photo');

            $('#name').val(name);
            $('#email').val(email);
            $("#photo").attr('src', photo);
        });
    </script>
@endsection
