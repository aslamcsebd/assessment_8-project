@extends('layouts.app')
@section('title')
    Profile
@endsection
@section('content')
    <div class="content-wrapper p-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h5 class="card-header bg-success text-center py-2 mx-1">Your profile</h5>
                <div class="card-body mt-2">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <table class="table table-bordered text-center">
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <div class="rounded py-2">
                                            <img class="rounded" id="imgSrc" alt="profile_image" width="80" height="80" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ auth()->user()->name }}</td>    
                                </tr>
                                <tr>
                                    <td>User type</td>
                                    <td class="badge bg-warning text-capitalize p-1">{{ auth()->user()->type }}</td>
                                </tr>
                                <tr>
                                    <td>Photo upload</td>
                                    <td>
                                        <form action="{{ route('imageUpload') }}" method="POST" enctype="multipart/form-data" class="row justify-content-between px-4">
                                            @csrf
                                            <input type="file" class="form-control p-1 col-7" id="image" name="image" nchange="loadFile(event)" required>
                                            <button type="submit" class="btn btn-success col-4">Save now</button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function loadImage() {
            let url = "{{ asset('images/'.auth()->user()->userImg->image) }}";

            if (url.match(/\.(jpeg|jpg|gif|png)$/) != null) {
                return url;
            } else {
                return "https://ui-avatars.com/api/?background=random&color=fff&name={{ auth()->user()->name }}"
            }
        }
        $("#imgSrc").attr('src', loadImage())

        var loadFile = function(event) {
            var image = document.getElementById('output');
            var src = URL.createObjectURL(event.target.files[0]);
            $("#imgSrc").attr('src', src);

            var img = $("#image").val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "post",
                url: '{{ route('imageUpload') }}',
                dataType: 'JSON',
                // data: {
                //     'src': img,
                // },
                data: new FormData(this),
                success: function(data){

                }
            });
        };
    </script>
@endsection
