@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
    
        @php $colors = array('bg-info', 'bg-secondary', 'bg-dark', 'bg-primary', 'bg-white', 'bg-success', 'bg-warning', 'bg-secondary', 'bg-danger', 'bg-dark'); @endphp

        <section class="content pt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="small-box bg-info">
                            <div class="inner text-center">
                                <h3></h3>
                                <p>User Info</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            {{-- <a href="{{ route('user.setting') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="main-footer">
        <strong>Copyright &copy; 2021 <a href="https://adminlte.io/" target="_blank">AdminLTE</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0
        </div>
    </footer>
@endsection
