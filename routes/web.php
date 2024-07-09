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

Route::get('/', [MemberController::class, 'index']);
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
    Route::get('/hruaitute','hruaitute');
});


Route::resource('member', MemberController::class);//->middleware('auth');

Route::controller(RegisterController::class)->group(function(){
    Route::get('/register', 'create');
    Route::post('/register', 'store');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'store');
    Route::post('/logout', 'destroy')->name('logout');
});

Route::controller(TestController::class)->group(function(){
    Route::get('test', 'index');
    Route::get('dashboard', 'dashboard');
});

Route::resource('bial',BialController::class);
Route::resource('attmaster',AttmasterController::class);
Route::resource('attmaster.att',AttController::class)->shallow();
Route::resource('bial.att',BialAttController::class)->shallow();
Route::resource('member.att',MemberAttController::class)->shallow();


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
