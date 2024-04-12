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
            <b>Your Pet Plan Summary</b>
            <div class="row mt-3 mb-4">
                <div class="col-md-2">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar rounded-pill" style="width: 100%;"></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar rounded-pill" style="width: 100%;"></div>
                    </div>
                </div>
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
            </div>

            <div class="card-body mt-3">
                <div class="row border-bottom border-danger mx-2">
                    <div class="col-md-1 px-0">
                        <img src="{{asset('images/dog.png')}}" width="100%">
                    </div>
                    <div class="col-md-11 ">
                        <div class="d-flex justify-content-start">                    
                            <p>Sasha</p>
                            <a href=""><i class="fa-solid fa-pen-to-square px-3"></i></a>
                            <a href=""><i class="fa-solid fa-trash-can"></i></a>
                        </div>
                        <div class="d-flex justify-content-between">                    
                            <p>
                                <b>Essential Play</b> - 
                                <span>annual subscription paid monthly</span>
                            </p>
                            <p>$19.00</p>
                        </div>
                        <div class="d-flex justify-content-between">                    
                            <p>
                                with<b>Dental Pack</b> - 
                                <span>add-on paid monthly</span>
                            </p>
                            <p>$10.00</p>
                        </div>
                    </div>
                </div>
                <div class="row mx-2">
                    <div class="d-flex justify-content-end">  
                        <p>$29.00</p>
                    </div>
                </div>

                <div class="row border-bottom border-danger mx-2">
                    <div class="col-md-1 px-0">
                        <img src="{{asset('images/cat.png')}}" width="100%">
                    </div>
                    <div class="col-md-11 ">
                        <div class="d-flex justify-content-start">                    
                            <p>Sasha</p>
                            <a href=""><i class="fa-solid fa-pen-to-square px-3"></i></a>
                            <a href=""><i class="fa-solid fa-trash-can"></i></a>
                        </div>
                        <div class="d-flex justify-content-between">                    
                            <p>
                                <b>Essential Play</b> - 
                                <span>annual subscription paid monthly</span>
                            </p>
                            <p>$17.00</p>
                        </div>
                        <div class="d-flex justify-content-between">                    
                            <p>
                                with<b>Dental Pack</b> - 
                                <span>add-on paid monthly</span>
                            </p>
                            <p>$10.00</p>
                        </div>
                    </div>
                </div>
                <div class="row mx-2">
                    <div class="d-flex justify-content-end">  
                        <p>$27.00</p>
                    </div>
                </div>

                <div class="row mx-2">
                    <div class="d-flex justify-content-end">  
                        <p class="pr-5">Per month</p>
                        <p>$56.00</p>
                    </div>
                </div>
                <div class="row mx-2">
                    <div class="d-flex justify-content-end fw-bold">  
                        <p class="pr-5">Pay now</p>
                        <p>$56.00</p>
                    </div>
                </div>
                <br>

                <span>
                    By proceeding you agree to Terms and Conditions and Privacy Policy. This will direct you to our secure checkout page to complete your sign-up. Please note this is a 12 month plan.
                </span>

                <div class="d-flex justify-content-end mt-5">
                    <a href="{{ route('details') }}" class="btn btn-secondary rounded-pill py-3 px-4">Add Another Pet <i class="fa-solid fa-plus pl-1"></i></a>
                    <a href="{{ route('checkoutDetails') }}" type="submit" name="weight" value="25 - 50 Kg" class="btn btn-dark rounded-pill col-auto py-3 px-4 mx-2">CHECKOUT <i class="fa-regular fa-credit-card pl-1"></i></a>
                </div>
            </div>

            <div class="row justify-content-between mx-2">
                <a href="{{ route('planList') }}" class="btn btn-dark rounded-pill col-auto">   
                    <i class="fas fa-arrow-left py-1 px-2"></i>
                </a>
            </div>
        </div>
    </div>
   
    @include('layouts.modal')
    @include('layouts.footer')
</body>
</html>

