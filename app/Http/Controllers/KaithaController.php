<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Att;
use App\Models\Attmaster;
use App\Models\Member;
use Illuminate\Support\Facades\DB;

class KaithaController extends Controller
{
    public function index(){
        $kaizat = Attmaster::count();
        //SELECT members.id,members.name,bial_id,count(*) 
        //FROM `atts` JOIN members ON members.id=atts.member_id 
        //WHERE marking = 'P' 
        //GROUP BY members.id,bial_id 
        //ORDER BY count(*) desc,bial_id;
        
        $lists = DB::table('atts')->join('members','members.id','=','atts.member_id')
            ->selectRaw('members.id, members.name, count(atts.id) as count, bial_id')
            ->where('atts.marking','=','P')
            ->groupBy('members.id', 'members.name', 'members.bial_id')
            ->orderBy('count','desc')
            ->orderBy('bial_id')
            ->get();
            //->lists('count', 'kind');
        $data = ['kaizat' => $kaizat, 'lists' => $lists];
        return view('kaitha.index')->with($data);
    }
    public function show($id){
        $list = Att::where('member_id',$id)->orderBy('attmaster_id')->get();
        $member = Member::find($id);
        $data = ['list' => $list, 'member' => $member];
        
        return view('kaitha.show')->with($data);
        
    }
}
