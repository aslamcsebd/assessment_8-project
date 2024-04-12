<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
    <style>
        .progress{
            height: 0.3rem;
            background-color: aquamarine;
        }
        .col-md-4 .card:hover{ 
            background: whitesmoke !important; 
        }
    </style>
</head>
<body class="" style="background: aliceblue;">
    @include('layouts.header2')
    <div class="row justify-content-center m-0">
        @include('petForm.left')
        <div class="col-md-9 mt-4">
            <b>Pick the Perfect Plan for {{$name}}</b>
            <div class="row mt-3 mb-4">
                <div class="col-md-2">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar rounded-pill" style="width: 100%;"></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar rounded-pill bg-warning" style="width: 100%;"></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar rounded-pill" style="width: 0%;"></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar rounded-pill" style="width: 0%;"></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar rounded-pill" style="width: 0%;"></div>
                    </div>
                </div>
            </div>

            <div class="card-header row row-cols-auto mx-0">
                <ul class="nav nav-pills border border-primary rounded-pill pr-0" id="tabMenu">
                    <li class="nav-item">
                        <a class="nav-link active rounded-pill py-1 m-1" data-toggle="pill" href="#monthly">Monthly</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill py-1 m-1" data-toggle="pill" href="#yearly">Yearly</a>
                    </li>
                </ul>
            </div>
            <div class="card-body p-1 mt-3">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane active fade show" id="monthly">
                        <div class="row justify-content-center">
                            <div class="col-md-4 d-flex align-items-stretch">
                                <div class="card rounded-4" style="width: 22rem;">
                                    <div class="card-body">
                                        <div class="card-title text center">
                                            <b>Free visite essentials</b>
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
                            <div class="col-md-4 d-flex align-items-stretch">                            
                                <div class="card rounded-4" style="width: 22rem;">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <b>Free visite plus </b>
                                            <i class="fas fa-check ml-2"></i>&nbsp;<span class="text-end bg-warning rounded-pill p-1"> Most popular</span>
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
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4 text-center">
                                <a href="{{ route('addPlan') }}" class="btn btn-primary rounded-pill me-5">
                                    <i class="fas fa-euro-sign">&nbsp; 19.00</i>
                                    <small>/mo</small>                                    
                                </a>
                            </div> 
                            <div class="col-md-4 text-center">
                                <a href="{{ route('addPlan') }}" class="btn btn-primary rounded-pill me-5">
                                    <i class="fas fa-euro-sign">&nbsp; 27.00</i>
                                    <small>/mo</small>                                    
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show" id="yearly">
                    </div>
                </div>                            
            </div>

            <div class="row justify-content-between mt-5 mx-2">
                <a href="{{ route('details') }}" class="btn btn-dark rounded-pill col-auto">   
                    <i class="fas fa-arrow-left py-1 px-2"></i>
                </a>
                <a href="#" class="btn btn-dark rounded-pill col-auto">   
                    <i class="fas fa-arrow-right py-1 px-2"></i>
                </a>
            </div>
        </div>
    </div>
   
    @include('layouts.modal')
    @include('layouts.footer')
</body>
</html>

