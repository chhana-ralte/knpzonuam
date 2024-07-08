<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class RegisterController extends Controller
{
    public function create(){
        return view('auth.register.create');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => 'required',
            'password' => ['required', 'min:6', 'confirmed']
        ]);
        //dd($request);
        $user = User::create($validated);
        Auth::login($user);
    }

    

}
