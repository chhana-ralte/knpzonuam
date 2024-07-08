<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Attmaster;
use App\Models\Att;

class MemberAttController extends Controller
{
    public function create(Member $member){
        $attmasters = Attmaster::orderBy('kaini')->get();
        $atts = Att::where('member_id',$member->id)->whereIn('attmaster_id',$attmasters->pluck('id'))->get();
        $attarr = [];
        foreach($atts as $key=>$att){
            $attarr[$att->attmaster_id] = $att->marking;
            //array_push($attarr,[$att->member_id => $att->marking]);
        }
        
        $data = [
            'attmasters' => $attmasters,
            'member' => $member,
            'atts' => $attarr
        ];
        //dd($data);
        return view('memberatt.create',$data);
        //return view('bialatt.index',$data);
    }
    public function store(Member $member, Request $request){
        foreach($request->all() as $key=>$req)
        {
            if(substr($key, 0, 3) == "id_"){
                Att::updateOrCreate(
                    ['member_id' => $member->id, 'attmaster_id' => substr($key, 3)],
                    ['marking' => $req]
                );
            }
        }
        $bial_id = $member->bial->id;
        return redirect('bial/' . $bial_id . '/att');
    }
}
