<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit502e6c390691ca90dc9e7a677fd06012
{
    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Core\\Container' => __DIR__ . '/../..' . '/core/Container.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'ComposerAutoloaderInit502e6c390691ca90dc9e7a677fd06012' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit502e6c390691ca90dc9e7a677fd06012' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'DBConnection' => __DIR__ . '/../..' . '/core/database/DBConnection.php',
        'DBQuerryBuilder' => __DIR__ . '/../..' . '/core/database/DBQuerryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit502e6c390691ca90dc9e7a677fd06012::$classMap;

        }, null, ClassLoader::class);
    }
}
