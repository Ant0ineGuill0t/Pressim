<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit806ad72a51bf200dcb5f2909e9d87d13
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Pressim\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Pressim\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Dispatcher' => __DIR__ . '/..' . '/benoclock/alto-dispatcher/Dispatcher.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit806ad72a51bf200dcb5f2909e9d87d13::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit806ad72a51bf200dcb5f2909e9d87d13::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit806ad72a51bf200dcb5f2909e9d87d13::$classMap;

        }, null, ClassLoader::class);
    }
}
