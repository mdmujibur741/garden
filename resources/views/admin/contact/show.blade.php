@extends('admin.master')
@section('content')
   
<style>
          .card-header{
                         background:  #8999df;
          }
          .card-body{
                        background: #d9ddee;
          }
          th,td{
                       border: 1px solid #5b5d6a !important;
          }
          
</style>


    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <h3 class="text-center"> {{$contact->gardenName->garden}}  </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered border-dark">
                    <thead>
                     
                      <tr>
                        <th width="20%"> বাগান নাম </th>
                        <td width="80%">  {{$contact->gardenName->garden}} </td>
                        
                      </tr>

                      <tr>
                        <th width="20%"> নাম </th>
                        <td width="80%">  {{$contact->name}} </td>
                        
                      </tr>

                      <tr>
                        <th width="20%"> ইমেইল </th>
                        <td width="80%"> {{$contact->email}} </td>
                        
                      </tr>
                      <tr>
                        <th width="20%"> মোবাইল </th>
                        <td width="80%"> {{$contact->mobile}} </td>
                        
                      </tr>
                      <tr>
                        <th width="20%"> মেসেজ </th>
                        <td width="80%"> {{$contact->message}} </td>
                        
                      </tr>
                     
                    
                    </thead>
                    
                  </table>
                            
            </div>
          </div>
        </div>

    </div>
@endsection
