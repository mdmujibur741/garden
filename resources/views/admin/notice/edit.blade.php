@extends('admin.master')
@section('content')
    <div class="row">

    </div>
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center"> নোটিস  এডিট </h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('notice.update',$notice->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="title"> টাইটেল  </label>
                            <input type="text" name="title" class="form-control" placeholder="টাইটেল লিখুন" value="{{$notice->title}}">
                        </div>

                        <div class="mb-3">
                              <label for=""> নোটিস লিখুন </label>
                              <textarea name="description" id="summernote" rows="8"> {!!$notice->description!!} </textarea>
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


@section('style')
<link rel="stylesheet" href="{{asset('admin')}}/plugins/summernote/summernote-bs4.min.css">
@endsection


@section('script')
<script src="{{asset('admin')}}/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $(function () {
      // Summernote
      $('#summernote').summernote()
      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai",
        
      });
    })
  </script>
@endsection