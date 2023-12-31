<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf41bb096e3509332c3e2ae1faa9802a3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pallab\\RolePermission\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pallab\\RolePermission\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf41bb096e3509332c3e2ae1faa9802a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf41bb096e3509332c3e2ae1faa9802a3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf41bb096e3509332c3e2ae1faa9802a3::$classMap;

        }, null, ClassLoader::class);
    }
}
