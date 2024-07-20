<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login.login2');
    }
    public function store(Request $request){
        //dd($request);
        $user = Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ]);
        if($user){
            $request->session()->regenerate();
            return redirect('/');
        }
        else{
            return view('auth.login.login2',['message' => 'Login failed']);
        }
    }
    public function changePassword(){
        return view('auth.login.changepwd');
    }
    public function changePasswordStore(){
        request()->validate([
            'password' => ['required', 'min:3', 'confirmed' ]
        ]);
        $user = Auth::user();
        $user->password = request()->input('password');
        return view('auth.login.changepwd',['message' => 'Password changed successfully']);
        dd($user);
    }
    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
