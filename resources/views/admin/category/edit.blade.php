@extends('admin.master')
@section('content')
    <div class="row">

    </div>
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Edit</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="name">বাগান শ্রেনীর নাম</label>
                            <input type="text" name="name" class="form-control" placeholder="বাগান শ্রেনীর নাম" value="@if($category ==!null){{$category->name}}@endif">
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary" value="আপডেট">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
