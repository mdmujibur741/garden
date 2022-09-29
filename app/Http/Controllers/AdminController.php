<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
     public function login()
     {
        return view('admin.login');
     }

     public function adminCheck(Request $request)
     {
           $email = $request->email;
           $password = $request->password;

           $admin = admin::where('email',$email)->where('password',$password)->first();
           if($admin ==!null){
               Session::put('adminId', $admin->id);
               Session::put('adminEmail', $admin->email);
               Session::put('adminName', $admin->name);
               return redirect()->route('dashboard');
           }else{
                
                  Session::put('adminError','Data not Match');
                  return redirect()->back();
           }
          
     }

     public function logout()
     {
              Session::flush();
              return redirect('/');
     }
}
