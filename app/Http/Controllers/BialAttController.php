<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bial;
use App\Models\Att;
use App\Models\Member;
use App\Models\Attmaster;

class BialAttController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Bial $bial)
    {
        $arr = [];
        $arr[4][2] = 2;
        $arr[100][6] =3;
        //dd($arr);
        $members = Member::where('bial_id',$bial->id)->get();
        $atts = Att::whereIn('member_id',$members->pluck('id'))->get();
        $attmasters = Attmaster::orderBy('kaini')->get();
        $bials = Bial::orderBy('bial')->get();
        $tmpatt = [];
        foreach($atts as $att){
            $tmpatt[$att->attmaster_id][$att->member_id] = $att->marking;
        }
        $data = [
            'bials' => $bials,
            'bial' => $bial,
            'attmasters' => $attmasters,
            'members' => $members,
            'atts' => $tmpatt
        ];
        //dd($data);
        //return $tmpatt;
        return view('bialatt.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
