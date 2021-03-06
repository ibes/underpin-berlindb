<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb3f52c7053c4a7558e7a3b96c9ae06f
{
    public static $files = array (
        '248d8aba3e273b4aeb6e4f7c55f53921' => __DIR__ . '/../..' . '/underpin-berlin-db.php',
    );

    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Underpin_Berlin_DB\\' => 19,
        ),
        'B' => 
        array (
            'BerlinDB\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Underpin_Berlin_DB\\' => 
        array (
            0 => __DIR__ . '/../..',
        ),
        'BerlinDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/berlindb/core/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb3f52c7053c4a7558e7a3b96c9ae06f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb3f52c7053c4a7558e7a3b96c9ae06f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbb3f52c7053c4a7558e7a3b96c9ae06f::$classMap;

        }, null, ClassLoader::class);
    }
}
