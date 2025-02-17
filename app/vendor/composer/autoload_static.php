<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit874c5bf30c5f9b21b7fd558c65645ba4
{
    public static $files = array (
        'b33e3d135e5d9e47d845c576147bda89' => __DIR__ . '/..' . '/php-di/php-di/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'Laravel\\SerializableClosure\\' => 28,
        ),
        'I' => 
        array (
            'Invoker\\' => 8,
        ),
        'H' => 
        array (
            'Http\\' => 5,
        ),
        'D' => 
        array (
            'DI\\' => 3,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Laravel\\SerializableClosure\\' => 
        array (
            0 => __DIR__ . '/..' . '/laravel/serializable-closure/src',
        ),
        'Invoker\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/invoker/src',
        ),
        'Http\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Http',
        ),
        'DI\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/php-di/src',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit874c5bf30c5f9b21b7fd558c65645ba4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit874c5bf30c5f9b21b7fd558c65645ba4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit874c5bf30c5f9b21b7fd558c65645ba4::$classMap;

        }, null, ClassLoader::class);
    }
}
