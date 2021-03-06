<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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

    //第一个为当前登录的用户，第二个是进行验证的用户
    public function update(User $currentUser,User $user)
    {
        return $currentUser->id  === $user->id;
    }

    public function destroy(User $currentUser,User $user)
    {
        return $currentUser->is_admin && $currentUser->id !==$user->id;
    }

    //自己不能关注自己
    public function follow(User $currentUser,User $user)
    {
        return $currentUser->id !== $user->id;
    }
}
