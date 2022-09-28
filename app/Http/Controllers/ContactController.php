<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index()
    {
         $contact = contact::latest()->paginate(20);
         return view('admin.contact.index',compact('contact'));
    }

    public function store( Request $request)
    {
          $request->validate([
                  'name' => 'required',
                  'mobile' => 'required',
                  'message' => 'required|min:20',
          ]);

          $contact = new contact();

          $contact->name = $request->name;
          $contact->email = $request->email;
          $contact->mobile = $request->mobile;
          $contact->message = $request->message;
          $contact->garden = Auth::user()->garden_id;
          $contact->save();
          Session::flash('success', 'মেসেজ সফলভাবে সাবমিট হয়েছে');
          return redirect()->back();

    }

    public function show($showId)
    {
         $id = Crypt::decryptString($showId);
         $contact = contact::find($id);
         return view('admin.contact.show',compact('contact'));
    }

    public function destroy(Request $request, $id)
    {
          $contact = contact::find($id);
          $contact->delete();
          Session::flash('success', 'মেসেজ সফলভাবে ডিলেট হয়েছে');
          return redirect()->back();
    }
}
