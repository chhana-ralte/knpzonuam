<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bial;
use App\Models\Member;

class BialController extends Controller
{
    public function index(){
        $bials = DB::table('members')
                 ->select('bial_id as bial', DB::raw('count(*) as cnt'))
                 ->groupBy('bial_id')
                 ->orderBy('bial_id')
                 ->get();

        // $bials = Member::selectRaw('bial_id, count(*) as cnt')
        //     ->groupBy('bial_id')
        //     ->orderBy('bial_id')
        //     ->pluck('bial_id','cnt')->all();
        //dd($bials);
        return view('bial.index',['bials' => $bials]);
    }
    public function show(string $id)
    {
        $members = Member::where('bial_id',$id)->paginate();
        return view('bial.show',['bial' => Bial::find($id), 'members' => $members]);
    }

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
