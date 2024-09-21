<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Member;
use App\Models\Bial;
use App\Models\Bial_User;


class MemberPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function edit(User $user, Member $member) :bool
    {
        if(Bial_User::where('bial_id',$member->bial->id)->where('user_id',$user->id)->exists() || $user->level>3){
            return true;
        }
        else{
            return false;
        }
    }
    public function editAtt(User $user, Member $member) :bool
    {
        if(Bial_User::where('bial_id',$member->bial->id)->where('user_id',$user->id)->exists() || $user->level>3){
            return true;
        }
        else{
            return false;
        }
    }
    public function delete(User $user, Member $member) :bool
    {
        if(Bial_User::where('bial_id',$member->bial->id)->where('user_id',$user->id)->exists() || $user->level>3){
            return true;
        }
        else{
            return false;
        }
    }
}
