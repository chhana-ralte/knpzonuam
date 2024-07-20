<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attmaster;

class AttmasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attmasters = Attmaster::orderBy('kaini')->get();
        return view('attmaster.index',['attmasters' => $attmasters]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attmaster.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attmaster = Attmaster::create([
            'kaini'=>$request->kaini,
            'remark'=>$request->remark
        ]);
        return redirect('/attmaster');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('attmaster.show',['attmaster' => Attmaster::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
