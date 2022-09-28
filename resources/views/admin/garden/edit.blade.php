@extends('admin.master')
@section('content')
<style>
        .cardBody{
                     background: #2479c3!important;
        }

        .card-header,.card-footer{
                    background: #04307D;
        }
</style>


    <div class="row">

    </div>
    <div class="row ">
    
            <div class="card w-100">
                <div class="card-header ">
                    <h2 class="text-center">eoijwreoiow</h2>
                      @include('error.error')
                </div>
                <div class="card-body cardBody">
                    <form action="{{ route('garden.update',$garden->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                         









                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="garden">বাগান নাম</label>
                                    <input type="text" id="garden_name" name="garden" class="form-control form-control-sm" value="{{$garden->garden}}">
                                </div>
                                
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="garden_class">বাগান শ্রেণী</label>
                                     <select name="cat_id" id="garden_class" class="form-control form-control-sm">
                                        <option disabled selected value="">নির্বাচন করুন</option>

                                        @if($category->count() > 0)
                                        @foreach ($category as $item)
                                        <option value="{{$item->id}}" @if($garden->cat_id == $item->id) selected @endif> {{$item->name}} </option>
                                        @endforeach
                                        @endif
                                       
                                       
                                     </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="owner">মালিকের নাম</label>
                                    <input type="text" id="owner_name" name="owner" class="form-control form-control-sm" value="{{$garden->owner}}">
                                </div>
                                <div class="mb-3">
                                    <label for="ownerFather">মালিকের পিতার নাম </label>
                                    <input type="text" id="owner_father_name" name="ownFat" class="form-control form-control-sm" value="{{$garden->ownFat}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="ownerNid">মালিকের ভোটার আইডি নং( ইংরেজিতে)</label>
                                    <input type="text" id="nid_number" name="ownNid" class="form-control form-control-sm" value="{{$garden->ownNid}}">
                                </div>
                                <div class="mb-3">
                                    <label for="owner_tin_number">মালিকের টিন নং (TIN NO) ইংরেজিতে </label>
                                    <input type="text" id="owner_tin_number" name="ownTin" class="form-control form-control-sm" value="{{$garden->ownTin}}">
                                </div>
        
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="owner_mobile">মালিকের মোবাইল নং (ইংরেজিতে)</label>
                                    <input type="text" id="owner_mobile" name="ownMob" class="form-control form-control-sm" value="{{$garden->ownMob}}">
                                </div>
                                <div class="mb-3">
                                    <label for="email">মালিকের ইমেইল (ইংরেজিতে) </label>
                                    <input type="text" id="email" name="ownEml" class="form-control form-control-sm" value="{{$garden->ownEml}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="manager_name"> ব্যাবস্থাপক নাম </label>
                                    <input type="text" id="manager_name" name="manager" class="form-control form-control-sm" value="{{$garden->manager}}">
                                </div>
                                <div class="mb-3">
                                    <label for="manager_father_name">ব্যাবস্থাপক পিতার নাম </label>
                                    <input type="text" id="manager_father_name" name="manaFat" class="form-control form-control-sm" value="{{$garden->manaFat}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="owner_address">মালিকের ঠিকানা</label>
                                    <textarea name="ownAdr" id="owner_address" rows="2" class="form-control form-control-sm rounded">{{$garden->ownAdr}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="manager_address">ব্যাবস্থাপতকর ঠিকানা</label>
                                    <textarea name="manaAdr" id="manager" rows="2"  class="form-control form-control-sm rounded"> {{$garden->manaAdr}} </textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="manager_nid_number"> ব্যাবস্থাপক ভোটার আইডি নং(ইংরেজিতে)</label>
                                    <input type="text" id="manager_nid_number" name="manaNid" class="form-control form-control-sm" value="{{$garden->manaNid}}">
                                </div>
        
        
        
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="manager_tin_number">ব্যাবস্থাপক টিন নং (TIN NO ,ইংরেজিতে) </label>
                                    <input type="text" id="manager_tin_number" name="manaTin" class="form-control form-control-sm" value="{{$garden->manaTin}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="owner_mobile">ব্যাবস্থাপকের মোবাইল নং (ইংরেজিতে)</label>
                                    <input type="text" id="owner_mobile" name="manaMob" class="form-control form-control-sm" value="{{$garden->manaMob}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="email">ব্যাবস্থাপকের ইমেইল (ইংরেজিতে)</label>
                                    <input type="text" id="email" name="manaEml" class="form-control form-control-sm" value="{{$garden->manaEml}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="partners">বাগানের অংশীদারগনের নাম (যদি থাকে) </label>
                                    <input type="text" id="partners" name="partner" class="form-control form-control-sm" value="{{$garden->partner}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="partner_address">অংশীদারগনের ঠিকানা (যদি থাকে) </label>
                                    <input type="text" id="partnerAddress" name="partAdr" class="form-control form-control-sm" value="{{$garden->partAdr}}">
                                </div>
                            </div>
        
        
                            <!-- ==================================================== -->
                            <!-- বাগানের অবস্থান বিষয়ক তথ্য -->
                            <!-- ==================================================== -->
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="upazila">উপজেলা নাম </label>
                                    <select name="upozela_id" id="upazila" class="form-control form-control-sm">
                                          <option value="" selected disabled>নির্বাচন করুন উপজেলা</option>
                                         
                                          @if($upozela->count() > 0)
                                        @foreach ($upozela as $item)
                                        <option value=" {{$item->id}}" @if($garden->upozela_id == $item->id) selected @endif> {{$item->name}} </option>
                                        @endforeach
                                        @endif

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="mouza"> মৌজার নাম</label>
                                    <input type="text" id="mouza" name="mouza" class="form-control form-control-sm" value="{{$garden->mouza}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="zl_no"> জে. এল নম্বর </label>
                                    <input type="text" id="zl_no" name="zlNo" class="form-control form-control-sm" value="{{$garden->zlNo}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="lease_deed">লীজ ডীড নম্বর </label>
                                    <input type="text" id="lease_deed" name="leaDed" class="form-control form-control-sm" value="{{$garden->leaDed}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="lease_deed_date">লীজ ডীড তারিখ </label>
                                    <input type="date" id="lease_deed_date" name="leaDedDat" class="form-control form-control-sm" value="{{$garden->leaDedDat}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="lease_deed_expire_date">লীজ ডীড অতিক্রান্ত তারিখ </label>
                                    <input type="date" id="lease_deed_expire_date" name="leaDedExp"
                                        class="form-control form-control-sm" value="{{$garden->leaDedExp}}">
                                </div>
                            </div>
        
        
        
                            <!-- ==================================================== -->
                            <!-- ভূমি বিষয়ক তথ্য -->
                            <!-- ==================================================== -->
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="lease_land"> ইজারাকৃত মোট ভূমি(একর) </label>
                                    <input type="text" id="lease_land" name="leaLan" class="form-control form-control-sm" value="{{$garden->leaLan}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="lease_ledger"> ইজারাকৃত ভূমির খতিয়ান </label>
                                    <input type="text" id="lease_ledger" name="leaLed" class="form-control form-control-sm" value="{{$garden->leaLed}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="lease_stain"> ইজারাকৃত ভূমি দাগ </label>
                                    <input type="text" id="lease_stain" name="leaSta" class="form-control form-control-sm" value="{{$garden->leaSta}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="lease_class"> ইজারাকৃত ভূমির শ্রেণী </label>
                                     <select name="leaCla_id" id="" class="form-control form-control-sm">
                                         <option value="" disabled selected> নির্বাচন করুন </option>

                                         @if($lease->count() > 0)
                                        @foreach ($lease as $item)
                                        <option value="{{$item->id}}" @if($garden->leaCla_id == $item->id) selected @endif > {{$item->name}} </option>
                                        @endforeach
                                        @endif

                                     </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="tea_total_land">চা চাষের মোট ভূমির পরিমান (একর) </label>
                                    <input type="text" id="tea_total_land" name="teaToLan" class="form-control form-control-sm" value="{{$garden->teaToLan}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="rabber_total_land"> রাবার মোট ভূমি পরিমান (যদি থাকে) (একর)</label>
                                    <input type="text" id="rabber_total_land" name="rabToLan" class="form-control form-control-sm" value="{{$garden->rabToLan}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="other_garden_total_land"> অন্যান্য বাগানকৃত মোট ভূমির পরিমান (একর)</label>
                                    <input type="text" id="other_garden_total_land" name="etcToLan"
                                        class="form-control form-control-sm" value="{{$garden->etcToLan}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="fallen_land"> পতিত মোট জমি (একর)</label>
                                    <input type="text" id="fallen_land" name="falLan" class="form-control form-control-sm" value="{{$garden->falLan}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="other_staff_land"> বাংলো স্টাফ ও লেবার কোয়ার্টার ভূমির পরিমান (একর) </label>
                                    <input type="text" id="other_staff_land" name="etcStaLan" class="form-control form-control-sm" value="{{$garden->etcStaLan}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="cultivated_tea_land"> আবাদকৃত চা চাষের ভূমির পরিমান (একর) </label>
                                    <input type="text" id="cultivated_tea_land" name="cultLan" class="form-control form-control-sm" value="{{$garden->cultLan}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="planted_shade_other "> আবাদকৃত ছায়া ও অন্যান্য বৃক্ষের পরিমান (একর)</label>
                                    <input type="text" id="planted_shade_other" name="planShad" class="form-control form-control-sm" value="{{$garden->planShad}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="annual_total_rent"> বার্ষিক মোট খাজনা</label>
                                    <input type="text" id="annual_total_rent" name="annTotRen" class="form-control form-control-sm" value="{{$garden->annTotRen}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="lattest_rent"> সর্বশেষ পরিশোধকৃত খাজনা(যদি থাকে) </label>
                                    <input type="text" id="latest_rent" name="lateRen" class="form-control form-control-sm" value="{{$garden->lateRen}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="lease_money_rr">লীজমানির আর আর (যদি থাকে) </label>
                                    <input type="text" id="lease_money_rr" name="leaMonRR" class="form-control form-control-sm" value="{{$garden->leaMonRR}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="dcr_no"> ডিসিআর নম্বর (যদি থাকে) </label>
                                    <input type="text" id="dcr_no" name="dcrNo" class="form-control form-control-sm" value="{{$garden->dcrNo}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="lattest_rent_date"> সর্বশেষ পরিশোধকৃত খাজনার তারিখ </label>
                                    <input type="date" id="lattest_rent_date" name="latRenDat" class="form-control form-control-sm" value="{{$garden->latRenDat}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="union"> ইউনিয়ন ভূমি অফিস নাম </label>
                                   <select name="union_id" id="union" class="form-control form-control-sm">
                                        <option value="" selected disabled> নির্বাচন করুন </option>


                                        @if($union->count() > 0)
                                        @foreach ($union as $item)
                                        <option value="{{$item->id}}" @if($garden->union_id == $item->id) selected @endif> {{$item->name}} </option>
                                        @endforeach
                                        @endif


                                   </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12">
                                <div class="mb-3">
                                    <label for="law_order"> চা বাগানের আইন-শৃঙ্খলা অবস্থা</label>
                                    <textarea  id="law_order" rows="2" name="lawOrd" class="form-control form-control-sm rounded"> {{$garden->lawOrd}} </textarea>
                                </div>
                            </div>
        
                            <!-- ==================================================== -->
                            <!-- স্বাস্থ্য বিষয়ক তথ্য -->
                            <!-- ==================================================== -->
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="clinic"> হাসপাতাল সংখ্যা </label>
                                    <input type="text" id="clinic" name="clinic" class="form-control form-control-sm" value="{{$garden->clinic}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="beds"> হাসপাতালে বেড সংখ্যা</label>
                                    <input type="text" id="beds" name="bed" class="form-control form-control-sm" value="{{$garden->bed}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="doctors"> ডাক্তার সংখ্যা </label>
                                    <input type="text" id="doctors" name="doctor" class="form-control form-control-sm" value="{{$garden->doctor}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="nurse"> নার্সের সংখ্যা</label>
                                    <input type="text" id="nurse" name="nurse" class="form-control form-control-sm" value="{{$garden->nurse}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="compounders"> কম্পাউন্ডারের সংখ্যা </label>
                                    <input type="text" id="compounders" name="compounder" class="form-control form-control-sm" value="{{$garden->compounder}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="ripe_washroom">বাগানে পাকা ল্যাট্রিন সংখ্যা </label>
                                    <input type="text" id="ripe_washroom" name="ripWash" class="form-control form-control-sm" value="{{$garden->ripWash}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="raw_washroom">বাগানে কাচা ল্যাট্রিন সংখ্যা</label>
                                    <input type="text" id="raw_washroom" name="rawWash" class="form-control form-control-sm" value="{{$garden->rawWash}}">
                                </div>
                            </div>
        
        
        
                            <!-- ==================================================== -->
                            <!-- শিক্ষা বিষয়ক তথ্য -->
                            <!-- ==================================================== -->
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="primary"> প্রাথমিক বিদ্যালয় সংখ্যা</label>
                                    <input type="text" id="primary_schools" name="primary" class="form-control form-control-sm" value="{{$garden->primary}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="primary_students">প্রাথমিকের ছাত্র-ছাত্রী সংখ্যা</label>
                                    <input type="text" id="primary_students" name="priStud" class="form-control form-control-sm" value="{{$garden->priStud}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="secodary"> মাধ্যমিক বিদ্যালয় সংখ্যা</label>
                                    <input type="text" id="secodary" name="secodary" class="form-control form-control-sm" value="{{$garden->secodary}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="secodary_students"> মাধ্যমিকের ছাত্র-ছাত্রী সংখ্যা</label>
                                    <input type="text" id="secodary_students" name="secStud" class="form-control form-control-sm" value="{{$garden->secStud}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="higer_students"> উচ্চ শিক্ষায় অংশীগ্রহনকারির সংখ্যা</label>
                                    <input type="text" id="higer_students" name="higStud" class="form-control form-control-sm" value="{{$garden->higStud}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12">
                                <div class="mb-3">
                                    <label for="tourism_spot">পর্যটন স্পট এর বিবরন (যদি থাকে)</label>
                                    <textarea name="tourSpot" id="tourism_spot" rows="2" class="form-control form-control-sm rounded"> {{$garden->tourSpot}} </textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
        
                        
        
                            <!-- ==================================================== -->
                                         <!-- বিনোদনমূলক বিষয় -->
                            <!-- ==================================================== -->
                                <div class="mb-3">
                                    <label for="playField"> খেলার মাঠের সংখ্যা</label>
                                    <input type="text" id="playFil" name="playFil" class="form-control form-control-sm" value="{{$garden->playFil}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="stages"> মঞ্চ সংখ্যা/প্যান্ডেল সংখ্যা </label>
                                    <input type="text" id="stages" name="stage" class="form-control form-control-sm" value="{{$garden->stage}}">
                                </div>
                            </div>
        
        
        
        
                            <!-- ==================================================== -->
                            <!--  মুক্তিযুদ্ধ বিষয়ক তথ্য -->
                            <!-- ==================================================== -->
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="strange_place"> মুক্তিযুদ্ধ স্মৃতি বিজরিত স্থান নাম (যদি থাকে) </label>
                                    <input type="text" id="strange_place" name="straPla" class="form-control form-control-sm" value="{{$garden->straPla}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="monument"> মুক্তিযুদ্ধ সৌধ </label>
                                    <input type="text" id="monument" name="monument" class="form-control form-control-sm" value="{{$garden->monument}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="freedomFighters"> মুক্তিযুদ্ধার সংখ্যা (জীবিত বা মৃত) </label>
                                    <input type="text" id="freedomFighters" name="freFight" class="form-control form-control-sm" value="{{$garden->freFight}}">
                                </div>
                            </div>
        
        
        
        
                            <!-- ==================================================== -->
                            <!-- শ্রমিক সংক্রান্ত বিষয় -->
                            <!-- ==================================================== -->
        
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="tea_workers"> মোট চা শ্রমিক সংখ্যা </label>
                                    <input type="text" id="workers" name="labor" class="form-control form-control-sm" value="{{$garden->labor}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="communitys"> কতটি সম্প্রদায় </label>
                                    <input type="text" id="communitys" name="community" class="form-control form-control-sm" value="{{$garden->community}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="workersCommunitys"> চা শ্রমিক উপজাতি সম্প্রদায় সমূহ </label>
                                    <input type="text" id="workers_communitys" name="labComm" class="form-control form-control-sm" value="{{$garden->labComm}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="advanced_education"> শিক্ষায় অগ্রসর সম্প্রদায় </label>
                                    <input type="text" id="advancedEducation" name="advEdu" class="form-control form-control-sm" value="{{$garden->advEdu}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="education_rate"> শিক্ষার হার </label>
                                    <input type="text" id="education_rate" name="educRat" class="form-control form-control-sm" value="{{$garden->educRat}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="mb-3">
                                    <label for="stipend"> বাগানের থেকে মেধাবীদের উপবৃত্তী দিলে নাম </label>
                                    <input type="text" id="stipend" name="stipend" class="form-control form-control-sm" value="{{$garden->stipend}}">
                                </div>
                            </div>
                            <div class="col-sm-12  col-lg-12">
                                <div class="mb-3">
                                    <label for="worker_name"> শ্রমিকদের বাসস্থানের বিবরন </label>
                                    <textarea name="labHom" id="worker_name" rows="2" class="form-control form-control-sm rounded"> {{$garden->labHom}} </textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="worker_living_improve"> শ্রমিকদের জীবনমান উন্নয়নে প্রকল্প থাকলে নাম </label>
                                    <input type="text" id="workerLivingImprove" name="labImpPro"
                                        class="form-control form-control-sm" value="{{$garden->labImpPro}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="worker_ongoing_project">শ্রমিকদের জীবনমান উন্নয়নে চলমান প্রকল্প </label>
                                    <input type="text" id="worker_ongoing_project" name="labOngPro"
                                        class="form-control form-control-sm" value="{{$garden->labOngPro}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="ongoing_project">শ্রমিকদের জীবনমান উন্নয়নে সমাপ্ত প্রকল্প (যদি থাকে) </label>
                                    <input type="text" id="ongoing_project" name="finPro" class="form-control form-control-sm" value="{{$garden->finPro}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="rivers"> চা বাগানে প্রবাহিত নদ নদীর সংখ্যা </label>
                                    <input type="text" id="rivers" name="river" class="form-control form-control-sm" value="{{$garden->river}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="mb-3">
                                    <label for="river_name"> চা বাগানে প্রবাহিত নদ নদীর নামসমূহ </label>
                                    <input type="text" id="river_name" name="rivNam" class="form-control form-control-sm" value="{{$garden->rivNam}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="mb-3">
                                    <label for="drug"> মাদক দ্রব্য নিয়ত্রণ কার্যক্রম </label>
                                    <textarea name="drug" id="drug" rows="2" class="form-control form-control-sm rounded"> {{$garden->drug}} </textarea>
                                </div>
                            </div>
        
        
                            <!-- ==================================================== -->
                                             <!-- যাতায়ত ব্যাবস্থা -->
                            <!-- ==================================================== -->
        
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="distric_distance"> জেলা সদর থেকে দূরত্ব ও যোগাযোগ ব্যাবস্থা </label>
                                    <textarea name="disDis" id="distric_distance" rows="2" class="form-control form-control-sm rounded"> {{ $garden->disDis }} </textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="upozila_distance"> উপজেলা সদর থেকে দূরত্ব ও যোগাযোগ ব্যাবস্থা </label>
                                    <textarea name="upoDis" id="upozila_distance" rows="2" class="form-control form-control-sm rounded"> {{ $garden->upoDis }} </textarea>
                                </div>
                            </div>
        
        
                            <!-- ==================================================== -->
                                             <!-- মামলা সংক্রান্ত  -->
                            <!-- ==================================================== -->
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="case_no"> মামলার নম্বর </label>
                                    <input type="text" id="case_no" name="casNo" class="form-control form-control-sm" value="{{$garden->casNo}}" >
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="case_plantiff"> মামলার বাদী </label>
                                    <input type="text" id="case_plantiff" name="casePla" class="form-control form-control-sm" value="{{$garden->casePla}}" >
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="case_defandent"> মামলার বিবাদী </label>
                                    <input type="text" id="case_defandent" name="caseDef" class="form-control form-control-sm" value="{{$garden->caseDef}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="court"> বিচারাধীন আদালতের নাম </label>
                                    <input type="text" id="court" name="court" class="form-control form-control-sm" value="{{$garden->court}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="case_type"> মামলার ধরন </label>
                                    <input type="text" id="case_type" name="casTyp" class="form-control form-control-sm" value="{{$garden->casTyp}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <label for="lawyer"> মামলার সরকার পক্ষের আইনজীবির নাম </label>
                                    <input type="text" id="lawyer" name="lawyer" class="form-control form-control-sm" value="{{$garden->lawyer}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="next_date_case"> মামলার আগামী তারিখ </label>
                                    <input type="date" id="next_date_case" name="nxtDatCas" class="form-control form-control-sm" value="{{$garden->nxtDatCas}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="case_result"> মামলার ফলাফল </label>
                                    <input type="text" id="case_result" name="caseRes" class="form-control form-control-sm" value="{{$garden->caseRes}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="case_order"> মামলার আদেশ অনুযায়ী গৃহীত ব্যাবস্থা </label>
                                    <input type="text" id="case_order" name="caseOrd" class="form-control form-control-sm" value="{{$garden->caseOrd}}">
                                </div> 
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="case_order"> বাগানের উন্নয়ন প্রকল্প চলমান (সরকার/বেসরকারি)(যদি থাকে) </label>
                                    <input type="text" id="case_order" name="teaOnPro" class="form-control form-control-sm" value="{{$garden->teaOnPro}}">
                                </div>
                            </div>
                            <div class="col-sm-12 ">
                                <div class="mb-3">
                                    <label for="comment"> মন্তব্য </label>
                                    <textarea name="comm" id="comment" rows="2" class="form-control form-control-sm rounded"> {{ $garden->comm}} </textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                  <div class="mb-3">
                                 <center>
                                    <input type="submit" class="btn btn-lg btn-primary px-5" value="সাবমিট" >
                                 </center>
                                  </div>
                            </div>
                            
                        </div>















                    </form>
                </div>
                <div class="card-footer ">

                </div>
            </div>
        
    </div>
@endsection
