<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8a98d69cdf7c6d6cb5ea4c1f9fe80b59
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/scripts/factura',
            1 => __DIR__ . '/../..' . '/scripts/usuario',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8a98d69cdf7c6d6cb5ea4c1f9fe80b59::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8a98d69cdf7c6d6cb5ea4c1f9fe80b59::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8a98d69cdf7c6d6cb5ea4c1f9fe80b59::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit8a98d69cdf7c6d6cb5ea4c1f9fe80b59::$classMap;

        }, null, ClassLoader::class);
    }
}
