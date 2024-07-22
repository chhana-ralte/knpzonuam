<?php
//namespace App\Models;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BialController;
use App\Http\Controllers\AttmasterController;
use App\Http\Controllers\AttController;
use App\Http\Controllers\BialAttController;
use App\Http\Controllers\MemberAttController;
use App\Http\Controllers\MiscController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AttpermitController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\UserController;

//use App\Policies\PostPolicy;

use Illuminate\Http\Request;
//use App\Models\Student;
//use App\Models\Person;

Route::controller(TestController::class)->group(function(){
    Route::get('test', 'index');
    Route::get('dashboard', 'dashboard');
    Route::get('/ckeditor', 'ckeditor');
});

Route::get('/', [BialController::class, 'index']);

Route::controller(MiscController::class)->group(function(){
    Route::get('/search', 'search');
    Route::get('/searchresult', 'searchResult');
    Route::get('/hruaitute','hruaitute');
});

// Route::resource('member', MemberController::class)->only(['edit','update','destroy'])->middleware(['auth','can:edit,member']);
// Route::resource('member', MemberController::class)->only(['create','store'])->middleware('auth');
// Route::resource('member', MemberController::class)->only(['index','show']);

Route::controller(MemberController::class)->group(function(){
    Route::get('/member','index')->name('member.index');
    Route::get('/member/create','create')->name('member.create')->middleware('auth');
    Route::post('/member','store')->name('member.store')->middleware('auth');
    Route::get('/member/{member}','show')->name('member.show');
    Route::get('/member/{member}/edit','edit')->name('member.edit')->middleware(['auth','can:edit,member']);
    Route::patch('/member/{member}','update')->name('member.update')->middleware('auth');
    Route::delete('/member/{member}','destroy')->name('member.destroy')->middleware(['auth','can:delete,member']);
});

Route::controller(RegisterController::class)->group(function(){
    Route::get('/register', 'create')->middleware('auth');
    Route::post('/register', 'store');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'store');
    Route::post('/logout', 'destroy')->name('logout');
    Route::get('/changepwd', 'changePassword');
    Route::post('/changepwd', 'changePasswordStore')->name('changepassword');
});

Route::controller(BialController::class)->group(function(){
    Route::get('/bial','index')->name('bial.index');
    Route::get('/bial/{bial}','show')->name('bial.show');
});

Route::controller(AttmasterController::class)->group(function(){
    Route::get('/attmaster','index')->name('attmaster.index');
    Route::get('/attmaster/create','create')->name('attmaster.create')->middleware(['auth']);
    Route::post('/attmaster','store')->name('attmaster.store')->middleware('auth');
    Route::get('/attmaster/{attmaster}','show')->name('attmaster.show');
    //Route::get('/attmaster/{attmaster}/edit','edit')->name('attmaster.edit');
    //Route::patch('/attmaster/{attmaster}','update')->name('attmaster.update');
    //Route::delete('/attmaster/{attmaster}','destroy')->name('attmaster.destroy');
});

Route::get('/log', [LogController::class, 'index'])->middleware(['auth']);
Route::resource('attmaster.att',Attcontroller::class)->only(['index']);
Route::resource('attmaster.att',Attcontroller::class)->except(['index'])->middleware('auth');

Route::controller(BialAttController::class)->group(function(){
    Route::get('/bial/{bial}/att','index')->name('bial.att.index');
    Route::get('/bial/{bial}/att/create','create')->name('bial.att.create')->middleware('auth');
    Route::post('/bial/{bial}/att','store')->name('bial.att.store')->middleware('auth');
    //Route::get('/bial/{bial}/edit','edit')->name('bial.edit');
    //Route::patch('/bial/{bial}','update')->name('bial.update');
    //Route::delete('/bial/{bial}','destroy')->name('bial.destroy');
});

Route::controller(MemberAttController::class)->group(function(){
    Route::get('/member/{member}/att','index')->name('member.att.index');
    Route::get('/member/{member}/att/create','create')->name('member.att.create')->middleware('auth');
    Route::post('/member/{member}/att','store')->name('member.att.store')->middleware('auth');
    //Route::get('/member/{member}/edit','edit')->name('member.edit');
    //Route::patch('/member/{member}','update')->name('member.update');
    //Route::delete('/member/{member}','destroy')->name('member.destroy');
});

Route::resource('post',PostController::class)->only(['create','store'])->middleware('auth');
Route::resource('post',PostController::class)->only(['index','show']);
Route::resource('post',PostController::class)->only(['edit','destroy','update'])->middleware(['auth','can:edit,post']);
//Route::resource('post',PostController::class)->only(['edit','destroy'])->middleware('auth')->can('edit-post', 'post');

//Route::resource('user', UserController::class)->middleware(['auth','can:edit,user']);

Route::controller(UserController::class)->group(function(){
    Route::get('/user','index')->middleware(['auth','role:user']);
    Route::get('/user/create','create')->middleware('auth');
    Route::post('/user','store');
    Route::get('/user/{user}','show');
    Route::get('/user/{user}/edit','edit')->middleware(['auth']);
    Route::patch('/user/{user}','update');
    Route::delete('/user/{user}','destroy')->middleware('auth');
});

// Route::controller(PostController::class)->group(function(){
//     Route::get('/post','index');
//     Route::get('/post/create','create')->middleware('auth');
//     Route::post('/post','store');
//     Route::get('/post/{post}','show');
//     Route::get('/post/{post}/edit','edit')->middleware(['auth','can:edit-post,post']);
//     Route::patch('/post/{post}','update');
//     Route::delete('/post/{post}','destroy')->middleware('auth');
// });
// Route::resource('member.att',MemberAttController::class)->shallow();


// Route::controller(MemberController::class)->group(function(){
//    Route::get('/member/deleteall','deleteAll');
//     Route::get('/','index');
//     Route::get('/member','index');
//     Route::get('/member/create','create');
//     Route::post('/member','store');
//     Route::get('/member/{member}','show');
//     Route::get('/member/{member}/edit','edit');
//     Route::patch('/member/{member}','update');
//     Route::delete('/member/{member}','destroy');

// });




Route::get('/ajaxtest', [AttpermitController::class, 'index']);
Route::post('/ajaxtest', [AttpermitController::class, 'store']);



//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
