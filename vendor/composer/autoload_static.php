<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf5e7120af4212a85f52fe3b97f4421e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf5e7120af4212a85f52fe3b97f4421e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf5e7120af4212a85f52fe3b97f4421e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf5e7120af4212a85f52fe3b97f4421e::$classMap;

        }, null, ClassLoader::class);
    }
}
