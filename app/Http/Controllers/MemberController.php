<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bial;
use App\Models\Member;


class MemberController extends Controller
{
    public function index(){
        $members = Member::paginate(10);
        //dd($members);
        return view('member.index',['members' => $members]);
    }
    public function create(){
        return view('member.create');
    }
    public function store(){
        //dd(request()->all());
        request()->validate([
            'name' => ['required'],
            'father' => ['required']
        ]);
        
        $member = Member::create([
            'name'=> request('name'),
            'father'=> request('father'),
            'bial_id' => request('bial'),
            'dob' => request('dob'),
            'address' => request('address'),
            'details' => request('details')
        ]);
        $members = Member::where('bial_id',$member->bial_id)->paginate();
        return view('bial.show',['bial' => Bial::find($member->bial_id), 'members' => $members]);
        //return view('bial.show',['bial' => $]);
    }
    public function show(Member $member){
        return view('member.show',['member' => $member]);
    }

    public function edit(Member $member){
        return view('member.edit',['member' => $member]);
    }
    public function update($id, Request $request){
        $request->validate([
            'name' => ['required'],
            'father' => ['required']
        ]);
        
        $member = Member::findOrFail($id);
        $member->update([
            'name'=> request('name'),
            'father'=> request('father'),
            'bial_id' => request('bial'),
            'dob' => request('dob'),
            'address' => request('address'),
            'details' => request('details')
        ]);
        return redirect('/member/' . $member->id);
    }
    public function destroy(Member $member){
            //return "Delete";
        //$member = Member::findOrFail($id);
        $member->delete();
        return redirect('/bial/' . $member->bial->id);
    }
    public function deleteAll(){
        return "Deleteall";
    }
}
