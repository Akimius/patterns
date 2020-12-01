<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5622792a81427295989854c48c4aa68f
{
    public static $classMap = array (
        'ComposerAutoloaderInit5622792a81427295989854c48c4aa68f' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit5622792a81427295989854c48c4aa68f' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'structural\\decorator\\BasicInspection' => __DIR__ . '/../..' . '/structural/decorator/BasicInspection.php',
        'structural\\decorator\\CarServiceInterface' => __DIR__ . '/../..' . '/structural/decorator/CarServiceInterface.php',
        'structural\\decorator\\OilChange' => __DIR__ . '/../..' . '/structural/decorator/OilChange.php',
        'structural\\decorator\\TireRotation' => __DIR__ . '/../..' . '/structural/decorator/TireRotation.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit5622792a81427295989854c48c4aa68f::$classMap;

        }, null, ClassLoader::class);
    }
}