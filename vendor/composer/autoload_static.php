<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c38e5578625d6f4bc6e88b6fc74a24a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Database' => __DIR__ . '/../..' . '/libraries/Database.php',
        'DatabaseAccessObject' => __DIR__ . '/../..' . '/libraries/DatabaseAccessObject.php',
        'MySQL' => __DIR__ . '/../..' . '/config/MySQL.php',
        'Request' => __DIR__ . '/../..' . '/libraries/Request.php',
        'Router' => __DIR__ . '/../..' . '/libraries/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c38e5578625d6f4bc6e88b6fc74a24a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c38e5578625d6f4bc6e88b6fc74a24a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7c38e5578625d6f4bc6e88b6fc74a24a::$classMap;

        }, null, ClassLoader::class);
    }
}
