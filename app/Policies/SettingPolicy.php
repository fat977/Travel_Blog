<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SettingPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Admin $admin): bool
    {
        //
        return $admin->type == 'admin';
    }

    /**
     * Determine whether the admin can view the model.
     */
    public function view(Admin $admin, Setting $setting): bool
    {
        //
        return $admin->type == 'admin';
    }

    /**
     * Determine whether the admin can create models.
     */
    public function create(Admin $admin): bool
    {
        //
        return $admin->type == 'admin';
    }

    /**
     * Determine whether the admin can update the model.
     */
    public function update(Admin $admin, Setting $setting): bool
    {
        //
        return $admin->type == 'admin';
    }

    /**
     * Determine whether the admin can delete the model.
     */
    public function delete(Admin $admin, Setting $setting): bool
    {
        //
        return $admin->type == 'admin';
    }

    /**
     * Determine whether the admin can restore the model.
     */
    public function restore(Admin $admin, Setting $setting): bool
    {
        //
        return $admin->type == 'admin';
    }

    /**
     * Determine whether the admin can permanently delete the model.
     */
    public function forceDelete(Admin $admin, Setting $setting): bool
    {
        //
        return $admin->type == 'admin';
    }
}
