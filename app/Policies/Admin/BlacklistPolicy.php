<?php

namespace App\Policies\Admin;

use App\Blacklist;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlacklistPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->isDeveloper()) {
            return true;
        }
    }
    
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Blacklist  $blacklist
     * @return mixed
     */
    public function view(User $user, Blacklist $blacklist)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Blacklist  $blacklist
     * @return mixed
     */
    public function update(User $user, Blacklist $blacklist)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Blacklist  $blacklist
     * @return mixed
     */
    public function delete(User $user, Blacklist $blacklist)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Blacklist  $blacklist
     * @return mixed
     */
    public function restore(User $user, Blacklist $blacklist)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Blacklist  $blacklist
     * @return mixed
     */
    public function forceDelete(User $user, Blacklist $blacklist)
    {
        //
    }
}
