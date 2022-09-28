<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
   {{-- toastr css --}}
  <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">

  @yield('style')
  


  <style>
            .bg{
                      background: #04307d !important;
            }
  </style>


</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include('admin.partial.topnav')

     @include('admin.partial.sidenav')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   


    <!-- Main content -->
    <div class="content">
    
      <div class="container-fluid mt-4">
        @yield('content')
      </div>
      
    
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('admin/dist/js/adminlte.js')}}"></script>

{{-- toastr js --}}
<script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script>
<script>
        @if (Session::has('success'))
           toastr.success("{{ Session::get('success') }}");
         @endif
</script>

@yield('script')

</body>
</html>
