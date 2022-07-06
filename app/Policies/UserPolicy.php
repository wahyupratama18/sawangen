<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Make sure the user is an administrator
     *
     * @param User $user
     * @return boolean
     */
    public function isAnAdministrator(User $user): bool
    {
        return $user->anAdmin;
    }

    /**
     * Make sure this user has a store
     *
     * @param User $user
     * @return boolean
     */
    public function haveAStore(User $user): bool
    {
        return !empty($user->store);
    }

    public function adminOrStoreOnly(User $user): bool
    {
        return $this->isAnAdministrator($user) || $this->haveAStore($user);
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $userPolicy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, User $userPolicy)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $userPolicy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, User $userPolicy)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $userPolicy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, User $userPolicy)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $userPolicy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, User $userPolicy)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $userPolicy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, User $userPolicy)
    {
        //
    }
}
