<?php

namespace Pallab\RolePermission;

use Illuminate\Support\ServiceProvider;

class RolePermissionServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/config/role-permission.php' => config_path('role-permission.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/database/migrations/' => database_path('migrations'),
        ], 'migrations');
    }

    /**
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/role-permission.php',
            'role-permission'
        );
    }
}