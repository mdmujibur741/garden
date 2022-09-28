
@extends('frontend.master')

@section('content')
    



<section class="notice_list_section">
    <div class="container-fluid">
        <h3 class="text_shadow"><b> নোটিস তালিকা</b></h3>
        <div class="row px-3">
           <div class="table-responsive ">
            <table class="table table-sm text-center table-bordered border-dark table-hover">
                <thead>
                    <tr>
                        <th width="15%">ক্রমিক</th>
                        <th width="50%"> টাইটেল </th>
                        <th width="20%"> তারিখ </th>
                        <th width="15%"> প্রিন্ট </th>

                    </tr>

                </thead>
                <tbody>
                    @if($notice->count() > 0)
                    @foreach ($notice as $key=>$item)
                    <tr>
                        <td >{{++$key}} </td>
                        <td > {{$item->title}} </td>
                        <td>  {{$item->created_at->format('M d, Y')}} </td>
                         <td> <a href="{{route('tea.pdf',$item->id)}}" class="btn btn-sm btn-primary"> <i class="fa-solid fa-print"></i> </a> </td>
                      
                    </tr>

                    @endforeach
                   @endif
                
                  
                </tbody>
            </table>
           </div>

           <div class="d-flex justify-content-center">
                 {{$notice->links()}}
           </div>

        </div>
    </div>
</section>



@endsection