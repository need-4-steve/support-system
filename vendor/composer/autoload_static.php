<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitucare
{
    public static $prefixLengthsPsr4 = array (
        'u' => 
        array (
            'ucare\\' => 6,
        ),
        's' => 
        array (
            'smartcat\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ucare\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'smartcat\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitucare::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitucare::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
