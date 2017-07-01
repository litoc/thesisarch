<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AMA Thesis Archive') }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="../admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../admin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="wrapper">
        @include('admin.layouts.menu')
        @yield('container')
    </div>
    <!-- /.content-wrapper -->
    @include('admin.layouts.footer')
    <!-- jQuery -->
    <script src="../admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="../admin/vendor/jquery/jquery.min.js"></script>
    <script src="../admin/vendor/tether/tether.min.js"></script>
    <script src="../admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu/Plugin JavaScript -->
    <script src="../admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../admin/vendor/chart.js/Chart.min.js"></script>
    <script src="../admin/vendor/datatables/js/jquery.dataTables.js"></script>
    <script src="../admin/vendor/datatables/js/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../admin/js/sb-admin-2.min.js"></script>

</body>

</html>