<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdbbb00bdc2663ebec367baf00fe6b490
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sastrawi\\' => 
            array (
                0 => __DIR__ . '/..' . '/sastrawi/sastrawi/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitdbbb00bdc2663ebec367baf00fe6b490::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
