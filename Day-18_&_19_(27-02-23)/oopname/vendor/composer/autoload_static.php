<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite297facd833a27756448b6b2ce6db91c
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Obaydullaa\\Ooptest\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Obaydullaa\\Ooptest\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite297facd833a27756448b6b2ce6db91c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite297facd833a27756448b6b2ce6db91c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite297facd833a27756448b6b2ce6db91c::$classMap;

        }, null, ClassLoader::class);
    }
}
