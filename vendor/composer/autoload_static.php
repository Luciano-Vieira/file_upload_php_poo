<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68dde7b458ad2c2d32365650140d1d56
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit68dde7b458ad2c2d32365650140d1d56::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit68dde7b458ad2c2d32365650140d1d56::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
