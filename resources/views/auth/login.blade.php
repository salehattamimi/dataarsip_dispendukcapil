<!DOCTYPE html>
<html lang="en">
<head>
    <title>{!! (env("APP_NAME"))!!}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{(asset('favicon.png'))}}" type="image/x-icon">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets_login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets_login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets_login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets_login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets_login/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets_login/css/main.css">
    <!--===============================================================================================-->
</head>
<body style="background-color: #52c2b6 !important">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="assets_login/images/SIDAR-02.png" alt="IMG">
            </div>

            <form method="POST" action="{{ url('/login') }}" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title">
                        Login
                    </span>
                @if (session()->has('messages'))
                <div class="alert alert-warning alert-styled-left">
                    <button type="button" class="close" data-dismiss="alert">
                        <span>×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <span class="text-semibold">Gagal!</span> {{ session()->get('messages') }}
                    {{session()->forget('messages')}}
                </div>
                @endif
                @if ($errors->has('username'))
                <div class="alert alert-warning alert-styled-left">
                    <button type="button" class="close" data-dismiss="alert">
                        <span>×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <span class="text-semibold">Gagal!</span> {{ $errors->first('username') }}
                </div>
                @endif

                <div class="wrap-input100 validate-input" data-validate="Valid username is required: abcdefg">
                    <input type="text"
                           class="input100 {{ $errors->has('username') ? ' is-invalid' : '' }}"
                           placeholder="Enter User Name" id="username" name="username"
                           value="{{ old('user_name') }}" required autofocus>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input type="password" placeholder="Password"
                           class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}"
                           name="password" required/>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                </div>
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-12"> <span class="txt1"
for="remember">  <input class="form-check-input" type="checkbox"
name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>  {{
__('Remember Me') }} </span> <a class="txt2" href="assets_login/#"> </a>
</div>  </form> </div> <style> .footer { position: fixed; left: 0; bottom: 0;
width: 100%; color: white; text-align: center; } </style> <div class="footer"
style=""> <span class="form-text text-center text-muted"> &copy; 2021. <a
href="#">Data Dispendukcapil Kediri</a>  </span> </div> </div> </div>


<!--===============================================================================================-->
<script src="assets_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="assets_login/vendor/bootstrap/js/popper.js"></script>
<script src="assets_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="assets_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="assets_login/vendor/tilt/tilt.jquery.min.js"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="assets_login/js/main.js"></script>

</body>
</html>