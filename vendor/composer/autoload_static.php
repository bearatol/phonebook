<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3b660088d152a638ec2173378c12230
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'liw\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'liw\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static $classMap = array (
        'CreatenumberController' => __DIR__ . '/../..' . '/application/controllers/CreatenumberController.php',
        'Db\\Db' => __DIR__ . '/../..' . '/application/components/Db.php',
        'MainController' => __DIR__ . '/../..' . '/application/controllers/MainController.php',
        'Model\\Createnumber' => __DIR__ . '/../..' . '/application/models/Createnumber.php',
        'Model\\Main' => __DIR__ . '/../..' . '/application/models/Main.php',
        'NotfoundController' => __DIR__ . '/../..' . '/application/controllers/NotfoundController.php',
        'Other\\Other' => __DIR__ . '/../..' . '/application/components/other.php',
        'Router\\Router' => __DIR__ . '/../..' . '/application/components/Router.php',
        'View\\View' => __DIR__ . '/../..' . '/application/components/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3b660088d152a638ec2173378c12230::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3b660088d152a638ec2173378c12230::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita3b660088d152a638ec2173378c12230::$classMap;

        }, null, ClassLoader::class);
    }
}
