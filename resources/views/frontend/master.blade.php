<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Home Page </title>
  <link rel="stylesheet" href="{{asset('frontend/asset/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/asset/css/home.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/asset/css/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
 {{-- toastr css --}}
 <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">
</head>

<body class="landing_body">
  <header class="home_header_section">
    <div class="container-fluid">
      <div class="row row-eq-height py-5 pe-4">

        <div class="col-lg-6 col-sm-12 pt-4">
        
          <div class="d-flex justify-content-center">
            <div>
          <img src="@if($setting ==!null){{asset($setting->logo)}} @endif" alt="gov logo" class="rounded-circle home_header_logo " srcset="">
        </div>
        <div class="ms-5">
          <span class="text-light fs-2"><b>মৌলভীবাজার চা বাগান </b></span><br>
          <span class="text-light fs-4 justify-content-center"><b>MOULVIBAZAR TEA GARDEN</b></span>
        </div>

      </div>
        </div>

        <div class="col-lg-6 col-sm-12 head_img col-sm-none">

          <div class="d-flex">
            <div class="d-none d-md-block d-lg-block d-sm-none w-100"> 
              <img src="@if($setting ==!null){{asset($setting->headImgOne)}} @endif" alt="" class="img-thumbnail w-100">
            </div>
            <div class="d-none d-md-block d-lg-block d-sm-none w-100">
              <img src="@if($setting ==!null){{asset($setting->headImgTwo)}} @endif" alt="" class="img-thumbnail w-100">
            </div>
            <div class="d-none d-md-block d-lg-block d-sm-none w-100">
              <img src="@if($setting ==!null){{asset($setting->headImgThree)}} @endif" alt="" class="img-thumbnail w-100">
            </div>
          </div>
        </div>





      </div>
    </div>
  </header>
  



<!-- nav start -->
<div class="nav_section my-3 d-flex justify-content-lg-center">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item px-2">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('tea.home')}}"><b>হোম</b></a>
                    </li>
                    
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="{{route('tea.list')}}"><b>বাগান তালিকা</b></a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="{{route('tea.notice')}}"><b>নোটিস সমূহ</b></a>
                    </li>
                  
                     <li class="nav-item px-2">
                        <a class="nav-link text-white" href="{{route('tea.contact')}}"><b>যোগাযোগ</b></a>
                    </li>

                 

               


                    @if(Auth::check())

                    <li class="nav-item dropdown px-2">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                          role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>  বাগান</b>
                      </a>
                      <ul class="dropdown-menu drop_bg" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item text-white" href="{{route('tea.profile')}}">প্রোফাইল</a></li>
                          <li><a class="dropdown-item text-white" href="{{route('tea.edit')}}"> প্রোফাইল এডিট</a></li>

                      </ul>
                  </li>



                    <li class="nav-item px-2">
                      <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                       <b>লগআউট</b>
                   </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                       @csrf
                   </form>


                  </li>
                    @else
                    <li class="nav-item px-2">
                      <a class="nav-link text-white" href="{{route('login')}}"><b> লগইন </b></a>
                  </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- nav end -->





@yield('content')











  <!-- footer start -->
  <footer class="footer_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-md-4">

          <div class="complane text-justify ps-3 py-4">
            <h5><b>অভিযোগ বা পরামর্শ</b></h5>
            <div class="item">
              <i class="fa-solid fa-envelope"></i> dcmoulvibazar@mopa.gov.bd
            </div>
            <div class="item">
              <i class="fa-solid fa-envelope"></i> adcgmoulvibazar@mopa.gov.bd
            </div>
            <div class="item">
              <i class="fa-solid fa-envelope"></i> acgeneralmoulvibazar@yahoo.com
            </div>

          </div>

        </div>
        <div class="col-sm-12 col-md-4 mb-2">

          <div class="contact_office text-justify ps-3">
            <h5 class=""><b>যোগাযোগ</b></h5>
            <p>জেলা প্রশাসকের কার্যালয়
              মৌলভীবাজার</p>

            <div class="item">
              <i class="fa-solid fa-phone"></i>০৮৬১-৬৩২০২(অফিস)
            </div>
            <div class="item">
              <i class="fa-solid fa-phone"></i>০৮৬১-৬৩৩৩৩(অফিস)
            </div>
            <div class="item">
              <i class="fa-solid fa-phone"></i>০৮৬১-৬৩০৩৭(অফিস)
            </div>
            <div class="item">
              <i class="fa-solid fa-phone"></i>০৮৬১-৬৩২০১(বাসা)
            </div>
            <div class="item">
              <i class="fa-solid fa-phone"></i>০৮৬১-৫২৯৬৬ (বাসা)
            </div>

          </div>

        </div>
        <div class="col-sm-12 col-md-4 mb-2">

          <div class="importent_link text-justify ps-3">
            <h5 class=""><b>গুরুত্বপূর্ণ লিঙ্ক</b></h5>

            <div class="item">
              <i class="fa-solid fa-up-right-from-square"></i> <a href="http://www.moulvibazar.gov.bd/"
                target="_blank">মৌলভীবাজার তথ্যবাতায়ন</a>
            </div>
            <div class="item">
              <i class="fa-solid fa-up-right-from-square"></i> <a href="http://services.portal.gov.bd/"
                target="_blank">বাংলাদেশ সেবাকুঞ্জ</a>
            </div>
            <div class="item">
              <i class="fa-solid fa-up-right-from-square"></i> <a href="http://www.police.gov.bd/"
                target="_blank">বাংলাদেশ পুলিশ</a>
            </div>
            <div class="item">
              <i class="fa-solid fa-up-right-from-square"></i> <a href="http://www.passport.gov.bd/"
                target="_blank">বাংলাদেশ পাসপোর্ট অফিস</a>
            </div>
            <div class="item">
              <i class="fa-solid fa-up-right-from-square"></i> <a href="https://secure.incometax.gov.bd/TINHome"
                target="_blank">ই-টিন রেজিস্ট্রেশন</a>
            </div>
            <div class="item">
              <i class="fa-solid fa-up-right-from-square"></i> <a href="https://services.nidw.gov.bd/nid-pub/fees"
                target="_blank">জাতীয় পরিচয় পত্রের সেবা সংক্রান্ত</a>
            </div>
            <div class="item">
              <i class="fa-solid fa-up-right-from-square"></i> <a
                href="http://www.brta.gov.bd/newsite/bn/%E0%A6%B9%E0%A7%8B%E0%A6%AE/" target="_blank">বাংলাদেশ রোড
                ট্রান্সপোর্ট অথরিটি</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer>
  <!-- footer end -->

 
  <script src="{{asset('frontend')}}/asset/js/popper.min.js"></script>
  <script src="{{asset('frontend')}}/asset/js/bootstrap.min.js"></script>
  {{-- toastr js --}}
<script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script>
<script>
        @if (Session::has('success'))
           toastr.success("{{ Session::get('success') }}");
         @endif
</script>
</body>

</html>