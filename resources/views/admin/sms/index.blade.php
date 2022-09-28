@extends('admin.master')

<style>
            .sms-body{
                           background: #04307D;
            }
</style>


@section('content')
      <div class="container-fluid py-2" style="background: #e5f7f6 !important; min-height:100vh; ">
        <form action="" method="post">
            <h3 class="text-success text-uppercase text-center p-3"> sms Sending all manager</h3>

            <div class="row justify-content-center">
                
                    
                
                <div class="col-lg-8">
    
                    <div class="sms-body p-3 rounded">
                        <div class="mb-3">
                            <label for="message" class="text-light"> মেসেজ </label>
                            <textarea name="message" id="message" class="form-control rounded" rows="4" placeholder="মেসেজ লিখুন"></textarea>
                        </div>
    
                        <div class="mb-3 text-center">
                            <input type="submit" class="btn btn-primary" value="সেন্ড করুন">
                        </div>
    
                    </div>
    
                </div>
             
    
            </div>
    
        </form>
      </div>
@endsection
