<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a9e4dc9cb384913fce18a3f0f9e6ab0
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Opdracht5\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Opdracht5\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a9e4dc9cb384913fce18a3f0f9e6ab0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a9e4dc9cb384913fce18a3f0f9e6ab0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
