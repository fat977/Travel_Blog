<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Admin $admin): bool
    {
        //
    }

    /**
     * Determine whether the Admin can view the model.
     */
    public function view(Admin $admin, Post $post): bool
    {
        //
    }

    /**
     * Determine whether the Admin can create models.
     */
    public function create(Admin $admin): bool
    {
        //
        return true;
    }

    /**
     * Determine whether the Admin can update the model.
     */
    public function update(Admin $admin, Post $post): bool
    {
        //
        return  ($admin->id === $post->admin_id || $admin->type == 'admin') ;
    }

    /**
     * Determine whether the Admin can delete the model.
     */
    public function delete(Admin $admin, Post $post): bool
    {
        //
        return  ($admin->id === $post->admin_id || $admin->type == 'admin') ;

    }

    /**
     * Determine whether the Admin can restore the model.
     */
    public function restore(Admin $admin, Post $post): bool
    {
        //
    }

    /**
     * Determine whether the Admin can permanently delete the model.
     */
    public function forceDelete(Admin $admin, Post $post): bool
    {
        //
        return $admin->type == 'admin';
    }
}
