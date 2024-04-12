<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="background: aliceblue;">
    @include('layouts.header2')

    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <section>
                    <h2>Get Your Health Plan</h2>
                    <h4>Please select your nearest location below:</h4>

                    @php
                        $plans = array('Blessington', 'Clane', 'Dunboyne', 'Edenderry', 'Kilcock', 'Maynooth', 'Namas Farm', 'Naas Pet Clinic', 'Navan', 'New Ross', 'Portlaoise', 'Wexford Town');
                    @endphp
                    @foreach ($plans as $item)
                        <a href="{{ route('petForm', [$item]) }}" class="btn btn-secondary rounded-pill text-light col-md-3 my-2 mr-3">                       
                            {{$item}}
                        </a>                        
                    @endforeach
                </section>                
            </div>
        </div>
    </div>
   
    @include('layouts.modal')
    @include('layouts.footer')
</body>
</html>
