<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82080abc335061b203e644d41c2e85ad
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit82080abc335061b203e644d41c2e85ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82080abc335061b203e644d41c2e85ad::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
