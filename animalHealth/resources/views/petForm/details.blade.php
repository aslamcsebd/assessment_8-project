<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
    <style>
        .progress{
            height: 0.3rem;
            background-color: aquamarine;
        }
        #animalDiv .rounded-4:hover{ 
            background-color: mistyrose;
        }

        .btn-check:checked+.btn{
            background-color: mistyrose;
        }
    </style>
</head>
<body class="" style="background: aliceblue;">
    @include('layouts.header2')
    <div class="">
        <div class="row justify-content-center m-0">
            @include('petForm.left')
            <div class="col-md-9 mt-4">
                <b>Your Pet Details</b>
                <div class="row mt-3 mb-4">
                    <div class="col-md-2 pr-0">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar rounded-pill bg-warning" style="width: 100%;"></div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-bar rounded-pill" style="width: 0%;"></div>
                        </div>
                    </div>
                    <div class="col-md-2 pr-0">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar rounded-pill" style="width: 0%;"></div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-bar rounded-pill" style="width: 0%;"></div>
                        </div>
                    </div>
                    <div class="col-md-2 pr-0">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar rounded-pill" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <p class="mb-1">What is your pet's name?*</p>
                    <input type="text" class="form-control col-md-4" id="petName" oninput="petName()" autocomplete="off">
                </div>
                
                <form method="POST" action="{{ route('addDetails') }}">
                    @csrf
                    <div id="animalDiv" style="display: none">
                        <p>What type of animal is <span id="showPetName"></span> ?</p>
                        <input type="hidden" name="petName" id="animalName">
                        
                        <input type="radio" class="btn-check" name="animalType" value="dog" id="dog" autocomplete="off">
                        <label class="btn rounded-4" for="dog">
                            <img src="{{asset('images/dog.png')}}" width="100%" height="160">
                        </label>

                        <input type="radio" class="btn-check" name="animalType" value="cat" id="cat" autocomplete="off">
                        <label class="btn rounded-4" for="cat">
                            <img src="{{asset('images/cat.png')}}" width="100%" height="160">
                        </label>                   
                    </div>
                    <div id="weightDiv" style="display: none">
                        <p>What is <span id="showPetName2"></span>'s weight?</p>                    
                        <div>
                            <button type="submit" name="weight" value="0 - 25 Kg" class="btn btn-secondary rounded-pill col-auto py-3 px-4">0 - 25 Kg</button>
                            <button type="submit" name="weight" value="25 - 50 Kg" class="btn btn-secondary rounded-pill col-auto py-3 px-4 mx-2">25 - 50 Kg</button>
                            <button type="submit" name="weight" value="50 - 90 Kg" class="btn btn-secondary rounded-pill col-auto py-3 px-4">50 - 90 Kg</button>
                        </div>             
                    </div>
                </form>
            <div>
        </div>
    </div>
   
    @include('layouts.modal')
    @include('layouts.footer')

    <script>
        function petName() {
            const petName = document.getElementById("petName").value;
            if(petName){
                $("#animalDiv").css("display", "block");
                document.getElementById("showPetName").innerHTML = petName;
                document.getElementById("showPetName2").innerHTML = petName;
                $("#animalName").val(petName);
            }else{
                $("#animalDiv").css("display", "none");
                $("#weightDiv").css("display", "none");
                $("#dog").prop("checked", false);
                $("#cat").prop("checked", false);
            }
        }

        $("#dog").click(function() {
            var chkFormationDept = document.getElementById("dog").checked;
            if(chkFormationDept){
                $("#weightDiv").css("display", "block");
            }
        })
        $("#cat").click(function() {
            var chkFormationDept = document.getElementById("cat").checked;
            if(chkFormationDept){
                $("#weightDiv").css("display", "block");
            }
        })        
    </script>
</body>
</html>

