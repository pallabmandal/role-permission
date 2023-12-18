<?php

namespace Pallab\RolePermission\Core;
use App\Exceptions\AuthException;
use App\Models\User;
use App\Helpers\Auth;

class JwtAuthDriver
{
    /**
     * @return User|null
     * @throws AuthException
     */
    public function get(): ?User
    {
        /** @var User $user */
        $user = Auth::getAuth();
        return $user;
    }
}
