<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfefb7604c2c922f1432b7622a6f35be6
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'photos\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'photos\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfefb7604c2c922f1432b7622a6f35be6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfefb7604c2c922f1432b7622a6f35be6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfefb7604c2c922f1432b7622a6f35be6::$classMap;

        }, null, ClassLoader::class);
    }
}
