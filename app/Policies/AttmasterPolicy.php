<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Bial;
use App\Models\Bial_User;
use App\Models\Attmaster;


class AttmasterPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function create(User $user) :bool
    {
        if($user->level > 3){
            return true;
        }
        else{
            return false;
        }
    }
    public function manage(User $user, Attmaster $attmaster) :bool
    {
        return true;
    }
}
