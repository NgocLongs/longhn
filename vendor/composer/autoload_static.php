<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit514eaeaa01c3753747d8cdafd739a00c
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'longhn\\' => 7,
        ),
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
        'longhn\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
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
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit514eaeaa01c3753747d8cdafd739a00c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit514eaeaa01c3753747d8cdafd739a00c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit514eaeaa01c3753747d8cdafd739a00c::$classMap;

        }, null, ClassLoader::class);
    }
}
