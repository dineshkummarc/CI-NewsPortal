<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit763f561ad2e2072418bcfa14214153b6
{
    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsstream/src/main/php',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit763f561ad2e2072418bcfa14214153b6::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit763f561ad2e2072418bcfa14214153b6::$classMap;

        }, null, ClassLoader::class);
    }
}
