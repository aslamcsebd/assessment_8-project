@extends('layouts.app')

@section('css')
    <style>
        #fname,
        #lname,
        #email,
        #address,
        #phone {
            height: 50px;
            border: 1px solid black;
            /* text-align: center; */
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
                            <div class="progress-bar rounded-pill" style="width: 64%;"></div>
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

                    <div style="margin-top: 5rem;">
                        <h2 class="mb-5">Pay with</h2>

                        <div class="card-header p-1 col-md-4">
                            <ul class="nav nav-pills border border-primary rounded-pill" id="tabMenu">
                                <li class="nav-item">
                                    <a class="nav-link active rounded-pill py-1 m-1" data-toggle="pill"
                                        href="#credit">Credit Card</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded-pill py-1 m-1" data-toggle="pill" href="#direct">Direct
                                        Card</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body p-1 mt-4">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane active fade show row justify-content-between" id="credit">
                                    <div class="col-md-6">
                                        <h5>Personal details</h5>
                                        <form>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <input type="text" id="fname" class="form-control text-center"
                                                        placeholder="First name">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" id="lname" class="form-control text-center"
                                                        placeholder="Last name">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input type="email" id="email" class="form-control"
                                                        placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input type="text" id="address" class="form-control"
                                                        placeholder="Address">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input type="number" id="phone" class="form-control"
                                                        placeholder="Phone">
                                                </div>
                                            </div>
                                        </form>
                                        <div class="justify-item-between d-flex mt-4">
                                            <button href="" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btn btn-outline-primary rounded-pill col-md-12">
                                                Next
                                                <i class="nav-icon fas fa-arrow-right float-right py-1 pr-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="direct">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pay now</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>Now move to the payment gateway</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
    </footer>
@endsection
