<?php
/**
 * Author: Abel Halo <zxz054321@163.com>
 */

/*
 * Constant definitions
 */
if (!defined('ROOT')) {
    define('ROOT', realpath(__DIR__.'/../'));
}

if (!defined('APP_PATH')) {
    define('APP_PATH', ROOT.'/app');
}

if (!defined('CONFIG_PATH')) {
    define('CONFIG_PATH', ROOT.'/config');
}

if (!defined('STORAGE_PATH')) {
    define('STORAGE_PATH', ROOT.'/storage');
}

/*
 * Autoloader
 */
require ROOT.'/vendor/autoload.php';

// Register some namespaces
$loader = new \Phalcon\Loader();
$loader->registerNamespaces([
    'App' => ROOT.'/app/',
]);
$loader->register();

return $loader;