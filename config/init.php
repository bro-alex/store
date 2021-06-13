<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vender/store/core');
define("LIBS", ROOT . '/vender/store/core/libs');
define("CACHE", ROOT . '/vender/store/core/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'default');

//url главной страницы
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$app_path = preg_replace("#[^/]+$#",'', $app_path);
$app_path = str_replace('/public/','', $app_path);
define("PATH", $app_path);

define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';