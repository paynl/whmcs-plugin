<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2377aae0ed277d247b422bcb1325752
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Paynl\\Whmcs\\' => 12,
            'Paynl\\' => 6,
        ),
        'C' => 
        array (
            'Curl\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Paynl\\Whmcs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Paynl\\' => 
        array (
            0 => __DIR__ . '/..' . '/paynl/sdk/src',
        ),
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2377aae0ed277d247b422bcb1325752::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2377aae0ed277d247b422bcb1325752::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
