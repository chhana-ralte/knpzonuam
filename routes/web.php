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

//use App\Models\Student;
//use App\Models\Person;

Route::get('/', [BialController::class, 'index']);
// {
    //return "Hello world";
    //dd(Person::all());
    //return view("member.index", );
    //return view("home",["students" => Student::with('person')->cursorPaginate(5)]);
    //return view("home",["students" => Student::with('person')->simplePaginate(5)]);
    //return view('welcome');
//});
Route::controller(MiscController::class)->group(function(){
    Route::get('/search', 'search');
    Route::get('/searchresult', 'searchResult');
    Route::get('/hruaitute','hruaitute');
});

Route::controller(MemberController::class)->group(function(){
    Route::get('/member','index')->name('member.index');
    Route::get('/member/create','create')->name('member.create')->middleware('auth');
    Route::post('/member','store')->name('member.store');
    Route::get('/member/{member}','show')->name('member.show');
    Route::get('/member/{member}/edit','edit')->name('member.edit')->middleware('auth');
    Route::patch('/member/{member}','update')->name('member.update');
    Route::delete('/member/{member}','destroy')->name('member.destroy');
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

Route::controller(TestController::class)->group(function(){
    Route::get('test', 'index');
    Route::get('dashboard', 'dashboard');
});

Route::controller(BialController::class)->group(function(){
    Route::get('/bial','index')->name('bial.index');
    Route::get('/bial/{bial}','show')->name('bial.show');
});

Route::controller(AttmasterController::class)->group(function(){
    Route::get('/attmaster','index')->name('attmaster.index');
    Route::get('/attmaster/create','create')->name('attmaster.create')->middleware('auth');
    Route::post('/attmaster','store')->name('attmaster.store')->middleware('auth');
    //Route::get('/attmaster/{attmaster}/edit','edit')->name('attmaster.edit');
    //Route::patch('/attmaster/{attmaster}','update')->name('attmaster.update');
    //Route::delete('/attmaster/{attmaster}','destroy')->name('attmaster.destroy');
});

Route::controller(AttController::class)->group(function(){
    Route::get('/attmaster/{attmaster}/att','index')->name('attmaster.att.index');
    Route::get('/attmaster/{attmaster}/att/create','create')->name('attmaster.att.create')->middleware('auth');
    Route::post('/attmaster/{attmaster}/att','store')->name('attmaster.att.store')->middleware('auth');
    //Route::get('/attmaster/{attmaster}/edit','edit')->name('attmaster.edit');
    //Route::patch('/attmaster/{attmaster}','update')->name('attmaster.update');
    //Route::delete('/attmaster/{attmaster}','destroy')->name('attmaster.destroy');
});

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

// Route::resource('member.att',MemberAttController::class)->shallow();

//Auth::routes(['bial.index']);

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




Route::get('/testing', function () {
    //return "Hello world";
    return view("test", [
        "hello" => "Hellooooowooeoeoeooe"
    ]);
    //return view('welcome');
});



//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
