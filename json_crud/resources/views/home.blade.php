@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('includes.alertMessage')
                <button class="btn btn-success text-light" data-toggle="modal" data-original-title="test"
                    data-target="#addUser"> <b>+</b> &nbsp; Add user</button>

                <fieldset>
                    <legend>List user data</legend>
                    <table class="table table-bordered">
                        <thead>
                            <th>Sl</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>mobile</th>
                            <th>Action</th>
                        </thead>
                        <tbody>

                            @foreach ($users as $key => $user)
                                <tr>
                                    <td width="10">{{ $loop->iteration }}</td>
                                    </td>
                                    <?php $encrypted = "data:image/gif; base64, $user->image"; ?>
                                    <td>
                                        <img src="{{ $encrypted }}" width="100" height="100"
                                            style="border-radius: 50%; ">
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->mobile }}</td>
                                    <td width="auto">
                                        <a class="btn px-2 btn-outline-success" data-toggle="modal" data-target="#editUser"
                                            data-id="{{ $key }}" data-name="{{ $user->name }}"
                                            data-email="{{ $user->email }}" data-mobile="{{ $user->mobile }}"
                                            data-image="{{ $user->image }}">Edit</a>
                                        <a class="btn btn-outline-danger"
                                            onclick="return onfirm('Are you want to delete this?')"
                                            href="{{ url('delete', $key) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </fieldset>
            </div>
        </div>
    </div>

    {{-- modal --}}
    {{-- Add user --}}

    <div class="modal fade" id="addUser" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title text-center" id="exampleModalLabel">Add user</h6>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('addUser') }}" method="Post" enctype="multipart/form-data"
                        class="needs-validation">
                        @csrf
                        <div class="form-group">
                            <label for="name">User's full name* :</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="name"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email* :</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="example@email.com" required>
                        </div>

                        <div class="form-group">
                            <label for="mobile">Mobile number* :</label>
                            <input type="number" name="mobile" class="form-control" id="mobile"
                                placeholder="+91*****001" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Image :</label>
                            <input type="file" class="form-control p-1" id="image" name="image" required>
                        </div>

                        <div class="modal-footer">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-primary">Save</button>
                                <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Edit user --}}
    <div class="modal fade" id="editUser" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title text-center" id="exampleModalLabel">Edit user</h6>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('editUser') }}" method="Post" enctype="multipart/form-data"
                        class="needs-validation">
                        @csrf
                        <input type="hidden" name="id" id="id">

                        <div class="form-group">
                            <label for="name">User's full name* :</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="name"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email* :</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="example@email.com" required>
                        </div>

                        <div class="form-group">
                            <label for="mobile">Mobile number* :</label>
                            <input type="number" name="mobile" class="form-control" id="mobile"
                                placeholder="+91*****001" required>
                        </div>
                        <input type="hidden" name="image" id="image">

                        <div class="modal-footer">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-primary">Save</button>
                                <button class="btn btn-sm btn-secondary" type="button"
                                    data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@section('js')
    <script type="text/javascript">
        $('#editUser').on('show.bs.modal', function(event) {
            console.log('Model Opened')
            var button = $(event.relatedTarget)

            var id = button.data('id')
            var name = button.data('name')
            var email = button.data('email')
            var mobile = button.data('mobile')
            var image = button.data('image')

            var modal = $(this)

            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #email').val(email);
            modal.find('.modal-body #mobile').val(mobile);
            modal.find('.modal-body #image').val(image);
        })
    </script>
@endsection
@endsection
