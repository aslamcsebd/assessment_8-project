@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p>Quick actions</p>
                    <a href="{{ route('signUp') }}" class="btn btn-outline-primary rounded-pill col-md-3">                       
                        <i class="nav-icon fas fa-plus float-left py-1"></i>
                        Sign up a Pet
                    </a>
                </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
    </footer>
@endsection
