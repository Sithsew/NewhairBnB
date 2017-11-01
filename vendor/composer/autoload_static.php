<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2303d810f319f0d41beee75b9decaeb0
{
    public static $classMap = array (
        'AccountService' => __DIR__ . '/../..' . '/app/business services/AccountService.php',
        'App\\Controllers\\AccountController' => __DIR__ . '/../..' . '/app/controllers/AccountController.php',
        'App\\Controllers\\SearchController' => __DIR__ . '/../..' . '/app/controllers/SearchController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Controllers\\WelcomeController' => __DIR__ . '/../..' . '/app/controllers/WelcomeController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\DataServices\\AccountDataService' => __DIR__ . '/../..' . '/app/data services/AccountDataService.php',
        'App\\DataServices\\SearchDataService' => __DIR__ . '/../..' . '/app/data services/SearchDataService.php',
        'App\\dataServices\\WelcomeDataService' => __DIR__ . '/../..' . '/app/data services/WelcomeDataService.php',
        'ComposerAutoloaderInit2303d810f319f0d41beee75b9decaeb0' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit2303d810f319f0d41beee75b9decaeb0' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'SearchService' => __DIR__ . '/../..' . '/app/business services/SearchService.php',
        'StoredProcedures' => __DIR__ . '/../..' . '/core/database/StoredProcedures.php',
        'WelcomeService' => __DIR__ . '/../..' . '/app/business services/WelcomeService.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit2303d810f319f0d41beee75b9decaeb0::$classMap;

        }, null, ClassLoader::class);
    }
}
