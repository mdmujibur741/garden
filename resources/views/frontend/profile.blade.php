@extends('frontend.master')

@section('content')
    

    <!-- ================================================= -->
    <!-- =========GARDEN PROFILE SECTION START============ -->
    <!-- ================================================= -->
    <section class="garden_profile_section px-4">
        <div class="container-fluid">
              <div class="row">
                <h4 class="text-center"><b>ইউনিয়ন ভূমি অফিস নাম</b></h4>
                <div class="col-sm-12 col-lg-12">
                   <h5 class="text-center"><b>
                    জেলা:মৌলভীবাজার, উপজেলা: @if($profile ==!null)  {{$profile->upozela->name}} @endif </b></h5>
                </div>
                <div class="col-sm-12 col-lg-6">
                   <h5 class="text-sm-center text-lg-end"></h5> 
                </div>
               
            
              </div>
              
            <div class="row ">
                <h5 class="text_shadow">
                    <b>  @if($profile ==!null)  {{$profile->garden}} @endif  চা বাগান তথ্য</b>
                </h5>
                <div class="col-sm-12 col-md-12 col-lg-12 mb-2 border">
                    <b> মালিকের নাম: </b>  @if($profile ==!null)  {{$profile->owner}} @endif
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 mb-2 border">
                    <b> বাগানের অংশীদারগনের নাম (যদি থাকে): </b> @if($profile ==!null)  {{$profile->partner}} @endif
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 mb-2 border">
                    <b> অংশীদারগনের ঠিকানা (যদি থাকে): </b> @if($profile ==!null)  {{$profile->partAdr}} @endif
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b> মালিকের পিতার নাম</b>: @if($profile ==!null)  {{$profile->ownFat }} @endif
                </div>
              
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>মালিকের টিন নং (TIN NO):</b> @if($profile ==!null)  {{$profile->ownTin }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b> মালিকের মোবাইল নং:</b> @if($profile ==!null)  {{$profile->ownMob}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border">
                    <b> মালিকের ইমেইল :</b> @if($profile ==!null)  {{$profile->ownEml}} @endif
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 mb-2 border">
                    <b> মালিকের ভোটার আইডি:</b> @if($profile ==!null)  {{$profile->ownNid}} @endif
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 mb-2 border">
                    <b> মালিকের ঠিকানা:</b> @if($profile ==!null)  {{$profile->ownAdr}} @endif
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 mb-2 border">
                    <b> ব্যাবস্থাপক নাম:</b> @if($profile ==!null)  {{$profile->manager}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border">
                    <b>ব্যাবস্থাপক পিতার নাম:</b> @if($profile ==!null)  {{$profile->manaFat}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>ব্যাবস্থাপক ভোটার আইডি:</b> @if($profile ==!null)  {{$profile->manaNid}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>ব্যাবস্থাপক টিন নং (TIN NO):</b> @if($profile ==!null)  {{$profile->manaTin}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>ব্যাবস্থাপকের মোবাইল:</b> @if($profile ==!null)  {{$profile->manaMob}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>ব্যাবস্থাপকের ইমেইল:</b>  @if($profile ==!null)  {{$profile->manaEml}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-8 mb-2 border">
                    <b>ব্যাবস্থাপতকর ঠিকানা:</b> @if($profile ==!null)  {{$profile->manaAdr}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>উপজেলা নাম:</b> @if($profile ==!null)  {{$profile->upozela->name}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>মৌজার নাম:</b> @if($profile ==!null)  {{$profile->mouza}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>জে. এল নম্বর:</b>  @if($profile ==!null)  {{$profile->zlNo}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>লীজ ডীড নম্বর:</b>  @if($profile ==!null)  {{$profile->leaDed }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>লীজ ডীড তারিখ:</b> @if($profile ==!null)  {{$profile->leaDedDat}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>লীজ ডীড অতিক্রান্ত তারিখ:</b> @if($profile ==!null)  {{$profile->leaDedExp}} @endif
                </div>

                <!-- ===========ভূমি বিষয়ক============== -->
                <div class="col-sm-12 col-lg-12">
                    <h5 class="text_shadow"><b>বাগানের ভূমি বিষয়ক তথ্য</b></h5>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>ইজারাকৃত মোট ভূমি(একর):</b>  @if($profile ==!null)  {{$profile->leaLan }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>ইজারাকৃত ভূমির খতিয়ান:</b>  @if($profile ==!null)  {{$profile->leaLed}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>ইজারাকৃত ভূমি দাগ:</b>  @if($profile ==!null)  {{$profile->leaSta }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>ইজারাকৃত ভূমির শ্রেণী:</b>  @if($profile ==!null)  {{$profile->category->name}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>চা চাষের মোট ভূমির পরিমান (একর):</b>  @if($profile ==!null)  {{$profile->teaToLan }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>রাবার মোট ভূমি পরিমান (যদি থাকে) (একর):</b> @if($profile ==!null)  {{$profile->rabToLan }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>অন্যান্য বাগানকৃত মোট ভূমির পরিমান (একর):</b>   @if($profile ==!null)  {{$profile->etcToLan}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>পতিত মোট জমি (একর):</b>  @if($profile ==!null)  {{$profile->falLan }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>বাংলো স্টাফ ও লেবার কোয়ার্টার ভূমির পরিমান (একর):</b>   @if($profile ==!null)  {{$profile->etcStaLan }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b> আবাদকৃত চা চাষের ভূমির পরিমান (একর):</b> @if($profile ==!null)  {{$profile->cultLan}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b> আবাদকৃত ছায়া ও অন্যান্য বৃক্ষের পরিমান (একর):</b>  @if($profile ==!null)  {{$profile->planShad}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b> বার্ষিক মোট খাজনা:</b>   @if($profile ==!null)  {{$profile->annTotRen}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>সর্বশেষ পরিশোধকৃত খাজনা:</b>   @if($profile ==!null)  {{$profile->lateRen}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>লীজমানির আর আর:</b>    @if($profile ==!null)  {{$profile->leaMonRR }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>ডিসিআর নম্বর:</b>    @if($profile ==!null)  {{$profile->dcrNo}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border">
                    <b>সর্বশেষ পরিশোধকৃত খাজনার তারিখ:</b>    @if($profile ==!null)  {{$profile->latRenDat}} @endif
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 mb-2 border">
                    <b> ইউনিয়ন ভূমি অফিস নাম:</b>    @if($profile ==!null)  {{$profile->union->name}} @endif
                </div>
               


                <!-- ===========স্বাস্থ্য বিষয়ক============== -->
                <div class="col-sm-12 col-md-12 mb-2 ">
                    <h5 class="text_shadow"> <b>স্বাস্থ্য বিষয়ক তথ্য সমূহ</b></h5>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b>হাসপাতাল সংখ্যা:</b> @if($profile ==!null)  {{$profile->clinic}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b> হাসপাতালে বেড সংখ্যা:</b>  @if($profile ==!null)  {{$profile->bed}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
                    <b> ডাক্তার সংখ্যা:</b>   @if($profile ==!null)  {{$profile->doctor}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border">
                    <b> নার্সের সংখ্যা:</b>   @if($profile ==!null)  {{$profile->nurse}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border">
                    <b>কম্পাউন্ডারের সংখ্যা :</b>   @if($profile ==!null)  {{$profile->compounder}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border">
                    <b>বাগানে পাকা ল্যাট্রিন সংখ্যা :</b>   @if($profile ==!null)  {{$profile->ripWash }} @endif
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 mb-2 border border-light">
                    <b>বাগানে কাচা ল্যাট্রিন সংখ্যা:</b>   @if($profile ==!null)  {{$profile->rawWash}} @endif
                </div>



                <div class="col-sm-12 col-md-12 mb-2 ">
                    <h5 class="text_shadow"> <b> শিক্ষা বিষয়ক তথ্য সমূহ</b> </h5>
                </div>
                <!-- ===========শিক্ষা বিষয়ক============== -->
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b> প্রাথমিক বিদ্যালয় সংখ্যা :</b> @if($profile ==!null)  {{$profile->primary}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b> প্রাথমিকের ছাত্র-ছাত্রী সংখ্যা :</b>   @if($profile ==!null)  {{$profile->priStud}} @endif
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b>মাধ্যমিক বিদ্যালয় সংখ্যা:</b> @if($profile ==!null)  {{$profile->secodary }} @endif
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light">
                    <b>মাধ্যমিকের ছাত্র-ছাত্রী সংখ্যা:</b> @if($profile ==!null)  {{$profile->secStud }} @endif
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light">
                    <b> উচ্চ শিক্ষায় অংশীগ্রহনকারির সংখ্যা:</b>   @if($profile ==!null)  {{$profile->higStud }} @endif
                </div>
              


                <!--========  মুক্তিযুদ্ধ বিষয়ক তথ্য ===========-->
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b>মুক্তিযুদ্ধ স্মৃতি বিজরিত স্থান নাম (যদি থাকে):</b>  @if($profile ==!null)  {{$profile->straPla }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b>মুক্তিযুদ্ধ সৌধ:</b>  @if($profile ==!null)  {{$profile->monument}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b>মুক্তিযুদ্ধার সংখ্যা (জীবিত বা মৃত):</b>   @if($profile ==!null)  {{$profile->freFight }} @endif
                </div>



                <!--============= শ্রমিক সংক্রান্ত বিষয় =================-->
                <div class="col-sm-12 col-lg-12">
                    <h5 class="text_shadow"> <b>শ্রমিক বিষয়ক তথ্য সমূহ</b></h5>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b> মোট চা শ্রমিক সংখ্যা :</b> @if($profile ==!null)  {{$profile->labor }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b> কতটি সম্প্রদায়  :</b> @if($profile ==!null)  {{$profile->community }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b> চা শ্রমিক উপজাতি সম্প্রদায় সমূহ :</b> @if($profile ==!null)  {{$profile->labComm}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b> শিক্ষায় অগ্রসর সম্প্রদায় :</b> @if($profile ==!null)  {{$profile->advEdu }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b> শিক্ষার হার :</b> @if($profile ==!null)  {{$profile->educRat}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b> বাগানের থেকে মেধাবীদের উপবৃত্তী দিলে নাম :</b> @if($profile ==!null)  {{$profile->stipend }} @endif
                </div>
                 <div class="col-sm-12 col-lg-12 mb-2 border border-light">
                    <b> শ্রমিকদের বাসস্থানের বিবরন :</b>@if($profile ==!null)  {{$profile->labHom}} @endif
                </div> 
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b> শ্রমিকদের জীবনমান উন্নয়নে প্রকল্প থাকলে নাম:</b> @if($profile ==!null)  {{$profile->labImpPro }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b> শ্রমিকদের জীবনমান উন্নয়নে চলমান প্রকল্প :</b>  @if($profile ==!null)  {{$profile->labOngPro }} @endif
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 mb-2 border border-light">
                    <b> শ্রমিকদের জীবনমান উন্নয়নে সমাপ্ত প্রকল্প (যদি থাকে) :</b>@if($profile ==!null)  {{$profile->finPro}} @endif
                </div>

                 <!-- ===========বাগানের মামলা বিষয়ক তথ্য============== -->
                 <div class="col-sm-12 col-md-12">
                    <h5 class="text_shadow"> <b>মামলার তথ্য সমূহ</b></h5>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b> মামলার নম্বর:</b>  @if($profile ==!null)  {{$profile->casNo}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b> মামলার বাদী :</b>  @if($profile ==!null)  {{$profile->casePla}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b> মামলার বিবাদী :</b>   @if($profile ==!null)  {{$profile->caseDef }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light">
                    <b> বিচারাধীন আদালতের নাম:</b>  @if($profile ==!null)  {{$profile->court}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light">
                    <b> মামলার ধরন:</b>   @if($profile ==!null)  {{$profile->casTyp }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b>  মামলার সরকার পক্ষের আইনজীবির নাম:</b>   @if($profile ==!null)  {{$profile->lawyer }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b> মামলার আগামী তারিখ:</b>   @if($profile ==!null)  {{$profile->nxtDatCas }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light">
                    <b>  মামলার ফলাফল :</b>  @if($profile ==!null)  {{$profile->caseRes}} @endif
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 mb-2 border border-light">
                    <b> মামলার আদেশ অনুযায়ী গৃহীত ব্যাবস্থা:</b>  @if($profile ==!null)  {{$profile->caseOrd }} @endif
                </div>
               





                  <!-- ===========অন্যান্য বিষয়ক============== -->
                  <div class="col-sm-12 col-md-12">
                    <h5 class="text_shadow"> <b>অন্যান্য তথ্য সমূহ</b></h5>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light">
                    <b> খেলার মাঠের সংখ্যা:</b> @if($profile ==!null)  {{$profile->playFil }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light">
                    <b> মঞ্চ সংখ্যা/প্যান্ডেল সংখ্যা:</b> @if($profile ==!null)  {{$profile->stage }} @endif
                </div>
                <div class="col-sm-12 col-lg-12 mb-2 border border-light">
                    <b>বাগানের উন্নয়ন প্রকল্প চলমান (সরকার/বেসরকারি)(যদি থাকে):</b>@if($profile ==!null)  {{$profile->teaOnPro }} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light">
                    <b> চা বাগানে প্রবাহিত নদ নদীর নামসমূহ:</b>@if($profile ==!null)  {{$profile->rivNam}} @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light">
                    <b> চা বাগানে প্রবাহিত নদ নদীর সংখ্যা:</b>@if($profile ==!null)  {{$profile->river }} @endif
                </div>
               
                <div class="col-sm-12 col-lg-12 mb-2 border border-light">
                    <b>জেলা সদর থেকে দূরত্ব ও যোগাযোগ ব্যাবস্থা:</b>@if($profile ==!null)  {{$profile->disDis }} @endif
                </div>
                <div class="col-sm-12 col-lg-12 mb-2 border border-light">
                    <b>উপজেলা সদর থেকে দূরত্ব ও যোগাযোগ ব্যাবস্থা:</b> @if($profile ==!null)  {{$profile->upoDis}} @endif
                </div>

                <div class="col-sm-12 col-lg-12 mb-2 border border-light">
                    <b>পর্যটন স্পট এর বিবরন (যদি থাকে):</b>  @if($profile ==!null)  {{$profile->tourSpot }} @endif
                </div>
                <div class="col-sm-12 col-lg-12 mb-2 border">
                    <b>মাদক দ্রব্য নিয়ত্রণ কার্যক্রম:</b>  @if($profile ==!null)  {{$profile->drug}} @endif
                </div>
                <div class="col-sm-12 col-lg-12 mb-2 border">
                    <b> চা বাগানের আইন-শৃঙ্খলা অবস্থা:</b> @if($profile ==!null)  {{$profile->lawOrd }} @endif
                </div>
                <div class="col-sm-12 col-lg-12 mb-2 border">
                    <b> মন্তব্য:</b>@if($profile ==!null)  {{$profile->comm}} @endif
                </div>

            </div>
        </div>
    </section>


    @endsection