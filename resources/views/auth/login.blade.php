<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Login</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


</head>

<body class="hold-transition login-page" style="background: #e9e9ff">
    <div class="login-box"
        style="display: flex;display: flex;
        width: 100%;
        justify-content: center;
        height: 100vh;
        align-items: center;">
        <div
            style="
            box-shadow: 1px 1px 4px #eee;
            padding: 40px;
            width: 300px;
            background: #fff
        ">
            <center>
                <div class="login-logo">
                    <a href="{{ url('/home') }}"><b>{{ config('app.name') }}</b></a>
                </div>

                <!-- /.login-logo -->

                <!-- /.login-box-body -->
                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">Sign in to start your session</p>

                        <form method="post" action="{{ url('/login') }}">
                            @csrf

                            <div class="input-group mb-3">
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                                    class="form-control @error('email') is-invalid @enderror">
                                <div class="input-group-append">
                                    <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                                </div>
                                @error('email')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <input type="password" name="password" placeholder="Password"
                                    class="form-control @error('password') is-invalid @enderror">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                @error('password')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">Remember Me</label>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>

                            </div>
                        </form>
                        <p class="mb-0">
                            <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
                        </p>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </center>

        </div>

    </div>
    <!-- /.login-box -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"
        integrity="sha512-AJUWwfMxFuQLv1iPZOTZX0N/jTCIrLxyZjTRKQostNU71MzZTEPHjajSK20Kj1TwJELpP7gl+ShXw5brpnKwEg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
