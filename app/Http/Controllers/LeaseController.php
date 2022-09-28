<?php

namespace App\Http\Controllers;

use App\Models\lease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class LeaseController extends Controller
{
    public function index()
    {
          $lease = lease::latest()->paginate(10);
        return view('admin.lease.index',compact('lease'));
    }

    public function create()
    {
        return view('admin.lease.create');
    }

    public function store(Request $request)
    {
          $request->validate([
                'name' => 'required|unique:leases',
          ]);

          $lease = new lease();
          $lease->name = $request->name;
          $lease->slug = Str::slug($request->name,'-');
          $lease->save();
          Session::flash('success','বাগান শ্রেনী যোগ হয়েছে');
          return redirect()->back();
    }

    public function edit($enId)
    {
         $id = Crypt::decryptString($enId);
         $lease = lease::find($id);
         return view('admin.lease.edit',compact('lease'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
      ]);
        $lease = lease::find($id);
      $lease->name = $request->name;
      $lease->slug = Str::slug($request->name,'-');
      $lease->update();
      Session::flash('success','বাগান শ্রেনী আপডেট হয়েছে');
      return redirect()->route('lease.index');

    }

    public function destroy(Request $request,$id)
    {
        $lease = lease::find($id);
        $lease->delete();
        Session::flash('success','বাগান শ্রেনী ডিলেট হয়েছে');
        return redirect()->route('lease.index');
    }
}
