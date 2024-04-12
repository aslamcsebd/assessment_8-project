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
        .hide{display: none; }
    </style>
</head>
<body class="" style="background: aliceblue;">
    @include('layouts.header2')
    <div class="row justify-content-center m-0">
        @include('petForm.left')
        <div class="col-md-9 mt-4">
            <b>Your Details</b>
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
                        <div class="progress-bar rounded-pill" style="width: 100%;"></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar rounded-pill bg-warning" style="width: 100%;"></div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <span for="fname" class="form-label">First  Name</span>
                    <input type="text" id="fname" class="form-control" oninput="fname()">
                </div>
                <div class="col-md-6 hide lastName">
                    <span for="lname" class="form-label">Last Name</span>
                    <input type="text" id="lname" class="form-control" oninput="lname()">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 hide email">
                    <span for="email" class="form-label">Email Address</span>
                    <input type="email" id="email" class="form-control" oninput="email()">
                </div>
                <div class="col-md-6 hide mobile">
                    <span for="mobile" class="form-label">Mobile Number</span>
                    <input type="text" id="mobile" class="form-control" oninput="mobile()">
                </div>
            </div>

            <div class="hide payment mt-4">
                <span>
                    By proceeding you agree to Terms and Conditions and Privacy Policy. This will direct you to our secure checkout page to complete your sign-up. Please note this is a 12 month plan.
                </span>
    
                <div class="d-flex justify-content-end">
                    <a href="#" type="submit" class="btn btn-dark rounded-pill col-auto py-3 px-4 mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Process to secure payment</a>
                </div>
            </div>


            <div class="row justify-content-between mt-5 mx-2">
                <a href="{{ route('addPlan') }}" class="btn btn-dark rounded-pill col-auto">   
                    <i class="fas fa-arrow-left py-1 px-2"></i>
                </a>
            </div>
        </div>
    </div>
   
    @include('layouts.modal')
    @include('layouts.footer')

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

    <script>
        function fname(){
            const fname = document.getElementById("fname").value;
            if(fname){
                $(".lastName").css("display", "block");
            }else{
                $(".lastName").css("display", "none");
                $(".email").css("display", "none");
                $(".mobile").css("display", "none");
            }
        }  
        function lname() {
            const lname = document.getElementById("lname").value;
            if(lname){
                $(".email").css("display", "block");
            }else{
                $(".email").css("display", "none");
                $(".mobile").css("display", "none");
            }
        } 
        function email() {
            const email = document.getElementById("email").value;            
            var regex = /^\S+@\S+\.\S+$/;

            if(regex.test(email) === true) {
                $(".mobile").css("display", "block");
            }else{
                $(".mobile").css("display", "none");
            }
        } 
        function mobile() {
            const mobile = document.getElementById("mobile").value;
            if(mobile){
                $(".payment").css("display", "block");
            }else{
                $(".payment").css("display", "none");
            }
        } 
        
    </script>
</body>
</html>

