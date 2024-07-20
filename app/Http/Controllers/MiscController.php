<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MiscController extends Controller
{
    public function hruaitute(){
        return view('hruaitute');
    }
    public function search(){
        return view('search');
    }
    public function searchResult(){
        $str = $_GET['search'];
        $members = Member::where('name','like','%' . $str . '%')
            ->orWhere('father','like','%' . $str . '%')
            ->orderBy('bial_id')
            ->paginate(20)->withQueryString();
        //dd($members->links());
        return view('searchresult',['str' => $str, 'members' => $members]);
        
    }

}
