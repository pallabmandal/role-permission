<?php

namespace Pallab\RolePermission;

use App\Models\User;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Pallab\RolePermission\Exceptions\AuthException;

class RolePermission
{
    /**
     * @param string $method
     * @return bool
     * @throws AuthException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function checkRole(string $method): bool
    {
        $user = $this->getUser();
        $role = $user->roles;
        if(sizeof($role) < 1)
        {
            throw new AuthException("User does not have a role");
        }
        if(config('role-permission.allow_super_admin_overwrite_all') && $role[0]->code == config('role-permission.super_admin_role'))
        {
            return true;
        }
        $methodPermission = $this->getMethodPermission()."@".$method;
        return $role[0]->permissions()->where('permission', $methodPermission)->exists();
    }

    public function getMethodPermission(){
        $className = debug_backtrace()[2]['class'];
        $className = str_replace('\\',"/", $className);
        return str_replace('App/Http/Controllers'.config('role-permission.controller_directory_suffix'),"", $className);
    }

    /**
     * @return User
     * @throws AuthException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function getUser(): User
    {
        $driver = config('role-permission.auth_driver');
        $driver = new $driver;
        $user = $driver->get();
        if(empty($user))
        {
            throw new AuthException("Unable to find user");
        }
        return $user;
    }

}
