<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit667c66af57bca3e636bdb30357d6c674
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit667c66af57bca3e636bdb30357d6c674::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit667c66af57bca3e636bdb30357d6c674::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit667c66af57bca3e636bdb30357d6c674::$classMap;

        }, null, ClassLoader::class);
    }
}