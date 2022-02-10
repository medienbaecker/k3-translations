<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite8a2e71485afdd4daddb9b2232e6030d
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'daandelange\\Translations\\' => 25,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'daandelange\\Translations\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/classes',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite8a2e71485afdd4daddb9b2232e6030d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite8a2e71485afdd4daddb9b2232e6030d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite8a2e71485afdd4daddb9b2232e6030d::$classMap;

        }, null, ClassLoader::class);
    }
}