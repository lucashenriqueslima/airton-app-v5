<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42233fa150ed62b6b9d0e82cc54448e3
{
    public static $files = array (
        '6d78cb5df22cd7e488cf9ff6816fb672' => __DIR__ . '/../..' . '/source/Config.php',
        'fd96ca1a31a70b157304b8cf28b818b0' => __DIR__ . '/../..' . '/source/Helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42233fa150ed62b6b9d0e82cc54448e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42233fa150ed62b6b9d0e82cc54448e3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit42233fa150ed62b6b9d0e82cc54448e3::$classMap;

        }, null, ClassLoader::class);
    }
}