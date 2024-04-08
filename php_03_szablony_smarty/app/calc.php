<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
//załaduj Smarty
require_once _ROOT_PATH.'/app/lib/smarty/Smarty.class.php';
// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.
//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
// include _ROOT_PATH.'/app/security/check.php';
// 1. pobranie parametrów
function getParams(&$form){
	$form['k'] = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
	$form['l'] = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
	$form['p'] = isset($_REQUEST['procent']) ? $_REQUEST ['procent'] : null;	
}
// $k = $_REQUEST ['kwota'];
// $l = $_REQUEST ['lata'];
// $p = $_REQUEST ['procent'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$infos,&$msgs){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($form['k']) && isset($form['l']) && isset($form['p']) ))	return false;	
	

	// $infos [] = 'Przekazano parametry.';
	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['k'] == "") $msgs [] = 'Nie podano kwoty';
	if ( $form['l'] == "") $msgs [] = 'Nie podano lat';
	if ( $form['p'] == "") $msgs [] = 'Nie podano oprocentowania';

	//nie ma sensu walidować dalej gdy brak parametrów
	if ( count($msgs)==0 ) {
		// sprawdzenie, czy $x i $y są liczbami całkowitymi
		if (! is_numeric( $form['k'] )) $msgs [] = 'Kwota nie jest liczbą';
		if (! is_numeric( $form['l'] )) $msgs [] = 'Lata nie są liczbą';
		if (! is_numeric( $form['p'] )) $msgs [] = 'Oprocentowanie nie jest liczbą';
	}
	
	if (count($msgs)>0) return false;
	else return true;

}

function process(&$form,&$infos,&$msgs,&$wynik){
	// global $role;
	$form['k'] = floatval($form['k']);
	$form['l'] = floatval($form['l']);
	$form['p'] = floatval($form['p']);
	$wynik= (float)($form['k']+($form['k']*($form['p']/100)))/($form['l']*12);
	

	
}
//definicja zmiennych kontrolera
$form = null;
$infos = array();
$messages = array();
$wynik = null;

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($form);
if ( validate($form,$infos,$messages) ){
	process($form,$infos,$messages,$wynik);
}
// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Kalkulator kredytowy');
$smarty->assign('page_header','Kalkulator kredytowy');



//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('wynik',$wynik);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc_view.tpl');
