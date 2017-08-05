<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AMA Thesis Archive">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" id="_token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AMA Thesis Archive') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/agency.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.css" />

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }

    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body id="page-top">
    @include('layouts.header')
    @include('layouts.menu')
        @yield('main_container')
    @include('layouts.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('js/contact_me.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/agency.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.common.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.js"></script>

    <script type="text/javascript">
        var thesisArchive = {
            loginAsStudent: function() {
                swal({
                    width: 600,
                    padding: 50,
                    confirmButtonColor: '#D9534F',
                    cancelButtonColor: '#505050',
                    confirmButtonText: 'Login',
                    showCancelButton: true,
                    animation: false,
                    allowOutsideClick: false,
                    html: '<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">' +
                        '<input class="swal2-input" id="studentEmail" placeholder="khloe.delosreyes@ama.edu.ph" type="text" style="display: block;">' +
                        '<input class="swal2-input" id="studentPassword" placeholder="********" type="password" style="display: block;">',
                    preConfirm: function() {
                        return new Promise(function (resolve, reject) {
                            $.ajax({
                                url: '{{ route('student-login') }}',
                                type: 'POST',
                                dataType: 'json',
                                data: {
                                    '_token': $( 'input[name="_token"]' ).val(),
                                    'email': $( '#studentEmail' ).val(),
                                    'password': $( '#studentPassword' ).val()
                                },
                                success: function(serverResponse) {
                                    if (serverResponse.success == true) {
                                        swal.resetDefaults()
                                        swal({
                                            type: 'success',
                                            title: 'Login Success!',
                                            confirmButtonText:
                                                '<i class="fa fa-thumbs-up"></i> Awesome!',
                                            showCancelButton: false
                                        }).then(function(){
                                            window.location.href = '{{ route('home') }}';
                                        })
                                    } else {
                                        var errMsg = '';
                                        $.each(serverResponse.messages, function(k,v) {

                                            errMsg += '<li>';
                                            errMsg += '<strong>' + v + '</strong>';
                                            errMsg += '</li>';

                                        });

                                        swal({
                                            type: 'error',
                                            title: 'Error',
                                            html: '<ul>' + errMsg + '</ul>',
                                            confirmButtonColor: '#d33',
                                            confirmButtonText: '&larr; Go back',
                                            showCancelButton: true
                                        }).then(function() {
                                            thesisArchive.loginAsStudent();
                                        })
                                    }
                                },
                                error: function() {
                                    swal({
                                        type: 'error',
                                        title: 'Opps! Something went wrong.'
                                    })
                                }
                            });
                        });
                    }
                });
            },
            register: function() {
                swal({
                    titleText: 'Register',
                    width: 600,
                    padding: 50,
                    confirmButtonColor: '#D9534F',
                    cancelButtonColor: '#505050',
                    confirmButtonText: 'Submit',
                    showCancelButton: true,
                    animation: false,
                    allowOutsideClick: false,
                    html: '<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">' +
                        '<div id="swal2-content" class="swal2-content" style="display: block;">Your AMA Student ID <span style="color:red">*</span></div>' +
                        '<input class="swal2-input" id="studentID" placeholder="e.g. 2010-0000420" type="text" style="display: block;">' +
                        '<div id="swal2-content" class="swal2-content" style="display: block;">Your Name <span style="color:red">*</span></div>' +
                        '<input class="swal2-input" id="studentName" placeholder="Khloe Delos Reyes" type="text" style="display: block;">' +
                        '<div id="swal2-content" class="swal2-content" style="display: block;">Your AMA email address <span style="color:red">*</span></div>' +
                        '<input class="swal2-input" id="studentEmail" placeholder="khloe.delosreyes@ama.edu.ph" type="email" style="display: block;">' +
                        '<div id="swal2-content" class="swal2-content" style="display: block;">Password <span style="color:red">*</span></div>' +
                        '<input class="swal2-input" id="studentPassword" placeholder="*******" type="password" style="display: block;">' +
                        '<div id="swal2-content" class="swal2-content" style="display: block;">Re-type Password</div>' +
                        '<input class="swal2-input" id="studentConfirmPassword" placeholder="*******" type="password" style="display: block;">',
                    preConfirm: function () {
                        return new Promise(function (resolve, reject) {
                            $.ajax({
                                url: '{{ route('student-registration') }}',
                                type: 'POST',
                                dataType: 'json',
                                data: {
                                    '_token': $( 'input[name="_token"]' ).val(),
                                    'id': $( '#studentID' ).val(),
                                    'name': $( '#studentName' ).val(),
                                    'email': $( '#studentEmail' ).val(),
                                    'password': $( '#studentPassword' ).val(),
                                    'confirm_password': $( '#studentConfirmPassword' ).val()
                                },
                                success: function(serverResponse) {
                                    if (serverResponse.success == true) {
                                        swal.resetDefaults()
                                        swal({
                                            type: 'success',
                                            title: 'All good!',
                                            confirmButtonText:
                                                '<i class="fa fa-thumbs-up"></i> Great!',
                                            showCancelButton: false
                                        }).then(function(){
                                            window.location.href = '{{ route('home') }}';
                                        })

                                    } else {
                                        var errMsg = '';
                                        $.each(serverResponse.messages, function(k,v) {

                                            errMsg += '<li>';
                                            errMsg += '<strong>' + v + '</strong>';
                                            errMsg += '</li>';

                                        });

                                        swal({
                                            type: 'error',
                                            title: 'Error',
                                            html: '<ul>' + errMsg + '</ul>',
                                            confirmButtonColor: '#d33',
                                            confirmButtonText: '&larr; Go back',
                                            showCancelButton: true
                                        }).then(function() {
                                            thesisArchive.register();
                                        })
                                    }
                                },
                                error: function() {
                                    swal({
                                        type: 'error',
                                        title: 'Opps! Something went wrong.'
                                    })
                                }
                            });
                        })
                    },
                    onOpen: function () {
                        $( '#studentID' ).focus()
                    }
                })
            }
        };

        $(document).ready(function() {

            $( '#loginAsStudent' ).click(function() {
                thesisArchive.loginAsStudent();
            });

            $( '#subcribe' ).click(function() {
                thesisArchive.register();
            });
        });
    </script>
    @stack('scripts')
</body>

</html>
