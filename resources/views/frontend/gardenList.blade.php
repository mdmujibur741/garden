@extends('frontend.master')

@section('content')
    

    <!-- ==================== GARDEN LIST SECTION START==================  -->

    <section class="garden_list_section">
        <div class="container-fluid">
            <h3 class="text_shadow"><b>বাগান তালিকা</b></h3>
            <div class="row px-3">
               <div class="table-responsive ">
                <table class="table text-center table-bordered border-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ক্রমিক</th>
                            <th scope="col">বাগান নাম</th>
                            <th scope="col">মালিক</th>
                            <th scope="col">ব‌্যাবস্থাপক নাম</th>
                            <th scope="col">মালিক মোবাইল নম্বর</th>
                            <th scope="col">ব‌্যাবস্থাপক মোবাইল নম্বর</th>

                        </tr>

                    </thead>
                    <tbody>
                        @if($gardenList->count() > 0)
                        @foreach ($gardenList as $key=>$item)
                            


                        <tr>
                            <td scope="row"> {{$key+1}} </td>
                            <td> {{$item->garden}} </td>
                            <td> {{$item->owner}} </td>
                            <td> {{$item->manager}} </td>
                            <td> {{$item->ownMob}} </td>
                            <td> {{$item->manaMob}} </td>
                          
                            
                        </tr>

                        @endforeach
                     
                   
                       @endif
                    
                      
                    </tbody>
                </table>
               </div>

               <div class="d-flex justify-content-center">
                     {{$gardenList->links()}}
               </div>

            </div>
        </div>
    </section>




    <!-- ==================== GARDEN LIST SECTION END====================  -->

    @endsection