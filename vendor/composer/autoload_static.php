<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc5cfa51f4b3578da8ec4594fc9ecf43
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LinkedList\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LinkedList\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc5cfa51f4b3578da8ec4594fc9ecf43::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc5cfa51f4b3578da8ec4594fc9ecf43::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}