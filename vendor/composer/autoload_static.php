<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37dce80092d3857622e6273ad576e248
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OOP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OOP\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit37dce80092d3857622e6273ad576e248::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37dce80092d3857622e6273ad576e248::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37dce80092d3857622e6273ad576e248::$classMap;

        }, null, ClassLoader::class);
    }
}
