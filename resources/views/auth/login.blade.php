<!DOCTYPE html> 
<html > 
    <head> 
        <meta charset="UTF-8"> 
        <!-- CSRF Token --> 
        <meta name="csrf-token" content="{{ csrf_token() }}"> 
 
        <title>{{ config('app.name', 'AMA Thesis Archive') }}</title> 
 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> 
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'> 
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'> 
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'> 
        <link rel="stylesheet" href="../css/style.css"> 
    </head> 
 
    <body> 
        <div class="container"> 
        </div> 
        <div class="form"> 
            <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div> 
            <!-- <form class="register-form"> 
                <input type="text" placeholder="name"/> 
                <input type="password" placeholder="password"/> 
                <input type="text" placeholder="email address"/> 
                <button>create</button> 
                <p class="message">Already registered? <a href="#">Sign In</a></p> 
            </form> --> 
            <form class="form-horizontal login-form" role="form" method="POST" action="{{ route('login') }}"> 
                {{ csrf_field() }} 
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> 
                    <div class="col-md-6"> 
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email address" required autofocus /> 
 
                        @if ($errors->has('email')) 
                            <span class="help-block"> 
                                <strong>{{ $errors->first('email') }}</strong> 
                            </span> 
                        @endif 
                    </div> 
                </div> 
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"> 
                    <div class="col-md-6"> 
                        <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="password" required autofocus /> 
 
                        @if ($errors->has('password')) 
                            <span class="help-block"> 
                                <strong>{{ $errors->first('password') }}</strong> 
                            </span> 
                        @endif 
                    </div> 
                </div> 
                <button>login</button> 
                <!--<p class="message">Not registered? <a href="#">Create an account</a></p> --> 
            </form> 
        </div> 
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
        <script src="../js/index.js"></script> 
    </body> 
</html> 