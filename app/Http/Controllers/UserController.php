<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index',['users' => User::all()]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([

        ]);
        User::create($validated);
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

        ]);
        $user->update($validated);
        return view('user.create');
    }

    public function destroy(sUser $user)
    {
        $user->delete();
        return "User Deleted";
    }
}
