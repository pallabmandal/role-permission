<?php

namespace Pallab\RolePermission;

use Illuminate\Support\ServiceProvider;
use Pallab\RolePermission\Commands\GeneratePermissions;
use Pallab\RolePermission\Commands\SeedSuperAdminRole;

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

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations/');
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
        if ($this->app->runningInConsole()) {
            $this->commands([
                GeneratePermissions::class,
                SeedSuperAdminRole::class
            ]);
        }
    }
}
