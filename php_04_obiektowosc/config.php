<?php
// define('_SERVER_NAME', 'localhost:8080');
// define('_SERVER_URL', 'http://'._SERVER_NAME);
// define('_APP_ROOT', '/PSS/php_04_obiektowosc');
// define('_APP_URL', _SERVER_URL._APP_ROOT);
// define("_ROOT_PATH", dirname(__FILE__));

require_once "Config.class.php";

$conf = new Config();

$conf->root_path = dirname(__FILE__);
$conf->server_name = 'localhost:8080';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/PSS/php_04_obiektowosc';
$conf->app_url = $conf->server_url.$conf->app_root;


?>