@extends('layouts.app')

@section('css')
    <style>
        #name{
            height: 60px; border: 2px solid black;
        }
    </style>
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="col-md-10">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar rounded-pill" style="width: 12%;"></div>
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

                    <div style="margin-top: 10rem;">
                        <h2 class="text-center mb-5">What is your pet's name?</h2>
                        <form action="{{ Route('addName') }}" method="post" enctype="multipart/form-data" class="needs-validation">
                            @csrf
                            <div class="row g-3 justify-content-center">
                                <div class="col-auto">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Sasha">
                                </div>
                                <div class="col-auto">  
                                    <button class="btn btn-primary rounded-circle ml-4 mt-1">
                                        <i class="fas fa-arrow-right px-1 py-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
    </footer>
@endsection
