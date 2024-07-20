<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;

class PostPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function edit(User $user, Post $post) :bool
    {
        if($post->user->id == $user->id || $user->level>3)
            return 1;
        else
            return 0;
    }
    public function delete(User $user, Post $post) :bool
    {
        return $post->user->id == $user->id;
    }
}
