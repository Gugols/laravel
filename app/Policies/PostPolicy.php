<?php

namespace App\Policies;

use App\User;
use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Auth;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the post.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function view(User $user, Post $post)
    {
        //
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(User $user, Post $post)
    {   
                     // If user is administrator, then can edit any post
                     if (Auth::user()->can('edit all posts')) {
                        return true;
                    }
            
                    // Check if user is the post author
                    if ($user->id === $post->user_id) {
                        return true;
                    }
            
                    return false;
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function delete(User $user, Post $post)
    {
                     // If user is administrator, then can edit any post
                     if (Auth::user()->can('edit all posts')) {
                        return true;
                    }
            
                    // Check if user is the post author
                    if ($user->id === $post->user_id) {
                        return true;
                    }
            
                    return false;
    }
}
