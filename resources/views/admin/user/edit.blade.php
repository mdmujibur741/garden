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
                    <form action="{{ route('user.update',$user->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')




                        <div class="mb-3">
                            <label for="garden">বাগান </label>
                             <select name="garden_id" id="garden" class="form-control form-control-sm">
                                 <option value="" selected disabled> নির্বাচন করুন </option>

                                 @if($garden->count() > 0)
                                   @foreach ($garden as $item)
                                   <option value="{{$item->id}}" @if($item->id == $user->garden_id) selected  @endif > {{$item->garden}} </option>
                                   @endforeach
                                 @endif
                             </select>
                        </div>


  

                        <div class="mb-3">
                            <label for="name"> নাম</label>
                            <input type="text" name="name" class="form-control form-control-sm" id="name" placeholder="ব‌্যাবহারকারির নাম" value="{{$user->name}}">
                        </div>

                        <div class="mb-3">
                            <label for="email"> ইমেইল </label>
                            <input type="email" name="email" id="email" class="form-control form-control-sm" placeholder=" ব‌্যাবহারকারির ইমেইল " value="{{$user->email}}">
                        </div>

                        <div class="mb-3">
                            <label for="password"> পাসওয়ার্ড <small> (যদি পাসওয়ার্ড বদলাতে চান) </small> </label>
                            <input type="password" name="password" id="password" class="form-control form-control-sm" placeholder="ব‌্যাবহারকারির পাসওয়ার্ড">
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary" value=" আপডেট ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
