<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit250215d760357d7a3ff7958d1b7fdfe2
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit250215d760357d7a3ff7958d1b7fdfe2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit250215d760357d7a3ff7958d1b7fdfe2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit250215d760357d7a3ff7958d1b7fdfe2::$classMap;

        }, null, ClassLoader::class);
    }
}