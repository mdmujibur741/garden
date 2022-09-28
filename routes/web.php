<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GardenController;
use App\Http\Controllers\LeaseController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\smsController;
use App\Http\Controllers\UnionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UpozelaController;
use App\Http\Controllers\userController;
use App\Http\Controllers\ContactController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;




// admin route
Route::get('admin/login',[AdminController::class,'login'])->name('admin.login');
Route::post('admin/check',[AdminController::class,'adminCheck'])->name('admin.login.check');
Route::get('dashboard', [dashboardController::class,'dashboard'] )->name('dashboard')->middleware('admin');
            
Route::middleware(['admin'])->prefix('admin')->group( function(){
    
    Route::resource('category', CategoryController::class);
    Route::resource('upozela', UpozelaController::class);
    Route::resource('union',UnionController::class);
    Route::resource('lease',LeaseController::class);
    Route::resource('garden',GardenController::class);
    Route::resource('sms',smsController::class);
    Route::resource('user',userController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('contact',ContactController::class);
    Route::resource('notice', NoticeController::class);
    Route::get('notice/status/{id}',[NoticeController::class,'status'])->name('notice.status');

});








Route::get('/',[FrontendController::class,'index'])->name('tea.home');
Route::get('/edit/garden',[FrontendController::class,'editGarden'])->name('tea.edit')->middleware('auth');
Route::put('/profile/update/{id}',[FrontendController::class,'update'])->name('tea.update');
Route::get('/list',[FrontendController::class,'GardenList'])->name('tea.list');
Route::get('/notice',[FrontendController::class,'notice'])->name('tea.notice');
Route::get('/profile',[FrontendController::class,'profile'])->name('tea.profile')->middleware('auth');
Route::get('/contact',[FrontendController::class,'contact'])->name('tea.contact')->middleware('auth');
Route::get('save/pdf/{id}',[FrontendController::class,'savePdf'])->name('tea.pdf');


Auth::routes();



Route::get('test', function(){
          return view('frontend.pdfFile');
});


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');