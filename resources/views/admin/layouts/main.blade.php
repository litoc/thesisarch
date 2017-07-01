<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'AMA Thesis Archive') }}</title>

        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="../admin/vendor/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link href="../admin/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="../admin/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-red-light sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            @include('admin.layouts.header')
            @include('admin.layouts.menu')
        </div>
        <!-- /.content-wrapper -->
        @include('admin.layouts.footer')
        
        <!-- jQuery 2.2.3 -->
        <script src="../admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="../admin/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="../admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="../admin/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="../../admin/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../admin/js/demo.js"></script>
    </body>

</html>