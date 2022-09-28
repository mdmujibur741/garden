<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('custom/css/bootstrap.min.css')}}">

    <title>Password Change</title>

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{asset('custom/css/style.css')}}">

</head>

<body>
        <div class="change_password">
              <div class="container">
                
                  <div class="row justify-content-center">
                       <div class="col-sm-12 col-md-5 shadow-lg change_password_form rounded">
                        <h4 class="text-center text-light text-bolder fs-3">Password Change</h4>
                            @include('error.error')
                           <form action="{{route('password.update')}}" method="POST">
                             @csrf
                             <input type="hidden" name="token" value="{{ $token }}">
                               <div class="mb-3">
                                <label for="email" class="text-light">Email</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                               </div>
                               <div class="mb-3">
                                <label for="new_password" class="text-light">New Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter New Password" id="new_password">
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password" class="text-light">Retype Password</label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Retype Password" id="confirm_password">
                            </div>
                            <div class="mb-3 text-center">
                                <input type="submit" class="btn password_btn text-light" value="Change Password">
                            </div>
                           </form>
                       </div>
                  </div>
              </div>
        </div>

</body>
</html>