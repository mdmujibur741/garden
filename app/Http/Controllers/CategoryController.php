<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class CategoryController extends Controller
{
    public function index()
    {
          $category = category::latest()->paginate(10);
        return view('admin.category.index',compact('category'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
          $request->validate([
                'name' => 'required|unique:categories',
          ]);

          $category = new category();
          $category->name = $request->name;
          $category->slug = Str::slug($request->name,'-');
          $category->save();
          Session::flash('success','বাগান শ্রেনী যোগ হয়েছে');
          return redirect()->back();
    }

    public function edit($enId)
    {
         $id = Crypt::decryptString($enId);
         $category = category::find($id);
         return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
      ]);
        $category = category::find($id);
      $category->name = $request->name;
      $category->slug = Str::slug($request->name,'-');
      $category->update();
      Session::flash('success','বাগান শ্রেনী আপডেট হয়েছে');
      return redirect()->route('category.index');

    }

    public function destroy(Request $request,$id)
    {
        $category = category::find($id);
        $category->delete();
        Session::flash('success','বাগান শ্রেনী ডিলেট হয়েছে');
        return redirect()->route('category.index');
    }
}
