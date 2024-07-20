<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Bial;
use App\Models\Bial_User;


class BialPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function manage(User $user, Bial $bial) :bool
    {
        if(Bial_User::where('bial_id',$bial->id)->where('user_id',$user->id)->exists() || $user->level>3){
            return true;
        }
        else{
            return false;
        }
    }
}
