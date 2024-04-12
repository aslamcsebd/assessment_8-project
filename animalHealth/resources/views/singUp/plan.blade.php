@extends('layouts.app')

@section('css')
    <style>
        #name {
            height: 60px;
            border: 2px solid black;
        }
        .popular{
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

                    <div style="margin-top: 5rem;">
                        <h2 class="text-center mb-5">Choose a Wellness plan for <span
                                class="text-primary">{{ $name }}</span></h2>

                        <div class="card-header p-1 col-md-3">
                            <ul class="nav nav-pills border border-primary rounded-pill" id="tabMenu">
                                <li class="nav-item">
                                    <a class="nav-link active rounded-pill py-1 m-1" data-toggle="pill"
                                        href="#monthly">Monthly</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded-pill py-1 m-1" data-toggle="pill" href="#yearly">Yearly</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body p-1 mt-3">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane active fade show" id="monthly">
                                    <div class="row">
                                        <div class="col-auto d-flex align-items-stretch">
                                            <div class="card rounded-4" style="width: 20rem;">
                                                <div>
                                                    <span class="float-end p-2 popular">MOST POPULAR</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="card-title">
                                                        <b>Free visite essentials</b>
                                                        <br>
                                                        <span>
                                                            <i class="fas fa-euro-sign fa-2x">&nbsp; 18</i>
                                                        </span>
                                                        <small>/ MONTH</small>
                                                    </div>
                                                    <div class="card-text border-top border-secondary pt-2">
                                                        @php
                                                            $month = array('Unlimited Free Vet Visits', 'Vaccinations (inc FeLV)', 'Annual Blood Test', 'Annual Urine Screen', '10% Discount on services', 'Saving of €80 per year');
                                                        @endphp
                                                        @foreach ($month as $item)
                                                            <p>
                                                                <i class="fas fa-check"></i> &nbsp;
                                                                {{$item}}
                                                            </p>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>                               
                                        </div>
                                        
                                        <div class="col-auto d-flex align-items-stretch">
                                            <div class="card rounded-4" style="width: 20rem;">
                                                <div class="card-body">
                                                    <div class="card-title">
                                                        <b>Free visite plus</b>
                                                        <br>
                                                        <span>
                                                            <i class="fas fa-euro-sign fa-2x">&nbsp; 24</i>
                                                        </span>
                                                        <small>/ MONTH</small>
                                                    </div>
                                                    <div class="card-text border-top border-secondary pt-2">
                                                        @php
                                                            $month = array('Unlimited Free Vet Visits', 'Vaccinations (inc FeLV)', 'Annual Blood Test', 'Annual Urine Screen', '10% Discount on services', 'Year round flea and worm prevention', 'Saving of €80 per year');
                                                        @endphp
                                                        @foreach ($month as $item)
                                                            <p>
                                                                <i class="fas fa-check"></i> &nbsp;
                                                                {{$item}}
                                                            </p>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <a href="{{ route('planView') }}" class="btn btn-primary rounded-circle ml-4 mt-1">
                                                <i class="fas fa-arrow-right px-1 py-2"></i>
                                            </a>
                                        </div>     
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="yearly">
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
    </footer>
@endsection
