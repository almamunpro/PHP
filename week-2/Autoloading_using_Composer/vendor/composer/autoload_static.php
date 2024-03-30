<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9b0262abd41b02349201e03fad07c36a
{
    public static $prefixesPsr0 = array (
        'F' => 
        array (
            'Faker' => 
            array (
                0 => __DIR__ . '/..' . '/fakerphp/faker/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit9b0262abd41b02349201e03fad07c36a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9b0262abd41b02349201e03fad07c36a::$classMap;

        }, null, ClassLoader::class);
    }
}