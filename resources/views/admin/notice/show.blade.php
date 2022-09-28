@extends('admin.master')
@section('content')
    @php
        
        use Rakibhstu\Banglanumber\NumberToBangla;
        $numto = new NumberToBangla();
    @endphp


    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <h3> {{$notice->title}} </h3>
            </div>
            <div class="card-body">
                      
                                {!! $notice->description !!}
            </div>
          </div>
        </div>

    </div>
@endsection
