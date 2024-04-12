<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
    <style>
        .col-md-9{  
            display: grid;
            place-items: center;
            vertical-align: middle;
            text-align: center !important;
        }
    </style>
</head>
<body class="" style="background: aliceblue;">
    @include('layouts.header2')
    <div class="row justify-content-center m-0">
        @include('petForm.left')
        <div class="col-md-9 text-center">
            <div>
                <h1> <sup><i class="fa-regular fa-heart"></i></sup> Highfield</h1>
                <p class="pl-5 fw-bold text-secondary" style="letter-spacing: 4.5px; font-size: 10px;">VETERINARY GROUP</p>
                
                <p class="fw-bold">Highfield Veterinary Group Maynooth</p>
                <div>
                    <p class="mb-1"><i class="fa-solid fa-people-group mr-1"></i>Maynooth</p>
                    <p class="mb-1"> <i class="fa-solid fa-envelope mr-1"></i> maynooth@highfield.ie</p>
                    <p class=""><i class="fa-solid fa-phone mr-1"></i> 016289467</p>
                </div>
                <h3 class="mt-2">Sign up for a health plan - it takes less than 2 minutes!</h3>

                <div class="row justify-content-center mt-4">
                    <a href="{{ route('details') }}" class="btn btn-dark rounded-pill col-md-3 py-3">
                        SIGN UP
                        <i class="fa-solid fa-paw pl-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
   
    @include('layouts.modal')
    @include('layouts.footer')
</body>
</html>
