<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Log;

class UserController extends Controller
{
    public function index()
    {
        //dd(User::all());
        return view('user.index',['users' => User::all()]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $validated = $request->validate([
            'name' => ['required', 'min:3'],
            'username' => ['required', 'min:3'],
            'password' => ['min:3']
        ]);
        $user = User::create($validated);
        $user->roles()->sync($request->role);
        $user->bials()->sync($request->bial);
        return view('user.create');
    }

    public function show(User $user)
    {
        return view('user.show',['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('user.edit',['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:3'],
            'username' => ['required', 'min:3'],
        ]);
        $user = User::findOrFail($request->user_id);
        $user->update($validated);
        $user->roles()->sync($request->role);
        $user->bials()->sync($request->bial);
        return ['user_id' => $user->id];
    }

    public function destroy(User $user)
    {
        $user = User::findOrFail(request()->user_id);
        $user->roles()->detach();
        $user->bials()->detach();
        Log::where('user_id',$user->id)->delete();
        $user->delete();
        return "User Deleted";
    }
}
