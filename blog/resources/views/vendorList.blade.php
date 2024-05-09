@extends('layouts.app')
@section('title')
    Vendor list
@endsection
@section('content')
    @include('includes.alertMessage')

    <div class="content-wrapper p-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h6 class="card-header bg-success text-center py-2 mx-1">Vendor list</h6>
                <div class="card-body p-1">
                    <button class="btn btn-sm btn-primary text-light my-1" data-toggle="modal" data-original-title="test"
                        data-target="#addVender">
                        <i class="fas fa-plus-square nav-icon"></i> &nbsp; Add new vendor
                    </button>
                    <table class="table table-bordered">
                        <thead class="bg-info">
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td width="30">{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ $photo = asset($user->userInfo->photo ?? 'default.jpg') }}"
                                            class="img-thumbnail" alt="No Image found" width="60">
                                        <br>
                                        <span>{!! $user->name !!}</span>
                                    </td>
                                    <td>{!! $user->email !!}</td>
                                    <td width="auto">
                                        <a class="btn btn-sm btn-outline-primary userView" data-toggle="modal"
                                            data-target="#userView" data-username="{{ $user->username }}"
                                            data-name="{{ $user->name }}"
                                            data-dob="{{ date('Y-m-d', strtotime($user->userInfo->dob)) }}"
                                            data-email="{{ $user->email }}" data-phone="{{ $user->userInfo->phone }}"
                                            data-gender="{{ $user->userInfo->gender }}"
                                            data-blood="{{ $user->userInfo->blood }}"
                                            data-photo="{{ $photo }}">View</a>

                                        <a href="{{ Route('admin.userId', $user->id) }}"
                                            class="btn btn-sm btn-outline-danger py-1"
                                            onclick="return confirm('Are you want to delete this user?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="userView" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="exampleModalLabel">Vendor information</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-12 text-center">
                            <img id="photo" src="" width="60">
                        </div>

                        <div class="form-group col-6">
                            <label for="name">Name*</label>
                            <input type="text" class="form-control bg-transparent" id="name" readonly>
                        </div>                       

                        <div class="form-group col-6">
                            <label for="email">Email*</label>
                            <input type="text" class="form-control bg-transparent" id="email" readonly>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-danger col-md-2" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addVender" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title text-center" id="exampleModalLabel">Add new vendor</h6>
                    <button class="close" type="button"
                        data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>

                <div class="modal-body">
                    <form action="{{ Route('admin.vendor') }}" method="post" enctype="multipart/form-data" class="needs-validation">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="name">Name*</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Vendor name" required />
                            </div>
                            <div class="form-group col-12">
                                <label for="email">Email*</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="New email" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="password">password*</label>
                                <input type="text" name="password" class="form-control" id="password"
                                    placeholder="New password" value="123456" required />
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
