<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('custom/css/bootstrap.min.css')}}">

    <title>Reset Password</title>

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{asset('custom/css/style.css')}}">

</head>

<body>

    <div class="forget_password">
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-5 forget_password_form shadow-lg">

                    <h4 class="text-center text-light text-bolder fs-3">Forget Password</h4>

                    @include('error.error')
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{route('password.email')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="text-light">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        <div class="mb-2 text-center">
                            <input type="submit" class="btn forget_password_btn text-light" value="Password Reset">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>