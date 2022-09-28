<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\upozela;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class UpozelaController extends Controller
{
    public function index()
    {
          $upozela = upozela::latest()->paginate(10);
        return view('admin.upozela.index',compact('upozela'));
    }

    public function create()
    {
        return view('admin.upozela.create');
    }

    public function store(Request $request)
    {
          $request->validate([
                'name' => 'required|unique:upozelas',
          ]);

          $upozela = new upozela();
          $upozela->name = $request->name;
          $upozela->slug = Str::slug($request->name,'-');
          $upozela->save();
          Session::flash('success','বাগান শ্রেনী যোগ হয়েছে');
          return redirect()->back();
    }

    public function edit($enId)
    {
         $id = Crypt::decryptString($enId);
         $upozela = upozela::find($id);
         return view('admin.upozela.edit',compact('upozela'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
      ]);
        $upozela = upozela::find($id);
      $upozela->name = $request->name;
      $upozela->slug = Str::slug($request->name,'-');
      $upozela->update();
      Session::flash('success','বাগান শ্রেনী আপডেট হয়েছে');
      return redirect()->route('upozela.index');

    }

    public function destroy(Request $request,$id)
    {
        $upozela = upozela::find($id);
        $upozela->delete();
        Session::flash('success','বাগান শ্রেনী ডিলেট হয়েছে');
        return redirect()->route('upozela.index');
    }
}
