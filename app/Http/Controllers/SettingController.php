<?php

namespace App\Http\Controllers;

use App\Models\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function create()
    {
        $setting = setting::first();
        return view('admin.setting.edit', compact('setting'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required|image',
            'headImgOne' => 'required|image',
            'headImgTwo' => 'required|image',
            'headImgThree' => 'required|image',
            'SlidImgOne' => 'required|image',
            'SlidImgTwo' => 'required|image',
            'SlidImgThree' => 'required|image',

        ]);


        $setting = new setting();

        $logo = $request->logo;
        Storage::putFile('public/setting/', $logo);
        $setting->logo = 'Storage/setting/' . $logo->hashName();


        $headImgOne = $request->headImgOne;
        Storage::putFile('public/setting/', $headImgOne);
        $setting->headImgOne = 'Storage/setting/' . $headImgOne->hashName();


        $headImgTwo = $request->headImgTwo;
        Storage::putFile('public/setting/', $headImgTwo);
        $setting->headImgTwo = 'Storage/setting/' . $headImgTwo->hashName();


        $headImgThree = $request->headImgThree;
        Storage::putFile('public/setting/', $headImgThree);
        $setting->headImgThree = 'Storage/setting/' . $headImgThree->hashName();


        $SlidImgOne = $request->SlidImgOne;
        Storage::putFile('public/setting/', $SlidImgOne);
        $setting->SlidImgOne = 'Storage/setting/' . $SlidImgOne->hashName();



        $SlidImgTwo = $request->SlidImgTwo;
        Storage::putFile('public/setting/', $SlidImgTwo);
        $setting->SlidImgTwo = 'Storage/setting/' . $SlidImgTwo->hashName();


        $SlidImgThree = $request->SlidImgThree;
        Storage::putFile('public/setting/', $SlidImgThree);
        $setting->SlidImgThree = 'Storage/setting/' . $SlidImgThree->hashName();

        $setting->save();
        Session::flash('success', 'সেটিং ডাটা যোগ হয়েছে');

        return redirect()->back();
    }


    public function update(Request $request, $id)
    {
        $setting = setting::find($id);

        //   logo 
        if ($request->file('logo')) {
            if (File::exists($setting->logo)) {
                File::delete($setting->logo);
            }
            $logo = $request->logo;
            Storage::putFile('public/setting/', $logo);
            $setting->logo = 'Storage/setting/' . $logo->hashName();
        }


        // header img one
        if ($request->file('headImgOne')) {
            if (File::exists($setting->headImgOne)) {
                File::delete($setting->headImgOne);
            }
            $headImgOne = $request->headImgOne;
            Storage::putFile('public/setting/', $headImgOne);
            $setting->headImgOne = 'Storage/setting/' . $headImgOne->hashName();
        }

        // header img Two
        if ($request->file('headImgTwo')) {
            if (File::exists($setting->headImgTwo)) {
                File::delete($setting->headImgTwo);
            }
            $headImgTwo = $request->headImgTwo;
            Storage::putFile('public/setting/', $headImgTwo);
            $setting->headImgTwo = 'Storage/setting/' . $headImgTwo->hashName();
        }


        //    header Img Three
        if ($request->file('headImgThree')) {
            if (File::exists($setting->headImgThree)) {
                File::delete($setting->headImgThree);
            }
            $headImgThree = $request->headImgThree;
            Storage::putFile('public/setting/', $headImgThree);
            $setting->headImgThree = 'Storage/setting/' . $headImgThree->hashName();
        }


       // Slider Img One 
        if ($request->file('SlidImgOne')) {
            if (File::exists($setting->SlidImgOne)) {
                File::delete($setting->SlidImgOne);
            }
            $SlidImgOne = $request->SlidImgOne;
            Storage::putFile('public/setting/', $SlidImgOne);
            $setting->SlidImgOne = 'Storage/setting/' . $SlidImgOne->hashName();
        }


        //  Slider Img Two
        if ($request->file('SlidImgTwo')) {
            if (File::exists($setting->SlidImgTwo)) {
                File::delete($setting->SlidImgTwo);
            }
            $SlidImgTwo = $request->SlidImgTwo;
            Storage::putFile('public/setting/', $SlidImgTwo);
            $setting->SlidImgTwo = 'Storage/setting/' . $SlidImgTwo->hashName();
        }


        // Slider Img Three
        if ($request->file('SlidImgThree')) {
            if (File::exists($setting->SlidImgThree)) {
                File::delete($setting->SlidImgThree);
            }
            $SlidImgThree = $request->SlidImgThree;
            Storage::putFile('public/setting/', $logo);
            $setting->SlidImgThree = 'Storage/setting/' . $SlidImgThree->hashName();
        }

        $setting->update();
        Session::flash('success', 'সেটিং ডাটা আপডেট হয়েছে');

        return redirect()->back();
    }
}
