<?php

namespace App\Http\Controllers;

use App\Models\garden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class smsController extends Controller
{
    public function index()
    {
        $garden = DB::table('gardens')->select('id','garden', 'manager', 'manaMob')->get();
        
        return view('admin.sms.index',compact('garden'));
    }
}
