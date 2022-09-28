<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\garden;
use App\Models\lease;
use App\Models\union;
use App\Models\upozela;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class GardenController extends Controller
{
    public function index()
    {
          $garden = garden::latest()->paginate(20);
         // return "done";
          return view('admin.garden.index',compact('garden'));
    }

    public function create()
    {
         $union = union::all();
         $upozela = upozela::all();
         $lease = lease::all();
         $category = category::all();
        return view('admin.garden.create',compact('union','upozela','lease','category'));
    }

    public function store(Request $request)
    {
         $request->validate([
               'garden' => 'required|unique:gardens',
               'owner' => 'required',
               'ownFat' => 'required',
               'ownNid' => 'required',
               'ownTin' => 'required',
               'ownMob' => 'required',
               'ownAdr' => 'required',
               'manager' => 'required',
               'manaFat' => 'required',
               'manaAdr' => 'required',
               'manaNid' => 'required',
               'union_id' => 'required',
               'leaCla_id' => 'required',
               'upozela_id' => 'required',
               'cat_id' => 'required',
               
         ]);


         $garden = new garden();
         $garden->garden = $request->garden;
         $garden->slug = Str::slug($request->garden,'-');
         $garden->owner = $request->owner;
         $garden->ownFat = $request->ownFat;
         $garden->ownNid = $request->ownNid;
         $garden->ownTin = $request->ownTin;
         $garden->ownMob = $request->ownMob;
         $garden->ownEml = $request->ownEml;
         $garden->ownAdr = $request->ownAdr;
         $garden->manager = $request->manager;
         $garden->manaFat = $request->manaFat;
         $garden->manaAdr = $request->manaAdr;
         $garden->manaNid = $request->manaNid;
         $garden->manaTin = $request->manaTin;
         $garden->manaMob = $request->manaMob;
         $garden->manaEml = $request->manaEml;
         $garden->partner = $request->partner;
         $garden->partAdr = $request->partAdr;
         $garden->mouza = $request->mouza;
         $garden->zlNo = $request->zlNo;
         $garden->leaDed = $request->leaDed;
         $garden->leaDedDat = $request->leaDedDat;
         $garden->leaDedExp = $request->leaDedExp;
         $garden->leaLan = $request->leaLan;
         $garden->leaLed = $request->leaLed;
         $garden->leaSta = $request->leaSta;
         $garden->teaToLan = $request->teaToLan;
         $garden->rabToLan = $request->rabToLan;
         $garden->etcToLan = $request->etcToLan;
         $garden->falLan = $request->falLan;
         $garden->etcStaLan = $request->etcStaLan;
         $garden->cultLan = $request->cultLan;
         $garden->planShad = $request->planShad;
         $garden->annTotRen = $request->annTotRen;
         $garden->lateRen = $request->lateRen;
         $garden->leaMonRR = $request->leaMonRR;
         $garden->latRenDat = $request->latRenDat;
         $garden->dcrNo = $request->dcrNo;
         $garden->lawOrd = $request->lawOrd;
         $garden->clinic = $request->clinic;
         $garden->bed = $request->bed;
         $garden->doctor = $request->doctor;
         $garden->nurse = $request->nurse;
         $garden->compounder = $request->compounder;
         $garden->ripWash = $request->ripWash;
         $garden->rawWash = $request->rawWash;
         $garden->primary = $request->primary;
         $garden->priStud = $request->priStud;
         $garden->secodary = $request->secodary;
         $garden->secStud = $request->secStud;
         $garden->higStud = $request->higStud;
         $garden->tourSpot = $request->tourSpot;
         $garden->playFil = $request->playFil;
         $garden->stage = $request->stage;
         $garden->straPla = $request->straPla;
         $garden->monument = $request->monument;
         $garden->freFight = $request->freFight;
         $garden->labor = $request->labor;
         $garden->community = $request->community;
         $garden->labComm = $request->labComm;
         $garden->advEdu = $request->advEdu;
         $garden->educRat = $request->educRat;
         $garden->stipend = $request->stipend;
         $garden->labHom = $request->labHom;
         $garden->labImpPro = $request->labImpPro;
         $garden->labOngPro = $request->labOngPro;
         $garden->finPro = $request->finPro;
         $garden->river = $request->river;
         $garden->rivNam = $request->rivNam;
         $garden->drug = $request->drug;
         $garden->disDis = $request->disDis;
         $garden->upoDis = $request->upoDis;
         $garden->casNo = $request->casNo;
         $garden->casePla = $request->casePla;
         $garden->caseDef = $request->caseDef;
         $garden->court = $request->court;
         $garden->casTyp = $request->casTyp;
         $garden->lawyer = $request->lawyer;
         $garden->nxtDatCas = $request->nxtDatCas;
         $garden->caseRes = $request->caseRes;
         $garden->caseOrd = $request->caseOrd;
         $garden->teaOnPro = $request->teaOnPro;
         $garden->comm = $request->comm;
         $garden->union_id = $request->union_id;
         $garden->leaCla_id = $request->leaCla_id;
         $garden->upozela_id = $request->upozela_id;
         $garden->cat_id = $request->cat_id;
         $garden->save();
         Session::flash('success','ertwaryyhyr4weyw4e');
         return redirect()->back();
    }



    public function edit($editId)
    {
        $union = union::all();
        $upozela = upozela::all();
        $lease = lease::all();
        $category = category::all();
        $id = Crypt::decryptString($editId);
         $garden = garden::find($id);
         return view('admin.garden.edit',compact('garden','union','upozela','lease','category'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'garden' => 'required',
            'owner' => 'required',
            'ownFat' => 'required',
            'ownNid' => 'required',
            'ownTin' => 'required',
            'ownMob' => 'required',
            'ownAdr' => 'required',
            'manager' => 'required',
            'manaFat' => 'required',
            'manaAdr' => 'required',
            'manaNid' => 'required',
            'union_id' => 'required',
            'leaCla_id' => 'required',
            'upozela_id' => 'required',
            'cat_id' => 'required',
            
      ]);

      $garden = garden::find($id);
      $garden->garden = $request->garden;
      $garden->slug = Str::slug($request->garden,'-');
      $garden->owner = $request->owner;
      $garden->ownFat = $request->ownFat;
      $garden->ownNid = $request->ownNid;
      $garden->ownTin = $request->ownTin;
      $garden->ownMob = $request->ownMob;
      $garden->ownEml = $request->ownEml;
      $garden->ownAdr = $request->ownAdr;
      $garden->manager = $request->manager;
      $garden->manaFat = $request->manaFat;
      $garden->manaAdr = $request->manaAdr;
      $garden->manaNid = $request->manaNid;
      $garden->manaTin = $request->manaTin;
      $garden->manaMob = $request->manaMob;
      $garden->manaEml = $request->manaEml;
      $garden->partner = $request->partner;
      $garden->partAdr = $request->partAdr;
      $garden->mouza = $request->mouza;
      $garden->zlNo = $request->zlNo;
      $garden->leaDed = $request->leaDed;
      $garden->leaDedDat = $request->leaDedDat;
      $garden->leaDedExp = $request->leaDedExp;
      $garden->leaLan = $request->leaLan;
      $garden->leaLed = $request->leaLed;
      $garden->leaSta = $request->leaSta;
      $garden->teaToLan = $request->teaToLan;
      $garden->rabToLan = $request->rabToLan;
      $garden->etcToLan = $request->etcToLan;
      $garden->falLan = $request->falLan;
      $garden->etcStaLan = $request->etcStaLan;
      $garden->cultLan = $request->cultLan;
      $garden->planShad = $request->planShad;
      $garden->annTotRen = $request->annTotRen;
      $garden->lateRen = $request->lateRen;
      $garden->leaMonRR = $request->leaMonRR;
      $garden->latRenDat = $request->latRenDat;
      $garden->dcrNo = $request->dcrNo;
      $garden->lawOrd = $request->lawOrd;
      $garden->clinic = $request->clinic;
      $garden->bed = $request->bed;
      $garden->doctor = $request->doctor;
      $garden->nurse = $request->nurse;
      $garden->compounder = $request->compounder;
      $garden->ripWash = $request->ripWash;
      $garden->rawWash = $request->rawWash;
      $garden->primary = $request->primary;
      $garden->priStud = $request->priStud;
      $garden->secodary = $request->secodary;
      $garden->secStud = $request->secStud;
      $garden->higStud = $request->higStud;
      $garden->tourSpot = $request->tourSpot;
      $garden->playFil = $request->playFil;
      $garden->stage = $request->stage;
      $garden->straPla = $request->straPla;
      $garden->monument = $request->monument;
      $garden->freFight = $request->freFight;
      $garden->labor = $request->labor;
      $garden->community = $request->community;
      $garden->labComm = $request->labComm;
      $garden->advEdu = $request->advEdu;
      $garden->educRat = $request->educRat;
      $garden->stipend = $request->stipend;
      $garden->labHom = $request->labHom;
      $garden->labImpPro = $request->labImpPro;
      $garden->labOngPro = $request->labOngPro;
      $garden->finPro = $request->finPro;
      $garden->river = $request->river;
      $garden->rivNam = $request->rivNam;
      $garden->drug = $request->drug;
      $garden->disDis = $request->disDis;
      $garden->upoDis = $request->upoDis;
      $garden->casNo = $request->casNo;
      $garden->casePla = $request->casePla;
      $garden->caseDef = $request->caseDef;
      $garden->court = $request->court;
      $garden->casTyp = $request->casTyp;
      $garden->lawyer = $request->lawyer;
      $garden->nxtDatCas = $request->nxtDatCas;
      $garden->caseRes = $request->caseRes;
      $garden->caseOrd = $request->caseOrd;
      $garden->teaOnPro = $request->teaOnPro;
      $garden->comm = $request->comm;
      $garden->union_id = $request->union_id;
      $garden->leaCla_id = $request->leaCla_id;
      $garden->upozela_id = $request->upozela_id;
      $garden->cat_id = $request->cat_id;
      $garden->save();
      Session::flash('success','বাগান তথ‌্য আপডেটেড সফল');
      return redirect()->route('garden.index');
    }

    public function show($showId)
    {
        $id = Crypt::decryptString($showId);
        $garden = garden::find($id);
        return view('admin.garden.show',compact('garden'));
    }

    public function destroy(Request $request, $id)
    {
          $garden = garden::find($id);
          $garden->delete();
          Session::flash('success','বাগান তথ‌্য মুছা সফল');
          return redirect()->route('garden.index');
    }

}
 