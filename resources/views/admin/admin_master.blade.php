<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | CMS Admin Section</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="CMS" name="description" />
    <meta content="AkshiptikaInfotechPrivateLimited" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}">
    @vite('resources/css/backend.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body data-topbar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('admin._layouts.header')
        <!-- ========== Left Sidebar Start ========== -->
        @include('admin._layouts.sidebar')
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            @yield('admin')
            <!-- End Page-content -->
            @include('admin._layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    @vite('resources/js/backend.js')
    <script>
        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
</body>

</html>
