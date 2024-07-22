<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function edit(User $this_user, User $user) :bool
    {
        return true;
        return $user->id == $this_user->id;
    }
    public function delete(User $this_user, User $user): bool
    {
        return $this_user->level > 3;
    }
}
