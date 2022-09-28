@extends('admin.master')
@section('content')
    <div class="row">

    </div>
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">eoijwreoiow</h2>
                    @include('error.error')
                </div>
                <div class="card-body">
                    <form action=" @if($setting == null){{ route('setting.store') }}@else {{ route('setting.update',$setting->id) }} @endif" method="post" enctype="multipart/form-data">
                        @csrf
                       @if($setting ==!null) @method('put') @endif



                       <label for=""> লগো </label>
                        <div class="input-group mb-3">
                          
                            <div class="custom-file">
                                <input type="file" name="logo" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01"> লগো ছবি আপলোড  </label>
                              </div>
                              <img src="{{asset($setting->logo)}}" width="100px" class="float-right rounded-circle img-thumbnail" alt="" srcset="">
                        </div> 

                     

                      <label for=""> ১ম হেডার ছবি </label>
                        <div class="input-group mb-3">
                          
                            <div class="custom-file">
                                <input type="file" name="headImgOne" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01"> ১ম হেডার ছবি আপলোড  </label>
                              </div>
                              <img src="{{asset($setting->headImgOne)}}" width="220px" height="100px" class="float-right img-thumbnail" alt="" srcset="">
                        </div> 

                        <label for="">২য় হেডার ছবি</label>
                        <div class="input-group mb-3">
                          
                            <div class="custom-file">
                                <input type="file" name="headImgTwo" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01"> ২য় হেডার ছবি আপলোড </label>
                              </div>
                              <img src="{{asset($setting->headImgTwo)}}" width="220px" height="100px" class="float-right img-thumbnail" alt="" srcset="">
                        </div> 


                        <label for="">৩য় হেডার ছবি</label>
                        <div class="input-group mb-3">
                          
                            <div class="custom-file">
                                <input type="file" name="headImgThree" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01"> ৩য় হেডার ছবি আপলোড </label>
                              </div>
                              <img src="{{asset($setting->headImgThree)}}" width="220px" height="100px" class="float-right img-thumbnail" alt="" srcset="">
                        </div> 


                        <label for=""> ১ম স্লাইডার ছবি</label>
                        <div class="input-group mb-3">
                          
                            <div class="custom-file">
                                <input type="file" name="SlidImgOne" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01"> ১ম স্লাইডার ছবি আপলোড </label>
                              </div>
                              <img src="{{asset($setting->SlidImgOne)}}" width="220px" height="100px" class="float-right img-thumbnail" alt="" srcset="">
                        </div> 

                        <label for="">২য় স্লাইডার ছবি</label>
                        <div class="input-group mb-3">
                          
                            <div class="custom-file">
                                <input type="file" name="SlidImgTwo" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01"> ২য় স্লাইডার ছবি আপলোড </label>
                              </div>
                              <img src="{{asset($setting->SlidImgTwo)}}" width="220px" height="100px" class="float-right img-thumbnail" alt="" srcset="">
                        </div> 




                        <label for="">৩য় স্লাইডার ছবি</label>
                        <div class="input-group mb-3">
                          
                            <div class="custom-file">
                                <input type="file" name="SlidImgThree" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01"> ৩য় স্লাইডার ছবি আপলোড </label>
                              </div>
                              <img src="{{asset($setting->SlidImgThree)}}" width="220px" height="100px" class="float-right img-thumbnail" alt="" srcset="">
                        </div> 

                          

                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary" value="সাবমিট">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
