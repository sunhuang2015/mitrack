<?php

namespace App\Policies;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrgPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function insert(User $user){
        return false;
    }
    public function destory(User $user){
        return false;
    }
}
