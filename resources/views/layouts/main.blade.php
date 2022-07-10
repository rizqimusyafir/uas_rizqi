<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Decorunic 3D Management">
    <meta name="author" content="decorunic">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <title>{{ $title }} &lsaquo; {{ $siteName }}</title>

    <link rel="apple-touch-icon" sizes="57x57" href="{{ '/img/apple-icon-57x57.png' }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ '/img/apple-icon-60x60.png' }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ '/img/apple-icon-72x72.png' }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ '/img/apple-icon-76x76.png' }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ '/img/apple-icon-114x114.png' }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ '/img/apple-icon-120x120.png' }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ '/img/apple-icon-144x144.png' }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ '/img/apple-icon-152x152.png' }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ '/img/apple-icon-180x180.png' }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ '/img/android-icon-192x192.png' }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ '/img/favicon-32x32.png' }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ '/img/favicon-96x96.png' }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ '/img/favicon-16x16.png' }}">
    <link rel="manifest" href="{{ '/img/manifest.json' }}">

    <!-- Custom fonts for this template-->
    <link href="{{ '/sb-admin-2/vendor/fontawesome-free/css/all.min.css' }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ '/sb-admin-2/css/sb-admin-2.min.css' }}" rel="stylesheet">

    <?php if(Request::path() === 'products/list' || 'products/categories'): ;?>
        <!-- Datatables-->
        <link href="{{ '/sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.css' }}" rel="stylesheet">
    <?php endif;?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('partials.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                @include('partials.topbar')

                <div class="container-fluid">
                  @yield('container')
                </div>

            </div>

            @include('partials.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ '/sb-admin-2/vendor/jquery/jquery.min.js' }}"></script>
    <script src="{{ '/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js' }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ '/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js' }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ '/sb-admin-2/js/sb-admin-2.min.js' }}"></script>

    <?php if(Request::path() === 'products/list' || 'products/categories'): ;?>
        <!-- Datatables Page level plugins -->
        <script src="{{ '/sb-admin-2/vendor/datatables/jquery.dataTables.min.js' }}"></script>
        <script src="{{ '/sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.js' }}"></script>

        <!-- Datatables Page level custom scripts -->
        <script src="{{ '/sb-admin-2/js/demo/datatables-demo.js' }}"></script>
    <?php endif;?>
</body>

</html>