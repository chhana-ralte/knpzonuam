<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Attmaster;
use App\Models\Att;
use App\Models\Bial;

class AttController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($attmaster_id)
    {
        if(isset($_GET['bial_id'])){
            $bial = Bial::findOrFail($_GET['bial_id']);
            $members = Member::where('bial_id',$bial->id)
                ->where('deleted',0)
                ->paginate();
        }
        else{
            $members = Member::paginate();
            $bial = false;
        }
        $atts = Att::where('attmaster_id',$attmaster_id)->whereIn('member_id',$members->pluck('id'))->get();
        $attarr = [];
        foreach($atts as $key=>$att){
            $attarr[$att->member_id] = $att->marking;
            //array_push($attarr,[$att->member_id => $att->marking]);
        }
        
        $data = [
            'members' => $members, 
            'attmaster'=>Attmaster::findOrFail($attmaster_id), 
            'bial' => $bial,
            'atts' => $attarr
        ];
        //dd($data);
        return view('att.create',$data);
        //return view('bialatt.index',$data);
    }

    public function store(Attmaster $attmaster, Request $request)
    {
        //dd($request->all());
        //$result = [];
        foreach($request->all() as $key=>$req)
        {
            if(substr($key, 0, 3) == "id_"){
                Att::updateOrCreate(
                    ['member_id' => substr($key, 3), 'attmaster_id' => $attmaster->id],
                    ['marking' => $req]
                );
                $k = substr($key, 3);
                //array_push($result,[$key, $k ,$req]);
            }
        }

        return redirect('bial/' . $request->bial_id . '/att');
        dd($request->all());
        dd($data);
        //return $tmpatt;
        return view('bialatt.index',$data);
        //return view('bialatt.index',[])
        //array_push($result, [$attmaster->id,$attmaster->kaini]);
        dd($result);
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
