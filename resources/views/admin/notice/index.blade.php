@extends('admin.master')
@section('content')
   @php
       
       use Rakibhstu\Banglanumber\NumberToBangla;
       $numto = new NumberToBangla();
   @endphp    


          <div class="row">
             
          </div>
          <div class="row">
              <div class="col-12">
               <div class="card">
                    <div class="card-header">
                         <h2 class="text-center">eoijwreoiow</h2>
                    </div>
                    <div class="card-body">
                         <div class="table-responsive">
                              <table class="table table-bordered">
                                   <thead>
                                       <tr>
                                        <th scope="col"> ক্রমিক </th>
                                        <th scope="col"> টাইটেল </th>
                                        <th scope="col"> নোটিস বডি </th>
                                        <th scope="col"> একটিভ/ ডিএকটিভ </th>
                                        <th scope="col"> একশন </th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                    @if($notice->count() > 0)
@foreach ($notice as $key=>$item)
    

                                    <tr>
                                        <td> {{$numto->bnNum($key+1)}} </td>
                                        <td> {{$item->title}} </td>
                                        <td> {{  Str::limit($item->description, 30) }} </td>
                                         <td>
                                                @if($item->status == 1)
                                               <a href="{{route('notice.status',$item->id)}}" class="btn btn-sm btn-primary">Active</a>
                                               @else
                                               <a href="{{route('notice.status',$item->id)}}" class="btn btn-sm btn-danger">Deactive</a>
                                               @endif
                                         </td>
                                        <td class="d-flex justify-content-center"> 
                                                                                
                                                  <a href="{{route('notice.show',$item->id)}}" class="btn btn-sm btn-info"> <i class="fas fa-eye text-light"> </a>
                                         

                                                  <a href="{{route('notice.edit',Crypt::encryptString($item->id))}}" class="btn btn-sm btn-primary"> <i class="fas fa-edit text-light"></i></a>
 
                                             <form class="d-inline-block" action="{{route('notice.destroy',$item->id)}}" method="post">
                                                  @csrf
                                                  @method('delete')
                                                  <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash text-light"></i> </button>
                                             </form>
                                      
                                        
                                          
                                        </td>
                                      </tr>
                                      @endforeach
                                      @else
                                      <tr>
                                          <td colspan="4"> <h4 class="text-success"> তথ‌্য ডাটাবেজে নাই </h4 class="text-success"> </td>
                                      </tr>
                                    @endif
                                   </tbody>
                              </table>
                          </div>
                    </div>
                    <div class="card-footer">
                         <div class="d-flex justify-content-center">
                              {{$notice->links()}} 
                         </div>
                    </div>
               </div>
              </div>
          </div>
  
@endsection