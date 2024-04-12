
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   {{-- <meta http-equiv="refresh" content="4"/> --}}
   
   <title>@yield('title')</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   {{--  AdminLTE v3.1.0
         Bootstrap v4.6.0 --}}
   <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
   <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}" >
   <link rel="stylesheet" href="{{ asset('css/OverlayScrollbars.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
   <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
   <!-- summernote -->
   {{-- <link href="{{ asset('/') }}summernote/summernote.css" rel="stylesheet"> --}}
   
   <!-- Datepicker -->
   <link rel="stylesheet" href="{{ asset('/')}}css/datepicker.min.css">

   {{-- dataTables --}}
   <link rel="stylesheet" href="{{ asset('css/dataTables.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">


  {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/1.1.1/js/bootstrap-multiselect.min.js"> --}}

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
