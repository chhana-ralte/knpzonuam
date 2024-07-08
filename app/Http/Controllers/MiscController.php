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
        $str = $_GET['search'];
        $members = Member::where('name','like','%' . $str . '%')
            ->orWhere('father','like','%' . $str . '%')
            ->paginate(5)->withQueryString();
        //dd($members->links());
        return view('search',['str' => $str, 'members' => $members]);
        
    }
}
