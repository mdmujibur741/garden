<?php

namespace App\Http\Controllers;

use App\Models\notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;

class NoticeController extends Controller
{
      public function index()
      {
          $notice = notice::orderBy('created_at', 'DESC')->paginate(20);
         return view('admin.notice.index',compact('notice'));
      }


      public function create()
      {
         return view('admin.notice.create');
      }

      public function store( Request $request )
      {
           $request->validate([
               'title' => 'required| max: 30',
               'description' => 'required',
           ]);

           $notice = new notice();
           $notice->title = $request->title;
           $notice->slug = Str::slug($request->title, '-');
           $notice->description = $request->description;
           $notice->save();
           Session::flash('success', 'নোটিস সফলভাবে সংযুক্ত হয়েছে');
           return redirect()->back();
      }

      public function show($id)
      {
          $notice = notice::find($id);
          $data = [
                     'name' => 'test Mujib',
                     'notice' => $notice,
          ];
          $pdf = Pdf::loadView('frontend/pdfFile', $data);
          $pdf->setPaper('a4', 'potrait');
         return $pdf->stream();
      }


      public function edit($editId)
      {
              $id = Crypt::decryptString($editId);
              $notice = notice::find($id);
              return view('admin.notice.edit',compact('notice'));
      }

      public function update(Request $request ,$id)
      {
          $request->validate([
               'title' => 'required| max: 30',
               'description' => 'required',
           ]);

          $notice = notice::find($id);
           $notice->title = $request->title;
           $notice->slug = Str::slug($request->title, '-');
           $notice->description = $request->description;
           $notice->update();
           Session::flash('success', 'নোটিস সফলভাবে আপডেট হয়েছে');
           return redirect()->route('notice.index');
      }

      public function status($id)
      {
              $notice = notice::find($id);
              if($notice->status == 1){
                   $notice->status = 0;
              }else{
                $notice->status = 1;
              }

              $notice->save();
              return redirect()->back();
              
      }
}
