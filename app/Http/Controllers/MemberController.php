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
            'father' => ['required'],
            'bial' => ['required']
        ]);
        
        $member = Member::create([
            'name'=> request('name'),
            'father'=> request('father'),
            'bial_id' => request('bial'),
            'dob' => request('dob'),
            'phone' => request('phone'),
            'sspawl' => request('sspawl'),
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
    public function destroy(Member $member, Request $request){
        //dd(request()->all());
            //return "Delete";
        //$member = Member::findOrFail($id);
        if($request->delete == "true"){
            $member->update([
                'deleted' => '1'
            ]);
            return redirect('/bial/' . $member->bial->id);    
        }
        else{
            $member->update([
                'deleted' => 0
            ]);
            return redirect('/member/' . $member->id);
    
        }
    }
    public function deleteAll(){
        return "Deleteall";
    }
}
