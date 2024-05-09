<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>

<!-- Bootstrap v4.6.0 -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<!-- overlayScrollbars -->
<script src="{{ asset('js/jquery.overlayScrollbars.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>

{{-- Pushmenu --}}
<script src="{{ asset('js/custom.js') }}"></script>

{{-- dataTables --}}
<script src="{{ asset('js/dataTables.min.js') }}"></script>

<!-- summernote -->
{{-- <script src="{{ asset('/') }}summernote/summernote.min.js" ></script> --}}

<!-- Datepicker -->
<script src="{{ asset('/') }}js/datepicker.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script type="text/javascript">
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 5000);

    $(".datepicker").datepicker({
        format: "dd-mm-yyyy",
        // startView: "months", 
        // minViewMode: "months"
    });

    $(document).ready(function() {
        $('.table').DataTable();
    });

    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>
