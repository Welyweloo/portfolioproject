<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5956b4cd358ed4be7bc036bcc8c4327
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

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite5956b4cd358ed4be7bc036bcc8c4327::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5956b4cd358ed4be7bc036bcc8c4327::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite5956b4cd358ed4be7bc036bcc8c4327::$classMap;

        }, null, ClassLoader::class);
    }
}
