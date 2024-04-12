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
            <b>Select an Optional Upgrade</b>
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
            </div>            
            <div class="text-center">
                <b>Dental Pack</b>
                <p class="text-left">De-scale and polish including anaesthesia excl. extraction</p>
                <a href="{{ route('planList') }}" class="btn btn-secondary rounded-pill py-2">
                    <i class="fas fa-euro-sign">&nbsp; 10.00</i>
                    <small>/mo</small>                                    
                </a>
                <hr>

                <a href="{{ route('planList') }}" class="btn btn-secondary rounded-pill py-2">
                    No, thanks
                </a>
            </div>
        </div>
    </div>
   
    @include('layouts.modal')
    @include('layouts.footer')
</body>
</html>

