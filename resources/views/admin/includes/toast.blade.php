<script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    @if (Session::has('success'))
        toastr.success("{{ session('success') }}");
    @endif

    @if (Session::has('error'))
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('message'))
        toastr.info("{{ session('message') }}");
    @endif

    @if (Session::has('warning'))
        toastr.warning("{{ session('warning') }}");
    @endif
</script>
