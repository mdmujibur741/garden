
@extends('frontend.master')

@section('content')
    


  <!-- landing section start -->
  <section class="landing_section bg">
    <div class="container-fluid pt-3">
      <div class="row row-eq-height">
        <div class="col-sm-12 col-lg-3 mb-3">
          <!-- garden about start -->
          <div class="home_one p-2">
            <h5 class="title pt-2 pb-1"><b>বাগান বিষয়ক তথ‌্য</b></h5>
            <p class="px-2 pt-2"> বাংলাদেশ মোট ১৬৭ টি চা বাগান রয়েছে । চা বাগানের জন্য বিখ্যাত সিলেট বিভাগ এর
              মৌলভীবাজারে । এর মধ্যে ৯২ টি
              চা বাগানই মৌলভীবাজারে অবস্থিত । মৌলভীবাজারের শ্রীমঙ্গল উপজেলাকে চায়ের রাজধানী বলে দেশে সুপরিচিত । চা
              বাগানের নজরকাড়া সৌন্দর্য দেখতে প্রতিদিন প্রচুর পর্যটক আসে মৌলভীবাজারে । মাইলের পর মাইল চা বাগান এবং
              পাহাড়ের ঢাল এ যেন প্রকৃতির এর অপার সৌন্দর্য । </p>
          </div>
          <!-- garden about end -->
        </div>
        <div class="col-sm-12 col-lg-6 mb-3">
          <!-- slider start -->
          <div class="home_two">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="@if($setting ==!null){{asset($setting->SlidImgOne)}} @endif" class="caro_img d-block w-100 rounded img-thumbnail" alt="garden image">
                </div>
                <div class="carousel-item">
                  <img src="@if($setting ==!null){{asset($setting->SlidImgTwo)}} @endif" class="caro_img d-block w-100 rounded img-thumbnail" alt="garden image">
                </div>
                <div class="carousel-item">
                  <img src="@if($setting ==!null){{asset($setting->SlidImgThree)}} @endif" class="caro_img d-block w-100 rounded img-thumbnail" alt="garden image">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon fw-5" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon fw-5" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <!-- slider end --->
        </div>

        <div class="col-sm-12 col-lg-3 mb-3">
          <div class="home_three p-2">
            <h5 class="title pt-2 pb-1"><b>নোটিস বোর্ড</b></h5>
            <table class="table table-bordered border-light">
              <thead>
                <tr>
                  <th style="width: 10%;">ক্রমিক</th>
                  <th style="width: 70%;">নোটিস</th>
                  <th style="width: 20%;"> প্রিন্ট </th>

                </tr>

              </thead>
              <tbody>

                @if($notice->count() > 0)
                @foreach ($notice as $key=>$item)
                <tr>
                  <td> {{$key+1}} </td>
                  <td> {{$item->title}} </td>
                  <td class="text-center"> <a href="{{route('tea.pdf',$item->id)}}" target="_blank" class="btn btn-sm btn-primary"> <i class="fa-solid fa-print"></i> </a> </td>
                </tr>
                @endforeach
                 @endif
              
               

              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </section>

  @endsection
 