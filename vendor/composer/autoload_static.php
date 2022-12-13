<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit133cfe6b72d55732261bf05a2116e4f3
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Katri\\Vizitkarte\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Katri\\Vizitkarte\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit133cfe6b72d55732261bf05a2116e4f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit133cfe6b72d55732261bf05a2116e4f3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit133cfe6b72d55732261bf05a2116e4f3::$classMap;

        }, null, ClassLoader::class);
    }
}
