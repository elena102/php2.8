<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca27ff5280c735f904ad92cd887f3b74
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mrako\\Les\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mrako\\Les\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitca27ff5280c735f904ad92cd887f3b74::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca27ff5280c735f904ad92cd887f3b74::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitca27ff5280c735f904ad92cd887f3b74::$classMap;

        }, null, ClassLoader::class);
    }
}
