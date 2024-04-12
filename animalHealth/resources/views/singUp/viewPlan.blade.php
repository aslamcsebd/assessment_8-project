@extends('layouts.app')

@section('css')
    <style>
        #name {
            height: 60px;
            border: 2px solid black;
        }

        .popular {
            border-bottom-left-radius: 12px;
            border-top-right-radius: 12px;
            width: fit-content;
            background-color: coral;
        }
    </style>
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="col-md-10">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-bar rounded-pill" style="width: 38%;"></div>
                        </div>
                        <div class="mt-2">
                            @php
                                $sign = ['Your pet', 'Choose a plan', 'Pay', 'Done'];
                            @endphp
                            @foreach ($sign as $item)
                                <span class="px-5">{{ $item }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-8" style="margin-top: 5rem;">
                    <h2 class="mb-5">So far so good. <br> 1 pet ready to be signed up.</h2>
                    <div class="card rounded-4" style="width: 28rem;">
                        <div class="card-body">
                            <form>
                                <div class="list-group-item d-flex border-bottom border-primary">
                                    <div class="ms-2 me-auto">
                                        <input type="text" style="border: none;" class="form-control" value="{{ $name }}">
                                    </div>
                                    <a href="#" class="form-text pl-2">Edit</a>
                                </div>
                                <div class="list-group-item d-flex border-bottom border-primary py-2">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Type</div>
                                    </div>
                                    <span>Cat</span>
                                    <a href="#" class="form-text pl-2">Edit</a>
                                </div>
                                <div class="list-group-item d-flex border-bottom border-primary py-2">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Size</div>
                                    </div>
                                    <span>Universal</span>
                                </div>
                                <div class="list-group-item d-flex border-bottom border-primary py-2">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Plan</div>
                                    </div>
                                    <span>Free visite plus (<i class="fas fa-euro-sign"></i> 24/Month)</span>
                                    <a href="#" class="form-text pl-2">Edit</a>
                                </div>
                                <div class="list-group-item d-flex pt-2">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Addon</div>
                                    </div>
                                    <span>-</span>
                                </div>                                
                            </form>
                        </div>
                    </div>

                    <div class="justify-item-between d-flex ">
                        <a href="{{ route('signUp') }}" class="btn btn-outline-primary rounded-pill col-md-3">                       
                            Add more pets
                            <i class="fas fa-plus float-right py-1 pr-2"></i>
                        </a>
                        <a href="{{ route('readyPay') }}" class="ml-4 btn btn-outline-primary rounded-pill col-md-3">                       
                            Sign up a Pet
                            <i class="nav-icon fas fa-arrow-right float-right py-1 pr-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
    </footer>
@endsection
