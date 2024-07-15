<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class RegisterController extends Controller
{
    public function create(){
        return view('auth.register.create2');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'min:3'],
            'username' => 'required',
            'password' => ['required', 'min:3', 'confirmed']
        ]);
        
        $user = User::create($validated);
        //dd($validated);
        Auth::login($user);
    }

    

}
