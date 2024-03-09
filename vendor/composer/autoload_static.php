<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88d0c039da62de28b1c6bdefff22556f
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zakki\\Plural\\' => 13,
        ),
        'D' => 
        array (
            'Doctrine\\Inflector\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zakki\\Plural\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Doctrine\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Inflector',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit88d0c039da62de28b1c6bdefff22556f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88d0c039da62de28b1c6bdefff22556f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit88d0c039da62de28b1c6bdefff22556f::$classMap;

        }, null, ClassLoader::class);
    }
}