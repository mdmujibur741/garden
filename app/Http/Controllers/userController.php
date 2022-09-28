<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class userController extends Controller
{
    public function index()
    {
        $user = User::latest()->paginate(20);
        return view('admin.user.index',compact('user'));
    }

    public function create()
    {
         $garden = DB::table('gardens')->select('id','garden')->get();
         return view('admin.user.create',compact('garden'));
    }


    public function store(Request $request)
    {
            $request->validate([
                 'garden_id' => 'required',
                 'name' => 'required',
                 'email' => 'required|email|max:60',
                 'password' => 'required|max:14|min:6',
            ]);


            $user = new User();
            $user->garden_id = $request->garden_id;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            Session::flash('success','ব‌্যাবহারকারি যোগ হয়েছে');
            return redirect()->back();

    }

    public function edit($editId)
    {
         $id = Crypt::decryptString($editId);
         $user = User::find($id);
         $garden = DB::table('gardens')->select('id','garden')->get();
         return view('admin.user.edit',compact('user','garden'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'garden_id' => 'required',
            'name' => 'required',
            'email' => 'required|email|max:60',
            'password' => 'max:14',
       ]);

       $user = User::find($id);
       $user->garden_id = $request->garden_id;
       $user->name = $request->name;
       $user->email = $request->email;
       if($request->password ==!null){
        $user->password = bcrypt($request->password);
       }
       $user->update();
       Session::flash('success','ব‌্যাবহারকারি তথ‌্য আপডেট হয়েছে');
       return redirect()->route('user.index');
       
    }

    public function destroy(Request $request,$id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash('success','বাগান ব‌্যাবহারকারি ডিলেট হয়েছে');
        return redirect()->back();
    }
}
