<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit96df608b28126f3586bb2552d659dc70
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Template\\' => 9,
        ),
        'S' => 
        array (
            'Strategy\\' => 9,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
        'D' => 
        array (
            'Decorator\\' => 10,
        ),
        'A' => 
        array (
            'Adapter\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Template\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/behavioral/template',
        ),
        'Strategy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/behavioral/strategy',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fakerphp/faker/src/Faker',
        ),
        'Decorator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/structural/decorator',
        ),
        'Adapter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/structural/adapter',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit96df608b28126f3586bb2552d659dc70::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit96df608b28126f3586bb2552d659dc70::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit96df608b28126f3586bb2552d659dc70::$classMap;

        }, null, ClassLoader::class);
    }
}
