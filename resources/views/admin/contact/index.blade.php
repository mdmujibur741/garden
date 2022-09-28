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
                                        <th scope="col"> বাগান </th>
                                        <th scope="col"> নাম </th>
                                        <th scope="col"> ইমেইল </th>
                                        <th scope="col"> ফোন </th>
                                        <th scope="col"> একশন </th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                    @if($contact->count() > 0)
@foreach ($contact as $key=>$item)
    

                                    <tr>
                                        <td> {{$numto->bnNum($key+1)}} </td>
                                    
                                        <td> {{$item->gardenName->garden}} </td>
                                        <td> {{$item->name}} </td>
                                        <td> {{$item->email}} </td>
                                        <td> {{$item->mobile}} </td>
                                        <td class="d-flex"> 
                                             <div class="mx-1">
                                                  <a href="{{route('contact.show',Crypt::encryptString($item->id))}}" class="btn btn-sm btn-primary"> <i class="fas fa-eye text-light"></i>  </a>
                                             </div>
                                            <div class="mx-1">
                                             <form action="{{route('contact.destroy',$item->id)}}" method="post">
                                                  @csrf
                                                  @method('delete')
                                                  <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash text-light"></i> </button>
                                             </form>
                                            </div>
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
                              {{$contact->links()}} 
                         </div>
                    </div>
               </div>
              </div>
          </div>
  
@endsection