<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcc9c221597437be725cfa3a82dbdb2f0
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitcc9c221597437be725cfa3a82dbdb2f0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcc9c221597437be725cfa3a82dbdb2f0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcc9c221597437be725cfa3a82dbdb2f0::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
