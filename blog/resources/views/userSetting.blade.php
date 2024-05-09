@extends('layouts.app')
@section('title')
    Settings
@endsection
@section('content')
    @include('includes.alertMessage')

    <div class="content-wrapper p-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h4 class="card-header bg-info text-center py-2">Your information</h4>
                    <form action="{{ Route('user.edit') }}" method="post" enctype="multipart/form-data" class="needs-validation">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-3">
                                    <label for="username">User name*</label>
                                    <input type="text" class="form-control" name="username" id="username" value="{{ $user->username ?? 'Enter user name' }}" placeholder="username" required>
                                </div>

                                <div class="form-group col-3">
                                    <label for="name">Full name*</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $user->name ?? 'Enter full name' }}" placeholder="Full name" required>
                                </div>

                                <div class="form-group col-3">
                                    <label for="email">Email*</label>
                                    <input type="email" class="form-control" readonly name="email" id="email" value="{{ $user->email ?? 'Enter email' }}" placeholder="Enter email" autocomplete="email" required>
                                </div>

                                <div class="form-group col-3">
                                    <label for="password">Change password*</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" autocomplete="password">
                                </div>

                                <div class="form-group col-3">
                                    <label for="phone">Mobile number*</label>
                                    <input type="number" class="form-control" name="phone" value="{{ $user->userInfo->phone ?? 'Enter phone' }}" id="phone" placeholder="Enter phone" required>
                                </div>
                           
                                <div class="form-group col-3">
                                    @php
                                        $genders = ['Male', 'Female', 'Custom'];
                                    @endphp
                                    <label for="gender">Gender</label>
                                    <select class="form-control" name="gender" id="gender" required>
                                        <option value="">Select gender</option>
                                        @foreach ($genders as $gender)
                                            <option value="{{$gender}}" {{ ($gender == $user->userInfo->gender) ? 'selected' : '' }}>{{$gender}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-3">
                                    @php
                                        $groups = ['O +ve', 'O -ve', 'A +ve', 'A -ve', 'B +ve', 'B -ve', 'AB +ve', 'AB -ve', 'Unknown'];
                                    @endphp
                                    <label for="blood">Blood group</label>
                                    <select class="form-control" name="blood" id="blood" required>
                                        <option value="">Select group</option>
                                        @foreach ($groups as $group)
                                            <option value="{{$group}}" {{ ($group == $user->userInfo->blood) ? 'selected' : '' }}>{{$group}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-3">
                                    <label for="dob">Date of birth</label>
                                    <input type="date" class="form-control" name="dob" id="dob" value="{{ $user->userInfo->dob ?? 'Enter dob' }}" placeholder="Day-Month-Year" required/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-4">
                                    <img id="preview" src="{{  asset($user->userInfo->photo) ?? asset('images/default.jpg') }}" alt="Company Logo" class="avatar">
                                </div>
                                <div class="form-group col-4">
                                    <div class="custom-file">
                                        <input type="hidden" name="photoName" value="{{ $setting->logo ?? '' }}">
                                        <input type="file" id="logo" name="photo" class="custom-file-input">
                                        <label for="logo" class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="row justify-content-md-center mt-2">
                                <button type="submit" class="btn btn-success col-md-4">Save now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
