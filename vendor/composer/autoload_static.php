<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8a18465ccdea3f34bf63deb7075476cd
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jehankandy\\PhpFull\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jehankandy\\PhpFull\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8a18465ccdea3f34bf63deb7075476cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8a18465ccdea3f34bf63deb7075476cd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8a18465ccdea3f34bf63deb7075476cd::$classMap;

        }, null, ClassLoader::class);
    }
}
