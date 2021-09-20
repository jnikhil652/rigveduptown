<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite596c9948b30e6f87fa1451a092e52dd
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite596c9948b30e6f87fa1451a092e52dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite596c9948b30e6f87fa1451a092e52dd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite596c9948b30e6f87fa1451a092e52dd::$classMap;

        }, null, ClassLoader::class);
    }
}