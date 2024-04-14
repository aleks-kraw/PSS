<?php
// Skrypt kontrolera głównego uruchamiający określoną
// akcję użytkownika na podstawie przekazanego parametru

// //każdy punkt wejścia aplikacji (skrypt uruchamiany bezpośrednio przez klienta) musi dołączać konfigurację
// require_once dirname (__FILE__).'/../config.php';

// //1. pobierz nazwę akcji

// $action = $_REQUEST['action'];
require_once 'init.php';
//2. wykonanie akcji
switch ($action) {
	default : // 'calcView'
		// utwórz obiekt i uzyj
		$ctrl =  new app\controllers\Calc_ctrl();
		$ctrl->generateView ();
	break;
	case 'calc_kred' :
		// utwórz obiekt i uzyj
		$ctrl = new app\controllers\Calc_ctrl();
		$ctrl->process ();
	break;
	case 'another_calc' :
		$an_calc = new app\controllers\another_calc();
		$an_calc->generateView ();
		// utwórz obiekt i uzyj
	break;
	
}
