<?php

namespace App\Http\Controllers;

use App\Models\union;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;

class UnionController extends Controller
{
    public function index()
    {
          $union = union::latest()->paginate(10);
        return view('admin.union.index',compact('union'));
    }

    public function create()
    {
        return view('admin.union.create');
    }

    public function store(Request $request)
    {
          $request->validate([
                'name' => 'required|unique:unions',
          ]);

          $union = new union();
          $union->name = $request->name;
          $union->slug = Str::slug($request->name,'-');
          $union->save();
          Session::flash('success','ইউনিয়ন যোগ হয়েছে');
          return redirect()->back();
    }

    public function edit($enId)
    {
         $id = Crypt::decryptString($enId);
         $union = union::find($id);
         return view('admin.union.edit',compact('union'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
      ]);
        $union = union::find($id);
      $union->name = $request->name;
      $union->slug = Str::slug($request->name,'-');
      $union->update();
      Session::flash('success','ইউনিয়ন আপডেট হয়েছে');
      return redirect()->route('union.index');

    }

    public function destroy(Request $request,$id)
    {
        $union = union::find($id);
        $union->delete();
        Session::flash('success','ইউনিয়ন ডিলেট হয়েছে');
        return redirect()->route('union.index');
    }
}
