<?php
require_once dirname(__FILE__).'/core/Config.class.php';
$conf = new core\Config();
include dirname(__FILE__).'/config.php'; //ustaw konfigurację

function &getConf(){ global $conf; return $conf; }

//załaduj definicję klasy Messages i stwórz obiekt
require_once getConf()->root_path.'/core/Messages.class.php';
$msgs = new core\Messages();

function &getMessages(){ global $msgs; return $msgs; }

//przygotuj Smarty, twórz tylko raz - wtedy kiedy potrzeba
$smarty = null;	
function &getSmarty(){
	global $smarty;
	if (!isset($smarty)){
		//stwórz Smarty i przypisz konfigurację i messages
		include_once getConf()->root_path.'/lib/smarty/Smarty.class.php';
		$smarty = new Smarty();	
		//przypisz konfigurację i messages
		$smarty->assign('conf',getConf());
		$smarty->assign('msgs',getMessages());
		//zdefiniuj lokalizację widoków (aby nie podawać ścieżek przy ich załączaniu)
		$smarty->setTemplateDir(array(
			'one' => getConf()->root_path.'/app/views',
			'two' => getConf()->root_path.'/app/views/templates'
		));
	}
	return $smarty;
}

//załadowanie i stworzenie loader klas
require_once 'core/Class_loader.class.php';
$cloader= new core\Class_loader();
function &getLoader(){
	global $cloader;
	return $cloader;
}

require_once 'core/Router.class.php'; //załaduj i stwórz router
$router = new core\Router();
function &getRouter(): core\Router {
    global $router; return $router;
}

require_once 'core/functions.php';

session_start(); //uruchom lub kontynuuj sesję
$conf->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array(); //wczytaj role

$router->setAction( getFromRequest('action') );
