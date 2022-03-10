<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ded7f386c6c130a5427014f90b8fe46
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lvxiangjie\\Aw\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lvxiangjie\\Aw\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Lvxiangjie/Aw',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ded7f386c6c130a5427014f90b8fe46::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ded7f386c6c130a5427014f90b8fe46::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2ded7f386c6c130a5427014f90b8fe46::$classMap;

        }, null, ClassLoader::class);
    }
}
