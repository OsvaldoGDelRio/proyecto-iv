<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d33580d6da2164f861e5fba5529789b
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d33580d6da2164f861e5fba5529789b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d33580d6da2164f861e5fba5529789b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d33580d6da2164f861e5fba5529789b::$classMap;

        }, null, ClassLoader::class);
    }
}
