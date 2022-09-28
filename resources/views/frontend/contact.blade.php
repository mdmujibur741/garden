@extends('frontend.master')
@section('content')
    


    <!-- CONTACT SECTION START -->
    <section class="contact_section p-5">
        <div class="container-fluid">
            {{-- <div class="row justify-content-center">
                <div class="col-8 mb-5">
                    <h3 class="text_shasow contact_title text-center py-2"><b>যোগাযোগ করুন</b></h3>
                        @include('error.error')
                </div>
            </div> --}}
            <form action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">
                    
                    <div class="col-sm-12 col-lg-4">
                        <div class="mb-3">
                            <label for="name"><b>নাম</b></label>
                            <input type="text" name="name" class="form-control rounded" id="name" placeholder="নাম লিখুন">
                        </div> 
                        
                    </div>
                     <div class="col-sm-12 col-lg-4">
                        <div class="mb-3">
                            <label for="email"><b>ইমেইল</b></label>
                            <input type="text" name="email" class="form-control rounded" id="email" placeholder="ইমেইল লিখুন">
                        </div>
                     </div>

                     <div class="col-sm-12 col-lg-8">
                        <div class="mb-3">
                            <label for="phone"><b>মোবাইল</b></label>
                            <input type="text" name="mobile" class="form-control rounded" id="phone" placeholder="মোবাইল নং লিখুন">
                        </div>
                     </div>

                     <div class="col-sm-12 col-lg-8">
                        <div class="mb-3">
                            <label for="message"><b>মেসেজ</b></label>
                             <textarea name="message" id="message" class="form-control rounded" rows="4"></textarea>
                        </div>
                     </div>
                     <div class="mb-3 text-center">
                         <input type="submit" value="সাবমিট" class="btn">
                     </div>
                   
                </div>
            </form>
            
        </div>
    </section>
    <!-- CONTACT SECTION END -->


    @endsection