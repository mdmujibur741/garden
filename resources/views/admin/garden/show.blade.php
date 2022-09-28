@extends('admin.master')
@section('content')
   @php
       
       use Rakibhstu\Banglanumber\NumberToBangla;
       $numto = new NumberToBangla();
   @endphp    

<style>
          .card-body{
                       background: #eee7dd !important;
          }
          .card-header,.card-footer{
                       background: #187de1c8 !important;   
          }
</style>


<div class="row">
<div class="col-12">
<div class="card-header">
    <div class="row justify-content-center">
        <h4 class=""><b>ইউনিয়ন ভূমি অফিস নাম</b></h4>
        <div class="col-sm-12 col-lg-12">
           <h5 class="text-center"><b>
            জেলা:মৌলভীবাজার, উপজেলা: {{$garden->upozela->name}} </b></h5>
        </div>
        <div class="col-sm-12 col-lg-6">
           <h5 class="text-sm-center text-lg-end"></h5> 
        </div>
      </div>
</div>



<div class="card-body">
<div class="row justify-content-center">
    <h5 class="shadow shadow-light p-3">
        <b> রূপসী বাংলা চা বাগানের তথ্য</b>
    </h5>
    <div class="col-sm-12 col-md-12 col-lg-12 mb-2 border border-light shadow">
        <b> মালিকের নাম: </b> {{$garden->owner}}
    </div>

    <div class="col-sm-12 col-md-12 col-lg-6 mb-2 border border-light shadow">
        <b> বাগানের অংশীদারগনের নাম (যদি থাকে): </b> {{$garden->partner}}
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 mb-2 border border-light shadow">
        <b> অংশীদারগনের ঠিকানা (যদি থাকে): </b> {{$garden->partAdr}}
    </div>

    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> মালিকের পিতার নাম</b>:{{$garden->ownFat}}
    </div>
  
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>মালিকের টিন নং (TIN NO):</b> {{$garden->ownTin}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> মালিকের মোবাইল নং:</b> {{$garden->ownMob}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light shadow">
        <b> মালিকের ইমেইল :</b> {{$garden->ownEml}}
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 mb-2 border border-light shadow">
        <b> মালিকের ভোটার আইডি:</b> {{$garden->ownNid}}
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 mb-2 border border-light shadow">
        <b> মালিকের ঠিকানা:</b> {{$garden->ownAdr}}
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 mb-2 border border-light shadow">
        <b> ব্যাবস্থাপক নাম:</b>{{$garden->manager}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light shadow">
        <b>ব্যাবস্থাপক পিতার নাম:</b> {{$garden->manaFat}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>ব্যাবস্থাপক ভোটার আইডি:</b> {{$garden->manaNid}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border">
        <b>ব্যাবস্থাপক টিন নং (TIN NO):</b> {{$garden->manaId}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>ব্যাবস্থাপকের মোবাইল:</b>{{$garden->manaMob}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>ব্যাবস্থাপকের ইমেইল:</b>{{$garden->manaEml}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-8 mb-2 border border-light shadow">
        <b>ব্যাবস্থাপতকর ঠিকানা:</b> {{$garden->manaAdr}}
    </div>

    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>মৌজার নাম:</b>{{$garden->mouza}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>জে. এল নম্বর:</b>{{$garden->zlNo}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>লীজ ডীড নম্বর:</b>{{$garden->leaDed}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>লীজ ডীড তারিখ:</b>{{$garden->leaDedDat}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>লীজ ডীড অতিক্রান্ত তারিখ:</b>{{$garden->leaDedExp}}
    </div>

    <!-- ===========ভূমি বিষয়ক============== -->
    <div class="col-sm-12 col-lg-12">
        <h5 class="text-center p-3 my-3"><b class="shadow p-3">বাগানের ভূমি বিষয়ক তথ্য</b></h5>
    </div> 



    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>ইজারাকৃত মোট ভূমি(একর):</b> {{$garden->leaLan}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>ইজারাকৃত ভূমির খতিয়ান:</b>{{$garden->leaDed}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>ইজারাকৃত ভূমি দাগ:</b>{{$garden->laeSta}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>ইজারাকৃত ভূমির শ্রেণী:</b>{{$garden->lease->name}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>চা চাষের মোট ভূমির পরিমান (একর):</b>{{$garden->teaToLan}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>রাবার মোট ভূমি পরিমান (যদি থাকে) (একর):</b>{{$garden->rabToLan}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>অন্যান্য বাগানকৃত মোট ভূমির পরিমান (একর):</b>{{$garden->etcToLan}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>পতিত মোট জমি (একর):</b>{{$garden->falLan}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>বাংলো স্টাফ ও লেবার কোয়ার্টার ভূমির পরিমান (একর):</b>{{$garden->etcStaLan}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> আবাদকৃত চা চাষের ভূমির পরিমান (একর):</b>{{$garden->cultLan}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> আবাদকৃত ছায়া ও অন্যান্য বৃক্ষের পরিমান (একর):</b>{{$garden->planShad}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> বার্ষিক মোট খাজনা:</b>{{$garden->annTotRen}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>সর্বশেষ পরিশোধকৃত খাজনা:</b>{{$garden->lateRen}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>লীজমানির আর আর:</b>{{$garden->leaMonRR}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>ডিসিআর নম্বর:</b>{{$garden->dcrNo}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light shadow">
        <b>সর্বশেষ পরিশোধকৃত খাজনার তারিখ:</b>{{$garden->latRenDat}}
    </div>
   


    <!-- ===========স্বাস্থ্য বিষয়ক============== -->
    <div class="col-sm-12 col-lg-12">
        <h5 class="text-center p-3 my-3"><b class="shadow p-3">স্বাস্থ্য বিষয়ক তথ্য সমূহ</b></h5>
    </div>



    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>হাসপাতাল সংখ্যা:</b>{{$garden->clinic}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> হাসপাতালে বেড সংখ্যা:</b>{{$garden->bed}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> ডাক্তার সংখ্যা:</b>{{$garden->doctor}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light shadow">
        <b> নার্সের সংখ্যা:</b>{{$garden->nurse}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light shadow">
        <b>কম্পাউন্ডারের সংখ্যা :</b>{{$garden->compounder}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light shadow">
        <b>বাগানে পাকা ল্যাট্রিন সংখ্যা :</b>{{$garden->ripWash}}
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 mb-2 border border-light shadow">
        <b>বাগানে কাচা ল্যাট্রিন সংখ্যা:</b>{{$garden->rawWash}}
    </div>



    
    <!-- ===========শিক্ষা বিষয়ক============== -->
    <div class="col-sm-12 col-lg-12">
        <h5 class="text-center p-3 my-3"><b class="shadow p-3">শিক্ষা বিষয়ক তথ্য সমূহ</b></h5>
    </div>



    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> প্রাথমিক বিদ্যালয় সংখ্যা :</b> {{$garden->primary}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> প্রাথমিকের ছাত্র-ছাত্রী সংখ্যা :</b>{{$garden->priStud}}
    </div>

    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>মাধ্যমিক বিদ্যালয় সংখ্যা:</b> {{$garden->secodary}}
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light shadow">
        <b>মাধ্যমিকের ছাত্র-ছাত্রী সংখ্যা:</b> {{$garden->secStud}}
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light shadow">
        <b> উচ্চ শিক্ষায় অংশীগ্রহনকারির সংখ্যা:</b>{{$garden->higStud}}
    </div>
  


    <!--========  মুক্তিযুদ্ধ বিষয়ক তথ্য ===========-->
    <div class="col-sm-12 col-lg-12">
        <h5 class="text-center p-3 my-3"><b class="shadow p-3">মুক্তিযুদ্ধ বিষয়ক তথ্য</b></h5>
    </div>



    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>মুক্তিযুদ্ধ স্মৃতি বিজরিত স্থান নাম (যদি থাকে):</b>{{$garden->straPla}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>মুক্তিযুদ্ধ সৌধ:</b>{{$garden->monument}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>মুক্তিযুদ্ধার সংখ্যা (জীবিত বা মৃত):</b>{{$garden->freFight}}
    </div>



    <!--============= শ্রমিক সংক্রান্ত বিষয় =================-->
    <div class="col-sm-12 col-lg-12">
        <h5 class="text-center p-3 my-3"><b class="shadow p-3">শ্রমিক সংক্রান্ত তথ্য</b></h5>
    </div>



    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> মোট চা শ্রমিক সংখ্যা :</b>{{$garden->labor}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> কতটি সম্প্রদায়  :</b>{{$garden->community}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> চা শ্রমিক উপজাতি সম্প্রদায় সমূহ :</b>{{$garden->labComm}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> শিক্ষায় অগ্রসর সম্প্রদায় :</b>{{$garden->advEdu}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> শিক্ষার হার :</b>{{$garden->educRat}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> বাগানের থেকে মেধাবীদের উপবৃত্তী দিলে নাম :</b>{{$garden->stipend}}
    </div>
     <div class="col-sm-12 col-lg-12 mb-2 border border-light shadow">
        <b> শ্রমিকদের বাসস্থানের বিবরন :</b> {{$garden->labHom}}
    </div> 
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> শ্রমিকদের জীবনমান উন্নয়নে প্রকল্প থাকলে নাম:</b>{{$garden->labImpPro}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> শ্রমিকদের জীবনমান উন্নয়নে চলমান প্রকল্প :</b>{{$garden->labOngPro}}
    </div>
    <div class="col-sm-12 col-md-12 col-lg-4 mb-2 border border-light shadow">
        <b> শ্রমিকদের জীবনমান উন্নয়নে সমাপ্ত প্রকল্প (যদি থাকে) :</b>{{$garden->finPro}}
    </div>

     <!-- ===========বাগানের মামলা বিষয়ক তথ্য============== -->
     <div class="col-sm-12 col-lg-12">
        <h5 class="text-center p-3 my-3"><b class="shadow p-3">মামলা বিষয়ক তথ্য</b></h5>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> মামলার নম্বর:</b>{{$garden->casNo}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> মামলার বাদী :</b>{{$garden->casePla}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> মামলার বিবাদী :</b>{{$garden->caseDef}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light shadow">
        <b> বিচারাধীন আদালতের নাম:</b>{{$garden->court}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light shadow">
        <b> মামলার ধরন:</b>{{$garden->casTyp}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>  মামলার সরকার পক্ষের আইনজীবির নাম:</b>{{$garden->lawyer}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b> মামলার আগামী তারিখ:</b>{{$garden->nxtDatCas}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 border border-light shadow">
        <b>  মামলার ফলাফল :</b>{{$garden->caseRes}}
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 mb-2 border border-light shadow">
        <b> মামলার আদেশ অনুযায়ী গৃহীত ব্যাবস্থা:</b>{{$garden->caseOrd}}
    </div>
   





      <!-- ===========অন্যান্য বিষয়ক============== -->
      <div class="col-sm-12 col-lg-12">
        <h5 class="text-center p-3 my-3"><b class="shadow p-3">অন্যান্য বিষয়ক তথ্য</b></h5>
    </div>


    <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light shadow">
        <b> খেলার মাঠের সংখ্যা:</b>{{$garden->playFil}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light shadow">
        <b> মঞ্চ সংখ্যা/প্যান্ডেল সংখ্যা:</b>{{$garden->stage}}
    </div>
    <div class="col-sm-12 col-lg-12 mb-2 border border-light shadow">
        <b>বাগানের উন্নয়ন প্রকল্প চলমান (সরকার/বেসরকারি)(যদি থাকে):</b>{{$garden->teaOnPro}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light shadow">
        <b> চা বাগানে প্রবাহিত নদ নদীর সংখ্যা:</b>{{$garden->river}}
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-2 border border-light shadow">
        <b> চা বাগানে প্রবাহিত নদ নদীর নামসমূহ :</b>{{$garden->rivNam}}
    </div>
   
    <div class="col-sm-12 col-lg-12 mb-2 border border-light shadow">
        <b>জেলা সদর থেকে দূরত্ব ও যোগাযোগ ব্যাবস্থা:</b>{{$garden->disDis}}
    </div>
    <div class="col-sm-12 col-lg-12 mb-2 border border-light shadow">
        <b>উপজেলা সদর থেকে দূরত্ব ও যোগাযোগ ব্যাবস্থা:</b>{{$garden->upoDis}}
    </div>

    <div class="col-sm-12 col-lg-12 mb-2 border border-light shadow">
        <b>পর্যটন স্পট এর বিবরন (যদি থাকে):</b>{{$garden->tourSpot}}
    </div>
    <div class="col-sm-12 col-lg-12 mb-2 border border-light shadow">
        <b>মাদক দ্রব্য নিয়ত্রণ কার্যক্রম:</b>{{$garden->drug}}
    </div>
    <div class="col-sm-12 col-lg-12 mb-2 border border-light shadow">
        <b> চা বাগানের আইন-শৃঙ্খলা অবস্থা:</b>{{$garden->lawOrd}}
    </div>
    <div class="col-sm-12 col-lg-12 mb-2 border border-light shadow">
        <b> মন্তব্য:</b>{{$garden->comm}}
    </div>

</div>
</div>

<div class="card-footer mb-2">
     
</div>




</div>
</div>



















@endsection