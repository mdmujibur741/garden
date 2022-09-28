<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('custom/css/bootstrap.min.css')}}">

    <title>Login</title>

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{asset('custom/css/style.css')}}">

</head>

<body>
    <div class="login_page">
        <div class="container">
       
            <div class="row justify-content-center">
               
                <div class="col-sm-12 col-md-5 log_form rounded shadow-lg">
                     <h4 class="text-center text-light text-bolder fs-3">LOGIN PAGE</h4>
                 

                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label text-light"> Email </label>
                            <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter Your Email" required autocomplete="email" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-light">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required placeholder="Enter Your Password" required autocomplete="current-password">
                        </div>
                        <div class="mb-3 text-center">
                            <input type="submit" class="btn log_btn" name="submit" value="LOG IN">
                        </div>
                           <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label text-light" for="remember">
                              Remember me
                        </label>
                    </div>
                    <div class="mb-2 text-center">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

</body>

</html>