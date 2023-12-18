<?php

namespace Pallab\RolePermission\Core;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DefaultAuthDriver
{
    /**
     * @return User|null
     */
    public function get(): ?User
    {
        /** @var User $user */
        $user = User::query()->find(Auth::user());
        return $user;
    }
}
