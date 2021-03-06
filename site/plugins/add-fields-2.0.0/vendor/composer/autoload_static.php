<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98b27033413c2529b3e6c831cfefa4f9
{
    public static $files = array (
        '1c83898f2b0e17b36175af8557e2bb31' => __DIR__ . '/../..' . '/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Steineri\\CustomAddFields\\' => 25,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Steineri\\CustomAddFields\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'Steineri\\CustomAddFields\\Plugin' => __DIR__ . '/../..' . '/src/Plugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit98b27033413c2529b3e6c831cfefa4f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98b27033413c2529b3e6c831cfefa4f9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit98b27033413c2529b3e6c831cfefa4f9::$classMap;

        }, null, ClassLoader::class);
    }
}
